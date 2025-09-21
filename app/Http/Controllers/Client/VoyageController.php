<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Factory;
use Kreait\Firebase\Database;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class VoyageController extends Controller
{
    protected $database;

    public function __construct()
    {
        try {
            $firebase = (new Factory)
                ->withServiceAccount(base_path('firebase-credentials.json'))
                ->withDatabaseUri("https://arai-dioni-1b65f-default-rtdb.firebaseio.com/");

            $this->database = $firebase->createDatabase();
        } catch (\Exception $e) {
            Log::error('Firebase initialization error: ' . $e->getMessage());
        }
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            return $this->searchTrips($request);
        }

        return view('client.voyages', [
            'trajets' => [],
            'searchParams' => $request->all()
        ]);
    }

    /**
     * API endpoint pour récupérer tous les voyages
     */
    public function apiIndex(Request $request)
    {
        set_time_limit(60);
        try {
            Log::info('Début de la récupération des voyages depuis Firebase');
            
            $reference = $this->database->getReference('search');
            $snapshot = $reference->getSnapshot();
            
            if (!$snapshot->exists()) {
                Log::warning('Aucune donnée trouvée dans Firebase sous /search');
                return response()->json([
                    'success' => false,
                    'error' => 'Aucune donnée dans Firebase'
                ]);
            }
            
            $allData = $snapshot->getValue();
            $trips = [];
            
            Log::info('Nombre de voyages trouvés: ' . count($allData));
            
            foreach ($allData as $tripId => $trip) {
                if (!is_array($trip)) continue;
                
                $normalizedTrip = $this->normalizeTripData($trip);
                
                // CORRECTION: Gestion correcte des IDs
                $normalizedTrip['id'] = $tripId;
                $normalizedTrip['reserved_seats'] = [];
                $normalizedTrip['available_seats'] = $this->calculateTotalSeats($normalizedTrip);
                
                $trips[] = $normalizedTrip;
            }
            
            Log::info('Récupération des voyages terminée avec succès');
            return response()->json([
                'success' => true,
                'data' => $trips
            ]);
            
        } catch (\Exception $e) {
            Log::error('API voyages error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Erreur de chargement des voyages',
                'message' => $e->getMessage()
            ], 500);
        }
    }

    private function searchTrips(Request $request)
    {
        set_time_limit(60);
        try {
            Log::info('Recherche de voyages', $request->all());
            
            $depart = $request->input('depart');
            $destination = $request->input('destination');
            $date = $request->input('date');
            $typeVehicule = $request->input('vehicle_type');

            $reference = $this->database->getReference('search');
            $snapshot = $reference->getSnapshot();
            $trajets = [];

            if ($snapshot->exists()) {
                $allTrips = $snapshot->getValue();
                
                foreach ($allTrips as $tripId => $trip) {
                    if (!is_array($trip)) continue;

                    // Normaliser les données
                    $normalizedTrip = $this->normalizeTripData($trip);

                    // CORRECTION: Filtrage amélioré avec gestion de la casse et accents
                    $matchesDeparture = !$depart || $this->stringContains(
                        $this->normalizeString($normalizedTrip['departure'] ?? ''),
                        $this->normalizeString($depart)
                    );
                    
                    $matchesDestination = !$destination || $this->stringContains(
                        $this->normalizeString($normalizedTrip['arrival'] ?? ''),
                        $this->normalizeString($destination)
                    );
                    
                    $matchesDate = !$date || (
                        isset($normalizedTrip['date']) && 
                        $this->normalizeDate($normalizedTrip['date']) === $this->normalizeDate($date)
                    );
                    
                    $matchesVehicleType = !$typeVehicule || $this->matchVehicleType(
                        $normalizedTrip['vehicle_type'] ?? '',
                        $typeVehicule
                    );

                    if ($matchesDeparture && $matchesDestination && $matchesDate && $matchesVehicleType) {
                        $normalizedTrip['reserved_seats'] = [];
                        $normalizedTrip['available_seats'] = $this->calculateTotalSeats($normalizedTrip);
                        $normalizedTrip['id'] = $tripId;
                        $trajets[] = $normalizedTrip;
                    }
                }
            }

            Log::info('Recherche terminée: ' . count($trajets) . ' résultats');
            return response()->json([
                'success' => true,
                'trajets' => $trajets
            ]);
            
        } catch (\Exception $e) {
            Log::error('Search trips error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => 'Une erreur s\'est produite lors de la recherche',
                'trajets' => []
            ], 500);
        }
    }

    /**
     * Nouvelle méthode pour normaliser les chaînes (accents, casse)
     */
    private function normalizeString($string)
    {
        return mb_strtolower(trim($string), 'UTF-8');
    }



        public function ticket($reservationId)
    {
        try {
            // Récupérer les détails de la réservation depuis Firebase
            $reservationRef = $this->database->getReference('reservations/' . $reservationId);
            $reservationSnapshot = $reservationRef->getSnapshot();
            
            if (!$reservationSnapshot->exists()) {
                abort(404, 'Réservation non trouvée');
            }
            
            $reservation = $reservationSnapshot->getValue();
            $reservation['id'] = $reservationId;
            
            // Vérifier que l'utilisateur a le droit de voir ce ticket
            if (Auth::check()) {
                $userId = Auth::id();
                if (isset($reservation['user_id']) && $reservation['user_id'] != $userId) {
                    abort(403, 'Accès non autorisé à ce ticket');
                }
            }
            
            // Formater les données pour l'affichage
            $ticketData = [
                'reservation_id' => $reservationId,
                'client_nom' => $reservation['client_nom'] ?? 'Non spécifié',
                'client_email' => $reservation['client_email'] ?? 'Non spécifié',
                'client_telephone' => $reservation['client_telephone'] ?? 'Non spécifié',
                'departure' => $reservation['departure'] ?? 'Non spécifié',
                'arrival' => $reservation['arrival'] ?? 'Non spécifié',
                'date' => $reservation['date'] ?? 'Non spécifié',
                'time' => $reservation['time'] ?? $reservation['departure_time'] ?? 'Non spécifié',
                'sieges' => is_array($reservation['sieges']) ? 
                           implode(', ', $reservation['sieges']) : 
                           $reservation['sieges'] ?? 'Non spécifié',
                'price' => $reservation['price'] ?? 0,
                'vehicle_type' => $reservation['vehicle_type'] ?? 'Non spécifié',
                'statut' => $reservation['statut'] ?? 'confirmée',
                'date_reservation' => $reservation['date_reservation'] ?? now()->toDateString(),
                'created_at' => $reservation['created_at'] ?? now()->toISOString()
            ];
            
            return view('client.ticket', compact('ticketData'));
            
        } catch (\Exception $e) {
            Log::error('Ticket error: ' . $e->getMessage());
            abort(500, 'Erreur lors de l\'affichage du ticket');
        }
    }

    /**
     * Nouvelle méthode pour vérifier si une chaîne en contient une autre
     */
    private function stringContains($haystack, $needle)
    {
        if (empty($needle)) return true;
        return strpos($haystack, $needle) !== false;
    }

    /**
     * Nouvelle méthode pour normaliser les dates
     */
    private function normalizeDate($dateString)
    {
        try {
            return date('Y-m-d', strtotime($dateString));
        } catch (\Exception $e) {
            return $dateString;
        }
    }

    /**
     * Nouvelle méthode pour matcher les types de véhicules
     */
    private function matchVehicleType($tripVehicleType, $searchVehicleType)
    {
        $equivalents = [
            'taxi' => ['taxi', 'taxi-vip'],
            'taxi-vip' => ['taxi', 'taxi-vip'],
            'bus' => ['bus'],
            'minicar' => ['minicar', 'mini-car']
        ];

        $tripType = mb_strtolower($tripVehicleType);
        $searchType = mb_strtolower($searchVehicleType);

        if (isset($equivalents[$searchType])) {
            return in_array($tripType, $equivalents[$searchType]);
        }

        return $tripType === $searchType;
    }

    /**
     * Calcule le nombre total de sièges
     */
    private function calculateTotalSeats($trajet)
    {
        $vehicleType = mb_strtolower($trajet['vehicle_type'] ?? '');
        
        switch ($vehicleType) {
            case 'bus':
                return 53;
            case 'minicar':
            case 'mini-car':
                return 14;
            case 'taxi':
            case 'taxi-vip':
                return 6;
            default:
                return 0;
        }
    }

    /**
     * Normalise les données du trajet
     */
    private function normalizeTripData($trip)
    {
        $normalized = [];
        
        // Départ
        $normalized['departure'] = $trip['ville_depart'] ?? $trip['departure'] ?? $trip['depart'] ?? '';
        
        // Arrivée
        $normalized['arrival'] = $trip['ville_arrivee'] ?? $trip['arrival'] ?? $trip['arrivee'] ?? '';
        
        // Date - formatage uniforme
        $rawDate = $trip['date_depart'] ?? $trip['date'] ?? '';
        try {
            $normalized['date'] = date('Y-m-d', strtotime($rawDate));
        } catch (\Exception $e) {
            $normalized['date'] = $rawDate;
        }
        
        // Heure de départ - formatage uniforme
        $rawTime = $trip['heure_depart'] ?? $trip['departure_time'] ?? $trip['time'] ?? '';
        try {
            $normalized['departure_time'] = date('H:i', strtotime($rawTime));
        } catch (\Exception $e) {
            $normalized['departure_time'] = $rawTime;
        }
        
        // Prix
        if (isset($trip['prix'])) {
            $normalized['price'] = is_numeric($trip['prix']) ? (float)$trip['prix'] : 0;
        } else if (isset($trip['price'])) {
            $normalized['price'] = is_numeric($trip['price']) ? (float)$trip['price'] : 0;
        } else {
            $normalized['price'] = 0;
        }
        
        // Type de véhicule - normalisation
        $vehicleType = $trip['vehicule_type'] ?? $trip['vehicle_type'] ?? $trip['type_vehicule'] ?? '';
        $normalized['vehicle_type'] = $this->normalizeVehicleType($vehicleType);
        
        return $normalized;
    }

    /**
     * Normalise les types de véhicules
     */
    private function normalizeVehicleType($vehicleType)
    {
        $equivalents = [
            'taxi-vip' => 'taxi-vip',
            'taxi vip' => 'taxi-vip',
            'vip' => 'taxi-vip',
            'minicar' => 'minicar',
            'mini-car' => 'minicar',
            'mini car' => 'minicar',
            'bus' => 'bus',
            'autobus' => 'bus'
        ];

        $lowerType = mb_strtolower(trim($vehicleType));
        return $equivalents[$lowerType] ?? $vehicleType;
    }

    /**
     * Version optimisée de getReservedSeats (pour les réservations)
     */
    private function getReservedSeatsOptimized($trajet)
    {
        try {
            $reservedSeats = [];
            
            // Construire une clé unique pour ce trajet
            $tripKey = $this->getTripKey($trajet);
            
            $reservationsRef = $this->database->getReference('reservations');
            
            // CORRECTION: Toujours utiliser orderByChild avant equalTo
            $query = $reservationsRef
                ->orderByChild('trip_key')
                ->equalTo($tripKey);
                
            $reservationsSnapshot = $query->getSnapshot();
            
            if ($reservationsSnapshot->exists()) {
                $reservations = $reservationsSnapshot->getValue();
                
                foreach ($reservations as $reservation) {
                    if (!is_array($reservation)) continue;
                    
                    $seats = $reservation['sieges'] ?? $reservation['seats'] ?? [];
                    if (is_string($seats)) {
                        $seats = explode(',', $seats);
                    }
                    
                    $reservedSeats = array_merge($reservedSeats, (array)$seats);
                }
            }
            
            return array_unique($reservedSeats);
            
        } catch (\Exception $e) {
            Log::error('Get reserved seats error: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Génère une clé unique pour un trajet
     */
    private function getTripKey($trajet)
    {
        return sprintf('%s|%s|%s|%s',
            $trajet['departure'] ?? '',
            $trajet['arrival'] ?? '',
            $trajet['date'] ?? '',
            $trajet['departure_time'] ?? ''
        );
    }

    /**
     * Méthode pour mettre à jour les réservations avec la clé de trajet
     */
    public function updateReservationsWithTripKey()
    {
        try {
            Log::info('Début de la mise à jour des réservations avec trip_key');
            
            $reservationsRef = $this->database->getReference('reservations');
            
            // CORRECTION: Utiliser orderByChild pour éviter l'erreur
            $query = $reservationsRef->orderByChild('departure');
            $reservationsSnapshot = $query->getSnapshot();
            
            $updatedCount = 0;
            
            if ($reservationsSnapshot->exists()) {
                $reservations = $reservationsSnapshot->getValue();
                
                foreach ($reservations as $reservationId => $reservation) {
                    if (is_array($reservation)) {
                        // Créer une clé basée sur les données de la réservation
                        $tripKey = sprintf('%s|%s|%s|%s',
                            $reservation['departure'] ?? '',
                            $reservation['arrival'] ?? '',
                            $reservation['date'] ?? '',
                            $reservation['time'] ?? $reservation['departure_time'] ?? ''
                        );
                        
                        $this->database->getReference('reservations/' . $reservationId)
                            ->update(['trip_key' => $tripKey]);
                        $updatedCount++;
                    }
                }
            }
            
            Log::info("Mise à jour terminée: {$updatedCount} réservations mises à jour");
            
            return response()->json([
                'success' => true, 
                'message' => "{$updatedCount} réservations mises à jour avec la clé de trajet"
            ]);
            
        } catch (\Exception $e) {
            Log::error('Update reservations error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function reserver(Request $request)
    {
        try {
            $validated = $request->validate([
                'voyage_id' => 'required|string',
                'sieges' => 'required|array',
                'sieges.*' => 'string'
            ]);

            // Vérifier si les sièges sont disponibles
            $voyageRef = $this->database->getReference('search/' . $validated['voyage_id']);
            $voyageSnapshot = $voyageRef->getSnapshot();
            
            if (!$voyageSnapshot->exists()) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Voyage non trouvé'
                ], 404);
            }
            
            $voyage = $voyageSnapshot->getValue();
            $normalizedTrip = $this->normalizeTripData($voyage);
            
            // Vérification des sièges réservés (version optimisée)
            $reservedSeats = $this->getReservedSeatsOptimized($normalizedTrip);
            
            $requestedSeats = $validated['sieges'];
            $alreadyReserved = array_intersect($requestedSeats, $reservedSeats);
            
            if (!empty($alreadyReserved)) {
                return response()->json([
                    'success' => false, 
                    'message' => 'Certains sièges sont déjà réservés: ' . implode(', ', $alreadyReserved)
                ], 400);
            }

            // Créer la réservation
            $reservationData = [
                'voyage_id' => $validated['voyage_id'],
                'sieges' => $requestedSeats,
                'statut' => 'confirmée',
                'date_reservation' => now()->toDateString(),
                'created_at' => now()->toISOString(),
                'trip_key' => $this->getTripKey($normalizedTrip) // Ajouter la clé de trajet
            ];
            
            // Ajouter user_id si l'utilisateur est connecté
            if (Auth::check()) {
                $reservationData['user_id'] = Auth::id();
                $reservationData['client_nom'] = Auth::user()->name;
                $reservationData['client_email'] = Auth::user()->email;
                $reservationData['client_telephone'] = Auth::user()->phone;
            }

            // Ajouter les informations du voyage
            $reservationData['departure'] = $normalizedTrip['departure'];
            $reservationData['arrival'] = $normalizedTrip['arrival'];
            $reservationData['date'] = $normalizedTrip['date'];
            $reservationData['time'] = $normalizedTrip['departure_time'];
            $reservationData['price'] = $normalizedTrip['price'];
            $reservationData['vehicle_type'] = $normalizedTrip['vehicle_type'];

            // Sauvegarder dans Firebase
            $reservationsRef = $this->database->getReference('reservations');
            $newReservation = $reservationsRef->push($reservationData);
            $reservationId = $newReservation->getKey();

            return response()->json([
                'success' => true, 
                'reservation_id' => $reservationId,
                'message' => 'Réservation effectuée avec succès'
            ]);
            
        } catch (\Exception $e) {
            Log::error('Reservation error: ' . $e->getMessage());
            return response()->json([
                'success' => false, 
                'message' => 'Erreur lors de la réservation: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Méthode pour la recherche POST
     */
    public function search(Request $request)
    {
        return $this->searchTrips($request);
    }

    /**
     * Méthode de debug pour vérifier les données Firebase
     */
    public function debugTrips()
    {
        try {
            $reference = $this->database->getReference('search');
            $snapshot = $reference->getSnapshot();
            
            if (!$snapshot->exists()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Aucune donnée dans Firebase'
                ]);
            }
            
            $allData = $snapshot->getValue();
            
            return response()->json([
                'success' => true,
                'count' => count($allData),
                'data' => $allData
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtenir les détails d'un voyage spécifique
     */
    public function show($id)
    {
        try {
            $reference = $this->database->getReference('search/' . $id);
            $snapshot = $reference->getSnapshot();
            
            if (!$snapshot->exists()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Voyage non trouvé'
                ], 404);
            }
            
            $voyage = $snapshot->getValue();
            $voyageData = $this->normalizeTripData($voyage);
            
            // Pour les détails d'un voyage, on peut utiliser la version optimisée
            $voyageData['reserved_seats'] = $this->getReservedSeatsOptimized($voyageData);
            $voyageData['available_seats'] = $this->calculateTotalSeats($voyageData) - count($voyageData['reserved_seats']);
            
            return response()->json([
                'success' => true,
                'voyage' => $voyageData
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtenir les sièges réservés pour un voyage
     */
    public function getSiegesReserves($voyageId)
    {
        try {
            $reference = $this->database->getReference('search/' . $voyageId);
            $snapshot = $reference->getSnapshot();
            
            if (!$snapshot->exists()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Voyage non trouvé'
                ], 404);
            }
            
            $voyage = $snapshot->getValue();
            $voyageData = $this->normalizeTripData($voyage);
            
            // Version optimisée pour les sièges réservés
            $reservedSeats = $this->getReservedSeatsOptimized($voyageData);
            
            return response()->json([
                'success' => true,
                'reserved_seats' => $reservedSeats
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Obtenir les réservations d'un utilisateur
     */
    public function mesReservations()
    {
        try {
            if (!Auth::check()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Utilisateur non connecté'
                ], 401);
            }
            
            $userId = Auth::id();
            $reservationsRef = $this->database->getReference('reservations');
            
            // CORRECTION: Utiliser orderByChild avant equalTo
            $query = $reservationsRef->orderByChild('user_id')->equalTo($userId);
            $snapshot = $query->getSnapshot();
            
            $userReservations = [];
            if ($snapshot->exists()) {
                $reservations = $snapshot->getValue();
                foreach ($reservations as $reservationId => $reservation) {
                    if (is_array($reservation) && isset($reservation['user_id']) && $reservation['user_id'] == $userId) {
                        $reservation['id'] = $reservationId;
                        $userReservations[] = $reservation;
                    }
                }
            }
            
            return response()->json([
                'success' => true,
                'reservations' => $userReservations
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Annuler une réservation
     */
    public function annulerReservation($reservationId)
    {
        try {
            if (!Auth::check()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Utilisateur non connecté'
                ], 401);
            }
            
            $reference = $this->database->getReference('reservations/' . $reservationId);
            $snapshot = $reference->getSnapshot();
            
            if (!$snapshot->exists()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Réservation non trouvée'
                ], 404);
            }
            
            $reservation = $snapshot->getValue();
            
            if (!isset($reservation['user_id']) || $reservation['user_id'] != Auth::id()) {
                return response()->json([
                    'success' => false,
                    'error' => 'Non autorisé'
                ], 403);
            }
            
            // Marquer comme annulée
            $reference->update([
                'statut' => 'annulée',
                'updated_at' => now()->toISOString()
            ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Réservation annulée avec succès'
            ]);
            
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
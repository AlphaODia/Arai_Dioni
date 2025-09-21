<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Client\VoyageController;
use App\Http\Controllers\Client\ColisController;
use App\Http\Controllers\Client\HebergementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\GestionUtilisateursController;
use App\Http\Controllers\Admin\GestionReservationsController;
use App\Http\Controllers\Admin\GestionPaiementsController;
use App\Http\Controllers\Admin\GestionHebergementsController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\ReservationController;
use App\Http\Controllers\Client\TicketController;
use App\Http\Controllers\Client\SearchController;
use App\Http\Controllers\Client\SiegeController;
use App\Http\Controllers\Client\MesReservationsController;
use App\Http\Controllers\Client\AnnulationController;
use App\Http\Controllers\Client\RechercherVoyageController;
use App\Http\Controllers\Client\ReserverVoyageController;
use App\Http\Controllers\Client\DetailsVoyageController;
use App\Http\Controllers\Client\SiegesReservesController;
use App\Http\Controllers\Client\MesHebergementsController;
use App\Http\Controllers\Client\ReserverHebergementController;
use App\Http\Controllers\Client\ApiHebergementsController;
use App\Http\Controllers\Client\ShowHebergementController;
use App\Http\Controllers\Client\AboutUsController;
use App\Http\Controllers\Client\ContactUsController;
use App\Http\Controllers\Client\HomePageController;
use App\Http\Controllers\Client\ColisTrackingController;
use App\Http\Controllers\Client\ColisSearchController;
use App\Http\Controllers\Client\ColisDetailsController;
use App\Http\Controllers\Client\ColisCreateController;
use App\Http\Controllers\Client\ColisStoreController;
use App\Http\Controllers\Client\ColisIndexController;
use App\Http\Controllers\Client\ColisController as ClientColisController;
use App\Http\Controllers\Client\DashboardController as ClientDashboardController;
use App\Http\Controllers\Client\ProfileController as ClientProfileController;
use App\Http\Controllers\Client\AuthController as ClientAuthController;
use App\Http\Controllers\Client\RegisterController as ClientRegisterController;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\LogoutController as ClientLogoutController;
use App\Http\Controllers\Client\ForgotPasswordController as ClientForgotPasswordController;
use App\Http\Controllers\Client\ResetPasswordController as ClientResetPasswordController;   
use App\Http\Controllers\Client\VerificationController as ClientVerificationController;
use App\Http\Controllers\Client\ResendVerificationController as ClientResendVerificationController;
use App\Http\Controllers\Client\ColisTracking as ClientColisTracking;
use App\Http\Controllers\Client\ColisSearch as ClientColisSearch;
use App\Http\Controllers\Client\ColisDetails as ClientColisDetails;
use App\Http\Controllers\Client\ColisCreate as ClientColisCreate;
use App\Http\Controllers\Client\ColisStore as ClientColisStore;
use App\Http\Controllers\Client\ColisIndex as ClientColisIndex; 
use App\Http\Controllers\Client\Dashboard as ClientDashboard;
use App\Http\Controllers\Client\Profile as ClientProfile;
use App\Http\Controllers\Client\Auth as ClientAuth;
use App\Http\Controllers\Client\Register as ClientRegister;
use App\Http\Controllers\Client\Login as ClientLogin;
use App\Http\Controllers\Client\Logout as ClientLogout;
use App\Http\Controllers\Client\ForgotPassword as ClientForgotPassword;
use App\Http\Controllers\Client\ResetPassword as ClientResetPassword;
use App\Http\Controllers\Client\Verification as ClientVerification;
use App\Http\Controllers\Client\ResendVerification as ClientResendVerification; 
use App\Http\Controllers\Client\Home as ClientHome;
use App\Http\Controllers\Client\About as ClientAbout;
use App\Http\Controllers\Client\Contact as ClientContact;
use App\Http\Controllers\Client\Reservation as ClientReservation;
use App\Http\Controllers\Client\Ticket as ClientTicket;
use App\Http\Controllers\Client\Search as ClientSearch;
use App\Http\Controllers\Client\Siege as ClientSiege;
use App\Http\Controllers\Client\MesReservations as ClientMesReservations;
use App\Http\Controllers\Client\Annulation as ClientAnnulation;  
use App\Http\Controllers\Client\HebergementTicketController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AvisController;

// Routes publiques
Route::get('/', function () {
    return view('client.home');
})->name('home');

// Routes pour les voyages
Route::get('/voyages', [VoyageController::class, 'index'])->name('voyages');
Route::get('/', [VoyageController::class, 'index'])->name('home');
Route::post('/rechercher-voyages', [VoyageController::class, 'rechercher'])->name('voyages.rechercher');
Route::get('/voyages/{id}', [VoyageController::class, 'show'])->name('voyages.details');
Route::get('/sieges-reserves/{voyageId}', [VoyageController::class, 'siegesReserves'])->name('voyages.sieges-reserves');
Route::post('/reserver', [VoyageController::class, 'reserver'])->name('voyages.reserver');
Route::get('/ticket/{reservationId}', [VoyageController::class, 'ticket'])->name('voyages.ticket');
Route::get('/mes-reservations', [VoyageController::class, 'mesReservations'])->name('voyages.mes-reservations');
Route::post('/annuler-reservation/{reservationId}', [VoyageController::class, 'annulerReservation'])->name('voyages.annuler');

// Dans web.php
Route::get('/debug-firebase', [VoyageController::class, 'debugTrips']);
// Routes pour les hébergements
Route::get('/hebergements', [HebergementController::class, 'index'])->name('hebergements');
Route::post('/hebergements/reserver', [HebergementController::class, 'reserver'])->name('hebergements.reserver');
Route::get('/api/hebergements', [HebergementController::class, 'apiHebergements'])->name('hebergements.api');
Route::get('/hebergements/{id}', [HebergementController::class, 'show'])->name('hebergements.show');
// Route pour le ticket d'hébergement
Route::get('/hebergement/ticket/{reservationId}', [HebergementTicketController::class, 'show'])
    ->name('hebergement.ticket');


Route::get('/a-propos', [HomeController::class, 'about'])->name('about');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Routes pour les colis
Route::prefix('colis')->name('colis.')->group(function () {
    Route::get('/', [ColisController::class, 'index'])->name('index');
    Route::get('/create', [ColisController::class, 'create'])->name('create');
    Route::post('/', [ColisController::class, 'store'])->name('store');
    Route::get('/track', [ColisController::class, 'track'])->name('track');
    Route::post('/track', [ColisController::class, 'search'])->name('search');
    Route::get('/{id}', [ColisController::class, 'show'])->name('show');
});

// Routes de dashboard par rôle
Route::prefix('client')->name('client.')->middleware(['auth', 'role:client'])->group(function() {
    Route::get('/dashboard', function() {
        return view('client.dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function() {
    Route::get('/dashboard', function() {
        return view('admin.dashboard');
    })->name('dashboard');
});

Route::prefix('agent-voyage')->name('agent_voyage.')->middleware(['auth', 'role:agent_de_voyage'])->group(function() {
    Route::get('/dashboard', function() {
        return view('agent_voyage.dashboard');
    })->name('dashboard');
});

// Route dashboard générale (fallback)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Routes de profil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes Admin
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('utilisateurs', GestionUtilisateursController::class);
    Route::resource('reservations', GestionReservationsController::class);
    Route::resource('paiements', GestionPaiementsController::class);
    Route::resource('hebergements', GestionHebergementsController::class);
    
    // Routes supplémentaires
    Route::get('statistiques', [DashboardController::class, 'statistiques'])->name('statistiques');
    Route::get('audit', [DashboardController::class, 'audit'])->name('audit');
});


// Dans web.php
Route::post('/rechercher-voyages', [VoyageController::class, 'search'])->name('voyages.search');



// Routes pour la newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
Route::get('/newsletter/subscribers', [NewsletterController::class, 'getSubscribers'])->name('newsletter.subscribers')->middleware('auth');

// Routes pour les avis
Route::post('/avis/store', [AvisController::class, 'store'])->name('avis.store');
Route::get('/avis', [AvisController::class, 'index'])->name('avis.index')->middleware('auth');
Route::get('/avis/approved', [AvisController::class, 'getApprovedAvis'])->name('avis.approved');



require __DIR__.'/auth.php';
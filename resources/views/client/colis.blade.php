@extends('layouts.client.app')

@section('title', 'Envoi de Colis - AriDioni Logistique')

@section('content')
<div class="min-h-screen bg-gray-50" id="main-container">
    <!-- Hero Section -->
    <div class="bg-gradient-to-r from-blue-600 to-blue-800 py-16" id="hero-section">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Envoi de Colis Professionnel</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">Envoyez vos colis entre la Guinée et le Sénégal en toute sécurité avec notre service de suivi en temps réel</p>
        </div>
    </div>

    <!-- Liquid Glass Toggle Button -->
    <div class="fixed top-20 right-4 z-50">
        <button id="liquid-glass-toggle" class="p-3 rounded-full bg-white shadow-lg hover:shadow-xl transition-all duration-300">
            <svg id="glass-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
            </svg>
            <svg id="no-glass-icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Main Content -->
    <div class="container mx-auto px-4 py-12">
        <!-- Progress Steps -->
        <div class="mb-12">
            <div class="flex justify-between relative">
                <div class="absolute top-1/2 h-1 bg-gray-200 w-full -z-10"></div>
                <div class="absolute top-1/2 h-1 bg-blue-600 w-1/3 -z-10" id="progress-bar"></div>
                
                @foreach(['Informations', 'Options', 'Paiement', 'Confirmation'] as $index => $step)
                <div class="step flex flex-col items-center {{ $index === 0 ? 'active' : '' }}">
                    <div class="w-10 h-10 rounded-full {{ $index === 0 ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-600' }} flex items-center justify-center mb-2">
                        <span>{{ $index + 1 }}</span>
                    </div>
                    <span class="text-sm font-medium {{ $index === 0 ? 'text-blue-600' : 'text-gray-600' }}">{{ $step }}</span>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Form Sections -->
        <form id="colis-form" method="POST" action="{{ route('colis.store') }}" class="bg-white rounded-xl shadow-lg overflow-hidden liquid-glass-container">
            @csrf
            
            <!-- Step 1: Sender & Receiver Info -->
            <div class="p-8 border-b border-gray-200" id="step-1">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Informations sur l'expédition</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <!-- Sender Info -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-user text-sm"></i>
                            </div>
                            Expéditeur
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="sender_name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet*</label>
                                <input type="text" id="sender_name" name="sender_name" value="{{ old('sender_name') }}" 
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                @error('sender_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="sender_address" class="block text-sm font-medium text-gray-700 mb-1">Adresse*</label>
                                <input type="text" id="sender_address" name="sender_address" value="{{ old('sender_address') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                @error('sender_address')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="sender_city" class="block text-sm font-medium text-gray-700 mb-1">Ville*</label>
                                    <select id="sender_city" name="sender_city" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="">Sélectionner</option>
                                        <option value="Conakry" {{ old('sender_city') == 'Conakry' ? 'selected' : '' }}>Conakry</option>
                                        <option value="Labé" {{ old('sender_city') == 'Labé' ? 'selected' : '' }}>Labé</option>
                                        <option value="Kankan" {{ old('sender_city') == 'Kankan' ? 'selected' : '' }}>Kankan</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="sender_phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone*</label>
                                    <input type="tel" id="sender_phone" name="sender_phone" value="{{ old('sender_phone') }}"
                                           class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="sender_email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="sender_email" name="sender_email" value="{{ old('sender_email') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                    
                    <!-- Receiver Info -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-user-tag text-sm"></i>
                            </div>
                            Destinataire
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="recipient_name" class="block text-sm font-medium text-gray-700 mb-1">Nom complet*</label>
                                <input type="text" id="recipient_name" name="recipient_name" value="{{ old('recipient_name') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                @error('recipient_name')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div>
                                <label for="recipient_address" class="block text-sm font-medium text-gray-700 mb-1">Adresse*</label>
                                <input type="text" id="recipient_address" name="recipient_address" value="{{ old('recipient_address') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                @error('recipient_address')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="recipient_city" class="block text-sm font-medium text-gray-700 mb-1">Ville*</label>
                                    <select id="recipient_city" name="recipient_city" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                        <option value="">Sélectionner</option>
                                        <option value="Dakar" {{ old('recipient_city') == 'Dakar' ? 'selected' : '' }}>Dakar</option>
                                        <option value="Thiès" {{ old('recipient_city') == 'Thiès' ? 'selected' : '' }}>Thiès</option>
                                        <option value="Saint-Louis" {{ old('recipient_city') == 'Saint-Louis' ? 'selected' : '' }}>Saint-Louis</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="recipient_phone" class="block text-sm font-medium text-gray-700 mb-1">Téléphone*</label>
                                    <input type="tel" id="recipient_phone" name="recipient_phone" value="{{ old('recipient_phone') }}"
                                           class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                </div>
                            </div>
                            
                            <div>
                                <label for="recipient_email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                <input type="email" id="recipient_email" name="recipient_email" value="{{ old('recipient_email') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex justify-end">
                    <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors next-step">
                        Suivant <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            
            <!-- Step 2: Package Details -->
            <div class="p-8 border-b border-gray-200 hidden" id="step-2">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Détails du colis</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-box-open text-sm"></i>
                            </div>
                            Caractéristiques
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="package_type" class="block text-sm font-medium text-gray-700 mb-1">Type de colis*</label>
                                <select id="package_type" name="package_type" class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                    <option value="">Sélectionner</option>
                                    <option value="Document" {{ old('package_type') == 'Document' ? 'selected' : '' }}>Document</option>
                                    <option value="Paquet" {{ old('package_type') == 'Paquet' ? 'selected' : '' }}>Paquet</option>
                                    <option value="Carton" {{ old('package_type') == 'Carton' ? 'selected' : '' }}>Carton</option>
                                    <option value="Palette" {{ old('package_type') == 'Palette' ? 'selected' : '' }}>Palette</option>
                                </select>
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Poids (kg)*</label>
                                    <input type="number" step="0.1" id="weight" name="weight" value="{{ old('weight') }}"
                                           class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                                    @error('weight')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Dimensions (cm)</label>
                                    <div class="flex gap-2">
                                        <input type="number" placeholder="L" name="length" value="{{ old('length') }}"
                                               class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                                        <input type="number" placeholder="l" name="width" value="{{ old('width') }}"
                                               class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                                        <input type="number" placeholder="H" name="height" value="{{ old('height') }}"
                                               class="flex-1 border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label for="declared_value" class="block text-sm font-medium text-gray-700 mb-1">Valeur déclarée (GNF)</label>
                                <input type="number" id="declared_value" name="declared_value" value="{{ old('declared_value') }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500">
                            </div>
                            
                            <div>
                                <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description du contenu*</label>
                                <textarea id="description" name="description" 
                                          class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" rows="3" required>{{ old('description') }}</textarea>
                                @error('description')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                            <div class="w-8 h-8 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mr-2">
                                <i class="fas fa-calendar-alt text-sm"></i>
                            </div>
                            Options d'expédition
                        </h3>
                        
                        <div class="space-y-4">
                            <div>
                                <label for="pickup_date" class="block text-sm font-medium text-gray-700 mb-1">Date d'enlèvement*</label>
                                <input type="date" id="pickup_date" name="pickup_date" value="{{ old('pickup_date', date('Y-m-d')) }}"
                                       class="w-full border border-gray-300 rounded-md px-4 py-2 focus:ring-blue-500 focus:border-blue-500" required>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Service*</label>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="radio" id="standard" name="service_type" value="standard" 
                                               class="h-4 w-4 text-blue-600 focus:ring-blue-500" 
                                               {{ old('service_type', 'standard') == 'standard' ? 'checked' : '' }}>
                                        <label for="standard" class="ml-2 block text-sm text-gray-700">
                                            Standard (3-5 jours) - 250 000 GNF
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="radio" id="express" name="service_type" value="express"
                                               class="h-4 w-4 text-blue-600 focus:ring-blue-500"
                                               {{ old('service_type') == 'express' ? 'checked' : '' }}>
                                        <label for="express" class="ml-2 block text-sm text-gray-700">
                                            Express (1-2 jours) - 400 000 GNF
                                        </label>
                                    </div>
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Options supplémentaires</label>
                                <div class="space-y-2">
                                    <div class="flex items-center">
                                        <input type="checkbox" id="insurance" name="insurance" value="1"
                                               class="h-4 w-4 text-blue-600 focus:ring-blue-500"
                                               {{ old('insurance') ? 'checked' : '' }}>
                                        <label for="insurance" class="ml-2 block text-sm text-gray-700">
                                            Assurance (+2% de la valeur déclarée)
                                        </label>
                                    </div>
                                    <div class="flex items-center">
                                        <input type="checkbox" id="fragile" name="fragile" value="1"
                                               class="h-4 w-4 text-blue-600 focus:ring-blue-500"
                                               {{ old('fragile') ? 'checked' : '' }}>
                                        <label for="fragile" class="ml-2 block text-sm text-gray-700">
                                            Colis fragile (+50 000 GNF)
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex justify-between">
                    <button type="button" class="text-blue-600 hover:text-blue-800 px-4 py-2 rounded-md transition-colors prev-step">
                        <i class="fas fa-arrow-left mr-2"></i> Retour
                    </button>
                    <button type="button" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors next-step">
                        Suivant <i class="fas fa-arrow-right ml-2"></i>
                    </button>
                </div>
            </div>
            
            <!-- Step 3: Payment -->
            <div class="p-8 border-b border-gray-200 hidden" id="step-3">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Paiement</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Récapitulatif</h3>
                        
                        <div class="bg-gray-50 rounded-lg p-4 mb-4">
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Expédition Standard</span>
                                <span class="font-medium">250 000 GNF</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Assurance</span>
                                <span class="font-medium" id="insurance-cost">0 GNF</span>
                            </div>
                            <div class="flex justify-between mb-2">
                                <span class="text-gray-600">Frais de manutention</span>
                                <span class="font-medium">25 000 GNF</span>
                            </div>
                            <div class="border-t border-gray-200 pt-2 mt-2">
                                <div class="flex justify-between">
                                    <span class="font-semibold">Total</span>
                                    <span class="font-bold text-blue-600" id="total-cost">275 000 GNF</span>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 border border-blue-100 rounded-lg p-4">
                            <h4 class="font-semibold text-blue-800 mb-2">Numéro de suivi</h4>
                            <p class="text-blue-600 font-mono bg-white p-2 rounded" id="tracking-number-preview">AD{{ strtoupper(uniqid()) }}</p>
                            <p class="text-sm text-gray-600 mt-2">Vous recevrez ce numéro par email après confirmation du paiement.</p>
                        </div>
                    </div>
                    
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-4">Méthode de paiement</h3>
                        
                        <div class="space-y-4">
                            <div class="border border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" id="orange-money" name="payment_method" value="orange_money" 
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500" checked>
                                    <label for="orange-money" class="ml-2 block text-sm text-gray-700 flex items-center">
                                        <img src="https://www.orange-money.com/static/img/logo-orange-money.png" alt="Orange Money" class="h-6 ml-2">
                                    </label>
                                </div>
                            </div>
                            
                            <div class="border border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" id="wave" name="payment_method" value="wave"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                    <label for="wave" class="ml-2 block text-sm text-gray-700 flex items-center">
                                        <img src="https://www.wave.com/wp-content/uploads/2021/09/wave-logo.svg" alt="Wave" class="h-6 ml-2">
                                    </label>
                                </div>
                            </div>
                            
                            <div class="border border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" id="bank-transfer" name="payment_method" value="bank_transfer"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                    <label for="bank-transfer" class="ml-2 block text-sm text-gray-700">
                                        Virement bancaire
                                    </label>
                                </div>
                            </div>
                            
                            <div class="border border-gray-300 rounded-lg p-4 hover:border-blue-500 transition-colors">
                                <div class="flex items-center">
                                    <input type="radio" id="cash" name="payment_method" value="cash"
                                           class="h-4 w-4 text-blue-600 focus:ring-blue-500">
                                    <label for="cash" class="ml-2 block text-sm text-gray-700">
                                        Paiement en agence
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8 flex justify-between">
                    <button type="button" class="text-blue-600 hover:text-blue-800 px-4 py-2 rounded-md transition-colors prev-step">
                        <i class="fas fa-arrow-left mr-2"></i> Retour
                    </button>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors">
                        Payer maintenant <i class="fas fa-lock ml-2"></i>
                    </button>
                </div>
            </div>
        </form>
        
        <!-- Step 4: Confirmation (Hidden initially) -->
        <div class="p-8 text-center hidden" id="step-4">
            <div class="max-w-md mx-auto">
                <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check text-3xl"></i>
                </div>
                
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Commande confirmée !</h2>
                <p class="text-gray-600 mb-6">Votre envoi de colis a été enregistré avec succès.</p>
                
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-4 mb-6">
                    <h4 class="font-semibold text-blue-800 mb-2">Numéro de suivi</h4>
                    <p class="text-blue-600 font-mono text-lg bg-white p-2 rounded" id="final-tracking-number">AD{{ strtoupper(uniqid()) }}</p>
                    <p class="text-sm text-gray-600 mt-2">Vous recevrez une confirmation par email avec les détails.</p>
                </div>
                
                <div class="flex justify-center gap-4">
                    <a href="#" class="bg-white border border-gray-300 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-50 transition-colors">
                        <i class="fas fa-print mr-2"></i> Imprimer
                    </a>
                    <a href="{{ route('colis.track') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-md transition-colors">
                        <i class="fas fa-box-open mr-2"></i> Suivre mon colis
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Styles pour l'effet Liquid Glass -->
<style>
    .liquid-glass-enabled {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%) !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(12px);
        -webkit-backdrop-filter: blur(12px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }
    
    .liquid-glass-container.liquid-glass-enabled .step.active div {
        background-color: rgba(255, 255, 255, 0.2) !important;
        color: white !important;
        border: 1px solid rgba(255, 255, 255, 0.3);
    }
    
    .liquid-glass-container.liquid-glass-enabled .step.active span {
        color: white !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled input,
    .liquid-glass-container.liquid-glass-enabled select,
    .liquid-glass-container.liquid-glass-enabled textarea {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2) !important;
        color: white !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled input::placeholder,
    .liquid-glass-container.liquid-glass-enabled textarea::placeholder {
        color: rgba(255, 255, 255, 0.6) !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled label {
        color: rgba(255, 255, 255, 0.9) !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled h2,
    .liquid-glass-container.liquid-glass-enabled h3 {
        color: white !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled .bg-gray-50 {
        background: rgba(255, 255, 255, 0.1) !important;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .liquid-glass-container.liquid-glass-enabled .bg-blue-50 {
        background: rgba(59, 130, 246, 0.2) !important;
        border: 1px solid rgba(59, 130, 246, 0.3);
    }
    
    .liquid-glass-container.liquid-glass-enabled .text-gray-600,
    .liquid-glass-container.liquid-glass-enabled .text-gray-700 {
        color: rgba(255, 255, 255, 0.8) !important;
    }
    
    .liquid-glass-container.liquid-glass-enabled .border-gray-200,
    .liquid-glass-container.liquid-glass-enabled .border-gray-300 {
        border-color: rgba(255, 255, 255, 0.2) !important;
    }
</style>

<!-- JavaScript for multi-step form and Liquid Glass effect -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const steps = document.querySelectorAll('.step');
        const formSteps = document.querySelectorAll('[id^="step-"]');
        const progressBar = document.getElementById('progress-bar');
        const nextButtons = document.querySelectorAll('.next-step');
        const prevButtons = document.querySelectorAll('.prev-step');
        const form = document.getElementById('colis-form');
        const toggleButton = document.getElementById('liquid-glass-toggle');
        const glassIcon = document.getElementById('glass-icon');
        const noGlassIcon = document.getElementById('no-glass-icon');
        const mainContainer = document.getElementById('main-container');
        const heroSection = document.getElementById('hero-section');
        const liquidGlassContainers = document.querySelectorAll('.liquid-glass-container');
        let currentStep = 1;
        let liquidGlassEnabled = false;
        
        // Toggle Liquid Glass effect
        toggleButton.addEventListener('click', function() {
            liquidGlassEnabled = !liquidGlassEnabled;
            
            if (liquidGlassEnabled) {
                // Activer l'effet Liquid Glass
                mainContainer.classList.add('liquid-glass-enabled');
                heroSection.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
                liquidGlassContainers.forEach(container => {
                    container.classList.add('liquid-glass-enabled');
                });
                glassIcon.classList.add('hidden');
                noGlassIcon.classList.remove('hidden');
            } else {
                // Désactiver l'effet Liquid Glass
                mainContainer.classList.remove('liquid-glass-enabled');
                heroSection.style.background = '';
                liquidGlassContainers.forEach(container => {
                    container.classList.remove('liquid-glass-enabled');
                });
                glassIcon.classList.remove('hidden');
                noGlassIcon.classList.add('hidden');
            }
        });
        
        // Calculate costs
        function calculateCosts() {
            const serviceType = document.querySelector('input[name="service_type"]:checked').value;
            const declaredValue = parseFloat(document.getElementById('declared_value').value) || 0;
            const insuranceChecked = document.getElementById('insurance').checked;
            const fragileChecked = document.getElementById('fragile').checked;
            
            let baseCost = serviceType === 'express' ? 400000 : 250000;
            let insuranceCost = insuranceChecked ? declaredValue * 0.02 : 0;
            let fragileCost = fragileChecked ? 50000 : 0;
            let handlingCost = 25000;
            
            document.getElementById('insurance-cost').textContent = insuranceCost.toLocaleString('fr-FR') + ' GNF';
            
            const totalCost = baseCost + insuranceCost + fragileCost + handlingCost;
            document.getElementById('total-cost').textContent = totalCost.toLocaleString('fr-FR') + ' GNF';
        }
        
        // Next button click handler
        nextButtons.forEach(button => {
            button.addEventListener('click', function() {
                if (validateStep(currentStep)) {
                    currentStep++;
                    updateForm();
                    
                    // Update tracking number preview
                    if (currentStep === 3) {
                        document.getElementById('final-tracking-number').textContent = 
                            document.getElementById('tracking-number-preview').textContent;
                    }
                    
                    // Calculate costs when reaching payment step
                    if (currentStep === 3) {
                        calculateCosts();
                    }
                }
            });
        });
        
        // Previous button click handler
        prevButtons.forEach(button => {
            button.addEventListener('click', function() {
                currentStep--;
                updateForm();
            });
        });
        
        // Form submission handler
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Show loading state
            const submitButton = form.querySelector('button[type="submit"]');
            const originalText = submitButton.innerHTML;
            submitButton.disabled = true;
            submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i> Traitement...';
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                currentStep++;
                updateForm();
                submitButton.disabled = false;
                submitButton.innerHTML = originalText;
            }, 1500);
        });
        
        // Validate current step before proceeding
        function validateStep(step) {
            let isValid = true;
            
            // Validate step 1
            if (step === 1) {
                const requiredFields = [
                    'sender_name', 'sender_address', 'sender_city', 'sender_phone',
                    'recipient_name', 'recipient_address', 'recipient_city', 'recipient_phone'
                ];
                
                requiredFields.forEach(field => {
                    const element = document.querySelector(`[name="${field}"]`);
                    if (!element.value.trim()) {
                        element.classList.add('border-red-500');
                        isValid = false;
                    } else {
                        element.classList.remove('border-red-500');
                    }
                });
            }
            
            // Validate step 2
            if (step === 2) {
                const requiredFields = ['package_type', 'weight', 'description', 'pickup_date'];
                
                requiredFields.forEach(field => {
                    const element = document.querySelector(`[name="${field}"]`);
                    if (!element.value.trim()) {
                        element.classList.add('border-red-500');
                        isValid = false;
                    } else {
                        element.classList.remove('border-red-500');
                    }
                });
            }
            
            if (!isValid) {
                alert('Veuillez remplir tous les champs obligatoires marqués d\'un astérisque (*)');
            }
            
            return isValid;
        }
        
        // Update form display based on current step
        function updateForm() {
            // Hide all steps
            formSteps.forEach(step => {
                step.classList.add('hidden');
            });
            
            // Show current step
            document.getElementById(`step-${currentStep}`).classList.remove('hidden');
            
            // Show confirmation step if form is completed
            if (currentStep > 3) {
                document.getElementById('step-4').classList.remove('hidden');
            }
            
            // Update progress bar
            progressBar.style.width = `${((currentStep - 1) / 3) * 100}%`;
            
            // Update step indicators
            steps.forEach((step, index) => {
                if (index < currentStep) {
                    step.classList.add('active');
                    step.querySelector('div').classList.remove('bg-gray-200', 'text-gray-600');
                    step.querySelector('div').classList.add('bg-blue-600', 'text-white');
                    step.querySelector('span').classList.remove('text-gray-600');
                    step.querySelector('span').classList.add('text-blue-600');
                } else {
                    step.classList.remove('active');
                    step.querySelector('div').classList.add('bg-gray-200', 'text-gray-600');
                    step.querySelector('div').classList.remove('bg-blue-600', 'text-white');
                    step.querySelector('span').classList.add('text-gray-600');
                    step.querySelector('span').classList.remove('text-blue-600');
                }
            });
        }
        
        // Event listeners for cost calculation
        document.getElementById('insurance').addEventListener('change', calculateCosts);
        document.getElementById('fragile').addEventListener('change', calculateCosts);
        document.getElementById('declared_value').addEventListener('input', calculateCosts);
        document.querySelectorAll('input[name="service_type"]').forEach(radio => {
            radio.addEventListener('change', calculateCosts);
        });
    });
</script>
@endsection
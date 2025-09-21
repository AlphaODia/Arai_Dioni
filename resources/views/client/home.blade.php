<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport Guinée-Sénégal - Accueil</title>
    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.22.0/firebase-database-compat.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        'primary-dark': '#4338ca',
                        secondary: '#7c3aed',
                        light: '#f3f4f6',
                        dark: '#1f2937',
                        success: '#10b981',
                        warning: '#f59e0b',
                        danger: '#ef4444',
                    },
                    fontFamily: {
                        poppins: ['Poppins', 'sans-serif'],
                    },
                }
            }
        }
    </script>
    <style>
        :root {
            --primary: #4f46e5;
            --primary-dark: #4338ca;
            --secondary: #7c3aed;
            --light: #f3f4f6;
            --dark: #1f2937;
            --success: #10b981;
            --warning: #f59e0b;
            --danger: #ef4444;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(to bottom, #f3f4f6, #e5e7eb);
            color: #1f2937;
            min-height: 100vh;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Header Styles */
        header {
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
        }
        
        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }
        
        .logo img {
            height: 48px;
            width: 48px;
            object-fit: contain;
        }
        
        .logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        nav {
            display: flex;
            gap: 2rem;
        }
        
        nav a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        nav a:hover {
            color: var(--primary);
        }
        
        .auth-buttons {
            display: flex;
            gap: 1rem;
        }
        
        .btn {
            padding: 0.5rem 1.5rem;
            border-radius: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
        }
        
        .btn-outline {
            border: 1px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }
        
        .btn-outline:hover {
            background: var(--primary);
            color: white;
        }
        
        .btn-primary {
            background: var(--primary);
            color: white;
            border: none;
        }
        
        .btn-primary:hover {
            background: var(--primary-dark);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 3rem 0;
            margin-bottom: 2rem;
        }
        
        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            max-width: 600px;
        }
        
        /* Improved Search Form */
        .search-form {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 100%;
        }
        
        .form-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .form-group {
            flex: 1;
            min-width: 200px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .search-input, .search-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        
        .search-input:focus, .search-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
        }
        
        .btn-primary {
            background: var(--secondary);
            color: white;
            border: none;
            padding: 0.75rem 2rem;
            border-radius: 0.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
            width: 100%;
            margin-top: 0.5rem;
        }
        
        .btn-primary:hover {
            background: #6d28d9;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.15);
        }
        
        /* Main Content */
        .main-content {
            padding: 2rem 0;
        }
        
        .section-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 2rem;
            text-align: center;
        }
        
        /* Trip Cards */
        .trips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .trip-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .trip-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .trip-image {
            height: 200px;
            overflow: hidden;
        }
        
        .trip-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .trip-card:hover .trip-image img {
            transform: scale(1.05);
        }
        
        .trip-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 9999px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        
        .trip-details {
            padding: 1.5rem;
        }
        
        .trip-route {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .trip-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: #6b7280;
            margin-bottom: 0.5rem;
            font-size: 0.875rem;
        }
        
        .trip-meta {
            display: flex;
            justify-content: space-between;
            margin: 1rem 0;
        }
        
        .trip-meta-item {
            display: flex;
            align-items: center;
            gap: 0.25rem;
            color: #6b7280;
            font-size: 0.875rem;
        }
        
        .trip-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid #e5e7eb;
            padding-top: 1rem;
            margin-top: 1rem;
        }
        
        .price-from {
            font-size: 0.875rem;
            color: #6b7280;
        }
        
        .price-amount {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--primary);
        }
        
        /* Why Choose Us Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-4px);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(to right, #ddd6fe, #c4b5fd);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
        }
        
        .feature-icon i {
            font-size: 1.5rem;
            color: var(--primary);
        }
        
        .feature-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }
        
        .feature-description {
            color: #6b7280;
        }
        
        /* Testimonials */
        .testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 1rem;
            padding: 1.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        .testimonial-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        
        .testimonial-avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            overflow: hidden;
        }
        
        .testimonial-avatar img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .testimonial-name {
            font-weight: 600;
            color: var(--dark);
        }
        
        .testimonial-rating {
            color: #f59e0b;
            margin-top: 0.25rem;
        }
        
        .testimonial-text {
            color: #6b7280;
            font-style: italic;
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0 1.5rem;
            margin-top: 3rem;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }
        
        .footer-logo img {
            height: 48px;
            width: 48px;
            object-fit: contain;
        }
        
        .footer-logo-text {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }
        
        .footer-description {
            margin-bottom: 1.5rem;
            color: #d1d5db;
        }
        
        .footer-social {
            display: flex;
            gap: 1rem;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #374151;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 0.3s;
        }
        
        .social-icon:hover {
            background: var(--primary);
        }
        
        .footer-title {
            font-size: 1.125rem;
            font-weight: 600;
            margin-bottom: 1rem;
            color: white;
        }
        
        .footer-links {
            list-style: none;
            padding: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-contact-item {
            display: flex;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: #d1d5db;
        }
        
        .footer-newsletter input {
            width: 100%;
            padding: 0.75rem;
            border: none;
            border-radius: 0.5rem;
            margin-bottom: 1rem;
            background: #374151;
            color: white;
        }
        
        .footer-newsletter input::placeholder {
            color: #9ca3af;
        }
        
        .payment-section {
            padding: 1.5rem 0;
            border-top: 1px solid #374151;
            border-bottom: 1px solid #374151;
            margin: 2rem 0;
        }
        
        .payment-methods {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1rem;
            margin-top: 1rem;
        }
        
        .payment-method {
            background: white;
            padding: 0.5rem;
            border-radius: 0.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 60px;
            height: 40px;
        }
        
        .payment-method img {
            max-height: 100%;
            max-width: 100%;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 1.5rem;
            color: #9ca3af;
            font-size: 0.875rem;
        }
        
        /* Modal */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
            align-items: center;
            justify-content: center;
        }
        
        .modal-content {
            background: white;
            border-radius: 1rem;
            width: 90%;
            max-width: 800px;
            max-height: 90vh;
            overflow-y: auto;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }
        
        .modal-header {
            padding: 1.5rem;
            border-bottom: 1px solid #e5e7eb;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            background: white;
            z-index: 10;
        }
        
        .modal-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: var(--dark);
        }
        
        .modal-close {
            background: none;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: #6b7280;
        }
        
        .modal-body {
            padding: 1.5rem;
        }
        
        /* Seat Selection */
        .seat-layout {
            margin-bottom: 2rem;
        }
        
        .seat-legend {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }
        
        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .legend-color {
            width: 20px;
            height: 20px;
            border-radius: 4px;
        }
        
        .legend-available {
            background: #bbf7d0;
            border: 1px solid #22c55e;
        }
        
        .legend-reserved {
            background: #fed7aa;
            border: 1px solid #f97316;
        }
        
        .legend-selected {
            background: #bfdbfe;
            border: 1px solid #3b82f6;
        }
        
        .legend-driver {
            background: #ddd6fe;
            border: 1px solid #8b5cf6;
        }
        
        .bus-layout {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 0.5rem;
            justify-content: center;
            max-width: 500px;
            margin: 0 auto;
        }
        
        .minicar-layout {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 0.5rem;
            justify-content: center;
            max-width: 400px;
            margin: 0 auto;
        }
        
        .taxi-layout {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0.5rem;
            justify-content: center;
            max-width: 300px;
            margin: 0 auto;
        }
        
        .seat-row {
            display: contents;
        }
        
        .seat {
            width: 40px;
            height: 40px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s;
            margin: 0 auto;
        }
        
        .seat-available {
            background: #bbf7d0;
            border: 1px solid #22c55e;
            color: #22543d;
        }
        
        .seat-reserved {
            background: #fed7aa;
            border: 1px solid #f97316;
            color: #742a2a;
            cursor: not-allowed;
        }
        
        .seat-selected {
            background: #bfdbfe;
            border: 1px solid #3b82f6;
            color: #2c5282;
        }
        
        .seat-driver {
            background: #ddd6fe;
            border: 1px solid #8b5cf6;
            color: #44337a;
            cursor: default;
            grid-column: span 1;
        }
        
        .aisle {
            width: 40px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .aisle::after {
            content: "↔";
            color: #a0aec0;
            font-size: 1.2rem;
        }
        
        .modal-footer {
            padding: 1.5rem;
            border-top: 1px solid #e5e7eb;
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
            position: sticky;
            bottom: 0;
            background: white;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 1rem;
            }
            
            nav {
                gap: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .search-form {
                flex-direction: column;
            }
            
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .form-row {
                flex-direction: column;
                gap: 1rem;
            }
            
            .seat {
                width: 35px;
                height: 35px;
                font-size: 0.875rem;
            }
            
            .bus-layout {
                grid-template-columns: repeat(5, 1fr);
                gap: 0.25rem;
            }
            
            .minicar-layout {
                grid-template-columns: repeat(4, 1fr);
                gap: 0.25rem;
            }
            
            .taxi-layout {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.25rem;
            }
            
            .modal-footer {
                flex-direction: column;
            }
            
            .modal-footer .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
<header class="fixed w-full bg-white shadow-md z-50">
    <div class="container mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center">
                <span class="ml-3 text-xl font-bold text-indigo-600">ARAI DIONI</span>
                <img src="{{ asset('images/logo.png') }}" alt="Ari Dioni" class="h-10">
                
            </a>

            <!-- Navigation Desktop -->
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('voyages') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Voyages</a>
                <a href="{{ route('colis.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Colis</a>
                <a href="{{ route('hebergements') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Hébergements</a>
            </nav>

            <!-- Boutons CTA -->
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('client.dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Mon compte
                    </a>
                @else
                    <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Connexion</a>
                    <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                        Inscription
                    </a>
                @endauth
            </div>
        </div>
        <div class="md:hidden">
            <!-- Mobile Menu Button -->
            <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <!-- Mobile Menu -->
            <div id="mobile-menu" class="hidden md:hidden">
                <nav class="flex flex-col space-y-4 mt-4">  
    </div>
</header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Réservez votre voyage en toute sérénité</h1>
                <p class="hero-subtitle">Découvrez les meilleurs trajets entre la Guinée et le Sénégal</p>
                
                <!-- Improved Search Form -->
                <form class="search-form" id="searchForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label class="form-label">Départ</label>
                            <input type="text" name="depart" class="search-input" placeholder="Ex: Dakar" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Destination</label>
                            <input type="text" name="destination" class="search-input" placeholder="Ex: Conakry" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Date</label>
                            <input type="date" name="date" class="search-input" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Type de véhicule</label>
                            <select name="vehicle_type" class="search-select" required>
                                <option value="">Sélectionnez un type</option>
                                <option value="bus">Bus</option>
                                <option value="minicar">Mini-car</option>
                                <option value="taxi">Taxi VIP</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Rechercher</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <h2 class="section-title">Trajets disponibles</h2>
            
            <div class="trips-grid" id="tripsContainer">
                <!-- Les trajets seront chargés dynamiquement ici -->
            </div>
            
            <!-- Why Choose Us Section -->
            <h2 class="section-title">Pourquoi choisir Ari Dioni ?</h2>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Sécurité garantie</h3>
                    <p class="feature-description">Nos véhicules sont régulièrement inspectés et nos conducteurs rigoureusement sélectionnés.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Ponctualité</h3>
                    <p class="feature-description">Nous respectons scrupuleusement les horaires pour que vous arriviez toujours à temps.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Support 24/7</h3>
                    <p class="feature-description">Notre équipe est disponible 24h/24 et 7j/7 pour répondre à vos questions.</p>
                </div>
            </div>
            
            <!-- Testimonials Section -->
            <h2 class="section-title">Ce que disent nos clients</h2>
            
            <div class="testimonials">
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Aissatou Diallo">
                        </div>
                        <div>
                            <div class="testimonial-name">Aissatou Diallo</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Service exceptionnel ! Le trajet était confortable et ponctuel. Je recommande vivement Ari Dioni pour tous vos déplacements."</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Mamadou Bah">
                        </div>
                        <div>
                            <div class="testimonial-name">Mamadou Bah</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="testimonial-text">"J'ai été impressionné par le professionnalisme de l'équipe. Le bus était propre et climatisé. Excellent voyage!"</p>
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/women/65.jpg" alt="Fatoumata Binta">
                        </div>
                        <div>
                            <div class="testimonial-name">Fatoumata Binta</div>
                            <div class="testimonial-rating">★★★★☆</div>
                        </div>
                    </div>
                    <p class="testimonial-text">"Service ponctuel et sécurisé. J'ai apprécié le suivi en temps réel de mon colis. Merci Ari Dioni!"</p>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-logo">
                        <span class="footer-logo-text">ARI DIONI</span>
                        <img src="{{ asset('images/logo.png') }}" alt="Ari Dioni" class="h-12 w-12 object-contain">
                    </div>
                    <p class="footer-description">Réinventons ensemble votre expérience de voyage et de logistique en Afrique de l'Ouest.</p>
                    <div class="footer-social">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                
                <!-- Colonne Liens rapides -->
                <div>
                    <h3 class="text-xl font-semibold text-white mb-6 pb-2 relative inline-block border-b-2 border-indigo-500">Navigation</h3>
                    <ul class="space-y-3">
                        <li><a href="{{ route('home') }}" class="footer-link"><span>Accueil</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                        <li><a href="{{ route('voyages') }}" class="footer-link"><span>Voyages</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                        <li><a href="{{ route('colis.index') }}" class="footer-link"><span>Envoi de colis</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                        <li><a href="{{ route('hebergements') }}" class="footer-link"><span>Hébergements</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                        <li><a href="{{ route('about') }}" class="footer-link"><span>À propos</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                        <li><a href="{{ route('contact') }}" class="footer-link"><span>Contact</span><i class="fas fa-chevron-right text-xs ml-2 opacity-0 transition-all"></i></a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="footer-title">Nous contacter</h3>
                    <div class="footer-contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Medina, Dakar, Senegal</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <span>+221 77 844 93 33</span>
                    </div>
                    <div class="footer-contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>contact@aridioni.com</span>
                    </div>
                </div>
                
                <div>
                    <h3 class="footer-title">Newsletter</h3>
                    <div class="footer-newsletter">
                        <input type="email" placeholder="Votre email">
                        <button class="btn btn-primary">S'abonner</button>
                    </div>
                    <p style="color: #9ca3af; font-size: 0.875rem; margin-top: 1rem;">Abonnez-vous pour recevoir nos offres exclusives et actualités.</p>
                </div>
            </div>
            
            <!-- Payment Methods Section -->
            <div class="payment-section">
                <h3 class="text-lg font-semibold text-center mb-6 text-white">Moyens de paiement acceptés</h3>
            <div class="flex flex-wrap justify-center gap-4">
                <div class="payment-method">
                    <img src="{{ asset('images/payments/orange-money.png') }}" alt="Orange Money" class="h-8" loading="lazy">
                </div>
                <div class="payment-method">
                    <img src="{{ asset('images/payments/momo.png') }}" alt="MTN Mobile Money" class="h-8" loading="lazy">
                </div>
                <div class="payment-method">
                    <img src="{{ asset('images/payments/visa.png') }}" alt="Visa" class="h-8" loading="lazy">
                </div>
                <div class="payment-method">
                    <img src="{{ asset('images/payments/mastercard.png') }}" alt="Mastercard" class="h-8" loading="lazy">
                </div>
                <div class="payment-method">
                    <img src="{{ asset('images/payments/cash.png') }}" alt="Espèces" class="h-8" loading="lazy">
                </div>
                <div class="payment-method">
                    <img src="{{ asset('images/payments/paypal.png') }}" alt="PayPal" class="h-8" loading="lazy">
                </div>
            </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2023 Ari Dioni. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Seat Selection Modal -->
    <div class="modal" id="seatModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Sélection des sièges</h2>
                <button class="modal-close" onclick="closeSeatSelection()">&times;</button>
            </div>
            <div class="modal-body">
                <div class="seat-layout">
                    <div class="seat-legend">
                        <div class="legend-item">
                            <div class="legend-color legend-available"></div>
                            <span>Disponible</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color legend-reserved"></div>
                            <span>Réservé</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color legend-selected"></div>
                            <span>Votre choix</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-color legend-driver"></div>
                            <span>Conducteur</span>
                        </div>
                    </div>
                    
                    <div id="busLayout" class="bus-layout" style="display: none;">
                        <!-- Driver seat -->
                        <div class="seat seat-driver">D</div>
                        <div class="aisle"></div>
                        <div class="aisle"></div>
                        <div class="aisle"></div>
                        <div class="aisle"></div>
                        
                        <!-- Rows 1-12: 4 seats per row (2+2 with aisle) -->
                        <!-- Generated with JavaScript for brevity -->
                    </div>
                    
                    <div id="minicarLayout" class="minicar-layout" style="display: none;">
                        <!-- Driver seat -->
                        <div class="seat seat-driver">D</div>
                        <div class="aisle"></div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '1')">1</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '2')">2</div>
                        
                        <!-- Row 1 -->
                        <div class="seat seat-available" onclick="toggleSeat(this, '3')">3</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '4')">4</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '5')">5</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '6')">6</div>
                        
                        <!-- Row 2 -->
                        <div class="seat seat-available" onclick="toggleSeat(this, '7')">7</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '8')">8</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '9')">9</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '10')">10</div>
                        
                        <!-- Row 3 -->
                        <div class="seat seat-available" onclick="toggleSeat(this, '11')">11</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '12')">12</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '13')">13</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '14')">14</div>
                    </div>
                    
                    <div id="taxiLayout" class="taxi-layout" style="display: none;">
                        <!-- Driver seat -->
                        <div class="seat seat-driver">D</div>
                        <div class="aisle"></div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '1')">1</div>
                        
                        <!-- Row 1 -->
                        <div class="seat seat-available" onclick="toggleSeat(this, '2')">2</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '3')">3</div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '4')">4</div>
                        
                        <!-- Row 2 -->
                        <div class="seat seat-available" onclick="toggleSeat(this, '5')">5</div>
                        <div class="aisle"></div>
                        <div class="seat seat-available" onclick="toggleSeat(this, '6')">6</div>
                    </div>
                </div>
                
                <div class="selected-seats" id="selectedSeats">
                    Aucun siège sélectionné
                </div>
                
                <div class="modal-footer">
                    <button class="btn btn-outline" onclick="closeSeatSelection()">Annuler</button>
                    <button class="btn btn-primary" onclick="confirmReservation()">Confirmer la réservation</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Firebase configuration
        const firebaseConfig = {
            apiKey: "YOUR_API_KEY",
            authDomain: "arai-dioni-1b65f.firebaseapp.com",
            databaseURL: "https://arai-dioni-1b65f-default-rtdb.firebaseio.com",
            projectId: "arai-dioni-1b65f",
            storageBucket: "arai-dioni-1b65f.appspot.com",
            messagingSenderId: "106189292098949221432",
            appId: "YOUR_APP_ID"
        };
        
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        const database = firebase.database();
        
        // Global variables
        let selectedSeats = [];
        let currentVehicleType = '';
        let currentTripId = '';
        
        // Sample trips data (would normally come from your backend)
        const trips = [
            {
                id: '1',
                departure: 'Dakar',
                arrival: 'Conakry',
                date: '2025-10-02',
                departure_time: '21:00',
                price: 38000,
                vehicle_type: 'bus',
                available_seats: 12
            },
            {
                id: '2',
                departure: 'Conakry',
                arrival: 'Dakar',
                date: '2025-10-03',
                departure_time: '08:00',
                price: 45000,
                vehicle_type: 'minicar',
                available_seats: 8
            },
            {
                id: '3',
                departure: 'Dakar',
                arrival: 'Labé',
                date: '2025-10-04',
                departure_time: '07:30',
                price: 60000,
                vehicle_type: 'taxi',
                available_seats: 4
            }
        ];
        
        // Function to generate bus layout with 53 seats (last row has 5 seats)
        function generateBusLayout() {
            const busLayout = document.getElementById('busLayout');
            busLayout.innerHTML = '';
            
            // Driver seat
            const driverSeat = document.createElement('div');
            driverSeat.className = 'seat seat-driver';
            driverSeat.textContent = 'D';
            busLayout.appendChild(driverSeat);
            
            // Add empty spaces for alignment
            for (let i = 0; i < 4; i++) {
                const aisle = document.createElement('div');
                aisle.className = 'aisle';
                busLayout.appendChild(aisle);
            }
            
            // Generate rows 1-12 (4 seats per row)
            for (let row = 1; row <= 12; row++) {
                const seat1 = document.createElement('div');
                seat1.className = 'seat seat-available';
                seat1.textContent = (row - 1) * 4 + 1;
                seat1.onclick = function() { toggleSeat(this, seat1.textContent); };
                busLayout.appendChild(seat1);
                
                const seat2 = document.createElement('div');
                seat2.className = 'seat seat-available';
                seat2.textContent = (row - 1) * 4 + 2;
                seat2.onclick = function() { toggleSeat(this, seat2.textContent); };
                busLayout.appendChild(seat2);
                
                const aisle = document.createElement('div');
                aisle.className = 'aisle';
                busLayout.appendChild(aisle);
                
                const seat3 = document.createElement('div');
                seat3.className = 'seat seat-available';
                seat3.textContent = (row - 1) * 4 + 3;
                seat3.onclick = function() { toggleSeat(this, seat3.textContent); };
                busLayout.appendChild(seat3);
                
                const seat4 = document.createElement('div');
                seat4.className = 'seat seat-available';
                seat4.textContent = (row - 1) * 4 + 4;
                seat4.onclick = function() { toggleSeat(this, seat4.textContent); };
                busLayout.appendChild(seat4);
            }
            
            // Last row with 5 seats
            for (let i = 49; i <= 53; i++) {
                const seat = document.createElement('div');
                seat.className = 'seat seat-available';
                seat.textContent = i;
                seat.onclick = function() { toggleSeat(this, seat.textContent); };
                busLayout.appendChild(seat);
            }
        }
        
        // Function to display trips
        function displayTrips(tripsToShow = trips) {
            const tripsContainer = document.getElementById('tripsContainer');
            tripsContainer.innerHTML = '';
            
            if (tripsToShow.length === 0) {
                tripsContainer.innerHTML = `
                    <div class="col-span-3 text-center py-12 bg-white rounded-xl shadow-sm border border-indigo-200">
                        <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-medium text-indigo-800 mb-2">Aucun trajet trouvé</h3>
                        <p class="text-indigo-600 max-w-md mx-auto">Nous n'avons trouvé aucun trajet correspondant à vos critères. Essayez de modifier vos filtres de recherche.</p>
                    </div>
                `;
                return;
            }
            
            tripsToShow.forEach(trip => {
                const tripCard = document.createElement('div');
                tripCard.className = 'trip-card';
                tripCard.innerHTML = `
                    <div class="trip-image">
                        <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80" alt="${trip.vehicle_type}">
                        <div class="trip-badge">${trip.vehicle_type.toUpperCase()}</div>
                    </div>
                    <div class="trip-details">
                        <h3 class="trip-route">${trip.departure} → ${trip.arrival}</h3>
                        <div class="trip-info">
                            <i class="far fa-calendar-alt"></i>
                            <span>${trip.date} • ${trip.departure_time}</span>
                        </div>
                        <div class="trip-meta">
                            <div class="trip-meta-item">
                                <i class="far fa-clock"></i>
                                <span>~${trip.vehicle_type === 'bus' ? '12h' : trip.vehicle_type === 'minicar' ? '10h' : '9h'}</span>
                            </div>
                            <div class="trip-meta-item">
                                <i class="fas fa-chair"></i>
                                <span>${trip.available_seats} places restantes</span>
                            </div>
                        </div>
                        <div class="trip-price">
                            <div>
                                <div class="price-from">À partir de</div>
                                <div class="price-amount">${trip.price.toLocaleString()} GNF</div>
                            </div>
                            <button class="btn btn-primary" onclick="openSeatSelection('${trip.vehicle_type}', '${trip.id}')">Choisir un siège</button>
                        </div>
                    </div>
                `;
                tripsContainer.appendChild(tripCard);
            });
        }
        
        // Function to handle form submission
        document.getElementById('searchForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const departure = formData.get('depart').toLowerCase();
            const destination = formData.get('destination').toLowerCase();
            const date = formData.get('date');
            const vehicleType = formData.get('vehicle_type');
            
            // Filter trips based on search criteria
            const filteredTrips = trips.filter(trip => {
                const matchesDeparture = departure ? trip.departure.toLowerCase().includes(departure) : true;
                const matchesDestination = destination ? trip.arrival.toLowerCase().includes(destination) : true;
                const matchesDate = date ? trip.date === date : true;
                const matchesVehicleType = vehicleType ? trip.vehicle_type === vehicleType : true;
                
                return matchesDeparture && matchesDestination && matchesDate && matchesVehicleType;
            });
            
            displayTrips(filteredTrips);
        });
        
        // Function to open seat selection modal
        function openSeatSelection(vehicleType, tripId) {
            currentVehicleType = vehicleType;
            currentTripId = tripId || 'default';
            selectedSeats = [];
            
            // Hide all layouts first
            document.getElementById('busLayout').style.display = 'none';
            document.getElementById('minicarLayout').style.display = 'none';
            document.getElementById('taxiLayout').style.display = 'none';
            
            // Show the correct layout
            if (vehicleType === 'bus') {
                generateBusLayout();
                document.getElementById('busLayout').style.display = 'grid';
            } else if (vehicleType === 'minicar') {
                document.getElementById('minicarLayout').style.display = 'grid';
            } else if (vehicleType === 'taxi') {
                document.getElementById('taxiLayout').style.display = 'grid';
            }
            
            // Load reserved seats from Firebase
            loadReservedSeats(vehicleType, currentTripId);
            
            // Show modal
            document.getElementById('seatModal').style.display = 'flex';
            document.getElementById('selectedSeats').textContent = 'Aucun siège sélectionné';
        }
        
        // Function to close seat selection modal
        function closeSeatSelection() {
            document.getElementById('seatModal').style.display = 'none';
        }
        
        // Function to toggle seat selection
        function toggleSeat(element, seatNumber) {
            if (element.classList.contains('seat-reserved') || element.classList.contains('seat-driver')) {
                return; // Can't select reserved or driver seats
            }
            
            if (element.classList.contains('seat-selected')) {
                // Deselect seat
                element.classList.remove('seat-selected');
                element.classList.add('seat-available');
                selectedSeats = selectedSeats.filter(seat => seat !== seatNumber);
            } else {
                // Select seat
                element.classList.remove('seat-available');
                element.classList.add('seat-selected');
                selectedSeats.push(seatNumber);
            }
            
            // Update selected seats text
            const selectedSeatsElement = document.getElementById('selectedSeats');
            if (selectedSeats.length > 0) {
                selectedSeatsElement.textContent = `Sièges sélectionnés: ${selectedSeats.join(', ')}`;
            } else {
                selectedSeatsElement.textContent = 'Aucun siège sélectionné';
            }
        }
        
        // Function to load reserved seats from Firebase
        function loadReservedSeats(vehicleType, tripId) {
            const reservedSeatsRef = database.ref('reservations/' + tripId);
            
            reservedSeatsRef.once('value')
            .then((snapshot) => {
                const reservations = snapshot.val();
                const reservedSeats = [];
                
                if (reservations) {
                    for (const key in reservations) {
                        if (reservations.hasOwnProperty(key)) {
                            const seats = reservations[key].seats.split(',');
                            reservedSeats.push(...seats);
                        }
                    }
                }
                
                // Mark seats as reserved
                reservedSeats.forEach(seatNumber => {
                    const seats = document.querySelectorAll('.seat');
                    seats.forEach(seat => {
                        if (seat.textContent === seatNumber && !seat.classList.contains('seat-driver')) {
                            seat.classList.remove('seat-available');
                            seat.classList.add('seat-reserved');
                        }
                    });
                });
            })
            .catch((error) => {
                console.error("Error loading reserved seats:", error);
            });
        }
        
        // Function to confirm reservation
        function confirmReservation() {
            if (selectedSeats.length === 0) {
                alert('Veuillez sélectionner au moins un siège.');
                return;
            }
            
            // Create reservation data
            const reservationData = {
                tripId: currentTripId,
                vehicleType: currentVehicleType,
                seats: selectedSeats.join(', '),
                timestamp: new Date().toISOString()
            };
            
            // Save reservation to Firebase
            const newReservationKey = database.ref().child('reservations').push().key;
            const updates = {};
            updates['/reservations/' + currentTripId + '/' + newReservationKey] = reservationData;
            
            database.ref().update(updates)
            .then(() => {
                alert(`Réservation confirmée! Sièges: ${selectedSeats.join(', ')}`);
                closeSeatSelection();
            })
            .catch((error) => {
                console.error("Error saving reservation:", error);
                alert("Une erreur s'est produite lors de la réservation. Veuillez réessayer.");
            });
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            const modal = document.getElementById('seatModal');
            if (event.target === modal) {
                closeSeatSelection();
            }
        };
        
        // Initialize the page with all trips
        displayTrips();
    </script>
</body>
</html>
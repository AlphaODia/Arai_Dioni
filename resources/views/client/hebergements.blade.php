<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hébergements Premium en Guinée et Sénégal</title>
    <style>
        /* Styles de base */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            color: #fff;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect {
            background: #ffffff;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Effet Liquid Glass */
        .liquid-glass {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .liquid-glass {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            color: #333;
        }
        
        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .glass-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: 1px solid rgba(0, 0, 0, 0.1);
            color: #333;
        }
        
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        }
        
        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        
        .header h1 {
            font-size: 2.5rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        
        .header p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }
        
        /* Barre de recherche */
        .search-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .search-box {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        
        @media (min-width: 768px) {
            .search-box {
                flex-direction: row;
            }
        }
        
        .search-input {
            position: relative;
            flex: 1;
        }
        
        .search-input input {
            width: 100%;
            padding: 15px 15px 15px 50px;
            border: none;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: white;
            font-size: 1rem;
        }
        
        body.no-glass-effect .search-input input {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
        }
        
        .search-input input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        body.no-glass-effect .search-input input::placeholder {
            color: rgba(0, 0, 0, 0.6);
        }
        
        .search-input svg {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.7);
        }
        
        body.no-glass-effect .search-input svg {
            color: rgba(0, 0, 0, 0.6);
        }
        
        .search-btn {
            padding: 15px 25px;
            border: none;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            color: white;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .search-btn {
            background: rgba(37, 99, 235, 0.9);
            color: white;
        }
        
        .search-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        body.no-glass-effect .search-btn:hover {
            background: rgba(37, 99, 235, 1);
        }
        
        /* Toggle Glass Effect */
        .glass-effect-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            border-radius: 50px;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .glass-effect-toggle:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        body.no-glass-effect .glass-effect-toggle {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
        }
        
        .toggle-text {
            font-size: 0.9rem;
            font-weight: 500;
        }
        
        .toggle-switch {
            width: 40px;
            height: 20px;
            background: rgba(255, 255, 255, 0.3);
            border-radius: 20px;
            position: relative;
            transition: all 0.3s ease;
        }
        
        .toggle-switch::after {
            content: '';
            position: absolute;
            width: 16px;
            height: 16px;
            background: white;
            border-radius: 50%;
            top: 2px;
            left: 2px;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .toggle-switch {
            background: rgba(37, 99, 235, 0.5);
        }
        
        body.no-glass-effect .toggle-switch::after {
            left: 22px;
            background: white;
        }
        
        /* Layout principal */
        .main-layout {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }
        
        @media (min-width: 1024px) {
            .main-layout {
                flex-direction: row;
            }
        }
        
        /* Filtres */
        .filters {
            width: 100%;
            padding: 25px;
        }
        
        @media (min-width: 1024px) {
            .filters {
                width: 25%;
                position: sticky;
                top: 20px;
                height: fit-content;
            }
        }
        
        .filters h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        body.no-glass-effect .filters h3 {
            color: #333;
        }
        
        .toggle-filters {
            display: none;
        }
        
        @media (max-width: 1023px) {
            .toggle-filters {
                display: block;
            }
            
            .filters-content {
                display: none;
            }
            
            .filters-content.show {
                display: block;
            }
        }
        
        .filter-group {
            margin-bottom: 25px;
        }
        
        .filter-group h4 {
            font-size: 1rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        body.no-glass-effect .filter-group h4 {
            color: #333;
        }
        
        .filter-group select, .filter-group input {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
        }
        
        body.no-glass-effect .filter-group select, 
        body.no-glass-effect .filter-group input {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .filter-group option {
            background: rgba(51, 51, 51, 0.9);
            color: white;
        }
        
        body.no-glass-effect .filter-group option {
            background: white;
            color: #333;
        }
        
        .price-range {
            margin-top: 10px;
        }
        
        .price-labels {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-top: 5px;
            opacity: 0.8;
        }
        
        body.no-glass-effect .price-labels {
            color: #333;
        }
        
        .filter-buttons {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        
        .filter-btn {
            padding: 12px;
            border-radius: 8px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .apply-btn {
            background: rgba(255, 255, 255, 0.2);
            color: white;
        }
        
        body.no-glass-effect .apply-btn {
            background: rgba(37, 99, 235, 0.9);
            color: white;
        }
        
        .apply-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }
        
        body.no-glass-effect .apply-btn:hover {
            background: rgba(37, 99, 235, 1);
        }
        
        .reset-btn {
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        body.no-glass-effect .reset-btn {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
        }
        
        .reset-btn:hover {
            background: rgba(255, 255, 255, 0.2);
        }
        
        body.no-glass-effect .reset-btn:hover {
            background: rgba(255, 255, 255, 1);
        }
        
        /* Contenu principal */
        .content {
            width: 100%;
        }
        
        @media (min-width: 1024px) {
            .content {
                width: 75%;
            }
        }
        
        .content-header {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            margin-bottom: 25px;
        }
        
        @media (min-width: 768px) {
            .content-header {
                flex-direction: row;
                align-items: center;
            }
        }
        
        .content-header h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        
        body.no-glass-effect .content-header h2 {
            color: #333;
        }
        
        .content-header p {
            opacity: 0.8;
            margin-bottom: 15px;
        }
        
        body.no-glass-effect .content-header p {
            color: #555;
        }
        
        .sort-select {
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            color: white;
        }
        
        body.no-glass-effect .sort-select {
            background: rgba(255, 255, 255, 0.9);
            color: #333;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .sort-select option {
            background: rgba(51, 51, 51, 0.9);
            color: white;
        }
        
        body.no-glass-effect .sort-select option {
            background: white;
            color: #333;
        }
        
        /* Carte */
        .map-container {
            margin-bottom: 30px;
            padding: 20px;
        }
        
        .map-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .map-header h3 {
            font-size: 1.2rem;
        }
        
        body.no-glass-effect .map-header h3 {
            color: #333;
        }
        
        .enlarge-btn {
            display: flex;
            align-items: center;
            gap: 5px;
            background: none;
            border: none;
            color: white;
            font-size: 0.9rem;
            cursor: pointer;
            opacity: 0.8;
        }
        
        body.no-glass-effect .enlarge-btn {
            color: #333;
        }
        
        .enlarge-btn:hover {
            opacity: 1;
        }
        
        #map {
            height: 300px;
            border-radius: 12px;
            overflow: hidden;
        }
        
        /* Grille d'hébergements */
        .hebergements-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
            margin-bottom: 40px;
        }
        
        @media (min-width: 640px) {
            .hebergements-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (min-width: 1024px) {
            .hebergements-grid {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        
        /* Carte d'hébergement */
        .hebergement-card {
            height: 100%;
            overflow: hidden;
            cursor: pointer;
        }
        
        .card-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .card-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .hebergement-card:hover .card-image img {
            transform: scale(1.05);
        }
        
        .card-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(37, 99, 235, 0.9);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .card-favorite {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(255, 255, 255, 0.9);
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .card-favorite:hover {
            background: rgba(255, 255, 255, 1);
            transform: scale(1.1);
        }
        
        .card-price {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background: rgba(255, 255, 255, 0.9);
            color: #2563eb;
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 700;
            font-size: 0.9rem;
        }
        
        .card-price span {
            font-weight: 400;
            font-size: 0.8rem;
            color: #6b7280;
        }
        
        .card-content {
            padding: 20px;
        }
        
        body.no-glass-effect .card-content {
            color: #333;
        }
        
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 12px;
        }
        
        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: white;
        }
        
        body.no-glass-effect .card-title {
            color: #333;
        }
        
        .card-location {
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 5px;
        }
        
        body.no-glass-effect .card-location {
            color: #555;
        }
        
        .card-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            background: rgba(37, 99, 235, 0.2);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
        }
        
        body.no-glass-effect .card-rating {
            background: rgba(37, 99, 235, 0.1);
            color: #2563eb;
        }
        
        .card-description {
            font-size: 0.95rem;
            opacity: 0.8;
            margin-bottom: 15px;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        body.no-glass-effect .card-description {
            color: #555;
        }
        
        .card-features {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
        
        body.no-glass-effect .card-features {
            color: #555;
        }
        
        .card-feature {
            display: flex;
            align-items: center;
            gap: 5px;
        }
        
        .card-button {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 8px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            color: white;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .card-button {
            background: rgba(37, 99, 235, 0.9);
            color: white;
        }
        
        .card-button:hover {
            background: rgba(255, 255, 255, 0.25);
        }
        
        body.no-glass-effect .card-button:hover {
            background: rgba(37, 99, 235, 1);
        }
        
        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        
        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .pagination a {
            background: rgba(255, 255, 255, 0.8);
            color: #333;
        }
        
        .pagination a:hover, .pagination a.active {
            background: rgba(255, 255, 255, 0.2);
        }
        
        body.no-glass-effect .pagination a:hover, 
        body.no-glass-effect .pagination a.active {
            background: rgba(37, 99, 235, 0.9);
            color: white;
        }
        
        /* Modals */
        .modal {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }
        
        .modal.show {
            opacity: 1;
            visibility: visible;
        }
        
        .modal-content {
            width: 100%;
            max-width: 900px;
            max-height: 90vh;
            overflow-y: auto;
            border-radius: 16px;
            padding: 0;
        }
        
        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        body.no-glass-effect .modal-header {
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .modal-header h3 {
            font-size: 1.5rem;
            font-weight: 600;
        }
        
        body.no-glass-effect .modal-header h3 {
            color: #333;
        }
        
        .close-modal {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 5px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        body.no-glass-effect .close-modal {
            color: #333;
        }
        
        .close-modal:hover {
            background: rgba(255, 255, 255, 0.1);
        }
        
        body.no-glass-effect .close-modal:hover {
            background: rgba(0, 0, 0, 0.05);
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2rem;
            }
            
            .header p {
                font-size: 1rem;
            }
            
            .card-features {
                flex-direction: column;
                gap: 8px;
            }
            
            .glass-effect-toggle {
                bottom: 10px;
                right: 10px;
                padding: 8px 16px;
            }
            
            .toggle-text {
                display: none;
            }
        }
        
        /* Utilitaires */
        .hidden {
            display: none;
        }
        
        .text-center {
            text-align: center;
        }
        
        .mb-4 {
            margin-bottom: 1rem;
        }
        
        .mb-6 {
            margin-bottom: 1.5rem;
        }
        
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>

</head>
<body>
    @extends('layouts.client.app')

    @section('title', 'Hébergements Premium en Guinée et Sénégal')

    @section('content')
    <div class="container">
        <!-- En-tête avec recherche -->
        <div class="header">
            <h1>Découvrez nos hébergements d'exception</h1>
            <p>Des logements premium en Guinée et au Sénégal pour des séjours inoubliables</p>
            
            <div class="search-container liquid-glass">
                <div class="search-box">
                    <div class="search-input">
                        <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 极 0 0114 0z"></path>
                        </svg>
                        <input type="text" id="search极ut" placeholder="Destination, ville, type d'hébergement...">
                    </div>
                    <button id="searchBtn" class="search-btn">
                        <svg class="h-5 w-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Rechercher
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Filtres et résultats -->
        <div class="main-layout">
            <!-- Filtres -->
            <div class="filters glass-card">
                <div class="filters-header">
                    <h3>Filtres <button class="toggle-filters" id="toggleFilters">☰</button></h3>
                </div>
                
                <div class="filters-content" id="filtersContent">
                    <div class="filter-group">
                        <h4>Pays</h4>
                        <select id="filterPays">
                            <option value="all">Tous les pays</option>
                            <option value="Guinée">Guinée</option>
                            <option value="Sénégal">Sénégal</option>
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <h4>Ville</h4>
                        <select id="filterVille">
                            <option value="all">Toutes les villes</option>
                            @foreach($villes as $ville)
                                <option value="{{ $ville }}">{{ $ville }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <h4>Type</h4>
                        <select id="filterType">
                            <option value="all">Tous types</option>
                            @foreach($types as $type)
                                <option value="{{ $type }}">{{ $type }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="filter-group">
                        <h4>Prix max/nuit</h4>
                        <input type="range" id="priceRange" min="0" max="500000" step="5000" value="500000">
                        <div class="price-labels">
                            <span>0 FCFA</span>
                            <span id="maxPriceText">500 000 FCFA</span>
                        </div>
                    </div>
                    
                    <div class="filter-buttons">
                        <button id="applyFilters" class="filter-btn apply-btn">Appliquer</button>
                        <button id="resetFilters" class="filter-btn reset-btn">Réinitialiser</button>
                    </div>
                </div>
            </div>
            
            <!-- Contenu principal -->
            <div class="content">
                <!-- En-tête résultats -->
                <div class="content-header glass-card" style="padding: 20px;">
                    <div>
                        <h2>Nos hébergements premium</h2>
                        <p id="resultsCount">{{ count($hebergements) }} propriétés disponibles</p>
                    </div>
                    <div>
                        <select class="sort-select">
                            <option>Trier par: Recommandations</option>
                            <option>Prix croissant</option>
                            <option>Prix décroissant</option>
                            <option>Meilleures notes</option>
                        </select>
                    </div>
                </div>
                
                <!-- Carte -->
                <div class="map-container glass-card">
                    <div class="map-header">
                        <h3>Localisation des hébergements</h3>
                        <button class="enlarge-btn">
                            <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="极 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5v-4m0 4h-4m4 0l-5-5"></path>
                            </svg>
                            Agrandir
                        </button>
                    </div>
                    <div id="map"></div>
                </div>
                
                <!-- Liste des hébergements -->
                <div id="hebergementsList" class="hebergements-grid">
                    @if(count($hebergements) > 0)
                        @foreach($hebergements as $id => $hebergement)
                            @if($hebergement['estDisponible'])
                                <div class="hebergement-card glass-card" 
                                     data-id="{{ $id }}"
                                     data-ville="{{ $hebergement['ville'] ?? '' }}"
                                     data-pays="{{ $hebergement['pays'] ?? '' }}"
                                     data-type="{{ $hebergement['typeLogement'] ?? '' }}"
                                     data-prix="{{ $hebergement['prixNuit'] ?? 0 }}">
                                    <div class="card-image">
                                        @php
                                            $imageUrl = 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80';
                                            if (!empty($hebergement['imagesUrls'])) {
                                                $imageUrl = is_array($hebergement['imagesUrls']) ? 
                                                    ($hebergement['imagesUrls'][0] ?? $imageUrl) : 
                                                    $hebergement['imagesUrls'];
                                            }
                                        @endphp
                                        <img src="{{ $imageUrl }}" 
                                             alt="{{ $hebergement['titre'] ?? 'Hébergement' }}">
                                        <div class="card-favorite">
                                            <svg class="h-5 w-5 text-gray-700" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636极-1.318-1.318a4.5 4.5 极 00-6.364 0z"></path>
                                            </svg>
                                        </div>
                                        @php
                                            $isNew = false; // Initialisation par défaut
                                            if (isset($hebergement['dateCreation']) && 
                                                now()->diffInDays(\Carbon\Carbon::parse($hebergement['dateCreation'])) < 7) {
                                                $isNew = true;
                                            }
                                        @endphp
                                        @if($isNew)
                                            <div class="card-badge">NOUVEAU</div>
                                        @endif
                                        <div class="card-price">
                                            {{ number_format($hebergement['prixNuit'] ?? 0, 0, ',', ' ') }} FCFA<span>/nuit</span>
                                        </div>
                                    </div>
                                    
                                    <div class="card-content">
                                        <div class="card-header">
                                            <div>
                                                <h3 class="card-title">{{ $hebergement['titre'] ?? 'Sans titre' }}</h3>
                                                <div class="card-location">
                                                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                    </svg>
                                                    {{ $hebergement['ville'] ?? '' }}, {{ $hebergement['pays'] ?? '' }}
                                                </div>
                                            </div>
                                            <div class="card-rating">
                                                <svg class="h-4 w-4" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="M极.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81极3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                </svg>
                                                {{ $hebergement['rating'] ?? '4.5' }}
                                            </div>
                                        </div>
                                        
                                        <p class="card-description">{{ $hebergement['description'] ?? '' }}</p>
                                        
                                        <div class="card-features">
                                            @if(isset($hebergement['capacite']))
                                            <div class="card-feature">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                                </svg>
                                                {{ $hebergement['capacite'] }} personnes
                                            </div>
                                            @endif
                                            
                                            @if(isset($hebergement['nombreChambres']))
                                            <div class="card-feature">
                                                <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1极3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1极-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                                </svg>
                                                {{ $hebergement['nombreChambres'] }} chambres
                                            </div>
                                            @endif
                                        </div>
                                        
                                        <button class="card-button view-details-btn" data-id="{{ $id }}">Voir disponibilités</button>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="glass-card text-center" style="padding: 40px; grid-column: 1 / -1;">
                            <svg class="h-16 w-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                            <h3 class="text-xl font-medium mb-2">Aucun hébergement disponible</h3>
                            <p class="opacity-80 mb-4">Aucun hébergement ne correspond à vos critères de recherche pour le moment.</p>
                            <button id="resetSearch" class="text-blue-300 hover:text-blue-100 font-medium">
                                Réinitialiser la recherche
                            </button>
                        </div>
                    @endif
                </div>
                
                <!-- Pagination -->
                <div class="pagination">
                    <a href="#" class="px-3 py-2 rounded-lg border text-gray-600 hover:bg-gray-100 transition">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l极-7 7-7"></path>
                        </svg>
                    </a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <span class="px-2">...</span>
                    <a href="#">10</a>
                    <a href="#">
                        <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bouton de toggle pour l'effet glass -->
    <div class="glass-effect-toggle" id="glassEffectToggle">
        <span class="toggle-text">Effet Glass</span>
        <div class="toggle-switch"></div>
    </div>
    
    <!-- Modal de détails -->
    <div id="detailsModal" class="modal">
        <div class="modal-content liquid-glass">
            <div class="modal-header">
                <h3>Détails de l'hébergement</h3>
                <button class="close-modal" id="closeDetailsModal">×</button>
            </div>
            <div id="modalContent" style="padding: 20px;">
                <!-- Le contenu sera chargé dynamiquement par JavaScript -->
            </div>
        </div>
    </div>

    <!-- Modal de réservation -->
    <div id="reservationModal" class="modal">
        <div class="modal-content liquid-glass" style="max-width: 500px;">
            <div class="modal-header">
                <h3>Réserver cet hébergement</h3>
                <button class="close-modal" id="closeModal">×</button>
            </div>
            
            <form id="reservationForm" style="padding: 20px;">
                @csrf
                <input type="hidden" id="hebergementId" name="hebergement_id">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div>
                        <label for="arrivee" class="block text-sm font-medium mb-1">Arrivée</label>
                        <input type="date" id="arrivee" name="arrivee" required 
                               class="w-full border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                    </div>
                    <div>
                        <label for="depart" class="block text-sm font-medium mb-1">Départ</label>
                        <input type="date" id="depart" name="depart" required 
                               class="w-full border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                    </div>
                </div>
                
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium mb-1">Nom complet</label>
                    <input type="text" id="nom" name="nom" required 
                           class="w-full border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" id="email" name="email" required 
                           class="w-full border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                </极>
                
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Téléphone</label>
                    <div class="flex gap-2">
                        <select id="indicatif" name="indicatif" class="w-1/4 border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                            <option value="+221">+221 (SN)</option>
                            <option value="+224">+224 (GN)</option>
                            <option value="+223">+223 (ML)</option>
                            <option value="+226">+226 (BF)</option>
                        </select>
                        <input type="tel" id="telephone" name="telephone" required 
                               class="flex-1 border-gray-300 rounded-lg p-3 focus:ring-blue-500 focus:border-blue-500 bg-white bg-opacity-10 text-white">
                    </div>
                </div>
                
                <div class="bg-white bg-opacity-10 p-4 rounded-lg mb-5">
                    <h4 class="font-medium mb-2">Récapitulatif</h4>
                    <div id="reservationSummary" class="text-sm">
                        Sélectionnez des dates pour voir le détail
                    </div>
                </div>
                
                <div class="flex justify-end gap-3">
                    <button type="button" id="cancelReservation" class="px-5 py-2.5 bg-white bg-opacity-10 text-white rounded-lg hover:bg-white hover:bg-opacity-20 transition font-medium">
                        Annuler
                    </button>
                    <button type="submit" class="px-5 py-2.5 bg-white bg-opacity-20 text-white rounded-lg hover:bg-white hover:bg-opacity-30 transition font-medium">
                        Confirmer
                    </button>
                </div>
            </form>
        </div>
    </div>

<script>
    // Données des hébergements
    let hebergementsData = <?php echo isset($hebergementsJson) ? $hebergementsJson : '[]'; ?>;
    let map;
    let markers = [];
    let detailMap;

    // Toggle de l'effet glass
    const glassEffectToggle = document.getElementById('glassEffectToggle');
    if (glassEffectToggle) {
        glassEffectToggle.addEventListener('click', function() {
            document.body.classList.toggle('no-glass-effect');
            const isGlassDisabled = document.body.classList.contains('no-glass-effect');
            localStorage.setItem('glassEffectDisabled', isGlassDisabled);
        });
        
        const glassEffectDisabled = localStorage.getItem('glassEffectDisabled');
        if (glassEffectDisabled === 'true') {
            document.body.classList.add('no-glass-effect');
        }
    }

    function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            center: { lat: 14.7167, lng: -17.4677 },
            zoom: 7,
            mapTypeId: "roadmap",
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#444444"}]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"color": "#d4f1f9"}, {"visibility": "on"}]
                }
            ]
        });
        
        addMarkersToMap();
    }

    function addMarkersToMap() {
        markers.forEach(marker => marker.setMap(null));
        markers = [];
        
        if (!hebergementsData || typeof hebergementsData !== 'object') {
            console.log('Aucune donnée d\'hébergement disponible');
            return;
        }
        
        Object.entries(hebergementsData).forEach(([id, hebergement]) => {
            try {
                if (hebergement && hebergement.coordonnees) {
                    const lat = parseFloat(hebergement.coordonnees.lat) || 0;
                    const lng = parseFloat(hebergement.coordonnees.lng) || 0;
                    
                    if (lat !== 0 && lng !== 0) {
                        const marker = new google.maps.Marker({
                            position: { lat, lng },
                            map: map,
                            title: hebergement.titre || 'Hébergement sans nom',
                            icon: {
                                url: "https://maps.google.com/mapfiles/ms/icons/blue-dot.png"
                            }
                        });
                        
                        const infoWindow = new google.maps.InfoWindow({
                            content: `
                                <div class="p-2">
                                    <h3 class="font-bold text-lg">${hebergement.titre || ''}</h3>
                                    <p class="text-sm text-gray-600">${hebergement.ville || ''}, ${hebergement.pays || ''}</p>
                                    <p class="text-blue-600 font-medium mt-1">
                                        ${hebergement.prixNuit ? new Intl.NumberFormat('fr-FR').format(hebergement.prixNuit) + ' FCFA/nuit' : 'Prix non disponible'}
                                    </p>
                                    <button class="mt-2 text-sm text-white bg-blue-600 hover:bg-blue-700 px-3 py-1 rounded view-details-btn" data-id="${id}">
                                        Voir détails
                                    </button>
                                </div>
                            `
                        });
                        
                        marker.addListener("click", () => {
                            infoWindow.open(map, marker);
                        });
                        
                        markers.push(marker);
                    }
                }
            } catch (error) {
                console.error('Erreur avec l\'hébergement:', error);
            }
        });
    }

    function initDetailMap(lat, lng, title) {
        const detailMapElement = document.getElementById('detailMap');
        if (!detailMapElement) return;
        
        detailMap = new google.maps.Map(detailMapElement, {
            center: { lat, lng },
            zoom: 15,
            mapTypeId: "roadmap",
            styles: [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [{"color": "#444444"}]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{"color": "#f2f2f2"}]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [{"saturation": -100}, {"lightness": 45}]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [{"visibility": "simplified"}]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [{"visibility": "off"}]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [{"color": "#4f8ef7"}, {"visibility": "on"}]
                }
            ]
        });
        
        new google.maps.Marker({
            position: { lat, lng },
            map: detailMap,
            title: title,
            icon: {
                url: "https://maps.google.com/mapfiles/ms/icons/red-dot.png"
            }
        });
    }

    // Soumission du formulaire de réservation
    const reservationForm = document.getElementById('reservationForm');
    if (reservationForm) {
        reservationForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const formData = new FormData(this);
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Traitement...';
            submitBtn.disabled = true;
            
            const reservationSummary = document.getElementById('reservationSummary');
            const originalSummary = reservationSummary.innerHTML;
            reservationSummary.innerHTML = '<div class="text-center">Traitement en cours...</div>';
            
            fetch("/hebergements/reserver", {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(errorData => {
                        throw new Error(errorData.message || 'Erreur réseau');
                    });
                }
                return response.json();
            })
            .then(data => {
                if (data.success) {
                    // Redirection vers la page du ticket
                    window.location.href = data.redirectUrl;
                } else {
                    throw new Error(data.message || 'Erreur lors de la réservation');
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
                
                if (error.message.includes('network') || error.message.includes('Network')) {
                    alert('Erreur réseau. Veuillez vérifier votre connexion.');
                } else {
                    alert('Erreur: ' + error.message);
                }
            })
            .finally(() => {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
                reservationSummary.innerHTML = originalSummary;
            });
        });
    }

    function updateReservationSummary() {
        const arriveeInput = document.getElementById('arrivee');
        const departInput = document.getElementById('depart');
        const hebergementIdInput = document.getElementById('hebergementId');
        const reservationSummary = document.getElementById('reservationSummary');
        
        if (!arriveeInput || !departInput || !hebergementIdInput || !reservationSummary) {
            return;
        }
        
        const arrivee = new Date(arriveeInput.value);
        const depart = new Date(departInput.value);
        const hebergementId = hebergementIdInput.value;
        
        if (arrivee && depart && hebergementId && hebergementsData[hebergementId]) {
            const hebergement = hebergementsData[hebergementId];
            const diffTime = Math.abs(depart - arrivee);
            const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            const totalPrice = diffDays * hebergement.prixNuit;
            
            const options = { day: 'numeric', month: 'long', year: 'numeric' };
            const arriveeFormatted = arrivee.toLocaleDateString('fr-FR', options);
            const departFormatted = depart.toLocaleDateString('fr-FR', options);
            
            reservationSummary.innerHTML = `
                <p>Du ${arriveeFormatted} au ${departFormatted}</p>
                <p>${diffDays} nuit(s) à ${new Intl.NumberFormat('fr-FR').format(hebergement.prixNuit)} FCFA/nuit</p>
                <p class="font-semibold mt-1">Total: ${new Intl.NumberFormat('fr-FR').format(totalPrice)} FCFA</p>
            `;
        }
    }

    function updatePriceText() {
        const priceRange = document.getElementById('priceRange');
        const maxPriceText = document.getElementById('maxPriceText');
        if (priceRange && maxPriceText) {
            maxPriceText.textContent = new Intl.NumberFormat('fr-FR').format(priceRange.value) + ' FCFA';
        }
    }

    function showHebergementDetails(id) {
        const hebergement = hebergementsData[id];
        if (!hebergement) {
            alert('Détails non disponibles pour cet hébergement');
            return;
        }

        const images = Array.isArray(hebergement.imagesUrls) ? hebergement.imagesUrls : [hebergement.imagesUrls];
        const firstImage = images[0] || 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=80';
        const otherImages = images.slice(1, 5);
        
        let equipementsHTML = '';
        if (hebergement.equipements && hebergement.equipements.length > 0) {
            equipementsHTML = `
                <div class="glass-card mb-6" style="padding: 20px;">
                    <h2 class="text-xl font-bold mb-4">Équipements</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        ${hebergement.equipements.map(equipement => `
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>${equipement}</span>
                            </div>
                        `).join('')}
                    </div>
                </div>
            `;
        }

        let reglesHTML = '';
        if (hebergement.regles && hebergement.regles.length > 0) {
            reglesHTML = `
                <div class="glass-card mb-6" style="padding: 20px;">
                    <h2 class="text-xl font-bold mb-4">Règles de la maison</h2>
                    <div>
                        ${hebergement.regles.join('<br>')}
                    </div>
                </div>
            `;
        }

        let mapHTML = '';
        if (hebergement.coordonnees && hebergement.coordonnees.lat && hebergement.coordonnees.lng) {
            const lat = parseFloat(hebergement.coordonnees.lat);
            const lng = parseFloat(hebergement.coordonnees.lng);
            
            if (lat !== 0 && lng !== 0) {
                mapHTML = `
                    <div class="glass-card mb-6" style="padding: 20px;">
                        <h2 class="text-xl font-bold mb-4">Localisation</h2>
                        <div id="detailMap" class="h-64 rounded-lg"></div>
                        <p class="text-sm mt-2">
                            <svg class="h-4 w-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 极6.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            ${hebergement.adresseComplete || hebergement.localisation || 'Adresse non spécifiée'}
                        </p>
                    </div>
                `;
            }
        }

        const modalContent = `
            <div class="mb-6">
                <h1 class="text-3xl font-bold">${hebergement.titre || 'Sans titre'}</h1>
                <div class="flex flex-col sm:flex-row sm:items-center mt-2 gap-2 sm:gap-4">
                    <div class="flex items-center px-3 py-1 rounded-full" style="background: rgba(37, 99, 235, 0.2);">
                        <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.极-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                        </svg>
                        <span class="ml-1 font-medium">${hebergement.rating || '4.5'}</span>
                        <span class="ml-2">(${Math.round((hebergement.rating || 4.5) * 20)} avis)</span>
                    </div>
                    <span>
                        <svg class="h-5 w-5 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        ${hebergement.ville || ''}, ${hebergement.pays || ''}
                    </span>
                </div>
            </div>
            
            <div class="grid grid-cols-1 lg:grid-cols-4 gap-4 mb-8">
                <div class="lg:col-span-2 row-span-2">
                    <img src="${firstImage}" alt="${hebergement.titre || 'Hébergement'}" class="w-full h-80 object-cover rounded-xl">
                </div>
                ${otherImages.map((img, i) => `
                    <div class="${i === 3 ? 'lg:col-span-2' : ''}">
                        <img src="${img}" alt="${hebergement.titre || 'Hébergement'}" class="w-full h-full object-cover rounded-xl">
                    </div>
                `).join('')}
            </div>
            
            <div class="flex flex-col lg:flex-row gap-8">
                <div class="lg:w-2/3">
                    <div class="glass-card mb-6" style="padding: 20px;">
                        <h2 class="text-xl font-bold mb-4">À propos de cet hébergement</h2>
                        <div>
                            ${hebergement.description || 'Description non disponible'}
                        </div>
                    </div>
                    
                    ${equipementsHTML}
                    ${reglesHTML}
                    ${mapHTML}
                </div>
                
                <div class="lg:w-1/3">
                    <div class="glass-card" style="padding: 20px; position: sticky; top: 20px;">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <span class="text-2xl font-bold text-blue-400">${new Intl.NumberFormat('fr-FR').format(hebergement.prixNuit || 0)} FCFA</span>
                                <span class="opacity-80">/nuit</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="h-5 w-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.极7 3.292c.3.921-.755 1.688-1.54 极.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                </svg>
                                <span class="ml-1">${hebergement.rating || '4.5'}</span>
                                <span class="ml-1 opacity-80">(${Math.round((hebergement.rating || 4.5) * 20)} avis)</span>
                            </div>
                        </div>
                        
                        <button class="w-full py-3 rounded-lg font-medium reserve-btn" style="background: rgba(255, 255, 255, 0.2);" data-id="${id}">
                            Réserver maintenant
                        </button>
                        
                        <div class="mt-4 text-sm text-center opacity-80">
                            Aucun frais de réservation
                        </div>
                    </div>
                </div>
            </div>
        `;

        document.getElementById('modalContent').innerHTML = modalContent;
        document.getElementById('detailsModal').classList.add('show');

        if (hebergement.coordonnees && hebergement.coordonnees.lat && hebergement.coordonnees.lng) {
            const lat = parseFloat(hebergement.coordonnees.lat);
            const lng = parseFloat(hebergement.coordonnees.lng);
            
            if (lat !== 0 && lng !== 0) {
                setTimeout(() => {
                    initDetailMap(lat, lng, hebergement.titre || 'Hébergement');
                }, 100);
            }
        }

        document.querySelectorAll('.reserve-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const hebergementId = this.getAttribute('data-id');
                document.getElementById('hebergementId').value = hebergementId;
                document.getElementById('detailsModal').classList.remove('show');
                document.getElementById('reservationModal').classList.add('show');
            });
        });
    }

    document.addEventListener('DOMContentLoaded', function() {
        updatePriceText();
        
        const filtersContent = document.getElementById('filtersContent');
        if (window.innerWidth < 1024) {
            filtersContent.classList.add('hidden');
        }
        
        const toggleFiltersBtn = document.getElementById('toggleFilters');
        if (toggleFiltersBtn) {
            toggleFiltersBtn.addEventListener('click', function() {
                filtersContent.classList.toggle('show');
            });
        }
        
        const applyFiltersBtn = document.getElementById('applyFilters');
        const resetFiltersBtn = document.getElementById('resetFilters');
        const resetSearchBtn = document.getElementById('resetSearch');
        const searchInput = document.getElementById('searchInput');
        const searchBtn = document.getElementById('searchBtn');
        
        function filterHebergements() {
            const pays = document.getElementById('filterPays')?.value || 'all';
            const ville = document.getElementById('filterVille')?.value || 'all';
            const type = document.getElementById('filterType')?.value || 'all';
            const maxPrice = document.getElementById('priceRange')?.value || 500000;
            const searchText = searchInput?.value.toLowerCase() || '';
            
            const cards = document.querySelectorAll('.hebergement-card');
            let visibleCount = 0;
            
            cards.forEach(card => {
                const cardVille = card.getAttribute('data-ville') || '';
                const cardType = card.getAttribute('data-type') || '';
                const cardPrix = parseFloat(card.getAttribute('data-prix') || 0);
                const cardPays = card.getAttribute('data-pays') || '';
                const cardTitle = card.querySelector('.card-title')?.textContent.toLowerCase() || '';
                const cardDescription = card.querySelector('.card-description')?.textContent.toLowerCase() || '';
                const cardLocation = `${cardVille} ${cardPays}`.toLowerCase();
                
                let show = true;
                
                if (pays !== 'all' && cardPays !== pays) show = false;
                if (ville !== 'all' && cardVille !== ville) show = false;
                if (type !== 'all' && cardType !== type) show = false;
                if (cardPrix > parseFloat(maxPrice)) show = false;
                if (searchText && !cardTitle.includes(searchText) && 
                    !cardDescription.includes(searchText) && !cardLocation.includes(searchText)) show = false;
                
                card.style.display = show ? 'block' : 'none';
                if (show) visibleCount++;
            });
            
            const resultsCount = document.getElementById('resultsCount');
            if (resultsCount) {
                resultsCount.textContent = `${visibleCount} propriété${visibleCount !== 1 ? 's' : ''} disponible${visibleCount !== 1 ? 's' : ''}`;
            }
        }
        
        if (applyFiltersBtn) applyFiltersBtn.addEventListener('click', filterHebergements);
        if (searchBtn && searchInput) {
            searchBtn.addEventListener('click', filterHebergements);
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') filterHebergements();
            });
        }
        
        if (resetFiltersBtn) {
            resetFiltersBtn.addEventListener('click', function() {
                document.getElementById('filterPays').value = 'all';
                document.getElementById('filterVille').value = 'all';
                document.getElementById('filterType').value = 'all';
                document.getElementById('priceRange').value = 500000;
                if (searchInput) searchInput.value = '';
                updatePriceText();
                filterHebergements();
            });
        }
        
        if (resetSearchBtn) {
            resetSearchBtn.addEventListener('click', function() {
                document.getElementById('filterPays').value = 'all';
                document.getElementById('filterVille').value = 'all';
                document.getElementById('filterType').value = 'all';
                document.getElementById('priceRange').value = 500000;
                if (searchInput) searchInput.value = '';
                updatePriceText();
                filterHebergements();
            });
        }

        document.addEventListener('click', function(e) {
            if (e.target.classList.contains('view-details-btn')) {
                const hebergementId = e.target.getAttribute('data-id');
                showHebergementDetails(hebergementId);
            }
        });

        const closeDetailsModalBtn = document.getElementById('closeDetailsModal');
        const detailsModal = document.getElementById('detailsModal');
        const closeModalBtn = document.getElementById('closeModal');
        const cancelReservationBtn = document.getElementById('cancelReservation');
        const reservationModal = document.getElementById('reservationModal');
        const arriveeInput = document.getElementById('arrivee');
        const departInput = document.getElementById('depart');
        
        if (closeDetailsModalBtn && detailsModal) {
            closeDetailsModalBtn.addEventListener('click', () => detailsModal.classList.remove('show'));
            detailsModal.addEventListener('click', (e) => {
                if (e.target === detailsModal) detailsModal.classList.remove('show');
            });
        }
        
        if (closeModalBtn && reservationModal) {
            closeModalBtn.addEventListener('click', () => reservationModal.classList.remove('show'));
            reservationModal.addEventListener('click', (e) => {
                if (e.target === reservationModal) reservationModal.classList.remove('show');
            });
        }
        
        if (cancelReservationBtn) {
            cancelReservationBtn.addEventListener('click', () => reservationModal.classList.remove('show'));
        }
        
        if (arriveeInput && departInput) {
            arriveeInput.addEventListener('change', updateReservationSummary);
            departInput.addEventListener('change', updateReservationSummary);
        }
    });

    window.initMap = initMap;
</script>

<script async defer 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCs8qQbxU6XAt3e2LUGTbpCcFtNHjUIzls&callback=initMap">
</script>

    @endsection
</body>
</html>
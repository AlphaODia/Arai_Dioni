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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: #1f2937;
            min-height: 100vh;
            transition: all 0.5s ease;
        }
        
        body.no-glass-effect {
            background: #f3f4f6;
        }
        
        body.no-glass-effect .liquid-glass {
            background: white;
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            color: #1f2937;
        }
        
        body.no-glass-effect .liquid-glass-dark {
            background: #1f2937;
            backdrop-filter: none;
            -webkit-backdrop-filter: none;
            border: 1px solid #374151;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }
        
        body.no-glass-effect .search-input,
        body.no-glass-effect .search-select {
            background: white;
            color: #1f2937;
            border: 1px solid #d1d5db;
        }
        
        body.no-glass-effect .search-input::placeholder {
            color: #6b7280;
        }
        
        body.no-glass-effect .form-label,
        body.no-glass-effect .hero-title,
        body.no-glass-effect .hero-subtitle,
        body.no-glass-effect .section-title,
        body.no-glass-effect .trip-route,
        body.no-glass-effect .trip-info,
        body.no-glass-effect .trip-meta-item,
        body.no-glass-effect .price-from,
        body.no-glass-effect .price-amount,
        body.no-glass-effect .feature-title,
        body.no-glass-effect .feature-description,
        body.no-glass-effect .testimonial-name,
        body.no-glass-effect .testimonial-text,
        body.no-glass-effect .testimonial-rating {
            color: #1f2937 !important;
            text-shadow: none;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 1rem;
        }
        
        /* Effet Liquid Glass */
        .liquid-glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px) saturate(180%);
            -webkit-backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2), 
                        inset 0 4px 20px rgba(255, 255, 255, 0.3);
        }
        
        .liquid-glass-dark {
            background: rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(12px) saturate(180%);
            -webkit-backdrop-filter: blur(12px) saturate(180%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
        }
        
        /* Header Styles */
        header {
            position: fixed;
            width: 100%;
            z-index: 50;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(12px) saturate(180%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.2), inset 0 4px 20px rgba(255, 255, 255, 0.3);
        }
        
        body.no-glass-effect header {
            background: white;
            backdrop-filter: none;
            border-bottom: 1px solid #e5e7eb;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
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
            align-items: center;
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
        
        /* Glass Toggle Button in Header */
        .glass-toggle-header {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 4px 12px rgba(31, 38, 135, 0.2);
            transition: all 0.3s ease;
            margin-left: 1rem;
        }
        
        .glass-toggle-header:hover {
            transform: scale(1.1);
        }
        
        .glass-toggle-header i {
            font-size: 1.2rem;
            color: var(--primary);
        }
        
        /* Hero Section */
        .hero {
            padding: 8rem 0 3rem;
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
            color: white;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            margin-bottom: 2rem;
            max-width: 600px;
            color: rgba(255, 255, 255, 0.9);
        }
        
        /* Improved Search Form */
        .search-form {
            border-radius: 1rem;
            padding: 2rem;
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
            color: white;
        }
        
        .search-input, .search-select {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 0.5rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.1);
            color: white;
        }
        
        .search-input:focus, .search-select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.2);
            background: rgba(255, 255, 255, 0.15);
        }
        
        .search-input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }
        
        .btn-search {
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
        
        .btn-search:hover {
            background: #6d28d9;
            transform: translateY(-2px);
            box-shadow: 极 4px 8px rgba(0,0,0,0.15);
        }
        
        /* Main Content */
        .main-content {
            padding: 2rem 0;
        }
        
        .section-title {
            font-size: 1.875rem;
            font-weight: 700;
            color: white;
            margin-bottom: 2rem;
            text-align: center;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        /* Trip Cards */
        .trips-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .trip-card {
            border-radius: 1rem;
            overflow: hidden;
            transition: transform 0.3极, box-shadow 0.3s;
        }
        
        .trip-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1);
        }
        
        .trip-image {
            height: 200px;
            overflow: hidden;
            position: relative;
        }
        
极       .trip-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .trip-card:hover .trip-image img {
            transform: scale(1.05);
        }
        
        .极rip-badge {
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
            color: white;
        }
        
        .trip-info {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            color: rgba(255, 255, 255, 0.8);
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
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.875rem;
        }
        
        .trip-price {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            padding-top: 1rem;
            margin-top: 1rem;
        }
        
        .price-from {
            font-size: 0.875rem;
            color: rgba(255, 255, 255, 0.8);
        }
        
        .price-amount {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
        }
        
        /* Why Choose Us Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, min极ax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        
        .feature-card {
            border-radius: 1rem;
            padding: 1.5rem;
            text-align: center;
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
            color: white;
        }
        
        .feature-description {
            color: rgba(255, 255, 255, 0.8);
        }
        
        /* Testimonials */
        .testimonials {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 1.5rem;
            margin-bottom: 3rem;
        }
        
        .testimonial-card {
            border-radius: 1rem;
            padding: 1.5rem;
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
            color: white;
        }
        
        .testimonial-rating {
            color: #f59e0b;
            margin-top: 0.25rem;
        }
        
        .testimonial-text {
            color: rgba(255, 255, 255, 0.8);
            font-style: italic;
        }
        
        /* Footer */
        footer {
            background: linear-gradient(to bottom, #111827, #000);
            position: relative;
            overflow: hidden;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            padding: 4rem极 2rem;
        }
        
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1.5rem;
        }
        
        .footer-logo-text {
            font-size: 1.5rem;
            font-weight: bold;
            color: white;
        }
        
        .footer-description {
            color: #d1d5db;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }
        
        .footer-social {
            display: flex;
            gap: 1rem;
        }
        
        .footer-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: white;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid #4f46e5;
            display: inline-block;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 0.75rem;
        }
        
        .footer-links a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.3s;
            display: flex;
            align-items: center;
        }
        
        .footer-links a:hover {
            color: #818cf8;
        }
        
        .footer-contact-item {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
            color: #d1d5db;
        }
        
        .footer-newsletter input {
            width: 100%;
            padding: 0.75rem;
            background: #1f2937;
            border: 1px solid #374151;
            border-radius: 0.5rem;
            color: white;
            margin-bottom: 0.75rem;
        }
        
.footer-newsletter .btn-primary {
    width: 100%;
    padding: 0.75rem;
    background: linear-gradient(to right, #4f46e5, #7c3aed);
    color: white;
    border: none;
    border-radius: 0.5rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s;
}
        
        .payment-section {
            padding: 2rem 0;
            border-top: 1px solid #374151;
        }
        
        .footer-bottom {
            padding: 1.5rem 0;
            border-top: 1px solid #374151;
            text-align: center;
            color: #9ca3af;
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
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
            color: #1f2937;
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
            
            .hero {
                padding: 10rem 0 3rem;
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
            
            .footer-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .footer-logo {
                justify-content: center;
            }
            
            .footer-social {
                justify-content: center;
            }
            
            .footer-contact-item {
                justify-content: center;
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
        
        /* Styles pour les particules et vagues dans le footer */
        .particle {
            animation: float 15s infinite ease-in-out;
            will-change: transform, opacity;
        }
        
        @keyframes float {
            0% { transform: translateY(0) rotate(0deg) scale(1); opacity: 0.7; }
            50% { transform: translateY(-40px) rotate(180deg) scale(1.2); opacity: 1; }
            100% { transform: translateY(-80px) rotate(360deg) scale(1); opacity: 0.1; }
        }
        
        .social-icon {
            display: inline-flex;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            align-items: center;
            justify-content: center;
            color: #ddd;
            transition: all 0.3s ease;
            transform: translateY(0);
        }
        
        .social-icon:hover {
            color: white;
            background: #4f46e5;
            transform: translateY(-3px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        
        .payment-method {
            background: rgba(255, 255, 255, 0.05);
            padding: 8px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 60px;
        }
        
        .payment-method:hover {
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
            transform: translateY(-3px);
            border-color: #4f46e5;
        }
        
        .wave-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            pointer-events: none;
            overflow: hidden;
        }
        
        .wave {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 200%;
            height: 100%;
        }
        
        .wave-fill {
            fill: #1f2937;
            animation: waveAnimation 15s linear infinite;
        }
        
        @keyframes waveAnimation {
            0% { transform: translateX(0); }
            50% { transform: translateX(-25%); }
            100% { transform: translateX(-50%); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="fixed w-full z-50">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <div class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center bg-white">
                    <span class="ml-3 text-xl font-bold" style="
                         background: linear-gradient(90deg, #333333, #666666, #999999);
                         -webkit-background-clip: text;
                         -webkit-text-fill-color: transparent;
                         font-weight: bold;
                         font-size: 1.5rem;
                         ">
                         ARAI DIONI
                    </span>
                    <img src="{{ asset('images/logo.png') }}" alt="Ari Dioni" class="h-10">
                </a>



                <!-- Navigation Desktop -->
                <nav class="hidden md:flex space-x-8">
                    <a href="{{ route('voyages') }}" class="text-gray-700 hover:text-indigo-600 font-medium hover:bg-white/20 py-2 px-4 rounded-lg transition">Voyages</a>
                    <a href="{{ route('colis.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium hover:bg-white/20 py-2 px-4 rounded-lg transition">Colis</a>
                    <a href="{{ route('hebergements') }}" class="text-gray-700 hover:text-indigo-600 font-medium hover:bg-white/20 py-2 px-4 rounded-lg transition">Hébergements</a>
                </nav>

                <!-- Boutons CTA et Glass Toggle -->
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('client.dashboard') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                            Mon compte
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium hover:bg-white/20 py-2 px-4 rounded-lg transition">Connexion</a>
                        <a href="{{ route('register') }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                            Inscription
                        </a>
                    @endauth
                    
                    <!-- Glass Effect Toggle Button in Header -->
                    <div class="glass-toggle-header" id="glassToggleHeader">
                        <i class="fas fa-glass-whiskey"></i>
                    </div>
                </div>
            </div>

            <!-- Menu Mobile -->
            <div class="md:hidden mt-4">
                <button id="mobile-menu-button" class="text-gray-700 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4极h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                <div id="mobile-menu" class="hidden absolute top-full left-0 w-full bg-white/10 backdrop-filter backdrop-blur-lg border-t border-white/20 mt-2">
                    <nav class="flex flex-col space-y-4 p极">
                        <a href="{{ route('voyages') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Voyages</a>
                        <a href="{{ route('colis.index') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Colis</a>
                        <a href="{{ route('hebergements') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Hébergements</a>
                        @guest
                            <a href="{{ route('login') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Connexion</a>
                            <a href="{{ route('register') }}" class="text-gray-700 hover:text-indigo-600 font-medium">Inscription</a>
                        @endguest
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">Réservez votre voyage en toute sérénité</h1>
                <p class="hero-subtitle">Découvrez les meilleurs trajets entre la Guinée et le Sénégal</p>
                
                <!-- Improved Search Form -->
                <form class="search-form liquid-glass" id="searchForm" method="GET">
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
                    <button type="submit" class="btn-search">Rechercher</button>
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
                <div class="feature-card liquid-glass">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3 class="feature-title">Sécurité garantie</h3>
                    <p class="feature-description">Nos véhicules sont régulièrement inspectés et nos conducteurs rigoureusement sélectionnés.</p>
                </div>
                
                <div class="feature-card liquid-glass">
                    <div class="feature-icon">
                        <i class="far fa-clock"></i>
                    </div>
                    <h3 class="feature-title">Ponctualité</h3>
                    <p class="feature-description">Nous respectons scrupuleusement les horaires pour que vous arriviez toujours à temps.</p>
                </div>
                
                <div class="feature-card liquid-glass">
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
                <div class="testimonial-card liquid-glass">
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
                
                <div class="testimonial-card liquid-glass">
                    <div class="testimonial-header">
                        <div class="testimonial-avatar">
                            <img src="https://randomuser.me/api/portraits/men/45极jpg" alt="Mamadou Bah">
                        </div>
                        <div>
                            <div class="testimonial-name">Mamadou Bah</div>
                            <div class="testimonial-rating">★★★★★</div>
                        </div>
                    </div>
                    <p class="testimonial-text">"J'ai été impressionné par le professionnalisme de l'équipe. Le bus était propre et climatisé. Excellent voyage!"</p>
                </div>
                
                <div class="testimonial-card liquid-glass">
                    <极 class="testimonial-header">
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
                    <div class="footer-logo" style="background: white; padding: 10px;">
                        <span class="footer-logo-text" style="
                             background: linear-gradient(90deg, #333333, #555555, #777777);
                             -webkit-background-clip: text;
                             -webkit-text-fill-color: transparent;
                             font-weight: bold;
                             font-size: 1.25rem;
                                                ">
                            ARI DIONI
                        </span>
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
    // Configuration et état global
    const CONFIG = {
        glassEffectKey: 'glassEffect',
        apiEndpoints: {
            voyages: '/api/voyages',
            reservedSeats: '/api/voyages/',
            reservation: '/api/reserver',
            search: '/voyages'
        },
        vehicleTypes: {
            bus: { seats: 53, duration: '12h' },
            minicar: { seats: 14, duration: '10h' },
            'taxi-vip': { seats: 6, duration: '9h' },
            taxi: { seats: 6, duration: '9h' }
        }
    };

    // État de l'application
    const APP_STATE = {
        glassEnabled: true,
        selectedSeats: [],
        currentVehicleType: '',
        currentTripId: '',
        currentTripDetails: {},
        allTrips: []
    };

    // Éléments DOM fréquemment utilisés
    const DOM_ELEMENTS = {
        glassToggle: document.getElementById('glassToggleHeader'),
        mobileMenuButton: document.getElementById('mobile-menu-button'),
        mobileMenu: document.getElementById('mobile-menu'),
        tripsContainer: document.getElementById('tripsContainer'),
        searchForm: document.getElementById('searchForm'),
        seatModal: document.getElementById('seatModal'),
        selectedSeatsDisplay: document.getElementById('selectedSeats'),
        busLayout: document.getElementById('busLayout'),
        minicarLayout: document.getElementById('minicarLayout'),
        taxiLayout: document.getElementById('taxiLayout')
    };

    // Initialisation de l'application
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Initialisation de l\'application...');
        initializeGlassEffect();
        initializeMobileMenu();
        initializeSearchForm();
        loadTripsFromBackend();
    });

    // Gestion de l'effet glass
    function initializeGlassEffect() {
        const savedPreference = localStorage.getItem(CONFIG.glassEffectKey);
        if (savedPreference !== null) {
            APP_STATE.glassEnabled = savedPreference === 'true';
            updateGlassEffect();
        }

        if (DOM_ELEMENTS.glassToggle) {
            DOM_ELEMENTS.glassToggle.addEventListener('click', toggleGlassEffect);
        }
    }

    function toggleGlassEffect() {
        APP_STATE.glassEnabled = !APP_STATE.glassEnabled;
        updateGlassEffect();
        localStorage.setItem(CONFIG.glassEffectKey, APP_STATE.glassEnabled);
    }

    function updateGlassEffect() {
        document.body.classList.toggle('no-glass-effect', !APP_STATE.glassEnabled);
        if (DOM_ELEMENTS.glassToggle) {
            DOM_ELEMENTS.glassToggle.innerHTML = APP_STATE.glassEnabled ? 
                '<i class="fas fa-glass-whiskey"></i>' : 
                '<i class="fas fa-times"></i>';
        }
    }

    // Menu mobile
    function initializeMobileMenu() {
        if (DOM_ELEMENTS.mobileMenuButton && DOM_ELEMENTS.mobileMenu) {
            DOM_ELEMENTS.mobileMenuButton.addEventListener('click', () => {
                DOM_ELEMENTS.mobileMenu.classList.toggle('hidden');
            });
        }
    }

    // Formulaire de recherche
    function initializeSearchForm() {
        if (DOM_ELEMENTS.searchForm) {
            DOM_ELEMENTS.searchForm.addEventListener('submit', handleSearchSubmit);
        }
    }

    async function handleSearchSubmit(e) {
        e.preventDefault();
        
        const formData = new FormData(DOM_ELEMENTS.searchForm);
        const searchParams = {
            depart: formData.get('depart'),
            destination: formData.get('destination'),
            date: formData.get('date'),
            vehicle_type: formData.get('vehicle_type')
        };

        try {
            console.log('Recherche avec paramètres:', searchParams);
            
            // Utilise la méthode GET avec des paramètres de query
            const queryString = new URLSearchParams();
            Object.entries(searchParams).forEach(([key, value]) => {
                if (value) queryString.append(key, value);
            });

            const response = await fetch(`${CONFIG.apiEndpoints.search}?${queryString.toString()}`, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json'
                }
            });

            if (!response.ok) {
                throw new Error(`Erreur HTTP: ${response.status}`);
            }

            const result = await response.json();
            console.log('Résultats de recherche:', result);
            
            // Gestion des différents formats de réponse
            let trips = [];
            if (result.success && Array.isArray(result.trajets)) {
                trips = result.trajets;
            } else if (result.success && Array.isArray(result.data)) {
                trips = result.data;
            }
            
            displayTrips(trips);
            
        } catch (error) {
            console.error('Erreur recherche:', error);
            displayError('Erreur lors de la recherche. Veuillez réessayer.');
        }
    }

    // Chargement des voyages
    async function loadTripsFromBackend() {
        try {
            console.log('🌐 Envoi de la requête API...');
            const response = await fetch(CONFIG.apiEndpoints.voyages);
            
            console.log('📨 Réponse reçue:', response);
            console.log('Status HTTP:', response.status);
            
            if (!response.ok) {
                const errorText = await response.text();
                console.error('❌ Erreur HTTP:', response.status, errorText);
                throw new Error(`Erreur API: ${response.status}`);
            }

            const result = await response.json();
            console.log('✅ Données JSON:', result);
            
            if (result.success && Array.isArray(result.data)) {
                APP_STATE.allTrips = result.data;
                displayTrips(result.data);
            } else {
                throw new Error('Format de réponse invalide');
            }
            
        } catch (error) {
            console.error('💥 Erreur complète:', error);
            displayError('Erreur lors du chargement: ' + error.message);
        }
    }

    function displayError(message) {
        if (!DOM_ELEMENTS.tripsContainer) return;
        
        DOM_ELEMENTS.tripsContainer.innerHTML = `
            <div class="col-span-3 text-center py-12 rounded-xl liquid-glass border border-indigo-200">
                <div class="inline-flex items-center justify-center w-16极h-16 bg-red-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-white mb-2">Erreur de chargement</h3>
                <p class="text-white max-w-md mx-auto">${message}</p>
                <button onclick="loadTripsFromBackend()" class="mt-4 px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 transition">
                    Réessayer
                </button>
            </div>
        `;
    }

    function showNoTripsMessage() {
        if (!DOM_ELEMENTS.tripsContainer) return;
        
        DOM_ELEMENTS.tripsContainer.innerHTML = `
            <div class="col-span-3 text-center py-12 rounded-xl liquid-glass border border-indigo-200">
                <div class="inline-flex items-center justify-center w-16 h-16 bg-indigo-100 rounded-full mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600极fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 极0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="text-xl font-medium text-white mb-2">Aucun trajet trouvé</h3>
                <p class="text-white max-w-md mx-auto">Nous n'avons trouvé aucun trajet correspondant à vos critères.</p>
            </div>
        `;
    }

    // Affichage des voyages
    function displayTrips(trips) {
        if (!DOM_ELEMENTS.tripsContainer) return;
        
        if (!trips || trips.length === 0) {
            showNoTripsMessage();
            return;
        }

        console.log('Affichage de', trips.length, 'voyages');
        
        try {
            const tripsHTML = trips.slice(0, 6).map(trip => {
                try {
                    return createTripCard(trip);
                } catch (error) {
                    console.error('Erreur création carte voyage:', error, trip);
                    return '';
                }
            }).join('');
            
            DOM_ELEMENTS.tripsContainer.innerHTML = tripsHTML;
        } catch (error) {
            console.error('Erreur affichage voyages:', error);
            displayError('Erreur lors de l\'affichage des voyages.');
        }
    }

    function createTripCard(trip) {
        const normalizedTrip = normalizeTripData(trip);
        const { departure, arrival, date, time, price, vehicleType, availableSeats, id } = normalizedTrip;
        const duration = CONFIG.vehicleTypes[vehicleType]?.duration || 'N/A';
        const vehicleImage = getVehicleImage(vehicleType);

        return `
            <div class="trip-card liquid-glass">
                <div class="trip-image">
                    <img src="${vehicleImage}" alt="${vehicleType}" loading="lazy">
                    <div class="trip-badge">${vehicleType.toUpperCase()}</div>
                </div>
                <div class="trip-details">
                    <h3 class="trip-route">${escapeHtml(departure)} → ${escapeHtml(arrival)}</h3>
                    <div class="极rip-info">
                        <i class="far fa-calendar-alt"></i>
                        <span>${formatDate(date)} • ${formatTime(time)}</span>
                    </div>
                    <div class="trip-meta">
                        <div class="trip-meta-item">
                            <i class="far fa-clock"></i>
                            <span>~${duration}</span>
                        </div>
                        <div class="trip-meta-item">
                            <i class="fas fa-chair"></i>
                            <span>${availableSeats} places restantes</span>
                        </div>
                    </div>
                    <div class="trip-price">
                        <div>
                            <div class="price-from">À partir de</div>
                            <div class="price-amount">${parseInt(price).toLocaleString()} GNF</div>
                        </div>
                        <button class="btn btn-primary" onclick="openSeatSelection('${escapeQuotes(vehicleType)}', '${escapeQuotes(id)}', ${escapeQuotes(JSON.stringify(trip))})">
                            Choisir un siège
                        </button>
                    </div>
                </div>
            </div>
        `;
    }

    function normalizeTripData(trip) {
        return {
            departure: trip.ville_depart || trip.departure || trip.depart || '',
            arrival: trip.ville_arrivee || trip.arrival || trip.arrivee || '',
            date: trip.date_depart || trip.date || '',
            time: trip.heure_depart || trip.departure_time || trip.time || '',
            price: trip.prix || trip.price || 0,
            vehicleType: trip.vehicule_type || trip.vehicle_type || trip.type_vehicule || '',
            availableSeats: trip.available_seats || trip.places_restantes || 0,
            id: trip.id || ''
        };
    }

    function formatDate(dateString) {
        if (!dateString) return 'Date non spécifiée';
        try {
            const date = new Date(dateString);
            return date.toLocaleDateString('fr-FR', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        } catch (error) {
            return dateString;
        }
    }

    function formatTime(timeString) {
        if (!timeString) return 'Heure non spécifiée';
        return timeString.substring(0, 5); // Format HH:MM
    }

    function getVehicleImage(vehicleType) {
        const images = {
            bus: 'https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80',
            minicar: 'https://images.unsplash.com/photo-1568605114967-8130f3a36994?ixlib=rb-4.0.3&ixid=MnwxMj极3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80',
            taxi: 'https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80',
            'taxi-vip': 'https://images.unsplash.com/photo-1542362567-b07e54358753?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80'
        };
        return images[vehicleType] || images.bus;
    }

    function escapeQuotes(value) {
        if (typeof value === 'string') {
            return value.replace(/"/g, '&quot;').replace(/'/g, '&#x27;');
        }
        return JSON.stringify(value).replace(/"/g, '&quot;').replace(/'/g, '&#x27;');
    }

    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Gestion des sièges
    async function openSeatSelection(vehicleType, tripId, tripDetails) {
        APP_STATE.currentVehicleType = vehicleType;
        APP_STATE.currentTripId = tripId;
        APP_STATE.currentTripDetails = typeof tripDetails === 'string' ? JSON.parse(tripDetails) : tripDetails;
        APP_STATE.selectedSeats = [];

        hideAllLayouts();
        showCorrectLayout(vehicleType);
        await loadReservedSeats(tripId);

        if (DOM_ELEMENTS.seatModal) {
            DOM_ELEMENTS.seatModal.style.display = 'flex';
        }
        if (DOM_ELEMENTS.selectedSeatsDisplay) {
            DOM_ELEMENTS.selectedSeatsDisplay.textContent = 'Aucun siège sélectionné';
        }
    }

    function hideAllLayouts() {
        if (DOM_ELEMENTS.busLayout) DOM_ELEMENTS.busLayout.style.display = 'none';
        if (DOM_ELEMENTS.minicarLayout) DOM_ELEMENTS.minicarLayout.style.display = 'none';
        if (DOM_ELEMENTS.taxiLayout) DOM_ELEMENTS.taxiLayout.style.display = 'none';
    }

    function showCorrectLayout(vehicleType) {
        const layoutMap = {
            'bus': DOM_ELEMENTS.busLayout,
            'minicar': DOM_ELEMENTS.minicarLayout,
            'taxi': DOM_ELEMENTS.taxiLayout,
            'taxi-vip': DOM_ELEMENTS.taxiLayout
        };

        const layout = layoutMap[vehicleType];
        if (layout) {
            if (vehicleType === 'bus') {
                generateBusLayout();
            }
            layout.style.display = 'grid';
        }
    }

    function generateBusLayout() {
        if (!DOM_ELEMENTS.busLayout) return;
        
        let html = '<div class="seat seat-driver">D</div>';
        
        // Add empty spaces for alignment
        for (let i = 0; i < 4; i++) {
            html += '<div class="aisle"></div>';
        }
        
        // Generate rows 1-12 (4 seats per row)
        for (let row = 1; row <= 12; row++) {
            for (let seatNum = 1; seatNum <= 4; seatNum++) {
                const seatNumber = (row - 1) * 4 + seatNum;
                html += `<div class="seat seat-available" onclick="toggleSeat(this, '${seatNumber}')">${seatNumber}</div>`;
                
                if (seatNum === 2) {
                    html += '<div class="aisle"></div>';
                }
            }
        }
        
        // Last row with 5 seats
        for (let i = 49; i <= 53; i++) {
            html += `<div class="seat seat-available" onclick="toggle极eat(this, '${i}')">${i}</div>`;
        }

        DOM_ELEMENTS.busLayout.innerHTML = html;
    }

    function toggleSeat(element, seatNumber) {
        if (element.classList.contains('seat-reserved') || element.classList.contains('seat-driver')) {
            return;
        }

        const isSelected = element.classList.contains('seat-selected');
        
        element.classList.toggle('seat-selected', !isSelected);
        element.classList.toggle('seat-available', isSelected);

        if (isSelected) {
            APP_STATE.selectedSeats = APP_STATE.selectedSeats.filter(seat => seat !== seatNumber);
        } else {
            APP_STATE.selectedSeats.push(seatNumber);
        }

        updateSelectedSeatsDisplay();
    }

    function updateSelectedSeatsDisplay() {
        if (DOM_ELEMENTS.selectedSeatsDisplay) {
            DOM_ELEMENTS.selected极eatsDisplay.textContent = APP_STATE.selectedSeats.length > 0 ?
                `Sièges sélectionnés: ${APP_STATE.selectedSeats.join(', ')}` :
                'Aucun siège sélectionné';
        }
    }

    async function loadReservedSeats(voyageId) {
    try {
        const response = await fetch(`${CONFIG.apiEndpoints.reservedSeats}${voyageId}/sieges`);
        if (!response.ok) {
            throw new Error(`Erreur: ${response.status}`);
        }
        
        // Nettoyer la réponse des commentaires //
        const responseText = await response.text();
        let cleanedResponse = responseText.trim();
        if (cleanedResponse.startsWith('//')) {
            cleanedResponse = cleanedResponse.substring(cleanedResponse.indexOf('\n') + 1);
        }
        
        const result = JSON.parse(cleanedResponse);
        const reservedSeats = result.reserved_seats || [];

        // Mettre à jour l'interface utilisateur
        document.querySelectorAll('.seat').forEach(seat => {
            const seatNumber = seat.textContent.trim();
            if (reservedSeats.includes(seatNumber) && !seat.classList.contains('seat-driver')) {
                seat.classList.remove('seat-available', 'seat-selected');
                seat.classList.add('seat-reserved');
                seat.onclick = null;
            }
        });
    } catch (error) {
        console.error("Error loading reserved seats:", error);
        // Optionnel: Afficher un message d'erreur à l'utilisateur
    }
    }

    function closeSeatSelection() {
        if (DOM_ELEMENTS.seatModal) {
            DOM_ELEMENTS.seatModal.style.display = 'none';
        }
    }

    // Réservation
    async function confirmReservation() {
    if (APP_STATE.selectedSeats.length === 0) {
        alert('Veuillez sélectionner au moins un siège.');
        return;
    }

    try {
        // Récupérer le token CSRF
        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content;
        
        if (!csrfToken) {
            throw new Error('Token CSRF non trouvé');
        }

        const response = await fetch(CONFIG.apiEndpoints.reservation, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                voyage_id: APP_STATE.currentTripId,
                sieges: APP_STATE.selectedSeats
            })
        });

        // Nettoyer la réponse des commentaires //
        const responseText = await response.text();
        let cleanedResponse = responseText.trim();
        if (cleanedResponse.startsWith('//')) {
            cleanedResponse = cleanedResponse.substring(cleanedResponse.indexOf('\n') + 1);
        }
        
        const result = JSON.parse(cleanedResponse);

        if (result.success) {
            alert(`Réservation confirmée! Sièges: ${APP_STATE.selectedSeats.join(', ')}`);
            closeSeatSelection();
            if (result.reservation_id) {
                window.location.href = `/ticket/${result.reservation_id}`;
            }
        } else {
            alert(result.message || 'Erreur lors de la réservation');
        }
    } catch (error) {
        console.error("Error saving reservation:", error);
        alert("Une erreur s'est produite lors de la réservation. Veuillez réessayer.");
    }
    }

    // Fermeture modale
    if (DOM_ELEMENTS.seatModal) {
        window.onclick = function(event) {
            if (event.target === DOM_ELEMENTS.seatModal) {
                closeSeatSelection();
            }
        };
    }

    // Fonction de debug
    window.debugTrips = function() {
        console.log('Trips chargés:', APP_STATE.allTrips);
        loadTripsFromBackend();
    };

    // Expose les fonctions globales
    window.loadTripsFromBackend = loadTripsFromBackend;
    window.openSeatSelection = openSeatSelection;
    window.toggleSeat = toggleSeat;
    window.closeSeatSelection = closeSeatSelection;
    window.confirmReservation = confirmReservation;
</script>

</body>
</html>
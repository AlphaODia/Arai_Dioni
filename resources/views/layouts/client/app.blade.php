<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ari Dioni - @yield('title')</title>
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        /* Styles Bootstrap pour la compatibilité */
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }
        
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        
        .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, 
        .col-7, .col-8, .col-9, .col-10, .col-11, .col-12,
        .col, .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, 
        .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, 
        .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
        .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, 
        .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, 
        .col-md-10, .col-md-11, .col-md-12, .col-md, .col-md-auto, 
        .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, 
        .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, 
        .col-lg-11, .col-lg-12, .col-lg, .col-lg-auto, .col-xl-1, 
        .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, 
        .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, 
        .col-xl-12, .col-xl, .col-xl-auto {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        @media (min-width: 768px) {
            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-md-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-md-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
            .col-md-10 {
                flex: 0 0 83.333333%;
                max-width: 83.333333%;
            }
        }
        
        @media (min-width: 992px) {
            .col-lg-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
            .col-lg-6 {
                flex: 0 0 50%;
                max-width: 50%;
            }
            .col-lg-8 {
                flex: 0 0 66.666667%;
                max-width: 66.666667%;
            }
        }
        
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.125);
            border-radius: 0.25rem;
        }
        
        .card-body {
            flex: 1 1 auto;
            padding: 1.25rem;
        }
        
        .btn {
            display: inline-block;
            font-weight: 400;
            color: #212529;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            background-color: transparent;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, 
                        border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        
        .btn-primary:hover {
            color: #fff;
            background-color: #0069d9;
            border-color: #0062cc;
        }
        
        .btn-lg {
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }
        
        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }
        
        .form-control-lg {
            height: calc(1.5em + 1rem + 2px);
            padding: 0.5rem 1rem;
            font-size: 1.25rem;
            line-height: 1.5;
            border-radius: 0.3rem;
        }
        
        .form-label {
            margin-bottom: 0.5rem;
            display: inline-block;
        }
        
        .mb-3 {
            margin-bottom: 1rem;
        }
        
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        
        .mb-5 {
            margin-bottom: 3rem;
        }
        
        .mt-4 {
            margin-top: 1.5rem;
        }
        
        .py-5 {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        
        .text-center {
            text-align: center;
        }
        
        .text-primary {
            color: #007bff !important;
        }
        
        .bg-light {
            background-color: #f8f9fa !important;
        }
        
        .rounded {
            border-radius: 0.25rem;
        }
        
        .shadow {
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        }
        
        .shadow-lg {
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        }
        
        .lead {
            font-size: 1.25rem;
            font-weight: 300;
        }
        
        .display-4 {
            font-size: 3.5rem;
            font-weight: 300;
            line-height: 1.2;
        }
        
        .fw-bold {
            font-weight: 700 !important;
        }
        
        .fs-5 {
            font-size: 1.25rem !important;
        }
        
        .blockquote {
            margin-bottom: 1rem;
            font-size: 1.25rem;
        }
        
        .blockquote-footer {
            display: block;
            font-size: 80%;
            color: #6c757d;
        }
        
        .fst-italic {
            font-style: italic !important;
        }
        
        .list-unstyled {
            padding-left: 0;
            list-style: none;
        }
        
        .d-flex {
            display: flex !important;
        }
        
        .d-inline-block {
            display: inline-block !important;
        }
        
        .align-items-center {
            align-items: center !important;
        }
        
        .justify-content-start {
            justify-content: flex-start !important;
        }
        
        .sticky-top {
            position: sticky;
            top: 0;
            z-index: 1020;
        }
        
        .img-fluid {
            max-width: 100%;
            height: auto;
        }
        
        /* Styles supplémentaires pour la page About */
        .underline {
            height: 4px;
            width: 80px;
            margin-bottom: 2rem;
        }
        
        .bg-opacity-10 {
            --bg-opacity: 0.1;
        }
        
        .rounded-circle {
            border-radius: 50% !important;
        }
        
        /* Correction pour le footer */
        .glass-footer {
            background: rgba(15, 23, 42, 0.8);
            backdrop-filter: blur(16px) saturate(180%);
            -webkit-backdrop-filter: blur(16px) saturate(180%);
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 -10px 35px rgba(0, 0, 0, 0.1),
                        inset 0 4px 20px rgba(255, 255, 255, 0.05);
        }
    </style>
    
    @yield('styles')
</head>
<body class="bg-gray-50">
    @include('layouts.client.header')

    <main class="min-h-screen">
        @yield('content')
    </main>

    @include('layouts.client.footer')

    <!-- Scripts -->
    @stack('scripts')
</body>
</html>
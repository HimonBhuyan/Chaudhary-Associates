<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chaudhary Associates | Luxury Architects, Interior Designers & Turnkey Build')</title>
    <meta name="description" content="@yield('meta_description', 'Design by Chaudhary Associates - Premier Architecture, Bespoke Interior Design, Planning and Turnkey Design & Build for Residential, Commercial and Institutional Spaces.')">
    <meta name="keywords" content="Architects, Interior Designers, Design and Build, Chaudhary Associates, Luxury Interiors, Turnkey Construction, Residential Architecture">
    <meta property="og:title" content="@yield('title', 'Chaudhary Associates | Architects & Interior Designers')">
    <meta property="og:description" content="Design • Build • Deliver. Architects • Interior Designers • Planners • Design & Build. Partners Sumaira & Anji Siddiqui.">
    <meta property="og:image" content="assets/img/curated/hero_villa.jpg">
    <meta property="og:type" content="website">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Early Theme Hydration (Zero Flicker) -->
    <script>
        (function() {
            var theme = localStorage.getItem('ca_theme') || 'dark';
            document.documentElement.setAttribute('data-theme', theme);
        })();
    </script>

    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css?v=3.2">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/img/logo_square.png">
</head>
<body>

    <!-- Header Navigation -->
    @include('components.navbar')

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    @include('components.footer')

    <!-- Modals -->
    @include('components.consultation_modal')
    @include('components.project_modal')
    @include('components.story_modal')
    @include('components.floating_actions')

    <!-- Core Scripts -->
    <script src="assets/js/main.js?v=3.2"></script>
    @yield('scripts')
</body>
</html>

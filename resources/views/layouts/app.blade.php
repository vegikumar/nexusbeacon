<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title', 'Nexus Beacon | Precision B2B Marketing & Intelligence')</title>
    <meta name="description" content="@yield('meta_description', 'Elevating B2B brands through data-driven account-based marketing and global audience intelligence.')">
    
    <!-- Preconnect to font services -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <!-- Font with swap for faster initial rendering -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Outfit:wght@700;800;900&display=swap" rel="stylesheet">
    
    <!-- Compression & Caching Headers -->
    <meta http-equiv="Cache-Control" content="public, max-age=31536000, immutable">

    <!-- Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        
        /* Optimize font loading */
        @font-face {
            font-family: 'Inter';
            font-display: swap;
        }
        
        @font-face {
            font-family: 'Outfit';
            font-display: swap;
        }
    </style>
</head>
<body class="selection:bg-primary/20 selection:text-primary overflow-x-hidden">
    <!-- Main Shell -->
    <div class="min-h-screen flex flex-col bg-white">
        @include('components.navbar')

        <main class="flex-grow pt-24">
            @yield('content')
        </main>

        @include('components.footer')
    </div>

    <!-- Global Scroll Reveal -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        // Once shown, we can stop observing it
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            // Initialize reveals
            document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

            // Re-observe if dynamic content is added (useful for partials)
            window.reobserveRevals = () => {
                document.querySelectorAll('.reveal:not(.active)').forEach(el => observer.observe(el));
            };
        });
    </script>
</body>
</html>

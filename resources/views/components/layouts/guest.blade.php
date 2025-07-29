    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <script src="//unpkg.com/alpinejs" defer></script>

                {{-- <title> {{ $seo_setting['meta_title'] }} </title>
                <meta name="description" content=" {{ $seo_setting['meta_description'] }} " />
                <meta name="robots" content="{{ $seo_setting['robot'] }}" />  --}}
                {{-- <link rel="canonical" href="{{ $canonicalUrl ?? url()->current() }}"> --}}


                <!-- Open Graph / Facebook -->
                {{-- <meta property="og:type" content="{{ $meta['og_type'] ??  'website' }}">
                <meta property="og:url" content="{{ url()->current() }}">
                <meta property="og:title" content="{{ $meta['og_title'] ?? $meta['meta_title']  }}">
                <meta property="og:description" content="{{ $meta['og_description'] ?? $meta['meta_description']  }}">
                <meta property="og:image" content="{{ asset('resources/assets/tvinternetdeals-social-banner.jpg') }}">  --}}

                <!-- Twitter -->
                {{-- <meta property="twitter:card" content="summary_large_image">
                <meta property="twitter:url" content="{{ url()->current() }}">
                <meta property="twitter:title" content="{{  ['meta_title']  }}">
                <meta property="twitter:description" content="{{   ['meta_description']  }}">
                <meta property="twitter:image" content="{{ asset('resources/assets/tvinternetdeals-social-banner.jpg') }}"> --}}


            

            {{-- Favicon --}}
            <link rel="icon" href="/favicon.ico" />

            <!-- Fonts -->
            <link rel="preconnect" href="https://fonts.bunny.net">
            <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
            <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

            <!-- Font Awesome CDN -->


            <!-- Google Fonts for Ragnarok Theme -->
            <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">


            <!-- Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            @livewireStyles
        </head>
            <body class="font-inter antialiased scroll-smooth">
                <div class="min-h-screen ">
                    <livewire:layouts.navigation />

                    <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>

                <livewire:layouts.footer />

            
            </div>
            @livewireScripts 
        </body>
    </html>

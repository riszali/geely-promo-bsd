<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="T1Th8NLBf2RUJmMnPZapZHi0TrxLDf60dRpJLEQulOk" />
    
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v={{ time() }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}?v={{ time() }}">

    <title>@yield('title', 'Geely Fatmawati | Innovation for Tomorrow')</title>
    <meta name="description" content="@yield('meta_description', 'Website resmi Dealer Geely Fatmawati Jakarta Selatan. Menghadirkan kendaraan cerdas dengan teknologi masa depan.')">
    <meta name="keywords" content="Geely Fatmawati, Geely Jakarta Selatan, Geely EX5, Geely Starray, Geely EX2, Mobil Listrik Jakarta, SUV Geely">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="Geely Fatmawati">
    <meta property="og:title" content="@yield('title', 'Geely Fatmawati')">
    <meta property="og:description" content="@yield('meta_description', 'Inovasi masa depan otomotif di Jakarta Selatan bersama Geely Fatmawati.')">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('title', 'Geely Fatmawati')">
    <meta name="twitter:description" content="@yield('meta_description')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/og-default.jpg'))">

    <link rel="preload" href="https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2" as="font" type="font/woff2" crossorigin>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        @font-face {
            font-family: 'Geely';
            src: url('https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        
        body {
            font-family: 'Inter', sans-serif;
        }

        .font-geely {
            font-family: 'Geely', sans-serif;
        }

        @keyframes wa-pulse {
            0% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.5); }
            70% { box-shadow: 0 0 0 15px rgba(37, 211, 102, 0); }
            100% { box-shadow: 0 0 0 0 rgba(37, 211, 102, 0); }
        }
        .animate-wa-pulse {
            animation: wa-pulse 2s infinite;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @stack('schema')
</head>
<body class="antialiased overflow-x-hidden bg-[#050505] text-white selection:bg-teal-500 selection:text-white">
    
    @include('components.layouts.navbar')

    <main class="min-h-screen">
        {{ $slot }}
    </main>

    @include('components.layouts.footer')

    <a href="https://wa.me/6285772087335?text=Halo%20Geely%20Fatmawati,%20saya%20tertarik%20untuk%20mengetahui%20lebih%20lanjut%20mengenai%20promo%20kendaraan%20di%20cabang%20Jakarta%20Selatan." 
       target="_blank" 
       rel="noopener noreferrer"
       class="fixed bottom-6 right-6 md:bottom-8 md:right-8 z-50 flex items-center justify-center w-14 h-14 md:w-16 md:h-16 bg-[#25D366] text-white rounded-full shadow-[0_4px_14px_0_rgba(37,211,102,0.39)] hover:bg-[#20bd5a] transition-colors duration-300 animate-wa-pulse group"
       aria-label="Chat dengan Sales Geely via WhatsApp">
       
        <svg class="w-7 h-7 md:w-8 md:h-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
        </svg>

        <div class="absolute right-full mr-4 top-1/2 -translate-y-1/2 px-4 py-2 bg-[#1a1a1a] text-white text-xs font-bold tracking-widest uppercase rounded-lg opacity-0 pointer-events-none group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap border border-white/10 shadow-xl hidden md:block">
            Hubungi Sales Fatmawati
        </div>
    </a>

</body>
</html>
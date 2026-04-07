<x-layouts.app>
    <!-- ==========================================
         ADVANCED SEO META TAGS FOR PROMO GEELY BSD
    =========================================== -->
    @push('head')
        <title>Harga & Spesifikasi Geely EX5 2026 BSD | SUV Listrik Premium</title>
        <meta name="description" content="Jelajahi Geely EX5, SUV listrik cerdas dengan jarak tempuh 495km. Cek harga promo Geely EX5 Pro & Max di Promo Geely BSD Tangerang. Booking Test Drive sekarang!">
        <meta name="keywords" content="Geely EX5, Harga Geely EX5, Spesifikasi Geely EX5, SUV Listrik BSD, Mobil Listrik Tangerang, Geely Indonesia, Promo Geely BSD 2026">
        <link rel="canonical" href="https://geelyfatmawati.id/models/ex5">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="product">
        <meta property="og:url" content="https://geelyfatmawati.id/models/ex5">
        <meta property="og:title" content="Geely EX5: SUV Listrik Cerdas Jarak Tempuh 495KM | Promo Geely BSD">
        <meta property="og:description" content="Dapatkan penawaran eksklusif Geely EX5 di BSD Tangerang. SUV EV dengan fitur keamanan Euro NCAP 5-Bintang.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="Harga Geely EX5 Terupdate - Promo Geely BSD">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg">
    @endpush

    <!-- Tambahan CDN untuk Pannellum (Interior 360 Viewer) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.css"/>
    <script src="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.js"></script>

    <!-- ==========================================
         ULTRA-PREMIUM LIGHT THEME STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #f8fafc; 
            color: #111827;
            overflow-x: hidden; 
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }
        
        /* Safe Responsive Heights */
        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        .video-feature { min-height: 350px; }
        .star-showcase { height: 250px; }
        
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 450px; }
            .video-feature { min-height: 500px; }
            .star-showcase { height: 350px; }
        }
        
        @media (min-width: 1024px) {
            .video-feature { min-height: 600px; }
            .star-showcase { height: 450px; }
        }

        /* Hide scrollbar for mobile carousel */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Advanced Cinematic Noise */
        .bg-noise-overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 10;
        }

        /* ==========================================
           CLEAN LIGHT GLASSMORPHISM 
        =========================================== */
        .glass-island {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
            position: relative;
            overflow: hidden;
            border-radius: 2rem;
        }

        .glass-island:hover {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(244, 114, 182, 0.5); /* Aksen Pink */
            box-shadow: 0 30px 60px rgba(236, 72, 153, 0.15), inset 0 1px 0 rgba(255, 255, 255, 1);
            transform: translateY(-5px);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.04);
            position: relative;
            overflow: hidden;
            border-radius: 2.5rem;
            transition: all 0.4s ease;
        }
        
        .glass-panel-light:hover {
            border-color: rgba(244, 114, 182, 0.4);
            box-shadow: 0 20px 40px rgba(236, 72, 153, 0.1);
            transform: translateY(-4px);
        }

        /* Ambient Glow Orbs behind Glass */
        .ambient-glow-pink { background: radial-gradient(circle, rgba(244, 114, 182, 0.2) 0%, rgba(255, 255, 255, 0) 70%); mix-blend-mode: multiply; }
        .ambient-glow-teal { background: radial-gradient(circle, rgba(45, 212, 191, 0.2) 0%, rgba(255, 255, 255, 0) 70%); mix-blend-mode: multiply; }

        /* Light Sweep Effect */
        .glass-island::before, .glass-panel-light::before {
            content: '';
            position: absolute;
            top: 0; left: -150%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.8), transparent);
            transform: skewX(-25deg);
            transition: left 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            pointer-events: none;
            z-index: 1;
        }
        .glass-island:hover::before, .glass-panel-light:hover::before { left: 200%; }

        /* Animations */
        .float-anim { animation: floating 6s ease-in-out infinite; }
        .float-anim-delay { animation: floating 6s ease-in-out infinite 3s; }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }

        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }

        /* Reveals */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-scale { opacity: 0; transform: scale(0.96); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }

        /* Gradients */
        .text-gradient-premium {
            background: linear-gradient(135deg, #111827 10%, #ec4899 70%, #be185d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .text-gradient-teal {
            background: linear-gradient(135deg, #111827 10%, #0d9488 70%, #0f766e 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .swatch-btn {
            border: 2px solid rgba(0, 0, 0, 0.1) !important;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }
        .swatch-btn:hover {
            transform: scale(1.05) !important;
            border-color: rgba(236, 72, 153, 0.5) !important;
        }
        .swatch-btn.active {
            transform: scale(1.15) !important;
            border-color: #ec4899 !important;
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.3);
        }

        .pnlm-container { background: transparent !important; }

        /* Bento Grid */
        .bento-wrapper {
            display: grid;
            gap: 1rem; 
            grid-template-columns: repeat(2, 1fr); 
            grid-auto-rows: 150px; 
        }
        .bento-card {
            position: relative;
            border-radius: 1.25rem; 
            overflow: hidden;
            background: rgba(255, 255, 255, 0.85);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.04);
        }
        .bento-content {
            position: absolute;
            bottom: 0; left: 0; width: 100%;
            padding: 1rem; 
            z-index: 2;
            transform: translateY(15px);
            transition: transform 0.5s cubic-bezier(0.22, 1, 0.36, 1);
            pointer-events: none;
        }

        .bento-main { grid-column: span 2; grid-row: span 2; } 
        .bento-square-1 { grid-column: span 1; grid-row: span 1; } 
        .bento-square-2 { grid-column: span 1; grid-row: span 1; } 
        .bento-square-3 { grid-column: span 2; grid-row: span 1; } 
        .bento-wide { grid-column: span 2; grid-row: span 2; } 

        @media (min-width: 768px) {
            .bento-wrapper {
                gap: 1.5rem;
                grid-template-columns: repeat(3, 1fr);
                grid-auto-rows: 320px; 
            }
            .bento-card { border-radius: 2rem; }
            .bento-content { padding: 2.5rem; }
            .bento-main { grid-column: span 2; grid-row: span 2; border-top-left-radius: 3rem; border-bottom-right-radius: 3rem; }
            .bento-square-1 { grid-column: span 1; grid-row: span 1; }
            .bento-square-2 { grid-column: span 1; grid-row: span 1; border-top-right-radius: 3rem;}
            .bento-square-3 { grid-column: span 1; grid-row: span 1; }
            .bento-wide { grid-column: span 2; grid-row: span 1; border-bottom-right-radius: 3rem; }
        }

        .bento-card img, .bento-card video {
            position: absolute; top: 0; left: 0; width: 100%; height: 100%;
            object-fit: cover !important; object-position: center !important;
            transition: transform 1s cubic-bezier(0.22, 1, 0.36, 1), filter 0.8s ease;
            z-index: 0;
        }
        .bento-card:hover img, .bento-card:hover video { transform: scale(1.08); }
        
        .bento-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7) 0%, rgba(255,255,255,0.1) 60%, transparent 100%);
            z-index: 1; pointer-events: none; opacity: 0.8; transition: opacity 0.5s ease;
        }
        .bento-card:hover .bento-overlay { opacity: 1; background: linear-gradient(to top, rgba(0,0,0,0.85) 0%, rgba(255,255,255,0.2) 70%, transparent 100%); }
        .bento-card:hover .bento-content { transform: translateY(0); }

        .mirror-rhd { transform: scaleX(-1) !important; }
        .group:hover .mirror-rhd, .bento-card:hover .mirror-rhd { transform: scale(-1.08, 1.08) !important; }

        /* Image Hover Zoom within Glass */
        .img-container { overflow: hidden; cursor: pointer; }
        .img-container img { transition: transform 1.5s cubic-bezier(0.16, 1, 0.3, 1); }
        .glass-island:hover .img-container img, .glass-panel-light:hover .img-container img { transform: scale(1.05); }

        body.lightbox-open { overflow: hidden; }
    </style>

    <!-- WRAPPER UTAMA -->
    <div class="w-full overflow-hidden bg-[#f8fafc]">

        <!-- ==========================================
             SECTION 1: HERO REVEAL & PRICING
        =========================================== -->
        <section class="relative h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#f8fafc] border-b border-gray-100 bg-noise-overlay">
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop playsinline class="w-full h-full object-cover transform scale-105 opacity-40 mix-blend-multiply">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(248,250,252,0.95)_100%)]"></div>
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-[#f8fafc] via-[#f8fafc]/80 to-transparent"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mt-12 md:mt-16">
                <!-- Promo Tag -->
                <div class="inline-flex items-center gap-3 mb-4 md:mb-6 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 backdrop-blur-xl reveal-up shadow-sm">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-pink-500 shadow-[0_0_10px_rgba(236,72,153,0.5)]"></span>
                    </span>
                    <span class="text-pink-600 text-[9px] tracking-[0.4em] font-bold uppercase">Promo Geely BSD</span>
                </div>

                <h1 class="font-geely text-[20vw] sm:text-[12vw] md:text-[100px] lg:text-[120px] text-gray-900 uppercase leading-none md:leading-[0.8] tracking-tighter drop-shadow-sm mb-8 reveal-up delay-100 relative">
                    <span class="text-gradient-premium relative z-10">EX5</span>
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 bg-pink-400/20 blur-[120px] z-0 pointer-events-none mix-blend-multiply"></span>
                </h1>
                
                <!-- Glowing Ambient for Cards -->
                <div class="relative">
                    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-48 h-48 ambient-glow-teal rounded-full blur-[80px] pointer-events-none z-0"></div>
                    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-48 h-48 ambient-glow-pink rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="grid grid-cols-2 gap-2 sm:gap-4 md:gap-8 mb-6 md:mb-8 reveal-up delay-200 max-w-[90vw] sm:max-w-2xl mx-auto px-1 sm:px-0 relative z-10">
                        
                        <!-- PRO Card -->
                        <div class="glass-island float-anim w-full px-2 py-4 sm:px-6 sm:py-5 md:px-8 md:py-6 flex flex-col items-center text-center group cursor-default">
                            <span class="text-teal-600 text-[9px] sm:text-[10px] font-bold tracking-[0.2em] sm:tracking-[0.3em] uppercase block mb-1">PRO</span>
                            <span class="font-geely text-sm sm:text-2xl md:text-3xl text-gray-900 tracking-tighter sm:tracking-tight mb-2 whitespace-nowrap">Rp 465.000.000*</span>
                            <div class="flex flex-col items-center gap-0.5 sm:gap-1 w-full pt-3 border-t border-gray-100 group-hover:border-teal-200 transition-colors">
                                <span class="text-teal-500 text-[8px] sm:text-[10px] uppercase tracking-wider sm:tracking-widest font-bold">2026 Special Price</span>
                                <span class="text-gray-400 text-[6px] sm:text-[8px] uppercase tracking-widest line-through">Official: Rp 475.000.000</span>
                            </div>
                        </div>
                        
                        <!-- MAX Card -->
                        <div class="glass-island float-anim-delay w-full px-2 py-4 sm:px-6 sm:py-5 md:px-8 md:py-6 flex flex-col items-center text-center group cursor-default relative overflow-hidden border-pink-200 hover:border-pink-400">
                            <span class="text-pink-600 text-[9px] sm:text-[10px] font-bold tracking-[0.2em] sm:tracking-[0.3em] uppercase block mb-1 relative z-10">MAX</span>
                            <span class="font-geely text-sm sm:text-2xl md:text-3xl text-gray-900 tracking-tighter sm:tracking-tight mb-2 relative z-10 whitespace-nowrap">Rp 505.000.000*</span>
                            <div class="flex flex-col items-center gap-0.5 sm:gap-1 w-full pt-3 border-t border-pink-100 relative z-10 group-hover:border-pink-300 transition-colors">
                                <span class="text-pink-500 text-[8px] sm:text-[10px] uppercase tracking-wider sm:tracking-widest font-bold drop-shadow-sm">2026 Special Price</span>
                                <span class="text-gray-400 text-[6px] sm:text-[8px] uppercase tracking-widest line-through">Official: Rp 515.000.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-gray-500 text-[7px] sm:text-[9px] md:text-[11px] font-light tracking-[0.2em] uppercase mb-10 reveal-up delay-300 max-w-[90vw] md:max-w-2xl mx-auto leading-relaxed">
                    *OTR Tangerang / Jabodetabek
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 reveal-up delay-400">
                    <a href="#explore" class="btn-shimmer flex items-center justify-center gap-3 bg-pink-500 text-white px-10 py-4 md:px-12 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-transform duration-500 hover:scale-105 hover:bg-pink-600 shadow-[0_10px_20px_rgba(236,72,153,0.3)]">
                        <span class="relative z-10">Explore Features</span>
                        <svg class="w-4 h-4 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: SPECS & 360 VIEWER
        =========================================== -->
        <section id="explore" class="py-16 md:py-24 lg:py-40 bg-white relative z-30 overflow-hidden border-b border-gray-100 bg-noise-overlay">
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] ambient-glow-teal opacity-50 pointer-events-none z-0"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/4 translate-y-1/4 w-[500px] h-[500px] ambient-glow-pink opacity-50 pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
                <h2 class="font-geely text-3xl sm:text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-8 md:mb-16 reveal-up leading-[1.1] px-2">
                    SEE HOW INNOVATION <br> <span class="text-gradient-premium">FUELS EVERY JOURNEY</span>
                </h2>
                
                <div class="flex flex-col items-center justify-center gap-4 md:gap-6 reveal-up delay-100 relative z-30 mb-8 md:mb-12">
                    <div class="inline-flex glass-panel-light p-1.5 rounded-full shadow-sm" style="border-radius: 9999px;">
                        <button id="btn-tab-exterior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-white text-[10px] md:text-[11px] font-bold tracking-[0.2em] uppercase bg-pink-500 shadow-md transition-all">Exterior</button>
                        <button id="btn-tab-interior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-gray-500 hover:text-pink-600 text-[10px] md:text-[11px] font-bold tracking-[0.2em] uppercase transition-all">Interior</button>
                    </div>
                    
                    <div class="h-6">
                        <p id="active-color-name" class="text-gray-600 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300">Teal</p>
                    </div>
                    
                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-3 md:gap-6 transition-all duration-500 opacity-100 px-4">
                        <button class="swatch-ext swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full ring-1 ring-pink-500/50 ring-offset-2 ring-offset-transparent transition-all border-pink-500" style="background-color: #20535c;" data-src="https://riszali.sirv.com/Spins/ex5/teal.spin" data-name="Teal"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-gray-200 transition-all" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex5/white.spin" data-name="White"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-gray-200 transition-all" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex5/silver.spin" data-name="Silver"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-gray-200 transition-all" style="background-color: #111111;" data-src="https://riszali.sirv.com/Spins/ex5/black.spin" data-name="Black"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-gray-200 transition-all" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex5/ash.spin" data-name="Ash"></button>
                    </div>
                    
                    <div id="swatches-interior" class="hidden flex-wrap justify-center gap-4 md:gap-6 transition-all duration-500 opacity-0 pointer-events-none px-4">
                        <button class="swatch-int swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full ring-1 ring-pink-500/50 ring-offset-2 ring-offset-transparent transition-all border-pink-500" style="background-color: #000000;" data-src="https://riszali.sirv.com/Spins/interior/vlack%20int.png" data-name="Black Interior"></button>
                        <button class="swatch-int swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-gray-200 transition-all" style="background-color: #ffffff;" data-src="https://riszali.sirv.com/Spins/interior/whiteint.png" data-name="White Interior"></button>
                    </div>
                </div>

                <!-- Viewer Display Container -->
                <div class="glass-island p-2 md:p-4 overflow-hidden reveal-up delay-200 shadow-xl w-full relative z-10 mb-10 viewer-container group border-white">
                    <div class="relative w-full h-full overflow-hidden rounded-[1.5rem] md:rounded-[2rem] bg-gray-100">
                        <div id="wrapper-exterior" class="absolute inset-0 w-full h-full z-10 transition-opacity duration-500" style="opacity: 1; pointer-events: auto;">
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex5/teal.spin" class="absolute top-1/2 left-1/2 w-[114%] h-[114%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                        </div>
                        <div id="wrapper-interior" class="absolute inset-0 w-full h-full transition-opacity duration-500 z-0 bg-[#f8fafc] flex flex-col justify-center items-center" style="opacity: 0; pointer-events: none;">
                            <div id="panorama" class="w-full h-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Box Spesifikasi -->
                <div class="relative z-30 -mt-20 sm:-mt-24 md:-mt-32 lg:-mt-40">
                    <div class="grid grid-cols-3 gap-2 sm:gap-4 md:gap-8 reveal-up delay-300 px-1 sm:px-0">
                        <div class="glass-panel-light relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-teal-200 transition-colors duration-500 flex flex-col justify-center items-center shadow-lg bg-white/90">
                            <p class="text-gray-500 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-teal-500 transition-colors duration-300 text-center">Range up to</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-gray-900 uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500">
                                <span class="text-teal-500 leading-none">495</span><span class="text-[8px] sm:text-xl md:text-2xl text-gray-500 ml-0.5 sm:ml-2 leading-none">km*</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-gray-200 mx-auto mb-1.5 sm:mb-4 group-hover:bg-teal-300 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">NEDC Range</p>
                        </div>

                        <div class="glass-panel-light relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-pink-200 transition-colors duration-500 flex flex-col justify-center items-center shadow-lg bg-white/90">
                            <p class="text-gray-500 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-pink-500 transition-colors duration-300 whitespace-nowrap text-center">Fast Charging</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-gray-900 uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500">
                                <span class="text-pink-500 leading-none">20</span><span class="text-[8px] sm:text-xl md:text-2xl text-gray-500 ml-0.5 sm:ml-1 leading-none">mins**</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-gray-200 mx-auto mb-1.5 sm:mb-4 group-hover:bg-pink-300 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">30% - 80%</p>
                        </div>

                        <div class="glass-panel-light relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-indigo-200 transition-colors duration-500 flex flex-col justify-center items-center shadow-lg bg-white/90">
                            <p class="text-gray-500 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-indigo-500 transition-colors duration-300 text-center">Acceleration</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-gray-900 uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500">
                                <span class="text-indigo-500 leading-none">6.9</span><span class="text-[8px] sm:text-lg md:text-xl lg:text-2xl text-gray-500 ml-0.5 sm:ml-2 tracking-normal lowercase leading-none">sec</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-gray-200 mx-auto mb-1.5 sm:mb-4 group-hover:bg-indigo-300 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">0-100 km/h</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 3: FEATURE OVERVIEW 
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 bg-[#f8fafc] relative overflow-hidden border-b border-gray-100 bg-noise-overlay">
            <!-- Glow Light Backgrounds -->
            <div class="absolute top-1/4 right-0 w-[400px] h-[400px] ambient-glow-teal opacity-50 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] ambient-glow-pink opacity-50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 md:px-12 relative z-10 pt-10">
                
                <div class="relative w-full flex flex-col items-center lg:block">
                    <!-- VIDEO FRAME -->
                    <div class="w-full lg:w-[85%] ml-auto relative rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-lg border border-white reveal-right bg-gray-100 group h-[50vh] md:h-[65vh]">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100">
                            <source src="https://raw.githubusercontent.com/riszali/geely-icon/refs/heads/main/Geely%20EX5%20Redefining%20Joyful%20Rides%20with%20Space%20and%20Style.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-gray-900/30 via-transparent to-transparent pointer-events-none"></div>
                    </div>

                    <!-- STACKED/OVERLAPPED TEXT CONTENT -->
                    <div class="w-[95%] sm:w-[80%] lg:w-[45%] relative z-20 mt-[-15%] sm:mt-[-10%] lg:mt-0 lg:absolute lg:bottom-12 lg:left-0 reveal-left delay-200">
                        <div class="glass-island p-6 sm:p-8 md:p-10 lg:p-12 shadow-2xl border-white bg-white/80 backdrop-blur-2xl">
                            <div class="inline-flex items-center gap-3 mb-4 sm:mb-6 px-4 py-2 sm:px-5 sm:py-2.5 rounded-full border border-pink-200 bg-pink-50 w-max shadow-sm">
                                <span class="text-pink-600 text-[8px] sm:text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                            </div>
                            <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-gray-900 leading-[1.1] mb-4 sm:mb-6">
                                Keseimbangan <br> <span class="text-gradient-premium">Sempurna</span>
                            </h2>
                            <div class="space-y-3 sm:space-y-4 md:space-y-6 text-gray-600 text-xs sm:text-sm md:text-base font-light leading-relaxed relative z-10">
                                <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                                <p class="hidden sm:block">Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 4: READY TO EXPLORE
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-40 relative w-full overflow-hidden bg-white border-b border-gray-100 bg-noise-overlay">
            
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] ambient-glow-pink opacity-30 pointer-events-none z-0"></div>

            <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    
                    <div class="lg:col-span-5 glass-island bg-white/70 p-8 md:p-10 lg:p-12 flex flex-col justify-center group hover:border-pink-200 transition-all duration-500 reveal-left border-white shadow-lg">
                        <div class="relative z-10">
                            <span class="text-pink-500 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block drop-shadow-sm">All-New EX5</span>
                            <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.9] text-gray-900">
                                Ready To <br> <span class="text-gradient-premium">Explore</span>
                            </h2>
                            
                            <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light mb-8 md:mb-10 max-w-[90vw] md:max-w-none">
                                Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                            </p>
                            
                            <a href="/test-drive" class="inline-flex items-center gap-3 text-pink-600 text-[10px] font-bold tracking-[0.2em] uppercase hover:text-pink-500 transition-colors w-max pb-2 border-b border-pink-200 hover:border-pink-500 group/btn">
                                Book Test Drive 
                                <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 group-hover/btn:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col reveal-right relative z-10">
                        <div class="glass-island p-2 group transition-all duration-500 shadow-xl flex flex-col star-showcase z-10 relative border-white">
                            <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden bg-gray-100">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100 z-0 mirror-rhd">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                                </video>
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent opacity-90 pointer-events-none z-10"></div>
                                <div class="absolute bottom-12 lg:bottom-10 left-6 md:left-10 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out pointer-events-none">
                                    <p class="text-white font-geely text-2xl md:text-3xl lg:text-4xl uppercase tracking-tight mb-1 drop-shadow-md">Immersive Atmosphere</p>
                                    <p class="text-pink-400 text-[9px] md:text-[10px] tracking-[0.2em] uppercase font-bold drop-shadow-sm">Premium Cabin Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 lg:gap-6 -mt-6 sm:-mt-10 md:-mt-8 lg:mt-6 relative z-20 px-1 sm:px-4 md:px-0 lg:px-0">
                            <div class="glass-panel-light relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-teal-200 transition-all duration-500 shadow-md flex flex-col justify-center items-center text-center bg-white/90">
                                <p class="text-gray-500 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 whitespace-nowrap">Up to</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 mb-1 sm:mb-2">
                                    <span class="leading-none text-teal-500">495</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-500 ml-0.5 sm:ml-1 leading-none">km*</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-gray-200 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">NEDC Range</p>
                            </div>
                            
                            <div class="glass-panel-light relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-pink-200 transition-all duration-500 shadow-md flex flex-col justify-center items-center text-center bg-white/90">
                                <p class="text-gray-500 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 whitespace-nowrap">Fast Charging</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 mb-1 sm:mb-2">
                                    <span class="leading-none text-pink-500">20</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-500 ml-0.5 sm:ml-1 leading-none">mins**</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-gray-200 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">30% - 80%</p>
                            </div>

                            <div class="glass-panel-light relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-indigo-200 transition-all duration-500 shadow-md flex flex-col justify-center items-center text-center bg-white/90">
                                <p class="text-gray-500 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 whitespace-nowrap">Acceleration</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-900 mb-1 sm:mb-2">
                                    <span class="leading-none text-indigo-500">6.9</span><span class="text-[8px] sm:text-[11px] lg:text-sm text-gray-500 ml-0.5 sm:ml-1 tracking-normal lowercase leading-none">sec</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-gray-200 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">0-100 km/h</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: BENTO GRID PHOTO GALLERY 
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-40 bg-[#f8fafc] relative z-20 overflow-hidden border-b border-gray-100 bg-noise-overlay">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] ambient-glow-pink opacity-40 pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                <div class="text-center mb-10 md:mb-16 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 backdrop-blur-xl shadow-sm">
                        <span class="text-pink-600 text-[9px] tracking-[0.4em] font-bold uppercase">Visual Experience</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl lg:text-6xl tracking-tight text-gray-900 leading-tight font-light max-w-[90vw] mx-auto">
                        Aesthetics in <span class="font-bold text-gradient-premium">every angle.</span>
                    </h2>
                </div>

                <div class="bento-wrapper reveal-up delay-200 p-2 md:p-3 glass-island border-white shadow-xl">
                    
                    <div class="bento-card bento-main group cursor-pointer" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg', 'Exterior - Sleek Silhouette', true)">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg" alt="Geely EX5 Exterior" class="bg-gray-100">
                        <div class="bento-overlay bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="bento-content">
                            <span class="text-pink-400 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 drop-shadow-md block">Exterior</span>
                            <h4 class="font-geely text-xl sm:text-2xl md:text-4xl text-white tracking-wide font-light drop-shadow-md leading-tight">Sleek Silhouette</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-1 group cursor-pointer" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp', 'Details - Smart Steering', true)">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" alt="Geely EX5 Steering" class="mirror-rhd bg-gray-100">
                        <div class="bento-overlay bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block group-hover:text-pink-300 transition-colors">Details</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Smart Steering</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-2 group cursor-pointer" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp', 'Technology - Crystal Display', true)">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp" alt="Geely EX5 Dashboard Display" class="bg-gray-100">
                        <div class="bento-overlay bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block group-hover:text-pink-300 transition-colors">Technology</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Crystal Display</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-3 group cursor-pointer" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/sunroof-yx4ak1dowru68xpb-1-YbN4az2lObuDROkG.jpg', 'Ambiance - Panoramic Roof', true)">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sunroof-yx4ak1dowru68xpb-1-YbN4az2lObuDROkG.jpg" alt="Geely EX5 Panoramic Sunroof" class="bg-gray-100">
                        <div class="bento-overlay bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block group-hover:text-pink-300 transition-colors">Ambiance</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Panoramic Roof</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-wide group cursor-pointer" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-4-AMqDx3kX48t57gGV.webp', 'Interior - Uncompromised Luxury', true)">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-4-AMqDx3kX48t57gGV.webp" alt="Geely EX5 Interior View" class="mirror-rhd bg-gray-100">
                        <div class="bento-overlay bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                        <div class="bento-content">
                            <span class="text-pink-400 text-[7px] sm:text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 drop-shadow-md block">Interior</span>
                            <h4 class="font-geely text-lg sm:text-xl md:text-3xl text-white tracking-wide font-light drop-shadow-md leading-tight">Uncompromised Luxury</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: SAFETY & CRASH TEST (SIDE BY SIDE LAYOUT)
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 relative z-20 bg-white overflow-hidden border-b border-gray-100 bg-noise-overlay">
            <!-- Ambient Glow -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-yellow-400/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                    
                    <!-- Text & Desc Side (Order 1 on mobile, Left Top on Desktop) -->
                    <div class="lg:col-span-5 reveal-left order-1 lg:row-start-1 flex flex-col justify-end h-full relative z-20">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-yellow-200 bg-yellow-50 backdrop-blur-md shadow-sm w-max">
                            <span class="text-yellow-600 text-[9px] tracking-[0.4em] font-bold uppercase">Safety Performance</span>
                        </div>
                        
                        <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter text-gray-900 mb-6 drop-shadow-sm leading-[1]">
                            EURO NCAP <br> <span class="text-yellow-500">5-STAR</span> RATED
                        </h2>
                        
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light">
                            Keamanan tanpa kompromi. Geely EX5 telah melalui serangkaian uji tabrak paling ketat dari Euro NCAP untuk memastikan perlindungan maksimal bagi Anda dan keluarga dalam setiap perjalanan.
                        </p>
                    </div>

                    <!-- Video Side (Order 2 on mobile, Right Span on Desktop) -->
                    <div class="lg:col-span-7 reveal-right order-2 lg:col-start-6 lg:row-span-2 flex flex-col justify-center relative z-10">
                        <div class="relative w-full aspect-video rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-xl border border-white bg-gray-100 group">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-[3s] ease-out">
                                <source src="/videos/crash-test.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/60 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-16 sm:bottom-20 lg:bottom-8 left-6 md:left-8 pointer-events-none">
                                <span class="text-yellow-400 text-[10px] md:text-xs tracking-[0.3em] font-bold uppercase drop-shadow-md">Crash Test</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cards Stats (Order 3 on mobile, Left Bottom on Desktop) -->
                    <div class="lg:col-span-5 reveal-left order-3 lg:row-start-2 flex flex-col justify-start w-full relative z-30 -mt-16 sm:-mt-24 md:-mt-32 lg:mt-0 px-2 lg:px-0">
                        <div class="grid grid-cols-3 gap-2 sm:gap-4 relative w-full">
                            <!-- BOLA CAHAYA -->
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150%] h-32 bg-yellow-200/50 rounded-full blur-[60px] pointer-events-none z-0"></div>

                            <div class="glass-panel-light py-4 px-2 sm:py-5 sm:px-4 shadow-md flex flex-col items-center justify-center group hover:border-yellow-300 transition-colors duration-500 relative z-10 w-full bg-white/90">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-gray-900 mb-1 group-hover:text-yellow-600 transition-colors">92%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-gray-200 mb-1.5 sm:mb-2 group-hover:bg-yellow-400 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-500 uppercase tracking-wider font-bold text-center group-hover:text-gray-700 transition-colors leading-tight">Adult<br class="block sm:hidden"> Occupant</span>
                            </div>
                            
                            <div class="glass-panel-light py-4 px-2 sm:py-5 sm:px-4 shadow-md flex flex-col items-center justify-center group hover:border-yellow-300 transition-colors duration-500 relative z-10 w-full bg-white/90">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-gray-900 mb-1 group-hover:text-yellow-600 transition-colors">88%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-gray-200 mb-1.5 sm:mb-2 group-hover:bg-yellow-400 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-500 uppercase tracking-wider font-bold text-center group-hover:text-gray-700 transition-colors leading-tight">Child<br class="block sm:hidden"> Occupant</span>
                            </div>

                            <div class="glass-panel-light py-4 px-2 sm:py-5 sm:px-4 shadow-md flex flex-col items-center justify-center group hover:border-yellow-300 transition-colors duration-500 relative z-10 w-full bg-white/90">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-gray-900 mb-1 group-hover:text-yellow-600 transition-colors">85%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-gray-200 mb-1.5 sm:mb-2 group-hover:bg-yellow-400 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-500 uppercase tracking-wider font-bold text-center group-hover:text-gray-700 transition-colors leading-tight">Safety<br class="block sm:hidden"> Assist</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: SMART APP & CONNECTIVITY
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-40 bg-[#f8fafc] relative z-20 overflow-hidden border-b border-gray-100 bg-noise-overlay">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] ambient-glow-pink opacity-40 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                
                <div class="text-center mb-10 md:mb-12 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 shadow-sm">
                        <span class="text-pink-600 text-[9px] tracking-[0.4em] font-bold uppercase">Smart Connectivity</span>
                    </div>
                    <h2 class="font-geely text-3xl md:text-4xl lg:text-5xl tracking-tighter text-gray-900 leading-[1.2] uppercase drop-shadow-sm max-w-4xl mx-auto">
                        YOUR GEELY EX5, <br>
                        <span class="text-gradient-premium">NOW IN THE PALM OF YOUR HAND</span>
                    </h2>
                </div>

                <div class="hidden lg:grid grid-cols-2 gap-3 reveal-up delay-100 max-w-6xl mx-auto glass-island p-3 transition-all duration-500 border-white shadow-xl">
                    
                    <div class="relative w-full h-full min-h-[350px] lg:min-h-[400px] rounded-[2rem] overflow-hidden group/img bg-gray-100">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-UvagCnVV5BDEDZJU.webp" alt="Geely EX5 App Desktop View" class="absolute inset-0 w-full h-full object-cover transform group-hover/img:scale-[1.03] transition-transform duration-700 ease-out">
                    </div>

                    <div class="relative w-full h-full min-h-[350px] lg:min-h-[400px] rounded-[2rem] overflow-hidden bg-black shadow-inner">
                        <iframe 
                            class="absolute top-0 left-0 w-full h-full border-0 opacity-90 hover:opacity-100 transition-opacity duration-300" 
                            src="https://www.youtube.com/embed/ajyHC2pMJ24?start=11&rel=0" 
                            title="Geely EX5 App Video" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>

                <div class="block lg:hidden reveal-up delay-100 mb-8 w-full overflow-hidden mt-8">
                    <div class="flex gap-4 overflow-x-auto snap-x snap-mandatory pb-6 pt-2 hide-scrollbar px-2">
                        <div class="snap-center shrink-0 w-[70vw] sm:w-[320px] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---seamless-connection---no-text---m-m7VDpwpx5jS757y9.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-md border border-gray-100" alt="Geely EX5 App Connection">
                        </div>
                        <div class="snap-center shrink-0 w-[70vw] sm:w-[320px] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---one-tap-full-control---no-text---m-Yle4MvMBDvCB2RxJ.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-md border border-gray-100" alt="Geely EX5 App Control">
                        </div>
                        <div class="snap-center shrink-0 w-[70vw] sm:w-[320px] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---always-charged---no-text---m-mePgLvL2qJce1ZJ3.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-md border border-gray-100" alt="Geely EX5 App Status">
                        </div>
                    </div>
                    
                    <div class="text-center mt-2 flex justify-center items-center gap-2 text-pink-500 text-[10px] font-bold uppercase tracking-widest animate-pulse">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        Swipe to view gallery
                    </div>
                </div>

                <div class="block lg:hidden reveal-up delay-300 mx-auto max-w-5xl mt-8 px-4">
                    <div class="relative shadow-lg rounded-[1.8rem] border border-gray-100">
                        <div class="relative w-full h-[250px] sm:h-[300px] rounded-[1.8rem] overflow-hidden bg-black">
                            <iframe class="absolute top-0 left-0 w-full h-full border-0" src="https://www.youtube.com/embed/ajyHC2pMJ24?start=11&rel=0" title="Geely EX5 App Video" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-12 md:mt-16 reveal-up delay-400">
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed md:leading-loose font-medium max-w-2xl mx-auto px-4">
                        Kendalikan EX5 Anda dari mana saja. Mulai dari mengatur suhu kabin, memantau daya baterai, hingga mempersiapkan perjalanan—semuanya hanya dengan sentuhan di smartphone Anda.
                    </p>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 8: DIVE INTO THE DETAILS
        =========================================== -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-white overflow-hidden bg-noise-overlay border-t border-gray-100">
            <!-- Glowing ambient background -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] ambient-glow-pink opacity-40 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 shadow-sm animate-float">
                        <span class="text-pink-600 text-[9px] tracking-[0.4em] font-bold uppercase">The Blueprint</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 leading-tight">
                        Dive Into <span class="text-gradient-premium">The Details</span>
                    </h2>
                    <p class="text-gray-600 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed relative z-10">
                        Get a look at the Geely EX5’s advanced features and specifications, designed to set a new standard for EV.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start relative z-10">
                    
                    <!-- Left: Navigation Link Cards (Di bawah pada Mobile) -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Card Exterior -->
                        <a href="{{ route('models.ex5.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-all duration-500 border-2 border-pink-500 p-1 glass-island">
                            <div class="relative w-full h-full rounded-[1.2rem] overflow-hidden bg-gray-100">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-m2Wq42Nv3lFqrP1L.webp" alt="Geely EX5 Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out z-0">
                                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                                <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                    <div>
                                        <span class="text-pink-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Explore</span>
                                        <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Exterior</h3>
                                    </div>
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-pink-500 flex items-center justify-center text-white shadow-lg transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Card Interior -->
                        <a href="{{ route('models.ex5.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-sm hover:shadow-lg transition-all duration-500 border border-white p-1 glass-panel-light">
                            <div class="relative w-full h-full rounded-[1.2rem] overflow-hidden bg-gray-100">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Geely EX5 Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out z-0 mirror-rhd">
                                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                                <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                    <div>
                                        <span class="text-gray-300 group-hover:text-pink-400 transition-colors text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Discover</span>
                                        <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Interior</h3>
                                    </div>
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-pink-500 transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- Card Specification -->
                        <a href="{{ route('models.ex5.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-sm hover:shadow-lg transition-all duration-500 border border-white p-1 glass-panel-light">
                            <div class="relative w-full h-full rounded-[1.2rem] overflow-hidden bg-gray-100">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ied-tF2sW5R0UW8pMCMV.webp" alt="Geely EX5 Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out z-0">
                                <div class="absolute inset-0 bg-gradient-to-r from-gray-900/80 via-gray-900/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                                <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                    <div>
                                        <span class="text-gray-300 group-hover:text-pink-400 transition-colors text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Learn More</span>
                                        <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Specs</h3>
                                    </div>
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-pink-500 transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                        <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Right: Dimensions Box (Di Atas pada Mobile) -->
                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        
                        <!-- Dimensions Box (Light Theme) -->
                        <div class="glass-island p-6 md:p-8 flex flex-col shadow-xl relative overflow-hidden group hover:border-pink-200 transition-colors duration-500 border-white bg-white/90">
                            <!-- Background glow dalam kotak -->
                            <div class="absolute top-0 right-0 w-32 h-32 ambient-glow-pink opacity-50 rounded-full blur-[50px] group-hover:opacity-80 transition-opacity duration-500 pointer-events-none"></div>

                            <h4 class="text-gray-900 font-geely text-2xl md:text-3xl mb-1 relative z-10 drop-shadow-sm">Dimensions</h4>
                            <p class="text-pink-500 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                            
                            <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                                <div class="border-l-2 border-pink-400 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">4615</p>
                                </div>
                                <div class="border-l-2 border-pink-400 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">1901</p>
                                </div>
                                <div class="border-l-2 border-pink-400 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">1670</p>
                                </div>
                                <div class="border-l-2 border-pink-400 pl-4">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl md:text-4xl text-gray-900 drop-shadow-sm">2750</p>
                                </div>
                            </div>

                            <!-- Sketch Image -->
                            <div class="w-full relative mt-8 opacity-40 group-hover:opacity-60 transition-opacity duration-500 z-10 mix-blend-multiply">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="Geely EX5 Sketch" loading="lazy" class="w-full h-auto object-contain">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-3 w-full relative z-10">
                            <a href="{{ route('models.ex5.specification') }}" class="btn-shimmer w-full py-4 md:py-5 rounded-full bg-pink-500 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_20px_rgba(236,72,153,0.3)]">
                                Show Full Specs
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full">
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-200 bg-white text-gray-600 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-50 hover:text-pink-600 hover:border-pink-200 transition-colors duration-300 flex items-center justify-center gap-2 shadow-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Brochure
                                </a>
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-200 bg-white text-gray-600 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-50 hover:text-pink-600 hover:border-pink-200 transition-colors duration-300 flex items-center justify-center gap-2 shadow-sm">
                                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    Owner's Manual
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div> <!-- END OF GLOBAL OVERFLOW WRAPPER -->

    <!-- ==========================================
         LIGHTBOX MODAL (LIGHT THEME)
    =========================================== -->
    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-white/95 backdrop-blur-3xl opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-6 right-6 md:top-10 md:right-10 text-gray-500 hover:text-pink-600 transition-colors bg-gray-50 p-2 rounded-full border border-gray-200 shadow-sm hover:border-pink-200 cursor-pointer" style="z-index: 10000;">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[80vh] w-full flex justify-center items-center group pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] border border-gray-100 transition-transform duration-300 transform scale-95 bg-white backdrop-blur-sm">
            </div>
            <div class="mt-6 md:mt-8 pointer-events-auto text-center">
                <p id="lightbox-caption" class="font-geely text-pink-600 text-lg md:text-2xl tracking-widest uppercase font-semibold drop-shadow-sm"></p>
            </div>
        </div>
    </div>

    <!-- ==========================================
         SCRIPTS 
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right').forEach(el => revealObserver.observe(el));

            const btnExt = document.getElementById('btn-tab-exterior');
            const btnInt = document.getElementById('btn-tab-interior');
            const wrapExt = document.getElementById('wrapper-exterior');
            const frameExt = document.getElementById('iframe-exterior');
            const wrapInt = document.getElementById('wrapper-interior');
            const swatchesExtGroup = document.getElementById('swatches-exterior');
            const swatchesIntGroup = document.getElementById('swatches-interior');
            const colorNameDisplay = document.getElementById('active-color-name');

            let panoramaViewer = null;

            btnExt.addEventListener('click', () => {
                btnExt.classList.add('bg-pink-500', 'text-white', 'shadow-md');
                btnExt.classList.remove('text-gray-500', 'hover:text-pink-600');
                btnInt.classList.remove('bg-pink-500', 'text-white', 'shadow-md');
                btnInt.classList.add('text-gray-500', 'hover:text-pink-600');
                
                wrapExt.style.opacity = '1';
                wrapExt.style.pointerEvents = 'auto';
                wrapExt.style.zIndex = '10';
                wrapInt.style.opacity = '0';
                wrapInt.style.pointerEvents = 'none';
                wrapInt.style.zIndex = '0';
                
                swatchesIntGroup.classList.add('hidden', 'opacity-0', 'pointer-events-none');
                swatchesExtGroup.classList.remove('hidden');
                setTimeout(() => swatchesIntGroup.classList.remove('opacity-0', 'pointer-events-none'), 50);
                
                const activeExt = document.querySelector('.swatch-ext.active');
                if(activeExt) colorNameDisplay.textContent = activeExt.getAttribute('data-name');
            });

            btnInt.addEventListener('click', () => {
                btnInt.classList.add('bg-pink-500', 'text-white', 'shadow-md');
                btnInt.classList.remove('text-gray-500', 'hover:text-pink-600');
                btnExt.classList.remove('bg-pink-500', 'text-white', 'shadow-md');
                btnExt.classList.add('text-gray-500', 'hover:text-pink-600');
                
                wrapExt.style.opacity = '0';
                wrapExt.style.pointerEvents = 'none';
                wrapExt.style.zIndex = '0';
                wrapInt.style.opacity = '1';
                wrapInt.style.pointerEvents = 'auto';
                wrapInt.style.zIndex = '10';
                
                swatchesExtGroup.classList.add('hidden', 'opacity-0', 'pointer-events-none');
                swatchesIntGroup.classList.remove('hidden');
                setTimeout(() => swatchesIntGroup.classList.remove('opacity-0', 'pointer-events-none'), 50);
                
                const activeInt = document.querySelector('.swatch-int.active');
                if(activeInt) {
                    colorNameDisplay.textContent = activeInt.getAttribute('data-name');
                    
                    if(!panoramaViewer) {
                        panoramaViewer = pannellum.viewer('panorama', {
                            "type": "equirectangular",
                            "panorama": activeInt.getAttribute('data-src'),
                            "autoLoad": true,
                            "autoRotate": -2
                        });
                    }
                }
            });

            const swatchesExt = document.querySelectorAll('.swatch-ext');
            swatchesExt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatchesExt.forEach(s => {
                        s.classList.remove('active', 'border-pink-500', 'ring-1', 'ring-pink-500/50', 'ring-offset-2', 'ring-offset-transparent');
                        s.classList.add('border-gray-200');
                    });
                    swatch.classList.add('active', 'border-pink-500', 'ring-1', 'ring-pink-500/50', 'ring-offset-2', 'ring-offset-transparent');
                    swatch.classList.remove('border-gray-200');
                    
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });

            const swatchesInt = document.querySelectorAll('.swatch-int');
            swatchesInt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatchesInt.forEach(s => {
                        s.classList.remove('active', 'border-pink-500', 'ring-1', 'ring-pink-500/50', 'ring-offset-2', 'ring-offset-transparent');
                        s.classList.add('border-gray-200');
                    });
                    swatch.classList.add('active', 'border-pink-500', 'ring-1', 'ring-pink-500/50', 'ring-offset-2', 'ring-offset-transparent');
                    swatch.classList.remove('border-gray-200');
                    
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    const imageUrl = swatch.getAttribute('data-src');
                    const timestamp = new Date().getTime(); // Mencegah bug cache pada iframe Pannellum
                    
                    if(panoramaViewer) {
                        panoramaViewer.destroy();
                    }
                    panoramaViewer = pannellum.viewer('panorama', {
                        "type": "equirectangular",
                        "panorama": `${imageUrl}?t=${timestamp}`,
                        "autoLoad": true,
                        "autoRotate": -2
                    });
                });
            });

        });

        // Lightbox Logic 
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');

        function openLightbox(imgSrc, caption, isLightImage = false) {
            lightboxImg.src = imgSrc;
            lightboxCaption.textContent = caption;
            
            if(isLightImage) {
                lightboxImg.classList.add('bg-white', 'p-4');
            } else {
                lightboxImg.classList.remove('bg-white', 'p-4');
            }

            lightboxImg.classList.replace('scale-95', 'scale-100');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });
            document.body.classList.add('lightbox-open');
        }

        function closeLightbox(e) {
            if (e && e.target === lightboxImg) return;
            lightboxImg.classList.replace('scale-100', 'scale-95');
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
                lightboxImg.classList.remove('bg-white', 'p-4');
                document.body.classList.remove('lightbox-open');
            }, 300); 
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    </script>

    <!-- ==========================================
         ADVANCED SEO SCHEMA FOR PROMO GEELY BSD
    =========================================== -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org/",
      "@@type": "Product",
      "name": "Geely EX5 BSD Tangerang Indonesia",
      "image": [
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg",
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp"
      ],
      "description": "SUV Listrik Premium Geely EX5 dengan jarak tempuh 495km NEDC, fast charging 20 menit, dan rating keamanan Euro NCAP 5-Bintang.",
      "brand": {
        "@@type": "Brand",
        "name": "Geely"
      },
      "offers": {
        "@@type": "AggregateOffer",
        "url": "https://geelyfatmawati.id/models/ex5",
        "priceCurrency": "IDR",
        "lowPrice": "465000000",
        "highPrice": "505000000",
        "offerCount": "2"
      },
      "additionalProperty": [
        {
          "@@type": "PropertyValue",
          "name": "Range",
          "value": "495 km"
        },
        {
          "@@type": "PropertyValue",
          "name": "Body Type",
          "value": "SUV"
        }
      ]
    }
    </script>
</x-layouts.app>
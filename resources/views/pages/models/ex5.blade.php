<x-layouts.app>
    <!-- ==========================================
         ADVANCED SEO META TAGS FOR GEELY EX5 FATMAWATI
    =========================================== -->
    @push('head')
        <title>Harga & Spesifikasi Geely EX5 2026 Fatmawati | SUV Listrik Premium</title>
        <meta name="description" content="Jelajahi Geely EX5, SUV listrik cerdas dengan jarak tempuh 495km. Cek harga promo Geely EX5 Pro & Max di Dealer Geely Fatmawati Jakarta Selatan. Booking Test Drive sekarang!">
        <meta name="keywords" content="Geely EX5, Harga Geely EX5, Spesifikasi Geely EX5, SUV Listrik Jakarta Selatan, Mobil Listrik Fatmawati, Geely Indonesia, Promo Geely 2026">
        <link rel="canonical" href="https://geelyfatmawati.id/models/ex5">
        
        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="product">
        <meta property="og:url" content="https://geelyfatmawati.id/models/ex5">
        <meta property="og:title" content="Geely EX5: SUV Listrik Cerdas Jarak Tempuh 495KM | Geely Fatmawati">
        <meta property="og:description" content="Dapatkan penawaran eksklusif Geely EX5 di Fatmawati. SUV EV dengan fitur keamanan Euro NCAP 5-Bintang.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:title" content="Harga Geely EX5 Terupdate - Dealer Resmi Fatmawati">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg">
    @endpush
    <!-- Tambahan CDN untuk Pannellum (Interior 360 Viewer) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.css"/>
    <script src="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.js"></script>

    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES & MICRO-ADJUSTMENTS
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            overflow-x: hidden; 
            max-width: 100vw; 
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
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* ==========================================
           ULTRA-FROSTED GLASSMORPHISM (AURORA THEME)
           *UPGRADED FOR MAX GLASS REALISM*
        =========================================== */
        
        /* Dark Mode Frosted Glass (Thick Acrylic Feel) */
        .glass-panel {
            background: linear-gradient(135deg, rgba(25, 20, 35, 0.45) 0%, rgba(10, 10, 15, 0.25) 100%);
            backdrop-filter: blur(48px);
            -webkit-backdrop-filter: blur(48px);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-top: 1px solid rgba(255, 255, 255, 0.25);
            border-left: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 1px 1px 2px rgba(255, 255, 255, 0.15);
            position: relative;
            overflow: hidden;
            border-radius: 2rem;
        }

        /* Light Mode Glass Panel */
        .glass-panel-light {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.85) 0%, rgba(245, 240, 250, 0.65) 100%);
            backdrop-filter: blur(40px) saturate(160%);
            -webkit-backdrop-filter: blur(40px) saturate(160%);
            border: 1px solid rgba(255, 255, 255, 1);
            border-bottom: 1px solid rgba(200, 190, 220, 0.4);
            border-right: 1px solid rgba(200, 190, 220, 0.4);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.08), inset 0 2px 0 rgba(255, 255, 255, 0.9);
            position: relative;
            overflow: hidden;
            border-radius: 2.5rem;
        }

        /* Aurora Animated Glass Panel */
        .glass-panel-aurora {
            background: linear-gradient(-45deg, rgba(45, 15, 60, 0.9), rgba(15, 60, 55, 0.85), rgba(40, 20, 50, 0.95), rgba(15, 45, 60, 0.7));
            background-size: 300% 300%;
            animation: gradientAuroraBG 10s ease infinite;
            backdrop-filter: blur(45px) saturate(150%);
            -webkit-backdrop-filter: blur(45px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            border-left: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(30, 10, 40, 0.7), inset 1px 1px 2px rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            border-radius: 2.5rem;
        }
        @keyframes gradientAuroraBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Glass Noise Texture (The Secret to Realistic Frosted Glass) */
        .glass-panel::after, .glass-panel-light::after, .glass-panel-aurora::after {
            content: '';
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='1.5' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.08'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 0;
            mix-blend-mode: overlay;
        }

        /* Light Sweep Effect */
        .glass-panel::before, .glass-panel-light::before, .glass-panel-aurora::before {
            content: '';
            position: absolute;
            top: 0; left: -150%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.15), transparent);
            transform: skewX(-25deg);
            transition: left 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            pointer-events: none;
            z-index: 1;
        }
        .glass-panel-light::before { background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.8), transparent); }
        .glass-panel-aurora::before { background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.12), transparent); }
        .glass-panel:hover::before, .glass-panel-light:hover::before, .glass-panel-aurora:hover::before { left: 200%; }

        /* Animations */
        .float-anim { animation: floating 6s ease-in-out infinite; }
        .float-anim-delay { animation: floating 6s ease-in-out infinite 3s; }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        .btn-shimmer {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #d4d4d8 100%);
            box-shadow: 0 10px 30px rgba(255,255,255,0.2), inset 0 2px 0 rgba(255,255,255,1);
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%; left: -50%;
            width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.8), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }

        /* Reveals */
        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }

        /* Gradients */
        .text-liquid {
            background: linear-gradient(270deg, #ffffff, #c084fc, #2dd4bf, #ffffff);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: liquidText 8s ease infinite;
        }
        @keyframes liquidText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .text-glow-anim {
            background: linear-gradient(90deg, #ffffff, #2dd4bf, #ffffff, #c084fc, #ffffff);
            background-size: 200% auto;
            color: #fff;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shineText 3s linear infinite;
        }
        @keyframes shineText {
            0% { background-position: 0% center; }
            100% { background-position: 200% center; }
        }
        
        .text-gradient-aurora {
            background: linear-gradient(to right, #2dd4bf, #c084fc, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .swatch-btn {
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
        }
        .swatch-btn:hover { border-color: rgba(255, 255, 255, 0.6) !important; }
        .swatch-btn.active { transform: scale(1.15) !important; border-color: #fff !important; }
        .pnlm-container { background: transparent !important; }

        /* Starry Night */
        .section-stars {
            background: radial-gradient(ellipse at bottom, #1B1725 0%, #0A090F 100%);
            overflow: hidden;
            position: relative;
        }
        #stars, #stars2, #stars3 {
            background: transparent;
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0; z-index: 0;
        }
        #stars { width: 1px; height: 1px; animation: animStar 50s linear infinite; }
        #stars::after { content: " "; position: absolute; top: 2000px; width: 1px; height: 1px; background: transparent; }
        #stars2 { width: 2px; height: 2px; animation: animStar 100s linear infinite; }
        #stars2::after { content: " "; position: absolute; top: 2000px; width: 2px; height: 2px; background: transparent; }
        #stars3 { width: 3px; height: 3px; animation: animStar 150s linear infinite; }
        #stars3::after { content: " "; position: absolute; top: 2000px; width: 3px; height: 3px; background: transparent; }
        @keyframes animStar { from { transform: translateY(0px); } to { transform: translateY(-2000px); } }

        .star-title-gradient {
            background: -webkit-linear-gradient(top, white, #a881c2);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

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
            background: rgba(25, 20, 30, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
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
        .bento-wrapper:hover .bento-card:not(:hover) img, .bento-wrapper:hover .bento-card:not(:hover) video { filter: brightness(0.2) grayscale(80%); }
        
        .bento-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.9) 0%, rgba(30,10,40,0.2) 60%, transparent 100%);
            z-index: 1; pointer-events: none; opacity: 0.8; transition: opacity 0.5s ease;
        }
        .bento-card:hover .bento-overlay { opacity: 1; background: linear-gradient(to top, rgba(0,0,0,0.95) 0%, rgba(30,10,40,0.4) 70%, transparent 100%); }
        .bento-card:hover .bento-content { transform: translateY(0); }

        .mirror-rhd { transform: scaleX(-1) !important; }
        .group:hover .mirror-rhd, .bento-card:hover .mirror-rhd { transform: scale(-1.08, 1.08) !important; }
    </style>

    <!-- WRAPPER UTAMA -->
    <div class="w-full overflow-hidden">

        <!-- ==========================================
             SECTION 1: HERO REVEAL & PRICING
        =========================================== -->
        <section class="relative h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#050505]">
            <div class="absolute inset-0 z-0 bg-noise">
                <video autoplay muted loop playsinline class="w-full h-full object-cover transform scale-105 brightness-75">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.85)_100%)]"></div>
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-[#050505] via-[#0f0514]/80 to-transparent"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mt-12 md:mt-16">
                <!-- Upgraded Glass Mini Tag -->
                <div class="inline-flex items-center gap-3 mb-4 md:mb-6 px-5 py-2.5 rounded-full border border-white/30 bg-white/5 backdrop-blur-2xl backdrop-saturate-200 shadow-[inset_0_1px_2px_rgba(255,255,255,0.4),0_0_30px_rgba(255,255,255,0.1)] reveal-up">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-teal-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-teal-500 shadow-[0_0_10px_rgba(45,212,191,1)]"></span>
                    </span>
                    <span class="text-white text-[9px] tracking-[0.4em] font-bold uppercase">Geely EX5 Fatmawati</span>
                </div>

                <h1 class="font-geely text-[20vw] sm:text-[12vw] md:text-[100px] lg:text-[120px] text-white uppercase leading-none md:leading-[0.8] tracking-tighter drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)] mb-8 reveal-up delay-100 relative">
                    <span class="text-liquid relative z-10">EX5</span>
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 bg-fuchsia-600/20 blur-[120px] z-0 pointer-events-none"></span>
                </h1>
                
                <!-- Glowing Ambient for Cards -->
                <div class="relative">
                    <div class="absolute top-1/2 left-1/4 -translate-y-1/2 w-48 h-48 bg-teal-500/30 rounded-full blur-[80px] pointer-events-none z-0"></div>
                    <div class="absolute top-1/2 right-1/4 -translate-y-1/2 w-48 h-48 bg-fuchsia-500/30 rounded-full blur-[80px] pointer-events-none z-0"></div>

                    <div class="grid grid-cols-2 gap-2 sm:gap-4 md:gap-8 mb-6 md:mb-8 reveal-up delay-200 max-w-[90vw] sm:max-w-2xl mx-auto px-1 sm:px-0 relative z-10">
                        
                        <!-- PRO Card -->
                        <div class="glass-panel float-anim w-full px-2 py-4 sm:px-6 sm:py-5 md:px-8 md:py-6 flex flex-col items-center text-center group cursor-default">
                            <span class="text-gray-300 text-[9px] sm:text-[10px] font-bold tracking-[0.2em] sm:tracking-[0.3em] uppercase block mb-1 group-hover:text-white transition-colors">PRO</span>
                            <span class="font-geely text-sm sm:text-2xl md:text-3xl text-white tracking-tighter sm:tracking-tight mb-2 whitespace-nowrap drop-shadow-md">Rp 465.000.000*</span>
                            <div class="flex flex-col items-center gap-0.5 sm:gap-1 w-full pt-3 border-t border-white/10 group-hover:border-white/30 transition-colors">
                                <span class="text-teal-400 text-[8px] sm:text-[10px] uppercase tracking-wider sm:tracking-widest font-bold">2026 Special Price</span>
                                <span class="text-gray-400 text-[6px] sm:text-[8px] uppercase tracking-widest line-through opacity-80">Official: Rp 475.000.000</span>
                            </div>
                        </div>
                        
                        <!-- MAX Card -->
                        <div class="glass-panel float-anim-delay w-full px-2 py-4 sm:px-6 sm:py-5 md:px-8 md:py-6 flex flex-col items-center text-center group cursor-default relative overflow-hidden" style="border-color: rgba(217,70,239,0.3); border-top-color: rgba(217,70,239,0.5);">
                            <span class="text-fuchsia-300 text-[9px] sm:text-[10px] font-bold tracking-[0.2em] sm:tracking-[0.3em] uppercase block mb-1 relative z-10 drop-shadow-[0_0_10px_rgba(217,70,239,0.5)]">MAX</span>
                            <span class="font-geely text-sm sm:text-2xl md:text-3xl text-white tracking-tighter sm:tracking-tight mb-2 relative z-10 whitespace-nowrap drop-shadow-lg">Rp 505.000.000*</span>
                            <div class="flex flex-col items-center gap-0.5 sm:gap-1 w-full pt-3 border-t border-fuchsia-500/20 relative z-10 group-hover:border-fuchsia-400/50 transition-colors">
                                <span class="text-teal-400 text-[8px] sm:text-[10px] uppercase tracking-wider sm:tracking-widest font-bold drop-shadow-sm">2026 Special Price</span>
                                <span class="text-gray-300 text-[6px] sm:text-[8px] uppercase tracking-widest line-through opacity-90">Official: Rp 515.000.000</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="text-gray-400 text-[7px] sm:text-[9px] md:text-[11px] font-light tracking-[0.2em] uppercase mb-10 reveal-up delay-300 max-w-[90vw] md:max-w-2xl mx-auto leading-relaxed">
                    *OTR Jakarta Selatan
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 reveal-up delay-400">
                    <a href="#explore" class="btn-shimmer flex items-center justify-center gap-3 text-black px-10 py-4 md:px-12 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-transform duration-500 hover:scale-105">
                        <span>Explore Features</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: SPECS & 360 VIEWER
        =========================================== -->
        <section id="explore" class="py-16 md:py-24 lg:py-40 bg-[#050505] relative z-30 overflow-hidden">
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-teal-600/30 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/4 translate-y-1/4 w-[500px] h-[500px] bg-fuchsia-600/30 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
                <!-- UKURAN FONT DIKECILKAN UNTUK VERSI MOBILE (text-2xl) DAN MARGIN DISESUAIKAN -->
                <h2 class="font-geely text-2xl sm:text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white mb-8 md:mb-16 reveal-up leading-[1.1] drop-shadow-xl px-2">
                    SEE HOW INNOVATION <br> <span class="text-gradient-aurora">FUELS EVERY JOURNEY</span>
                </h2>
                
                <div class="flex flex-col items-center justify-center gap-4 md:gap-6 reveal-up delay-100 relative z-30 mb-8 md:mb-12">
                    <div class="inline-flex glass-panel p-1.5 rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.5)] !border-radius-full" style="border-radius: 9999px;">
                        <button id="btn-tab-exterior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-white text-[10px] md:text-[11px] font-bold tracking-[0.2em] uppercase bg-white/15 shadow-[0_0_20px_rgba(255,255,255,0.1)] transition-all">Exterior</button>
                        <button id="btn-tab-interior" class="px-6 py-2.5 md:px-8 md:py-3 rounded-full text-gray-400 hover:text-white text-[10px] md:text-[11px] font-bold tracking-[0.2em] uppercase transition-all">Interior</button>
                    </div>
                    
                    <div class="h-6">
                        <p id="active-color-name" class="text-teal-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300 drop-shadow-[0_0_8px_rgba(45,212,191,0.5)]">Teal</p>
                    </div>
                    
                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-3 md:gap-6 transition-all duration-500 opacity-100 px-4">
                        <button class="swatch-ext swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505] transition-all" style="background-color: #20535c;" data-src="https://riszali.sirv.com/Spins/ex5/teal.spin" data-name="Teal"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex5/white.spin" data-name="White"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex5/silver.spin" data-name="Silver"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #111111;" data-src="https://riszali.sirv.com/Spins/ex5/black.spin" data-name="Black"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex5/ash.spin" data-name="Ash"></button>
                    </div>
                    
                    <div id="swatches-interior" class="hidden flex-wrap justify-center gap-4 md:gap-6 transition-all duration-500 opacity-0 pointer-events-none px-4">
                        <button class="swatch-int swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505] transition-all" style="background-color: #000000;" data-src="https://riszali.sirv.com/Spins/interior/vlack%20int.png" data-name="Black Interior"></button>
                        <button class="swatch-int swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #ffffff;" data-src="https://riszali.sirv.com/Spins/interior/whiteint.png" data-name="White Interior"></button>
                    </div>
                </div>

                <!-- Viewer Display Container -->
                <div class="glass-panel p-2 md:p-4 overflow-hidden reveal-up delay-200 shadow-[0_40px_80px_rgba(0,0,0,0.8)] w-full relative z-10 mb-10 viewer-container group">
                    <div class="relative w-full h-full overflow-hidden rounded-[1.5rem] md:rounded-[2rem]">
                        <div id="wrapper-exterior" class="absolute inset-0 w-full h-full z-10 transition-opacity duration-500" style="opacity: 1; pointer-events: auto;">
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex5/teal.spin" class="absolute top-1/2 left-1/2 w-[114%] h-[114%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                        </div>
                        <div id="wrapper-interior" class="absolute inset-0 w-full h-full transition-opacity duration-500 z-0 bg-black flex flex-col justify-center items-center" style="opacity: 0; pointer-events: none;">
                            <div id="panorama" class="w-full h-full"></div>
                        </div>
                    </div>
                </div>

                <!-- Box Spesifikasi -->
                <div class="relative z-30 -mt-20 sm:-mt-24 md:-mt-32 lg:-mt-40">
                    <div class="grid grid-cols-3 gap-2 sm:gap-4 md:gap-8 reveal-up delay-300 px-1 sm:px-0">
                        <div class="glass-panel relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-teal-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                            <p class="text-gray-300 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-teal-300 transition-colors duration-300 drop-shadow-sm text-center">Range up to</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-white uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                                <span class="text-teal-400 leading-none drop-shadow-[0_0_15px_rgba(45,212,191,0.4)]">495</span><span class="text-[8px] sm:text-xl md:text-2xl text-gray-400 ml-0.5 sm:ml-2 leading-none">km*</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-4 group-hover:bg-teal-400/80 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">NEDC Range</p>
                        </div>

                        <div class="glass-panel relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-fuchsia-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                            <p class="text-gray-300 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-fuchsia-300 transition-colors duration-300 whitespace-nowrap drop-shadow-sm text-center">Fast Charging</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-white uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                                <span class="text-fuchsia-400 leading-none drop-shadow-[0_0_15px_rgba(217,70,239,0.4)]">20</span><span class="text-[8px] sm:text-xl md:text-2xl text-gray-400 ml-0.5 sm:ml-1 leading-none">mins**</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-4 group-hover:bg-fuchsia-400/80 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">30% - 80%</p>
                        </div>

                        <div class="glass-panel relative z-10 p-4 sm:p-8 md:p-10 lg:p-12 group hover:border-indigo-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                            <p class="text-gray-300 text-[6px] sm:text-[10px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-4 group-hover:text-indigo-300 transition-colors duration-300 drop-shadow-sm text-center">Acceleration</p>
                            <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-5xl md:text-6xl lg:text-7xl text-white uppercase mb-1 sm:mb-4 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                                <span class="text-indigo-400 leading-none drop-shadow-[0_0_15px_rgba(99,102,241,0.4)]">6.9</span><span class="text-[8px] sm:text-lg md:text-xl lg:text-2xl text-gray-400 ml-0.5 sm:ml-2 tracking-normal lowercase leading-none">sec</span>
                            </h3>
                            <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-4 group-hover:bg-indigo-400/80 transition-colors duration-300"></div>
                            <p class="text-gray-400 text-[5px] sm:text-[9px] font-bold tracking-wider sm:tracking-widest uppercase text-center">0-100 km/h</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 3: FEATURE OVERVIEW (OVERLAPPED/STACKED DISPLAY)
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 bg-[#050505] relative overflow-hidden">
            <!-- Glow Light Backgrounds -->
            <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-teal-600/30 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-1/4 w-[500px] h-[500px] bg-fuchsia-600/30 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 md:px-12 relative z-10 pt-10">
                
                <div class="relative w-full flex flex-col items-center lg:block">
                    <!-- VIDEO FRAME -->
                    <div class="w-full lg:w-[85%] ml-auto relative rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.5)] border border-white/10 reveal-right bg-black group h-[50vh] md:h-[65vh]">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100">
                            <source src="https://raw.githubusercontent.com/riszali/geely-icon/refs/heads/main/Geely%20EX5%20Redefining%20Joyful%20Rides%20with%20Space%20and%20Style.mp4" type="video/mp4">
                        </video>
                        <!-- Bayangan gradasi agar video tidak flat -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent pointer-events-none"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/80 via-transparent to-transparent pointer-events-none lg:hidden"></div>
                    </div>

                    <!-- STACKED/OVERLAPPED TEXT CONTENT DENGAN BLUR YANG DIKURANGI -->
                    <div class="w-[95%] sm:w-[80%] lg:w-[45%] relative z-20 mt-[-15%] sm:mt-[-10%] lg:mt-0 lg:absolute lg:bottom-12 lg:left-0 reveal-left delay-200">
                        <div class="glass-panel p-6 sm:p-8 md:p-10 lg:p-12 shadow-[0_30px_60px_rgba(0,0,0,0.6)] border-l-purple-500/30" style="backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); background: linear-gradient(135deg, rgba(25, 20, 35, 0.65) 0%, rgba(10, 10, 15, 0.45) 100%);">
                            <div class="inline-flex items-center gap-3 mb-4 sm:mb-6 px-4 py-2 sm:px-5 sm:py-2.5 rounded-full border border-purple-500/30 bg-white/5 backdrop-blur-2xl backdrop-saturate-200 shadow-[inset_0_1px_2px_rgba(255,255,255,0.4)] w-max">
                                <span class="text-purple-300 text-[8px] sm:text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                            </div>
                            <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white leading-[1.1] drop-shadow-sm mb-4 sm:mb-6">
                                Keseimbangan <br> <span class="text-gradient-aurora">Sempurna</span>
                            </h2>
                            <div class="space-y-3 sm:space-y-4 md:space-y-6 text-gray-300 text-xs sm:text-sm md:text-base font-light leading-relaxed relative z-10">
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
        <section class="section-stars py-16 md:py-24 lg:py-40 relative w-full overflow-hidden">
            <!-- Transisi bayangan hitam yang halus dari section sebelumnya -->
            <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-[#050505] to-transparent opacity-100 pointer-events-none z-10"></div>

            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    
                    <div class="lg:col-span-5 glass-panel p-8 md:p-10 lg:p-12 flex flex-col justify-center group hover:border-teal-500/30 transition-all duration-500 reveal-left">
                        <div class="absolute top-0 left-0 w-64 h-64 bg-teal-500/30 rounded-full blur-[80px] pointer-events-none transition-colors duration-700 group-hover:bg-purple-500/30"></div>
                        
                        <div class="relative z-10">
                            <span class="text-teal-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block drop-shadow-md">All-New EX5</span>
                            <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.9]">
                                <span class="star-title-gradient drop-shadow-2xl">Ready To <br> Explore</span>
                            </h2>
                            
                            <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light mb-8 md:mb-10 max-w-[90vw] md:max-w-none drop-shadow-sm">
                                Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                            </p>
                            
                            <a href="/test-drive" class="inline-flex items-center gap-3 text-white text-[10px] font-bold tracking-[0.2em] uppercase hover:text-teal-400 transition-colors w-max pb-2 border-b border-white/30 hover:border-teal-400 group/btn">
                                Book Test Drive 
                                <svg class="w-4 h-4 transform group-hover/btn:translate-x-1 group-hover/btn:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col reveal-right relative z-10">
                        <div class="glass-panel p-2 group hover:border-white/30 transition-all duration-500 shadow-2xl flex flex-col star-showcase z-10 relative">
                            <div class="relative w-full h-full rounded-[1.8rem] md:rounded-[2.3rem] overflow-hidden">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100 z-0 mirror-rhd">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                                </video>
                                <div class="absolute inset-0 bg-gradient-to-t from-[#0A090F]/90 via-black/20 to-transparent opacity-100 pointer-events-none z-10"></div>
                                <div class="absolute bottom-12 lg:bottom-10 left-6 md:left-10 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out pointer-events-none">
                                    <p class="text-glow-anim font-geely text-2xl md:text-3xl lg:text-4xl uppercase tracking-tight mb-1 drop-shadow-lg">Immersive Atmosphere</p>
                                    <p class="text-gray-300 text-[9px] md:text-[10px] tracking-[0.2em] uppercase font-bold drop-shadow-md">Premium Cabin Experience</p>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 lg:gap-6 -mt-6 sm:-mt-10 md:-mt-8 lg:mt-6 relative z-20 px-1 sm:px-4 md:px-0 lg:px-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-teal-500/20 via-purple-500/20 to-indigo-500/20 blur-[50px] rounded-full pointer-events-none z-0"></div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-teal-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Up to</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-teal-400">495</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">km*</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">NEDC Range</p>
                            </div>
                            
                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-fuchsia-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Fast Charging</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-fuchsia-400">20</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">mins**</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">30% - 80%</p>
                            </div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 hover:border-indigo-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Acceleration</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-indigo-400">6.9</span><span class="text-[8px] sm:text-[11px] lg:text-sm text-gray-400 ml-0.5 sm:ml-1 tracking-normal lowercase leading-none">sec</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
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
        <section class="py-16 md:py-24 lg:py-40 bg-[#050505] relative z-20 overflow-hidden">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] bg-purple-900/30 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                <div class="text-center mb-10 md:mb-16 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-white/30 bg-white/5 backdrop-blur-2xl backdrop-saturate-200 shadow-[inset_0_1px_2px_rgba(255,255,255,0.4),0_10px_30px_rgba(0,0,0,0.5)]">
                        <span class="text-teal-400 text-[9px] tracking-[0.4em] font-bold uppercase">Visual Experience</span>
                    </div>
                    <h2 class="text-3xl md:text-5xl lg:text-6xl tracking-tight text-white leading-tight font-light drop-shadow-xl max-w-[90vw] mx-auto">
                        Aesthetics in <span class="font-bold text-gradient-aurora">every angle.</span>
                    </h2>
                </div>

                <div class="bento-wrapper reveal-up delay-200 p-2 md:p-4 glass-panel">
                    
                    <div class="bento-card bento-main group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg" alt="Geely EX5 Exterior">
                        <div class="bento-overlay"></div>
                        <div class="bento-content">
                            <span class="text-teal-400 text-[8px] sm:text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 drop-shadow-md block">Exterior</span>
                            <h4 class="font-geely text-xl sm:text-2xl md:text-4xl text-white tracking-wide font-light drop-shadow-lg leading-tight">Sleek Silhouette</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-1 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" alt="Geely EX5 Steering" class="mirror-rhd">
                        <div class="bento-overlay"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block">Details</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Smart Steering</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-2 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-16-YyvDPj63y9fNXbar.webp" alt="Geely EX5 Dashboard Display">
                        <div class="bento-overlay"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block">Technology</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Crystal Display</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-square-3 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sunroof-yx4ak1dowru68xpb-1-YbN4az2lObuDROkG.jpg" alt="Geely EX5 Panoramic Sunroof">
                        <div class="bento-overlay"></div>
                        <div class="bento-content">
                            <span class="text-gray-300 text-[6px] sm:text-[8px] md:text-[10px] tracking-[0.2em] font-bold uppercase mb-0.5 sm:mb-1 block">Ambiance</span>
                            <h4 class="font-geely text-sm sm:text-lg md:text-2xl text-white tracking-wide font-light leading-tight">Panoramic Roof</h4>
                        </div>
                    </div>

                    <div class="bento-card bento-wide group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-4-AMqDx3kX48t57gGV.webp" alt="Geely EX5 Interior View" class="mirror-rhd">
                        <div class="bento-overlay"></div>
                        <div class="bento-content">
                            <span class="text-teal-400 text-[7px] sm:text-[9px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 drop-shadow-md block">Interior</span>
                            <h4 class="font-geely text-lg sm:text-xl md:text-3xl text-white tracking-wide font-light drop-shadow-lg leading-tight">Uncompromised Luxury</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: SAFETY & CRASH TEST (SIDE BY SIDE LAYOUT)
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 relative z-20 bg-[#050505] overflow-hidden">
            <!-- Ambient Glow -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[300px] h-[300px] md:w-[500px] md:h-[500px] bg-yellow-600/30 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 sm:px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                    
                    <!-- Text & Desc Side (Order 1 on mobile, Left Top on Desktop) -->
                    <div class="lg:col-span-5 reveal-left order-1 lg:row-start-1 flex flex-col justify-end h-full relative z-20">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-yellow-500/40 bg-yellow-500/10 backdrop-blur-2xl backdrop-saturate-200 shadow-[inset_0_1px_2px_rgba(255,255,255,0.3),0_0_30px_rgba(234,179,8,0.2)] w-max">
                            <span class="text-yellow-400 text-[9px] tracking-[0.4em] font-bold uppercase">Safety Performance</span>
                        </div>
                        
                        <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter text-white mb-6 drop-shadow-2xl leading-[1]">
                            EURO NCAP <br> <span class="text-yellow-500 drop-shadow-[0_0_20px_rgba(234,179,8,0.6)]">5-STAR</span> RATED
                        </h2>
                        
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-md">
                            Keamanan tanpa kompromi. Geely EX5 telah melalui serangkaian uji tabrak paling ketat dari Euro NCAP untuk memastikan perlindungan maksimal bagi Anda dan keluarga dalam setiap perjalanan.
                        </p>
                    </div>

                    <!-- Video Side (Order 2 on mobile, Right Span on Desktop) -->
                    <div class="lg:col-span-7 reveal-right order-2 lg:col-start-6 lg:row-span-2 flex flex-col justify-center relative z-10">
                    <div class="relative w-full aspect-video rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-[0_30px_60px_rgba(234,179,8,0.3)] border border-yellow-500/30 bg-black group">
                    <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[3s] ease-out">
                    <source src="/videos/crash-test.mp4" type="video/mp4">
                    </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none"></div>
                            <div class="absolute bottom-16 sm:bottom-20 lg:bottom-8 left-6 md:left-8 pointer-events-none">
                                <span class="text-yellow-400 text-[10px] md:text-xs tracking-[0.3em] font-bold uppercase drop-shadow-md">Crash Test</span>
                            </div>
                        </div>
                    </div>

                    <!-- Cards Stats (Order 3 on mobile, Left Bottom on Desktop) -->
                    <div class="lg:col-span-5 reveal-left order-3 lg:row-start-2 flex flex-col justify-start w-full relative z-30 -mt-16 sm:-mt-24 md:-mt-32 lg:mt-0 px-2 lg:px-0">
                        <div class="grid grid-cols-3 gap-2 sm:gap-4 relative w-full">
                            <!-- BOLA CAHAYA INI SEKARANG MENJADI ABSOLUTE DI BACKGROUND AGAR TIDAK MERUSAK LAYOUT -->
                            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[150%] h-32 bg-yellow-500/20 rounded-full blur-[60px] pointer-events-none z-0"></div>

                            <div class="glass-panel py-4 px-2 sm:py-5 sm:px-4 shadow-xl flex flex-col items-center justify-center group hover:border-yellow-500/60 transition-colors duration-500 relative z-10 w-full">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-white mb-1 group-hover:text-yellow-400 transition-colors drop-shadow-md">92%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-white/20 mb-1.5 sm:mb-2 group-hover:bg-yellow-500/60 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-400 uppercase tracking-wider font-bold text-center group-hover:text-gray-200 transition-colors leading-tight">Adult<br class="block sm:hidden"> Occupant</span>
                            </div>
                            
                            <div class="glass-panel py-4 px-2 sm:py-5 sm:px-4 shadow-xl flex flex-col items-center justify-center group hover:border-yellow-500/60 transition-colors duration-500 relative z-10 w-full">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-white mb-1 group-hover:text-yellow-400 transition-colors drop-shadow-md">88%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-white/20 mb-1.5 sm:mb-2 group-hover:bg-yellow-500/60 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-400 uppercase tracking-wider font-bold text-center group-hover:text-gray-200 transition-colors leading-tight">Child<br class="block sm:hidden"> Occupant</span>
                            </div>

                            <div class="glass-panel py-4 px-2 sm:py-5 sm:px-4 shadow-xl flex flex-col items-center justify-center group hover:border-yellow-500/60 transition-colors duration-500 relative z-10 w-full">
                                <span class="text-xl sm:text-3xl md:text-4xl font-geely text-white mb-1 group-hover:text-yellow-400 transition-colors drop-shadow-md">85%</span>
                                <div class="h-[1px] w-4 sm:w-6 bg-white/20 mb-1.5 sm:mb-2 group-hover:bg-yellow-500/60 transition-colors"></div>
                                <span class="text-[6px] sm:text-[8px] md:text-[9px] text-gray-400 uppercase tracking-wider font-bold text-center group-hover:text-gray-200 transition-colors leading-tight">Safety<br class="block sm:hidden"> Assist</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: SMART APP & CONNECTIVITY
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-40 bg-white relative z-20 overflow-hidden">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-purple-200/60 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 relative z-10">
                
                <div class="text-center mb-10 md:mb-12 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-purple-300 bg-white/60 backdrop-blur-2xl backdrop-saturate-200 shadow-md">
                        <span class="text-purple-600 text-[9px] tracking-[0.4em] font-bold uppercase">Smart Connectivity</span>
                    </div>
                    <h2 class="font-geely text-3xl md:text-4xl lg:text-5xl tracking-tighter text-gray-900 leading-[1.2] uppercase drop-shadow-sm max-w-4xl mx-auto">
                        YOUR GEELY EX5, <br>
                        <span class="text-gradient-aurora">NOW IN THE PALM OF YOUR HAND</span>
                    </h2>
                </div>

                <div class="hidden lg:grid grid-cols-2 gap-3 reveal-up delay-100 max-w-6xl mx-auto glass-panel-aurora p-3 transition-all duration-500">
                    
                    <div class="relative w-full h-full min-h-[350px] lg:min-h-[400px] rounded-[2rem] overflow-hidden group/img shadow-[inset_0_2px_4px_rgba(0,0,0,0.2)]">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-UvagCnVV5BDEDZJU.webp" alt="Geely EX5 App Desktop View" class="absolute inset-0 w-full h-full object-cover transform group-hover/img:scale-[1.03] transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                    </div>

                    <div class="relative w-full h-full min-h-[350px] lg:min-h-[400px] rounded-[2rem] overflow-hidden bg-black shadow-[inset_0_2px_4px_rgba(0,0,0,0.4)]">
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
                            <!-- PERBAIKAN UKURAN FOTO AGAR SEMUA SAMA: ditambahkan w-full aspect-[4/5] object-cover -->
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---seamless-connection---no-text---m-m7VDpwpx5jS757y9.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-[0_10px_20px_rgba(0,0,0,0.1)]" alt="Geely EX5 App Connection">
                        </div>
                        <div class="snap-center shrink-0 w-[70vw] sm:w-[320px] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---one-tap-full-control---no-text---m-Yle4MvMBDvCB2RxJ.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-[0_10px_20px_rgba(0,0,0,0.1)]" alt="Geely EX5 App Control">
                        </div>
                        <div class="snap-center shrink-0 w-[70vw] sm:w-[320px] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex5-app---always-charged---no-text---m-mePgLvL2qJce1ZJ3.jpg" class="w-full aspect-[4/5] rounded-[1.8rem] object-cover shadow-[0_10px_20px_rgba(0,0,0,0.1)]" alt="Geely EX5 App Status">
                        </div>
                    </div>
                    
                    <div class="text-center mt-2 flex justify-center items-center gap-2 text-purple-500 text-[10px] font-bold uppercase tracking-widest animate-pulse">
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        Swipe to view gallery
                    </div>
                </div>

                <div class="block lg:hidden reveal-up delay-300 mx-auto max-w-5xl mt-8 px-4">
                    <div class="relative shadow-[0_10px_30px_rgba(0,0,0,0.15)] rounded-[1.8rem]">
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
             SECTION 8: DIVE INTO THE DETAILS (OVERHAULED)
        =========================================== -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10">
            <!-- Glowing ambient background -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-teal-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-white/30 bg-white/5 backdrop-blur-2xl backdrop-saturate-200 shadow-[inset_0_1px_2px_rgba(255,255,255,0.4),0_10px_30px_rgba(0,0,0,0.5)]">
                        <span class="text-teal-400 text-[9px] tracking-[0.4em] font-bold uppercase">The Blueprint</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-xl">
                        Dive Into <span class="text-gradient-aurora">The Details</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed relative z-10">
                        Get a look at the Geely EX5’s advanced features and specifications, designed to set a new standard for EV.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start relative z-10">
                    
                    <!-- Left: Navigation Link Cards (Di bawah pada Mobile) -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Card Exterior -->
                        <a href="{{ route('models.ex5.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_50px_rgba(45,212,191,0.3)] transition-all duration-500 border border-white/10 hover:border-teal-400">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-m2Wq42Nv3lFqrP1L.webp" alt="Geely EX5 Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-[1.5s] ease-out z-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/90 via-black/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-teal-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Explore</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full glass-panel flex items-center justify-center border border-white/30 group-hover:bg-teal-500 group-hover:border-teal-400 transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Card Interior -->
                        <a href="{{ route('models.ex5.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_50px_rgba(45,212,191,0.3)] transition-all duration-500 border border-white/10 hover:border-teal-400">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Geely EX5 Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-[1.5s] ease-out z-0 mirror-rhd">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/90 via-black/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-teal-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Discover</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full glass-panel flex items-center justify-center border border-white/30 group-hover:bg-teal-500 group-hover:border-teal-400 transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Card Specification -->
                        <a href="{{ route('models.ex5.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_50px_rgba(45,212,191,0.3)] transition-all duration-500 border border-white/10 hover:border-teal-400">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ied-tF2sW5R0UW8pMCMV.webp" alt="Geely EX5 Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-[1.5s] ease-out z-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/90 via-black/40 to-transparent z-10 transition-opacity duration-500 opacity-90 group-hover:opacity-70"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-teal-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Learn More</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Specs</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full glass-panel flex items-center justify-center border border-white/30 group-hover:bg-teal-500 group-hover:border-teal-400 transition-all duration-500 transform group-hover:-translate-y-1 group-hover:translate-x-1">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Right: Dimensions Box (Di Atas pada Mobile) -->
                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        
                        <!-- Dimensions Box (Dark Theme Glassmorphism) -->
                        <div class="glass-panel p-6 md:p-8 flex flex-col shadow-2xl relative overflow-hidden group hover:border-teal-400/50 transition-colors duration-500">
                            <!-- Background glow dalam kotak -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-teal-500/30 rounded-full blur-[50px] group-hover:bg-teal-400/40 transition-colors duration-500 pointer-events-none"></div>

                            <h4 class="text-white font-geely text-2xl md:text-3xl mb-1 relative z-10 drop-shadow-md">Dimensions</h4>
                            <p class="text-gray-400 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                            
                            <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                                <div class="border-l-2 border-teal-500 pl-4 group-hover:border-teal-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">4615</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4 group-hover:border-teal-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">1901</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4 group-hover:border-teal-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">1670</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4 group-hover:border-teal-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">2750</p>
                                </div>
                            </div>

                            <!-- Sketch Image -->
                            <div class="w-full relative mt-8 mix-blend-screen opacity-80 group-hover:opacity-100 transition-opacity duration-500 z-10">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="Geely EX5 Sketch" loading="lazy" class="w-full h-auto object-contain invert">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-3 w-full relative z-10">
                            <a href="{{ route('models.ex5.specification') }}" class="btn-shimmer w-full py-4 md:py-5 rounded-full bg-white text-black font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_30px_rgba(255,255,255,0.15)]">
                                Show Full Specs
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full">
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-white/20 glass-panel text-white font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-white/10 hover:border-white/40 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Brochure
                                </a>
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-white/20 glass-panel text-white font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-white/10 hover:border-white/40 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
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

            const createShadows = (n) => {
                return Array.from({length: n}, () => `${Math.floor(Math.random() * 2000)}px ${Math.floor(Math.random() * 2000)}px #FFF`).join(', ');
            };
            
            const starStyle = document.createElement('style');
            starStyle.innerHTML = `
                #stars { box-shadow: ${createShadows(700)}; }
                #stars::after { box-shadow: ${createShadows(700)}; }
                #stars2 { box-shadow: ${createShadows(200)}; }
                #stars2::after { box-shadow: ${createShadows(200)}; }
                #stars3 { box-shadow: ${createShadows(100)}; }
                #stars3::after { box-shadow: ${createShadows(100)}; }
            `;
            document.head.appendChild(starStyle);

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
                btnExt.classList.add('bg-white/15', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.1)]');
                btnExt.classList.remove('text-gray-400');
                btnInt.classList.remove('bg-white/15', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.1)]');
                btnInt.classList.add('text-gray-400');
                
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
                btnInt.classList.add('bg-white/15', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.1)]');
                btnInt.classList.remove('text-gray-400');
                btnExt.classList.remove('bg-white/15', 'text-white', 'shadow-[0_0_20px_rgba(255,255,255,0.1)]');
                btnExt.classList.add('text-gray-400');
                
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
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    
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
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    const imageUrl = swatch.getAttribute('data-src');
                    
                    if(panoramaViewer) {
                        panoramaViewer.destroy();
                    }
                    panoramaViewer = pannellum.viewer('panorama', {
                        "type": "equirectangular",
                        "panorama": imageUrl,
                        "autoLoad": true,
                        "autoRotate": -2
                    });
                });
            });

        });
    </script>


    <!-- ==========================================
         ADVANCED SEO SCHEMA FOR GEELY EX5 FATMAWATI
    =========================================== -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org/",
      "@@type": "Product",
      "name": "Geely EX5 Fatmawati Indonesia",
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
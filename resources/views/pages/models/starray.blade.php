<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES & MICRO-ADJUSTMENTS
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; /* Mengembalikan background utama ke gelap */
            color: #ffffff;
            overflow-x: clip; 
            max-width: 100%; 
        }

        /* Safe Responsive Heights for 360 Viewer */
        .viewer-container { height: 50vh; min-height: 350px; }
        @media (min-width: 768px) {
            .viewer-container { height: 60vh; min-height: 450px; }
        }
        
        /* Hide scrollbar for horizontal scroll containers (Slideshow) */
        .hide-scrollbar {
            -ms-overflow-style: none;  /* IE and Edge */
            scrollbar-width: none;  /* Firefox */
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none; /* Chrome, Safari and Opera */
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

        /* Advanced Glassmorphism Styles (Dikembalikan ke transparan terang untuk background gelap) */
        .glass-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(40px) saturate(150%);
            -webkit-backdrop-filter: blur(40px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-left: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        /* Modifier untuk Glass Panel Gelap */
        .glass-dark {
            background: linear-gradient(135deg, rgba(10, 15, 30, 0.9) 0%, rgba(5, 5, 10, 0.95) 100%) !important;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.1) !important;
        }

        /* Interactive Light Sweep Effect */
        .glass-panel::before {
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
        .glass-panel:hover::before {
            left: 200%;
        }

        /* Floating Animation */
        .float-anim {
            animation: floating 6s ease-in-out infinite;
        }
        .float-anim-delay {
            animation: floating 6s ease-in-out infinite 3s;
        }
        @keyframes floating {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-12px); }
            100% { transform: translateY(0px); }
        }

        /* Continuous Button Shimmer Effect */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
            box-shadow: 0 10px 30px rgba(255,255,255,0.2), inset 0 2px 0 rgba(255,255,255,1);
            color: #000 !important;
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
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        /* Ultra-Smooth Scroll Reveals */
        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(60px); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        /* Delays */
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }
        .delay-500 { transition-delay: 500ms; }

        /* Liquid Text Gradient */
        .text-liquid {
            background: linear-gradient(270deg, #ffffff, #818cf8, #22d3ee, #ffffff);
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

        /* Gradient Text for Sections */
        .text-gradient-cyan {
            background: linear-gradient(to right, #0891b2, #2563eb);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* ==========================================
           STROKE UNTUK TOMBOL WARNA 360 & INTERIOR
        =========================================== */
        .swatch-btn {
            border: 3px solid rgba(255,255,255,0.6) !important;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5) !important;
            opacity: 1 !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
        }
        .swatch-btn:hover { transform: scale(1.05); border-color: #fff !important; }
        .swatch-btn.active {
            transform: scale(1.25) !important;
            border-color: #fff !important;
            box-shadow: 0 0 20px rgba(255, 255, 255, 0.6) !important;
        }

        /* Nav Buttons for Sliders */
        .nav-btn {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }
        .nav-btn:hover {
            background: rgba(34, 211, 238, 0.3);
            border-color: rgba(34, 211, 238, 0.8);
        }
    </style>

    <!-- WRAPPER UTAMA: Mengunci max-width untuk layar Ultrawide, Background Gelap -->
    <div class="relative w-full max-w-[1920px] mx-auto bg-[#050505] overflow-x-clip">

        <!-- ==========================================
             SECTION 1: HERO REVEAL & PRICING
        =========================================== -->
        <section class="relative min-h-[100svh] w-full flex items-center justify-center overflow-hidden py-24 lg:py-0">
            <!-- Hero Background Video -->
            <div class="absolute inset-0 z-0 bg-noise">
                <video autoplay muted loop playsinline class="w-full h-full object-cover transform scale-105 brightness-75">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i-geely-ambara-group-A85MZXeJRKSVQ1Er.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.8)_100%)]"></div>
                <!-- Mengembalikan gradasi gelap murni agar teks hero mudah dibaca dan potongannya tegas di bawah -->
                <div class="absolute inset-x-0 bottom-0 h-3/4 bg-gradient-to-t from-[#050505] via-[#050505]/80 to-transparent z-10"></div>
            </div>

            <div class="relative z-20 w-full max-w-[1600px] mx-auto px-4 sm:px-8 md:px-12 lg:px-16 text-center">
                <!-- Pill Badge -->
                <div class="inline-flex items-center gap-3 mb-4 md:mb-6 px-5 py-2.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl reveal-up shadow-[0_0_30px_rgba(255,255,255,0.1)]">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span>
                    </span>
                    <span class="text-white text-[9px] tracking-[0.4em] font-bold uppercase">Geely Starray</span>
                </div>

                <!-- Main Title -->
                <h1 class="font-geely text-[12vw] sm:text-[8vw] md:text-[70px] lg:text-[90px] text-white uppercase leading-none md:leading-[0.8] tracking-tighter drop-shadow-[0_20px_50px_rgba(0,0,0,0.5)] mb-8 reveal-up delay-100 relative">
                    <span class="text-liquid relative z-10">STARRAY</span>
                    <span class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-1/2 h-1/2 bg-cyan-500/20 blur-[100px] z-0 pointer-events-none"></span>
                </h1>
                
                <!-- EM-i Pricing Card -->
                <div class="flex justify-center mb-6 md:mb-8 reveal-up delay-200 w-full px-2 sm:px-0 sm:max-w-md mx-auto relative z-10">
                    <div class="glass-panel float-anim w-full px-4 py-6 sm:px-10 sm:py-8 rounded-[20px] sm:rounded-[32px] border-cyan-500/40 flex flex-col items-center text-center group cursor-default relative overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-cyan-500/20 rounded-full blur-[50px] group-hover:bg-cyan-400/30 transition-colors duration-500 pointer-events-none"></div>
                        
                        <span class="text-cyan-300 text-[9px] sm:text-[12px] font-bold tracking-[0.2em] sm:tracking-[0.3em] uppercase block mb-2 relative z-10 drop-shadow-[0_0_10px_rgba(34,211,238,0.5)]">Geely Starray EM-i</span>
                        <span class="font-geely text-[22px] sm:text-[28px] md:text-4xl text-white tracking-tighter mb-3 relative z-10 drop-shadow-lg leading-none">IDR 499.000.000*</span>
                        
                        <div class="flex flex-col items-center gap-1 w-full pt-4 border-t border-cyan-500/30 relative z-10 group-hover:border-cyan-400/60 transition-colors">
                            <span class="text-cyan-400 text-[8px] sm:text-[10px] uppercase tracking-wider sm:tracking-widest font-bold drop-shadow-sm">EM-i Hybrid Technology</span>
                        </div>
                    </div>
                </div>

                <p class="text-gray-300 text-[7px] sm:text-[9px] md:text-[11px] font-medium tracking-[0.2em] uppercase mb-10 reveal-up delay-300 max-w-[90vw] md:max-w-2xl mx-auto leading-relaxed">
                    *OTR Jakarta
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 reveal-up delay-400 relative z-20">
                    <a href="#efficiency" class="btn-shimmer flex items-center justify-center gap-3 text-black px-10 py-4 md:px-12 md:py-5 rounded-full font-bold text-[10px] md:text-[11px] tracking-[0.2em] uppercase transition-transform duration-500 hover:scale-105">
                        <span>Explore Features</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7-7H3"></path></svg>
                    </a>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: EFFICIENCY MEETS INTELLIGENCE (SPECIAL WHITE DESIGN)
        =========================================== -->
        <section id="efficiency" class="py-20 md:py-32 relative z-30 bg-white overflow-hidden">
            <!-- Subtle Dot Pattern Background untuk tekstur premium -->
            <div class="absolute inset-0 z-0 pointer-events-none" style="background-image: radial-gradient(#e5e7eb 1.5px, transparent 1.5px); background-size: 24px 24px; opacity: 0.6;"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 flex flex-col lg:flex-row items-center gap-16 lg:gap-12">
                
                <!-- Text Content (Kiri di Desktop) -->
                <div class="w-full lg:w-5/12 flex flex-col justify-center reveal-left z-20 order-1">
                    <div class="inline-flex items-center gap-4 mb-6">
                        <span class="h-[2px] w-12 bg-gradient-to-r from-cyan-500 to-blue-600 rounded-full"></span>
                        <h3 class="text-cyan-700 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase">
                            Efficiency Meets Intelligence
                        </h3>
                    </div>
                    
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter text-gray-900 mb-6 leading-[1.05]">
                        Combining <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-900 via-gray-700 to-gray-500">Battery & Fuel</span>
                    </h2>
                    
                    <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-lg mb-8">
                        Inti dari STARRAY EM-i adalah teknologi EM-i Super Hybrid canggih kami yang dirancang untuk efisiensi maksimal. EM-i atau E-Motive intelligence adalah teknologi hibrida canggih Geely, yang menggabungkan keunggulan bahan bakar dan baterai untuk efisiensi, kapabilitas, dan emisi yang lebih rendah.
                    </p>

                    <!-- STAT CARD (Clean, no floating, positioned normally below the text) -->
                    <div class="bg-gray-50/80 backdrop-blur-xl border border-gray-200 p-5 md:p-6 rounded-[1.5rem] shadow-sm flex items-center gap-5 w-fit group hover:border-cyan-200 transition-colors duration-300">
                        <!-- Icon Circle -->
                        <div class="w-14 h-14 rounded-full bg-gradient-to-br from-cyan-50 to-blue-50 flex items-center justify-center flex-shrink-0 border border-cyan-100 shadow-inner group-hover:scale-105 transition-transform duration-300">
                            <svg class="w-7 h-7 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <!-- Text -->
                        <div>
                            <p class="text-gray-500 text-[10px] md:text-xs font-bold tracking-[0.2em] uppercase mb-1">Range up to</p>
                            <p class="font-geely text-3xl md:text-4xl text-gray-900 tracking-tighter leading-none">
                                1,000+ <span class="text-lg text-cyan-700 tracking-normal ml-1">KM</span>
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Image Section (Kanan di Desktop) -->
                <div class="w-full lg:w-7/12 relative z-10 reveal-right delay-200 order-2">
                    <!-- Decorative Background Glow behind image -->
                    <div class="absolute -top-10 -right-10 w-64 h-64 bg-cyan-100 rounded-full blur-[80px] z-0 pointer-events-none"></div>

                    <!-- Main Image Wrapper -->
                    <div class="relative w-full aspect-video lg:aspect-[16/11] rounded-[1.5rem] md:rounded-[2rem] overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.12)] border border-gray-100 z-10 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp" alt="Geely Starray EM-i" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000 ease-out">
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 3: SPECS & 360 EXTERIOR VIEWER
        =========================================== -->
        <!-- Clean cut: Langsung kembali ke hitam tanpa gradasi -->
        <section id="explore" class="py-16 md:py-24 lg:py-40 relative z-30 bg-[#050505]">
            <!-- Intense ambient background orbs for frosted glass effect -->
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/20 rounded-full blur-[120px] pointer-events-none z-0"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/4 translate-y-1/4 w-[500px] h-[500px] bg-emerald-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 text-center">
                
                <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter text-white mb-6 md:mb-8 reveal-up leading-tight drop-shadow-xl">
                    Drive More <br> <span class="text-gradient-cyan">with Less Energy</span>
                </h2>

                <!-- Controls (Swatches) -->
                <div class="flex flex-col items-center justify-center gap-3 reveal-up delay-100 relative z-30 mb-8 md:mb-10">
                    <div class="h-6 mb-1">
                        <p id="active-color-name" class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Alphine White</p>
                    </div>
                    
                    <!-- Swatch Eksterior Geely Starray -->
                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-4 md:gap-6 transition-all duration-500 opacity-100">
                        <button class="swatch-ext swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #F8F8F8; border-color: #333;" data-src="https://riszali.sirv.com/Spins/starray/alphine-white.spin" data-name="Alphine White"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #C0C0C0;" data-src="https://riszali.sirv.com/Spins/starray/cloundveil-silver.spin" data-name="Cloudveil Silver"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #a7c7d7;" data-src="https://riszali.sirv.com/Spins/starray/glacier-blue.spin" data-name="Glacier Blue"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #556B2F;" data-src="https://riszali.sirv.com/Spins/starray/jungle-green.spin" data-name="Jungle Green"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #5d5d5d;" data-src="https://riszali.sirv.com/Spins/starray/volcanic-grey.spin" data-name="Volcanic Grey"></button>
                        <button class="swatch-ext swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #28282B;" data-src="https://riszali.sirv.com/Spins/starray/polar-black.spin" data-name="Polar Black"></button>
                    </div>
                </div>

                <!-- Viewer Display Container -->
                <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] overflow-hidden reveal-up delay-200 shadow-[0_30px_60px_rgba(0,0,0,0.8)] w-full relative z-10 viewer-container group mb-10 lg:mb-16">
                    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-white/5 to-transparent pointer-events-none z-20"></div>
                    <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden">
                        <div id="wrapper-exterior" class="absolute inset-0 w-full h-full z-10 transition-opacity duration-500" style="opacity: 1; pointer-events: auto;">
                            <!-- CSS HACK (Remove Sirv Watermark): w-[108%] h-[108%] -->
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/starray/alphine-white.spin" class="absolute top-1/2 left-1/2 w-[112%] h-[112%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <!-- Box Spesifikasi -->
                <div class="grid grid-cols-3 gap-2 sm:gap-4 md:gap-8 reveal-up delay-300 -mt-20 sm:-mt-24 md:-mt-32 lg:-mt-48 px-2 sm:px-6 md:px-10 lg:px-20 relative z-30 mb-8">
                    <!-- Glowing orb directly behind specs for extreme glass blur -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[80%] h-[120%] bg-gradient-to-r from-cyan-500/20 via-blue-500/20 to-emerald-500/20 blur-[60px] rounded-[100px] pointer-events-none z-0"></div>

                    <!-- Box 1 (Range) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-cyan-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-cyan-300 transition-colors duration-300 drop-shadow-sm text-center">Range up to</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5xl lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.4)]">1000+</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 leading-none lowercase">km*</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-cyan-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">NEDC Range - Combined</p>
                    </div>

                    <!-- Box 2 (Fuel Efficiency) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-emerald-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-emerald-300 transition-colors duration-300 drop-shadow-sm text-center">Fuel Efficiency up to</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5lg lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-emerald-400 leading-none drop-shadow-[0_0_15px_rgba(52,211,153,0.4)]">83</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 leading-none lowercase">km/l*</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-emerald-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">NEDC Fuel Consumption -<br>Weighted Combined</p>
                    </div>

                    <!-- Box 3 (Electric Range) -->
                    <div class="glass-panel relative z-10 p-4 sm:p-6 md:p-8 lg:p-10 rounded-[20px] sm:rounded-[24px] md:rounded-[32px] group hover:border-blue-400/50 transition-colors duration-500 flex flex-col justify-center items-center shadow-2xl">
                        <p class="text-gray-300 text-[6px] sm:text-[9px] font-bold tracking-[0.1em] sm:tracking-[0.2em] uppercase mb-1 sm:mb-3 group-hover:text-blue-300 transition-colors duration-300 drop-shadow-sm text-center">Electric Range up to</p>
                        <h3 class="font-geely flex items-baseline justify-center text-2xl sm:text-4xl md:text-5xl lg:text-7xl text-white uppercase mb-1 sm:mb-3 group-hover:scale-105 transition-transform duration-500 drop-shadow-[0_10px_20px_rgba(0,0,0,0.5)]">
                            <span class="text-blue-400 leading-none drop-shadow-[0_0_15px_rgba(96,165,250,0.4)]">105</span><span class="text-[8px] sm:text-[14px] md:text-xl text-gray-400 ml-0.5 sm:ml-1.5 tracking-normal lowercase leading-none">km*</span>
                        </h3>
                        <div class="h-[1px] w-6 sm:w-12 bg-white/20 mx-auto mb-1.5 sm:mb-3 group-hover:bg-blue-400/80 transition-colors duration-300"></div>
                        <p class="text-gray-400 text-[5px] sm:text-[7px] md:text-[8px] lg:text-[10px] font-bold tracking-wider sm:tracking-widest uppercase text-center leading-tight">NEDC Electric Range -<br>Combined</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             WRAPPER UNTUK EFEK STICKY OVERLAP
             (Section 4 Video & Section 5 Content digabung)
        =========================================== -->
        <div class="relative w-full pb-10 bg-[#050505]">
            
            <!-- SECTION 4: STICKY VIDEO BACKGROUND -->
            <div class="sticky top-[25vh] md:top-0 w-full aspect-video md:h-[100vh] overflow-hidden z-0">
                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
                </video>
                
                <!-- Subtle gradient overlays for smooth blending -->
                <div class="absolute inset-x-0 top-0 h-10 md:h-32 bg-gradient-to-b from-[#050505] to-transparent pointer-events-none z-10"></div>
                <div class="absolute inset-x-0 bottom-0 h-10 md:h-32 bg-gradient-to-t from-[#050505] to-transparent pointer-events-none z-10"></div>
            </div>

            <!-- SECTION 5: EM-I SUPER HYBRID TECHNOLOGY -->
            <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-[#050505] relative z-30 shadow-[0_-30px_60px_rgba(0,0,0,0.9)] min-h-[100vh] rounded-t-[2rem] md:rounded-none border-t border-white/5 md:border-t-0">
                <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
                <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

                <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-x-20 lg:gap-y-10 items-center lg:items-start">
                    
                    <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                        <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                            Efficiency meets intelligent
                        </h3>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                            EM-i <span class="text-gradient-cyan">super hybrid</span>
                        </h2>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                            EM-i or E-Motive intelligence is Geely's advanced hybrid technology, combining the benefits of fuel and battery for greater efficiency, capability, and lower emissions.
                        </p>
                    </div>

                    <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                        <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/4 w-[80%] h-[60%] bg-cyan-600/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
                        <div class="glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] relative z-10">
                            <div class="relative w-full aspect-video rounded-[1rem] md:rounded-[1.5rem] overflow-hidden">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform md:hover:scale-105 transition-transform duration-700">
                                    <!-- Path diubah ke folder public/videos/ agar tidak terhapus saat di-build -->
                                    <source src="/videos/benefits-of-em-i.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="order-3 lg:col-start-2 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-400 relative z-10 group overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] group-hover:bg-cyan-400/40 transition-colors duration-500"></div>
                        <h4 class="text-white font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-cyan-300 transition-colors drop-shadow-sm">
                            Highest Thermal Efficiency (46.5%)
                        </h4>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-gray-300 transition-colors">
                            Globally leading platform thermal efficiency, surpassing industry standards.
                        </p>
                    </div>

                    <div class="order-4 lg:col-start-1 lg:row-start-2 glass-panel p-5 sm:p-6 md:p-8 rounded-2xl md:rounded-3xl reveal-up delay-300 relative group overflow-hidden">
                        <div class="absolute -right-10 -top-10 w-32 h-32 bg-emerald-500/20 rounded-full blur-[40px] group-hover:bg-emerald-400/40 transition-colors duration-500"></div>
                        <h4 class="text-white font-bold text-base sm:text-lg md:text-2xl mb-2 md:mb-4 relative z-10 group-hover:text-emerald-300 transition-colors drop-shadow-sm">
                            High Efficiency Electric Drive
                        </h4>
                        <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg relative z-10 leading-relaxed group-hover:text-gray-300 transition-colors">
                            Class-leading PHEV with high-efficiency drive and continuous variable voltage performance.
                        </p>
                    </div>

                </div>
            </section>
            
        </div> <!-- End of Sticky Wrapper -->

        <!-- ==========================================
             WRAPPER UNTUK EFEK STICKY OVERLAP (SECTION 6 & 7)
        =========================================== -->
        <div class="relative w-full bg-[#050505]">
            
            <!-- SECTION 6: CINEMATIC VIDEO BREAK (YOUTUBE STICKY) -->
            <!-- Container dibuat aspect-video murni dan di-center secara vertikal (top-1/2 -translate-y-1/2)
                 agar mempertahankan rasio asli 16:9 di semua layar dan pas tanpa memotong video -->
            <div class="sticky top-1/2 -translate-y-1/2 w-full aspect-video z-0 bg-black">
                <iframe 
                    class="absolute inset-0 w-full h-full pointer-events-none" 
                    src="https://www.youtube.com/embed/Wf-e2Xjdm18?autoplay=1&mute=1&controls=0&showinfo=0&rel=0&loop=1&playlist=Wf-e2Xjdm18&playsinline=1" 
                    title="Geely Starray Cinematic Background" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                    allowfullscreen>
                </iframe>
            </div>

            <!-- Spacer untuk memberikan waktu scroll selagi video menempel di latar belakang -->
            <div class="w-full h-[50vh] md:h-[70vh] pointer-events-none"></div>

            <!-- SECTION 7: EXTERIOR SHOWCASE (BENTO GRID) -->
            <!-- Menggulir menutupi video sticky di atasnya dengan transisi bersih -->
            <section id="exterior-gallery" class="py-16 md:py-24 lg:py-32 bg-[#050505] relative z-30 shadow-[0_-30px_60px_rgba(0,0,0,0.9)] rounded-t-[2rem] md:rounded-none border-t border-white/5">
                <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

                <div class="max-w-[1600px] w-full mx-auto md:px-12 lg:px-16 relative z-10">
                    <div class="text-center mb-8 md:mb-16 px-4">
                        <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                            Visionary Design
                        </h3>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white reveal-up delay-100 leading-tight drop-shadow-lg">
                            Captivating <span class="text-gradient-cyan">Exterior</span>
                        </h2>
                    </div>

                    <!-- Slider Container Baru dengan Tombol Navigasi -->
                    <div class="relative w-full group">
                        <!-- Tombol Prev -->
                        <button id="ext-btn-prev" class="nav-btn absolute left-2 md:left-4 top-1/2 -translate-y-1/2 z-20 text-white p-3 rounded-full transition-all hidden md:flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,0,0,0.5)]">
                            <svg class="w-5 h-5 hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>

                        <div id="desktop-slider" class="flex flex-nowrap w-full overflow-x-auto overscroll-x-contain snap-x snap-mandatory gap-4 pb-8 md:pb-0 px-4 md:px-0 scroll-smooth cursor-grab active:cursor-grabbing" style="scrollbar-width: none; -ms-overflow-style: none;">
                            <!-- Image 1 -->
                            <div class="flex-shrink-0 w-[85vw] md:w-[70vw] lg:w-[60vw] snap-center reveal-up delay-100">
                                <!-- Menggunakan path absolut biasa agar tidak nyangkut cache APP_URL Laravel -->
                                <img src="/images/02-exterior-geely-starray-em-i-geely-ambara-group-2-AVLxzgj4K6TXQRbW.webp" alt="Geely Starray Exterior 1" draggable="false" loading="lazy" class="w-full h-auto rounded-[1rem] md:rounded-[1.5rem] select-none pointer-events-none">
                            </div>
                            <!-- Image 2 -->
                            <div class="flex-shrink-0 w-[85vw] md:w-[70vw] lg:w-[60vw] snap-center reveal-up delay-200">
                                <img src="/images/03-exterior-geely-starray-em-i-geely-ambara-group-dOqZ7gex2Oc0v1R7.webp" alt="Geely Starray Exterior 2" draggable="false" loading="lazy" class="w-full h-auto rounded-[1rem] md:rounded-[1.5rem] select-none pointer-events-none">
                            </div>
                            <!-- Image 3 -->
                            <div class="flex-shrink-0 w-[85vw] md:w-[70vw] lg:w-[60vw] snap-center reveal-up delay-300">
                                <img src="/images/04-exterior-geely-starray-em-i-geely-ambara-group-Awv8JKwezJHoy7ow.webp" alt="Geely Starray Exterior 3" draggable="false" loading="lazy" class="w-full h-auto rounded-[1rem] md:rounded-[1.5rem] select-none pointer-events-none">
                            </div>
                            <!-- Image 4 -->
                            <div class="flex-shrink-0 w-[85vw] md:w-[70vw] lg:w-[60vw] snap-center reveal-up delay-400">
                                <img src="/images/exterior_starray_05-AMqD4DLqGPiyZ8xX.jpg" alt="Geely Starray Exterior 4" draggable="false" loading="lazy" class="w-full h-auto rounded-[1rem] md:rounded-[1.5rem] select-none pointer-events-none">
                            </div>
                        </div>

                        <!-- Tombol Next -->
                        <button id="ext-btn-next" class="nav-btn absolute right-2 md:right-4 top-1/2 -translate-y-1/2 z-20 text-white p-3 rounded-full transition-all hidden md:flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,0,0,0.5)]">
                            <svg class="w-5 h-5 hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>

                </div>
            </section>
        </div> <!-- End of Sticky Wrapper Section 6 & 7 -->

        <!-- ==========================================
             SECTION 8: IMMERSIVE INTERIOR
        =========================================== -->
        <section id="interior-gallery" class="py-16 md:py-24 lg:py-32 bg-[#050505] relative z-30 border-t border-white/5">
            <!-- Background Glows -->
            <div class="absolute top-1/4 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto md:px-12 lg:px-16 relative z-10">
                <div class="text-center mb-8 md:mb-12 px-4">
                    <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Sanctuary of Luxury
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white reveal-up delay-100 leading-tight">
                        Immersive <span class="text-gradient-cyan">Interior</span>
                    </h2>
                </div>

                <!-- Color Selector & Main Hero Interior Image -->
                <div class="flex flex-col items-center gap-6 mb-12 lg:mb-20 px-4 md:px-0 reveal-up delay-200">
                    
                    <!-- Color Buttons -->
                    <div class="flex items-center gap-4 bg-white/5 p-2 rounded-full backdrop-blur-md border border-white/10">
                        <button class="interior-color-btn active w-10 h-10 md:w-12 md:h-12 rounded-full border-2 border-white scale-110 transition-all duration-300" style="background-color: #F8F8F8;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" aria-label="White Interior"></button>
                        <button class="interior-color-btn w-10 h-10 md:w-12 md:h-12 rounded-full border-2 border-transparent hover:border-white/50 transition-all duration-300" style="background-color: #1A1A1A;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_02-2-ALp27e5OjrUeRvJO.jpg" aria-label="Black Interior"></button>
                    </div>

                    <!-- Main Full Width Image Container (Shadow dihapus) -->
                    <div class="w-full glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2.5rem]" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-video lg:aspect-[21/9] rounded-[1rem] md:rounded-[2rem] overflow-hidden bg-[#111]">
                            <img id="interior-main-img" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" alt="Geely Starray Interior" loading="lazy" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500 ease-in-out">
                        </div>
                    </div>
                </div>

                <!-- Interior Bento Grid Details - Mobile Horizontal Swipe -->
                <!-- Efek shadow dihapus di setiap glass-panel menggunakan box-shadow inline reset -->
                <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-4 md:grid md:grid-cols-12 md:gap-6 lg:gap-8 md:auto-rows-min pb-8 md:pb-0 px-4 md:px-0">
                    
                    <!-- Top Row -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-7 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-100" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-auto md:h-[300px] lg:h-[400px] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_02-Aq2GqWMNZKuN5KX1.png" alt="Interior Detail 1" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-5 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-200" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-auto md:h-[300px] lg:h-[400px] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_03-dOqZ8avNrlIy408B.png" alt="Interior Detail 2" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>

                    <!-- Bottom Row -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-4 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-100" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-auto md:h-[250px] lg:h-[350px] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_05-m5K8LMErKrcbRGzg.png" alt="Interior Detail 3" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-4 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-200" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-auto md:h-[250px] lg:h-[350px] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_06-mnl4qW86jVfr41r2.png" alt="Interior Detail 4" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-4 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-300" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-auto md:h-[250px] lg:h-[350px] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_07-YBgjeby2r2Uan7J0.png" alt="Interior Detail 5" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>

                    <!-- Extra Bottom Row (Full Width Banner Style Image) -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-12 glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] reveal-up delay-400" style="box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);">
                        <div class="relative w-full aspect-[4/3] md:aspect-[21/9] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden group">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_04-YD0EBleDxZI2bbaK.png" alt="Interior Detail 6" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none md:pointer-events-auto">
                        </div>
                    </div>

                </div>

                <!-- Swipe indicator for mobile -->
                <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-cyan-400 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 9: FLYME SOUND
        =========================================== -->
        <section id="flyme-sound" class="relative py-24 md:py-32 lg:py-48 bg-[#050505] border-t border-white/5 flex items-center min-h-[80vh] overflow-hidden">
            <!-- Background Image with Gradient Overlays -->
            <div class="absolute inset-0 z-0">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-2-7gxdE17JaBDuxxbF.jpg" alt="Flyme Sound System" loading="lazy" class="w-full h-full object-cover opacity-50 transform hover:scale-105 transition-transform duration-[20s] ease-linear">
                <!-- Fade blending to match surrounding dark sections -->
                <div class="absolute inset-0 bg-gradient-to-r from-[#050505] via-[#050505]/70 to-transparent"></div>
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#050505] to-transparent"></div>
                <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-[#050505] to-transparent"></div>
            </div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <div class="max-w-2xl reveal-left">
                    <!-- Subheading -->
                    <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4">
                        Symphony of Senses
                    </h3>
                    
                    <!-- Title -->
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                        Flyme <span class="text-gradient-cyan">Sound</span>
                    </h2>
                    
                    <!-- Description -->
                    <p class="text-gray-300 text-sm md:text-base lg:text-lg font-light leading-relaxed mb-10">
                        Enjoy crystal-clear audio from a 16-speaker setup with powerful 1000W amplifier.
                    </p>

                    <!-- Stats Glass Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-3 md:gap-4 reveal-up delay-200">
                        <!-- Tweeters -->
                        <div class="glass-panel p-4 md:p-6 rounded-[1rem] md:rounded-[1.5rem] col-span-1 md:col-span-2 flex flex-col justify-center items-center text-center group hover:border-cyan-400/50 transition-colors duration-500">
                            <p class="font-geely text-3xl md:text-4xl text-white group-hover:text-cyan-400 transition-colors mb-1 drop-shadow-md">4</p>
                            <p class="text-gray-400 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Tweeters</p>
                        </div>
                        <!-- Midrange -->
                        <div class="glass-panel p-4 md:p-6 rounded-[1rem] md:rounded-[1.5rem] col-span-1 md:col-span-2 flex flex-col justify-center items-center text-center group hover:border-cyan-400/50 transition-colors duration-500">
                            <p class="font-geely text-3xl md:text-4xl text-white group-hover:text-cyan-400 transition-colors mb-1 drop-shadow-md">5</p>
                            <p class="text-gray-400 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Midrange<br>Speakers</p>
                        </div>
                        <!-- Headrest -->
                        <div class="glass-panel p-4 md:p-6 rounded-[1rem] md:rounded-[1.5rem] col-span-2 md:col-span-2 flex flex-col justify-center items-center text-center group hover:border-cyan-400/50 transition-colors duration-500">
                            <p class="font-geely text-3xl md:text-4xl text-white group-hover:text-cyan-400 transition-colors mb-1 drop-shadow-md">2</p>
                            <p class="text-gray-400 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Headrest<br>Speakers</p>
                        </div>
                        <!-- Woofers -->
                        <div class="glass-panel p-4 md:p-6 rounded-[1rem] md:rounded-[1.5rem] col-span-1 md:col-span-3 flex flex-col justify-center items-center text-center group hover:border-cyan-400/50 transition-colors duration-500">
                            <p class="font-geely text-3xl md:text-4xl text-white group-hover:text-cyan-400 transition-colors mb-1 drop-shadow-md">4</p>
                            <p class="text-gray-400 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Woofers</p>
                        </div>
                        <!-- Subwoofer -->
                        <div class="glass-panel p-4 md:p-6 rounded-[1rem] md:rounded-[1.5rem] col-span-1 md:col-span-3 flex flex-col justify-center items-center text-center group hover:border-cyan-400/50 transition-colors duration-500">
                            <p class="font-geely text-3xl md:text-4xl text-white group-hover:text-cyan-400 transition-colors mb-1 drop-shadow-md">1</p>
                            <p class="text-gray-400 text-[9px] md:text-[10px] uppercase tracking-widest font-bold">Subwoofer</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 10: SAFETY BEYOND
        =========================================== -->
        <section id="safety" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] border-t border-white/5">
            <div class="absolute top-1/4 right-0 w-[400px] md:w-[600px] h-[400px] md:h-[600px] bg-red-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-1/4 w-[300px] md:w-[500px] h-[300px] md:h-[500px] bg-blue-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-0 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4">
                    <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">Safety Beyond</h3>
                    <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-6 reveal-up delay-100 leading-tight drop-shadow-lg">
                        Built to your needs with advanced software that <span class="text-gradient-cyan">evolves with you</span>.
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light leading-relaxed reveal-up delay-200">
                        Keeping you connected and comfortable no matter where the road takes you.
                    </p>
                </div>

                <!-- ADAS Section -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-x-12 lg:gap-y-6 mb-16 md:mb-24 lg:mb-32 px-4 md:px-0 items-center">
                    <div class="order-1 lg:row-start-1 lg:col-span-5 lg:col-start-1 px-2 reveal-left lg:self-end">
                        <h3 class="font-geely text-3xl md:text-4xl lg:text-5xl text-white mb-2 tracking-tighter">ADAS</h3>
                        <p class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-3 drop-shadow-sm">Advanced Driver Assistance Systems</p>
                        <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">Experience enhanced safety and convenience with 14 functions of Level 2 ADAS.</p>
                    </div>
                    <div class="order-2 lg:row-start-2 lg:col-span-7 lg:col-start-6 reveal-right delay-200 relative w-full mt-2 lg:mt-0 lg:self-center">
                        <button id="adas-btn-prev" class="nav-btn absolute left-0 top-1/2 -translate-y-1/2 -ml-3 lg:-ml-6 z-20 text-white p-3 rounded-full transition-all hidden md:flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,0,0,0.5)] group">
                            <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                        </button>
                        <div class="absolute inset-y-0 right-0 w-12 bg-gradient-to-l from-[#050505] to-transparent z-10 pointer-events-none hidden lg:block"></div>
                        <div class="absolute inset-y-0 left-0 w-12 bg-gradient-to-r from-[#050505] to-transparent z-10 pointer-events-none hidden lg:block"></div>
                        <div id="adas-slider" class="grid grid-rows-2 lg:grid-rows-3 grid-flow-col gap-3 md:gap-4 overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory pb-4 pt-2 px-2 lg:px-6">
                            <!-- AEB to IHBC -->
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">AEB</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Automatic Emergency Braking</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">ACC</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Adaptive Cruise Control</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">ICC</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Intelligent Cruise Control</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">CMSF</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Collision Mitigation Support Front</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">CMSR</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Collision Mitigation Support Rear</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">RCTA</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Rear Cross Traffic Alert</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">RCTB</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Rear Cross Traffic Braking</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">LKA</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Lane Keeping Assist</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">TSI</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Traffic Sign Information</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">DOW</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Doors Open Warning</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">LCA</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Lane Change Assist</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">BSD</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Blind Spots Detection</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">ELKA</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Emergency Lane Keeping Assist</p>
                            </div>
                            <div class="glass-panel p-4 md:p-5 rounded-2xl w-[70vw] md:w-[240px] lg:w-[260px] snap-center group cursor-default">
                                <h4 class="text-white font-geely text-lg md:text-xl mb-1 group-hover:text-cyan-400 transition-colors">IHBC</h4>
                                <p class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider group-hover:text-gray-300">Intelligent High Beam Control</p>
                            </div>
                            <div class="glass-panel w-[10px] md:w-[20px] opacity-0 pointer-events-none"></div>
                        </div>
                        <button id="adas-btn-next" class="nav-btn absolute right-0 top-1/2 -translate-y-1/2 -mr-3 lg:-mr-6 z-20 text-white p-3 rounded-full transition-all hidden md:flex items-center justify-center cursor-pointer shadow-[0_4px_20px_rgba(0,0,0,0.5)] group">
                            <svg class="w-5 h-5 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                        </button>
                    </div>
                    <div class="order-3 lg:row-start-2 lg:col-span-5 lg:col-start-1 reveal-left delay-100 lg:self-center mt-2 lg:mt-0">
                        <div class="glass-panel p-2 md:p-3 rounded-[1.5rem] md:rounded-[2rem] shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                            <div class="relative w-full aspect-video rounded-[1rem] md:rounded-[1.5rem] overflow-hidden">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/adas-starray-YrD4N7o6BJtj2O09.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panoramic & Airbag Bento Grid -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 lg:gap-8 px-4 md:px-0 reveal-up delay-300">
                    <div class="lg:col-span-7 glass-panel p-4 md:p-5 rounded-[1.5rem] md:rounded-[2rem] group flex flex-col justify-between overflow-hidden gap-4">
                        <div class="relative w-full aspect-video rounded-[1rem] overflow-hidden shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/panoramic-review-OnAXbRO9dbfv2iX7.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="px-2">
                            <h4 class="font-geely text-2xl md:text-3xl text-white tracking-tighter mb-1 drop-shadow-lg">540° PANORAMIC VIEW</h4>
                            <p class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-widest uppercase drop-shadow-md">Your intelligent co-pilot</p>
                        </div>
                    </div>
                    <div class="lg:col-span-5 glass-panel p-4 md:p-5 rounded-[1.5rem] md:rounded-[2rem] group flex flex-col justify-between overflow-hidden gap-4">
                        <div class="relative w-full rounded-[1rem] flex items-center justify-center overflow-hidden h-full min-h-[250px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/airbag-system-yVMPn0eYi0Z5AHzM.jpg" alt="Airbag System" loading="lazy" class="w-full h-full object-contain transform md:group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="px-2">
                            <h4 class="font-geely text-2xl md:text-3xl text-white tracking-tighter mb-1 drop-shadow-lg">AIRBAG SYSTEM</h4>
                            <p class="text-emerald-400 text-[10px] md:text-xs font-bold tracking-widest uppercase drop-shadow-md">Comprehensive Protection with 6 Airbags</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 11: GEELY APP REMOTE CONTROL
        =========================================== -->
        <section id="app-remote" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] border-t border-white/5">
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-emerald-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-0 sm:px-8 md:px-12 lg:px-16 relative z-10">
                
                <!-- Section Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4">
                    <h3 class="text-cyan-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Effortless Convenience
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                        Geely App <span class="text-gradient-cyan">Remote Control</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed reveal-up delay-200">
                        Geely App Remote Control puts effortless convenience in your hands. Drive with confidence knowing you’re always connected.
                    </p>
                </div>

                <!-- Slideshow on Mobile, Bento Grid on Desktop -->
                <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pb-8 md:pb-0 px-4 md:px-0">
                    
                    <!-- Feature 1: Always Charged -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-100 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Always Charged" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Always Charged</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Schedule and monitor charging remotely to ensure your car is powered up when you need it. More convenience, more efficiency, all at your fingertips.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 2: Never Lost -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-200 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Never Lost" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Never Lost</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Precision map positioning with a one-tap “Find my Car” feature. No more lost cars, park with confidence, locate with ease.
                            </p>
                        </div>
                    </div>

                    <!-- Feature 3: Full Control -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto glass-panel rounded-[1.5rem] md:rounded-[2rem] flex flex-col reveal-up delay-300 group shadow-[0_30px_60px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-[4/3] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Full Control" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-700 select-none pointer-events-none">
                        </div>
                        <div class="p-6 md:p-8">
                            <h4 class="text-white font-geely text-xl md:text-2xl mb-3 group-hover:text-cyan-400 transition-colors">Full Control</h4>
                            <p class="text-gray-400 text-xs sm:text-sm leading-relaxed">
                                Pre-cool or warm up your car for ultimate comfort. Remotely unlock the doors for family. Check and control windows, doors, and vehicle status anytime.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Swipe indicator for mobile -->
                <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-cyan-400 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                    Swipe to explore
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 12: DIVE INTO THE DETAILS
        =========================================== -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-white overflow-hidden border-t border-gray-100">
            <!-- Subtle Light Background Elements -->
            <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-cyan-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <h3 class="text-cyan-600 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4">
                        The Blueprint
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 leading-tight">
                        Dive Into <span class="text-gradient-cyan">The Details</span>
                    </h2>
                    <p class="text-gray-600 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed">
                        Get a look at the Geely Starray EM-i’s advanced features and specifications, designed to set a new standard for EV.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    
                    <!-- Left: Navigation Link Cards (Pindah ke bawah di versi HP menggunakan order-2) -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Exterior Link Card -->
                        <a href="{{ route('models.starray.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <!-- Overlay Gradient for Readability -->
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                            
                            <!-- Card Content -->
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Explore</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Interior Link Card -->
                        <a href="{{ route('models.starray.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <!-- Overlay Gradient for Readability -->
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                            
                            <!-- Card Content -->
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Discover</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Specification Link Card -->
                        <a href="{{ route('models.starray.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-gray-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/super-hybrid-starray-AVLxbx7nnlclXbQM.jpg" alt="Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <!-- Overlay Gradient for Readability -->
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/40 to-transparent"></div>
                            
                            <!-- Card Content -->
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Learn More</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Specification</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Right: Dimensions & Actions (Pindah ke atas di versi HP menggunakan order-1) -->
                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        
                        <!-- Dimensions Box (Light Theme for White Section) -->
                        <div class="bg-gray-50 border border-gray-200 p-6 md:p-8 rounded-[1.5rem] md:rounded-[2rem] flex flex-col shadow-sm relative overflow-hidden group">
                            <h4 class="text-gray-900 font-geely text-2xl mb-1">Dimensions</h4>
                            <p class="text-gray-500 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-6">(in milimeters)</p>
                            
                            <div class="grid grid-cols-2 gap-4 md:gap-6 relative z-10">
                                <div class="border-l-2 border-cyan-500 pl-3">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl text-gray-900">4740</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-3">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl text-gray-900">1905</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-3">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl text-gray-900">1685</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-3">
                                    <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl text-gray-900">2755</p>
                                </div>
                            </div>

                            <!-- Sketch Image -->
                            <div class="w-full relative mt-8 mix-blend-multiply opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-starray-chwVZ2KpT7ymtdyd.webp" alt="Geely Starray Sketch" loading="lazy" class="w-full h-auto object-contain">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-3 w-full">
                            <a href="#" class="w-full py-4 md:py-5 rounded-full bg-gray-900 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:bg-cyan-600 transition-colors duration-300 shadow-md">
                                Show Full Specs
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full">
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Brochure
                                </a>
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-300 text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-gray-100 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    Owner's Manual
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

    </div>

    <!-- ==========================================
         SCRIPTS (Global Animation Observer, 360 Viewer, & Sliders)
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Animasi Scroll Reveal
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

            // 2. Logika Swatch 360 Viewer Eksterior Starray
            const frameExt = document.getElementById('iframe-exterior');
            const colorNameDisplay = document.getElementById('active-color-name');
            const swatchesExt = document.querySelectorAll('.swatch-ext');

            swatchesExt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatchesExt.forEach(s => s.classList.remove('active'));
                    swatch.classList.add('active');
                    
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });

            // 3. Logika Swatch Toggle Interior (Black / White)
            const interiorImg = document.getElementById('interior-main-img');
            const interiorBtns = document.querySelectorAll('.interior-color-btn');

            if(interiorImg && interiorBtns.length > 0) {
                interiorBtns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        // Reset all buttons styling
                        interiorBtns.forEach(b => {
                            b.classList.remove('active', 'border-white', 'scale-110');
                            b.classList.add('border-transparent');
                        });
                        
                        // Set active button styling
                        btn.classList.add('active', 'border-white', 'scale-110');
                        btn.classList.remove('border-transparent');
                        
                        // Fade out, swap source, fade in
                        interiorImg.style.opacity = 0;
                        setTimeout(() => {
                            interiorImg.src = btn.getAttribute('data-src');
                            interiorImg.style.opacity = 1;
                        }, 300); // Wait for transition out
                    });
                });
            }

            // 4. Logika Slider Horizontal ADAS (Tombol & Auto-slide Mobile)
            const adasSlider = document.getElementById('adas-slider');
            const adasPrevBtn = document.getElementById('adas-btn-prev');
            const adasNextBtn = document.getElementById('adas-btn-next');

            if (adasSlider) {
                // Konfigurasi scroll dengan tombol
                const scrollAmount = 260; 

                adasPrevBtn?.addEventListener('click', () => {
                    adasSlider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
                });

                adasNextBtn?.addEventListener('click', () => {
                    adasSlider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
                });

                // Auto-slide khusus untuk versi HP (lebar layar < 768px)
                let autoSlideInterval;
                const startAutoSlide = () => {
                    if (window.innerWidth < 768) {
                        autoSlideInterval = setInterval(() => {
                            // Jika sudah di ujung mentok kanan, reset ke kiri. Jika belum, lanjut geser.
                            if (adasSlider.scrollLeft + adasSlider.clientWidth >= adasSlider.scrollWidth - 20) {
                                adasSlider.scrollTo({ left: 0, behavior: 'smooth' });
                            } else {
                                adasSlider.scrollBy({ left: window.innerWidth * 0.7, behavior: 'smooth' });
                            }
                        }, 3000); // Geser otomatis setiap 3 detik
                    }
                };

                const stopAutoSlide = () => {
                    clearInterval(autoSlideInterval);
                };

                // Inisiasi awal auto-slide
                startAutoSlide();

                // Hentikan saat user menyentuh/scroll manual agar tidak berebut kontrol
                adasSlider.addEventListener('touchstart', stopAutoSlide, { passive: true });
                adasSlider.addEventListener('touchend', startAutoSlide, { passive: true });
                
                // Pastikan menyesuaikan saat layar diputar/di-resize
                window.addEventListener('resize', () => {
                    stopAutoSlide();
                    startAutoSlide();
                });
            }

            // 5. Logika Drag to Scroll Desktop Slider (Exterior) & Tombol Navigasi
            const desktopSlider = document.getElementById('desktop-slider');
            const extPrevBtn = document.getElementById('ext-btn-prev');
            const extNextBtn = document.getElementById('ext-btn-next');
            
            if (desktopSlider) {
                // Navigasi Tombol Slider Eksterior
                const scrollExtAmount = window.innerWidth * 0.6; // Scroll sebesar 60% lebar layar
                extPrevBtn?.addEventListener('click', () => {
                    desktopSlider.scrollBy({ left: -scrollExtAmount, behavior: 'smooth' });
                });
                extNextBtn?.addEventListener('click', () => {
                    desktopSlider.scrollBy({ left: scrollExtAmount, behavior: 'smooth' });
                });

                // Logika Drag dengan Mouse (seperti sebelumnya)
                let isDown = false;
                let startX;
                let scrollLeft;

                desktopSlider.addEventListener('mousedown', (e) => {
                    isDown = true;
                    desktopSlider.classList.add('active');
                    desktopSlider.style.scrollSnapType = 'none'; 
                    startX = e.pageX - desktopSlider.offsetLeft;
                    scrollLeft = desktopSlider.scrollLeft;
                });

                desktopSlider.addEventListener('mouseleave', () => {
                    isDown = false;
                    desktopSlider.classList.remove('active');
                    desktopSlider.style.scrollSnapType = 'x mandatory'; 
                });

                desktopSlider.addEventListener('mouseup', () => {
                    isDown = false;
                    desktopSlider.classList.remove('active');
                    desktopSlider.style.scrollSnapType = 'x mandatory';
                });

                desktopSlider.addEventListener('mousemove', (e) => {
                    if (!isDown) return;
                    e.preventDefault();
                    const x = e.pageX - desktopSlider.offsetLeft;
                    const walk = (x - startX) * 2; 
                    desktopSlider.scrollLeft = scrollLeft - walk;
                });
            }
        });
    </script>
</x-layouts.app>
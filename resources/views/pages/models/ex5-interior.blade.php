<x-layouts.app>
    <!-- Tambahan CDN untuk Pannellum (Interior 360 Viewer) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.css"/>
    <script src="https://cdn.jsdelivr.net/npm/pannellum/build/pannellum.js"></script>

    <!-- ==========================================
         ULTRA-PREMIUM COLORFUL GLASSMORPHISM STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            /* Perbaikan Sticky: Menghapus overflow-x: clip di sini agar position: sticky berjalan sempurna */
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }

        /* Safe Responsive Heights */
        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        .star-showcase { height: 250px; }
        
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 500px; }
            .star-showcase { height: 350px; }
        }
        @media (min-width: 1024px) {
            .star-showcase { height: 450px; }
        }

        /* Advanced Cinematic Noise */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* Colorful Dark Glass Panel */
        .glass-panel {
            background: linear-gradient(135deg, rgba(25, 25, 30, 0.4) 0%, rgba(25, 25, 30, 0.1) 100%);
            backdrop-filter: blur(24px) saturate(150%);
            -webkit-backdrop-filter: blur(24px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
            transition: all 0.5s ease;
        }

        /* Gold Glass Panel for Blackgold sections */
        .glass-panel-gold {
            background: linear-gradient(135deg, rgba(20, 15, 5, 0.6) 0%, rgba(10, 8, 5, 0.3) 100%);
            backdrop-filter: blur(24px) saturate(120%);
            border: 1px solid rgba(191, 149, 63, 0.2);
            border-top: 1px solid rgba(252, 246, 186, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8);
        }

        /* Light Sweep Effect on Hover */
        .glass-panel::before {
            content: '';
            position: absolute;
            top: 0; left: -150%;
            width: 50%; height: 100%;
            background: linear-gradient(to right, transparent, rgba(255, 255, 255, 0.1), transparent);
            transform: skewX(-25deg);
            transition: left 0.7s cubic-bezier(0.22, 1, 0.36, 1);
            pointer-events: none;
            z-index: 1;
        }
        .glass-panel:hover::before { left: 200%; }
        
        /* Colorful Glow Hover Effect */
        .glass-panel:hover {
            border-color: rgba(34, 211, 238, 0.4);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), 0 0 40px rgba(34, 211, 238, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.2);
        }

        .glass-panel-gold:hover {
            border-color: rgba(191, 149, 63, 0.5);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.8), 0 0 40px rgba(191, 149, 63, 0.15);
        }

        /* Liquid Text Gradient - Colorful */
        .text-liquid {
            background: linear-gradient(270deg, #22d3ee, #818cf8, #c084fc, #22d3ee);
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
        
        .text-gradient-cyan {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .text-gradient-gold {
            background: linear-gradient(to right, #bf953f, #fcf6ba, #b38728, #fcf6ba, #aa771c);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Scroll Reveals */
        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.25, 1, 0.5, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) !important; }
        
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
        .delay-400 { transition-delay: 400ms; }

        /* Swatch Buttons */
        .swatch-btn {
            border: 2px solid rgba(255, 255, 255, 0.2) !important;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }
        .swatch-btn:hover { border-color: rgba(255, 255, 255, 0.6) !important; transform: scale(1.05); }
        .swatch-btn.active {
            transform: scale(1.2) !important;
            border-color: #fff !important;
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.6);
        }

        /* Pannellum Container Fix */
        .pnlm-container { background: transparent !important; }
        .pnlm-load-box { display: none !important; } /* Hide default loader to rely on ours */

        /* RHD Flip Utility */
        .mirror-rhd { transform: scaleX(-1) !important; }

        /* ==========================================
           STARRY NIGHT SECTION STYLES (COPAS EX5)
        =========================================== */
        .section-stars {
            background: radial-gradient(ellipse at bottom, #1B2735 0%, #090A0F 100%);
            overflow: hidden;
            position: relative;
        }
        #stars, #stars2, #stars3, #gold-particles {
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
        
        /* Gold Particles Animation */
        #gold-particles { width: 1px; height: 1px; animation: animStar 80s linear infinite; opacity: 0.5; }
        #gold-particles::after { content: " "; position: absolute; top: 2000px; width: 1px; height: 1px; background: transparent; }

        @keyframes animStar {
            from { transform: translateY(0px); }
            to { transform: translateY(-2000px); }
        }
        .star-title-gradient {
            background: -webkit-linear-gradient(top, white, #4b627a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .text-glow-anim {
            background: linear-gradient(90deg, #ffffff, #22d3ee, #ffffff, #818cf8, #ffffff);
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
    </style>

    <!-- Perbaikan Sticky: Menghapus overflow-x-clip pada main wrapper ini -->
    <div class="w-full bg-[#050505] text-white relative">

        <!-- ==========================================
             SECTION 1: HERO (COLORFUL CARD & BLURRED BG)
        =========================================== -->
        <section class="relative min-h-[100svh] w-full flex flex-col justify-center items-center overflow-hidden bg-[#050505] py-24 lg:py-32">
            <!-- Heavily Blurred Background with Ambient Glows -->
            <div class="absolute inset-0 z-0 bg-[#050505] bg-noise overflow-hidden">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Ambient Blur Background" class="absolute inset-0 w-full h-full object-cover mirror-rhd opacity-60 blur-[80px] transform scale-125 pointer-events-none">
                
                <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-cyan-600/30 rounded-full blur-[120px] pointer-events-none"></div>
                <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-purple-600/30 rounded-full blur-[150px] pointer-events-none"></div>
                
                <div class="absolute inset-0 bg-[#050505]/40 z-10 pointer-events-none"></div>
            </div>

            <!-- Konten Teks -->
            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mb-8 md:mb-12">
                <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-xl reveal-up shadow-[0_0_30px_rgba(34,211,238,0.2)]">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span>
                    </span>
                    <span class="text-cyan-300 text-[9px] md:text-[11px] tracking-[0.4em] font-bold uppercase drop-shadow-md">Interior Design</span>
                </div>

                <h1 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white uppercase leading-[1.1] tracking-tighter drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] mb-6 reveal-up delay-100 max-w-5xl mx-auto">
                    A SANCTUARY OF <span class="text-liquid">COMFORT</span> <br> AND TECHNOLOGY
                </h1>
                
                <p class="text-gray-300 text-sm md:text-lg font-light tracking-wide uppercase reveal-up delay-200 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                    Kabin premium yang dirancang untuk memanjakan setiap indra Anda.
                </p>
            </div>

            <!-- Hero Image as a Glass Card -->
            <div class="relative z-20 w-full max-w-6xl mx-auto px-4 sm:px-6 reveal-up delay-300">
                <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[3rem] shadow-[0_40px_80px_rgba(0,0,0,0.8)] group w-full border border-white/20 hover:border-cyan-400/50 transition-colors duration-500">
                    <div class="relative w-full aspect-video md:aspect-[21/9] rounded-[1.5rem] md:rounded-[2.5rem] overflow-hidden bg-[#111]">
                        <!-- Gambar Tajam di Dalam Card -->
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Geely EX5 Interior" class="w-full h-full object-cover mirror-rhd transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out">
                        
                        <!-- Subtle gradient inside the image card for premium feel -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent opacity-80 pointer-events-none"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: 360 INTERIOR VIEWER
        =========================================== -->
        <section class="py-20 md:py-32 bg-[#050505] relative z-30 overflow-hidden border-t border-white/10 bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
                <div class="reveal-up mb-12 md:mb-16">
                    <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white leading-tight drop-shadow-xl mb-4">
                        INTERIOR <span class="text-gradient-cyan">360</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                        Jelajahi setiap sudut ruang kabin Geely EX5 secara imersif.
                    </p>
                </div>
                
                <!-- Swatch Controls -->
                <div class="flex flex-col items-center justify-center gap-4 md:gap-6 reveal-up delay-100 relative z-30 mb-8 md:mb-10">
                    <div class="h-6">
                        <p id="active-color-name" class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Black Interior</p>
                    </div>
                    
                    <div id="swatches-interior" class="flex flex-wrap justify-center gap-6 md:gap-10 transition-all duration-500 opacity-100 px-4 glass-panel p-2 md:p-3 rounded-full border-cyan-500/20">
                        <button class="swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full border border-white ring-2 ring-transparent ring-offset-4 ring-offset-[#050505] transition-all" style="background-color: #000000;" data-src="https://riszali.sirv.com/Spins/interior/vlack%20int.png" data-name="Black Interior"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #ffffff;" data-src="https://riszali.sirv.com/Spins/interior/whiteint.png" data-name="White Interior"></button>
                    </div>
                </div>

                <!-- Viewer Display Container (Glassmorphism) -->
                <div class="glass-panel p-2 md:p-4 rounded-[2.5rem] md:rounded-[3rem] overflow-hidden reveal-up delay-200 w-full relative z-10 viewer-container group">
                    <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-b from-white/10 to-transparent pointer-events-none z-20"></div>
                    <div class="relative w-full h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden bg-black flex justify-center items-center">
                        <!-- Native Pannellum Element -->
                        <div id="panorama" class="w-full h-full"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: LIFE FULLY REFINED
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-[#050505] overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#050505] via-cyan-900/10 to-[#050505] pointer-events-none"></div>
            
            <div class="relative z-10 w-full text-center px-4 reveal-up">
                <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white tracking-tighter uppercase leading-[0.9] drop-shadow-[0_0_40px_rgba(255,255,255,0.3)]">
                    LIFE FULLY <br class="md:hidden"> <span class="text-gradient-cyan">REFINED</span>
                </h2>
            </div>
        </section>

        <!-- ==========================================
             SECTION 4: FLYME SOUND VIDEO (BLACKGOLD VERSION)
        =========================================== -->
        <section class="py-16 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5">
            <!-- Background Atmosphere ala Section 5 -->
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-30 grayscale mirror-rhd brightness-[0.4]">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                </video>
                <!-- Gold Gradient Overlays -->
                <div class="absolute inset-0 bg-gradient-to-b from-[#050505] via-amber-900/10 to-[#050505]"></div>
                <div class="absolute inset-0 bg-black/40"></div>
            </div>

            <!-- Content -->
            <div class="max-w-6xl mx-auto px-4 sm:px-6 relative z-10 text-center reveal-up">
                <!-- Flyme Sound Logo with Gold Glow -->
                <div class="relative inline-block mb-10 md:mb-16">
                    <div class="absolute inset-0 bg-amber-500/20 blur-[40px] rounded-full scale-150"></div>
                    <img src="{{ asset('images/flyme-auto-logo.webp') }}" alt="Flyme Sound" class="relative h-12 md:h-20 mx-auto drop-shadow-[0_0_20px_rgba(191,149,63,0.5)] brightness-125">
                </div>
                
                <h2 class="font-geely text-xl md:text-3xl text-white uppercase tracking-[0.2em] mb-12 leading-tight">
                    A Symphony in <span class="text-gradient-gold">Black & Gold</span>
                </h2>

                <div class="glass-panel glass-panel-gold p-2 md:p-4 rounded-[2rem] md:rounded-[3rem] shadow-[0_50px_100px_rgba(0,0,0,0.9)] w-full transition-all duration-700">
                    <div class="relative w-full h-0 pb-[56.25%] rounded-[1.5rem] md:rounded-[2.5rem] overflow-hidden bg-black shadow-inner">
                        <video autoplay loop preload="auto" playsinline controls class="absolute inset-0 w-full h-full object-cover">
                            <source src="https://raw.githubusercontent.com/riszali/geely-interior/main/Geely%20EX5%20Flyme%20Sound%20Experience%20A%20Symphony%20In%20Motion.mp4" type="video/mp4">
                            Browser Anda tidak mendukung elemen video.
                        </video>
                    </div>
                </div>

                <div class="mt-12 flex justify-center gap-8 md:gap-16 opacity-60">
                    <div class="text-center">
                        <p class="text-gradient-gold font-geely text-2xl md:text-4xl">16</p>
                        <p class="text-[8px] md:text-[10px] uppercase tracking-widest text-gray-400">Speakers</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gradient-gold font-geely text-2xl md:text-4xl">9.1.4</p>
                        <p class="text-[8px] md:text-[10px] uppercase tracking-widest text-gray-400">Surround</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gradient-gold font-geely text-2xl md:text-4xl">1000W</p>
                        <p class="text-[8px] md:text-[10px] uppercase tracking-widest text-gray-400">Output</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.13: FLYME SOUND SYSTEM STATS (DARK GOLD PARTICLE THEME)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10">
            <!-- Background Gold Particles -->
            <div id="gold-particles"></div>
            
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-amber-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="text-center max-w-4xl mx-auto mb-16 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-amber-500/30 bg-amber-500/10 text-amber-300">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Audiophile Experience</span>
                    </div>
                    <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight">
                        Flyme <span class="text-gradient-gold">Sound System</span>
                    </h2>
                </div>

                <!-- Video Showcase -->
                <div class="glass-panel glass-panel-gold p-2 md:p-4 rounded-[24px] md:rounded-[40px] border border-white/10 mb-16 reveal-up">
                    <div class="relative w-full h-0 pb-[56.25%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-black shadow-inner">
                        <video autoplay muted loop playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover">
                            <source src="https://raw.githubusercontent.com/riszali/web-videos/main/Flyme%20sound%20system.mp4" type="video/mp4">
                            Browser Anda tidak mendukung elemen video.
                        </video>
                    </div>
                </div>

                <!-- Speaker Grid Stats (Modified to Gold Theme) -->
                <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4 md:gap-6 mb-20 reveal-up">
                    <div class="glass-panel glass-panel-gold p-6 rounded-[24px] flex flex-col items-center text-center group transition-all duration-300">
                        <span class="font-geely text-4xl text-gradient-gold mb-2">1</span>
                        <p class="text-[10px] md:text-xs uppercase tracking-widest font-bold text-gray-400">Standalone Subwoofer</p>
                    </div>
                    <div class="glass-panel glass-panel-gold p-6 rounded-[24px] flex flex-col items-center text-center group transition-all duration-300">
                        <span class="font-geely text-4xl text-gradient-gold mb-2">2</span>
                        <p class="text-[10px] md:text-xs uppercase tracking-widest font-bold text-gray-500">Headrest Speakers</p>
                    </div>
                    <div class="glass-panel glass-panel-gold p-6 rounded-[24px] flex flex-col items-center text-center group transition-all duration-300">
                        <span class="font-geely text-4xl text-gradient-gold mb-2">4</span>
                        <p class="text-[10px] md:text-xs uppercase tracking-widest font-bold text-gray-500">Tweeters</p>
                    </div>
                    <div class="glass-panel glass-panel-gold p-6 rounded-[24px] flex flex-col items-center text-center group transition-all duration-300">
                        <span class="font-geely text-4xl text-gradient-gold mb-2">4</span>
                        <p class="text-[10px] md:text-xs uppercase tracking-widest font-bold text-gray-500">Woofers</p>
                    </div>
                    <div class="glass-panel glass-panel-gold p-6 rounded-[24px] flex flex-col items-center text-center group transition-all duration-300">
                        <span class="font-geely text-4xl text-gradient-gold mb-2">5</span>
                        <p class="text-[10px] md:text-xs uppercase tracking-widest font-bold text-gray-500">Mid-Range Speakers</p>
                    </div>
                </div>

                <!-- Gallery Grid -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 reveal-up">
                    <div class="rounded-[24px] overflow-hidden border border-white/10 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2614-ybgezpppwpurl2vz-Yan0BpEezaszRbg1.webp" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-[3s]">
                    </div>
                    <div class="rounded-[24px] overflow-hidden border border-white/10 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-10-m5K8v65ENwCj27Pk.webp" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-[3s]">
                    </div>
                    <div class="rounded-[24px] overflow-hidden border border-white/10 group">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2616-a85ebpwljec8lez2-YNqMJx83D7uR6wDl.webp" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-[3s]">
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: READY TO EXPLORE
        =========================================== -->
        <section class="section-stars py-16 md:py-24 lg:py-40 relative w-full overflow-hidden border-t border-white/10">
            <div class="absolute top-0 inset-x-0 h-40 bg-gradient-to-b from-[#050505] to-transparent pointer-events-none z-10"></div>

            <div id="stars"></div>
            <div id="stars2"></div>
            <div id="stars3"></div>

            <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6">
                
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                    
                    <div class="lg:col-span-5 glass-panel p-8 md:p-10 lg:p-12 rounded-[24px] md:rounded-[40px] flex flex-col justify-center group hover:border-cyan-500/30 transition-all duration-500 reveal-left">
                        <div class="absolute top-0 left-0 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none transition-colors duration-700 group-hover:bg-cyan-500/20"></div>
                        
                        <div class="relative z-10">
                            <span class="text-cyan-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block drop-shadow-md">All-New EX5</span>
                            <h2 class="font-geely text-2xl md:text-4xl lg:text-5xl uppercase tracking-tighter mb-6 md:mb-8 leading-[0.9]">
                                <span class="star-title-gradient drop-shadow-2xl">Ready To <br> Explore</span>
                            </h2>
                            
                            <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light mb-8 md:mb-10 max-w-[90vw] md:max-w-none drop-shadow-sm">
                                Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                            </p>
                            
                            <a href="/test-drive" class="inline-flex items-center gap-3 text-white text-[10px] font-bold tracking-[0.2em] uppercase hover:text-cyan-400 transition-colors w-max pb-2 border-b border-white/30 hover:border-cyan-400">
                                Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </a>
                        </div>
                    </div>

                    <div class="lg:col-span-7 flex flex-col reveal-right relative z-10">
                        
                        <!-- Main Image/Video Showcase -->
                        <div class="glass-panel p-2 rounded-[24px] md:rounded-[40px] group hover:border-white/30 transition-all duration-500 shadow-2xl flex flex-col star-showcase z-10 relative">
                            <div class="relative w-full h-full rounded-[18px] md:rounded-[32px] overflow-hidden">
                                <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover object-center transform transition-transform duration-[4s] ease-out opacity-90 group-hover:opacity-100 z-0 mirror-rhd">
                                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                                </video>
                                <div class="absolute inset-0 bg-gradient-to-t from-[#090A0F]/90 via-black/20 to-transparent opacity-100 pointer-events-none z-10"></div>
                                <div class="absolute bottom-12 lg:bottom-10 left-6 md:left-10 z-20 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500 ease-out pointer-events-none">
                                    <p class="text-glow-anim font-geely text-2xl md:text-3xl lg:text-4xl uppercase tracking-tight mb-1 drop-shadow-lg">Immersive Atmosphere</p>
                                    <p class="text-gray-300 text-[9px] md:text-[10px] tracking-[0.2em] uppercase font-bold drop-shadow-md">Premium Cabin Experience</p>
                                </div>
                            </div>
                        </div>

                        <!-- 3 Stats Grid Mobile 3 Kolom Sejajar -->
                        <div class="grid grid-cols-3 gap-2 sm:gap-3 md:gap-4 lg:gap-6 -mt-6 sm:-mt-10 md:-mt-8 lg:mt-6 relative z-20 px-1 sm:px-4 md:px-0 lg:px-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-cyan-500/20 via-indigo-500/20 to-purple-500/20 blur-[50px] rounded-full pointer-events-none z-0"></div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-cyan-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Up to</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-cyan-400">495</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">km*</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">NEDC Range</p>
                            </div>
                            
                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-indigo-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Fast Charging</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-indigo-400">20</span><span class="text-[8px] sm:text-sm lg:text-lg text-gray-400 ml-0.5 sm:ml-1 leading-none">mins**</span>
                                </h3>
                                <div class="h-[1px] w-4 sm:w-8 bg-white/20 mb-1 sm:mb-2 transition-all duration-500"></div>
                                <p class="text-gray-400 text-[5px] sm:text-[8px] md:text-[9px] tracking-widest uppercase font-bold">30% - 80%</p>
                            </div>

                            <div class="glass-panel relative z-10 p-3 sm:p-5 md:p-6 lg:p-8 rounded-[16px] sm:rounded-[24px] md:rounded-[32px] hover:border-purple-400/50 transition-all duration-500 shadow-xl flex flex-col justify-center items-center text-center">
                                <p class="text-gray-300 text-[6px] sm:text-[9px] tracking-[0.1em] sm:tracking-[0.2em] font-bold uppercase mb-1 sm:mb-2 drop-shadow-sm whitespace-nowrap">Acceleration</p>
                                <h3 class="font-geely flex items-baseline justify-center text-xl sm:text-3xl md:text-4xl lg:text-5xl text-white mb-1 sm:mb-2 drop-shadow-md">
                                    <span class="leading-none text-purple-400">6.9</span><span class="text-[8px] sm:text-[11px] lg:text-sm text-gray-400 ml-0.5 sm:ml-1 tracking-normal lowercase leading-none">sec</span>
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
             SECTION 5.5: SPACIOUS & ELEGANT
        =========================================== -->
        <section class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10 bg-noise">
            <!-- Background Glows -->
            <div class="absolute top-0 left-0 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-purple-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">

                <!-- Header: Title & Description -->
                <div class="text-center max-w-4xl mx-auto mb-16 reveal-up">
                    <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                        Spacious And Elegant <br/> <span class="text-gradient-cyan">Interior Design</span>
                    </h2>
                    <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-sm">
                        Nikmati kenyamanan dan kecanggihan dengan kabin premium yang menawarkan ruang yang lapang, material yang halus, dan perhatian terhadap detail. Menjamin pengalaman mewah di setiap perjalanan, interior yang lapang meningkatkan perjalanan Anda dengan keanggunan dan kemudahan.
                    </p>
                </div>

                <!-- Bento Grid: Main Feature & Extras -->
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 md:gap-6 mb-24">
                    <!-- Main Image (Span 2) -->
                    <div class="lg:col-span-2 glass-panel p-2 rounded-[24px] md:rounded-[32px] group relative overflow-hidden reveal-left h-[300px] md:h-[400px] lg:h-[500px]">
                        <img src="{{ asset('images/spacious-and-elegant.webp') }}" alt="256-Color Ambient Light" class="w-full h-full object-cover rounded-[18px] md:rounded-[26px] transform group-hover:scale-105 transition-transform duration-[2s] ease-out">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent rounded-[24px] md:rounded-[32px] pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 md:bottom-10 md:left-10 z-10">
                            <h3 class="font-geely text-xl md:text-2xl lg:text-3xl text-white uppercase drop-shadow-lg">256-Color Ambient Light*</h3>
                            <p class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase mt-2 drop-shadow-md">EX MAX ONLY</p>
                        </div>
                    </div>
                    
                    <!-- Right Col (2 items Stacked) -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-1 gap-4 md:gap-6 lg:col-span-1 lg:h-[500px]">
                        <!-- Panoramic Sunroof -->
                        <div class="glass-panel p-2 rounded-[24px] md:rounded-[32px] group relative overflow-hidden reveal-right h-[200px] sm:h-[300px] md:h-auto lg:h-full">
                             <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-2-YyvDP6bk9ZhEXOLQ.webp" alt="Panoramic Sunroof" class="w-full h-full object-cover rounded-[18px] md:rounded-[26px] transform group-hover:scale-105 transition-transform duration-[2s] ease-out">
                             <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent rounded-[24px] md:rounded-[32px] pointer-events-none"></div>
                             <div class="absolute bottom-6 left-6 z-10">
                                <h3 class="font-geely text-lg md:text-xl text-white uppercase drop-shadow-lg">Panoramic Sunroof</h3>
                             </div>
                        </div>
                        <!-- Wireless Charging -->
                        <div class="glass-panel p-2 rounded-[24px] md:rounded-[32px] group relative overflow-hidden reveal-right delay-100 h-[200px] sm:h-[300px] md:h-auto lg:h-full">
                             <img src="{{ asset('images/2400x0 (9).jpg') }}" alt="Wireless Charging" class="w-full h-full object-cover rounded-[18px] md:rounded-[26px] transform group-hover:scale-105 transition-transform duration-[2s] ease-out">
                             <div class="absolute inset-0 bg-gradient-to-t from-black/90 to-transparent rounded-[24px] md:rounded-[32px] pointer-events-none"></div>
                             <div class="absolute bottom-6 left-6 z-10">
                                <h3 class="font-geely text-lg md:text-xl text-white uppercase drop-shadow-lg">Wireless Charging</h3>
                             </div>
                        </div>
                    </div>
                </div>

                <!-- Excellence in Comfort Gallery -->
                <div class="mb-24 reveal-up">
                    <div class="text-center mb-10">
                        <h2 class="font-geely text-xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white drop-shadow-lg">
                            Excellence In <span class="text-gradient-cyan">Comfort</span>
                        </h2>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                        <div class="glass-panel p-2 rounded-[20px] md:rounded-[24px] group overflow-hidden h-[250px] md:h-[300px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-1-Yan0BVvQ1ViXLxxQ.webp" class="w-full h-full object-cover rounded-[14px] md:rounded-[18px] transform group-hover:scale-110 transition-transform duration-[2s]">
                        </div>
                        <div class="glass-panel p-2 rounded-[20px] md:rounded-[24px] group overflow-hidden h-[250px] md:h-[300px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-3-m2Wq4029WqIDMgM7.webp" class="w-full h-full object-cover rounded-[14px] md:rounded-[18px] transform group-hover:scale-110 transition-transform duration-[2s]">
                        </div>
                        <div class="glass-panel p-2 rounded-[20px] md:rounded-[24px] group overflow-hidden h-[250px] md:h-[300px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-11-YD0EpKqEpwcxJQ0n.webp" class="w-full h-full object-cover rounded-[14px] md:rounded-[18px] transform group-hover:scale-110 transition-transform duration-[2s]">
                        </div>
                        <div class="glass-panel p-2 rounded-[20px] md:rounded-[24px] group overflow-hidden h-[250px] md:h-[300px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/pdf_28-awvd2mvbr6tkvzrr-m2Wq4zWyGQf2xn4p.jpeg" class="w-full h-full object-cover rounded-[14px] md:rounded-[18px] transform group-hover:scale-110 transition-transform duration-[2s]">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ==========================================
             SECTION 5.6: FIRST-CLASS SEATS (STICKY GLASS CARD)
        =========================================== -->
        <section class="relative w-full bg-[#050505] z-30 border-t border-white/10">
            <!-- Sticky Background Image -->
            <div class="sticky top-0 w-full h-[100vh] z-0 overflow-hidden">
                <img src="{{ asset('images/2400x0-1.webp') }}" alt="Comfortable Layout" class="w-full h-full object-cover object-center">
                <!-- Subtle gradient to ensure text readability -->
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/30 to-transparent opacity-90 pointer-events-none"></div>
            </div>

            <!-- Scrolling Content wrapper -->
            <div class="relative z-10 w-full px-6 -mt-[100vh]">
                <!-- Spacer to push card down initially (gives empty scroll space showing the full image first) -->
                <div class="h-[60vh] md:h-[70vh] w-full pointer-events-none"></div>
                
                <div class="max-w-[1200px] w-full mx-auto pb-[20vh] md:pb-[30vh]">
                    <!-- Glassmorphism Card (Less Blur: backdrop-blur-md, bg-black/40) -->
                    <div class="w-full bg-black/40 backdrop-blur-md border border-white/20 shadow-[0_30px_60px_rgba(0,0,0,0.7)] rounded-[32px] p-6 md:p-10 lg:p-12 transition-all duration-500 hover:bg-black/50 hover:border-white/40">
                        
                        <!-- Top Text -->
                        <div class="w-full max-w-[800px] mb-10 reveal-up">
                            <h2 class="text-2xl md:text-4xl lg:text-5xl uppercase tracking-tight text-white mb-4 leading-[1.1] font-bold drop-shadow-md">
                                FIRST-CLASS FRONT SEATS WITH VENTILATION
                            </h2>
                            <p class="text-gray-200 text-sm md:text-base lg:text-lg leading-relaxed font-light drop-shadow-sm">
                                Dari tempat duduk yang mewah hingga tata letak yang intuitif, setiap elemen kabin memastikan perjalanan yang tenang dan santai.
                            </p>
                        </div>

                        <!-- 4 Features Grid -->
                        <div class="w-full grid grid-cols-1 sm:grid-cols-2 gap-8 md:gap-10">
                            
                            <div class="reveal-up delay-100">
                                <h3 class="font-bold text-xl md:text-2xl text-white drop-shadow-md">Massage-Enabled Seats*</h3>
                            </div>
                            
                            <div class="reveal-up delay-200">
                                <h3 class="font-bold text-xl md:text-2xl text-white drop-shadow-md">Better NVH</h3>
                            </div>
                            
                            <div class="reveal-up delay-300">
                                <h3 class="font-bold text-xl md:text-2xl text-white drop-shadow-md">Healthy Materials</h3>
                                <p class="text-gray-300 text-xs md:text-sm mt-2 drop-shadow-sm">
                                    0 Asphalt, 0 Miscellaneous Cotton, 0 Organic Solvents
                                </p>
                            </div>

                            <div class="reveal-up delay-400">
                                <h3 class="font-bold text-xl md:text-2xl text-white drop-shadow-md">Completely Flat Back Front Seats**</h3>
                                <p class="text-blue-400 text-[10px] md:text-xs font-bold italic mt-2 drop-shadow-sm">
                                    EX5 Max only *EX5 Pro only
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.7: UNPARALLELED CABIN COMFORT (WHITE BACKGROUND)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-white overflow-hidden border-t border-gray-200">
            <!-- Background Glow untuk mode terang -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-200/40 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <!-- Header (Satu Baris dan Warna Hitam) -->
                <div class="text-center max-w-5xl mx-auto mb-10 md:mb-16 reveal-up">
                    <h2 class="font-geely text-xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-[#050505] leading-tight">
                        Unparalleled <span class="text-gradient-cyan">Cabin Comfort</span>
                    </h2>
                </div>

                <!-- Showcase Image Container (Styling Disesuaikan untuk BG Putih) -->
                <div class="p-2 md:p-4 rounded-[24px] md:rounded-[40px] group relative overflow-hidden reveal-up w-full shadow-[0_20px_50px_rgba(0,0,0,0.1)] bg-white/60 backdrop-blur-xl border border-gray-200">
                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/model-family-aq2qr1nr3wtk4n9x-A3QlpqXX29UlbwEB.webp" alt="Unparalleled Cabin Comfort" class="w-full h-auto block rounded-[18px] md:rounded-[32px] transform group-hover:scale-105 transition-transform duration-[3s] ease-out">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none rounded-[24px] md:rounded-[40px]"></div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.8: MEMORY SEATS
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10 bg-noise">
            <!-- Background Glow -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            
            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    
                    <!-- Text Content (Left) -->
                    <div class="reveal-left">
                        <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Smart Access</span>
                        </div>
                        <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                            Memory Seats <br> <span class="text-gradient-cyan">With Easy Access</span>
                        </h2>
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-sm max-w-lg">
                            Kursi depan meluncur ke belakang untuk memudahkan masuk dan keluar setiap kali Anda membuka EX5 Anda.
                        </p>
                    </div>

                    <!-- Looping & Reverse Video Player (Right) -->
                    <div class="glass-panel p-2 md:p-4 rounded-[24px] md:rounded-[40px] shadow-[0_30px_60px_rgba(0,0,0,0.6)] reveal-right group relative w-full overflow-hidden">
                        <div class="relative w-full h-0 pb-[56.25%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-black shadow-inner">
                            <!-- Direct Raw Link -->
                            <video id="memory-seat-video" autoplay muted playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-[2s] ease-out">
                                <source src="https://raw.githubusercontent.com/riszali/gif-open-door-ex5/main/video-card1.mp4" type="video/mp4">
                                Browser Anda tidak mendukung elemen video.
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.9: EXECUTIVE LOUNGE (WHITE BACKGROUND)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-white overflow-hidden border-t border-gray-200">
            <!-- Background Glow untuk mode terang -->
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-purple-200/60 rounded-full blur-[150px] pointer-events-none z-0"></div>
            
            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                    <!-- Video Player (Left - Alternating Layout) -->
                    <div class="order-2 lg:order-1 p-2 md:p-4 rounded-[24px] md:rounded-[40px] shadow-[0_20px_50px_rgba(0,0,0,0.1)] bg-white/60 backdrop-blur-xl border border-gray-200 reveal-left group relative w-full overflow-hidden">
                        <div class="relative w-full h-0 pb-[56.25%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-gray-100 shadow-inner">
                            <!-- Direct Raw Link -->
                            <video autoplay muted loop playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-[2s] ease-out">
                                <source src="https://raw.githubusercontent.com/riszali/geely-interior-jok/main/video-card2.mp4" type="video/mp4">
                                Browser Anda tidak mendukung elemen video.
                            </video>
                            <!-- Gradasi halus untuk menambah dimensi di sisi bawah video -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                    
                    <!-- Text Content (Right - Alternating Layout) -->
                    <div class="order-1 lg:order-2 reveal-right text-left lg:text-right flex flex-col items-start lg:items-end">
                        <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-purple-200 bg-purple-50 text-purple-700">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Ultimate Relaxation</span>
                        </div>
                        <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-[#050505] mb-6 leading-tight">
                            Executive <br> <span class="text-liquid">Lounge</span>
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light max-w-lg lg:text-right">
                            Rasakan sensasi menjadi bangsawan dengan kombinasi sandaran kaki yang panjang, pijat kursi, pemanas, dan ventilasi.
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.10: FULLY FLAT SEATS (BLACK BACKGROUND)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10 bg-noise">
            <!-- Background Glow -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
            
            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">
                    
                    <!-- Text Content (Left - Alternating Layout) -->
                    <div class="reveal-left">
                        <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Maximum Utility</span>
                        </div>
                        <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                            Fully Flat <br> <span class="text-gradient-cyan">Seats</span>
                        </h2>
                        <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-sm max-w-lg">
                            Trunk Capacity Up to 1,877 Liters. Memberikan ruang kargo maksimal yang fleksibel untuk segala kebutuhan perjalanan Anda.
                        </p>
                    </div>

                    <!-- Video Player (Right - Alternating Layout) -->
                    <div class="glass-panel p-2 md:p-4 rounded-[24px] md:rounded-[40px] shadow-[0_30px_60px_rgba(0,0,0,0.6)] reveal-right group relative w-full overflow-hidden">
                        <div class="relative w-full h-0 pb-[56.25%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-black shadow-inner">
                            <!-- Direct Raw Link -->
                            <video autoplay muted loop playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-[2s] ease-out">
                                <source src="https://raw.githubusercontent.com/riszali/bagasi/main/video-card4.mp4" type="video/mp4">
                                Browser Anda tidak mendukung elemen video.
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5.11: POWER TAILGATE (WHITE BACKGROUND)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-white overflow-hidden border-t border-gray-200">
            <!-- Background Glow -->
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-200/40 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                    <!-- Text Content (Left - Alternating Layout) -->
                    <div class="reveal-left flex flex-col items-start text-left">
                        <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-cyan-200 bg-cyan-50 text-cyan-700">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Smart Access</span>
                        </div>
                        <h2 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-[#050505] mb-4 leading-tight">
                            Power <span class="text-gradient-cyan">Tailgate</span>
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed font-bold mb-2 max-w-lg">
                            Lebar Maksimum 1,1 Meter Bukaan Ekstra Besar
                        </p>
                        <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light mb-8 max-w-lg">
                            Desain Kelas Atas dengan Kontrol Cerdas yang Mudah Digunakan.
                        </p>

                        <!-- Feature Grid -->
                        <div class="grid grid-cols-2 gap-4 w-full max-w-lg">
                            <div class="p-4 md:p-6 rounded-[16px] md:rounded-[24px] shadow-[0_10px_30px_rgba(0,0,0,0.05)] bg-white/60 backdrop-blur-xl border border-gray-100 hover:border-cyan-300 transition-colors">
                                <h4 class="font-geely text-xl md:text-2xl text-[#050505] mb-1">1.83m</h4>
                                <p class="text-gray-500 text-[10px] md:text-xs uppercase tracking-widest font-bold">Opening Height</p>
                            </div>
                            <div class="p-4 md:p-6 rounded-[16px] md:rounded-[24px] shadow-[0_10px_30px_rgba(0,0,0,0.05)] bg-white/60 backdrop-blur-xl border border-gray-100 hover:border-cyan-300 transition-colors">
                                <h4 class="font-geely text-xl md:text-2xl text-[#050505] mb-1">Multiple</h4>
                                <p class="text-gray-500 text-[10px] md:text-xs uppercase tracking-widest font-bold">Opening Modes</p>
                            </div>
                            <div class="p-4 md:p-6 rounded-[16px] md:rounded-[24px] shadow-[0_10px_30px_rgba(0,0,0,0.05)] bg-white/60 backdrop-blur-xl border border-gray-100 hover:border-cyan-300 transition-colors">
                                <h4 class="font-geely text-xl md:text-2xl text-[#050505] mb-1">5 Levels</h4>
                                <p class="text-gray-500 text-[10px] md:text-xs uppercase tracking-widest font-bold">Adjustable</p>
                            </div>
                            <div class="p-4 md:p-6 rounded-[16px] md:rounded-[24px] shadow-[0_10px_30px_rgba(0,0,0,0.05)] bg-white/60 backdrop-blur-xl border border-gray-100 hover:border-cyan-300 transition-colors">
                                <h4 class="font-geely text-xl md:text-2xl text-[#050505] mb-1">Delayed</h4>
                                <p class="text-gray-500 text-[10px] md:text-xs uppercase tracking-widest font-bold">Locking</p>
                            </div>
                        </div>
                    </div>

                    <!-- Image Showcase Container (Right) -->
                    <div class="order-2 lg:order-2 p-2 md:p-4 rounded-[24px] md:rounded-[40px] shadow-[0_20px_50px_rgba(0,0,0,0.1)] bg-white/60 backdrop-blur-xl border border-gray-200 reveal-right group relative w-full overflow-hidden">
                        <div class="relative w-full h-0 pb-[65%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-gray-100 shadow-inner flex items-center justify-center">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/img_2618-yd0bn4r09piwlr3v-mnl43PRWEWs9r8XM.jpeg" alt="Extra Large Power Tailgate Opening" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-[1.02] transition-transform duration-[3s] ease-out">
                            <!-- Overlay gradasi untuk menyatukan gambar dengan desain -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/10 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

<!-- ==========================================
             SECTION 5.12: REAR STORAGE BOX (BLACK BACKGROUND)
        =========================================== -->
        <section class="py-16 md:py-24 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10 bg-noise">
            <!-- Background Glow -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] w-full mx-auto px-6 relative z-10">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center">

                    <!-- Image Container (Left - Alternating from Power Tailgate) -->
                    <div class="order-2 lg:order-1 glass-panel p-2 md:p-4 rounded-[24px] md:rounded-[40px] shadow-[0_30px_60px_rgba(0,0,0,0.6)] reveal-left group relative w-full overflow-hidden">
                        <div class="relative w-full h-0 pb-[65%] rounded-[18px] md:rounded-[32px] overflow-hidden bg-black shadow-inner flex items-center justify-center">
                            
                            <!-- Bagian gambar yang diganti menjadi video drawer.mp4 -->
                            <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[3s] ease-out">
                                <source src="{{ asset('videos/drawer.mp4') }}" type="video/mp4">
                            </video>

                            <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/40 via-transparent to-transparent pointer-events-none"></div>
                        </div>
                    </div>
                    
                    <!-- Text Content (Right) -->
                    <div class="order-1 lg:order-2 reveal-right text-left flex flex-col items-start">
                        <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Storage Innovation</span>
                        </div>
                        <h2 class="font-geely text-xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                            Exclusive 14-Liter <br> <span class="text-gradient-cyan">Rear Super Storage Box</span>
                        </h2>
                        <div class="flex flex-col gap-4 max-w-lg">
                            <div class="flex items-start gap-4">
                                <div class="w-1.5 h-1.5 rounded-full bg-cyan-400 mt-2 flex-shrink-0 shadow-[0_0_10px_rgba(34,211,238,1)]"></div>
                                <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-sm">
                                    <span class="text-white font-bold">Convenient Under-Seat Storage:</span> Mengoptimalkan ruang tersembunyi untuk akses yang cepat dan mudah.
                                </p>
                            </div>
                            <div class="flex items-start gap-4">
                                <div class="w-1.5 h-1.5 rounded-full bg-cyan-400 mt-2 flex-shrink-0 shadow-[0_0_10px_rgba(34,211,238,1)]"></div>
                                <p class="text-gray-300 text-sm md:text-base leading-relaxed font-light drop-shadow-sm">
                                    <span class="text-white font-bold">Storage Space Design Concept:</span> Dirancang dengan filosofi fungsionalitas cerdas tanpa mengorbankan estetika interior.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: DIVE INTO THE DETAILS (NAVIGATION)
        =========================================== -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10 bg-noise">
            <!-- Subtle Colorful Ambient Background Elements -->
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-purple-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <!-- Header -->
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-cyan-500/30 bg-cyan-500/10 text-cyan-300">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">The Blueprint</span>
                    </div>
                    <h2 class="font-geely text-xl sm:text-3xl md:text-4xl lg:text-5xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-lg">
                        Dive Into <span class="text-gradient-cyan">The Details</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed">
                        Get a closer look at the Geely EX5’s advanced features and specifications, designed to set a new standard for EV.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    
                    <!-- Left: Navigation Link Cards -->
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        
                        <!-- Exterior Link Card -->
                        <a href="{{ route('models.ex5.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-[0_20px_40px_rgba(34,211,238,0.2)] transition-all duration-500 border border-white/10 hover:border-cyan-400/50">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sunroof-yx4ak1dowru68xpb-1-YbN4az2lObuDROkG.jpg" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Explore</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30 group-hover:border-cyan-400">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Interior Link Card (Active) -->
                        <a href="#" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-cyan-400">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out mirror-rhd">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-cyan-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors drop-shadow-md">Currently Viewing</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-cyan-600 backdrop-blur-md flex items-center justify-center text-white border border-cyan-400 transition-colors duration-300">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <!-- Specification Link Card -->
                        <a href="{{ route('models.ex5.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-[0_20px_40px_rgba(34,211,238,0.2)] transition-all duration-500 border border-white/10 hover:border-cyan-400/50">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ied-tF2sW5R0UW8pMCMV.webp" alt="Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/40 to-transparent"></div>
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-400 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-cyan-300 transition-colors">Learn More</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Specification</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-cyan-600 transition-colors duration-300 border border-white/30 group-hover:border-cyan-400">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                    </div>

                    <!-- Right: Dimensions Box & Actions -->
                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        
                        <!-- Dimensions Box (Dark Colorful Glassmorphism) -->
                        <div class="glass-panel border border-white/10 p-6 md:p-8 rounded-[1.5rem] md:rounded-[2rem] flex flex-col shadow-2xl relative overflow-hidden group hover:border-cyan-400/50 transition-colors duration-500">
                            <!-- Background glow dalam kotak -->
                            <div class="absolute top-0 right-0 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] group-hover:bg-cyan-400/30 transition-colors duration-500 pointer-events-none"></div>

                            <h4 class="text-white font-geely text-2xl md:text-3xl mb-1 relative z-10 drop-shadow-md">Dimensions</h4>
                            <p class="text-gray-400 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                            
                            <!-- EX5 Dimensions Data -->
                            <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                                <div class="border-l-2 border-cyan-500 pl-4 group-hover:border-cyan-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">4615</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4 group-hover:border-cyan-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">1901</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4 group-hover:border-cyan-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">1670</p>
                                </div>
                                <div class="border-l-2 border-cyan-500 pl-4 group-hover:border-cyan-400 transition-colors">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-md">2750</p>
                                </div>
                            </div>

                            <!-- EX5 Sketch Image with inversion for dark mode -->
                            <div class="w-full relative mt-8 mix-blend-screen opacity-80 group-hover:opacity-100 transition-opacity duration-500">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="Geely EX5 Sketch" loading="lazy" class="w-full h-auto object-contain invert">
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex flex-col gap-3 w-full">
                            <a href="#" class="btn-shimmer w-full py-4 md:py-5 rounded-full bg-white text-black font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_30px_rgba(255,255,255,0.15)]">
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

    </div>

    <!-- ==========================================
         SCRIPTS 
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            /* --- Intersection Observer for Scroll Reveals --- */
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

            /* --- Stars & Gold Particle Generator --- */
            const createShadows = (n, color = '#FFF') => {
                return Array.from({length: n}, () => `${Math.floor(Math.random() * 2000)}px ${Math.floor(Math.random() * 2000)}px ${color}`).join(', ');
            };
            const starStyle = document.createElement('style');
            starStyle.innerHTML = `
                #stars { box-shadow: ${createShadows(700)}; }
                #stars::after { box-shadow: ${createShadows(700)}; }
                #stars2 { box-shadow: ${createShadows(200)}; }
                #stars2::after { box-shadow: ${createShadows(200)}; }
                #stars3 { box-shadow: ${createShadows(100)}; }
                #stars3::after { box-shadow: ${createShadows(100)}; }
                #gold-particles { box-shadow: ${createShadows(150, '#bf953f')}; }
                #gold-particles::after { box-shadow: ${createShadows(150, '#fcf6ba')}; }
            `;
            document.head.appendChild(starStyle);

            /* --- 360 Viewer Swatch Logic (Interior Pannellum) --- */
            const colorNameDisplay = document.getElementById('active-color-name');
            const swatchesBtn = document.querySelectorAll('.swatch-btn');
            
            // Inisialisasi awal Pannellum Viewer (Default Black Interior)
            let panoramaViewer = pannellum.viewer('panorama', {
                "type": "equirectangular",
                "panorama": "https://riszali.sirv.com/Spins/interior/vlack%20int.png",
                "autoLoad": true,
                "autoRotate": -2
            });

            swatchesBtn.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    // Remove active styles from all
                    swatchesBtn.forEach(s => {
                        s.classList.remove('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                        s.classList.add('border-white/20');
                    });
                    
                    // Add active to clicked
                    swatch.classList.add('active', 'border-white', 'ring-2', 'ring-transparent', 'ring-offset-4', 'ring-offset-[#050505]');
                    swatch.classList.remove('border-white/20');
                    
                    // Update Text Name with fade
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    // Re-render pannellum viewer
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

            /* --- Memory Seat Video (Boomerang/Reverse Loop) Logic --- */
            const memorySeatVideo = document.getElementById('memory-seat-video');
            if (memorySeatVideo) {
                let reverse = false;

                // Pastikan video siap sebelum autoplay
                memorySeatVideo.addEventListener('canplaythrough', () => {
                    if(!reverse) {
                        // Handle browser autoplay policy
                        memorySeatVideo.play().catch(err => console.log("Autoplay diizinkan setelah interaksi pengguna", err));
                    }
                });

                // Saat video selesai, mulai reverse perlahan
                memorySeatVideo.addEventListener('ended', () => {
                    reverse = true;
                    
                    function stepReverse() {
                        if (memorySeatVideo.currentTime <= 0.1) {
                            memorySeatVideo.currentTime = 0;
                            reverse = false;
                            memorySeatVideo.play().catch(e => console.log(e));
                        } else {
                            // Mundur dengan requestAnimationFrame agar lebih mulus tanpa delay setInterval
                            memorySeatVideo.currentTime -= 0.04; 
                            if(reverse) requestAnimationFrame(stepReverse);
                        }
                    }
                    
                    requestAnimationFrame(stepReverse);
                });
            }

            /* --- Fix for iOS Fullscreen Video Issue --- */
            document.addEventListener('webkitfullscreenchange', function() {
                var isFullscreen = document.webkitIsFullScreen;
                if (isFullscreen) {
                    document.webkitCancelFullScreen();
                }
            });

        });
    </script>
</x-layouts.app>
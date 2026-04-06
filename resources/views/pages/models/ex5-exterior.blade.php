<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM COLORFUL GLASSMORPHISM STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            overflow-x: clip; 
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }

        /* Safe Responsive Heights */
        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 500px; }
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
        
        /* Colorful Glow Hover Effect for Glass Panels */
        .glass-panel:hover {
            border-color: rgba(34, 211, 238, 0.4);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), 0 0 40px rgba(34, 211, 238, 0.15), inset 0 1px 0 rgba(255, 255, 255, 0.2);
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
        
        /* Gradient Text */
        .text-gradient-cyan {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
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

        /* Dynamic Bento Grid - Non-kaku */
        .bento-wrapper {
            display: grid;
            gap: 1rem;
            grid-template-columns: 1fr;
            grid-auto-rows: minmax(250px, auto);
        }
        @media (min-width: 768px) {
            .bento-wrapper {
                grid-template-columns: repeat(4, 1fr);
                grid-auto-rows: 280px;
                gap: 1.5rem;
            }
            .bento-item-1 { grid-column: span 2; grid-row: span 2; } /* Kiri Besar */
            .bento-item-2 { grid-column: span 2; grid-row: span 1; } /* Kanan Atas Lebar */
            .bento-item-3 { grid-column: span 1; grid-row: span 1; } /* Kanan Bawah Kiri */
            .bento-item-4 { grid-column: span 1; grid-row: span 1; } /* Kanan Bawah Kanan */
        }
        
        .bento-card {
            position: relative;
            border-radius: 2rem; /* Sudut lebih membulat (soft) */
            overflow: hidden;
            padding: 1rem; /* Ruang bernapas dalam kaca */
        }
        .bento-card-inner {
            position: relative;
            width: 100%;
            height: 100%;
            border-radius: 1.5rem;
            overflow: hidden;
        }
        .bento-card img {
            width: 100%; height: 100%; object-fit: cover;
            transition: transform 1.2s cubic-bezier(0.25, 1, 0.5, 1);
        }
        .bento-card:hover img { transform: scale(1.05); }
        
        /* Colorful Gradient Overlay for Images */
        .bento-overlay {
            position: absolute; inset: 0;
            background: linear-gradient(to top, rgba(5,5,5,0.9) 0%, rgba(5,5,5,0.2) 50%, transparent 100%);
            opacity: 0.8; transition: opacity 0.5s ease;
            pointer-events: none;
        }
        .bento-card:hover .bento-overlay { opacity: 0.9; background: linear-gradient(to top, rgba(5,5,5,0.95) 0%, rgba(34,211,238,0.2) 60%, transparent 100%); }
    </style>

    <div class="w-full overflow-x-clip bg-[#050505] text-white">

        <!-- ==========================================
             SECTION 1: HERO (FULL BACKGROUND IMAGE)
        =========================================== -->
        <section class="relative min-h-[100svh] w-full flex flex-col justify-start items-center overflow-hidden bg-[#050505] pt-20 md:pt-24 lg:pt-32 pb-12">
            <!-- Full Background Image (Tanpa Efek Filter) -->
            <div class="absolute inset-0 z-0 bg-[#050505] overflow-hidden">
                <!-- Mobile Background -->
                <img src="{{ asset('images/ex5-1-mobile.jpg') }}" alt="Geely EX5 Hero Mobile" class="absolute inset-0 w-full h-full object-cover md:hidden">
                <!-- Desktop Background -->
                <img src="{{ asset('images/ex5-1-desktop.jpg') }}" alt="Geely EX5 Hero Desktop" class="absolute inset-0 w-full h-full object-cover hidden md:block">
                
                <!-- Gradasi dipindah ke atas agar teks yang berada di atas tetap jelas terbaca -->
                <div class="absolute inset-x-0 top-0 h-[60%] md:h-[50%] bg-gradient-to-b from-[#050505] via-[#050505]/70 to-transparent z-10 pointer-events-none"></div>
                <!-- Gradasi tipis di bawah untuk transisi ke section selanjutnya -->
                <div class="absolute inset-x-0 bottom-0 h-[20%] bg-gradient-to-t from-[#050505] to-transparent z-10 pointer-events-none"></div>
            </div>

            <!-- Konten Teks di bagian atas section -->
            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center">
                <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-cyan-500/30 bg-cyan-500/10 backdrop-blur-xl reveal-up shadow-[0_0_30px_rgba(34,211,238,0.2)]">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span>
                    </span>
                    <span class="text-cyan-300 text-[9px] md:text-[11px] tracking-[0.4em] font-bold uppercase drop-shadow-md">Exterior Design</span>
                </div>

                <!-- Text size set to 2xl-5xl with max-w-4xl to ensure 2 lines -->
                <h1 class="font-geely text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-white uppercase leading-[1.1] tracking-tighter drop-shadow-[0_20px_50px_rgba(0,0,0,0.8)] mb-4 reveal-up delay-100 max-w-4xl mx-auto">
                    SEE HOW <span class="text-liquid">INNOVATION</span> <br> FUELS EVERY JOURNEY
                </h1>
                
                <p class="text-gray-300 text-xs md:text-base font-light tracking-wide uppercase reveal-up delay-200 max-w-2xl mx-auto leading-relaxed drop-shadow-md">
                    Elegansi futuristik yang membelah angin, meredefinisi standar SUV elektrik modern.
                </p>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: 360 EXTERIOR VIEWER
        =========================================== -->
        <section class="py-20 md:py-32 bg-[#050505] relative z-30 overflow-hidden border-t border-white/10 bg-noise">
            <!-- Colorful ambient glow for viewer section -->
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-blue-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-4 md:px-6 relative z-10 text-center">
                <div class="reveal-up mb-12 md:mb-16">
                    <h2 class="font-geely text-3xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-tight drop-shadow-xl mb-4">
                        GEELY <span class="text-gradient-cyan">EX5</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                        Kombinasi kekuatan, performa, dan kemewahan yang tak tertandingi di setiap perjalanan.
                    </p>
                </div>
                
                <!-- Swatch Controls -->
                <div class="flex flex-col items-center justify-center gap-4 md:gap-6 reveal-up delay-100 relative z-30 mb-8 md:mb-10">
                    <div class="h-6">
                        <p id="active-color-name" class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase transition-opacity duration-300 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Teal</p>
                    </div>
                    
                    <div id="swatches-exterior" class="flex flex-wrap justify-center gap-4 md:gap-6 transition-all duration-500 opacity-100 px-4 glass-panel p-2 md:p-3 rounded-full border-cyan-500/20">
                        <button class="swatch-btn active w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #20535c;" data-src="https://riszali.sirv.com/Spins/ex5/teal.spin" data-name="Teal"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex5/white.spin" data-name="White"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex5/silver.spin" data-name="Silver"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #111111;" data-src="https://riszali.sirv.com/Spins/ex5/black.spin" data-name="Black"></button>
                        <button class="swatch-btn w-10 h-10 md:w-12 md:h-12 rounded-full" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex5/ash.spin" data-name="Ash"></button>
                    </div>
                </div>

                <!-- Viewer Display Container (Glassmorphism) -->
                <div class="glass-panel p-2 md:p-4 rounded-[2.5rem] md:rounded-[3rem] overflow-hidden reveal-up delay-200 w-full relative z-10 viewer-container group">
                    <div class="absolute inset-0 rounded-[2.5rem] bg-gradient-to-b from-white/10 to-transparent pointer-events-none z-20"></div>
                    <div class="relative w-full h-full rounded-[2rem] md:rounded-[2.5rem] overflow-hidden bg-[#0A0A0A]">
                        <!-- Tweak CSS untuk menghilangkan watermark Sirv -->
                        <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex5/teal.spin" class="absolute top-1/2 left-1/2 w-[108%] h-[108%] -translate-x-1/2 -translate-y-1/2 border-0 z-10" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3 & 4: STICKY AERODYNAMIC DESIGN
        =========================================== -->
        <section class="relative w-full bg-[#050505] bg-noise">
            <!-- Sticky Background Image -->
            <div class="sticky top-0 w-full h-[100vh] z-0 overflow-hidden">
                <img src="{{ asset('images/exterior-01.webp') }}" alt="Aerodynamic Design" class="w-full h-full object-cover">
                
                <!-- Colorful gradients to blend smoothly -->
                <div class="absolute inset-x-0 top-0 h-40 bg-gradient-to-b from-[#050505] to-transparent z-10"></div>
                <div class="absolute inset-x-0 bottom-0 h-40 bg-gradient-to-t from-[#050505] to-transparent z-10"></div>
            </div>

            <!-- Scrolling Content Over the Sticky Background -->
            <div class="relative z-10 w-full">
                <!-- Spacer panjang agar background image menempel lebih lama sebelum tertutup teks -->
                <div class="h-[80vh] md:h-[100vh]"></div>
                
                <!-- Content Block (Section 4) - Colorful Glass Panel -->
                <div class="w-full max-w-7xl mx-auto px-6 pb-[30vh]">
                    <div class="glass-panel p-8 md:p-12 lg:p-16 rounded-[2.5rem] md:rounded-[3.5rem] max-w-3xl ml-auto reveal-up shadow-[0_40px_80px_rgba(0,0,0,0.8)] border border-cyan-400/30">
                        <!-- Glowing element inside card -->
                        <div class="absolute -top-10 -right-10 w-40 h-40 bg-cyan-500/30 rounded-full blur-[50px] pointer-events-none"></div>

                        <div class="inline-flex items-center gap-3 mb-6 px-4 py-2 rounded-full border border-cyan-400/50 bg-cyan-500/10 text-cyan-300 relative z-10">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Form Meets Function</span>
                        </div>
                        
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter font-bold mb-6 leading-tight relative z-10 drop-shadow-md">
                            HUMANIZED <br> <span class="text-gradient-cyan">AERODYNAMIC DESIGN</span>
                        </h2>
                        
                        <div class="w-16 h-1 bg-gradient-to-r from-cyan-400 to-blue-600 mb-8 rounded-full relative z-10"></div>

                        <p class="text-gray-300 text-sm md:text-lg leading-relaxed font-light drop-shadow-md relative z-10">
                            Dibuat dengan presisi yang tidak hanya meningkatkan kinerja, tetapi juga mencerminkan pemahaman mendalam tentang kebutuhan Anda dengan mengutamakan kenyamanan dan pengalaman kelas satu. Setiap lengkungan dirancang untuk membelah udara dengan efisiensi maksimal.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: EXTERIOR BENTO GALLERY (DYNAMIC & COLORFUL)
        =========================================== -->
        <section class="py-24 md:py-32 lg:py-40 bg-[#050505] relative z-20 overflow-hidden border-t border-white/10 bg-noise">
            <!-- Massive colorful background blurs -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-6 md:px-8 relative z-10">
                <div class="text-center mb-16 md:mb-24 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-purple-500/30 bg-purple-500/10 text-purple-300">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Design Highlights</span>
                    </div>
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-7xl tracking-tighter text-white leading-tight uppercase drop-shadow-lg">
                        ATTENTION <br class="md:hidden"> TO <span class="text-liquid">DETAILS</span>
                    </h2>
                </div>

                <!-- DYNAMIC BENTO WRAPPER -->
                <div class="bento-wrapper reveal-up delay-200">
                    
                    <!-- Item 1 (Kiri Besar) -->
                    <div class="bento-card bento-item-1 glass-panel group">
                        <div class="absolute -top-20 -left-20 w-64 h-64 bg-cyan-500/20 rounded-full blur-[60px] group-hover:bg-cyan-400/40 transition-colors duration-500 pointer-events-none"></div>
                        <div class="bento-card-inner">
                            <img src="{{ asset('images/2400x0 (8).jpg') }}" alt="EX5 Headlamp Detail">
                            <div class="bento-overlay"></div>
                            <!-- Tambahan shadow gradien dari atas agar teks tetap terbaca jelas -->
                            <div class="absolute inset-x-0 top-0 h-1/2 bg-gradient-to-b from-[#050505]/90 to-transparent pointer-events-none z-0 transition-opacity duration-500"></div>
                            <div class="absolute top-0 left-0 w-full p-6 md:p-8 lg:p-10 z-10 transform -translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-cyan-400 text-[10px] tracking-[0.3em] font-bold uppercase mb-2 block drop-shadow-md">Illumination</span>
                                <h4 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-tight font-bold leading-tight drop-shadow-lg">Crystal LED <br>Headlights</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 2 (Kanan Atas Lebar) -->
                    <div class="bento-card bento-item-2 glass-panel group">
                        <div class="bento-card-inner">
                            <img src="{{ asset('images/exterior-04.webp') }}" alt="EX5 Wheel Detail">
                            <div class="bento-overlay"></div>
                            <div class="absolute bottom-0 left-0 w-full p-6 md:p-8 z-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-blue-400 text-[10px] tracking-[0.3em] font-bold uppercase mb-2 block drop-shadow-md">Aerodynamics</span>
                                <h4 class="font-geely text-xl md:text-2xl lg:text-3xl text-white tracking-tight font-bold leading-tight drop-shadow-lg">Aero Wheels</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 3 (Kanan Bawah Kiri) -->
                    <div class="bento-card bento-item-3 glass-panel group">
                        <div class="bento-card-inner">
                            <img src="{{ asset('images/exterior-03.webp') }}" alt="EX5 Panoramic Sunroof View">
                            <div class="bento-overlay"></div>
                            <div class="absolute bottom-0 left-0 w-full p-6 z-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-purple-400 text-[10px] tracking-[0.3em] font-bold uppercase mb-2 block drop-shadow-md">Space</span>
                                <h4 class="font-geely text-lg md:text-xl lg:text-2xl text-white tracking-tight font-bold leading-tight drop-shadow-lg">Panoramic <br>View</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Item 4 (Kanan Bawah Kanan) -->
                    <div class="bento-card bento-item-4 glass-panel group">
                        <div class="bento-card-inner">
                            <img src="{{ asset('images/exterior-02.webp') }}" alt="EX5 Side Profile">
                            <div class="bento-overlay"></div>
                            <div class="absolute bottom-0 left-0 w-full p-6 z-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                <span class="text-cyan-400 text-[10px] tracking-[0.3em] font-bold uppercase mb-2 block drop-shadow-md">Silhouette</span>
                                <h4 class="font-geely text-lg md:text-xl lg:text-2xl text-white tracking-tight font-bold leading-tight drop-shadow-lg">Dynamic <br>Proportions</h4>
                            </div>
                        </div>
                    </div>

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
                        <a href="{{ route('models.ex5.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-[0_10px_30px_rgba(0,0,0,0.5)] hover:shadow-[0_20px_50px_rgba(45,212,191,0.3)] transition-all duration-500 border border-white/10 hover:border-teal-400">
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

    </div>

    <!-- ==========================================
         SCRIPTS 
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            
            /* Intersection Observer for Scroll Reveals */
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

            /* 360 Viewer Swatch Logic */
            const frameExt = document.getElementById('iframe-exterior');
            const colorNameDisplay = document.getElementById('active-color-name');
            const swatchesExt = document.querySelectorAll('.swatch-btn');

            swatchesExt.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    // Remove active from all
                    swatchesExt.forEach(s => s.classList.remove('active'));
                    // Add active to clicked
                    swatch.classList.add('active');
                    
                    // Update Text Name with fade
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    // Update Iframe Source
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });
        });
    </script>
</x-layouts.app>
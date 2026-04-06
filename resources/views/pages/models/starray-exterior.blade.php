<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES
    =========================================== -->
    <style>
        .font-geely { font-family: 'Geely', sans-serif; }
        
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505;
            color: #ffffff;
            overflow-x: clip;
            max-width: 100%;
        }

        /* Glassmorphism Text Effect (Hero) */
        .glass-text-style {
            color: rgba(255, 255, 255, 0.4); 
            backdrop-filter: blur(8px); 
            -webkit-backdrop-filter: blur(8px);
            text-shadow: 
                0 0 10px rgba(255, 255, 255, 0.2),
                0 0 20px rgba(255, 255, 255, 0.1);
            -webkit-text-stroke: 0.5px rgba(255, 255, 255, 0.3); 
            padding: 1rem 2rem;
            display: inline-block;
        }

        .text-gradient-cyan-glass {
            background: linear-gradient(90deg, rgba(34, 211, 238, 0.6), rgba(96, 165, 250, 0.6));
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            -webkit-text-stroke: 0.5px rgba(34, 211, 238, 0.4);
        }

        /* Gradient Text for Sections */
        .text-gradient-cyan {
            background: linear-gradient(to right, #0891b2, #2563eb);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Glass Panel Styles */
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

        /* Viewer Container */
        .viewer-container { height: 50vh; min-height: 350px; }
        @media (min-width: 768px) {
            .viewer-container { height: 60vh; min-height: 450px; }
        }

        /* Hide scrollbar */
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        /* Swatch Buttons */
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

        /* Animation reveals */
        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }
    </style>

    <!-- WRAPPER UTAMA -->
    <div class="relative w-full max-w-[1920px] mx-auto bg-[#050505] overflow-x-clip">

        <!-- ==========================================
             SECTION 1: HERO (GLASS TEXT DESIGN)
        =========================================== -->
        <section class="relative h-[100svh] w-full flex items-center justify-center overflow-hidden">
            <div class="absolute inset-0 z-0">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_starray_08-AGBz4zeBK1TWvJPa.jpg" alt="Starray Hero" class="w-full h-full object-cover brightness-50">
                <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-[#050505]"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 relative z-10 text-center mb-32 md:mb-48 lg:mb-64">
                <div class="reveal-up">
                    <p class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.5em] uppercase mb-10 drop-shadow-[0_0_10px_rgba(34,211,238,0.3)]">
                        PHEV Intelligent Hybrid
                    </p>
                    
                    <div class="relative">
                        <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter leading-none whitespace-nowrap glass-text-style">
                            GEELY STARRAY <span class="text-gradient-cyan-glass">EM-i</span>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Scroll Indicator -->
            <div class="absolute bottom-12 left-1/2 -translate-x-1/2 flex flex-col items-center gap-3 reveal-up delay-200">
                <span class="text-white/30 text-[9px] uppercase tracking-[0.4em] font-bold">Scroll to Explore</span>
                <div class="w-[1px] h-12 bg-gradient-to-b from-cyan-400/50 to-transparent"></div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 2: VISIONARY DESIGN PHILOSOPHY
             (Light Background)
        =========================================== -->
        <section class="bg-[#ffffff] py-20 md:py-32 relative z-30">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <!-- Main Heading -->
                <h2 class="font-geely text-3xl md:text-5xl lg:text-[56px] text-[#333333] uppercase tracking-wide mb-4 reveal-up">
                    VISIONARY COSMIC AESTHETICS
                </h2>
                
                <!-- Subheading -->
                <h3 class="text-[#666666] text-xs md:text-lg lg:text-xl font-medium tracking-[0.15em] uppercase mb-10 md:mb-12 reveal-up delay-100 flex items-center justify-center flex-wrap gap-2">
                    <span>BOLD SILHOUETTE</span> 
                    <span class="text-gray-300 hidden sm:inline-block">|</span> 
                    <span>INTERSTELLAR DESIGN LANGUAGE</span>
                </h3>

                <!-- Paragraph Description -->
                <p class="text-[#333333] text-sm md:text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto font-light reveal-up delay-200">
                    The Geely Starray EM-i redefines the SUV silhouette with its "Visionary Star" design philosophy. Every line is meticulously crafted for aerodynamic excellence, blending athletic proportions with futuristic details. From its signature LED matrix to its commanding interstellar presence, it is a true masterpiece of modern automotive art.
                </p>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: 360 EXTERIOR VIEWER
        =========================================== -->
        <section id="explore" class="py-16 md:py-24 lg:py-40 relative z-20 bg-[#050505]">
            <!-- Intense ambient background orbs for frosted glass effect -->
            <div class="absolute top-1/4 left-1/4 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/20 rounded-full blur-[120px] pointer-events-none z-0"></div>
            <div class="absolute bottom-1/4 right-1/4 translate-x-1/4 translate-y-1/4 w-[500px] h-[500px] bg-emerald-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10 text-center">
                
                <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-6xl uppercase tracking-tighter text-white mb-6 md:mb-8 reveal-up leading-tight drop-shadow-xl">
                    Mastery in <span class="text-gradient-cyan">Every Angle</span>
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
                <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] overflow-hidden reveal-up delay-200 shadow-[0_30px_60px_rgba(0,0,0,0.8)] w-full relative z-10 viewer-container group">
                    <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-white/5 to-transparent pointer-events-none z-20"></div>
                    <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden">
                        <div id="wrapper-exterior" class="absolute inset-0 w-full h-full z-10 transition-opacity duration-500" style="opacity: 1; pointer-events: auto;">
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/starray/alphine-white.spin" class="absolute top-1/2 left-1/2 w-[112%] h-[112%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 4: EXTERIOR SHOWCASE (BENTO GRID)
             (Light Background Theme with Titles)
        =========================================== -->
        <section id="exterior-gallery" class="py-16 md:py-24 lg:py-32 bg-white relative z-30 border-t border-gray-100">
            <!-- Light ambient glow for contrast -->
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[500px] h-[500px] bg-cyan-100 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto md:px-12 lg:px-16 relative z-10">
                <div class="text-center mb-12 md:mb-20 px-4">
                    <h3 class="text-cyan-600 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Visionary Design
                    </h3>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 reveal-up delay-100 leading-tight">
                        Captivating <span class="text-gradient-cyan">Exterior</span>
                    </h2>
                </div>

                <!-- Bento Grid Layout -->
                <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-4 md:grid md:grid-cols-12 md:gap-6 lg:gap-8 md:auto-rows-min pb-8 md:pb-0 px-4 md:px-0">
                    
                    <!-- Image 1: Mobil Tampak Depan (Hero Image) -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-8 md:row-span-2 reveal-up delay-100 group relative">
                        <div class="relative w-full h-full rounded-[1rem] md:rounded-[1.5rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp" alt="Starray Front View" draggable="false" loading="lazy" class="w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out select-none pointer-events-none">
                            <!-- Overlay Title -->
                            <div class="absolute bottom-0 left-0 w-full p-6 md:p-10 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-xl md:text-3xl text-white uppercase tracking-tighter mb-1">Interstellar Front Face</h4>
                                <p class="text-white/70 text-[9px] md:text-xs font-bold uppercase tracking-widest">Commanding Presence</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image 2: Medium Wide dari Samping -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-4 reveal-up delay-200 group relative">
                        <div class="relative w-full h-full aspect-[4/3] md:aspect-auto rounded-[1rem] md:rounded-[1.5rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-2-AGBz38PNJ6fKDDOg.jpg" alt="Starray Side Profile" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out select-none pointer-events-none">
                            <!-- Overlay Title -->
                            <div class="absolute bottom-0 left-0 w-full p-6 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-lg md:text-xl text-white uppercase tracking-tighter mb-0.5">Athletic Silhouette</h4>
                                <p class="text-white/70 text-[8px] font-bold uppercase tracking-widest">Precision Proportions</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image 3: Exterior Closeup Samping Lampu Depan -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-4 reveal-up delay-300 group relative">
                        <div class="relative w-full h-full aspect-[4/3] md:aspect-auto rounded-[1rem] md:rounded-[1.5rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_starray_07-mP43Q3E4OwIBv73l.jpg" alt="Starray Headlight Detail" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out select-none pointer-events-none">
                            <!-- Overlay Title -->
                            <div class="absolute bottom-0 left-0 w-full p-6 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-lg md:text-xl text-white uppercase tracking-tighter mb-0.5">Stellar LED Matrix</h4>
                                <p class="text-white/70 text-[8px] font-bold uppercase tracking-widest">Signature Light Trace</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Image 4: Medium Wide Sudut Jam 4 Depan (Full Width Banner) -->
                    <div class="flex-shrink-0 w-[85vw] snap-center md:w-auto md:col-span-12 reveal-up delay-100 group mt-4 md:mt-0 relative">
                        <div class="relative w-full aspect-video md:aspect-[21/9] rounded-[1rem] md:rounded-[1.5rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-3-mk34yP1EWqfr1Jwj.jpg" alt="Starray Dynamic Angle" draggable="false" loading="lazy" class="absolute inset-0 w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out select-none pointer-events-none">
                            <!-- Overlay Title -->
                            <div class="absolute bottom-0 left-0 w-full p-6 md:p-10 bg-gradient-to-t from-black/70 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-xl md:text-3xl text-white uppercase tracking-tighter mb-1">Dynamic Stance</h4>
                                <p class="text-white/70 text-[9px] md:text-xs font-bold uppercase tracking-widest">Future Forward Design</p>
                            </div>
                        </div>
                    </div>

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


    </div> <!-- End of Wrapper Utama -->

    <!-- ==========================================
         SCRIPTS
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // 1. Reveal Observer (Scroll Animations)
            const observerOptions = { root: null, rootMargin: '0px', threshold: 0.15 };
            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);
            
            document.querySelectorAll('.reveal-up').forEach(el => revealObserver.observe(el));

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
        });
    </script>
</x-layouts.app>
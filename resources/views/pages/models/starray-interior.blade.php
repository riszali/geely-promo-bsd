<x-layouts.app>
    <!-- ==========================================
         ULTRA-PREMIUM INTERIOR DESIGN SYSTEM
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

        /* Glassmorphism Styles */
        .glass-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(40px) saturate(150%);
            -webkit-backdrop-filter: blur(40px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5);
            position: relative;
            overflow: hidden;
        }

        /* Text Gradients */
        .text-gradient-cyan {
            background: linear-gradient(to right, #0891b2, #2563eb);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Animation reveals */
        .reveal-up { opacity: 0; transform: translateY(60px) scale(0.98); transition: all 1.2s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        /* Swatch Buttons */
        .swatch-btn {
            border: 2px solid rgba(255,255,255,0.2);
            transition: all 0.3s ease;
            cursor: pointer;
        }
        .swatch-btn:hover { border-color: rgba(255,255,255,0.6); transform: scale(1.05); }
        .swatch-btn.active { border-color: #fff; transform: scale(1.1); box-shadow: 0 0 15px rgba(255,255,255,0.3); }

        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>

    <div class="relative w-full max-w-[1920px] mx-auto bg-[#050505] overflow-x-clip">

        <!-- ==========================================
             SECTION 1: HERO TITLE (SEPARATED)
        =========================================== -->
        <section class="relative pt-32 pb-12 md:pt-40 md:pb-16 w-full flex items-center justify-center bg-[#050505] z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 text-center">
                <div class="reveal-up">
                    <h1 class="font-geely text-4xl sm:text-5xl md:text-7xl lg:text-[80px] uppercase tracking-tighter leading-none mb-4 md:mb-6 drop-shadow-lg text-white">
                        Luxury <span class="text-gradient-cyan">Sanctuary</span>
                    </h1>
                    <p class="text-gray-400 text-[10px] sm:text-xs md:text-sm lg:text-base max-w-2xl mx-auto font-light tracking-[0.2em] md:tracking-widest uppercase drop-shadow-md px-2">
                        Kombinasi Sempurna Antara Teknologi Pintar dan Kenyamanan Tanpa Batas
                    </p>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 1.5: HERO IMAGE (UNOBSTRUCTED)
        =========================================== -->
        <section class="relative w-full h-[50svh] md:h-[70svh] lg:h-[90svh] overflow-hidden reveal-up delay-100">
            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" alt="Interior Hero" class="w-full h-full object-cover object-center transform hover:scale-105 transition-transform duration-[20s] ease-out">
            <!-- Subtle gradient to blend smoothly with the dark section above -->
            <div class="absolute inset-x-0 top-0 h-24 md:h-32 bg-gradient-to-b from-[#050505] to-transparent z-10"></div>
        </section>

        <!-- ==========================================
             SECTION 2: COMFORT PHILOSOPHY (Light)
        =========================================== -->
        <section class="bg-white py-20 md:py-32 relative z-30">
            <div class="max-w-5xl mx-auto px-6 text-center">
                <h2 class="font-geely text-3xl md:text-5xl lg:text-[56px] text-[#333333] uppercase tracking-wide mb-4 reveal-up">
                    A Senses-First Approach
                </h2>
                <h3 class="text-[#666666] text-xs md:text-lg font-medium tracking-[0.15em] uppercase mb-10 reveal-up delay-100 flex items-center justify-center gap-2 flex-wrap">
                    <span>SOPHISTICATED MATERIALS</span>
                    <span class="hidden md:inline-block text-gray-300">|</span>
                    <span>INTELLIGENT CABIN</span>
                </h3>
                <p class="text-[#333333] text-sm md:text-lg lg:text-xl leading-relaxed max-w-4xl mx-auto font-light reveal-up delay-200">
                    Interior Geely Starray dirancang untuk menjadi ruang ketiga Anda. Menggunakan bahan ramah lingkungan berkualitas tinggi, pencahayaan ambien yang sinkron dengan musik, dan ergonomi yang memastikan kenyamanan di setiap perjalanan jauh.
                </p>
            </div>
        </section>

        <!-- ==========================================
             SECTION 3: INTERIOR COLOR SELECTOR
        =========================================== -->
        <section class="py-20 md:py-32 bg-[#0a0a0a] relative z-20">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] bg-cyan-600/10 rounded-full blur-[120px] pointer-events-none"></div>

            <div class="max-w-[1400px] mx-auto px-6 text-center relative z-10">
                <div class="mb-12 reveal-up">
                    <h2 class="font-geely text-4xl md:text-6xl text-white uppercase tracking-tighter">Personalize Your Space</h2>
                </div>

                <div class="flex flex-col items-center gap-8 reveal-up delay-100">
                    <div class="flex gap-6 bg-white/5 p-3 rounded-full border border-white/10 backdrop-blur-xl shadow-2xl">
                        <button class="int-color-btn active w-12 h-12 rounded-full swatch-btn" style="background-color: #F5F5F5;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" data-name="Ivory White"></button>
                        <button class="int-color-btn w-12 h-12 rounded-full swatch-btn" style="background-color: #1A1A1A;" data-src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_02-2-ALp27e5OjrUeRvJO.jpg" data-name="Ebony Black"></button>
                    </div>
                    <p id="active-int-name" class="text-white text-xs font-bold tracking-widest uppercase opacity-70 transition-opacity duration-300">Ivory White</p>
                    
                    <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] w-full max-w-6xl overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.5)]">
                        <div class="relative w-full aspect-video rounded-[1.5rem] md:rounded-[2rem] overflow-hidden bg-[#111]">
                            <img id="interior-main-view" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_01-YD0EBleD6kSoMROy.png" alt="Starray Interior View" class="absolute inset-0 w-full h-full object-cover transition-opacity duration-500">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 4: INTERIOR GALLERY (BENTO)
        =========================================== -->
        <section class="py-20 md:py-32 bg-white relative z-30 border-t border-gray-100">
            <div class="max-w-[1600px] w-full mx-auto px-4 md:px-12 lg:px-16">
                <div class="text-center mb-12 md:mb-20">
                    <h3 class="text-cyan-600 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase mb-4 reveal-up">Immersive Experience</h3>
                    <h2 class="font-geely text-4xl md:text-6xl text-gray-900 uppercase tracking-tighter reveal-up delay-100">The <span class="text-gradient-cyan">Details</span> Inside</h2>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 md:gap-6 lg:gap-8 auto-rows-min">
                    <div class="md:col-span-7 reveal-up group relative">
                        <div class="rounded-[1.5rem] md:rounded-[2rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)] bg-gray-100 aspect-video md:aspect-auto md:h-[450px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_02-Aq2GqWMNZKuN5KX1.png" alt="Flyme Sound" class="w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out">
                            <div class="absolute bottom-0 left-0 w-full p-8 md:p-10 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-2xl md:text-3xl text-white uppercase mb-1">Flyme Sound Master</h4>
                                <p class="text-white/70 text-[10px] md:text-xs font-bold tracking-widest uppercase">16-Speaker Audio Excellence</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-5 reveal-up delay-100 group relative">
                        <div class="rounded-[1.5rem] md:rounded-[2rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)] bg-gray-100 h-full min-h-[300px] md:h-[450px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_03-dOqZ8avNrlIy408B.png" alt="Crystal Gear Shift" class="w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out">
                            <div class="absolute bottom-0 left-0 w-full p-8 md:p-10 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-xl md:text-2xl text-white uppercase mb-1">Crystal Gear Shift</h4>
                                <p class="text-white/70 text-[10px] md:text-xs font-bold tracking-widest uppercase">Elegance in Every Touch</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-4 reveal-up delay-200 group relative mt-4 md:mt-0">
                        <div class="rounded-[1.5rem] md:rounded-[2rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)] bg-gray-100 aspect-square md:aspect-auto md:h-[400px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_05-m5K8LMErKrcbRGzg.png" alt="Infotainment Screen" class="w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out">
                            <div class="absolute bottom-0 left-0 w-full p-6 md:p-8 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-lg md:text-xl text-white uppercase mb-1">13.2" Infotainment</h4>
                                <p class="text-white/70 text-[9px] md:text-10px font-bold tracking-widest uppercase">Seamless Connectivity</p>
                            </div>
                        </div>
                    </div>

                    <div class="md:col-span-8 reveal-up delay-300 group relative mt-4 md:mt-0">
                        <div class="rounded-[1.5rem] md:rounded-[2rem] overflow-hidden shadow-[0_20px_40px_rgba(0,0,0,0.08)] bg-gray-100 aspect-video md:aspect-auto md:h-[400px]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_starray_04-YD0EBleDxZI2bbaK.png" alt="Ambient Lighting" class="w-full h-full object-cover transform md:group-hover:scale-105 transition-transform duration-1000 ease-out">
                            <div class="absolute bottom-0 left-0 w-full p-8 md:p-10 bg-gradient-to-t from-black/80 via-black/40 to-transparent flex flex-col justify-end">
                                <h4 class="font-geely text-2xl md:text-3xl text-white uppercase mb-1">Cosmic Ambient Light</h4>
                                <p class="text-white/70 text-[10px] md:text-xs font-bold tracking-widest uppercase">Music-Synced Illumination</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 5: FLYME AUDIO HIGHLIGHT
        =========================================== -->
        <section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden py-24">
            <!-- Background Video Layer -->
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop playsinline class="w-full h-full object-cover brightness-50 grayscale-[0.2]">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_audio-system-starray-1r0XLEB965PKMDeV.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-black/60 opacity-20"></div>
                <div class="absolute inset-0 bg-black/40"></div>
            </div>

            <div class="max-w-4xl mx-auto px-6 relative z-10 text-center">
                <div class="reveal-up">
                    <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl shadow-lg">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-cyan-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-cyan-500"></span>
                        </span>
                        <span class="text-white text-[9px] tracking-[0.4em] font-bold uppercase">Auditory Excellence</span>
                    </div>
                    
                    <h2 class="font-geely text-3xl md:text-4xl text-white uppercase tracking-tighter leading-tight mb-8 drop-shadow-2xl">
                        16 True Surround Sound <br><span class="text-gradient-cyan">Flyme Speakers</span>
                    </h2>
                    
                    <p class="text-gray-100 text-sm md:text-xl font-light leading-relaxed max-w-6xl mx-auto drop-shadow-md">
                        Rasakan pengalaman suara surround 7.1.2 yang imersif dengan amplifier digital independen 12 saluran, 1000W, yang disetel secara cermat oleh tim audio 'Golden Ear' kami untuk kejernihan yang tak tertandingi.
                    </p>
                    
                    <!-- Sound Stats Grid -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-12">
                        <div class="glass-panel p-4 rounded-2xl bg-white/5 border-white/10">
                            <p class="text-cyan-400 font-geely text-2xl mb-1">7.1.2</p>
                            <p class="text-[8px] uppercase tracking-widest text-gray-400">Surround</p>
                        </div>
                        <div class="glass-panel p-4 rounded-2xl bg-white/5 border-white/10">
                            <p class="text-white font-geely text-2xl mb-1">1000W</p>
                            <p class="text-[8px] uppercase tracking-widest text-gray-400">Power Amp</p>
                        </div>
                        <div class="glass-panel p-4 rounded-2xl bg-white/5 border-white/10">
                            <p class="text-white font-geely text-2xl mb-1">12 Ch</p>
                            <p class="text-[8px] uppercase tracking-widest text-gray-400">Independent</p>
                        </div>
                        <div class="glass-panel p-4 rounded-2xl bg-white/5 border-white/10">
                            <p class="text-white font-geely text-2xl mb-1">Hi-Res</p>
                            <p class="text-[8px] uppercase tracking-widest text-gray-400">Audio Quality</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 6: COMFORTABLE CABIN SEAT
        =========================================== -->
        <section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-24 bg-black">
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop playsinline class="w-full h-full object-cover brightness-75">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i-geely-ambara-group-A85MZXeJRKSVQ1Er.mp4" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 w-full relative z-10">
                <div class="max-w-2xl reveal-up">
                    <div class="inline-block mb-6">
                        <div class="flex items-center gap-2 px-4 py-2 bg-white/10 backdrop-blur-md rounded-full border border-white/20">
                            <span class="w-2 h-2 rounded-full bg-cyan-500 shadow-[0_0_10px_#06b6d4]"></span>
                            <span class="text-[10px] text-white font-bold tracking-[0.3em] uppercase">Ergonomic Luxury</span>
                        </div>
                    </div>

                    <h2 class="font-geely text-4xl md:text-6xl text-white uppercase tracking-tighter leading-tight mb-8">
                        Comfortable <br><span class="text-gradient-cyan">Cabin Seat</span>
                    </h2>

                    <div class="space-y-6">
                        <p class="text-gray-200 text-sm md:text-lg font-light leading-relaxed max-w-xl">
                            Kursi depan dapat direbahkan hingga 180 derajat, terhubung dengan kursi belakang, dan dilengkapi fungsi pijat kaki untuk relaksasi maksimal.
                        </p>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-10">
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10">
                                <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                                <div>
                                    <h5 class="text-white text-xs font-bold uppercase tracking-widest mb-1">180° Reclining</h5>
                                    <p class="text-gray-400 text-[11px]">Posisi tidur sempurna untuk istirahat optimal.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 backdrop-blur-sm border border-white/10">
                                <div class="w-10 h-10 rounded-full bg-cyan-500/20 flex items-center justify-center shrink-0">
                                    <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 13l4 4L19 7"/></svg>
                                </div>
                                <div>
                                    <h5 class="text-white text-xs font-bold uppercase tracking-widest mb-1">Leg Massage</h5>
                                    <p class="text-gray-400 text-[11px]">Fungsi pijat kaki eksklusif untuk kenyamanan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==========================================
             SECTION 7: STORAGE SPACE DESIGN CONCEPT (NEW)
        =========================================== -->
        <section class="relative min-h-[85vh] flex items-center justify-center overflow-hidden py-24 bg-black">
            <!-- Background Video Layer -->
            <div class="absolute inset-0 z-0">
                <video autoplay muted loop playsinline class="w-full h-full object-cover brightness-50 grayscale-[0.3]">
                    <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_storage-space-starray-FwUuxLIOAIEYT5jU.mp4" type="video/mp4">
                </video>
                <!-- Cinematic Overlays -->
                <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-black/40"></div>
                <div class="absolute inset-0 bg-cyan-950/10 mix-blend-overlay"></div>
            </div>

            <div class="max-w-7xl mx-auto px-6 w-full relative z-10 text-center">
                <div class="reveal-up">
                    <div class="inline-flex items-center gap-3 mb-8 px-6 py-2 rounded-full border border-white/10 bg-white/5 backdrop-blur-2xl">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                        </svg>
                        <span class="text-white text-[10px] tracking-[0.4em] font-black uppercase">Versatile Living</span>
                    </div>

                    <h2 class="font-geely text-4xl md:text-6xl text-white uppercase tracking-tighter leading-tight mb-8">
                        Storage Space <br><span class="text-gradient-cyan">Design Concept</span>
                    </h2>

                    <p class="text-gray-300 text-sm md:text-xl font-light leading-relaxed max-w-3xl mx-auto mb-12">
                        Saat kursi belakang dilipat, kasur dapat dengan mudah dimasukkan, memungkinkan Anda tidur dengan leluasa di alam terbuka. Transformasikan kabin Anda menjadi ruang peristirahatan pribadi di mana saja.
                    </p>

                    <!-- Feature Tags -->
                    <div class="flex flex-wrap justify-center gap-4 md:gap-8">
                        <div class="glass-panel px-8 py-5 rounded-[2rem] border-white/5 bg-white/5 hover:bg-white/10 transition-colors">
                            <h4 class="text-cyan-400 font-geely text-xl mb-1 italic">Flat Fold</h4>
                            <p class="text-[9px] text-gray-400 uppercase tracking-widest font-bold">Maximized Volume</p>
                        </div>
                        <div class="glass-panel px-8 py-5 rounded-[2rem] border-white/5 bg-white/5 hover:bg-white/10 transition-colors">
                            <h4 class="text-white font-geely text-xl mb-1 italic">Nature Ready</h4>
                            <p class="text-[9px] text-gray-400 uppercase tracking-widest font-bold">Outdoor Optimized</p>
                        </div>
                        <div class="glass-panel px-8 py-5 rounded-[2rem] border-white/5 bg-white/5 hover:bg-white/10 transition-colors">
                            <h4 class="text-white font-geely text-xl mb-1 italic">Easy Access</h4>
                            <p class="text-[9px] text-gray-400 uppercase tracking-widest font-bold">Seamless Transition</p>
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

    <!-- ==========================================
         SCRIPTS
    =========================================== -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Scroll Reveal Observer
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

            // Interior Color Toggle Logic
            const intImg = document.getElementById('interior-main-view');
            const nameDisp = document.getElementById('active-int-name');
            const btns = document.querySelectorAll('.int-color-btn');

            if(intImg && btns.length > 0) {
                btns.forEach(btn => {
                    btn.addEventListener('click', () => {
                        btns.forEach(b => b.classList.remove('active'));
                        btn.classList.add('active');
                        nameDisp.style.opacity = 0;
                        intImg.style.opacity = 0;
                        
                        setTimeout(() => {
                            nameDisp.textContent = btn.getAttribute('data-name');
                            intImg.src = btn.getAttribute('data-src');
                            nameDisp.style.opacity = 0.7;
                            intImg.style.opacity = 1;
                        }, 300);
                    });
                });
            }
        });
    </script>
</x-layouts.app>
<x-layouts.app>
    @push('head')
        <title>Eksterior Geely EX2 2025 | Desain Crossover Listrik Futuristik</title>
        <meta name="description" content="Jelajahi setiap detail eksterior Geely EX2. Desain pemenang penghargaan dengan pencahayaan LED cerdas dan proporsi Golden Ratio. Lihat tampilan 360 derajat di sini.">
        <meta name="keywords" content="Geely EX2 Eksterior, Desain Geely EX2, Mobil Listrik Urban, Crossover EV Geely, 360 Geely EX2, Geely Fatmawati">
        <link rel="canonical" href="https://geelyfatmawati.id/models/ex2/exterior">

        <!-- Open Graph / Facebook / WhatsApp -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://geelyfatmawati.id/models/ex2/exterior">
        <meta property="og:title" content="Eksterior Geely EX2 2024 | Desain Crossover Listrik Futuristik">
        <meta property="og:description" content="Jelajahi setiap detail eksterior Geely EX2. Desain pemenang penghargaan dengan pencahayaan LED cerdas dan proporsi Golden Ratio.">
        <meta property="og:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://geelyfatmawati.id/models/ex2/exterior">
        <meta property="twitter:title" content="Eksterior Geely EX2 2024 | Crossover Listrik Futuristik">
        <meta property="twitter:description" content="Jelajahi setiap detail eksterior Geely EX2. Desain pemenang penghargaan dengan pencahayaan cerdas.">
        <meta property="twitter:image" content="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg">
    @endpush

    <style>
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            overflow-x: clip; 
            max-width: 100vw; 
            font-family: 'Inter', sans-serif;
        }

        .viewer-container { aspect-ratio: 16 / 9; height: auto; width: 100%; }
        @media (min-width: 768px) {
            .viewer-container { aspect-ratio: auto; height: 60vh; min-height: 500px; }
        }

        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        .glass-panel {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.04) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(40px) saturate(150%);
            -webkit-backdrop-filter: blur(40px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.05);
            position: relative;
            overflow: hidden;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .glass-panel:hover {
            box-shadow: 0 40px 80px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transform: translateY(-4px);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(24px) saturate(180%);
            -webkit-backdrop-filter: blur(24px) saturate(180%);
            border: 1px solid rgba(0, 0, 0, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.8);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.04);
            color: #1d1d1f;
            transition: all 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        }
        
        .glass-panel-light:hover {
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.08);
            transform: translateY(-4px);
        }

        .bg-studio-motif {
            background-image: 
                linear-gradient(120deg, transparent 30%, rgba(255, 255, 255, 0.15) 38%, rgba(255, 255, 255, 0.4) 40%, rgba(255, 255, 255, 0.15) 42%, transparent 50%),
                radial-gradient(circle at 50% 100%, rgba(255,255,255,0.4) 0%, transparent 60%),
                url("data:image/svg+xml,%3Csvg width='40' height='69.28203230275509' viewBox='0 0 40 69.28203230275509' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23000000' fill-opacity='0.05'%3E%3Cpath d='M0 22.82l20-11.547 20 11.547v23.094l-20 11.547-20-11.547V22.82zm2 3.464v16.17L19.236 51.7l17.528-9.246v-16.17L19.236 17.038 2 26.284z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            background-size: 200% 100%, 100% 100%, 60px 103.92px;
            background-position: 100% 0, center bottom, center center;
            animation: lightSweep 12s ease-in-out infinite alternate;
        }

        @keyframes lightSweep {
            0% { background-position: 100% 0, center bottom, center center; }
            100% { background-position: -100% 0, center bottom, center center; }
        }

        .text-gradient-animated {
            background: linear-gradient(to right, #f8fafc 20%, #a7f3d0 40%, #10b981 60%, #f8fafc 80%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: premiumShine 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }

        @keyframes premiumShine {
            0% { background-position: -100% center; }
            100% { background-position: 100% center; }
        }

        .text-liquid {
            background: linear-gradient(270deg, #22d3ee, #818cf8, #f472b6, #22d3ee);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: liquidText 8s ease infinite;
        }
        @keyframes liquidText {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .text-gradient-dark-animated {
            background: linear-gradient(to right, #0f172a 20%, #059669 40%, #0f172a 60%, #059669 80%);
            background-size: 200% auto;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: darkShine 8s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }
        @keyframes darkShine {
            0% { background-position: -100% center; }
            100% { background-position: 100% center; }
        }

        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1); }
        .reveal-scale { opacity: 0; transform: scale(0.96); transition: all 1.2s cubic-bezier(0.16, 1, 0.3, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }
        
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }

        .swatch-btn {
            border: 2px solid rgba(255, 255, 255, 0.1) !important;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1) !important;
            cursor: pointer;
            transform: scale(0.9);
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }
        .swatch-btn:hover {
            transform: scale(1.05) !important;
            border-color: rgba(255, 255, 255, 0.5) !important;
        }
        .swatch-btn.active {
            transform: scale(1.15) !important;
            border-color: #fff !important;
            box-shadow: 0 0 20px rgba(45, 212, 191, 0.5);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-8px); }
            100% { transform: translateY(0px); }
        }
        .animate-float { animation: float 6s ease-in-out infinite; }
    </style>

    <div class="w-full overflow-x-clip bg-[#050505]">

        <section class="relative min-h-[100svh] w-full flex flex-col justify-center items-center overflow-hidden py-24 lg:py-32 bg-noise">
            <div class="absolute inset-0 z-0 bg-[#050505]">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Ambient Blur" class="absolute inset-0 w-full h-full object-cover opacity-60 blur-[80px] transform scale-125">
                <div class="absolute top-0 left-0 w-[500px] h-[500px] bg-pink-600/20 rounded-full blur-[120px] mix-blend-screen"></div>
                <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-cyan-600/20 rounded-full blur-[150px] mix-blend-screen"></div>
            </div>

            <div class="relative z-20 w-full max-w-7xl mx-auto px-6 text-center mb-8 md:mb-12">
                <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-teal-500/30 bg-teal-500/10 backdrop-blur-xl reveal-up animate-float">
                    <span class="text-teal-300 text-[8px] md:text-[10px] tracking-[0.4em] font-bold uppercase">Dynamic Exterior</span>
                </div>

                <h1 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-6xl text-white uppercase leading-[1.1] tracking-tighter mb-6 reveal-up delay-100 max-w-5xl mx-auto drop-shadow-2xl">
                    A SYMPHONY OF <span class="text-liquid">COLOR</span> <br> AND FUTURISTIC FORM
                </h1>
                
                <p class="text-gray-400 text-xs md:text-base font-light tracking-wide uppercase reveal-up delay-200 max-w-2xl mx-auto">
                    Keseimbangan sempurna antara gaya urban yang ceria dan teknologi pencahayaan yang canggih.
                </p>
            </div>

            <div class="relative z-20 w-full max-w-5xl mx-auto px-4 sm:px-6 reveal-up delay-300">
                <div class="glass-panel p-2 md:p-3 rounded-[2rem] md:rounded-[2.5rem] border border-white/20">
                    <div class="relative w-full aspect-video md:aspect-[21/9] rounded-[1.5rem] md:rounded-[2rem] overflow-hidden">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="EX2 Exterior" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-20 md:py-32 bg-[#050505] relative z-30 overflow-hidden border-t border-white/10 bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[400px] bg-teal-600/10 rounded-full blur-[150px] mix-blend-screen pointer-events-none"></div>

            <div class="max-w-[1600px] mx-auto px-4 md:px-12 relative z-10 text-center">
                <div class="reveal-up mb-12 md:mb-16">
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white mb-4 drop-shadow-lg">
                        CHOOSE YOUR <span class="text-gradient-animated">EX2</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base font-light tracking-wide max-w-2xl mx-auto leading-relaxed">
                        Tersedia dalam berbagai pilihan warna yang mencerminkan kepribadian dinamis Anda. Jelajahi sudut pandang 360 derajat.
                    </p>
                </div>

                <div class="glass-panel p-2 md:p-3 rounded-[2rem] md:rounded-[3rem] overflow-hidden reveal-scale w-full relative z-10 mb-8 aspect-video max-w-6xl mx-auto shadow-2xl border-white/5">
                    <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2.5rem] overflow-hidden">
                        <div id="360-bg-container" class="absolute inset-0 transition-colors duration-1000" style="background-color: #e2e8f0;">
                            <div class="absolute inset-0 bg-studio-motif mix-blend-overlay"></div>
                            <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(255,255,255,0.4)_0%,rgba(0,0,0,0.6)_100%)] pointer-events-none mix-blend-overlay"></div>
                            <div class="absolute inset-0 shadow-[inset_0_0_120px_rgba(0,0,0,0.2)] pointer-events-none"></div>
                        </div>
                        
                        <div class="absolute top-1/2 left-1/2 w-[125%] h-[125%] -translate-x-1/2 -translate-y-1/2 z-10">
                            <iframe id="iframe-exterior" src="https://riszali.sirv.com/Spins/ex2/White.spin" class="w-full h-full border-0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>

                <div class="glass-panel flex flex-col md:inline-flex md:flex-row items-center justify-between md:justify-center p-4 md:py-4 md:px-8 rounded-[2rem] md:rounded-full shadow-2xl border-white/10 relative z-30 mx-auto w-full md:w-auto max-w-6xl reveal-up delay-200 gap-4 md:gap-10 backdrop-blur-3xl -mt-16 md:-mt-24">
                    
                    <p id="active-color-name" class="text-[10px] md:text-[12px] font-bold tracking-[0.4em] uppercase text-center flex-1 md:flex-none transition-colors duration-300 my-2 md:my-0" style="color: #cbd5e1;">Pearl White</p>

                    <div class="hidden md:block w-[1px] h-10 bg-white/10 shrink-0"></div>

                    <div class="flex items-center gap-4 shrink-0 justify-center w-full md:w-auto">
                        <div class="flex flex-wrap justify-center gap-3 transition-all duration-500">
                            <button class="swatch-ext active w-8 h-8 rounded-full border border-white ring-1 ring-white/50 ring-offset-2 ring-offset-transparent transition-all" style="background-color: #f8f9fa;" data-src="https://riszali.sirv.com/Spins/ex2/White.spin" data-name="Pearl White" data-text-color="#cbd5e1" data-bg-color="#e2e8f0"></button>
                            <button class="swatch-ext w-8 h-8 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #ffd1dc;" data-src="https://riszali.sirv.com/Spins/ex2/IceBerryPink.spin" data-name="Ice Berry Pink" data-text-color="#f472b6" data-bg-color="#fbcfe8"></button>
                            <button class="swatch-ext w-8 h-8 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #e3dac9;" data-src="https://riszali.sirv.com/Spins/ex2/NebullaBeigi.spin" data-name="Nebulla Beige" data-text-color="#fcd34d" data-bg-color="#fef08a"></button>
                            <button class="swatch-ext w-8 h-8 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #9cd1e8;" data-src="https://riszali.sirv.com/Spins/ex2/SeaSaltBlue%20().spin" data-name="Sea Salt Blue" data-text-color="#38bdf8" data-bg-color="#bae6fd"></button>
                            <button class="swatch-ext w-8 h-8 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #7b8084;" data-src="https://riszali.sirv.com/Spins/ex2/Comet%20grey%20().spin" data-name="Comet Grey" data-text-color="#94a3b8" data-bg-color="#94a3b8"></button>
                            <button class="swatch-ext w-8 h-8 rounded-full border border-white/20 hover:border-white/60 transition-all" style="background-color: #c0c0c0;" data-src="https://riszali.sirv.com/Spins/ex2/Starsilver.spin" data-name="Star Silver" data-text-color="#cbd5e1" data-bg-color="#cbd5e1"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative w-full bg-[#050505] bg-noise">
            <div class="sticky top-0 w-full h-[100vh] z-0 overflow-hidden">
                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="Design Architecture" class="w-full h-full object-contain opacity-30 invert">
                <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-transparent to-[#050505]"></div>
            </div>

            <div class="relative z-10 w-full">
                <div class="h-[80vh] md:h-[100vh]"></div>
                <div class="w-full max-w-7xl mx-auto px-6 pb-[30vh]">
                    <div class="glass-panel p-8 md:p-12 lg:p-16 rounded-[2.5rem] max-w-3xl ml-auto reveal-up border border-teal-400/30">
                        <div class="inline-flex items-center gap-3 mb-6 px-4 py-2 rounded-full border border-teal-400/50 bg-teal-500/10 text-teal-300">
                            <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Award Winning Design</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter mb-6 leading-tight">
                            PLAYFUL <br> <span class="text-gradient-animated">URBAN AESTHETICS</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light">
                            Geely EX2 memadukan gaya hidup modern dengan fungsionalitas cerdas. Pemenang European Product Design Award ini membuktikan bahwa kendaraan elektrik bisa tampil berani, ekspresif, dan tetap efisien.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 md:py-32 lg:py-48 bg-[#f5f5f7] relative z-20 overflow-hidden border-t border-gray-200 bg-noise">
            <div class="absolute top-1/2 left-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 right-0 w-[500px] h-[500px] bg-rose-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="text-center mb-16 md:mb-24 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-blue-200 bg-white/50 text-blue-600 shadow-sm animate-float">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">Philosophy</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl tracking-tighter text-[#1d1d1f] leading-tight uppercase mb-6">
                        DESIGN THAT <br class="hidden md:block"> DEFINES <span class="text-gradient-dark-animated">EVERY DETAIL</span>
                    </h2>
                    <p class="text-gray-500 text-sm md:text-base lg:text-lg font-light leading-relaxed max-w-3xl mx-auto">
                        Geely EX2 menggabungkan proporsi klasik, garis dinamis, dan pencahayaan khas untuk menciptakan tampilan yang berani dan seimbang yang terasa abadi sekaligus baru.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                    <div class="lg:col-span-8 reveal-left">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-white overflow-hidden group shadow-lg">
                            <div class="relative aspect-[16/9] lg:aspect-[21/9] rounded-[2rem] overflow-hidden">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_01_new-1-q13wSwvb7HLpOlq9.jpg" alt="Geely EX2 Design Highlight" class="w-full h-full object-cover transition-transform duration-[2000ms] group-hover:scale-105">
                                <div class="absolute inset-0 bg-gradient-to-t from-white/20 via-transparent to-transparent"></div>
                            </div>
                        </div>
                    </div>

                    <div class="lg:col-span-4 flex flex-col justify-center reveal-right delay-200">
                        <div class="glass-panel-light p-8 md:p-10 rounded-[2.5rem] border-blue-100 bg-white/80 relative overflow-hidden h-full flex flex-col justify-center shadow-md">
                            <div class="absolute -top-20 -right-20 w-40 h-40 bg-blue-100/50 rounded-full blur-[60px]"></div>
                            <span class="text-blue-600 font-geely text-4xl md:text-5xl mb-4 block">0.618</span>
                            <h3 class="font-geely text-2xl md:text-3xl text-[#1d1d1f] uppercase tracking-tighter mb-4 leading-tight">
                                GOLDEN <br> <span class="text-teal-600">RATIO</span>
                            </h3>
                            <div class="w-12 h-1 bg-gradient-to-r from-blue-400 to-teal-600 mb-6 rounded-full"></div>
                            <p class="text-gray-500 text-sm md:text-base leading-relaxed font-light">
                                The 0.618 Golden Ratio shapes a visually balanced stance and a smoother aerodynamic profile that elevates both style and performance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY FOTO EKSTERIOR (BENTO GRID INOVATIF - BACKGROUND HIJAU GRADASI HITAM) -->
        <section class="py-16 md:py-32 relative z-20 overflow-hidden bg-gradient-to-b from-emerald-900 to-[#050505] bg-noise">
            <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-emerald-500/20 rounded-full blur-[120px] pointer-events-none z-0"></div>
            <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-teal-500/20 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] mx-auto px-3 sm:px-6 relative z-10">

                <div class="md:hidden flex items-center justify-end mb-6 px-2 reveal-up">
                    <div class="flex items-center gap-1.5 text-gray-400">
                        <span class="text-[9px] tracking-widest uppercase">Tap to expand</span>
                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                    </div>
                </div>

                <!-- Innovative Bento Grid for Mobile & Desktop -->
                <div class="grid grid-cols-2 md:grid-cols-4 grid-flow-dense gap-2 sm:gap-4 md:gap-6 auto-rows-[140px] sm:auto-rows-[180px] md:auto-rows-[250px]">
                    @php
                        $gallery_images = [
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg', 'class' => 'col-span-2 row-span-2 md:col-span-2 md:row-span-2', 'delay' => ''],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_01-AMqD4kzE6kiaXr9z.webp', 'class' => 'col-span-1 row-span-1 md:col-span-1 md:row-span-2', 'delay' => 'delay-100'],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_02-m7VDK4jv0GtqJb72.webp', 'class' => 'col-span-1 row-span-1 md:col-span-1 md:row-span-1', 'delay' => 'delay-200'],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_05-A1azJbNx5vfMLwxk.webp', 'class' => 'col-span-1 row-span-2 md:col-span-1 md:row-span-1', 'delay' => 'delay-300'],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_06-AE074kxnb9cgqyy8.webp', 'class' => 'col-span-1 row-span-1 md:col-span-2 md:row-span-1', 'delay' => ''],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_04-Yg249ePvePs12lrB.webp', 'class' => 'col-span-1 row-span-1 md:col-span-1 md:row-span-1', 'delay' => 'delay-100'],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner-ex2-mePgnZaEZKcoBMRV.jpg', 'class' => 'col-span-2 row-span-1 md:col-span-3 md:row-span-1', 'delay' => 'delay-200'],
                            ['src' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior_ex2_07-YZ9Ebkpj2BhoZKpN.webp', 'class' => 'col-span-2 row-span-2 md:col-span-1 md:row-span-2', 'delay' => 'delay-300']
                        ];
                    @endphp

                    @foreach($gallery_images as $img)
                        <div class="glass-panel p-1 sm:p-2 rounded-[1rem] sm:rounded-[2rem] reveal-up {{ $img['delay'] }} {{ $img['class'] }} group cursor-pointer relative overflow-hidden active:scale-[0.98] transition-transform duration-300" onclick="openLightbox('{{ $img['src'] }}')">
                            <div class="w-full h-full rounded-[0.75rem] sm:rounded-[1.5rem] overflow-hidden relative">
                                <img src="{{ $img['src'] }}" alt="Gallery Geely EX2" loading="lazy" class="absolute inset-0 w-full h-full object-cover mix-blend-luminosity opacity-80 group-hover:mix-blend-normal group-hover:opacity-100 group-hover:scale-105 transition-all duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                                
                                <!-- Action Icon (Hover / Interactive) -->
                                <div class="absolute bottom-2 right-2 sm:bottom-4 sm:right-4 w-8 h-8 sm:w-10 sm:h-10 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white opacity-0 group-hover:opacity-100 transition-all duration-300 translate-y-4 group-hover:translate-y-0 border border-white/20">
                                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <div class="w-full lg:w-1/2 reveal-right">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-teal-500/20 bg-teal-500/5 text-teal-300">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Intelligence Lighting</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6">
                            FEATHER-INSPIRED <br> <span class="text-gradient-animated">LED HEADLIGHTS</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light mb-10">
                            Lampu depan LED dengan teknologi lampu jauh adaptif menerangi jalan hingga 170 meter ke depan dan selebar 22 meter.
                        </p>
                        
                        <div class="grid grid-cols-2 gap-6 opacity-90">
                            <div class="p-5 rounded-2xl glass-panel border-white/5 flex flex-col justify-center">
                                <p class="text-teal-400 font-geely text-3xl md:text-4xl mb-1">170m</p>
                                <p class="text-gray-500 text-[9px] uppercase tracking-widest font-bold">Far Range</p>
                            </div>
                            <div class="p-5 rounded-2xl glass-panel border-white/5 flex flex-col justify-center">
                                <p class="text-white font-geely text-3xl md:text-4xl mb-1">22m</p>
                                <p class="text-gray-500 text-[9px] uppercase tracking-widest font-bold">Wide Beam</p>
                            </div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 reveal-left">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-white/10 overflow-hidden group shadow-2xl">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg" alt="EX2 LED Headlights" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 md:py-32 bg-[#f5f5f7] relative z-20 overflow-hidden border-t border-gray-200 bg-noise">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-teal-100/50 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row items-center gap-12 lg:gap-20">
                    <div class="w-full lg:w-1/2 reveal-left">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-teal-200 bg-white/50 text-teal-600 shadow-sm">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Dynamic Stance</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-[#1d1d1f] uppercase tracking-tighter leading-tight mb-6">
                            16 INCH <br> <span class="text-gradient-dark-animated">CLOVERLEAF WHEELS</span>
                        </h2>
                        <p class="text-gray-500 text-sm md:text-lg leading-relaxed font-light mb-10">
                            Terinspirasi oleh simetri organik bentuk daun semanggi, roda berukuran 16 inci ini mewujudkan keseimbangan, energi, dan gaya abadi di setiap belokan.
                        </p>
                    </div>

                    <div class="w-full lg:w-1/2 reveal-right delay-100">
                        <div class="glass-panel-light p-2 rounded-[2.5rem] border border-white overflow-hidden group shadow-lg">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-wheels-TAYE4pXuR33qQUOu.jpg" alt="16 Inch Cloverleaf Wheels" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SECTION CAGE BODY -->
        <section class="py-24 md:py-32 relative z-20 overflow-hidden border-t border-white/10 bg-gradient-to-b from-[#4a1000] to-[#050505] bg-noise">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-orange-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1400px] mx-auto px-4 md:px-6 relative z-10">
                <div class="glass-panel p-2 rounded-[2.5rem] md:rounded-[3rem] overflow-hidden border border-orange-500/20 shadow-[0_0_50px_rgba(234,88,12,0.1)] group">
                    <div class="relative w-full h-[550px] md:h-[650px] lg:h-[750px] rounded-[2rem] md:rounded-[2.5rem] overflow-hidden">
                        <div class="absolute inset-0 bg-[#08080a]"></div>
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---vehicle-architecture-2DbmJoNAygKH9Fo7.jpg" 
                             alt="Cage Body Structure" 
                             class="absolute inset-0 w-full h-full object-cover object-center opacity-60 group-hover:opacity-80 transition-all duration-[2000ms] mix-blend-lighten scale-105 group-hover:scale-100">
                        
                        <div class="absolute inset-0 bg-gradient-to-r from-[#050505]/90 via-[#050505]/60 to-transparent"></div>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505]/90 via-transparent to-transparent"></div>

                        <div class="absolute inset-0 p-8 md:p-12 lg:p-20 flex flex-col justify-end lg:justify-center w-full lg:w-1/2 z-10">
                            <div class="reveal-left">
                                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-orange-500/30 bg-orange-500/10 text-orange-400 backdrop-blur-md shadow-sm animate-float">
                                    <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Core Safety</span>
                                </div>
                                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl text-white uppercase tracking-tighter leading-tight mb-6 drop-shadow-2xl">
                                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-red-500">CAGE</span> <br> BODY
                                </h2>
                                <div class="w-16 h-1 bg-gradient-to-r from-orange-500 to-red-600 mb-6 rounded-full shadow-[0_0_15px_rgba(234,88,12,0.5)]"></div>
                                <p class="text-gray-300 text-sm md:text-base lg:text-lg leading-relaxed font-light drop-shadow-md max-w-md">
                                    Rangka bodi berkekuatan tinggi meningkatkan kekakuan dan mendistribusikan gaya benturan secara merata, menjaga keselamatan penumpang dalam setiap situasi.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 md:py-32 bg-[#08080a] relative z-20 overflow-hidden border-t border-white/5 bg-noise">
            <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-teal-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1500px] mx-auto relative z-10">
                <div class="relative flex flex-col lg:flex-row items-center justify-end min-h-[500px] lg:min-h-[600px]">
                    <div class="lg:absolute lg:left-0 lg:top-0 w-full lg:w-[65%] h-[350px] lg:h-full z-0 reveal-left">
                        <div class="w-full h-full relative lg:rounded-r-[3rem] overflow-hidden glass-panel border-l-0 border-y-0 border-r border-teal-500/20 shadow-2xl">
                            <div class="absolute inset-0 bg-teal-500/10 mix-blend-overlay z-10 pointer-events-none"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---tri-directional-structure-eJ1ix5FWjzTtiNMR.jpg" 
                                 alt="High-Strength Frame" 
                                 class="w-full h-full object-cover transition-transform duration-[3000ms] hover:scale-105 opacity-80 mix-blend-lighten">
                            <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-l from-[#08080a] via-[#08080a]/40 to-transparent z-10 pointer-events-none"></div>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 px-6 lg:px-12 relative z-10 -mt-16 lg:mt-0 reveal-right delay-100">
                        <div class="glass-panel p-8 md:p-12 lg:p-14 rounded-[2.5rem] border-teal-400/30 bg-[#08080a]/80 backdrop-blur-2xl shadow-[0_30px_80px_rgba(8,145,178,0.15)] relative overflow-hidden">
                            <div class="absolute -top-20 -left-20 w-40 h-40 bg-teal-500/20 rounded-full blur-[60px] pointer-events-none"></div>
                            
                            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-teal-500/30 bg-teal-500/10 text-teal-400">
                                <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Structural Integrity</span>
                            </div>
                            <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6 drop-shadow-lg">
                                HIGH-STRENGTH <br> <span class="text-gradient-animated">FRAME</span>
                            </h2>
                            <div class="w-12 h-1 bg-gradient-to-r from-teal-400 to-blue-600 mb-6 rounded-full shadow-[0_0_15px_rgba(45,212,191,0.5)]"></div>
                            <p class="text-gray-400 text-sm md:text-base lg:text-lg leading-relaxed font-light">
                                Rangka berkekuatan tinggi meningkatkan kekakuan dan stabilitas keseluruhan, memberikan perlindungan yang kokoh dan penanganan yang presisi.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-24 md:py-32 bg-[#050505] relative z-20 overflow-hidden border-t border-white/5 bg-noise">
            <div class="absolute bottom-0 right-0 w-[400px] h-[400px] bg-indigo-600/10 rounded-full blur-[120px] pointer-events-none z-0"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="flex flex-col lg:flex-row-reverse items-center gap-12 lg:gap-20">
                    <div class="w-full lg:w-5/12 reveal-right">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-indigo-500/20 bg-indigo-500/5 text-indigo-400">
                            <span class="text-[9px] md:text-[10px] font-bold tracking-[0.3em] uppercase">Impact Absorption</span>
                        </div>
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl text-white uppercase tracking-tighter leading-tight mb-6">
                            REAR <span class="text-indigo-400">SUB-FRAME</span> <br> PROTECTION
                        </h2>
                        <div class="w-12 h-1 bg-gradient-to-r from-indigo-500 to-purple-600 mb-6 rounded-full"></div>
                        <p class="text-gray-400 text-sm md:text-lg leading-relaxed font-light">
                            Rangka bawah belakang yang diperkuat menambahkan lapisan perlindungan ekstra, membantu menyerap benturan dan melindungi komponen-komponen penting dalam tabrakan.
                        </p>
                    </div>

                    <div class="w-full lg:w-7/12 reveal-left delay-100">
                        <div class="glass-panel p-2 rounded-[2.5rem] border-indigo-500/20 overflow-hidden group shadow-[0_20px_50px_rgba(79,70,229,0.05)]">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2---rear-subprotection-frame-MlES29BzY3UTLzl8.jpg" alt="Rear Sub-Frame Protection" class="w-full h-auto rounded-[2rem] transition-transform duration-[2000ms] group-hover:scale-105 opacity-90 group-hover:opacity-100 mix-blend-lighten">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEKSI DIVE INTO DETAILS -->
        <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#050505] overflow-hidden border-t border-white/10">
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[500px] h-[500px] bg-teal-600/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

            <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
                <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                    <div class="inline-flex items-center gap-3 mb-4 px-4 py-2 rounded-full border border-teal-500/30 bg-teal-500/10 text-teal-400 shadow-sm animate-float">
                        <span class="text-[10px] tracking-[0.3em] font-bold uppercase">The Blueprint</span>
                    </div>
                    <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 leading-tight drop-shadow-sm">
                        Dive Into <span class="text-gradient-animated">The Details</span>
                    </h2>
                    <p class="text-gray-400 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed">
                        Dapatkan pandangan lebih dekat pada fitur-fitur canggih dan spesifikasi Geely EX2, yang dirancang untuk menetapkan standar baru kendaraan elektrik urban.
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start">
                    <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                        <a href="{{ route('models.ex2.exterior') }}" class="relative block w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group shadow-md border border-teal-500 cursor-pointer">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg" alt="Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-teal-400 text-[10px] uppercase font-bold tracking-widest mb-1 drop-shadow-md">Currently Viewing</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-teal-600 backdrop-blur-md flex items-center justify-center text-white shadow-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('models.ex2') }}#experience" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-white/10">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/skyline-white-YQe9py6QFEDr79dt.webp" alt="Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-300 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-teal-400 transition-colors">Discover</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-teal-600 transition-colors duration-300">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>

                        <a href="{{ route('models.ex2.specification') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block shadow-md hover:shadow-xl transition-shadow duration-500 border border-white/10">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-9-driving-pleasure-geely-ex2-mrThxF1DGtduy9Ih.webp" alt="Specification" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/30 to-transparent"></div>
                            
                            <div class="absolute inset-0 p-6 md:p-8 flex items-end justify-between">
                                <div>
                                    <p class="text-gray-300 text-[10px] uppercase font-bold tracking-widest mb-1 group-hover:text-teal-400 transition-colors">Learn More</p>
                                    <h3 class="text-white font-geely text-2xl md:text-4xl uppercase tracking-tighter drop-shadow-md">Specification</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white group-hover:bg-teal-600 transition-colors duration-300">
                                    <svg class="w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                        <div class="glass-panel p-6 md:p-8 rounded-[1.5rem] md:rounded-[2rem] flex flex-col shadow-2xl relative overflow-hidden group hover:border-white/20 transition-colors duration-500">
                            <h4 class="text-white font-geely text-2xl md:text-3xl mb-1 relative z-10 drop-shadow-sm">Dimensions</h4>
                            <p class="text-gray-400 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                            
                            <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                                <div class="border-l-2 border-teal-500 pl-4">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-sm">4135</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-sm">1805</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-sm">1580</p>
                                </div>
                                <div class="border-l-2 border-teal-500 pl-4">
                                    <p class="text-gray-400 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                    <p class="font-geely text-3xl md:text-4xl text-white drop-shadow-sm">2650</p>
                                </div>
                            </div>

                            <div class="w-full relative mt-8 opacity-60 group-hover:opacity-80 transition-opacity duration-500 invert">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="EX2 Sketch" loading="lazy" class="w-full h-auto object-contain">
                            </div>
                        </div>

                        <div class="flex flex-col gap-3 w-full">
                            <a href="{{ route('models.ex2.specification') }}" class="w-full py-4 md:py-5 rounded-full bg-emerald-500 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:bg-emerald-400 transition-colors duration-300 shadow-[0_0_20px_rgba(16,185,129,0.3)] btn-shimmer">
                                Show Full Specs
                            </a>
                            <div class="flex flex-col sm:flex-row gap-3 w-full">
                                <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-white/20 text-white font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-white/10 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                    Brochure
                                </a>
                                <a href="{{ route('test-drive') }}" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-white/20 text-white font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:bg-white/10 transition-colors duration-300 flex items-center justify-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                    Book Test Drive
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- LIGHTBOX MODAL -->
    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-[#050505]/95 backdrop-blur-xl opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-6 right-6 md:top-10 md:right-10 text-white/60 hover:text-white transition-colors bg-white/5 p-2 rounded-full border border-white/10 hover:bg-white/10 cursor-pointer" style="z-index: 10000;">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[85vh] w-full flex justify-center items-center pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[80vh] md:max-h-[90vh] object-contain rounded-xl shadow-[0_25px_50px_-12px_rgba(0,0,0,0.5)] transition-transform duration-300 transform scale-95">
            </div>
        </div>
    </div>

    <!-- Instagram Floating Button -->
    <a href="https://www.instagram.com/geelyfatmawati.id/?hl=en" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 md:bottom-10 md:right-10 z-50 flex items-center justify-center w-14 h-14 bg-gradient-to-tr from-[#f09433] via-[#e6683c] to-[#bc1888] rounded-full shadow-[0_10px_25px_rgba(225,48,108,0.5)] hover:scale-110 hover:shadow-[0_15px_35px_rgba(225,48,108,0.7)] transition-all duration-300 group">
        <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
        </svg>
        <span class="absolute right-16 px-3 py-1.5 bg-white text-black text-[10px] font-bold tracking-widest uppercase rounded-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none shadow-xl">
            Follow Us
        </span>
    </a>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = { threshold: 0.15 };
            const revealObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                    }
                });
            }, observerOptions);
            document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale').forEach(el => revealObserver.observe(el));

            const frameExt = document.getElementById('iframe-exterior');
            const colorNameDisplay = document.getElementById('active-color-name');
            const swatches = document.querySelectorAll('.swatch-ext');
            const studioBg = document.getElementById('360-bg-container');

            swatches.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    swatches.forEach(s => {
                        s.classList.remove('active', 'border-white', 'ring-1', 'ring-white/50', 'ring-offset-2', 'ring-offset-transparent');
                        s.classList.add('border-white/20');
                    });
                    swatch.classList.add('active', 'border-white', 'ring-1', 'ring-white/50', 'ring-offset-2', 'ring-offset-transparent');
                    swatch.classList.remove('border-white/20');
                    
                    colorNameDisplay.style.opacity = 0;
                    setTimeout(() => {
                        colorNameDisplay.textContent = swatch.getAttribute('data-name');
                        colorNameDisplay.style.color = swatch.getAttribute('data-text-color');
                        studioBg.style.backgroundColor = swatch.getAttribute('data-bg-color');
                        colorNameDisplay.style.opacity = 1;
                    }, 150);
                    
                    frameExt.src = swatch.getAttribute('data-src');
                });
            });
        });

        // Lightbox Logic
        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');

        window.openLightbox = function(imgSrc) {
            lightboxImg.src = imgSrc;
            lightboxImg.classList.replace('scale-95', 'scale-100');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });
            document.body.style.overflow = 'hidden';
        }

        window.closeLightbox = function(e) {
            if (e && e.target !== lightbox && e.target.closest('button') === null && e.target !== lightboxImg) return;
            lightboxImg.classList.replace('scale-100', 'scale-95');
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
                document.body.style.overflow = '';
            }, 300); 
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    </script>

    <script type="application/ld+json">
    {
      "@@context": "https://schema.org/",
      "@@type": "Product",
      "name": "Eksterior Geely EX2 2024",
      "image": [
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/banner_ex2b-Rcl937dqFR7EP4xN.jpg",
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg",
        "https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-wheels-TAYE4pXuR33qQUOu.jpg"
      ],
      "description": "Eksterior mobil listrik Geely EX2. Desain pemenang penghargaan dengan pencahayaan LED cerdas, velg 16 inch cloverleaf, dan struktur bodi yang kokoh.",
      "brand": {
        "@@type": "Brand",
        "name": "Geely"
      },
      "url": "https://geelyfatmawati.id/models/ex2/exterior",
      "category": "Electric Vehicle Exterior"
    }
    </script>
</x-layouts.app>
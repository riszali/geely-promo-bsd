<x-layouts.app>
    <x-slot name="title">Spesifikasi Lengkap Geely EX5 | Jarak Tempuh, Baterai & Performa</x-slot>
    
    @push('head')
        <meta name="description" content="Pelajari spesifikasi teknis lengkap Geely EX5. Temukan informasi detail mengenai jarak tempuh 430 km WLTP, baterai Aegis Short Blade 60.22 kWh, performa motor 160 kW, dan fitur keamanan Euro NCAP.">
        <meta name="keywords" content="Geely EX5, Spesifikasi Geely EX5, Mobil Listrik Geely, Geely EV, Kapasitas Baterai EX5, Jarak Tempuh EX5, Fitur Geely EX5">
        <link rel="canonical" href="{{ url()->current() }}">
        <meta property="og:title" content="Spesifikasi Lengkap Geely EX5 | Jarak Tempuh, Baterai & Performa">
        <meta property="og:description" content="Pelajari spesifikasi teknis lengkap Geely EX5. Temukan informasi detail mengenai jarak tempuh 430 km WLTP, baterai Aegis Short Blade 60.22 kWh, performa motor 160 kW, dan fitur keamanan Euro NCAP.">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="Spesifikasi Lengkap Geely EX5 | Jarak Tempuh, Baterai & Performa">
        <meta name="twitter:description" content="Pelajari spesifikasi teknis lengkap Geely EX5. Temukan informasi detail mengenai jarak tempuh 430 km WLTP, baterai Aegis Short Blade 60.22 kWh, performa motor 160 kW, dan fitur keamanan Euro NCAP.">
    @endpush

    <style>
        html, body { 
            scroll-behavior: smooth; 
            background-color: #f8fafc; 
            color: #111827;
            overflow-x: clip; 
            font-family: 'Inter', sans-serif;
        }

        .glass-island {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-island:hover {
            background: rgba(255, 255, 255, 0.95);
            border: 1px solid rgba(244, 114, 182, 0.5);
            box-shadow: 0 30px 60px rgba(236, 72, 153, 0.15), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        .glass-panel-light {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.4s ease;
        }
        
        .glass-panel-light:hover {
            border-color: rgba(244, 114, 182, 0.4);
            box-shadow: 0 20px 40px rgba(236, 72, 153, 0.1);
        }

        .ambient-glow-pink {
            background: radial-gradient(circle, rgba(244, 114, 182, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
            mix-blend-mode: multiply;
        }

        .text-gradient-premium {
            background: linear-gradient(135deg, #111827 10%, #ec4899 70%, #be185d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-noise-overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        .spec-row:last-child { border-bottom: none; padding-bottom: 0; }
        .spec-row:first-child { padding-top: 0; }
        .spec-row:hover {
            border-bottom-color: rgba(244, 114, 182, 0.4);
            background: linear-gradient(90deg, transparent, rgba(236, 72, 153, 0.05) 50%, transparent);
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            border-radius: 6px;
        }

        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }
        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }

        .btn-shimmer { position: relative; overflow: hidden; }
        .btn-shimmer::after {
            content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }

        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(0,0,0,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(0,0,0,0.03) 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>

    <div class="w-full overflow-hidden pt-24 pb-24 relative min-h-screen bg-[#f8fafc] bg-noise-overlay text-gray-900">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] ambient-glow-pink opacity-70 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-4 sm:px-8 md:px-12 lg:px-16 xl:px-20 relative z-10">
            
            <div class="mb-10 md:mb-14 flex flex-col items-center text-center reveal-up">
                <a href="{{ route('models.ex5') }}" class="inline-flex items-center gap-2 text-gray-500 hover:text-pink-600 text-[10px] md:text-xs font-bold tracking-widest uppercase transition-colors mb-6 group">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Overview
                </a>
                
                <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 shadow-sm">
                    <span class="text-pink-600 text-[9px] tracking-[0.4em] font-bold uppercase">Technical Data</span>
                </div>
                <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 leading-tight drop-shadow-sm">
                    Full <span class="text-gradient-premium">Specifications</span>
                </h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 auto-rows-min reveal-up delay-100">
                
                <div class="glass-island rounded-[2rem] md:col-span-2 lg:row-span-2 relative overflow-hidden group h-full flex flex-col justify-between">
                    <div class="absolute inset-0 bg-grid-pattern opacity-50 z-0 pointer-events-none"></div>
                    <div class="p-6 md:p-8 z-10 flex justify-between items-start">
                        <div>
                            <p class="text-gray-500 text-[10px] uppercase tracking-widest mb-1 font-bold">Architecture Blueprint</p>
                            <p class="font-geely text-2xl md:text-3xl text-gray-900 tracking-wide">Variant PRO / MAX</p>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-pink-200 flex items-center justify-center bg-pink-50 shadow-sm">
                            <svg class="w-5 h-5 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    <div class="relative w-full flex-grow flex items-center justify-center p-4 z-10">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="EX5 Blueprint" class="w-full max-w-2xl h-auto object-contain mix-blend-multiply opacity-80 group-hover:opacity-100 group-hover:scale-[1.03] transition-all duration-700">
                    </div>
                </div>

                <div class="glass-island p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-pink-300/30 rounded-full blur-[40px] pointer-events-none"></div>
                    <p class="text-gray-500 text-[9px] font-bold tracking-[0.2em] uppercase mb-2 relative z-10">Driving Range (WLTP)</p>
                    <h3 class="font-geely text-5xl md:text-6xl text-pink-500 leading-none drop-shadow-sm relative z-10">
                        430<span class="text-sm md:text-base text-gray-500 ml-1">km*</span>
                    </h3>
                </div>

                <div class="glass-island p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center gap-4 border-t-4 border-emerald-400 hover:border-emerald-500 h-full">
                    <div class="w-14 h-14 rounded-full bg-emerald-50 border border-emerald-100 flex items-center justify-center text-emerald-600 shadow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-gray-900 font-geely text-xl tracking-wide mb-1">8 Years Warranty</p>
                        <p class="text-gray-500 text-[10px] uppercase tracking-widest">Battery & Drive Motor</p>
                    </div>
                </div>

                <div class="glass-island p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-pink-50 border border-pink-200 flex items-center justify-center text-pink-600 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-gray-900 uppercase tracking-tight">Dimensions</h3>
                    </div>
                    <div class="flex flex-col grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Length</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">4615 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Width</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">1901 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Height</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">1670 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Wheelbase</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">2750 mm</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Seating Capacity</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">5 Seats</span>
                        </div>
                    </div>
                </div>

                <div class="glass-island p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-pink-50 border border-pink-200 flex items-center justify-center text-pink-600 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-gray-900 uppercase tracking-tight">Powertrain</h3>
                    </div>
                    <div class="flex flex-col grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">0-100 km/h</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">6.9 sec</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Top Speed</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">175 km/h</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Max. Power</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">160 kW</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Max. Torque</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">320 N·m</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Battery Capacity</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">60.22 kWh</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Driving Range</span>
                            <span class="text-pink-600 font-bold text-xs md:text-sm text-right">Up to 430 km (WLTP)</span>
                        </div>
                    </div>
                </div>

                <div class="glass-island p-6 sm:p-8 rounded-[2rem] h-full flex flex-col md:col-span-2 lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-red-50 border border-red-200 flex items-center justify-center text-red-600 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-gray-900 uppercase tracking-tight">Safety Data</h3>
                    </div>
                    <div class="flex flex-col grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Euro NCAP</span>
                            <div class="flex items-center gap-1.5">
                                <span class="bg-[#00B4D8] text-white font-bold text-[10px] md:text-xs px-1.5 py-0.5 rounded-sm shadow-sm">5 Stars</span>
                                <svg class="w-4 h-4 text-gray-900" viewBox="0 0 20 20" fill="currentColor"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </div>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Adult Protection</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">92%</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Child Protection</span>
                            <span class="text-gray-900 font-medium text-xs md:text-sm text-right">88%</span>
                        </div>
                        <div class="spec-row items-start border-none pt-4">
                            <span class="text-gray-500 text-[10px] md:text-[11px] uppercase tracking-wider font-bold mt-1 w-1/3">Main ADAS</span>
                            <ul class="text-gray-900 font-medium text-[10px] md:text-xs text-right space-y-1.5 w-2/3 flex flex-col items-end">
                                <li class="flex justify-end items-center gap-2">Adaptive Cruise (ACC) <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_5px_rgba(236,72,153,0.5)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Lane Keep Assist (LKA) <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_5px_rgba(236,72,153,0.5)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Auto Braking (AEB) <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_5px_rgba(236,72,153,0.5)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Blind Spot (BSD) <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_5px_rgba(236,72,153,0.5)]"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="glass-island p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-pink-200 hover:border-pink-400 bg-white">
                    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-pink-200/40 rounded-full blur-[80px] pointer-events-none group-hover:bg-pink-200/60 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-pink-50 border border-pink-200 w-max shadow-sm">
                            <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            <span class="text-pink-600 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Core Technology</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 tracking-wide mb-4 leading-tight drop-shadow-sm">
                            Global Intelligent New Energy Architecture <span class="text-gradient-premium whitespace-nowrap">(GEA)</span>
                        </h3>
                        <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed max-w-lg">
                            Arsitektur cerdas 4-in-1 yang menggabungkan kemajuan signifikan dalam desain, efisiensi energi, keselamatan, kecerdasan AI, dan kinerja berkendara.
                        </p>
                    </div>
                    <div class="w-full lg:w-7/12 relative min-h-[250px] sm:min-h-[300px] lg:min-h-[350px] overflow-hidden flex items-center justify-center bg-gray-100">
                        <video autoplay muted loop playsinline preload="auto" class="relative z-0 w-full h-auto block transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-90 group-hover:opacity-100">
                            <source src="{{ asset('assets/videos/geaexplain.mp4') }}" type="video/mp4">
                            <source src="{{ asset('videos/geaexplain.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-white via-white/70 to-transparent z-10 pointer-events-none"></div>
                    </div>
                </div>

                <div class="glass-island p-0 rounded-[2rem] flex flex-col-reverse lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-purple-200 hover:border-purple-300 bg-gray-50">
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-purple-200/50 rounded-full blur-[100px] pointer-events-none group-hover:bg-purple-300/40 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-1/2 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-purple-50 border border-purple-200 w-max shadow-sm">
                            <svg class="w-4 h-4 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-purple-600 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Battery Integration</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 tracking-wide mb-2 leading-tight drop-shadow-sm">
                            Cell-to-Body <span class="text-purple-600">(CTB)</span>
                        </h3>
                        <p class="text-gray-500 text-sm md:text-base font-light leading-relaxed mb-8">Integrated Body & Battery Structure</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6">
                            <div class="flex items-center gap-4 p-4 rounded-[1.25rem] bg-white border border-gray-100 hover:border-purple-200 transition-colors shadow-sm">
                                <div class="flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-purple-600 drop-shadow-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16M7 9v6M17 9v6M4 10v4M20 10v4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-purple-600 text-[13px] md:text-sm font-bold mb-0.5">Stronger</h4>
                                    <p class="text-gray-900 text-[11px] md:text-xs font-medium mb-0.5">Battery Protection</p>
                                    <p class="text-gray-500 text-[9px] md:text-[10px] leading-snug">Side Collision Cell 0 Compression</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-[1.25rem] bg-white border border-gray-100 hover:border-purple-200 transition-colors shadow-sm">
                                <div class="flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-purple-600 drop-shadow-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-purple-600 text-[13px] md:text-sm font-bold mb-0.5">Bigger</h4>
                                    <p class="text-gray-900 text-[11px] md:text-xs font-medium mb-0.5">Cabin Space</p>
                                    <p class="text-gray-500 text-[9px] md:text-[10px] leading-snug">Lower the floor height</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-[1.25rem] bg-white border border-gray-100 hover:border-purple-200 transition-colors shadow-sm">
                                <div class="flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-purple-600 drop-shadow-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-purple-600 text-[13px] md:text-sm font-bold mb-0.5">Better</h4>
                                    <p class="text-gray-900 text-[11px] md:text-xs font-medium mb-0.5">Torsional Stiffness</p>
                                    <p class="text-gray-500 text-[9px] md:text-[10px] leading-snug">31000N·m/deg</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-4 p-4 rounded-[1.25rem] bg-white border border-gray-100 hover:border-purple-200 transition-colors shadow-sm">
                                <div class="flex items-center justify-center shrink-0">
                                    <svg class="w-6 h-6 text-purple-600 drop-shadow-sm" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"></path></svg>
                                </div>
                                <div>
                                    <h4 class="text-purple-600 text-[13px] md:text-sm font-bold mb-0.5">More Stable</h4>
                                    <p class="text-gray-900 text-[11px] md:text-xs font-medium mb-0.5">Control Experience</p>
                                    <p class="text-gray-500 text-[9px] md:text-[10px] leading-snug">Lower center of gravity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 relative min-h-[250px] sm:min-h-[350px] overflow-hidden flex items-center justify-center p-6 bg-gradient-to-b lg:bg-gradient-to-r from-transparent via-gray-50 to-gray-50">
                        <img src="{{ asset('images/ctb.webp') }}" alt="CTB Architecture" class="relative z-10 w-full max-w-lg h-auto object-contain transform group-hover:scale-105 transition-transform duration-[2s] ease-out drop-shadow-xl">
                    </div>
                </div>

                <div class="glass-island p-6 md:p-10 rounded-[2rem] flex flex-col lg:flex-row gap-10 items-center md:col-span-2 lg:col-span-3 border-t border-pink-200 group relative overflow-hidden bg-white">
                    <div class="w-full lg:w-1/2 relative z-10">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-pink-50 border border-pink-200">
                            <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-pink-600 text-[10px] tracking-[0.2em] font-bold uppercase">11-in-1 Tech</span>
                        </div>
                        <h2 class="font-geely text-3xl md:text-5xl text-gray-900 mb-6 leading-tight">High Performance<br><span class="text-gradient-premium">Intelligent Electric Drive</span></h2>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                            <div class="p-5 rounded-2xl bg-gray-50 border border-gray-100 text-center group-hover:border-pink-200 transition-colors shadow-sm">
                                <p class="text-pink-600 font-geely text-2xl mb-1">160 kW</p>
                                <p class="text-gray-500 text-[9px] uppercase font-bold tracking-widest">Power</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-gray-50 border border-gray-100 text-center group-hover:border-pink-200 transition-colors shadow-sm">
                                <p class="text-gray-900 font-geely text-2xl mb-1">780 KG</p>
                                <p class="text-gray-500 text-[9px] uppercase font-bold tracking-widest">Weight</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-gray-50 border border-gray-100 text-center group-hover:border-pink-200 transition-colors shadow-sm">
                                <p class="text-gray-900 font-geely text-2xl mb-1">0.079M³</p>
                                <p class="text-gray-500 text-[9px] uppercase font-bold tracking-widest">Volume</p>
                            </div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-600 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_10px_rgba(236,72,153,0.5)]"></span> Best-in-Class Power
                            </li>
                            <li class="flex items-center gap-3 text-gray-600 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_10px_rgba(236,72,153,0.5)]"></span> Lightest-in-Class Weight
                            </li>
                            <li class="flex items-center gap-3 text-gray-600 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-pink-500 shadow-[0_0_10px_rgba(236,72,153,0.5)]"></span> Smallest-in-Class Volume
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2 relative flex justify-center">
                        <img src="{{ asset('images/ied.webp') }}" alt="11-in-1 Drive Unit" class="w-full max-w-md h-auto object-contain transform group-hover:scale-105 transition-transform duration-[2s] drop-shadow-xl">
                    </div>
                </div>

                <div class="glass-island p-0 rounded-[2rem] overflow-hidden flex flex-col md:flex-row md:col-span-2 lg:col-span-3 border-t border-indigo-200 group bg-gray-50">
                    <div class="w-full md:w-7/12 relative min-h-[300px] overflow-hidden flex items-center bg-gray-100">
                        <video autoplay muted loop playsinline preload="auto" class="relative z-0 w-full h-auto block transform group-hover:scale-105 transition-transform duration-[4s] opacity-90 group-hover:opacity-100">
                            <source src="{{ asset('videos/vid3.mp4') }}" type="video/mp4">
                        </video>
                    </div>
                    <div class="w-full md:w-5/12 p-8 md:p-12 flex flex-col justify-center relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 rounded-full bg-indigo-50 border border-indigo-200 w-max shadow-sm">
                            <span class="text-indigo-600 text-[8px] md:text-[9px] tracking-[0.2em] font-bold uppercase">Efficiency Leader</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl text-gray-900 mb-6 leading-tight uppercase tracking-tight">Maksimum <span class="text-indigo-600">Efisiensi</span></h3>
                        <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed">
                            Penggerak listrik cerdas 11in1 merupakan yang terdepan di kelasnya, paling ringan, terkecil, dan paling efisien dalam kategorinya.
                        </p>
                    </div>
                </div>

                <div class="glass-island p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-sky-200 hover:border-sky-300 transition-colors duration-500 bg-white">
                    <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-sky-50 border border-sky-200 w-max shadow-sm">
                            <span class="text-sky-600 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Battery Technology</span>
                        </div>
                        <h3 class="font-geely text-3xl md:text-4xl lg:text-5xl text-gray-900 tracking-wide mb-4 leading-tight drop-shadow-sm">
                            Aegis <span class="text-sky-500">Short Blade Battery</span>
                        </h3>
                        <p class="text-gray-900 text-sm md:text-lg font-light leading-relaxed mb-6">
                            Revolutionary Battery Technology
                        </p>
                        <p class="text-gray-600 text-xs md:text-sm font-light leading-relaxed max-w-md">
                            Generasi terbaru baterai LFP dengan kepadatan energi tinggi dan tingkat keamanan ekstrem, dirancang untuk siklus hidup yang lebih lama dan pengisian daya yang lebih cepat.
                        </p>
                    </div>
                    <div class="w-full lg:w-7/12 relative min-h-[300px] md:min-h-[400px] lg:min-h-[500px] overflow-hidden bg-gray-100">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-[4s] ease-out">
                            <source src="https://a-ap.storyblok.com/f/3000753/x/f2b58cc59a/shortblade_battery.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="glass-island p-0 rounded-[2rem] flex flex-col lg:flex-row-reverse relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-pink-200 hover:border-pink-300 bg-gray-50">
                    <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center w-full lg:w-6/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-pink-50 border border-pink-200 w-max shadow-sm">
                            <svg class="w-4 h-4 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-pink-600 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Energy Replenishment</span>
                        </div>
                        <h3 class="font-geely text-3xl md:text-5xl text-gray-900 tracking-wide mb-6 leading-tight uppercase">
                            Faster <span class="text-gradient-premium">Charging</span>
                        </h3>
                        
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="p-6 rounded-[1.5rem] bg-white border border-gray-100 group-hover:border-pink-200 transition-all duration-500 shadow-sm">
                                <p class="text-[10px] text-gray-500 uppercase tracking-widest mb-1 font-bold">DC Fast Charging</p>
                                <p class="text-pink-500 font-geely text-3xl md:text-4xl">20<span class="text-sm ml-1 text-gray-400">min</span></p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">30% to 80% State of Charge</p>
                            </div>
                            <div class="p-6 rounded-[1.5rem] bg-white border border-gray-100 group-hover:border-pink-200 transition-all duration-500 shadow-sm">
                                <p class="text-[10px] text-gray-500 uppercase tracking-widest mb-1 font-bold">Charging Ratio</p>
                                <p class="text-gray-900 font-geely text-3xl md:text-4xl">1.8C</p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">33% Faster than Average</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 border-t border-gray-200 pt-8">
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Max DC Input</span>
                                <span class="text-gray-900 text-sm font-medium">Up to 100 kW (CCS Standard)</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">AC Slow Charge</span>
                                <span class="text-gray-900 text-sm font-medium">6.1 Hours (10% - 100%)</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Additional Tech</span>
                                <div class="flex items-center gap-3 mt-1">
                                    <span class="px-2 py-0.5 rounded bg-pink-50 border border-pink-200 text-pink-600 text-[9px] font-bold">V2L</span>
                                    <span class="px-2 py-0.5 rounded bg-pink-50 border border-pink-200 text-pink-600 text-[9px] font-bold">V2V</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-6/12 relative min-h-[350px] md:min-h-[450px] lg:min-h-full overflow-hidden bg-gray-100">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[4s]">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/black2-m6L2DO0kVbuDJkwz.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <div class="glass-island p-2 md:p-3 rounded-[2rem] relative overflow-hidden group border-t border-red-200 hover:border-red-300 h-[250px] md:h-auto min-h-[250px] md:col-span-2 flex flex-col bg-white">
                    <div class="relative w-full h-full rounded-[1.5rem] overflow-hidden bg-gray-100 flex-grow">
                        <video autoplay muted loop playsinline preload="auto" class="relative z-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-90 group-hover:opacity-100">
                            <source src="{{ asset('videos/crash-test.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute top-6 right-6 z-10 flex gap-2 shadow-sm">
                            <div class="bg-yellow-400 text-black px-2 py-0.5 rounded text-xs font-bold tracking-wider">★★★★★</div>
                            <div class="bg-gray-900 text-white px-2 py-0.5 rounded text-xs font-bold tracking-widest border border-gray-700">EURO NCAP</div>
                        </div>
                        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-20 pointer-events-none">
                            <div class="inline-flex items-center gap-2 mb-2 md:mb-3 px-3 py-1.5 md:px-4 md:py-1.5 rounded-full bg-red-50 border border-red-200 shadow-sm">
                                <span class="text-red-600 text-[8px] md:text-[9px] tracking-[0.3em] font-bold uppercase">Euro NCAP</span>
                            </div>
                            <h4 class="font-geely text-xl md:text-3xl text-gray-900 tracking-wide leading-none mb-1">Crash Safety Test</h4>
                            <p class="text-gray-600 text-[9px] md:text-[10px] tracking-wider uppercase font-light">Maximum Protection Guaranteed</p>
                        </div>
                    </div>
                </div>

                <div class="glass-island p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-pink-100/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="w-12 h-12 rounded-full border border-pink-200 flex items-center justify-center bg-pink-50 mb-6 group-hover:bg-pink-100 transition-colors shadow-sm">
                        <svg class="w-5 h-5 text-pink-600 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="font-geely text-2xl md:text-3xl text-gray-900 tracking-wide mb-2 relative z-10">Ready to Drive?</h4>
                    <p class="text-gray-500 text-[10px] md:text-xs font-light leading-relaxed mb-8 px-2 relative z-10">
                        Experience the Geely EX5 firsthand and feel the future of mobility.
                    </p>
                    <a href="{{ route('test-drive') }}" class="btn-shimmer w-full py-4 rounded-full bg-pink-500 text-white font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] hover:bg-pink-600 transition-all duration-300 shadow-[0_10px_20px_rgba(236,72,153,0.3)] relative z-10">
                        Book Test Drive
                    </a>
                </div>

            </div>
        </div>
    </div>

    <section id="details" class="py-16 md:py-24 lg:py-32 relative z-30 bg-[#f8fafc] overflow-hidden border-t border-gray-100">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[600px] ambient-glow-pink opacity-50 pointer-events-none z-0"></div>

        <div class="max-w-[1600px] w-full mx-auto px-4 sm:px-8 md:px-12 lg:px-16 relative z-10">
            <div class="text-center mb-12 md:mb-20 max-w-4xl mx-auto px-4 reveal-up">
                <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 mb-6 backdrop-blur-md shadow-sm">
                    <span class="text-pink-600 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase">The Blueprint</span>
                </div>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 leading-tight">
                    Dive Into <span class="text-gradient-premium">The Details</span>
                </h2>
                <p class="text-gray-600 text-xs sm:text-sm md:text-base lg:text-lg font-light leading-relaxed relative z-10">
                    Get a closer look at the Geely EX5’s advanced features and specifications, designed to set a new standard for EV.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-16 items-start relative z-10">
                
                <div class="order-2 lg:order-1 lg:col-span-7 flex flex-col gap-4 reveal-left w-full">
                    
                    <a href="{{ route('models.ex5.exterior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block glass-panel-light p-2 hover:-translate-y-1 transition-all duration-500 shadow-sm">
                        <div class="relative w-full h-full rounded-[1rem] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-m2Wq42Nv3lFqrP1L.webp" alt="Geely EX5 Exterior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out z-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 via-gray-900/40 to-transparent z-10 transition-opacity duration-500 opacity-80 group-hover:opacity-70"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-pink-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Explore</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Exterior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/30 group-hover:bg-pink-500 group-hover:border-pink-400 transition-all duration-500">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="{{ route('models.ex5.interior') }}" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block glass-panel-light p-2 hover:-translate-y-1 transition-all duration-500 shadow-sm">
                        <div class="relative w-full h-full rounded-[1rem] overflow-hidden">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex5-interior-6-yd0bq7dwjki2vqwz-mp84nv1zw8hwGV83.jpg" alt="Geely EX5 Interior" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[1.5s] ease-out z-0 mirror-rhd">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 via-gray-900/40 to-transparent z-10 transition-opacity duration-500 opacity-80 group-hover:opacity-70"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-pink-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Discover</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Interior</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center border border-white/30 group-hover:bg-pink-500 group-hover:border-pink-400 transition-all duration-500">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                    <a href="#" class="relative w-full h-[120px] sm:h-[160px] lg:h-[200px] rounded-[1.5rem] overflow-hidden group block glass-panel-light p-2 shadow-md border-pink-300">
                        <div class="relative w-full h-full rounded-[1rem] overflow-hidden border border-pink-200">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ied-tF2sW5R0UW8pMCMV.webp" alt="Geely EX5 Specification" class="absolute inset-0 w-full h-full object-cover transform scale-105 z-0">
                            <div class="absolute inset-0 bg-gradient-to-r from-gray-900/90 via-gray-900/40 to-transparent z-10 opacity-80"></div>
                            <div class="absolute inset-0 p-6 md:p-8 z-20 flex justify-between items-end">
                                <div>
                                    <span class="text-pink-400 text-[8px] md:text-[10px] tracking-[0.3em] font-bold uppercase mb-1 md:mb-2 block drop-shadow-md">Currently Viewing</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight drop-shadow-lg leading-none">Specs</h3>
                                </div>
                                <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-pink-500 flex items-center justify-center border border-pink-400">
                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="order-1 lg:order-2 lg:col-span-5 flex flex-col gap-8 reveal-right delay-200 w-full">
                    
                    <div class="glass-island p-6 md:p-8 flex flex-col relative overflow-hidden group rounded-[2rem]">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-pink-200/50 rounded-full blur-[50px] group-hover:bg-pink-300/40 transition-colors duration-500 pointer-events-none"></div>

                        <h4 class="text-gray-900 font-geely text-2xl md:text-3xl mb-1 relative z-10">Dimensions</h4>
                        <p class="text-gray-500 text-[10px] md:text-xs font-bold tracking-widest uppercase mb-8 relative z-10">(in milimeters)</p>
                        
                        <div class="grid grid-cols-2 gap-6 md:gap-8 relative z-10 mb-4">
                            <div class="border-l-2 border-pink-300 pl-4 group-hover:border-pink-500 transition-colors">
                                <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Length</p>
                                <p class="font-geely text-3xl md:text-4xl text-gray-900">4615</p>
                            </div>
                            <div class="border-l-2 border-pink-300 pl-4 group-hover:border-pink-500 transition-colors">
                                <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Width</p>
                                <p class="font-geely text-3xl md:text-4xl text-gray-900">1901</p>
                            </div>
                            <div class="border-l-2 border-pink-300 pl-4 group-hover:border-pink-500 transition-colors">
                                <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Height</p>
                                <p class="font-geely text-3xl md:text-4xl text-gray-900">1670</p>
                            </div>
                            <div class="border-l-2 border-pink-300 pl-4 group-hover:border-pink-500 transition-colors">
                                <p class="text-gray-500 text-[10px] uppercase tracking-wider mb-1">Wheelbase</p>
                                <p class="font-geely text-3xl md:text-4xl text-gray-900">2750</p>
                            </div>
                        </div>

                        <div class="w-full relative mt-8 opacity-80 group-hover:opacity-100 transition-opacity duration-500 z-10 mix-blend-multiply">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="Geely EX5 Sketch" loading="lazy" class="w-full h-auto object-contain">
                        </div>
                    </div>

                    <div class="flex flex-col gap-3 w-full relative z-10">
                        <div class="flex flex-col sm:flex-row gap-3 w-full">
                            <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:border-pink-300 hover:text-pink-600 shadow-sm transition-colors duration-300 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                Brochure
                            </a>
                            <a href="#" class="w-full sm:w-1/2 py-3 md:py-4 rounded-full border border-gray-200 bg-white text-gray-700 font-bold text-[9px] md:text-[10px] tracking-widest uppercase text-center hover:border-pink-300 hover:text-pink-600 shadow-sm transition-colors duration-300 flex items-center justify-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                                Owner's Manual
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

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
        });
    </script>
</x-layouts.app>
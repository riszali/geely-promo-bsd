<x-layouts.app>
    <!-- ==========================================
         GLOBAL STYLES (Konsisten dengan EX5 Utama)
    =========================================== -->
    <style>
        html, body { 
            background-color: #050505; 
            color: white; 
            scroll-behavior: smooth; 
            overflow-x: hidden;
        }
        
        /* Premium Glass Panel - Bento Box Style */
        .glass-panel {
            background: linear-gradient(135deg, rgba(25, 25, 30, 0.4) 0%, rgba(25, 25, 30, 0.2) 100%);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: transform 0.4s cubic-bezier(0.4, 0, 0.2, 1), border-color 0.4s ease;
        }
        .glass-panel:hover {
            border-color: rgba(34, 211, 238, 0.3);
            transform: translateY(-4px);
        }

        /* Text Gradients */
        .text-gradient-cyan {
            background: linear-gradient(to right, #22d3ee, #3b82f6);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Animated Blue Gradient for Blade Battery */
        .text-gradient-blue-animated {
            background: linear-gradient(90deg, #3b82f6, #22d3ee, #60a5fa, #3b82f6);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: shine 4s linear infinite;
        }

        @keyframes shine {
            to { background-position: 200% center; }
        }

        /* Compact Hoverable Table Row Styles for Bento */
        .spec-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }
        .spec-row:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }
        .spec-row:first-child {
            padding-top: 0;
        }
        .spec-row:hover {
            border-bottom-color: rgba(34, 211, 238, 0.3);
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.02) 50%, transparent);
            padding-left: 0.5rem;
            padding-right: 0.5rem;
            border-radius: 6px;
        }

        /* Shimmer Button from Main Page */
        .btn-shimmer {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
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
        @keyframes shimmer {
            100% { transform: rotate(45deg) translateX(100%); }
        }

        /* Pattern Background for Blueprint Box */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 30px 30px;
        }
    </style>

    <div class="w-full overflow-hidden pt-24 pb-24 relative min-h-screen">
        <!-- Ambient Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 relative z-10">
            
            <!-- Breadcrumb & Header -->
            <div class="mb-10 md:mb-14 flex flex-col items-center text-center">
                <a href="{{ route('models.ex2') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-cyan-400 text-[10px] md:text-xs font-bold tracking-widest uppercase transition-colors mb-6 group">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Overview
                </a>
                
                <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl shadow-lg">
                    <span class="text-cyan-400 text-[9px] tracking-[0.4em] font-bold uppercase">Technical Data</span>
                </div>
                <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-tight drop-shadow-xl">
                    Full <span class="text-gradient-cyan">Specifications</span>
                </h1>
            </div>

            <!-- ==========================================
                 BENTO GRID LAYOUT
            =========================================== -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 auto-rows-min">
                
                <!-- BENTO ITEM 1: Blueprint Graphic -->
                <div class="glass-panel rounded-[2rem] md:col-span-2 lg:row-span-2 relative overflow-hidden group h-full flex flex-col justify-between">
                    <div class="absolute inset-0 bg-grid-pattern opacity-50 z-0 pointer-events-none"></div>
                    <div class="p-6 md:p-8 z-10 flex justify-between items-start">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase tracking-widest mb-1 font-bold">Architecture Blueprint</p>
                            <p class="font-geely text-2xl md:text-3xl text-white tracking-wide">Variant PRO / MAX</p>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center bg-white/5 backdrop-blur-md">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    <div class="relative w-full flex-grow flex items-center justify-center p-4 z-10">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex2-9YIJTReOoLDy0jje.webp" alt="EX2 Blueprint" class="w-full max-w-2xl h-auto object-contain invert mix-blend-screen opacity-90 group-hover:scale-[1.03] transition-transform duration-700">
                    </div>
                </div>

                <!-- BENTO ITEM 2: Range Highlight -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] pointer-events-none"></div>
                    <p class="text-gray-400 text-[9px] font-bold tracking-[0.2em] uppercase mb-2 relative z-10">Driving Range (NEDC)</p>
                    <h3 class="font-geely text-5xl md:text-6xl text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.3)] relative z-10">
                        395<span class="text-sm md:text-base text-gray-400 ml-1">km*</span>
                    </h3>
                </div>

                <!-- BENTO ITEM 3: Warranty -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-emerald-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center bg-white/5 mb-4">
                        <svg class="w-6 h-6 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <p class="text-white font-geely text-xl tracking-wide mb-1">8 Years Warranty</p>
                    <p class="text-gray-400 text-[10px] uppercase tracking-widest">Battery & Drive Motor</p>
                </div>

                <!-- BENTO ITEM 4: Dimensions -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-cyan-500/20 border border-cyan-400/30 flex items-center justify-center text-cyan-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Dimensions</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">L × W × H</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">4135 × 1805 × 1580 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Wheelbase</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">2650 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Min. Ground Clearance</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">160.8 mm (PRO) / 162 mm (MAX)</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Turning Radius</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">4.95 m</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Trunk Capacity</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">375 / 1320 L</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Seats</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">5</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 5: Powertrain -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-indigo-500/20 border border-indigo-400/30 flex items-center justify-center text-indigo-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">New Energy</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Drive Type</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">Rear-Wheel Drive (RWD)</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Motor Type</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">Permanent Magnet Sync.</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Max. Power & Torque</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">85 kW / 150 N·m</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">0-50 / 0-100 km/h</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">4.6 s / 11.5 s</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Top Speed</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">130 km/h</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Battery (Cap/Type)</span>
                            <span class="text-white font-medium text-[10px] md:text-[11px] text-right">40.8 kWh (Lithium Iron Phosphate)</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Drive Mode</span>
                            <span class="text-white font-medium text-[10px] md:text-xs text-right">Eco/Comfort/Sport</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 6: Safety Data -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col md:col-span-2 lg:col-span-1">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-red-500/20 border border-red-500/30 flex items-center justify-center text-red-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Safety Data</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Euro NCAP</span>
                            <span class="text-yellow-400/90 italic font-medium text-[10px] md:text-xs text-right">Beri tahu spesifikasinya</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Adult Protection</span>
                            <span class="text-yellow-400/90 italic font-medium text-[10px] md:text-xs text-right">Beri tahu spesifikasinya</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Child Protection</span>
                            <span class="text-yellow-400/90 italic font-medium text-[10px] md:text-xs text-right">Beri tahu spesifikasinya</span>
                        </div>
                        <div class="spec-row items-start border-none pt-4">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold mt-1 w-1/3">Main ADAS</span>
                            <ul class="text-white font-medium text-[10px] md:text-xs text-right space-y-1.5 w-2/3 flex flex-col items-end">
                                <li class="flex justify-end items-center gap-2">Adaptive Cruise (ACC) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Auto Braking (AEB) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Lane Departure (LDW) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Blind Spot (BSD) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 7: Flyme Auto / Cockpit -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-cyan-500/20 hover:border-cyan-400/50">
                    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none group-hover:bg-cyan-500/20 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 w-max shadow-[0_0_15px_rgba(34,211,238,0.1)]">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            <span class="text-cyan-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Core Technology</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-wide mb-4 leading-tight drop-shadow-md">
                            Intelligent Cockpit System <span class="text-gradient-cyan whitespace-nowrap">(FLYME AUTO)</span>
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed max-w-lg">
                            Kabin cerdas yang dirancang untuk kesenangan berkendara, mengintegrasikan layar sentuh 14.6" HD dan instrumen cluster 8.8" LCD dengan kontrol aplikasi jarak jauh.
                        </p>
                    </div>
                    <div class="w-full lg:w-7/12 relative min-h-[250px] sm:min-h-[300px] lg:min-h-[350px] overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#050505] via-[#050505]/40 lg:via-[#050505]/20 to-transparent z-10 pointer-events-none"></div>
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100 object-center">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_flyme-auto-ex2-IlRhJbwXW5P5Ic9q.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- BENTO ITEM 8: Space Utilization -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col-reverse lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-indigo-500/20 hover:border-indigo-400/50 bg-[#0a0a0c]">
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-indigo-500/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-indigo-500/20 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-7/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 w-max shadow-[0_0_15px_rgba(99,102,241,0.1)]">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-indigo-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Body Integration</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-wide mb-2 leading-tight drop-shadow-md">
                            Maximum Space <span class="text-indigo-400">(STORAGE)</span>
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8">Intelligent Space Utilization</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6">
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-10 h-10 flex shrink-0 items-center justify-center font-geely text-indigo-400 text-xl border border-white/10 rounded-lg">1</div>
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">1320L</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Rear Trunk</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Kapasitas maksimal kabin belakang</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-10 h-10 flex shrink-0 items-center justify-center font-geely text-indigo-400 text-xl border border-white/10 rounded-lg">2</div>
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">70L</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Front Trunk</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Ruang penyimpanan ekstra di depan</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-10 h-10 flex shrink-0 items-center justify-center font-geely text-indigo-400 text-xl border border-white/10 rounded-lg">3</div>
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">Bridge</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Style Storage</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Desain konsol tengah melayang</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-10 h-10 flex shrink-0 items-center justify-center font-geely text-indigo-400 text-xl border border-white/10 rounded-lg">?</div>
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">Lainnya</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Spesifikasi Detail</p>
                                    <p class="text-yellow-400/90 italic text-[9px] md:text-[10px] leading-snug">Beri tahu spesifikasinya</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-5/12 relative min-h-[200px] sm:min-h-[250px] overflow-hidden flex items-center justify-center p-6 bg-gradient-to-b lg:bg-gradient-to-r from-transparent via-white/5 to-white/5">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(99,102,241,0.1)_0%,transparent_70%)] pointer-events-none"></div>
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/space-2-m-mExBnw2wvEFt7MRV.webp" alt="Space Utilization" class="relative z-10 w-2/3 max-w-[250px] h-auto object-contain transform group-hover:scale-105 transition-transform duration-[2s] ease-out drop-shadow-2xl">
                    </div>
                </div>

                <!-- BENTO ITEM 9: 11-in-1 INTELLIGENT ELECTRIC DRIVE -->
                <div class="glass-panel p-6 md:p-10 rounded-[2rem] flex flex-col lg:flex-row gap-10 items-center md:col-span-2 lg:col-span-3 border-t border-cyan-500/20 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-600/5 rounded-full blur-[100px] pointer-events-none"></div>
                    <div class="w-full lg:w-1/2 relative z-10">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-cyan-400 text-[10px] tracking-[0.2em] font-bold uppercase">11-in-1 Tech</span>
                        </div>
                        <h2 class="font-geely text-3xl md:text-5xl text-white mb-6 leading-tight">High Performance<br><span class="text-gradient-cyan">Intelligent Electric Drive</span></h2>
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-center group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-cyan-400 font-geely text-2xl mb-1">85 kW</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Max Power</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-center group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-white font-geely text-2xl mb-1">150 N·m</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Max Torque</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-center group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-white font-geely text-2xl mb-1">11-in-1</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Integration</p>
                            </div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Integrasi 11 komponen utama menjadi 1 modul ringkas
                            </li>
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Efisiensi sistem komprehensif mencapai 90.04%
                            </li>
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Menghemat energi dan meminimalisir ruang
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2 relative flex justify-center">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/ex2_11-1-cuE0iVuLy4jreDeI.jpg" alt="11-in-1 Drive Unit" class="w-full max-w-md h-auto rounded-[2rem] object-cover transform group-hover:scale-105 transition-transform duration-[2s] drop-shadow-[0_0_30px_rgba(34,211,238,0.2)] opacity-80 mix-blend-screen border border-white/10">
                    </div>
                </div>

                <!-- BENTO ITEM 10: Rear Wheel Drive -->
                <div class="glass-panel p-0 rounded-[2rem] overflow-hidden flex flex-col md:flex-row md:col-span-2 lg:col-span-3 border-t border-white/10 group bg-[#06070a]">
                    <div class="w-full md:w-7/12 relative min-h-[300px] overflow-hidden">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-9-driving-pleasure-geely-ex2-mrThxF1DGtduy9Ih.webp" alt="Rear Wheel Drive" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-[4s]">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#06070a] via-transparent to-transparent z-10"></div>
                    </div>
                    <div class="w-full md:w-5/12 p-8 md:p-12 flex flex-col justify-center relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 w-max">
                            <span class="text-indigo-400 text-[8px] md:text-[9px] tracking-[0.2em] font-bold uppercase">Dynamic Handling</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl text-white mb-6 leading-tight uppercase tracking-tight">Rear-Wheel <span class="text-indigo-400">Drive</span></h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed">
                            Penggerak RWD (Rear-Wheel Drive) pada Geely EX2 memberikan keseimbangan dinamis yang superior, manuver yang gesit di jalanan kota, dan akselerasi responsif.
                        </p>
                    </div>
                </div>

                <!-- BENTO ITEM 11: LFP BATTERY -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-blue-500/20 hover:border-blue-500/40 transition-colors duration-500">
                    <!-- Text Content -->
                    <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 w-max shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                            <span class="text-blue-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Battery Technology</span>
                        </div>
                        <h3 class="font-geely text-3xl md:text-4xl lg:text-5xl text-white tracking-wide mb-4 leading-tight">
                            Lithium Iron Phosphate <br><span class="text-gradient-blue-animated">(LFP) Battery</span>
                        </h3>
                        <p class="text-gray-300 text-sm md:text-lg font-light leading-relaxed mb-6">
                            Safety and Durability
                        </p>
                        <p class="text-gray-400 text-xs md:text-sm font-light leading-relaxed max-w-md">
                            Generasi baterai LFP dengan tingkat keamanan ekstrem dan umur pakai yang panjang, dirancang khusus untuk mobilitas elektrik harian Anda.
                        </p>
                    </div>

                    <!-- Video Content -->
                    <div class="w-full lg:w-7/12 relative min-h-[300px] md:min-h-[400px] lg:min-h-[500px] overflow-hidden bg-black">
                        <!-- Using a generic battery/tech video loop from Zyro assets -->
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-[4s] ease-out">
                            <source src="https://a-ap.storyblok.com/f/3000753/x/f2b58cc59a/shortblade_battery.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#050505] via-transparent to-transparent pointer-events-none z-10"></div>
                    </div>
                </div>

                <!-- BENTO ITEM 12: FASTER CHARGING -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col lg:flex-row-reverse relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-cyan-500/20 hover:border-cyan-400/40 bg-[#08080a]">
                    <!-- Text Content -->
                    <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center w-full lg:w-6/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 w-max">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-cyan-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Energy Replenishment</span>
                        </div>
                        <h3 class="font-geely text-3xl md:text-5xl text-white tracking-wide mb-6 leading-tight uppercase">
                            Faster <span class="text-gradient-cyan">Charging</span>
                        </h3>
                        
                        <!-- Core Stats -->
                        <div class="grid grid-cols-2 gap-4 mb-8">
                            <div class="p-6 rounded-[1.5rem] bg-white/5 border border-white/5 group-hover:border-cyan-500/30 transition-all duration-500">
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mb-1 font-bold">DC Fast Charging</p>
                                <p class="text-cyan-400 font-geely text-3xl md:text-4xl">25<span class="text-sm ml-1 text-gray-300">min</span></p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">30% to 80% SOC</p>
                            </div>
                            <div class="p-6 rounded-[1.5rem] bg-white/5 border border-white/5 group-hover:border-cyan-500/30 transition-all duration-500">
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mb-1 font-bold">AC Slow Charging</p>
                                <p class="text-white font-geely text-3xl md:text-4xl">6.5<span class="text-sm ml-1 text-gray-300">h</span></p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">10% - 100% SOC</p>
                            </div>
                        </div>

                        <!-- Technical Grid Condensed -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 border-t border-white/5 pt-8">
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Max DC Input</span>
                                <span class="text-white text-sm font-medium">70 kW</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">V2L Power Supply</span>
                                <span class="text-white text-sm font-medium">Yes</span>
                            </div>
                            <div class="flex flex-col sm:col-span-2">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Remote Scheduled Charging</span>
                                <span class="text-white text-sm font-medium">Yes (Max Variant)</span>
                            </div>
                        </div>
                    </div>

                    <!-- Video Content -->
                    <div class="w-full lg:w-6/12 relative min-h-[350px] md:min-h-[450px] lg:min-h-full overflow-hidden">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-80 group-hover:scale-105 transition-transform duration-[4s]">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/black2-m6L2DO0kVbuDJkwz.mp4" type="video/mp4">
                        </video>
                        <!-- Gradient Overlays for integration -->
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-l from-[#08080a] via-[#08080a]/30 to-transparent z-10"></div>
                        <div class="absolute inset-0 bg-cyan-500/5 mix-blend-overlay"></div>
                    </div>
                </div>

                <!-- BENTO ITEM 13: Safety NCAP Video -->
                <div class="glass-panel p-2 md:p-3 rounded-[2rem] relative overflow-hidden group border-t border-red-500/20 hover:border-red-500/40 h-[250px] md:h-auto min-h-[250px] md:col-span-2 flex flex-col">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-red-500/15 rounded-full blur-[80px] pointer-events-none group-hover:bg-red-500/25 transition-colors duration-700"></div>
                    <div class="relative w-full h-full rounded-[1.5rem] overflow-hidden bg-black/50 flex-grow">
                        <!-- Video Placeholder -->
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-aeb-automatic-emergency-braking-YX4jabpp5XHpnDvB.mp4" type="video/mp4">
                        </video>
                        <!-- Top Text -->
                        <div class="absolute top-6 right-6 z-10 flex gap-2">
                            <div class="bg-yellow-400 text-black px-2 py-0.5 rounded text-xs font-bold tracking-wider">★★★★★</div>
                            <div class="bg-black/50 backdrop-blur-md text-white px-2 py-0.5 rounded text-xs font-bold tracking-widest border border-white/20">EURO NCAP</div>
                        </div>
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent pointer-events-none"></div>
                        <!-- Bottom Text -->
                        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-10 pointer-events-none">
                            <div class="inline-flex items-center gap-2 mb-2 md:mb-3 px-3 py-1.5 md:px-4 md:py-1.5 rounded-full bg-red-500/20 border border-red-500/30 backdrop-blur-md shadow-[0_0_15px_rgba(239,68,68,0.2)]">
                                <span class="text-red-400 text-[8px] md:text-[9px] tracking-[0.3em] font-bold uppercase">Advanced Driver Assistance</span>
                            </div>
                            <h4 class="font-geely text-xl md:text-3xl text-white tracking-wide drop-shadow-lg leading-none mb-1">Level 2 ADAS Safety</h4>
                            <p class="text-gray-300 text-[9px] md:text-[10px] tracking-wider uppercase font-light drop-shadow-md">Comprehensive Active Safety Systems</p>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 14: Call to Action (Test Drive) -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden group">
                    <div class="absolute inset-0 bg-gradient-to-br from-cyan-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center bg-white/5 mb-6 group-hover:bg-white/10 transition-colors">
                        <svg class="w-5 h-5 text-white group-hover:text-cyan-400 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h4 class="font-geely text-2xl md:text-3xl text-white tracking-wide mb-2">Ready to Drive?</h4>
                    <p class="text-gray-400 text-[10px] md:text-xs font-light leading-relaxed mb-8 px-2">
                        Experience the Geely EX5 firsthand and feel the future of mobility.
                    </p>
                    <a href="{{ route('test-drive') }}" class="btn-shimmer w-full py-4 rounded-full text-black font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_30px_rgba(255,255,255,0.15)] flex justify-center items-center gap-2">
                        Book Test Drive
                    </a>
                </div>

            </div>
        </div>
    </div>
</x-layouts.app>
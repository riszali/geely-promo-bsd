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
                <a href="{{ route('models.ex5') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-cyan-400 text-[10px] md:text-xs font-bold tracking-widest uppercase transition-colors mb-6 group">
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
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-ex5-1-r25s8xkUhZrQbzAj.webp" alt="EX5 Blueprint" class="w-full max-w-2xl h-auto object-contain invert mix-blend-screen opacity-90 group-hover:scale-[1.03] transition-transform duration-700">
                    </div>
                </div>

                <!-- BENTO ITEM 2: Range Highlight -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] pointer-events-none"></div>
                    <p class="text-gray-400 text-[9px] font-bold tracking-[0.2em] uppercase mb-2 relative z-10">Driving Range (WLTP)</p>
                    <h3 class="font-geely text-5xl md:text-6xl text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.3)] relative z-10">
                        430<span class="text-sm md:text-base text-gray-400 ml-1">km*</span>
                    </h3>
                </div>

                <!-- BENTO ITEM 3: Warranty -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center gap-4 border-t-4 border-emerald-500 hover:border-emerald-400 h-full">
                    <div class="w-14 h-14 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 shadow-[0_0_20px_rgba(16,185,129,0.2)]">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <div>
                        <p class="text-white font-geely text-xl tracking-wide mb-1">8 Years Warranty</p>
                        <p class="text-gray-400 text-[10px] uppercase tracking-widest">Battery & Drive Motor</p>
                    </div>
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
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Length</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">4615 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Width</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">1901 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Height</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">1670 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Wheelbase</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">2750 mm</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Seating Capacity</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">5 Seats</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 5: Powertrain -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-indigo-500/20 border border-indigo-400/30 flex items-center justify-center text-indigo-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Powertrain</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">0-100 km/h</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">6.9 sec</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Top Speed</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">175 km/h</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Max. Power</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">160 kW</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Max. Torque</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">320 N·m</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Battery Capacity</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">60.22 kWh</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Driving Range</span>
                            <span class="text-cyan-400 font-bold text-xs md:text-sm text-right">Up to 430 km (WLTP)</span>
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
                            <span class="text-red-400 font-bold text-xs md:text-sm text-right flex items-center gap-1.5">
                                5 Stars
                                <svg class="w-3.5 h-3.5 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                            </span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Adult Protection</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">92%</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Child Protection</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">88%</span>
                        </div>
                        <div class="spec-row items-start border-none pt-4">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold mt-1 w-1/3">Main ADAS</span>
                            <ul class="text-white font-medium text-[10px] md:text-xs text-right space-y-1.5 w-2/3 flex flex-col items-end">
                                <li class="flex justify-end items-center gap-2">Adaptive Cruise (ACC) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Lane Keep Assist (LKA) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Auto Braking (AEB) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                                <li class="flex justify-end items-center gap-2">Blind Spot (BSD) <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_5px_rgba(34,211,238,0.8)]"></span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 7: GEA Architecture -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-cyan-500/20 hover:border-cyan-400/50">
                    <div class="absolute top-1/2 left-0 -translate-y-1/2 w-64 h-64 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none group-hover:bg-cyan-500/20 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20 w-max shadow-[0_0_15px_rgba(34,211,238,0.1)]">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path></svg>
                            <span class="text-cyan-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Core Technology</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-wide mb-4 leading-tight drop-shadow-md">
                            Global Intelligent New Energy Architecture <span class="text-gradient-cyan whitespace-nowrap">(GEA)</span>
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed max-w-lg">
                            Arsitektur cerdas 4-in-1 yang menggabungkan kemajuan signifikan dalam desain, efisiensi energi, keselamatan, kecerdasan AI, dan kinerja berkendara.
                        </p>
                    </div>
                    <div class="w-full lg:w-7/12 relative min-h-[250px] sm:min-h-[300px] lg:min-h-[350px] overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#050505] via-[#050505]/40 lg:via-[#050505]/20 to-transparent z-10 pointer-events-none"></div>
                        <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/img_2466-AzG3xgX8EeU2wDqk.webp" alt="Global Intelligent New Energy Architecture" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100 object-center">
                    </div>
                </div>

                <!-- BENTO ITEM 8: CTB Architecture -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col-reverse lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-indigo-500/20 hover:border-indigo-400/50 bg-[#0a0a0c]">
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-indigo-500/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-indigo-500/20 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-1/2 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 w-max shadow-[0_0_15px_rgba(99,102,241,0.1)]">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            <span class="text-indigo-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Battery Integration</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-wide mb-2 leading-tight drop-shadow-md">
                            Cell-to-Body <span class="text-indigo-400">(CTB)</span>
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8">Integrated Body & Battery Structure</p>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6">
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ctb-01-m6Ljnro1K1HPyZ1W.webp" alt="Stronger" class="w-10 h-10 object-contain shrink-0 mix-blend-screen drop-shadow-md">
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">Stronger</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Battery Protection</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Side Collision Cell 0 Compression</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ctb-02-AE0alvOxZlu4el5G.webp" alt="Bigger" class="w-10 h-10 object-contain shrink-0 mix-blend-screen drop-shadow-md">
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">Bigger</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Cabin Space</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Lower the floor height</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ctb-03-A1aBErDNyWtzjDpx.webp" alt="Better" class="w-10 h-10 object-contain shrink-0 mix-blend-screen drop-shadow-md">
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">Better</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Torsional Stiffness</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">31000N·m/deg</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-3 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ctb-04-AR0MxVnzZeFy1OJ2.webp" alt="More Stable" class="w-10 h-10 object-contain shrink-0 mix-blend-screen drop-shadow-md">
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-0.5">More Stable</h4>
                                    <p class="text-white text-[11px] md:text-xs font-medium mb-0.5">Control Experience</p>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Lower center of gravity</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 relative min-h-[250px] sm:min-h-[350px] overflow-hidden flex items-center justify-center p-6 bg-gradient-to-b lg:bg-gradient-to-r from-transparent via-white/5 to-white/5">
                        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,rgba(99,102,241,0.1)_0%,transparent_70%)] pointer-events-none"></div>
                        <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ctb-Aq2q3NX9QourKNVv.webp" alt="CTB Architecture" class="relative z-10 w-full max-w-lg h-auto object-contain transform group-hover:scale-105 transition-transform duration-[2s] ease-out drop-shadow-2xl">
                    </div>
                </div>

                <!-- BENTO ITEM: 11-in-1 INTELLIGENT ELECTRIC DRIVE -->
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
                                <p class="text-cyan-400 font-geely text-2xl mb-1">160 kW</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Power</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-center group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-white font-geely text-2xl mb-1">780 KG</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Weight</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 text-center group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-white font-geely text-2xl mb-1">0.079M³</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Volume</p>
                            </div>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Best-in-Class Power
                            </li>
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Lightest-in-Class Weight
                            </li>
                            <li class="flex items-center gap-3 text-gray-300 text-sm">
                                <span class="w-1.5 h-1.5 rounded-full bg-cyan-500 shadow-[0_0_10px_rgba(34,211,238,1)]"></span> Smallest-in-Class Volume
                            </li>
                        </ul>
                    </div>
                    <div class="w-full lg:w-1/2 relative flex justify-center">
                        <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/ied-YyvZj2oZ41u6Vgv6.webp" alt="11-in-1 Drive Unit" class="w-full max-w-md h-auto object-contain transform group-hover:scale-105 transition-transform duration-[2s] drop-shadow-[0_0_30px_rgba(34,211,238,0.2)]">
                    </div>
                </div>

                <!-- BENTO ITEM: Efficiency & Category Leadership -->
                <div class="glass-panel p-0 rounded-[2rem] overflow-hidden flex flex-col md:flex-row md:col-span-2 lg:col-span-3 border-t border-white/10 group bg-[#06070a]">
                    <div class="w-full md:w-7/12 relative min-h-[300px] overflow-hidden">
                        <img src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/img_2619-m2WaDQ1WJeFeWZ3b.jpeg" alt="Electric Drive Efficiency" class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-[4s]">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#06070a] via-transparent to-transparent z-10"></div>
                    </div>
                    <div class="w-full md:w-5/12 p-8 md:p-12 flex flex-col justify-center relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 w-max">
                            <span class="text-indigo-400 text-[8px] md:text-[9px] tracking-[0.2em] font-bold uppercase">Efficiency Leader</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl text-white mb-6 leading-tight uppercase tracking-tight">Maksimum <span class="text-indigo-400">Efisiensi</span></h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed">
                            Penggerak listrik cerdas 11in1 merupakan yang terdepan di kelasnya, paling ringan, terkecil, dan paling efisien dalam kategorinya.
                        </p>
                    </div>
                </div>

                <!-- BENTO ITEM: AEGIS SHORT BLADE BATTERY -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-blue-500/20 hover:border-blue-500/40 transition-colors duration-500">
                    <!-- Text Content -->
                    <div class="p-8 md:p-12 lg:p-14 flex flex-col justify-center w-full lg:w-5/12 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 w-max shadow-[0_0_15px_rgba(59,130,246,0.1)]">
                            <span class="text-blue-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Battery Technology</span>
                        </div>
                        <h3 class="font-geely text-3xl md:text-4xl lg:text-5xl text-white tracking-wide mb-4 leading-tight">
                            Aegis <span class="text-gradient-blue-animated">Short Blade Battery</span>
                        </h3>
                        <p class="text-gray-300 text-sm md:text-lg font-light leading-relaxed mb-6">
                            Revolutionary Battery Technology
                        </p>
                        <p class="text-gray-400 text-xs md:text-sm font-light leading-relaxed max-w-md">
                            Generasi terbaru baterai LFP dengan kepadatan energi tinggi dan tingkat keamanan ekstrem, dirancang untuk siklus hidup yang lebih lama dan pengisian daya yang lebih cepat.
                        </p>
                    </div>

                    <!-- Video Content -->
                    <div class="w-full lg:w-7/12 relative min-h-[300px] md:min-h-[400px] lg:min-h-[500px] overflow-hidden bg-black">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:scale-105 transition-transform duration-[4s] ease-out">
                            <source src="https://a-ap.storyblok.com/f/3000753/x/f2b58cc59a/shortblade_battery.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#050505] via-transparent to-transparent pointer-events-none z-10"></div>
                    </div>
                </div>

                <!-- BENTO ITEM: FASTER CHARGING (NEW) -->
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
                                <p class="text-cyan-400 font-geely text-3xl md:text-4xl">20<span class="text-sm ml-1 text-gray-300">min</span></p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">30% to 80% State of Charge</p>
                            </div>
                            <div class="p-6 rounded-[1.5rem] bg-white/5 border border-white/5 group-hover:border-cyan-500/30 transition-all duration-500">
                                <p class="text-[10px] text-gray-400 uppercase tracking-widest mb-1 font-bold">Charging Ratio</p>
                                <p class="text-white font-geely text-3xl md:text-4xl">1.8C</p>
                                <p class="text-[10px] text-gray-500 mt-1 uppercase">33% Faster than Average</p>
                            </div>
                        </div>

                        <!-- Technical Grid Condensed -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-4 gap-x-8 border-t border-white/5 pt-8">
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Max DC Input</span>
                                <span class="text-white text-sm font-medium">Up to 100 kW (CCS Standard)</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">AC Slow Charge</span>
                                <span class="text-white text-sm font-medium">6.1 Hours (10% - 100%)</span>
                            </div>
                            <div class="flex flex-col">
                                <span class="text-gray-500 text-[9px] uppercase font-bold tracking-widest mb-1">Additional Tech</span>
                                <div class="flex items-center gap-3 mt-1">
                                    <span class="px-2 py-0.5 rounded bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[9px] font-bold">V2L</span>
                                    <span class="px-2 py-0.5 rounded bg-cyan-500/10 border border-cyan-500/20 text-cyan-400 text-[9px] font-bold">V2V</span>
                                </div>
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

                <!-- BENTO ITEM 9: Safety NCAP Video -->
                <div class="glass-panel p-2 md:p-3 rounded-[2rem] relative overflow-hidden group border-t border-red-500/20 hover:border-red-500/40 h-[250px] md:h-auto min-h-[250px] md:col-span-2 flex flex-col">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-red-500/15 rounded-full blur-[80px] pointer-events-none group-hover:bg-red-500/25 transition-colors duration-700"></div>
                    <div class="relative w-full h-full rounded-[1.5rem] overflow-hidden bg-black/50 flex-grow">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100">
                            <source src="https://assets.zyrosite.com/YanqXEb2OrfDkrOX/euro-ncap-crash-safety-tests-of-geely-ex5-2025---euro-ncap-720p-h264-YKb3MOZVQjsbVQ84.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-10 pointer-events-none">
                            <div class="inline-flex items-center gap-2 mb-2 md:mb-3 px-3 py-1.5 md:px-4 md:py-1.5 rounded-full bg-red-500/20 border border-red-500/30 backdrop-blur-md shadow-[0_0_15px_rgba(239,68,68,0.2)]">
                                <span class="text-red-400 text-[8px] md:text-[9px] tracking-[0.3em] font-bold uppercase">Euro NCAP</span>
                            </div>
                            <h4 class="font-geely text-xl md:text-3xl text-white tracking-wide drop-shadow-lg leading-none mb-1">Crash Safety Test</h4>
                            <p class="text-gray-300 text-[9px] md:text-[10px] tracking-wider uppercase font-light drop-shadow-md">Maximum Protection Guaranteed</p>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 10: Call to Action (Test Drive) -->
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
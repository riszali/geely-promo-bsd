<x-layouts.app>
    <!-- ==========================================
         GLOBAL STYLES (Diadaptasi dari EX5 Utama)
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

        /* Animated Gradient */
        .text-gradient-animated {
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

        /* Shimmer Button */
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

        /* Pattern Background */
        .bg-grid-pattern {
            background-image: linear-gradient(to right, rgba(255,255,255,0.03) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(255,255,255,0.03) 1px, transparent 1px);
            background-size: 30px 30px;
        }

        /* ADAS Extra Items Transition */
        .adas-extra {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.6s cubic-bezier(0.4, 0, 0.2, 1), opacity 0.4s ease;
            opacity: 0;
        }
        .adas-extra.show {
            max-height: 1000px;
            opacity: 1;
            margin-top: 0.5rem;
        }
    </style>

    <div class="w-full overflow-hidden pt-24 pb-24 relative min-h-screen">
        <!-- Ambient Glow -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[500px] bg-cyan-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="max-w-[1400px] mx-auto px-4 md:px-6 lg:px-8 relative z-10">
            
            <!-- Breadcrumb & Header -->
            <div class="mb-10 md:mb-14 flex flex-col items-center text-center">
                <a href="{{ route('models.starray') }}" class="inline-flex items-center gap-2 text-gray-400 hover:text-cyan-400 text-[10px] md:text-xs font-bold tracking-widest uppercase transition-colors mb-6 group">
                    <svg class="w-4 h-4 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                    Back to Overview
                </a>
                
                <div class="inline-flex items-center gap-3 mb-4 px-5 py-2.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-xl shadow-lg">
                    <span class="text-cyan-400 text-[9px] tracking-[0.4em] font-bold uppercase">Technical Data</span>
                </div>
                <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-tight drop-shadow-xl">
                    Starray <span class="text-gradient-cyan">Specifications</span>
                </h1>
            </div>

            <!-- ==========================================
                 BENTO GRID LAYOUT (100% ACCURATE TO PDF)
            =========================================== -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 md:gap-6 lg:gap-8 auto-rows-min">
                
                <!-- BENTO ITEM 1: Blueprint Graphic -->
                <div class="glass-panel rounded-[2rem] md:col-span-2 lg:row-span-2 relative overflow-hidden group h-full flex flex-col justify-between border-t-2 border-cyan-500/30">
                    <div class="absolute inset-0 bg-grid-pattern opacity-50 z-0 pointer-events-none"></div>
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-3/4 h-3/4 bg-cyan-500/10 rounded-full blur-[80px] pointer-events-none"></div>
                    
                    <div class="p-6 md:p-8 z-10 flex justify-between items-start">
                        <div>
                            <p class="text-gray-400 text-[10px] uppercase tracking-widest mb-1 font-bold">Architecture Blueprint</p>
                            <p class="font-geely text-2xl md:text-3xl text-white tracking-wide">STARRAY EM-i</p>
                        </div>
                        <div class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center bg-white/5 backdrop-blur-md">
                            <svg class="w-5 h-5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                        </div>
                    </div>
                    <div class="relative w-full flex-grow flex items-center justify-center p-4 z-10">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/sketch-starray-chwVZ2KpT7ymtdyd.webp" alt="Starray Blueprint" class="w-full max-w-2xl h-auto object-contain invert mix-blend-screen opacity-90 group-hover:scale-[1.03] transition-transform duration-700">
                    </div>
                </div>

                <!-- BENTO ITEM 2: Range Highlight -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center h-full relative overflow-hidden border-t-2 border-cyan-500/30">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-cyan-500/20 rounded-full blur-[40px] pointer-events-none"></div>
                    <p class="text-gray-400 text-[9px] font-bold tracking-[0.2em] uppercase mb-2 relative z-10">Combined Range (NEDC)</p>
                    <h3 class="font-geely text-5xl md:text-6xl text-cyan-400 leading-none drop-shadow-[0_0_15px_rgba(34,211,238,0.3)] relative z-10">
                        1000<span class="text-3xl">+</span><span class="text-sm md:text-base text-gray-400 ml-1">km*</span>
                    </h3>
                </div>

                <!-- BENTO ITEM 3: Fuel Efficiency -->
                <div class="glass-panel p-6 md:p-8 rounded-[2rem] flex flex-col justify-center items-center text-center gap-4 border-t-4 border-emerald-500 hover:border-emerald-400 h-full overflow-hidden relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-32 h-32 bg-emerald-500/20 rounded-full blur-[40px] pointer-events-none"></div>
                    <div class="w-14 h-14 rounded-full bg-emerald-500/10 flex items-center justify-center text-emerald-400 shadow-[0_0_20px_rgba(16,185,129,0.2)] z-10 relative">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <div class="z-10 relative">
                        <p class="text-white font-geely text-3xl tracking-wide mb-1">83 <span class="text-xl">km/l*</span></p>
                        <p class="text-gray-400 text-[10px] uppercase tracking-widest font-bold">Max Fuel Efficiency</p>
                    </div>
                </div>

                <!-- BENTO ITEM 4: Dimensions -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-white/10 border border-white/20 flex items-center justify-center text-white shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Dimensions</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Length</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">4740 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Width</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">1905 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Overall Height</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">1685 mm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Trunk Capacity</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">528 - 2065 L</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Fuel Tank</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">51 Liters</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 5: Powertrain -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-indigo-500/20 border border-indigo-400/30 flex items-center justify-center text-indigo-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Powertrain</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Type</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">Plug-In Hybrid (FWD)</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Engine</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">1.5L 4-Cyl NA</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Engine Output</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">73 kW / 125 Nm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">E-Motor Output</span>
                            <span class="text-cyan-400 font-bold text-xs md:text-sm text-right">160 kW / 262 Nm</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Drive Modes</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">Pure / Hybrid / Power</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Thermal Eff.</span>
                            <span class="text-emerald-400 font-bold text-xs md:text-sm text-right">46.5%</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 6: Battery & Charge -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col border-t border-blue-500/20">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-blue-500/20 border border-blue-400/30 flex items-center justify-center text-blue-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Battery & Charge</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Type</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">LFP</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Capacity</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">18.4 kWh</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">DC Fast Charge</span>
                            <span class="text-cyan-400 font-bold text-xs md:text-sm text-right">Max 30 kW</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">DC Time (30-80%)</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">< 20 minutes</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">AC Charge</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">Max 6.6 kW</span>
                        </div>
                        <div class="spec-row border-none">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">AC Time (25-100%)</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">< 3 hours</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 7: Performance -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col md:col-span-1 border-t border-red-500/20">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-red-500/20 border border-red-400/30 flex items-center justify-center text-red-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Performance</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-center">
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">0-100 km/h</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">8.1 sec</span>
                        </div>
                        <div class="spec-row">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold">Top Speed</span>
                            <span class="text-white font-medium text-xs md:text-sm text-right">170 km/h</span>
                        </div>
                        <div class="spec-row items-start pt-4">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold mt-1">Range (NEDC)</span>
                            <ul class="text-white font-medium text-[10px] md:text-xs text-right space-y-2">
                                <li class="text-blue-400 font-bold">Electric Only: 105 km</li>
                                <li class="text-cyan-400 font-bold">Combined: 1000+ km</li>
                            </ul>
                        </div>
                        <div class="spec-row items-start border-none pt-4">
                            <span class="text-gray-400 text-[10px] md:text-[11px] uppercase tracking-wider font-bold mt-1">Consumption</span>
                            <ul class="text-white font-medium text-[10px] md:text-xs text-right space-y-2">
                                <li class="text-emerald-400 font-bold">Weighted: 1.2 L/100km</li>
                                <li>Low SOC: 4.3 L/100km</li>
                                <li>Full SOC: 0.5 L/100km</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 8: Safety & L2 ADAS (DENGAN FITUR KLIK UNTUK EKSPANSI) -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col md:col-span-1 border-t border-purple-500/20 overflow-hidden">
                    <div class="flex items-center gap-3 mb-6">
                        <div class="w-8 h-8 rounded-full bg-purple-500/20 border border-purple-400/30 flex items-center justify-center text-purple-400 shrink-0">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <h3 class="font-geely text-xl text-white uppercase tracking-tight">Active Safety</h3>
                    </div>
                    <div class="flex flex-col flex-grow justify-start">
                        <p class="text-gray-400 text-xs md:text-sm mb-5 leading-relaxed">Dilengkapi dengan <strong class="text-white">L2 ADAS (14 Fungsi Cerdas)</strong> untuk perlindungan proaktif yang komprehensif.</p>
                        
                        <!-- Grid Utama (6 Fitur Awal) -->
                        <div class="grid grid-cols-2 gap-2 text-[10px] md:text-xs">
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">ACC</span><span class="text-gray-500">Adaptive Cruise</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">AEB</span><span class="text-gray-500">Auto Braking</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">LKA</span><span class="text-gray-500">Lane Keeping</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">BSD</span><span class="text-gray-500">Blind Spot</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">ICC</span><span class="text-gray-500">Intell. Cruise</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">RCTA</span><span class="text-gray-500">Cross Traffic</span></div>
                        </div>

                        <!-- Bagian Ekstra yang Tersembunyi -->
                        <div id="adas-extra-grid" class="adas-extra grid grid-cols-2 gap-2 text-[10px] md:text-xs">
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">CMSF</span><span class="text-gray-500">Front Collision</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">CMSR</span><span class="text-gray-500">Rear Collision</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">RCTB</span><span class="text-gray-500">Cross Braking</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">TSI</span><span class="text-gray-500">Traffic Signs</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">DOW</span><span class="text-gray-500">Door Warning</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">LCA</span><span class="text-gray-500">Lane Change</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">ELKA</span><span class="text-gray-500">Emergency Lane</span></div>
                            <div class="bg-white/5 p-2 md:p-3 rounded-lg border border-white/5"><span class="text-white font-bold block mb-0.5">IHBC</span><span class="text-gray-500">Intell. High Beam</span></div>
                        </div>

                        <!-- Tombol Expand/Collapse -->
                        <button id="toggle-adas" class="mt-3 bg-white/5 p-2 md:p-3 rounded-lg border border-white/10 text-center text-cyan-400 font-bold text-[10px] md:text-xs hover:bg-cyan-400/10 transition-colors w-full flex items-center justify-center gap-2">
                            <span id="toggle-text">+ 8 Other Functions</span>
                            <svg id="toggle-icon" class="w-3 h-3 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </div>
                </div>

                <!-- BENTO ITEM 9: Colors -->
                <div class="glass-panel p-6 sm:p-8 rounded-[2rem] h-full flex flex-col justify-between md:col-span-1">
                    <h3 class="font-geely text-xl text-white uppercase tracking-tight mb-4 text-center">Available Colors</h3>
                    
                    <div class="flex flex-col gap-3 flex-grow justify-center">
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #2F4F4F;"></span>
                            <span class="text-sm md:text-base text-gray-300">Supersonic Green</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #4169E1;"></span>
                            <span class="text-sm md:text-base text-gray-300">Bright Blue</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #F8F8F8;"></span>
                            <span class="text-sm md:text-base text-gray-300">Snowy White</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #C0C0C0;"></span>
                            <span class="text-sm md:text-base text-gray-300">Pearl Silver</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #696969;"></span>
                            <span class="text-sm md:text-base text-gray-300">Twilight Gray</span>
                        </div>
                        <div class="flex items-center gap-4">
                            <span class="w-6 h-6 rounded-full border border-gray-600 shadow-inner" style="background-color: #1A1A1A;"></span>
                            <span class="text-sm md:text-base text-gray-300">Marble Black</span>
                        </div>
                    </div>
                </div>

                <!-- BENTO ITEM 10: GEA Architecture -->
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
                            Arsitektur otomotif 4-in-1 pertama di dunia yang mengintegrasikan perangkat keras, sistem, ekosistem, dan kecerdasan AI secara mulus tanpa celah.
                        </p>
                    </div>
                    <div class="w-full lg:w-7/12 relative min-h-[250px] sm:min-h-[300px] lg:min-h-[350px] overflow-hidden">
                        <div class="absolute inset-0 bg-gradient-to-t lg:bg-gradient-to-r from-[#050505] via-[#050505]/40 lg:via-[#050505]/20 to-transparent z-10 pointer-events-none"></div>
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100 object-center">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i-the-core-of-innovation---geely-auto-indonesia-1080p-h264-T9k9NPLeqwylB2Be.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- BENTO ITEM 11: Flyme Sound & Interior -->
                <div class="glass-panel p-0 rounded-[2rem] flex flex-col-reverse lg:flex-row relative overflow-hidden group md:col-span-2 lg:col-span-3 border-t border-indigo-500/20 hover:border-indigo-400/50 bg-[#0a0a0c]">
                    <div class="absolute bottom-0 right-0 w-80 h-80 bg-indigo-500/10 rounded-full blur-[100px] pointer-events-none group-hover:bg-indigo-500/20 transition-colors duration-700"></div>
                    <div class="p-6 md:p-8 lg:p-10 flex flex-col justify-center w-full lg:w-1/2 relative z-20">
                        <div class="inline-flex items-center gap-2 mb-4 px-4 py-1.5 rounded-full bg-indigo-500/10 border border-indigo-500/20 w-max shadow-[0_0_15px_rgba(99,102,241,0.1)]">
                            <svg class="w-4 h-4 text-indigo-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3"></path></svg>
                            <span class="text-indigo-400 text-[9px] md:text-[10px] tracking-[0.2em] font-bold uppercase">Symphony of Senses</span>
                        </div>
                        <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-white tracking-wide mb-2 leading-tight drop-shadow-md">
                            Flyme Sound <br><span class="text-indigo-400">Audio System</span>
                        </h3>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8">Nikmati kualitas audio sinematik sebening kristal langsung di dalam kabin mewah Anda.</p>
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 md:gap-6">
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-12 h-12 flex items-center justify-center font-geely text-2xl text-indigo-400 shrink-0">16</div>
                                <div>
                                    <h4 class="text-white text-[13px] md:text-sm font-bold mb-1">Premium Speakers</h4>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Termasuk 2 buah Headrest Speakers eksklusif untuk pengemudi.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 p-4 rounded-2xl bg-white/5 border border-white/5 hover:border-indigo-500/30 transition-colors">
                                <div class="w-12 h-12 flex items-center justify-center font-geely text-2xl text-white shrink-0">15.4"</div>
                                <div>
                                    <h4 class="text-indigo-400 text-[13px] md:text-sm font-bold mb-1">HD Central Screen</h4>
                                    <p class="text-gray-400 text-[9px] md:text-[10px] leading-snug">Layar sentuh resolusi tinggi sebagai pusat kontrol utama cerdas.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="w-full lg:w-1/2 relative min-h-[300px] sm:min-h-[350px] overflow-hidden bg-black flex items-center justify-center">
                        <div class="absolute inset-0 bg-gradient-to-b lg:bg-gradient-to-r from-[#0a0a0c] via-transparent to-transparent pointer-events-none z-10"></div>
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-90 group-hover:opacity-100">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_audio-system-starray-1r0XLEB965PKMDeV.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- BENTO ITEM 12: EM-i Super Hybrid Deep Dive -->
                <div class="glass-panel p-6 md:p-10 rounded-[2rem] flex flex-col lg:flex-row gap-10 items-center md:col-span-2 lg:col-span-3 border-t border-cyan-500/20 group relative overflow-hidden bg-[#06070a]">
                    <div class="absolute top-0 right-0 w-64 h-64 bg-cyan-600/5 rounded-full blur-[100px] pointer-events-none"></div>
                    <div class="w-full lg:w-1/2 relative z-10">
                        <div class="inline-flex items-center gap-2 mb-6 px-4 py-1.5 rounded-full bg-cyan-500/10 border border-cyan-500/20">
                            <span class="text-cyan-400 text-[10px] tracking-[0.2em] font-bold uppercase">Hybrid Mastery</span>
                        </div>
                        <h2 class="font-geely text-3xl md:text-5xl text-white mb-6 leading-tight">EM-i <br><span class="text-gradient-animated">Super Hybrid</span></h2>
                        <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed mb-8">
                            Memadukan keunggulan bahan bakar dan baterai untuk mencapai jangkauan ekstrem, efisiensi bahan bakar maksimal, dan emisi yang sangat rendah tanpa mengorbankan performa bertenaga.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-cyan-400 font-geely text-3xl mb-1">46.5%</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">Global Top Thermal Efficiency</p>
                            </div>
                            <div class="p-5 rounded-2xl bg-white/5 border border-white/10 group-hover:border-cyan-500/50 transition-colors">
                                <p class="text-white font-geely text-3xl mb-1">160 kW</p>
                                <p class="text-gray-400 text-[9px] uppercase font-bold tracking-widest">High Efficiency Electric Drive</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full lg:w-1/2 relative flex justify-center">
                        <video autoplay muted loop playsinline class="w-full h-auto object-cover rounded-2xl transform group-hover:scale-105 transition-transform duration-[2s] shadow-[0_0_30px_rgba(34,211,238,0.1)] opacity-90">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/technology-starray-mxB277X4nVI37WJE.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

                <!-- BENTO ITEM 13: ADAS Crash Safety Video -->
                <div class="glass-panel p-2 md:p-3 rounded-[2rem] relative overflow-hidden group border-t border-blue-500/20 hover:border-blue-500/40 md:col-span-2 flex flex-col">
                    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-64 h-64 bg-blue-500/15 rounded-full blur-[80px] pointer-events-none group-hover:bg-blue-500/25 transition-colors duration-700"></div>
                    <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden bg-black/50">
                        <video autoplay muted loop playsinline class="absolute inset-0 w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-[2s] ease-out opacity-80 group-hover:opacity-100">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/adas-starray-YrD4N7o6BJtj2O09.mp4" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-[#050505] via-[#050505]/40 to-transparent pointer-events-none"></div>
                        <div class="absolute bottom-6 left-6 md:bottom-8 md:left-8 z-10 pointer-events-none">
                            <div class="inline-flex items-center gap-2 mb-2 md:mb-3 px-3 py-1.5 md:px-4 md:py-1.5 rounded-full bg-blue-500/20 border border-blue-500/30 backdrop-blur-md shadow-[0_0_15px_rgba(59,130,246,0.2)]">
                                <span class="text-blue-400 text-[8px] md:text-[9px] tracking-[0.3em] font-bold uppercase">Intelligent Protection</span>
                            </div>
                            <h4 class="font-geely text-xl md:text-3xl text-white tracking-wide drop-shadow-lg leading-none mb-1">Evolving L2 ADAS</h4>
                            <p class="text-gray-300 text-[9px] md:text-[10px] tracking-wider uppercase font-light drop-shadow-md">Keamanan Canggih yang Selalu Melindungi Anda</p>
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
                        Experience the Geely Starray EM-i firsthand and feel the future of mobility.
                    </p>
                    <a href="{{ route('test-drive') }}" class="btn-shimmer w-full py-4 rounded-full text-black font-bold text-[10px] md:text-xs tracking-[0.2em] uppercase text-center hover:scale-[1.02] transition-transform duration-300 shadow-[0_10px_30px_rgba(255,255,255,0.15)] flex justify-center items-center gap-2">
                        Book Test Drive
                    </a>
                </div>

            </div>
        </div>
    </div>

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
            // Logika Toggle ADAS
            const adasBtn = document.getElementById('toggle-adas');
            const adasExtra = document.getElementById('adas-extra-grid');
            const toggleText = document.getElementById('toggle-text');
            const toggleIcon = document.getElementById('toggle-icon');

            if (adasBtn && adasExtra) {
                adasBtn.addEventListener('click', () => {
                    const isShown = adasExtra.classList.contains('show');
                    
                    if (isShown) {
                        adasExtra.classList.remove('show');
                        toggleText.textContent = '+ 8 Other Functions';
                        toggleIcon.style.transform = 'rotate(0deg)';
                    } else {
                        adasExtra.classList.add('show');
                        toggleText.textContent = 'Show Less';
                        toggleIcon.style.transform = 'rotate(180deg)';
                    }
                });
            }
        });
    </script>
</x-layouts.app>
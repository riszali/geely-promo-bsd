<x-layouts.app>
    <!-- OPTIMASI SEO ON-PAGE -->
    @section('title', 'Simulasi Kredit Geely BSD Tangerang | EX5, EX2 & Starray EM-i')
    @section('meta_description', 'Hitung estimasi cicilan bulanan, TDP, dan bunga kredit mobil Geely EX5, EX2, dan Starray di Dealer Resmi Promo Geely BSD Tangerang.')
    @section('keywords', 'Simulasi Kredit Geely, Cicilan Geely EX5, Kredit Geely EX2 BSD, DP Mobil Geely, Promo Kredit Geely Tangerang')
    
    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES (LIGHT MODE)
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #f8fafc; /* Konsisten dengan index */
            color: #111827;
            overflow-x: hidden; 
        }
        
        /* CLEAN LIGHT GLASSMORPHISM */
        .spatial-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(30px) saturate(120%);
            -webkit-backdrop-filter: blur(30px) saturate(120%);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        .spatial-glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
        }

        /* Pink Text Gradient */
        .text-gradient-pink {
            background: linear-gradient(135deg, #111827 10%, #ec4899 70%, #be185d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-size: 200% 200%;
            animation: gradientMove 8s ease infinite;
        }
        @keyframes gradientMove {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Custom Range Slider (Light Theme) */
        input[type=range] {
            -webkit-appearance: none;
            background: #e2e8f0;
            border-radius: 8px;
            height: 6px;
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #ec4899; /* Pink 500 */
            cursor: pointer;
            box-shadow: 0 0 15px rgba(236, 72, 153, 0.4);
            transition: transform 0.2s;
        }
        input[type=range]::-webkit-slider-thumb:hover {
            transform: scale(1.2);
        }

        /* Form Inputs Customization for Light Theme */
        .hud-input {
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(226, 232, 240, 0.8);
            color: #1f2937;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        .hud-input:focus {
            background: #ffffff;
            border-color: #ec4899; /* Pink 500 */
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.15);
            outline: none;
        }
        .hud-input option {
            background-color: #ffffff;
            color: #111827;
        }

        /* Visual Feedback Pulse (Pink) */
        @keyframes result-pulse-pink {
            0% { box-shadow: 0 20px 50px rgba(0,0,0,0.06), 0 0 0 0 rgba(236, 72, 153, 0.3); }
            70% { box-shadow: 0 20px 50px rgba(0,0,0,0.06), 0 0 0 15px rgba(236, 72, 153, 0); }
            100% { box-shadow: 0 20px 50px rgba(0,0,0,0.06), 0 0 0 0 rgba(236, 72, 153, 0); }
        }
        .animate-pulse-pink {
            animation: result-pulse-pink 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }

        /* Ambient Glow Pink */
        .ambient-glow {
            background: radial-gradient(circle, rgba(244, 114, 182, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
            mix-blend-mode: multiply;
        }
    </style>

    <div class="relative min-h-screen bg-[#f8fafc] overflow-hidden pb-24">
        <!-- Ambient Background Light Glows -->
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] ambient-glow pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] ambient-glow pointer-events-none z-0"></div>
        
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjM2LDcyLDE1MywwLjA0KSIvPjwvc3ZnPg==')] opacity-50 mix-blend-overlay z-0 pointer-events-none"></div>

        <!-- ==========================================
             HERO & CAR SELECTOR SECTION
        =========================================== -->
        <section class="relative z-10 pt-24 md:pt-32 pb-12 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-pink-200 bg-pink-50/80 text-pink-600 backdrop-blur-md shadow-sm">
                <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
                <span class="text-[10px] font-bold tracking-[0.3em] uppercase">Layanan Finansial Geely BSD</span>
            </div>
            <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tighter mb-6 drop-shadow-sm text-gray-900">
                Simulasi <span class="text-gradient-pink">Kredit</span>
            </h1>
            <p class="text-gray-600 text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed mb-12 border-l-[3px] border-pink-400 pl-4 text-left md:text-center md:border-l-0 md:pl-0">
                Rencanakan kepemilikan kendaraan Geely Anda dengan kalkulator pintar kami. Pilih model favorit Anda, putar 360°, dan dapatkan estimasi cicilan terbaik khusus area BSD dan sekitarnya.
            </p>

            <!-- Model Selection Pills -->
            <div class="flex flex-wrap justify-center gap-3 mb-8">
                <button type="button" class="model-select-btn active spatial-glass px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-pink-400 text-pink-600 bg-pink-50 shadow-[0_0_20px_rgba(236,72,153,0.15)]" data-model="ex5">
                    Geely EX5
                </button>
                <button type="button" class="model-select-btn spatial-glass px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-gray-200 text-gray-500 bg-white/60 hover:bg-white hover:text-pink-600 hover:border-pink-200" data-model="ex2">
                    Geely EX2
                </button>
                <button type="button" class="model-select-btn spatial-glass px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-gray-200 text-gray-500 bg-white/60 hover:bg-white hover:text-pink-600 hover:border-pink-200" data-model="starray">
                    Starray EM-i
                </button>
            </div>

            <!-- 360 Viewer Area -->
            <div class="spatial-glass p-2 md:p-4 rounded-[2.5rem] md:rounded-[3.5rem] w-full max-w-5xl mx-auto h-[40vh] md:h-[50vh] min-h-[300px] relative overflow-hidden shadow-[0_20px_60px_rgba(0,0,0,0.06)] ring-1 ring-white/50 mb-16">
                <!-- Inner soft gradient -->
                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-gray-50/50 to-transparent pointer-events-none z-20"></div>
                <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden flex items-center justify-center bg-white/50">
                    <iframe id="car-spin-iframe" title="Tampilan 360 Derajat Geely" src="https://riszali.sirv.com/Spins/ex5/white.spin" class="absolute top-1/2 left-1/2 w-[120%] h-[120%] -translate-x-1/2 -translate-y-1/2 border-0 mix-blend-darken" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <!-- ==========================================
             CALCULATOR SECTION
        =========================================== -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- Left Column: Form Inputs -->
                <div class="lg:col-span-7 spatial-glass rounded-[2.5rem] p-6 sm:p-8 md:p-10 shadow-sm border border-white">
                    <h2 class="font-geely text-2xl md:text-3xl font-bold mb-8 border-b border-gray-100 pb-4 text-gray-900 tracking-tight">Parameter Pembiayaan</h2>
                    
                    <form id="creditForm" class="space-y-8">
                        
                        <!-- Pilih Varian Kendaraan -->
                        <div>
                            <label for="carVariant" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 mb-3 flex items-center gap-2">
                                <span class="w-3 h-[1px] bg-pink-400"></span> Varian Kendaraan
                            </label>
                            <div class="relative">
                                <select id="carVariant" class="w-full rounded-xl py-4 px-4 hud-input transition-colors cursor-pointer appearance-none font-medium">
                                    <!-- Options populated by JS -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Harga OTR (Readonly/Auto updated) -->
                        <div>
                            <label for="otrPrice" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 mb-3 flex items-center gap-2">
                                <span class="w-3 h-[1px] bg-pink-400"></span> Harga OTR (Tangerang/Jakarta)
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-pink-500 font-bold">Rp</span>
                                <input type="text" id="otrPriceDisplay" readonly class="w-full pl-12 pr-4 py-4 rounded-xl hud-input bg-gray-50 font-geely text-xl cursor-not-allowed text-gray-700 font-bold" value="0">
                                <input type="hidden" id="otrPriceValue" value="0">
                            </div>
                            <p class="text-[9px] text-gray-400 mt-2 tracking-widest uppercase">*Harga estimasi khusus, dapat berubah sewaktu-waktu.</p>
                        </div>

                        <!-- Pilih Leasing -->
                        <div>
                            <label for="leasing" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 mb-3 flex items-center gap-2">
                                <span class="w-3 h-[1px] bg-pink-400"></span> Mitra Leasing
                            </label>
                            <div class="relative">
                                <select id="leasing" class="w-full rounded-xl py-4 px-4 hud-input transition-colors cursor-pointer appearance-none font-medium">
                                    <option value="bca">BCA Finance (Rate Kompetitif)</option>
                                    <option value="mtf">Mandiri Tunas Finance (MTF)</option>
                                    <option value="adira">Adira Finance</option>
                                    <option value="maybank">Maybank Finance</option>
                                    <option value="cnaf">CIMB Niaga Auto Finance (CNAF)</option>
                                    <option value="muf">Mandiri Utama Finance (MUF)</option>
                                    <option value="clipan">Clipan Finance</option>
                                    <option value="bfi">BFI Finance</option>
                                    <option value="oto">Oto Multiartha</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Uang Muka (DP) -->
                        <div class="bg-white/50 p-4 rounded-2xl border border-gray-100">
                            <div class="flex justify-between items-center mb-4">
                                <label for="dpPercent" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 flex items-center gap-2">
                                    <span class="w-3 h-[1px] bg-pink-400"></span> Uang Muka (DP)
                                </label>
                                <span id="dpPercentLabel" class="text-pink-500 font-geely text-2xl drop-shadow-sm">20%</span>
                            </div>
                            <input type="range" id="dpPercent" min="15" max="50" step="5" value="20" class="w-full cursor-pointer mt-2">
                            <div class="flex justify-between text-[10px] font-bold tracking-widest text-gray-400 mt-3 uppercase">
                                <span>15% (Min)</span>
                                <span>50% (Max)</span>
                            </div>
                        </div>

                        <!-- Tenor -->
                        <div>
                            <label class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-500 mb-4 flex items-center gap-2">
                                <span class="w-3 h-[1px] bg-pink-400"></span> Tenor (Jangka Waktu)
                            </label>
                            <div class="grid grid-cols-5 gap-2 sm:gap-3">
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="1" class="peer sr-only">
                                    <div class="text-center py-3 bg-white/60 border border-gray-200 rounded-xl peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 text-gray-500 hover:bg-white hover:border-pink-200 transition-all font-bold text-sm shadow-sm peer-checked:shadow-[0_0_15px_rgba(236,72,153,0.1)]">1 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="2" class="peer sr-only">
                                    <div class="text-center py-3 bg-white/60 border border-gray-200 rounded-xl peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 text-gray-500 hover:bg-white hover:border-pink-200 transition-all font-bold text-sm shadow-sm peer-checked:shadow-[0_0_15px_rgba(236,72,153,0.1)]">2 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="3" class="peer sr-only">
                                    <div class="text-center py-3 bg-white/60 border border-gray-200 rounded-xl peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 text-gray-500 hover:bg-white hover:border-pink-200 transition-all font-bold text-sm shadow-sm peer-checked:shadow-[0_0_15px_rgba(236,72,153,0.1)]">3 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="4" class="peer sr-only">
                                    <div class="text-center py-3 bg-white/60 border border-gray-200 rounded-xl peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 text-gray-500 hover:bg-white hover:border-pink-200 transition-all font-bold text-sm shadow-sm peer-checked:shadow-[0_0_15px_rgba(236,72,153,0.1)]">4 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="5" class="peer sr-only" checked>
                                    <div class="text-center py-3 bg-white/60 border border-gray-200 rounded-xl peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 text-gray-500 hover:bg-white hover:border-pink-200 transition-all font-bold text-sm shadow-sm peer-checked:shadow-[0_0_15px_rgba(236,72,153,0.1)]">5 Thn</div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Result Card (Sticky) -->
                <div class="lg:col-span-5 relative">
                    <!-- Glow behind result card -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] ambient-glow rounded-[3rem] blur-[50px] pointer-events-none z-0"></div>
                    
                    <div id="resultCard" class="spatial-glass-card rounded-[2.5rem] p-6 sm:p-8 md:p-10 sticky top-32 z-10 transition-all duration-300">
                        <h3 class="text-pink-500 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase mb-6 block border-b border-gray-100 pb-4">Estimasi Pembiayaan</h3>
                        
                        <div class="space-y-8">
                            <!-- Cicilan Per Bulan -->
                            <div>
                                <p class="text-xs text-gray-500 mb-2 uppercase tracking-widest font-bold">Angsuran per Bulan</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold text-gray-400">Rp</span>
                                    <span id="resultInstallment" class="text-4xl sm:text-5xl lg:text-6xl font-geely text-gray-900 drop-shadow-sm">0</span>
                                </div>
                            </div>

                            <!-- Total DP -->
                            <div class="bg-pink-50/80 rounded-[1.5rem] p-5 border border-pink-100 shadow-sm">
                                <p class="text-[10px] text-pink-600/80 mb-2 uppercase tracking-widest font-bold">Total Uang Muka (TDP)</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-lg text-pink-500">Rp</span>
                                    <span id="resultTdp" class="text-2xl sm:text-3xl font-geely text-pink-600">0</span>
                                </div>
                                <p class="text-[9px] text-gray-500 mt-3 tracking-wider leading-relaxed">*TDP sudah termasuk DP Murni, Asuransi (Estimasi), Biaya Admin, dan Angsuran Bulan Pertama (ADDM).</p>
                            </div>

                            <!-- Rincian -->
                            <div class="space-y-4 pt-4 border-t border-gray-200">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500 font-medium">Harga Kendaraan</span>
                                    <span id="detailOtr" class="font-bold text-gray-900 tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500 font-medium">Pokok Hutang</span>
                                    <span id="detailPrincipal" class="font-bold text-gray-900 tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-500 font-medium">Suku Bunga (Flat)</span>
                                    <span id="detailRate" class="font-bold text-pink-600 tracking-wide bg-pink-100/50 px-2 py-1 rounded-md border border-pink-100">0% p.a</span>
                                </div>
                            </div>

                            <button onclick="window.location.href='/test-drive'" class="w-full mt-8 bg-pink-500 hover:bg-pink-600 text-white font-bold py-4 px-6 rounded-full transition-all duration-300 text-xs tracking-[0.2em] uppercase shadow-[0_10px_20px_rgba(236,72,153,0.3)] hover:shadow-[0_15px_30px_rgba(236,72,153,0.4)] transform hover:-translate-y-1 relative overflow-hidden group">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                                <span class="relative z-10">Ajukan Test Drive</span>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Mobile Floating Summary (Glassmorphism Light Footer) -->
    <div id="mobileFloatingBar" class="fixed bottom-0 left-0 right-0 z-[100] p-4 lg:hidden transform translate-y-full transition-all duration-500 ease-in-out">
        <div class="spatial-glass rounded-2xl p-4 flex justify-between items-center border-t border-pink-200 shadow-[0_-10px_40px_rgba(0,0,0,0.08)]">
            <div class="flex flex-col">
                <p class="text-[8px] uppercase tracking-widest text-gray-500 font-bold mb-1">Angsuran / bln</p>
                <p class="text-xl font-geely text-pink-600 drop-shadow-sm">Rp <span id="floatInstallment">0</span></p>
            </div>
            <button onclick="document.getElementById('resultCard').scrollIntoView({behavior:'smooth'})" class="bg-pink-500 px-6 py-2.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-white shadow-[0_5px_15px_rgba(236,72,153,0.3)] active:scale-95 transition-transform">
                Lihat Detail
            </button>
        </div>
    </div>

    <!-- Logika Kalkulator (Vanilla JS) -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            
            // Data Terpadu: Model, Varian, Harga OTR & URL Sirv Spin untuk 360 Viewer
            const carData = {
                'ex5': {
                    spin: 'https://riszali.sirv.com/Spins/ex5/white.spin',
                    variants: [
                        { name: 'PRO (2026 Special Price)', price: 465000000 },
                        { name: 'MAX (2026 Special Price)', price: 505000000 }
                    ]
                },
                'ex2': {
                    spin: 'https://riszali.sirv.com/Spins/ex2/White.spin',
                    variants: [
                        { name: 'PRO', price: 229900000 },
                        { name: 'MAX', price: 259900000 }
                    ]
                },
                'starray': {
                    spin: 'https://riszali.sirv.com/Spins/starray/alphine-white.spin',
                    variants: [
                        { name: 'EM-i Hybrid', price: 499000000 }
                    ]
                }
            };

            // Data Suku Bunga Leasing Up-to-date (Flat p.a berdasarkan tenor tahun)
            const rates = {
                'bca': { 1: 2.77, 2: 3.33, 3: 3.39, 4: 3.99, 5: 4.99 },
                'mtf': { 1: 3.00, 2: 3.50, 3: 3.75, 4: 4.25, 5: 5.25 },
                'adira': { 1: 3.50, 2: 4.00, 3: 4.50, 4: 5.00, 5: 6.00 },
                'maybank': { 1: 2.98, 2: 3.48, 3: 3.68, 4: 4.18, 5: 5.28 },
                'cnaf': { 1: 2.88, 2: 3.38, 3: 3.58, 4: 4.08, 5: 5.18 },
                'muf': { 1: 2.99, 2: 3.49, 3: 3.79, 4: 4.19, 5: 5.19 },
                'clipan': { 1: 3.10, 2: 3.80, 3: 4.10, 4: 4.90, 5: 5.90 },
                'bfi': { 1: 3.75, 2: 4.25, 3: 4.75, 4: 5.50, 5: 6.50 },
                'oto': { 1: 3.60, 2: 4.10, 3: 4.60, 4: 5.20, 5: 6.10 }
            };

            // DOM Elements
            const modelBtns = document.querySelectorAll('.model-select-btn');
            const spinIframe = document.getElementById('car-spin-iframe');
            const variantSelect = document.getElementById('carVariant');
            const otrDisplay = document.getElementById('otrPriceDisplay');
            const otrValue = document.getElementById('otrPriceValue');
            const leasingSelect = document.getElementById('leasing');
            const dpPercentSlider = document.getElementById('dpPercent');
            const dpPercentLabel = document.getElementById('dpPercentLabel');
            const tenorRadios = document.querySelectorAll('input[name="tenor"]');
            
            const resultCard = document.getElementById('resultCard');
            const mobileFloatingBar = document.getElementById('mobileFloatingBar');
            const floatInstallment = document.getElementById('floatInstallment');

            // Format Rupiah
            const formatRupiah = (number) => {
                return new Intl.NumberFormat('id-ID', { maximumFractionDigits: 0 }).format(number);
            };

            // Memuat Varian ke dalam Dropdown Select
            const populateVariants = (modelKey) => {
                const variants = carData[modelKey].variants;
                variantSelect.innerHTML = '';
                
                variants.forEach((variant, index) => {
                    const option = document.createElement('option');
                    option.value = index;
                    option.textContent = variant.name;
                    variantSelect.appendChild(option);
                });
                
                // Set harga berdasarkan varian pertama (index 0) secara otomatis
                updatePriceFromVariant(modelKey, 0);
            };

            // Memperbarui Harga Berdasarkan Varian
            const updatePriceFromVariant = (modelKey, variantIndex) => {
                const price = carData[modelKey].variants[variantIndex].price;
                otrValue.value = price;
                otrDisplay.value = formatRupiah(price);
                calculateKKB();
            };

            // Fungsi Kalkulasi Utama KKB
            const calculateKKB = () => {
                const price = parseFloat(otrValue.value);
                const dpPercent = parseFloat(dpPercentSlider.value);
                const leasing = leasingSelect.value;
                const tenor = parseInt(document.querySelector('input[name="tenor"]:checked').value);
                
                const interestRate = rates[leasing][tenor];

                const dpPure = price * (dpPercent / 100);
                const principal = price - dpPure; 
                const totalInterest = principal * (interestRate / 100) * tenor; 
                const totalDebt = principal + totalInterest; 
                
                const months = tenor * 12;
                const installment = totalDebt / months; 

                // Estimasi Biaya Admin & Asuransi (ADDM)
                const adminFee = 2500000; 
                const insurance = price * 0.025 * tenor; 
                const totalDp = dpPure + adminFee + insurance + installment; 

                // Pulse Effect on Update
                resultCard.classList.remove('animate-pulse-pink');
                void resultCard.offsetWidth; // Trigger reflow
                resultCard.classList.add('animate-pulse-pink');

                // Update UI dengan animasi ringan (fade)
                const resultElements = ['resultInstallment', 'resultTdp', 'detailOtr', 'detailPrincipal', 'detailRate'];
                resultElements.forEach(id => {
                    const el = document.getElementById(id);
                    el.style.opacity = '0';
                });

                setTimeout(() => {
                    const installmentFormatted = formatRupiah(installment);
                    document.getElementById('resultInstallment').innerText = installmentFormatted;
                    document.getElementById('resultTdp').innerText = formatRupiah(totalDp);
                    document.getElementById('detailOtr').innerText = 'Rp ' + formatRupiah(price);
                    document.getElementById('detailPrincipal').innerText = 'Rp ' + formatRupiah(principal);
                    document.getElementById('detailRate').innerText = interestRate.toFixed(2) + '% p.a';
                    
                    // Update Floating Mobile Bar
                    floatInstallment.innerText = installmentFormatted;

                    resultElements.forEach(id => {
                        const el = document.getElementById(id);
                        el.style.transition = 'opacity 0.3s ease';
                        el.style.opacity = '1';
                    });
                }, 150);
            };

            // Scroll Logic to show/hide Floating Bar
            window.addEventListener('scroll', () => {
                const rect = resultCard.getBoundingClientRect();
                const isVisible = (rect.top >= 0 && rect.bottom <= window.innerHeight);
                
                // Jika kartu hasil tidak terlihat di layar, munculkan bar (hanya di mobile)
                if (window.innerWidth < 1024) {
                    if (rect.top > window.innerHeight || rect.bottom < 0) {
                        mobileFloatingBar.classList.remove('translate-y-full');
                        mobileFloatingBar.classList.add('translate-y-0');
                    } else {
                        mobileFloatingBar.classList.add('translate-y-full');
                        mobileFloatingBar.classList.remove('translate-y-0');
                    }
                }
            });

            // Event Listeners untuk Tombol Pemilihan Model
            modelBtns.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    // Reset styling semua tombol
                    modelBtns.forEach(b => {
                        b.classList.remove('active', 'border-pink-400', 'text-pink-600', 'bg-pink-50', 'shadow-[0_0_20px_rgba(236,72,153,0.15)]');
                        b.classList.add('border-gray-200', 'text-gray-500', 'bg-white/60');
                    });
                    
                    // Set styling tombol yang diklik (Light/Pink Theme)
                    const target = e.currentTarget;
                    target.classList.add('active', 'border-pink-400', 'text-pink-600', 'bg-pink-50', 'shadow-[0_0_20px_rgba(236,72,153,0.15)]');
                    target.classList.remove('border-gray-200', 'text-gray-500', 'bg-white/60');

                    // Ambil data kendaraan
                    const modelKey = target.getAttribute('data-model');
                    const selectedCar = carData[modelKey];

                    // Update Iframe 360 Spin dengan efek fade
                    spinIframe.style.opacity = '0';
                    setTimeout(() => {
                        spinIframe.src = selectedCar.spin;
                        spinIframe.style.transition = 'opacity 0.5s ease';
                        spinIframe.style.opacity = '1';
                    }, 300);

                    // Memuat varian yang sesuai
                    populateVariants(modelKey);
                });
            });

            // Event Listener untuk Dropdown Varian
            variantSelect.addEventListener('change', (e) => {
                const activeModelBtn = document.querySelector('.model-select-btn.active');
                const modelKey = activeModelBtn.getAttribute('data-model');
                updatePriceFromVariant(modelKey, e.target.value);
            });

            // Event Listeners Parameter Kalkulator lainnya
            leasingSelect.addEventListener('change', calculateKKB);

            dpPercentSlider.addEventListener('input', (e) => {
                dpPercentLabel.innerText = e.target.value + '%';
                calculateKKB();
            });

            tenorRadios.forEach(radio => {
                radio.addEventListener('change', calculateKKB);
            });

            // Inisialisasi Pertama Kali (Pilih EX5 sebagai default)
            spinIframe.src = carData['ex5'].spin;
            populateVariants('ex5');
        });
    </script>
</x-layouts.app>
<x-layouts.app>
    <!-- OPTIMASI SEO ON-PAGE -->
    @section('title', 'Simulasi Kredit Geely Jakarta | EX5, EX2 & Starray EM-i')
    @section('meta_description', 'Hitung estimasi cicilan bulanan, TDP, dan bunga kredit mobil Geely EX5, EX2, dan Starray di Dealer Resmi Geely Fatmawati Jakarta Selatan.')
    @section('keywords', 'Simulasi Kredit Geely, Cicilan Geely EX5, Kredit Geely EX2 Jakarta, DP Mobil Geely, Promo Kredit Geely Fatmawati')
    
    <!-- ==========================================
         ULTRA-PREMIUM GLOBAL STYLES
    =========================================== -->
    <style>
        /* Base Resets & Smooth Scrolling */
        html, body { 
            scroll-behavior: smooth; 
            background-color: #050505; 
            color: #ffffff;
            overflow-x: hidden; 
        }
        
        /* Advanced Cinematic Noise */
        .bg-noise::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.8' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.04'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 1;
            mix-blend-mode: overlay;
        }

        /* Next-Gen Spatial Glassmorphism */
        .glass-panel {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.01) 100%);
            backdrop-filter: blur(40px) saturate(150%);
            -webkit-backdrop-filter: blur(40px) saturate(150%);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.05);
        }

        /* Liquid Text Gradient */
        .text-liquid {
            background: linear-gradient(270deg, #ffffff, #818cf8, #22d3ee, #ffffff);
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

        /* Custom Range Slider */
        input[type=range] {
            -webkit-appearance: none;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            height: 6px;
        }
        input[type=range]::-webkit-slider-thumb {
            -webkit-appearance: none;
            height: 20px;
            width: 20px;
            border-radius: 50%;
            background: #22d3ee;
            cursor: pointer;
            box-shadow: 0 0 15px rgba(34, 211, 238, 0.6);
            transition: transform 0.2s;
        }
        input[type=range]::-webkit-slider-thumb:hover {
            transform: scale(1.2);
        }

        /* Form Inputs Customization for Dark Theme */
        .dark-input {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
        }
        .dark-input:focus {
            border-color: #22d3ee;
            box-shadow: 0 0 0 2px rgba(34, 211, 238, 0.2);
            outline: none;
        }
        .dark-input option {
            background-color: #111;
            color: #fff;
        }

        /* Visual Feedback Pulse */
        @keyframes result-pulse {
            0% { box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 0 0 rgba(34, 211, 238, 0.4); }
            70% { box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 0 15px rgba(34, 211, 238, 0); }
            100% { box-shadow: 0 20px 50px rgba(0,0,0,0.5), 0 0 0 0 rgba(34, 211, 238, 0); }
        }
        .animate-pulse-cyan {
            animation: result-pulse 0.8s cubic-bezier(0.25, 1, 0.5, 1);
        }
    </style>

    <div class="relative min-h-screen bg-[#050505] overflow-hidden pb-24">
        <!-- Ambient Background Orbs -->
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-cyan-600/15 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-indigo-600/10 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute inset-0 z-0 bg-noise"></div>

        <!-- ==========================================
             HERO & CAR SELECTOR SECTION
        =========================================== -->
        <section class="relative z-10 pt-24 md:pt-32 pb-12 max-w-[1400px] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-cyan-500/20 bg-cyan-500/5 text-cyan-400 backdrop-blur-md">
                <span class="text-[10px] font-bold tracking-[0.3em] uppercase">Layanan Finansial Dealer Geely</span>
            </div>
            <h1 class="font-geely text-4xl md:text-6xl lg:text-7xl font-bold uppercase tracking-tighter mb-6 drop-shadow-xl">
                Simulasi <span class="text-liquid">Kredit</span>
            </h1>
            <p class="text-gray-400 text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed mb-12">
                Rencanakan kepemilikan kendaraan Geely Anda dengan kalkulator pintar kami. Pilih model favorit Anda, putar 360°, dan dapatkan estimasi cicilan terbaik khusus area Jakarta.
            </p>

            <!-- Model Selection Pills -->
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button type="button" class="model-select-btn active glass-panel px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-cyan-400 text-cyan-400 shadow-[0_0_20px_rgba(34,211,238,0.2)]" data-model="ex5">
                    Geely EX5
                </button>
                <button type="button" class="model-select-btn glass-panel px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-white/10 text-gray-400 hover:text-white hover:border-white/30" data-model="ex2">
                    Geely EX2
                </button>
                <button type="button" class="model-select-btn glass-panel px-6 py-3 rounded-full text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all duration-300 border-white/10 text-gray-400 hover:text-white hover:border-white/30" data-model="starray">
                    Starray EM-i
                </button>
            </div>

            <!-- 360 Viewer Area -->
            <div class="glass-panel p-2 md:p-4 rounded-[2rem] md:rounded-[2.5rem] w-full max-w-5xl mx-auto h-[40vh] md:h-[50vh] min-h-[300px] relative overflow-hidden shadow-[0_30px_60px_rgba(0,0,0,0.8)] mb-16">
                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-b from-white/5 to-transparent pointer-events-none z-20"></div>
                <div class="relative w-full h-full rounded-[1.5rem] md:rounded-[2rem] overflow-hidden flex items-center justify-center">
                    <iframe id="car-spin-iframe" title="Tampilan 360 Derajat Geely" src="https://riszali.sirv.com/Spins/ex5/white.spin" class="absolute top-1/2 left-1/2 w-[120%] h-[120%] -translate-x-1/2 -translate-y-1/2 border-0" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <!-- ==========================================
             CALCULATOR SECTION
        =========================================== -->
        <section class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <!-- Left Column: Form Inputs -->
                <div class="lg:col-span-7 glass-panel rounded-[2rem] p-6 sm:p-8 md:p-10">
                    <h2 class="font-geely text-2xl md:text-3xl font-bold mb-8 border-b border-white/10 pb-4 text-white tracking-tight">Parameter Pembiayaan</h2>
                    
                    <form id="creditForm" class="space-y-8">
                        
                        <!-- Pilih Varian Kendaraan -->
                        <div>
                            <label for="carVariant" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-3">Varian Kendaraan</label>
                            <div class="relative">
                                <select id="carVariant" class="w-full rounded-xl py-4 px-4 dark-input transition-colors cursor-pointer appearance-none">
                                    <!-- Options populated by JS -->
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <!-- Harga OTR (Readonly/Auto updated) -->
                        <div>
                            <label for="otrPrice" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-3">Harga OTR (Jakarta)</label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-cyan-400 font-bold">Rp</span>
                                <input type="text" id="otrPriceDisplay" readonly class="w-full pl-12 pr-4 py-4 rounded-xl dark-input font-geely text-xl cursor-not-allowed opacity-80" value="0">
                                <input type="hidden" id="otrPriceValue" value="0">
                            </div>
                            <p class="text-[9px] text-gray-500 mt-2 tracking-widest uppercase">*Harga estimasi khusus, dapat berubah sewaktu-waktu.</p>
                        </div>

                        <!-- Pilih Leasing -->
                        <div>
                            <label for="leasing" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-3">Mitra Leasing</label>
                            <div class="relative">
                                <select id="leasing" class="w-full rounded-xl py-4 px-4 dark-input transition-colors cursor-pointer appearance-none">
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
                        <div>
                            <div class="flex justify-between items-center mb-4">
                                <label for="dpPercent" class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400">Uang Muka (DP)</label>
                                <span id="dpPercentLabel" class="text-cyan-400 font-geely text-2xl drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">20%</span>
                            </div>
                            <input type="range" id="dpPercent" min="15" max="50" step="5" value="20" class="w-full cursor-pointer">
                            <div class="flex justify-between text-[10px] font-bold tracking-widest text-gray-500 mt-3 uppercase">
                                <span>15% (Min)</span>
                                <span>50% (Max)</span>
                            </div>
                        </div>

                        <!-- Tenor -->
                        <div>
                            <label class="block text-[11px] font-bold tracking-[0.2em] uppercase text-gray-400 mb-4">Tenor (Jangka Waktu)</label>
                            <div class="grid grid-cols-5 gap-2 sm:gap-4">
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="1" class="peer sr-only">
                                    <div class="text-center py-3 border border-white/10 rounded-xl peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-400 text-gray-400 hover:bg-white/5 transition-all font-bold text-sm">1 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="2" class="peer sr-only">
                                    <div class="text-center py-3 border border-white/10 rounded-xl peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-400 text-gray-400 hover:bg-white/5 transition-all font-bold text-sm">2 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="3" class="peer sr-only">
                                    <div class="text-center py-3 border border-white/10 rounded-xl peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-400 text-gray-400 hover:bg-white/5 transition-all font-bold text-sm">3 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="4" class="peer sr-only">
                                    <div class="text-center py-3 border border-white/10 rounded-xl peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-400 text-gray-400 hover:bg-white/5 transition-all font-bold text-sm">4 Thn</div>
                                </label>
                                <label class="cursor-pointer">
                                    <input type="radio" name="tenor" value="5" class="peer sr-only" checked>
                                    <div class="text-center py-3 border border-white/10 rounded-xl peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-400 text-gray-400 hover:bg-white/5 transition-all font-bold text-sm">5 Thn</div>
                                </label>
                            </div>
                        </div>
                    </form>
                </div>

                <!-- Right Column: Result Card (Sticky) -->
                <div class="lg:col-span-5 relative">
                    <!-- Glow behind result card -->
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-cyan-600/20 rounded-[3rem] blur-[80px] pointer-events-none z-0"></div>
                    
                    <div id="resultCard" class="glass-panel rounded-[2rem] p-6 sm:p-8 md:p-10 sticky top-24 z-10 shadow-[0_20px_50px_rgba(0,0,0,0.5)] border-t border-l border-cyan-500/30 transition-all duration-300">
                        <h3 class="text-cyan-400 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase mb-6 block">Estimasi Pembiayaan</h3>
                        
                        <div class="space-y-8">
                            <!-- Cicilan Per Bulan -->
                            <div>
                                <p class="text-xs text-gray-400 mb-2 uppercase tracking-widest font-bold">Angsuran per Bulan</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold text-gray-300">Rp</span>
                                    <span id="resultInstallment" class="text-4xl sm:text-5xl lg:text-6xl font-geely text-white drop-shadow-[0_0_15px_rgba(255,255,255,0.3)]">0</span>
                                </div>
                            </div>

                            <!-- Total DP -->
                            <div class="bg-black/40 rounded-[1.5rem] p-5 border border-white/5 shadow-inner">
                                <p class="text-[10px] text-gray-400 mb-2 uppercase tracking-widest font-bold">Total Uang Muka (TDP)</p>
                                <div class="flex items-baseline gap-2">
                                    <span class="text-lg text-cyan-500">Rp</span>
                                    <span id="resultTdp" class="text-2xl sm:text-3xl font-geely text-cyan-400">0</span>
                                </div>
                                <p class="text-[9px] text-gray-500 mt-3 tracking-wider leading-relaxed">*TDP sudah termasuk DP Murni, Asuransi (Estimasi), Biaya Admin, dan Angsuran Bulan Pertama (ADDM).</p>
                            </div>

                            <!-- Rincian -->
                            <div class="space-y-4 pt-4 border-t border-white/10">
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-400 font-light">Harga Kendaraan</span>
                                    <span id="detailOtr" class="font-bold text-white tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-400 font-light">Pokok Hutang</span>
                                    <span id="detailPrincipal" class="font-bold text-white tracking-wide">Rp 0</span>
                                </div>
                                <div class="flex justify-between items-center text-sm">
                                    <span class="text-gray-400 font-light">Suku Bunga (Flat)</span>
                                    <span id="detailRate" class="font-bold text-cyan-400 tracking-wide bg-cyan-500/10 px-2 py-1 rounded-md">0% p.a</span>
                                </div>
                            </div>

                            <button onclick="window.location.href='/test-drive'" class="w-full mt-8 bg-cyan-600 hover:bg-cyan-500 text-white font-bold py-4 px-6 rounded-full transition-all duration-300 text-xs tracking-[0.2em] uppercase shadow-[0_10px_20px_rgba(34,211,238,0.3)] hover:shadow-[0_15px_30px_rgba(34,211,238,0.5)] transform hover:-translate-y-1">
                                Ajukan Test Drive
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <!-- Mobile Floating Summary (Glassmorphism Footer) -->
    <div id="mobileFloatingBar" class="fixed bottom-0 left-0 right-0 z-[100] p-4 lg:hidden transform translate-y-full transition-all duration-500 ease-in-out">
        <div class="glass-panel rounded-2xl p-4 flex justify-between items-center border-t border-cyan-500/40 shadow-[0_-10px_40px_rgba(0,0,0,0.8)]">
            <div class="flex flex-col">
                <p class="text-[8px] uppercase tracking-widest text-gray-400 font-bold mb-1">Angsuran / bln</p>
                <p class="text-xl font-geely text-cyan-400 drop-shadow-[0_0_8px_rgba(34,211,238,0.5)]">Rp <span id="floatInstallment">0</span></p>
            </div>
            <button onclick="document.getElementById('resultCard').scrollIntoView({behavior:'smooth'})" class="bg-cyan-600 px-6 py-2.5 rounded-full text-[10px] font-bold uppercase tracking-widest text-white shadow-[0_5px_15px_rgba(34,211,238,0.3)] active:scale-95 transition-transform">
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
                resultCard.classList.remove('animate-pulse-cyan');
                void resultCard.offsetWidth; // Trigger reflow
                resultCard.classList.add('animate-pulse-cyan');

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
                        b.classList.remove('active', 'border-cyan-400', 'text-cyan-400', 'shadow-[0_0_20px_rgba(34,211,238,0.2)]');
                        b.classList.add('border-white/10', 'text-gray-400');
                    });
                    
                    // Set styling tombol yang diklik
                    const target = e.currentTarget;
                    target.classList.add('active', 'border-cyan-400', 'text-cyan-400', 'shadow-[0_0_20px_rgba(34,211,238,0.2)]');
                    target.classList.remove('border-white/10', 'text-gray-400');

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
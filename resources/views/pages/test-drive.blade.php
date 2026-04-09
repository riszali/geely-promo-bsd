<x-layouts.app>
    <!-- OPTIMASI SEO -->
    @section('title', 'Book a Test Drive | Promo Geely BSD Tangerang')
    
    <style>
        html, body { 
            background-color: #f8fafc; /* Konsisten dengan index */
            color: #111827;
            overflow-x: hidden; 
        }
        
        ::-webkit-scrollbar { width: 0px; background: transparent; }

        /* CLEAN LIGHT GLASSMORPHISM - Konsisten dengan Index */
        .spatial-glass {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(30px) saturate(120%);
            -webkit-backdrop-filter: blur(30px) saturate(120%);
            border: 1px solid rgba(255, 255, 255, 0.9);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05), inset 0 1px 0 rgba(255, 255, 255, 1);
        }

        .hud-input-group {
            position: relative;
            transition: all 0.3s ease;
        }
        
        .hud-input {
            width: 100%;
            background: rgba(255, 255, 255, 0.8);
            border: 1px solid rgba(226, 232, 240, 0.8);
            border-radius: 1.25rem;
            padding: 1.25rem 1.25rem 1.25rem 3.5rem;
            color: #1f2937;
            font-size: 0.875rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 4px rgba(0,0,0,0.02);
        }
        
        .hud-input:focus {
            background: #ffffff;
            border-color: #ec4899; /* Pink 500 */
            box-shadow: 0 0 20px rgba(236, 72, 153, 0.15);
            outline: none;
        }
        
        .hud-input::placeholder { color: #9ca3af; }
        
        .hud-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            transition: all 0.3s ease;
            pointer-events: none;
            width: 1.25rem;
            height: 1.25rem;
        }
        
        .hud-input:focus ~ .hud-icon {
            color: #ec4899; /* Pink 500 */
        }

        /* Ambient Glow Pink */
        .ambient-glow {
            background: radial-gradient(circle, rgba(244, 114, 182, 0.2) 0%, rgba(255, 255, 255, 0) 70%);
            mix-blend-mode: multiply;
        }

        .text-gradient-pink {
            background: linear-gradient(135deg, #111827 10%, #ec4899 70%, #be185d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Styling Ikon Kalender dan Jam */
        ::-webkit-calendar-picker-indicator {
            filter: opacity(0.4);
            cursor: pointer;
            transition: 0.3s;
        }
        ::-webkit-calendar-picker-indicator:hover {
            filter: opacity(0.8) drop-shadow(0 0 2px rgba(236, 72, 153, 0.5));
        }

        .bg-reactive {
            transition: all 1s ease-in-out;
            transform: scale(1.05);
        }

        @keyframes shimmer { 100% { transform: translateX(100%); } }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>

    <div class="relative min-h-screen flex items-center justify-center py-24 px-4 sm:px-6 lg:px-8 overflow-hidden bg-[#f8fafc]">
        
        <!-- Background Decor Terang -->
        <div class="absolute inset-0 z-0">
            <img id="bg-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" class="bg-reactive absolute inset-0 w-full h-full object-cover opacity-10 blur-[30px] scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-[#f8fafc]/80 via-white/50 to-[#f8fafc]"></div>
            
            <!-- Ambient Pink Glows -->
            <div class="absolute top-0 right-0 w-[800px] h-[800px] ambient-glow opacity-60 pointer-events-none"></div>
            <div class="absolute bottom-0 left-0 w-[600px] h-[600px] ambient-glow opacity-40 pointer-events-none"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1200px] spatial-glass rounded-[2.5rem] md:rounded-[3.5rem] overflow-hidden flex flex-col lg:flex-row shadow-[0_20px_60px_rgba(0,0,0,0.06)] ring-1 ring-white/50">
            
            <!-- Visual Side -->
            <div class="w-full lg:w-5/12 p-8 md:p-12 relative flex flex-col justify-between overflow-hidden group min-h-[400px] lg:min-h-auto">
                <!-- Image dengan efek hover zoom -->
                <img id="card-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" class="absolute inset-0 w-full h-full object-cover transition-all duration-[2s] group-hover:scale-105">
                
                <!-- Overlay Terang -->
                <div class="absolute inset-0 bg-gradient-to-t from-white via-white/50 to-transparent"></div>
                <div class="absolute inset-0 bg-pink-50/10 mix-blend-overlay"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-pink-200 bg-white/80 backdrop-blur-md shadow-sm">
                        <span class="w-2 h-2 rounded-full bg-pink-500 animate-pulse"></span>
                        <span class="text-[9px] font-bold tracking-[0.3em] uppercase text-pink-600">Geely BSD Booking</span>
                    </div>
                    <h1 class="font-geely text-3xl sm:text-4xl lg:text-[40px] text-gray-900 font-bold uppercase tracking-tight leading-[1.1]">
                        Experience<br><span class="text-gradient-pink">The Future.</span>
                    </h1>
                </div>

                <div class="relative z-10 mt-24 lg:mt-0">
                    <div id="active-car-tag" class="text-pink-500 text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Smart SUV</div>
                    <h2 id="active-car-title" class="font-geely text-3xl text-gray-900 tracking-wide uppercase mb-3">Geely EX5</h2>
                    <p id="active-car-desc" class="text-gray-600 text-sm font-light max-w-sm leading-relaxed border-l-2 border-pink-400 pl-4">
                        Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik di BSD.
                    </p>
                </div>
            </div>

            <!-- Form Side -->
            <div class="w-full lg:w-7/12 p-8 md:p-12 bg-white/40 backdrop-blur-xl border-l border-white/60">
                
                <form id="testDriveForm" class="space-y-8">
                    
                    <!-- Pilihan Model -->
                    <div class="space-y-4">
                        <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-500 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-pink-400"></span> Pilih Model
                        </label>
                        <div class="flex flex-wrap gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex5" class="peer sr-only" checked>
                                <div class="px-6 py-3 rounded-full border border-gray-200 bg-white/60 text-gray-500 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 peer-checked:shadow-[0_0_20px_rgba(236,72,153,0.15)] hover:bg-white">
                                    Geely EX5
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex2" class="peer sr-only">
                                <div class="px-6 py-3 rounded-full border border-gray-200 bg-white/60 text-gray-500 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 peer-checked:shadow-[0_0_20px_rgba(236,72,153,0.15)] hover:bg-white">
                                    Geely EX2
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="starray" class="peer sr-only">
                                <div class="px-6 py-3 rounded-full border border-gray-200 bg-white/60 text-gray-500 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-pink-50 peer-checked:border-pink-400 peer-checked:text-pink-600 peer-checked:shadow-[0_0_20px_rgba(236,72,153,0.15)] hover:bg-white">
                                    Starray EM-i
                                </div>
                            </label>
                        </div>
                    </div>

                    <!-- Input Grid -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="space-y-5">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-500 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-pink-400"></span> Identitas Pengguna
                            </label>
                            
                            <div class="hud-input-group">
                                <input type="text" id="fullName" required placeholder="Nama Lengkap" class="hud-input peer text-gray-900">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            
                            <div class="hud-input-group">
                                <input type="tel" id="phoneNumber" required placeholder="No. WhatsApp" class="hud-input peer text-gray-900">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                        </div>

                        <div class="space-y-5">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-gray-500 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-pink-400"></span> Preferensi Waktu
                            </label>
                            
                            <div class="hud-input-group">
                                <input type="date" id="prefDate" required class="hud-input peer !pl-11 text-gray-900">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="hud-input-group">
                                <input type="time" id="prefTime" required class="hud-input peer !pl-11 text-gray-900">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" id="submitBtn" class="w-full relative group overflow-hidden rounded-full bg-pink-500 py-4 sm:py-5 px-6 transition-all duration-500 hover:bg-pink-600 hover:shadow-[0_15px_30px_rgba(236,72,153,0.3)] shadow-[0_10px_20px_rgba(236,72,153,0.2)]">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                            
                            <span class="relative z-10 flex justify-center items-center gap-3 text-white font-bold text-xs sm:text-sm tracking-[0.2em] uppercase transition-colors">
                                Konfirmasi via WhatsApp
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </span>
                        </button>
                    </div>
                </form>

                <!-- Pesan Sukses (Hidden by default) -->
                <div id="successMessage" class="hidden h-full flex-col items-center justify-center text-center animate-fade-in py-10">
                    <div class="relative w-24 h-24 mb-8 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border-2 border-pink-200 animate-[ping_2s_infinite]"></div>
                        <div class="absolute inset-2 rounded-full border border-pink-400 animate-[spin_4s_linear_infinite]"></div>
                        <svg class="w-10 h-10 text-pink-500 relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="font-geely text-2xl sm:text-3xl text-gray-900 mb-3 tracking-wide">Pemesanan Diluncurkan.</h3>
                    <p class="text-gray-600 text-sm leading-relaxed max-w-sm mx-auto mb-8">
                        Silakan periksa WhatsApp Anda. Pesan booking telah disiapkan untuk dikirim ke tim Geely BSD.
                    </p>
                    <button onclick="window.location.reload()" class="px-8 py-3 rounded-full bg-white border border-gray-200 text-gray-700 text-[10px] font-bold tracking-[0.2em] uppercase hover:bg-gray-50 hover:text-pink-600 hover:border-pink-200 transition-all duration-300 shadow-sm">
                        Kembali
                    </button>
                </div>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const db_visuals = {
                'ex5': {
                    img: 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp',
                    tag: 'Smart SUV',
                    title: 'Geely EX5',
                    desc: 'Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik di BSD.'
                },
                'ex2': {
                    img: 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg',
                    tag: 'Urban EV',
                    title: 'Geely EX2',
                    desc: 'Manuver lincah untuk jalanan kota. Rasakan teknologi EV masa depan langsung dari genggaman Anda.'
                },
                'starray': {
                    img: 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp',
                    tag: 'Super Hybrid',
                    title: 'Starray EM-i',
                    desc: 'Simfoni kemewahan kabin dan performa tanpa batas. Atur jadwal Anda untuk pengalaman eksklusif.'
                }
            };

            const radios = document.querySelectorAll('input[name="car_model"]');
            const bgVisual = document.getElementById('bg-visual');
            const cardVisual = document.getElementById('card-visual');
            const activeTag = document.getElementById('active-car-tag');
            const activeTitle = document.getElementById('active-car-title');
            const activeDesc = document.getElementById('active-car-desc');
            const form = document.getElementById('testDriveForm');
            const successMsg = document.getElementById('successMessage');

            radios.forEach(radio => {
                radio.addEventListener('change', (e) => {
                    const data = db_visuals[e.target.value];
                    
                    // Fade out text elements
                    [activeTag, activeTitle, activeDesc].forEach(el => {
                        el.style.opacity = '0';
                        el.style.transform = 'translateY(10px)';
                        el.style.transition = 'all 0.3s ease';
                    });
                    
                    // Fade out images
                    cardVisual.style.opacity = '0';
                    bgVisual.style.opacity = '0';

                    setTimeout(() => {
                        // Change content
                        bgVisual.src = data.img;
                        cardVisual.src = data.img;
                        activeTag.textContent = data.tag;
                        activeTitle.textContent = data.title;
                        activeDesc.textContent = data.desc;

                        // Fade in elements
                        [activeTag, activeTitle, activeDesc].forEach(el => {
                            el.style.opacity = '1';
                            el.style.transform = 'translateY(0)';
                        });
                        
                        cardVisual.style.opacity = '1';
                        bgVisual.style.opacity = '0.1'; // Keep background subtle in light mode
                    }, 300);
                });
            });

            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            const dateInput = document.getElementById('prefDate');
            if(dateInput) dateInput.setAttribute('min', today);

            // Handle Form Submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const name = document.getElementById('fullName').value;
                const phone = document.getElementById('phoneNumber').value;
                const date = document.getElementById('prefDate').value;
                const time = document.getElementById('prefTime').value;
                const modelValue = document.querySelector('input[name="car_model"]:checked').value;
                const modelLabel = db_visuals[modelValue].title;
                
                // Konfirmasi nomor WA +62 822-4666-6904
                const targetWA = "6282246666904";
                
                const message = `Halo Promo Geely BSD,\n\nSaya ingin melakukan *Test Drive*:\n\n` +
                                `*Model:* ${modelLabel}\n` +
                                `*Nama:* ${name}\n` +
                                `*WhatsApp:* ${phone}\n` +
                                `*Jadwal:* ${date} pukul ${time}\n\nMohon konfirmasinya. Terima kasih!`;

                const waUrl = `https://wa.me/${targetWA}?text=${encodeURIComponent(message)}`;

                const btn = document.getElementById('submitBtn');
                btn.innerHTML = `
                    <span class="relative z-10 flex justify-center items-center gap-3 text-white font-bold text-xs sm:text-sm tracking-[0.2em] uppercase">
                        <svg class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Membuka WhatsApp...
                    </span>
                `;
                btn.disabled = true;
                btn.classList.add('opacity-80', 'cursor-not-allowed');

                window.open(waUrl, '_blank');

                setTimeout(() => {
                    form.style.display = 'none';
                    successMsg.classList.remove('hidden');
                    successMsg.classList.add('flex');
                }, 800);
            });
        });
    </script>
</x-layouts.app>
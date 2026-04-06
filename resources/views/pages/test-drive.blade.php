<x-layouts.app>
    <style>
        html, body { 
            background-color: #030303; 
            color: #ffffff;
            overflow-x: hidden; 
        }
        
        ::-webkit-scrollbar { width: 0px; background: transparent; }

        .spatial-glass {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.08) 0%, rgba(255, 255, 255, 0.02) 100%);
            backdrop-filter: blur(30px) saturate(120%);
            -webkit-backdrop-filter: blur(30px) saturate(120%);
            border: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        }

        .hud-input-group {
            position: relative;
            transition: all 0.3s ease;
        }
        .hud-input {
            width: 100%;
            background: rgba(0, 0, 0, 0.3);
            border: 1px solid rgba(255, 255, 255, 0.05);
            border-radius: 1rem;
            padding: 1.25rem 1.25rem 1.25rem 3.5rem;
            color: #fff;
            font-size: 0.875rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .hud-input:focus {
            background: rgba(34, 211, 238, 0.05);
            border-color: rgba(34, 211, 238, 0.5);
            box-shadow: 0 0 20px rgba(34, 211, 238, 0.15);
            outline: none;
        }
        .hud-input::placeholder { color: rgba(255, 255, 255, 0.3); }
        .hud-input option { background-color: #0f172a; color: #fff; }
        
        .hud-icon {
            position: absolute;
            left: 1.25rem;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255, 255, 255, 0.4);
            transition: all 0.3s ease;
            pointer-events: none;
            width: 1.25rem;
            height: 1.25rem;
        }
        .hud-input:focus ~ .hud-icon {
            color: #22d3ee;
            filter: drop-shadow(0 0 8px rgba(34, 211, 238, 0.8));
        }

        ::-webkit-calendar-picker-indicator {
            filter: invert(1);
            opacity: 0.3;
            cursor: pointer;
        }
        ::-webkit-calendar-picker-indicator:hover { opacity: 1; }

        .bg-reactive {
            transition: all 1s ease-in-out;
            transform: scale(1.05);
        }
    </style>

    <div class="relative min-h-screen flex items-center justify-center py-24 px-4 sm:px-6 lg:px-8 overflow-hidden">
        
        <div class="absolute inset-0 z-0">
            <img id="bg-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" class="bg-reactive absolute inset-0 w-full h-full object-cover opacity-40 blur-[20px] scale-110">
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-[#030303]"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/20 to-black/80"></div>
            <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9InJnYmEoMjU1LDI1NSwyNTUsMC4wNSkiLz48L3N2Zz4=')] opacity-50 mix-blend-overlay"></div>
        </div>

        <div class="relative z-10 w-full max-w-[1200px] spatial-glass rounded-[2rem] md:rounded-[3rem] overflow-hidden flex flex-col lg:flex-row shadow-[0_0_100px_rgba(0,0,0,1)] ring-1 ring-white/10">
            
            <div class="w-full lg:w-5/12 p-8 md:p-12 relative flex flex-col justify-between overflow-hidden group">
                <img id="card-visual" src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-17-YyvDPj63ErSwozLD.webp" class="absolute inset-0 w-full h-full object-cover transition-transform duration-[2s] group-hover:scale-110 opacity-60 mix-blend-luminosity group-hover:mix-blend-normal">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-transparent"></div>
                <div class="absolute inset-0 bg-cyan-900/20 mix-blend-overlay"></div>

                <div class="relative z-10">
                    <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-cyan-400/30 bg-black/40 backdrop-blur-md">
                        <span class="w-2 h-2 rounded-full bg-cyan-400 animate-pulse"></span>
                        <span class="text-[9px] font-bold tracking-[0.3em] uppercase text-cyan-300">Geely Fatmawati Booking</span>
                    </div>
                    <h1 class="font-geely text-2xl sm:text-3xl lg:text-4xl text-white font-bold uppercase tracking-tight leading-[1.1] drop-shadow-2xl">
                        Unlock<br><span class="text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 to-blue-500">The Future.</span>
                    </h1>
                </div>

                <div class="relative z-10 mt-24 lg:mt-0">
                    <div id="active-car-tag" class="text-cyan-400 text-[10px] font-bold tracking-[0.3em] uppercase mb-2 block">Smart SUV</div>
                    <h2 id="active-car-title" class="font-geely text-3xl text-white tracking-wide uppercase mb-3">Geely EX5</h2>
                    <p id="active-car-desc" class="text-white/60 text-sm font-light max-w-sm leading-relaxed">
                        Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik.
                    </p>
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-8 md:p-12 bg-black/40 backdrop-blur-xl border-l border-white/5">
                
                <form id="testDriveForm" class="space-y-8">
                    
                    <div class="space-y-3">
                        <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                            <span class="w-4 h-[1px] bg-cyan-500/50"></span> Pilih Model
                        </label>
                        <div class="flex flex-wrap gap-3">
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex5" class="peer sr-only" checked>
                                <div class="px-6 py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Geely EX5
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="ex2" class="peer sr-only">
                                <div class="px-6 py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Geely EX2
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="car_model" value="starray" class="peer sr-only">
                                <div class="px-6 py-3 rounded-full border border-white/10 bg-white/5 text-white/60 text-xs font-bold tracking-[0.15em] uppercase transition-all duration-300 peer-checked:bg-cyan-500/20 peer-checked:border-cyan-400 peer-checked:text-cyan-300 peer-checked:shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-white/10">
                                    Starray EM-i
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                        <div class="space-y-4">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-cyan-500/50"></span> Identitas Pengguna
                            </label>
                            
                            <div class="hud-input-group">
                                <input type="text" id="fullName" required placeholder="Nama Lengkap" class="hud-input peer">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                            </div>
                            
                            <div class="hud-input-group">
                                <input type="tel" id="phoneNumber" required placeholder="No. WhatsApp" class="hud-input peer">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                        </div>

                        <div class="space-y-4">
                            <label class="text-[10px] font-bold tracking-[0.2em] uppercase text-white/50 flex items-center gap-2">
                                <span class="w-4 h-[1px] bg-cyan-500/50"></span> Preferensi Waktu
                            </label>
                            
                            <div class="hud-input-group">
                                <input type="date" id="prefDate" required class="hud-input peer !pl-11 text-white/80">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            </div>
                            <div class="hud-input-group">
                                <input type="time" id="prefTime" required class="hud-input peer !pl-11 text-white/80">
                                <svg class="hud-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </div>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" id="submitBtn" class="w-full relative group overflow-hidden rounded-xl bg-cyan-500/10 border border-cyan-400/50 py-4 sm:py-5 px-6 transition-all duration-300 hover:bg-cyan-500 hover:shadow-[0_0_40px_rgba(34,211,238,0.6)]">
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-[shimmer_1.5s_infinite]"></div>
                            
                            <span class="relative z-10 flex justify-center items-center gap-3 text-cyan-300 group-hover:text-black font-bold text-xs sm:text-sm tracking-[0.2em] uppercase transition-colors">
                                Konfirmasi via WhatsApp
                                <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </span>
                        </button>
                    </div>
                </form>

                <div id="successMessage" class="hidden h-full flex-col items-center justify-center text-center animate-fade-in py-10">
                    <div class="relative w-24 h-24 mb-8 flex items-center justify-center">
                        <div class="absolute inset-0 rounded-full border-2 border-cyan-500/30 animate-[ping_2s_infinite]"></div>
                        <div class="absolute inset-2 rounded-full border border-cyan-400/60 animate-[spin_4s_linear_infinite]"></div>
                        <svg class="w-10 h-10 text-cyan-300 relative z-10 drop-shadow-[0_0_10px_rgba(34,211,238,0.8)]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </div>
                    <h3 class="font-geely text-2xl sm:text-3xl text-white mb-3 tracking-wide">Pemesanan Diluncurkan.</h3>
                    <p class="text-white/60 text-sm leading-relaxed max-w-sm mx-auto mb-8">
                        Silakan periksa WhatsApp Anda. Pesan booking telah disiapkan untuk dikirim ke tim Geely Fatmawati.
                    </p>
                    <button onclick="window.location.reload()" class="px-8 py-3 rounded-full bg-white/5 border border-white/10 text-white/80 text-[10px] tracking-[0.2em] uppercase hover:bg-white hover:text-black transition-all duration-300">
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
                    desc: 'Siap mengubah cara Anda memandang mobilitas. Konfirmasi jadwal test drive Anda dalam hitungan detik.'
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
                    [activeTag, activeTitle, activeDesc, cardVisual, bgVisual].forEach(el => {
                        el.style.opacity = '0';
                    });

                    setTimeout(() => {
                        bgVisual.src = data.img;
                        cardVisual.src = data.img;
                        activeTag.textContent = data.tag;
                        activeTitle.textContent = data.title;
                        activeDesc.textContent = data.desc;

                        activeTag.style.opacity = '1';
                        activeTitle.style.opacity = '1';
                        activeDesc.style.opacity = '1';
                        cardVisual.style.opacity = '0.6';
                        bgVisual.style.opacity = '0.4';
                    }, 400);
                });
            });

            const today = new Date().toISOString().split('T')[0];
            const dateInput = document.getElementById('prefDate');
            if(dateInput) dateInput.setAttribute('min', today);

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const name = document.getElementById('fullName').value;
                const phone = document.getElementById('phoneNumber').value;
                const date = document.getElementById('prefDate').value;
                const time = document.getElementById('prefTime').value;
                const modelValue = document.querySelector('input[name="car_model"]:checked').value;
                const modelLabel = db_visuals[modelValue].title;
                
                const targetWA = "6285772087335";
                
                // Menggunakan \n untuk baris baru, lalu nanti di-encode
                const message = `Halo Geely Fatmawati,\n\nSaya ingin melakukan *Test Drive*:\n\n` +
                                `*Model:* ${modelLabel}\n` +
                                `*Nama:* ${name}\n` +
                                `*WhatsApp:* ${phone}\n` +
                                `*Jadwal:* ${date} pukul ${time}\n\nMohon konfirmasinya. Terima kasih!`;

                // Pastikan pesan aman dilewatkan ke URL dengan encodeURIComponent
                const waUrl = `https://wa.me/${targetWA}?text=${encodeURIComponent(message)}`;

                const btn = document.getElementById('submitBtn');
                btn.innerHTML = `
                    <span class="relative z-10 flex justify-center items-center gap-3 text-cyan-300 font-bold text-xs sm:text-sm tracking-[0.2em] uppercase">
                        <svg class="animate-spin h-4 w-4 text-cyan-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        Membuka WhatsApp...
                    </span>
                `;
                btn.disabled = true;

                // [PERBAIKAN]: Eksekusi langsung tanpa setTimeout agar tidak diblokir browser
                window.open(waUrl, '_blank');

                // Update UI disembunyikan dalam hitungan detik setelah eksekusi tab baru
                setTimeout(() => {
                    form.style.display = 'none';
                    successMsg.classList.remove('hidden');
                    successMsg.classList.add('flex');
                }, 800);
            });
        });
    </script>
    
    <style>
        @keyframes shimmer { 100% { transform: translateX(100%); } }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        .animate-fade-in {
            animation: fadeIn 0.5s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }
    </style>
</x-layouts.app>
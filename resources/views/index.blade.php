<x-layouts.app>
    <!-- OPTIMASI SEO ON-PAGE -->
    @section('title', 'Dealer Resmi Geely Fatmawati Jakarta Selatan | Promo & Test Drive')
    @section('meta_description', 'Kunjungi Showroom Dealer Resmi Geely Fatmawati Jakarta Selatan. Dapatkan promo harga terbaru, simulasi kredit, dan booking test drive Geely EX5, EX2 & Starray.')
    @section('og_image', 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG')
    
    @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "AutoDealer",
          "name": "Dealer Resmi Geely Fatmawati Jakarta",
          "image": "https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG",
          "@@id": "https://geelyfatmawati.id",
          "url": "https://geelyfatmawati.id",
          "telephone": "+6285772087335", 
          "description": "Dealer mobil listrik resmi Geely Fatmawati Jakarta Selatan. Melayani test drive, pembelian tunai/kredit, dan servis resmi Geely EX5, EX2, dan Starray EM-i.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "Jl. RS. Fatmawati Raya",
            "addressLocality": "Jakarta Selatan",
            "addressRegion": "DKI Jakarta",
            "postalCode": "12430",
            "addressCountry": "ID"
          },
          "geo": {
            "@@type": "GeoCoordinates",
            "latitude": -6.2945, 
            "longitude": 106.7994
          },
          "openingHoursSpecification": {
            "@@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "08:30",
            "closes": "17:30"
          },
          "priceRange": "$$$"
        }
      ]
    }
    </script>
    @endpush

    <style>
        html { scroll-behavior: smooth; }
        
        body {
            background-color: #030712;
            color: #f8fafc;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        .glass-island {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            border-left: 1px solid rgba(255, 255, 255, 0.15);
            box-shadow: 0 30px 60px -10px rgba(0, 0, 0, 0.5), inset 0 1px 0 rgba(255, 255, 255, 0.1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-island:hover {
            background: rgba(255, 255, 255, 0.05);
            border-top: 1px solid rgba(16, 185, 129, 0.4);
            box-shadow: 0 40px 70px -10px rgba(16, 185, 129, 0.25), inset 0 1px 0 rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
        }

        .glass-island-light {
            background: rgba(255, 255, 255, 0.6);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 0 20px 40px -10px rgba(16, 185, 129, 0.15), inset 0 1px 0 rgba(255, 255, 255, 1);
            transition: all 0.5s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .glass-island-light:hover {
            background: rgba(255, 255, 255, 0.8);
            border-top: 1px solid rgba(16, 185, 129, 0.5);
            box-shadow: 0 30px 60px -10px rgba(16, 185, 129, 0.35), inset 0 1px 0 rgba(255, 255, 255, 1);
            transform: translateY(-5px);
        }

        .glass-panel-dark {
            background: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
        }

        /* PURE GLASSMORPHISM FOR EX2 SPOTLIGHT */
        .ex2-pure-glass {
            background: rgba(255, 255, 255, 0.5);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-bottom: 1px solid rgba(255, 255, 255, 0.4);
            border-right: 1px solid rgba(255, 255, 255, 0.4);
            box-shadow: 
                0 20px 40px -10px rgba(16, 185, 129, 0.1), 
                inset 0 1px 0 rgba(255, 255, 255, 0.8);
            transition: all 0.6s cubic-bezier(0.25, 1, 0.5, 1);
        }
        
        .ex2-pure-glass:hover {
            background: rgba(255, 255, 255, 0.75);
            transform: translateY(-8px);
            box-shadow: 
                0 30px 60px -15px rgba(16, 185, 129, 0.25), 
                inset 0 1px 0 rgba(255, 255, 255, 1);
            border-color: rgba(255, 255, 255, 0.9);
        }

        .ambient-glow-emerald {
            background: radial-gradient(circle, rgba(16, 185, 129, 0.25) 0%, rgba(0, 0, 0, 0) 70%);
            mix-blend-mode: screen;
        }

        .text-gradient-premium {
            background: linear-gradient(135deg, #ffffff 20%, #34d399 80%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .bg-noise-overlay::before {
            content: "";
            position: absolute;
            inset: 0;
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.85' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.03'/%3E%3C/svg%3E");
            pointer-events: none;
            z-index: 10;
        }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1); }
            33% { transform: translate(30px, -50px) scale(1.1); }
            66% { transform: translate(-20px, 20px) scale(0.9); }
            100% { transform: translate(0px, 0px) scale(1); }
        }
        .animate-blob { animation: blob 10s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        .img-container { overflow: hidden; cursor: pointer; }
        .img-container img { transition: transform 1.2s cubic-bezier(0.19, 1, 0.22, 1); }
        .glass-island:hover .img-container img, .glass-island-light:hover .img-container img { transform: scale(1.08); }

        .reveal-up { opacity: 0; transform: translateY(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-left { opacity: 0; transform: translateX(-40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-right { opacity: 0; transform: translateX(40px); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .reveal-scale { opacity: 0; transform: scale(0.95); transition: all 1s cubic-bezier(0.22, 1, 0.36, 1); }
        .is-revealed { opacity: 1 !important; transform: translate(0) scale(1) !important; }

        .delay-100 { transition-delay: 100ms; }
        .delay-200 { transition-delay: 200ms; }
        .delay-300 { transition-delay: 300ms; }

        .btn-shimmer { position: relative; overflow: hidden; }
        .btn-shimmer::after {
            content: ''; position: absolute; top: -50%; left: -50%; width: 200%; height: 200%;
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.3), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 3s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }

        body.lightbox-open { overflow: hidden; }
        
        .slider-nav-btn {
            transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        }
    </style>

<!-- SECTION 1: HEADER -->
<!-- 1. Tambahkan pt-28 pb-12 lg:pt-32 lg:pb-20 di header agar jarak seimbang -->
<header class="relative min-h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#030712] pt-28 pb-12 lg:pt-32 lg:pb-20">
    <div class="absolute inset-0 z-0">
        <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-60 mix-blend-lighten">
            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#030712_100%)]"></div>
    </div>

    <!-- 2. Hapus mt-28 lg:mt-32 di div ini -->
    <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 reveal-up">
        <div class="glass-island rounded-[2rem] md:rounded-[3rem] p-8 md:p-16 lg:p-20 relative overflow-hidden">
            <div class="absolute -top-32 -left-32 w-96 h-96 ambient-glow-emerald z-0 pointer-events-none"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 ambient-glow-emerald z-0 pointer-events-none"></div>
            
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 flex flex-col">
                    <div class="inline-flex items-center gap-3 px-4 py-2 rounded-full border border-emerald-500/30 bg-emerald-500/10 mb-6 backdrop-blur-md w-max">
                        <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shadow-[0_0_10px_#34d399]"></span>
                        <span class="text-emerald-300 text-[10px] font-bold tracking-widest uppercase">Dealer Resmi Geely Fatmawati</span>
                    </div>
                        <h1 class="font-geely text-5xl sm:text-6xl md:text-7xl lg:text-[90px] text-white uppercase leading-[0.9] tracking-tighter mb-4 lg:mb-8 drop-shadow-lg w-full">
                            Elevate <br>
                            <span class="text-gradient-premium">The Future.</span>
                        </h1>

                        <div class="flex lg:hidden justify-center items-center relative w-full my-8 sm:max-w-md self-center">
                            <div class="w-64 h-64 sm:w-72 sm:h-72 border border-white/10 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                            <div class="w-48 h-48 sm:w-56 sm:h-56 border border-emerald-500/30 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                            
                            <div class="w-full transform z-10 p-[6px] rounded-[2rem] bg-white/5 border border-white/20 border-t-emerald-400/40 border-l-white/30 backdrop-blur-md shadow-[0_25px_50px_-12px_rgba(16,185,129,0.25)] relative">
                                <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Mobil Listrik Geely EX5 Warna Putih Jakarta Selatan" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none drop-shadow-lg">
                            </div>
                        </div>
                        
                        <p class="text-gray-300 text-sm md:text-lg font-light leading-relaxed max-w-xl mb-10 border-l border-emerald-500/50 pl-6 w-full">
                            Desain elegan, kabin nyaman, dan teknologi elektrik kini hadir di Jakarta Selatan untuk pengalaman berkendara yang lebih modern.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 w-full">
                            <a href="/test-drive" class="relative group px-8 py-4 bg-white/10 border border-white/20 text-white font-bold text-[11px] tracking-[0.2em] uppercase overflow-hidden rounded-full flex items-center justify-center gap-3 hover:bg-emerald-500 hover:border-emerald-400 transition-all duration-500 shadow-[0_0_20px_rgba(255,255,255,0.05)] hover:shadow-[0_0_30px_rgba(16,185,129,0.4)] w-max">
                                <span>Book Test Drive</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="hidden lg:flex justify-center items-center relative lg:col-span-5">
                        <div class="w-72 h-72 border border-white/10 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                        <div class="w-56 h-56 border border-emerald-500/30 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                        
                        <div class="w-[120%] max-w-none transform translate-x-10 scale-110 z-10 p-[6px] rounded-[2rem] bg-white/5 border border-white/20 border-t-emerald-400/40 border-l-white/30 backdrop-blur-md shadow-[0_25px_50px_-12px_rgba(16,185,129,0.25)] relative">
                            <div class="absolute inset-0 rounded-[2rem] bg-gradient-to-br from-white/10 to-transparent pointer-events-none"></div>
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Tampilan Eksterior Depan Mobil Listrik Geely EX5 Jakarta" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none drop-shadow-lg">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- COMBINED SECTION: GRAND OPENING & EXPERIENCE SLIDER -->
    <section class="relative w-full overflow-hidden group bg-[#030712]">
        
        <!-- Desktop Navigation Buttons -->
        <button id="slide-prev" class="slider-nav-btn absolute left-4 lg:left-8 top-1/2 -translate-y-1/2 z-50 hidden md:flex items-center justify-center w-14 h-14 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-white hover:bg-emerald-500 hover:border-emerald-400 hover:scale-110 shadow-[0_10px_30px_rgba(0,0,0,0.5)] opacity-0 group-hover:opacity-100 disabled:opacity-0 disabled:pointer-events-none transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </button>
        <button id="slide-next" class="slider-nav-btn absolute right-4 lg:right-8 top-1/2 -translate-y-1/2 z-50 hidden md:flex items-center justify-center w-14 h-14 rounded-full bg-black/40 backdrop-blur-md border border-white/20 text-white hover:bg-emerald-500 hover:border-emerald-400 hover:scale-110 shadow-[0_10px_30px_rgba(0,0,0,0.5)] opacity-0 group-hover:opacity-100 disabled:opacity-0 disabled:pointer-events-none transition-all duration-300">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </button>

        <!-- Slider Container -->
        <div id="section-slider" class="flex overflow-x-auto snap-x snap-mandatory hide-scrollbar scroll-smooth w-full">
            
            <!-- SLIDE 1: GRAND OPENING (Theme: Light & Clean Professional) -->
            <div id="grand-opening" class="w-full flex-shrink-0 snap-center pt-20 pb-16 lg:pt-24 lg:pb-20 relative bg-[#f8fafc] overflow-hidden flex flex-col justify-start">
                <!-- Elegan & Subtle Gradient Background tanpa checkered pattern -->
                <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-gradient-to-br from-emerald-100/40 to-emerald-200/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
                <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-gradient-to-tr from-teal-100/40 to-emerald-100/20 rounded-full blur-[100px] pointer-events-none z-0"></div>

                <div class="max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 relative z-10">
                    <div class="text-center max-w-3xl mx-auto mb-10 md:mb-12 reveal-up">
                        <span class="text-emerald-600 text-[10px] font-bold tracking-[0.4em] uppercase block mb-3 md:mb-4">Milestone Moment</span>
                        <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl uppercase tracking-tighter text-gray-900 leading-[1.1] mb-4 md:mb-6 drop-shadow-sm">
                            Grand <span class="text-emerald-500">Opening</span>
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed font-medium">
                            Menandai babak baru mobilitas premium di Jakarta Selatan. Geely Fatmawati resmi beroperasi penuh untuk menghadirkan layanan kelas dunia, inovasi mutakhir, dan pengalaman kendaraan listrik yang tak terlupakan.
                        </p>
                    </div>

                    <!-- Grid Layout -->
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 h-auto md:h-[450px] lg:h-[500px]">
                        <div class="col-span-2 md:col-span-2 row-span-2 glass-island-light rounded-[2rem] p-2 relative reveal-up img-container shadow-sm" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-diresmikan-sO5Dd7FcvFkX3wX5.jpg', 'Grand Opening Geely Fatmawati', true)">
                            <div class="w-full h-[300px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-diresmikan-sO5Dd7FcvFkX3wX5.jpg" alt="Peresmian Dealer Showroom Geely Fatmawati Jakarta Selatan" class="absolute inset-0 w-full h-full object-cover object-center">
                                <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-gray-900/20 to-transparent"></div>
                                <div class="absolute bottom-6 left-6 right-6">
                                    <span class="text-emerald-400 text-[10px] font-bold tracking-[0.3em] uppercase mb-1 block drop-shadow-md">Celebration</span>
                                    <h3 class="font-geely text-2xl md:text-4xl text-white uppercase tracking-tight">Resmi Beroperasi</h3>
                                </div>
                                <div class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white border border-white/40 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path></svg>
                                </div>
                            </div>
                        </div>

                        <div class="col-span-2 md:col-span-2 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-left delay-100 img-container shadow-sm" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-3-RgnRXLNbpMYB75ky.webp', 'Suasana Kemeriahan Grand Opening', true)">
                            <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-3-RgnRXLNbpMYB75ky.webp" alt="Suasana Event Peluncuran Dealer Geely Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center">
                            </div>
                        </div>

                        <div class="col-span-1 md:col-span-1 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-up delay-200 img-container shadow-sm" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-7-G2FMRCtHFFy6nvBp.jpeg', 'Penerimaan Pelanggan Perdana', true)">
                            <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-fatmawati-7-G2FMRCtHFFy6nvBp.jpeg" alt="Layanan Pelanggan Dealer Resmi Geely" class="absolute inset-0 w-full h-full object-cover object-[center_60%]">
                            </div>
                        </div>

                        <div class="col-span-1 md:col-span-1 row-span-1 glass-island-light rounded-[2rem] p-2 relative reveal-up delay-300 img-container shadow-sm" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/p1010662-scaled-4y1qGH08npg8QHKO.jpg', 'Lini Kendaraan Masa Depan', true)">
                            <div class="w-full h-[200px] md:h-full rounded-[1.5rem] overflow-hidden relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/p1010662-scaled-4y1qGH08npg8QHKO.jpg" alt="Mobil Display Geely di Showroom Fatmawati" class="absolute inset-0 w-full h-full object-cover object-center">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SLIDE 2: EXPERIENCE (Theme: Dark) -->
            <div id="experience" class="w-full flex-shrink-0 snap-center pt-20 pb-16 lg:pt-24 lg:pb-20 relative bg-[#030712] overflow-hidden border-l border-white/5 flex flex-col justify-start">
                <div class="absolute right-0 bottom-0 w-[800px] h-[800px] ambient-glow-emerald opacity-30 pointer-events-none"></div>
                <div class="max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 relative z-10">
                    
                    <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-10 md:mb-12 gap-6 reveal-up">
                        <div class="max-w-2xl">
                            <div class="inline-flex items-center gap-4 mb-4 md:mb-6">
                                <div class="w-10 h-[1px] bg-emerald-500"></div>
                                <span class="text-emerald-400 text-[10px] font-bold tracking-[0.4em] uppercase">Eksklusivitas Geely Fatmawati</span>
                            </div>
                            <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-white leading-[0.9]">
                                Oasis of <br>
                                <span class="text-gray-600">Innovation</span>
                            </h2>
                        </div>
                        <div class="md:text-right max-w-sm">
                            <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light border-l md:border-l-0 md:border-r border-emerald-500/30 pl-4 md:pl-0 md:pr-4">
                                Arsitektur showroom modern yang dirancang khusus untuk kenyamanan Anda. Rasakan pengalaman layanan VIP sejak langkah pertama Anda di Jakarta Selatan.
                            </p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                        <div class="glass-island rounded-[2rem] p-2 relative reveal-up img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/showroom-fatmawati-cV9nMqwkCe4Ay47Y.jpg', 'Showroom Geely Fatmawati')">
                            <div class="w-full aspect-square md:aspect-auto md:h-full min-h-[250px] rounded-[1.5rem] overflow-hidden relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/showroom-fatmawati-cV9nMqwkCe4Ay47Y.jpg" alt="Bangunan Showroom Dealer Geely Fatmawati Jakarta" class="absolute inset-0 w-full h-full object-cover object-center brightness-90">
                                <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-transparent to-transparent"></div>
                                <div class="absolute bottom-6 left-6 right-6">
                                    <span class="text-emerald-400 text-[9px] font-bold tracking-[0.3em] uppercase mb-1 block">Flagship Dealer</span>
                                    <h3 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tight">Geely Fatmawati</h3>
                                    <a href="/location" class="mt-4 inline-flex items-center gap-2 text-xs font-bold text-white hover:text-emerald-400 uppercase tracking-widest transition-colors">Lihat Lokasi <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></a>
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 gap-4 md:gap-6">
                            <div class="glass-island rounded-[2rem] p-2 relative reveal-up delay-100 img-container" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/spk-XGyyr4bmoYUWkhWY.jpeg', 'Penyerahan SPK Pelanggan Geely Fatmawati')">
                                <div class="w-full h-[200px] md:h-[250px] rounded-[1.5rem] overflow-hidden relative">
                                    <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/spk-XGyyr4bmoYUWkhWY.jpeg" alt="Penyerahan Mobil Geely ke Pelanggan Dealer Fatmawati" class="absolute inset-0 w-full h-full object-cover object-top brightness-90">
                                    <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-[#030712]/20 to-transparent"></div>
                                    <div class="absolute bottom-6 left-6">
                                        <h4 class="font-geely text-2xl md:text-3xl text-white uppercase tracking-tight">Customer Trust</h4>
                                        <p class="text-gray-300 text-[10px] md:text-xs uppercase tracking-widest mt-1">Layanan Sepenuh Hati</p>
                                    </div>
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                                <div class="glass-island rounded-[2rem] p-6 md:p-8 flex flex-col justify-center relative overflow-hidden reveal-up delay-200 group min-h-[180px]">
                                    <div class="absolute top-0 right-0 w-32 h-32 ambient-glow-emerald opacity-50 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-emerald-500/30 bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-4 md:mb-6 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    </div>
                                    <h4 class="font-geely text-xl md:text-2xl text-white uppercase tracking-tight mb-2">Fast Charging</h4>
                                    <p class="text-gray-400 text-xs font-light leading-relaxed">Prioritas pengisian daya cepat eksklusif.</p>
                                </div>

                                <div class="glass-island rounded-[2rem] p-6 md:p-8 flex flex-col justify-center relative overflow-hidden reveal-up delay-300 group min-h-[180px]">
                                    <div class="absolute top-0 right-0 w-32 h-32 ambient-glow-emerald opacity-50 group-hover:opacity-100 transition-opacity"></div>
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-emerald-500/30 bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-4 md:mb-6 group-hover:scale-110 transition-transform">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                    </div>
                                    <h4 class="font-geely text-xl md:text-2xl text-white uppercase tracking-tight mb-2">VIP Concierge</h4>
                                    <p class="text-gray-400 text-xs font-light leading-relaxed">Asisten pribadi terdedikasi perawatan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <!-- Mobile Indicator Dots -->
        <div class="absolute bottom-6 md:bottom-10 left-1/2 -translate-x-1/2 z-40 flex gap-3 px-4 py-2 rounded-full bg-black/40 backdrop-blur-md border border-white/10">
            <div class="section-indicator w-2.5 h-2.5 rounded-full bg-emerald-500 transition-colors duration-300"></div>
            <div class="section-indicator w-2.5 h-2.5 rounded-full bg-white/40 transition-colors duration-300"></div>
        </div>
    </section>

    <!-- SECTION 4: LINEUP (Slider Mobile & Grid Desktop) -->
    <section id="lineup" class="py-24 lg:py-32 relative bg-[#030712] overflow-hidden border-y border-white/5">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] ambient-glow-emerald opacity-30 pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] ambient-glow-emerald opacity-20 pointer-events-none z-0"></div>
        
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 reveal-up">
                <span class="text-emerald-400 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Masterpiece Collection</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-white leading-none">
                    Intelligent <span class="text-emerald-500">Motion</span>
                </h2>
            </div>
            
            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-2 lg:grid-cols-3 lg:gap-8 pt-8 pb-12 px-4 md:px-0 -mx-4 md:mx-0">
                @php
                    $showcase = [
                        [
                            'name' => 'Geely EX5',
                            'type' => 'Premium Smart SUV',
                            'desc' => 'Arsitektur elektrik canggih dengan efisiensi tata ruang maksimal untuk keluarga modern.',
                            'stat1' => '600km', 'stat1_lbl' => 'Range',
                            'stat2' => 'AWD', 'stat2_lbl' => 'Dual Motor',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp',
                            'link' => '/models/ex5',
                            'delay' => ''
                        ],
                        [
                            'name' => 'Geely EX2',
                            'type' => 'Urban Crossover',
                            'desc' => 'Desain kompak nan agresif, solusi sempurna menembus dinamika kota Jakarta.',
                            'stat1' => '30min', 'stat1_lbl' => 'Fast Charge',
                            'stat2' => 'Agile', 'stat2_lbl' => 'Dynamics',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-highlight-mP43QkLzBRHoaLz3.jpg',
                            'link' => '/models/ex2',
                            'delay' => 'delay-100'
                        ],
                        [
                            'name' => 'Starray EM-i',
                            'type' => 'The Future Sedan',
                            'desc' => 'Revolusi super hybrid dengan tingkat efisiensi termal tertinggi di kelasnya.',
                            'stat1' => '0.22', 'stat1_lbl' => 'Cd Aero',
                            'stat2' => 'EM-i', 'stat2_lbl' => 'Hybrid Tech',
                            'img' => 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-starray-em-i_3-scaled-YNqMpg35Mvc0vRPX.webp',
                            'link' => '/models/starray-em-i',
                            'delay' => 'delay-200'
                        ]
                    ];
                @endphp

                @foreach($showcase as $car)
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center bg-[#030712]/40 backdrop-blur-xl border border-gray-600/30 shadow-[0_20px_50px_rgba(0,0,0,0.15)] rounded-[2.5rem] p-2 sm:p-3 relative reveal-up {{ $car['delay'] }} group cursor-pointer transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:shadow-[0_40px_70px_-15px_rgba(16,185,129,0.3)] hover:bg-[#030712]/60 hover:border-emerald-500/40">
                    <div class="bg-[#030712] border border-gray-800/60 rounded-[2rem] h-[550px] flex flex-col relative overflow-hidden w-full transition-colors group-hover:border-emerald-500/40">
                        <div class="relative h-[65%] w-full rounded-t-[2rem] overflow-hidden img-container">
                            <img src="{{ $car['img'] }}" alt="Spesifikasi {{ $car['name'] }} di Dealer Geely Fatmawati Jakarta" class="absolute inset-0 w-full h-full object-cover object-center brightness-90">
                            <div class="absolute inset-0 bg-gradient-to-t from-[#030712] via-[#030712]/20 to-transparent opacity-90"></div>
                        </div>
                        
                        <div class="absolute bottom-6 left-6 right-6 glass-panel-dark rounded-3xl p-6 border border-white/10 shadow-[0_15px_40px_-10px_rgba(16,185,129,0.2)] transform transition-transform duration-500 group-hover:-translate-y-2 group-hover:shadow-[0_30px_60px_-15px_rgba(16,185,129,0.5)]">
                            <span class="text-emerald-400 text-[9px] font-bold tracking-[0.3em] uppercase block mb-1">{{ $car['type'] }}</span>
                            <h3 class="font-geely text-3xl text-white uppercase tracking-tight mb-2">{{ $car['name'] }}</h3>
                            <p class="text-gray-400 text-xs font-light leading-relaxed mb-4 line-clamp-2">{{ $car['desc'] }}</p>
                            
                            <div class="flex items-center justify-between border-t border-white/10 pt-4">
                                <div class="flex gap-4">
                                    <div>
                                        <p class="text-white font-geely text-lg leading-none">{{ $car['stat1'] }}</p>
                                        <p class="text-gray-500 text-[8px] uppercase tracking-widest">{{ $car['stat1_lbl'] }}</p>
                                    </div>
                                    <div>
                                        <p class="text-white font-geely text-lg leading-none">{{ $car['stat2'] }}</p>
                                        <p class="text-gray-500 text-[8px] uppercase tracking-widest">{{ $car['stat2_lbl'] }}</p>
                                    </div>
                                </div>
                                <a href="{{ $car['link'] }}" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-white group-hover:bg-emerald-500 group-hover:border-emerald-400 transition-colors">
                                    <svg class="w-4 h-4 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
            
            <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-emerald-400 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- SECTION 5: FINANSIAL -->
    <section class="py-24 relative overflow-hidden flex items-center justify-center min-h-[60vh] bg-[#030712]">
        <div class="absolute inset-0 z-0">
            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-14-mxB2lNnxMqfjr7pG.webp" alt="Layanan Pembiayaan Kredit Dealer Geely Fatmawati" class="w-full h-full object-cover opacity-50">
            <div class="absolute inset-0 bg-gradient-to-r from-[#030712]/90 via-emerald-900/40 to-[#030712]/90"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 reveal-up">
            <div class="glass-island rounded-[3rem] p-10 md:p-16 text-center border-t border-emerald-500/30" style="backdrop-filter: blur(4px); -webkit-backdrop-filter: blur(4px);">
                <div class="inline-block p-4 rounded-full bg-emerald-500/10 border border-emerald-500/20 text-emerald-400 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="font-geely text-3xl md:text-5xl text-white uppercase tracking-tighter mb-4">
                    Hitung Estimasi <span class="text-emerald-400">Angsuran</span>
                </h2>
                <p class="text-gray-300 text-sm md:text-base leading-relaxed mb-10 max-w-2xl mx-auto">
                    Miliki kendaraan masa depan tanpa beban. Kalkulator pintar kami akan menyesuaikan skema cicilan terbaik dengan fleksibilitas penuh khusus area Jakarta Selatan.
                </p>
                <a href="/credit-simulation" class="btn-shimmer inline-flex px-10 py-5 bg-emerald-500 text-white font-bold text-[11px] uppercase tracking-widest rounded-full hover:scale-105 hover:shadow-[0_0_40px_rgba(16,185,129,0.5)] transition-all duration-300">
                    Mulai Simulasi Kredit
                </a>
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-[#030712] relative overflow-hidden border-t border-white/5">
        <div class="absolute top-32 right-[-10%] w-[600px] h-[600px] ambient-glow-emerald opacity-40 z-0"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] ambient-glow-emerald opacity-40 z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 lg:gap-16 items-center">
                
                <div class="lg:col-span-7 order-1 lg:order-2 reveal-right h-full relative z-10">
                    <div class="glass-island rounded-[2rem] p-2 relative h-[50vh] lg:h-[600px] overflow-hidden">
                        <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative">
                            <video autoplay muted loop playsinline aria-label="Geely EX5 Video Showcase" class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#030712]/90 via-[#030712]/40 to-transparent"></div>
                            <div class="absolute bottom-20 lg:bottom-8 left-6 lg:left-8 pr-6">
                                <span class="text-emerald-400 text-[10px] tracking-[0.3em] font-bold uppercase block mb-2 drop-shadow-md">Flyme Auto</span>
                                <h4 class="font-geely text-2xl md:text-4xl uppercase tracking-tight text-white drop-shadow-lg leading-none">Future in Motion.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 order-2 lg:order-1 reveal-left relative z-20 -mt-16 sm:-mt-24 lg:mt-0 mx-2 sm:mx-8 lg:mx-0">
                    <div class="glass-island p-8 md:p-12 lg:p-14 rounded-[3rem] shadow-[0_-20px_40px_-15px_rgba(0,0,0,0.5)] lg:shadow-none bg-[#030712]/80 lg:bg-transparent backdrop-blur-3xl">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-emerald-500/30 bg-emerald-500/10">
                            <span class="text-emerald-400 text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                        </div>
                        
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl uppercase tracking-tighter text-white mb-6 leading-[1.1]">
                            Keseimbangan <br> <span class="text-gradient-premium">Sempurna</span>
                        </h2>
                        
                        <div class="space-y-4 text-gray-400 text-sm md:text-base font-light leading-relaxed">
                            <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                            <p>Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas.</p>
                            <p>Dilengkapi sistem keamanan tingkat tinggi seperti Adaptive Cruise Control dan Blind Spot Monitoring untuk perlindungan ekstra.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 relative w-full overflow-hidden bg-[#030712]">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1669295384050-a1d4357bd1d7?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Abstract Topographic Background" class="w-full h-full object-cover opacity-30 mix-blend-lighten">
            <div class="absolute inset-0 bg-gradient-to-b from-[#030712] via-transparent to-[#030712] opacity-90"></div>
        </div>
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] ambient-glow-emerald opacity-20 pointer-events-none z-10"></div>

        <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <div class="order-1 lg:col-span-7 flex flex-col reveal-left relative z-10">
                    <div class="glass-island p-2 rounded-[2rem] mb-6 md:mb-8">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden">
                            <video autoplay muted loop playsinline aria-label="Interior Geely Atmosphere" class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-[#030712] via-transparent to-transparent opacity-90"></div>
                            <div class="absolute bottom-8 left-8 z-20">
                                <p class="font-geely text-2xl md:text-4xl uppercase tracking-tight mb-1 text-white">Immersive Atmosphere</p>
                                <p class="text-emerald-400 text-[10px] tracking-[0.2em] uppercase font-bold">Premium Cabin Experience</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 md:gap-6 relative z-20">
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Up to</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-emerald-400">495</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">km*</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">NEDC Range</p>
                        </div>
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Fast Charge</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-emerald-400">20</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">mins**</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">30% - 80%</p>
                        </div>
                        <div class="glass-island p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center">
                            <p class="text-gray-400 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Acceleration</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-white mb-2"><span class="text-emerald-400">6.9</span><span class="text-[10px] md:text-sm text-gray-500 ml-1">sec</span></h3>
                            <p class="text-gray-500 text-[6px] md:text-[9px] tracking-widest uppercase">0-100 km/h</p>
                        </div>
                    </div>
                </div>

                <div class="order-2 lg:col-span-5 glass-island p-8 md:p-12 rounded-[2rem] flex flex-col justify-center reveal-right relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-64 h-64 ambient-glow-emerald opacity-50 z-0"></div>
                    <div class="relative z-10">
                        <span class="text-emerald-400 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block">All-New EX5</span>
                        <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter mb-8 leading-[0.9] text-white">
                            Ready To <br> <span class="text-gray-600">Explore</span>
                        </h2>
                        <p class="text-gray-400 text-sm md:text-base leading-relaxed font-light mb-10">
                            Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                        </p>
                        <a href="/test-drive" class="inline-flex items-center gap-3 text-emerald-400 text-[10px] font-bold tracking-[0.2em] uppercase hover:text-white transition-colors w-max pb-2 border-b border-emerald-500/30">
                            Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION SPOTLIGHT GEELY EX2 (MODIFIED UNTUK PENJAJARAN SEMPURNA) -->
    <section id="ex2-spotlight" class="py-24 lg:py-32 relative overflow-hidden bg-white border-y border-gray-200">
        
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-gray-100/50 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-emerald-50/40 rounded-full blur-[100px] pointer-events-none"></div>
        <div class="absolute top-1/2 left-1/4 w-[400px] h-[400px] bg-teal-50/40 rounded-full blur-[100px] pointer-events-none animate-blob"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 lg:mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-8 h-[2px] bg-emerald-500"></div>
                        <span class="text-emerald-600 text-[10px] font-bold tracking-[0.3em] uppercase">Spotlight Geely EX2</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 leading-[0.9]">
                        Urban <span class="text-emerald-500">Blueprint</span>
                    </h2>
                </div>
                <div class="md:text-right pb-2">
                    <p class="text-gray-500 text-sm md:text-base font-medium max-w-sm ml-auto">
                        Eksplorasi dimensi estetika kaca. Presisi arsitektural untuk mobilitas perkotaan yang minimalis dan elegan.
                    </p>
                </div>
            </div>

            <!-- Ditambahkan items-stretch agar tinggi card sama rata -->
            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory items-stretch gap-6 lg:grid lg:grid-cols-12 lg:gap-6 reveal-up delay-100 px-4 md:px-0 -mx-4 md:mx-0 pb-8 lg:pb-0">
                
                <!-- 01: Exterior (Col 7) -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-7 ex2-pure-glass rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg', '01 // Exterior - Aero Stance')">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50/50 border border-gray-200/50 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl shadow-sm" alt="Exterior EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <!-- Tinggi spesifik untuk area Judul agar teks deskripsi memulainya sejajar -->
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-emerald-600 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">01 // Exterior</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none">Aero Stance</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Desain aerodinamis mutakhir yang tidak hanya memukau secara visual, namun membelah angin dengan efisiensi absolut.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:border-emerald-500 group-hover:text-white transition-all duration-500 shadow-sm flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 02: Cockpit (Col 5) -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-5 ex2-pure-glass rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_ex2_02-1-wMrk98nhwyihCNmX.jpg', '02 // Cockpit - Digital Oasis')">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50/50 border border-gray-200/50 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_ex2_02-1-wMrk98nhwyihCNmX.jpg" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl shadow-sm" alt="Interior EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <!-- Tinggi spesifik untuk area Judul agar teks deskripsi memulainya sejajar -->
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-emerald-600 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">02 // Cockpit</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none">Double Tech Joy</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Integrasi Flyme Auto mutakhir dan pengisian daya nirkabel mendefinisikan ulang rasanya mobilitas cerdas.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:border-emerald-500 group-hover:text-white transition-all duration-500 shadow-sm flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 03: Lifestyle (Col 5) -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-5 ex2-pure-glass rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-10-driving-pleasure-geely-ex2-MJhRNhH2mxqA4wUU.webp', '03 // Lifestyle - Agility')">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50/50 border border-gray-200/50 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-10-driving-pleasure-geely-ex2-MJhRNhH2mxqA4wUU.webp" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl shadow-sm" alt="Lifestyle EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <!-- Tinggi spesifik untuk area Judul agar teks deskripsi memulainya sejajar -->
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-emerald-600 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">03 // Lifestyle</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none">Agility</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Keseimbangan bermanuver dan kelincahan mutlak menembus kepadatan kota Jakarta.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-100 text-emerald-600 flex items-center justify-center group-hover:bg-emerald-500 group-hover:border-emerald-500 group-hover:text-white transition-all duration-500 shadow-sm flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 04: Utility (Col 7 - HTML5 Video) -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-7 ex2-pure-glass rounded-[2.5rem] p-4 sm:p-5 flex flex-col h-full group">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-black/5 shadow-inner border border-gray-200/50 flex-shrink-0">
                        <video autoplay muted loop playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/storage-Go9jWSFq0yGaDOkj.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <!-- Tinggi spesifik untuk area Judul agar teks deskripsi memulainya sejajar -->
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-emerald-600 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">04 // Utility</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none">Max Cargo</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Optimalisasi tata ruang modular dengan kapasitas penyimpanan super fleksibel di setiap inci untuk kepraktisan Anda.</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-2 flex lg:hidden justify-center items-center gap-2 text-emerald-600 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <section class="py-24 lg:py-32 bg-[#030712] bg-noise-overlay overflow-hidden relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="text-center max-w-4xl mx-auto mb-16 md:mb-20 reveal-up">
                <span class="text-emerald-400 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Core Technology</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-white leading-[0.9] mb-6">
                    Global <span class="text-gradient-premium">Architecture</span>
                </h2>
                <p class="text-gray-400 text-sm md:text-base font-light leading-relaxed max-w-2xl mx-auto">
                    Platform GEA mengintegrasikan superkomputer on-board dengan arsitektur baja boron terkuat, mendefinisikan ulang standar keselamatan dan kecerdasan mobil listrik dunia.
                </p>
            </div>

            <div class="relative w-full aspect-video md:h-[650px] max-w-6xl mx-auto glass-island rounded-[2rem] p-2 flex items-center justify-center reveal-scale">
                <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative z-10">
                    <video autoplay muted loop playsinline aria-label="Teknologi Platform GEA Geely" class="w-full h-full object-cover opacity-70 mix-blend-screen">
                        <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-inside-the-gea-intelligent-electric-platform---geely-auto-720p-h264-tjCY49tcStbBVMrV.mp4" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,#030712_100%)] opacity-80 pointer-events-none"></div>
                </div>

                <div class="absolute top-10 left-10 hidden md:block glass-panel-dark p-6 rounded-2xl border border-white/10 shadow-[0_20px_40px_rgba(16,185,129,0.15)] z-20 w-64 reveal-left delay-200">
                    <span class="text-emerald-400 text-[9px] font-bold tracking-widest uppercase block mb-2">Neural Core</span>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">AI Integration</h4>
                    <p class="text-gray-400 text-[10px] leading-relaxed">Sinkronisasi millidetik sensor Lidar dan Radar pintar.</p>
                </div>

                <div class="absolute bottom-10 right-10 hidden md:block glass-panel-dark p-6 rounded-2xl border border-white/10 shadow-[0_20px_40px_rgba(16,185,129,0.15)] z-20 w-64 reveal-right delay-300">
                    <span class="text-emerald-400 text-[9px] font-bold tracking-widest uppercase block mb-2">Thermal Mgmt</span>
                    <h4 class="font-geely text-2xl text-white uppercase tracking-tight mb-2">Hyper Efficiency</h4>
                    <p class="text-gray-400 text-[10px] leading-relaxed">Melindungi sel baterai dan memaksimal jarak tempuh absolut.</p>
                </div>
            </div>
            
            <div class="grid grid-cols-1 gap-4 mt-6 md:hidden">
                 <div class="glass-island p-6 rounded-2xl">
                    <h4 class="font-geely text-xl text-white uppercase mb-1">AI Integration</h4>
                    <p class="text-gray-400 text-[10px]">Sinkronisasi millidetik sensor Lidar dan Radar pintar.</p>
                </div>
                <div class="glass-island p-6 rounded-2xl">
                    <h4 class="font-geely text-xl text-white uppercase mb-1">Hyper Efficiency</h4>
                    <p class="text-gray-400 text-[10px]">Manajemen termal canggih perlindungan baterai.</p>
                </div>
            </div>

        </div>
    </section>

    <div class="relative w-full pb-10 bg-[#030712]">
        
        <div class="sticky top-[calc(50vh-28.125vw)] md:top-0 w-full aspect-video md:aspect-auto md:h-[100vh] overflow-hidden z-0 flex items-center justify-center">
            <video autoplay muted loop playsinline aria-label="Teknologi EM-i Hybrid Geely" class="absolute inset-0 w-full h-full object-cover opacity-60 mix-blend-lighten">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
            </video>
            <div class="absolute inset-x-0 top-0 h-32 bg-gradient-to-b from-[#030712] to-transparent pointer-events-none z-10"></div>
            <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-[#030712] to-transparent pointer-events-none z-10"></div>
        </div>

        <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-[#030712] relative z-30 min-h-[100vh] rounded-t-[2rem] md:rounded-t-[3rem] border-t-[3px] border-emerald-500 shadow-none">
            
            <div class="max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-x-20 lg:gap-y-12 items-center lg:items-start">
                
                <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                    <h3 class="text-emerald-400 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Efficiency meets intelligent
                    </h3>
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-white mb-6 reveal-up delay-100 leading-tight">
                        EM-i <br> <span class="text-gradient-premium">Super Hybrid</span>
                    </h2>
                    <p class="text-gray-400 text-sm md:text-base lg:text-lg font-light leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                        EM-i atau E-Motive intelligence adalah teknologi hibrida canggih dari Geely, yang menggabungkan manfaat bahan bakar dan baterai untuk efisiensi, kemampuan, dan emisi yang lebih rendah.
                    </p>
                </div>

                <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                    <div class="glass-island p-2 rounded-[2rem] relative z-10">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden img-container">
                            <video autoplay muted loop playsinline aria-label="Geely Starray EM-i Engine" class="absolute inset-0 w-full h-full object-cover">
                                <source src="/videos/benefits-of-em-i.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="order-3 lg:col-start-2 lg:row-start-2 glass-island p-8 rounded-[2rem] reveal-up delay-400 relative z-10 group overflow-hidden border-l-[3px] border-l-transparent hover:border-l-emerald-500 transition-all duration-300">
                    <h4 class="text-white font-geely text-2xl mb-4 relative z-10 group-hover:text-emerald-300 transition-colors drop-shadow-sm">
                        Highest Thermal Efficiency (46.5%)
                    </h4>
                    <p class="text-gray-400 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        Platform dengan efisiensi termal terdepan di dunia, melampaui standar industri.
                    </p>
                </div>

                <div class="order-4 lg:col-start-1 lg:row-start-2 glass-island p-8 rounded-[2rem] reveal-up delay-300 relative group overflow-hidden border-l-[3px] border-l-transparent hover:border-l-emerald-500 transition-all duration-300">
                    <h4 class="text-white font-geely text-2xl mb-4 relative z-10 group-hover:text-emerald-300 transition-colors drop-shadow-sm">
                        High Efficiency Electric Drive
                    </h4>
                    <p class="text-gray-400 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        PHEV terdepan di kelasnya dengan penggerak efisiensi tinggi dan performa PHEV variabel kontinu.
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- SECTION 8 APP -->
    <section id="app-remote" class="py-24 lg:py-32 relative bg-[#f8fafc] overflow-hidden border-t border-gray-200">
        <!-- Clean gradient blobs, no checkered SVG -->
        <div class="absolute top-[-10%] right-[-5%] w-[600px] h-[600px] bg-gradient-to-br from-emerald-100/40 to-emerald-200/20 rounded-full blur-[100px] pointer-events-none z-0"></div>
        <div class="absolute bottom-[-10%] left-[-5%] w-[500px] h-[500px] bg-gradient-to-tr from-teal-100/40 to-emerald-100/20 rounded-full blur-[100px] pointer-events-none z-0"></div>

        <div class="max-w-[1400px] w-full mx-auto px-6 md:px-12 relative z-10">
            
            <div class="text-center mb-16 md:mb-24 reveal-up">
                <span class="text-emerald-600 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">Flyme Auto</span>
                <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter text-gray-900 mb-6 drop-shadow-sm">
                    Control At Your <span class="text-emerald-500">Fingertips</span>
                </h2>
            </div>

            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pt-6 pb-12 px-4 md:px-0 -mx-4 md:mx-0">
                
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-island-light bg-white/60 rounded-[2rem] p-3 flex flex-col reveal-up delay-100 group img-container hover:-translate-y-2 transition-transform duration-500 shadow-sm">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6 shadow-sm">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Fitur Aplikasi Geely Always Charged" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-emerald-500/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-emerald-600 transition-colors">Always Charged</h4>
                        <p class="text-gray-600 text-xs leading-relaxed font-medium">Monitor daya baterai dan jadwalkan pengisian secara remote dari smartphone Anda.</p>
                    </div>
                </div>

                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-island-light bg-white/60 rounded-[2rem] p-3 flex flex-col reveal-up delay-200 group img-container hover:-translate-y-2 transition-transform duration-500 shadow-sm">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6 shadow-sm">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Fitur Aplikasi Geely GPS Never Lost" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-emerald-500/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-emerald-600 transition-colors">Never Lost</h4>
                        <p class="text-gray-600 text-xs leading-relaxed font-medium">Pelacakan posisi kendaraan presisi tinggi dengan fitur "Find My Car" real-time.</p>
                    </div>
                </div>

                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-island-light bg-white/60 rounded-[2rem] p-3 flex flex-col reveal-up delay-300 group img-container hover:-translate-y-2 transition-transform duration-500 shadow-sm">
                    <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6 shadow-sm">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Fitur Aplikasi Geely Full Remote Control" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-emerald-500/20 mix-blend-multiply group-hover:opacity-0 transition-opacity duration-500"></div>
                    </div>
                    <div class="px-4 pb-4">
                        <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-emerald-600 transition-colors">Full Control</h4>
                        <p class="text-gray-600 text-xs leading-relaxed font-medium">Kendalikan suhu kabin dan akses kunci pintu sebelum Anda tiba di mobil.</p>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-emerald-600 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-[#030712]/95 backdrop-blur-md opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-6 right-6 md:top-10 md:right-10 text-white/60 hover:text-white transition-colors bg-white/5 p-2 rounded-full border border-white/10 hover:bg-white/10 cursor-pointer" style="z-index: 10000;">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[80vh] w-full flex justify-center items-center group pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-xl shadow-[0_25px_50px_-12px_rgba(16,185,129,0.25)] transition-transform duration-300 transform scale-95">
            </div>
            <div class="mt-6 md:mt-8 pointer-events-auto text-center">
                <p id="lightbox-caption" class="font-geely text-emerald-400 text-lg md:text-2xl tracking-widest uppercase drop-shadow-lg"></p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const revealObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const revealElements = document.querySelectorAll('.reveal-up, .reveal-left, .reveal-right, .reveal-scale');
            revealElements.forEach(el => revealObserver.observe(el));

            // Logika untuk Section 2 & 3 Combined Slider
            const sectionSlider = document.getElementById('section-slider');
            const slidePrev = document.getElementById('slide-prev');
            const slideNext = document.getElementById('slide-next');
            const indicators = document.querySelectorAll('.section-indicator');

            if (sectionSlider && slidePrev && slideNext) {
                const updateSliderUI = () => {
                    const scrollLeft = sectionSlider.scrollLeft;
                    const maxScroll = sectionSlider.scrollWidth - sectionSlider.clientWidth;
                    // Tentukan index saat ini (0 untuk slide 1, 1 untuk slide 2)
                    const slideIndex = Math.round(scrollLeft / sectionSlider.clientWidth);

                    // Update tombol Prev
                    slidePrev.disabled = scrollLeft <= 5;

                    // Update tombol Next
                    slideNext.disabled = scrollLeft >= maxScroll - 5;

                    // Update warna titik indikator mobile
                    indicators.forEach((ind, i) => {
                        if (i === slideIndex) {
                            ind.classList.replace('bg-white/40', 'bg-emerald-500');
                        } else {
                            ind.classList.replace('bg-emerald-500', 'bg-white/40');
                        }
                    });
                };

                slideNext.addEventListener('click', () => {
                    sectionSlider.scrollBy({ left: sectionSlider.clientWidth, behavior: 'smooth' });
                });

                slidePrev.addEventListener('click', () => {
                    sectionSlider.scrollBy({ left: -sectionSlider.clientWidth, behavior: 'smooth' });
                });

                // Update UI saat di-scroll (baik swipe mobile atau tekan panah desktop)
                sectionSlider.addEventListener('scroll', updateSliderUI);
                window.addEventListener('resize', updateSliderUI);
                
                // Set state awal
                updateSliderUI();
            }
        });

        const lightbox = document.getElementById('lightbox');
        const lightboxImg = document.getElementById('lightbox-img');
        const lightboxCaption = document.getElementById('lightbox-caption');

        function openLightbox(imgSrc, caption, isLightImage = false) {
            lightboxImg.src = imgSrc;
            lightboxCaption.textContent = caption;
            
            if(isLightImage) {
                lightboxImg.classList.add('bg-white', 'p-8');
            } else {
                lightboxImg.classList.remove('bg-white', 'p-8');
            }

            lightboxImg.classList.replace('scale-95', 'scale-100');
            lightbox.classList.remove('hidden');
            lightbox.classList.add('flex');
            
            requestAnimationFrame(() => {
                lightbox.classList.remove('opacity-0');
                lightbox.classList.add('opacity-100');
            });
            document.body.classList.add('lightbox-open');
        }

        function closeLightbox(e) {
            if (e && e.target === lightboxImg) return;
            lightboxImg.classList.replace('scale-100', 'scale-95');
            lightbox.classList.remove('opacity-100');
            lightbox.classList.add('opacity-0');
            setTimeout(() => {
                lightbox.classList.add('hidden');
                lightbox.classList.remove('flex');
                lightboxImg.src = '';
                document.body.classList.remove('lightbox-open');
            }, 300); 
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !lightbox.classList.contains('hidden')) {
                closeLightbox();
            }
        });
    </script>
</x-layouts.app>
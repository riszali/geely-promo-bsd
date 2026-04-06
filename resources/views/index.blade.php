<x-layouts.app>
    <!-- OPTIMASI SEO ON-PAGE -->
    @section('title', 'Promo Geely BSD | Dealer Resmi & Test Drive')
    @section('meta_description', 'Kunjungi Showroom Promo Geely BSD Tangerang. Dapatkan promo harga terbaru, simulasi kredit, dan booking test drive Geely EX5, EX2 & Starray.')
    @section('og_image', 'https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG')
    
    @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@graph": [
        {
          "@@type": "AutoDealer",
          "name": "Promo Geely BSD Tangerang",
          "image": "https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG",
          "@@id": "https://geelyfatmawati.id",
          "url": "https://geelyfatmawati.id",
          "telephone": "+6282246666904", 
          "description": "Dealer mobil listrik resmi Promo Geely BSD Tangerang. Melayani test drive, pembelian tunai/kredit, dan servis resmi Geely EX5, EX2, dan Starray EM-i.",
          "address": {
            "@@type": "PostalAddress",
            "streetAddress": "BSD City",
            "addressLocality": "Tangerang",
            "addressRegion": "Banten",
            "postalCode": "15339",
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
            /* Latar belakang diubah ke warna sangat terang/putih */
            background-color: #f8fafc; 
            color: #111827;
        }

        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        /* Fitur Mouse Drag & Swipe */
        [data-slider] {
            cursor: grab;
        }
        [data-slider]:active {
            cursor: grabbing;
        }
        [data-slider] img {
            pointer-events: none; /* Mencegah image ghosting saat ditarik */
        }

        /* --- CLEAN LIGHT GLASSMORPHISM --- */
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
            border: 1px solid rgba(244, 114, 182, 0.5); /* Aksen Pink saat di-hover */
            box-shadow: 0 30px 60px rgba(236, 72, 153, 0.15), inset 0 1px 0 rgba(255, 255, 255, 1);
            transform: translateY(-5px);
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
            /* Cahaya ambient disesuaikan untuk background terang */
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
            z-index: 10;
        }

        @keyframes blob {
            0% { transform: translate(0px, 0px) scale(1) rotate(0deg); }
            33% { transform: translate(30px, -50px) scale(1.1) rotate(10deg); }
            66% { transform: translate(-20px, 20px) scale(0.9) rotate(-10deg); }
            100% { transform: translate(0px, 0px) scale(1) rotate(0deg); }
        }
        .animate-blob { animation: blob 15s infinite; }
        .animation-delay-2000 { animation-delay: 2s; }
        .animation-delay-4000 { animation-delay: 4s; }

        .img-container { overflow: hidden; cursor: pointer; }
        .img-container img { transition: transform 1.2s cubic-bezier(0.19, 1, 0.22, 1); }
        .glass-island:hover .img-container img, .glass-panel-light:hover .img-container img { transform: scale(1.08); }

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
            background: linear-gradient(to right, transparent, rgba(255,255,255,0.4), transparent);
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
<header class="relative min-h-[100svh] w-full flex items-center justify-center overflow-hidden bg-[#f8fafc] pt-28 pb-12 lg:pt-32 lg:pb-20">
    <div class="absolute inset-0 z-0">
        <video autoplay muted loop playsinline class="w-full h-full object-cover opacity-30 mix-blend-multiply">
            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
        </video>
        <!-- Overlay radial putih terang -->
        <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(248,250,252,0.9)_100%)]"></div>
    </div>

    <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 reveal-up">
        <div class="glass-island rounded-[2rem] md:rounded-[3rem] p-8 md:p-16 lg:p-20 relative overflow-hidden bg-white/70">
            <div class="absolute -top-32 -left-32 w-96 h-96 ambient-glow-pink z-0 pointer-events-none animate-pulse"></div>
            <div class="absolute -bottom-32 -right-32 w-96 h-96 ambient-glow-pink z-0 pointer-events-none animate-pulse animation-delay-2000"></div>
            
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
                
                <div class="lg:col-span-7 flex flex-col">
                    <div class="inline-flex items-center gap-3 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50 mb-6 backdrop-blur-md w-max shadow-sm">
                        <span class="w-2.5 h-2.5 rounded-full bg-pink-500 animate-pulse"></span>
                        <span class="text-pink-600 text-[10px] md:text-xs font-bold tracking-widest uppercase">Promo Geely BSD</span>
                    </div>
                        <h1 class="font-geely text-5xl sm:text-6xl md:text-7xl lg:text-[90px] text-gray-900 uppercase leading-[0.9] tracking-tighter mb-4 lg:mb-8 drop-shadow-sm w-full">
                            Elevate <br>
                            <span class="text-gradient-premium">The Future.</span>
                        </h1>

                        <div class="flex lg:hidden justify-center items-center relative w-full my-8 sm:max-w-md self-center">
                            <div class="w-64 h-64 sm:w-72 sm:h-72 border border-gray-200 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                            <div class="w-48 h-48 sm:w-56 sm:h-56 border border-pink-200 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                            
                            <div class="w-full transform z-10 p-[6px] rounded-[2rem] bg-white border border-gray-100 shadow-[0_20px_40px_-10px_rgba(236,72,153,0.15)] relative">
                                <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Mobil Listrik Geely EX5 Warna Putih Tangerang" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none">
                            </div>
                        </div>
                        
                        <p class="text-gray-600 text-sm md:text-lg font-light leading-relaxed max-w-xl mb-10 border-l-[3px] border-pink-400 pl-6 w-full">
                            Desain elegan, kabin nyaman, dan teknologi elektrik kini hadir di BSD City Tangerang untuk pengalaman berkendara yang lebih modern.
                        </p>
                        
                        <div class="flex flex-col sm:flex-row gap-4 w-full">
                            <a href="/test-drive" class="relative group px-8 py-4 bg-pink-500 text-white font-bold text-[11px] tracking-[0.2em] uppercase overflow-hidden rounded-full flex items-center justify-center gap-3 hover:bg-pink-600 transition-all duration-500 shadow-[0_10px_20px_rgba(236,72,153,0.3)] hover:shadow-[0_15px_30px_rgba(236,72,153,0.4)] w-max">
                                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/30 to-transparent -translate-x-full group-hover:animate-shimmer"></div>
                                <span class="relative z-10">Book Test Drive</span>
                                <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform relative z-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </a>
                        </div>
                    </div>
                    
                    <div class="hidden lg:flex justify-center items-center relative lg:col-span-5">
                        <div class="w-72 h-72 border border-gray-200 rounded-full absolute animate-[spin_30s_linear_infinite]"></div>
                        <div class="w-56 h-56 border border-pink-200 rounded-full absolute animate-[spin_20s_linear_infinite_reverse]"></div>
                        
                        <div class="w-[120%] max-w-none transform translate-x-10 scale-110 z-10 p-[6px] rounded-[2rem] bg-white border border-gray-100 shadow-[0_20px_50px_-15px_rgba(236,72,153,0.2)] relative">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/exterior-01-7JRFy88F1zfhn2Fx.webp" alt="Tampilan Eksterior Depan Mobil Listrik Geely EX5 Tangerang" class="w-full h-auto rounded-[1.65rem] object-cover relative z-10 pointer-events-none drop-shadow-sm">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>

    <!-- SECTION PROMO SLIDESHOW -->
    <section class="py-12 md:py-16 bg-[#f8fafc] relative overflow-hidden border-b border-gray-100 z-10">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[600px] h-[600px] ambient-glow-pink opacity-30 pointer-events-none z-0"></div>
        <div class="max-w-[1400px] mx-auto px-4 sm:px-6 md:px-12 relative z-10 reveal-up">
            
            <div class="relative w-full rounded-[2rem] md:rounded-[3rem] overflow-hidden shadow-[0_20px_50px_-15px_rgba(236,72,153,0.2)] border border-white/50 bg-white/70 backdrop-blur-xl group">
                <!-- Carousel Container -->
                <div id="promo-carousel" class="flex w-full transition-transform duration-700 cubic-bezier(0.25, 1, 0.5, 1)">
                    <!-- Slide 1 -->
                    <div class="w-full flex-shrink-0 relative aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[3/1] bg-transparent flex items-center justify-center overflow-hidden cursor-pointer" onclick="openLightbox('{{ asset('images/banner_home_02-giias2025-AMqDlZzrP2IE3z3W.png') }}', 'Promo GIIAS 2025', true)">
                        <img src="{{ asset('images/banner_home_02-giias2025-AMqDlZzrP2IE3z3W.png') }}" class="w-full h-full object-contain object-center transform transition-transform duration-[2s] group-hover:scale-105" alt="Promo Geely BSD 1">
                    </div>
                    <!-- Slide 2 -->
                    <div class="w-full flex-shrink-0 relative aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[3/1] bg-transparent flex items-center justify-center overflow-hidden cursor-pointer" onclick="openLightbox('{{ asset('images/banner_home_03-giias2025-YX4jaE95kacp8VBO.webp') }}', 'Special Offers', true)">
                        <img src="{{ asset('images/banner_home_03-giias2025-YX4jaE95kacp8VBO.webp') }}" class="w-full h-full object-contain object-center transform transition-transform duration-[2s] group-hover:scale-105" alt="Promo Geely BSD 2">
                    </div>
                    <!-- Slide 3 -->
                    <div class="w-full flex-shrink-0 relative aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[3/1] bg-transparent flex items-center justify-center overflow-hidden cursor-pointer" onclick="openLightbox('{{ asset('images/banner_home-promo-01-202507-YBgjeGg2pzIW7kpk.jpg') }}', 'Booking Privilege', true)">
                        <img src="{{ asset('images/banner_home-promo-01-202507-YBgjeGg2pzIW7kpk.jpg') }}" class="w-full h-full object-contain object-center transform transition-transform duration-[2s] group-hover:scale-105" alt="Promo Geely BSD 3">
                    </div>
                    <!-- Slide 4 -->
                    <div class="w-full flex-shrink-0 relative aspect-[4/3] sm:aspect-[16/9] md:aspect-[21/9] lg:aspect-[3/1] bg-transparent flex items-center justify-center overflow-hidden cursor-pointer" onclick="openLightbox('{{ asset('images/banner_home-promo-02-202507-YZ9Exv9eEyIq5184.jpg') }}', 'Exclusive Deals', true)">
                        <img src="{{ asset('images/banner_home-promo-02-202507-YZ9Exv9eEyIq5184.jpg') }}" class="w-full h-full object-contain object-center transform transition-transform duration-[2s] group-hover:scale-105" alt="Promo Geely BSD 4">
                    </div>
                </div>

                <!-- Gradient Overlay for Buttons -->
                <div class="absolute inset-y-0 left-0 w-24 bg-gradient-to-r from-black/20 to-transparent pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="absolute inset-y-0 right-0 w-24 bg-gradient-to-l from-black/20 to-transparent pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>

                <!-- Navigation Arrows -->
                <button id="promo-prev" class="absolute left-3 md:left-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/90 backdrop-blur-md border border-white text-pink-500 flex items-center justify-center hover:bg-pink-500 hover:text-white hover:border-pink-500 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.1)] z-20 opacity-0 group-hover:opacity-100 translate-x-4 group-hover:translate-x-0">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button id="promo-next" class="absolute right-3 md:right-6 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white/90 backdrop-blur-md border border-white text-pink-500 flex items-center justify-center hover:bg-pink-500 hover:text-white hover:border-pink-500 transition-all shadow-[0_5px_15px_rgba(0,0,0,0.1)] z-20 opacity-0 group-hover:opacity-100 -translate-x-4 group-hover:translate-x-0">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <!-- Dots Indicators -->
                <div class="absolute bottom-4 md:bottom-6 left-1/2 -translate-x-1/2 flex gap-2.5 z-20">
                    <button class="promo-dot w-6 h-2 md:h-2.5 rounded-full bg-pink-500 shadow-sm transition-all duration-300"></button>
                    <button class="promo-dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/80 hover:bg-white shadow-sm transition-all duration-300"></button>
                    <button class="promo-dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/80 hover:bg-white shadow-sm transition-all duration-300"></button>
                    <button class="promo-dot w-2 h-2 md:w-2.5 md:h-2.5 rounded-full bg-white/80 hover:bg-white shadow-sm transition-all duration-300"></button>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: LINEUP (Slider Mobile & Grid Desktop) -->
    <section id="lineup" class="py-24 lg:py-32 relative bg-white overflow-hidden border-b border-gray-100">
        <div class="absolute top-0 right-0 w-[600px] h-[600px] ambient-glow-pink opacity-50 pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] ambient-glow-pink opacity-40 pointer-events-none z-0"></div>
        
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 reveal-up">
                <span class="text-pink-500 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Masterpiece Collection</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-gray-900 leading-none">
                    Intelligent <span class="text-pink-500">Motion</span>
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
                            'desc' => 'Desain kompak nan agresif, solusi sempurna menembus dinamika BSD City.',
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
                <!-- Card Container - Terang dan Elegan -->
                <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center bg-white border border-gray-100 shadow-[0_15px_40px_rgba(0,0,0,0.06)] rounded-[2.5rem] p-2 sm:p-3 relative reveal-up {{ $car['delay'] }} group cursor-pointer transition-all duration-500 hover:scale-[1.02] hover:-translate-y-2 hover:shadow-[0_25px_50px_rgba(236,72,153,0.15)] hover:border-pink-200">
                    <div class="bg-gray-50 rounded-[2rem] h-[550px] flex flex-col relative overflow-hidden w-full transition-colors group-hover:bg-pink-50/30">
                        <div class="relative h-[65%] w-full rounded-t-[2rem] overflow-hidden img-container bg-white">
                            <img src="{{ $car['img'] }}" alt="Spesifikasi {{ $car['name'] }} di Promo Geely BSD Tangerang" class="absolute inset-0 w-full h-full object-cover object-center transition-all duration-700">
                            <!-- Overlay putih transparan ke bawah -->
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-50 via-gray-50/20 to-transparent opacity-100"></div>
                        </div>
                        
                        <!-- Panel Info -->
                        <div class="absolute bottom-6 left-6 right-6 bg-white/90 backdrop-blur-xl rounded-3xl p-6 border border-white shadow-[0_10px_30px_rgba(0,0,0,0.05)] transform transition-all duration-500 group-hover:-translate-y-2 group-hover:border-pink-200 group-hover:shadow-[0_15px_30px_rgba(236,72,153,0.1)]">
                            <span class="text-pink-500 text-[9px] font-bold tracking-[0.3em] uppercase block mb-1">{{ $car['type'] }}</span>
                            <h3 class="font-geely text-3xl text-gray-900 uppercase tracking-tight mb-2">{{ $car['name'] }}</h3>
                            <p class="text-gray-600 text-xs font-light leading-relaxed mb-4 line-clamp-2">{{ $car['desc'] }}</p>
                            
                            <div class="flex items-center justify-between border-t border-gray-100 pt-4 group-hover:border-pink-100 transition-colors">
                                <div class="flex gap-4">
                                    <div>
                                        <p class="text-gray-900 font-geely text-lg leading-none">{{ $car['stat1'] }}</p>
                                        <p class="text-gray-500 text-[8px] uppercase tracking-widest">{{ $car['stat1_lbl'] }}</p>
                                    </div>
                                    <div>
                                        <p class="text-gray-900 font-geely text-lg leading-none">{{ $car['stat2'] }}</p>
                                        <p class="text-gray-500 text-[8px] uppercase tracking-widest">{{ $car['stat2_lbl'] }}</p>
                                    </div>
                                </div>
                                <a href="{{ $car['link'] }}" class="w-10 h-10 rounded-full bg-gray-50 border border-gray-200 flex items-center justify-center text-gray-400 group-hover:bg-pink-500 group-hover:border-pink-500 group-hover:text-white transition-all duration-300 shadow-sm group-hover:shadow-[0_5px_15px_rgba(236,72,153,0.3)]">
                                    <svg class="w-4 h-4 transform -rotate-45" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>            
            
            <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-pink-500 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- SECTION 5: FINANSIAL -->
    <section class="py-24 relative overflow-hidden flex items-center justify-center min-h-[60vh] bg-white">
        <div class="absolute inset-0 z-0">
            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/2400x0-14-mxB2lNnxMqfjr7pG.webp" alt="Layanan Pembiayaan Kredit Promo Geely BSD" class="w-full h-full object-cover opacity-20">
            <div class="absolute inset-0 bg-gradient-to-r from-white/95 via-pink-50/90 to-white/95"></div>
        </div>
        
        <div class="relative z-10 w-full max-w-5xl mx-auto px-6 reveal-up">
            <div class="glass-island rounded-[3rem] p-10 md:p-16 text-center border-t border-pink-200 shadow-xl bg-white/70">
                <div class="inline-block p-4 rounded-full bg-pink-100 border border-pink-200 text-pink-600 mb-6">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08-.402 2.599-1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h2 class="font-geely text-3xl md:text-5xl text-gray-900 uppercase tracking-tighter mb-4">
                    Hitung Estimasi <span class="text-pink-600">Angsuran</span>
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed mb-10 max-w-2xl mx-auto">
                    Miliki kendaraan masa depan tanpa beban. Kalkulator pintar kami akan menyesuaikan skema cicilan terbaik dengan fleksibilitas penuh khusus area BSD dan sekitarnya.
                </p>
                <a href="/credit-simulation" class="btn-shimmer inline-flex px-10 py-5 bg-pink-500 text-white font-bold text-[11px] uppercase tracking-widest rounded-full hover:scale-105 hover:bg-pink-600 hover:shadow-[0_10px_25px_rgba(236,72,153,0.3)] transition-all duration-300">
                    Mulai Simulasi Kredit
                </a>
            </div>
        </div>
    </section>

    <!-- SECTION SHOWCASE: All-New EX5 -->
    <section class="py-24 lg:py-32 bg-[#f8fafc] relative overflow-hidden border-t border-gray-100">
        <div class="absolute top-32 right-[-10%] w-[600px] h-[600px] ambient-glow-pink opacity-50 z-0"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[500px] h-[500px] ambient-glow-pink opacity-40 z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 lg:gap-16 items-center">
                
                <div class="lg:col-span-7 order-1 lg:order-2 reveal-right h-full relative z-10">
                    <div class="glass-island bg-white/60 rounded-[2rem] p-2 relative h-[50vh] lg:h-[600px] overflow-hidden shadow-lg">
                        <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative">
                            <video autoplay muted loop playsinline aria-label="Geely EX5 Video Showcase" class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/say-hi-to-the-geely-ex5---geely-auto-uk-1080p-h264-_1-Sz3UdvLVUW0EehYY.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/20 to-transparent"></div>
                            <div class="absolute bottom-20 lg:bottom-8 left-6 lg:left-8 pr-6">
                                <span class="text-pink-400 text-[10px] tracking-[0.3em] font-bold uppercase block mb-2">Geely EX5</span>
                                <h4 class="font-geely text-2xl md:text-4xl uppercase tracking-tight text-white leading-none">Future in Motion.</h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-5 order-2 lg:order-1 reveal-left relative z-20 -mt-16 sm:-mt-24 lg:mt-0 mx-2 sm:mx-8 lg:mx-0">
                    <div class="glass-island bg-white/90 p-8 md:p-12 lg:p-14 rounded-[3rem] shadow-[0_20px_40px_-15px_rgba(0,0,0,0.1)] lg:shadow-none backdrop-blur-3xl border-white">
                        <div class="inline-flex items-center gap-3 mb-6 px-5 py-2.5 rounded-full border border-pink-200 bg-pink-50">
                            <span class="text-pink-600 text-[9px] font-bold tracking-[0.4em] uppercase">Redefining Joyful Rides</span>
                        </div>
                        
                        <h2 class="font-geely text-3xl sm:text-4xl md:text-5xl uppercase tracking-tighter text-gray-900 mb-6 leading-[1.1]">
                            Keseimbangan <br> <span class="text-gradient-premium">Sempurna</span>
                        </h2>
                        
                        <div class="space-y-4 text-gray-600 text-sm md:text-base font-light leading-relaxed">
                            <p>Geely EX5 hadir sebagai pilihan terbaik bagi Anda yang mencari SUV dengan performa tangguh, desain elegan, serta teknologi canggih. Ditenagai mesin efisien dan fitur keselamatan lengkap.</p>
                            <p>Desain eksterior modern aerodinamis menawarkan efisiensi optimal. Interior dirancang untuk kenyamanan maksimal dengan material premium dan layar infotainment cerdas.</p>
                            <p>Dilengkapi sistem keamanan tingkat tinggi seperti Adaptive Cruise Control dan Blind Spot Monitoring untuk perlindungan ekstra.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION SHOWCASE: Interior & Specs -->
    <section class="py-24 lg:py-32 relative w-full overflow-hidden bg-white">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1669295384050-a1d4357bd1d7?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Abstract Topographic Background" class="w-full h-full object-cover opacity-10 mix-blend-multiply">
            <div class="absolute inset-0 bg-gradient-to-b from-white via-transparent to-white opacity-95"></div>
        </div>
        
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] ambient-glow-pink opacity-40 pointer-events-none z-10"></div>

        <div class="relative z-20 w-full max-w-[1400px] mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                
                <div class="order-1 lg:col-span-7 flex flex-col reveal-left relative z-10">
                    <div class="glass-island bg-white/70 p-2 rounded-[2rem] mb-6 md:mb-8 shadow-lg border-white">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden">
                            <video autoplay muted loop playsinline aria-label="Interior Geely Atmosphere" class="absolute inset-0 w-full h-full object-cover">
                                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/video_atmosphere-WPk8K2f2d7da9R4C.mp4" type="video/mp4">
                            </video>
                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/90 via-transparent to-transparent"></div>
                            <div class="absolute bottom-8 left-8 z-20">
                                <p class="font-geely text-2xl md:text-4xl uppercase tracking-tight mb-1 text-white">Immersive Atmosphere</p>
                                <p class="text-pink-400 text-[10px] tracking-[0.2em] uppercase font-bold">Premium Cabin Experience</p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-3 md:gap-6 relative z-20">
                        <div class="glass-island bg-white p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center shadow-md border-gray-100">
                            <p class="text-gray-500 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Up to</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-gray-900 mb-2"><span class="text-pink-500">495</span><span class="text-[10px] md:text-sm text-gray-400 ml-1">km*</span></h3>
                            <p class="text-gray-400 text-[6px] md:text-[9px] tracking-widest uppercase">NEDC Range</p>
                        </div>
                        <div class="glass-island bg-white p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center shadow-md border-gray-100">
                            <p class="text-gray-500 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Fast Charge</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-gray-900 mb-2"><span class="text-pink-500">20</span><span class="text-[10px] md:text-sm text-gray-400 ml-1">mins**</span></h3>
                            <p class="text-gray-400 text-[6px] md:text-[9px] tracking-widest uppercase">30% - 80%</p>
                        </div>
                        <div class="glass-island bg-white p-4 md:p-8 rounded-[1.5rem] flex flex-col justify-center items-center text-center shadow-md border-gray-100">
                            <p class="text-gray-500 text-[7px] md:text-[9px] tracking-[0.2em] font-bold uppercase mb-2">Acceleration</p>
                            <h3 class="font-geely text-2xl md:text-5xl text-gray-900 mb-2"><span class="text-pink-500">6.9</span><span class="text-[10px] md:text-sm text-gray-400 ml-1">sec</span></h3>
                            <p class="text-gray-400 text-[6px] md:text-[9px] tracking-widest uppercase">0-100 km/h</p>
                        </div>
                    </div>
                </div>

                <div class="order-2 lg:col-span-5 glass-island bg-white/80 p-8 md:p-12 rounded-[2rem] flex flex-col justify-center reveal-right relative overflow-hidden shadow-xl border-white">
                    <div class="absolute top-0 right-0 w-64 h-64 ambient-glow-pink opacity-50 z-0"></div>
                    <div class="relative z-10">
                        <span class="text-pink-500 text-[10px] md:text-xs tracking-[0.4em] font-bold uppercase mb-4 block">All-New EX5</span>
                        <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter mb-8 leading-[0.9] text-gray-900">
                            Ready To <br> <span class="text-gray-400">Explore</span>
                        </h2>
                        <p class="text-gray-600 text-sm md:text-base leading-relaxed font-light mb-10">
                            Rasakan kebebasan berkendara tanpa batas dengan arsitektur baterai mutakhir dan efisiensi aerodinamis kelas dunia. Geely EX5 dirancang secara presisi memadukan performa elektrik superior dengan tata ruang kabin yang lapang.
                        </p>
                        <a href="/test-drive" class="inline-flex items-center gap-3 text-pink-600 text-[10px] font-bold tracking-[0.2em] uppercase hover:text-pink-500 transition-colors w-max pb-2 border-b border-pink-200 hover:border-pink-500">
                            Book Test Drive <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- SECTION SPOTLIGHT GEELY EX2 -->
    <section id="ex2-spotlight" class="py-24 lg:py-32 relative overflow-hidden bg-pink-50/30 border-y border-gray-100">
        
        <div class="absolute top-[-10%] right-[-10%] w-[700px] h-[700px] bg-gradient-to-br from-pink-200/40 to-rose-100/30 rounded-full blur-[100px] pointer-events-none animate-blob"></div>
        <div class="absolute bottom-[-10%] left-[-10%] w-[600px] h-[600px] bg-gradient-to-tr from-white to-pink-100/50 rounded-full blur-[100px] pointer-events-none animate-blob animation-delay-4000"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-12 lg:mb-16 gap-6 reveal-up">
                <div class="max-w-2xl">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-8 h-[2px] bg-pink-500"></div>
                        <span class="text-pink-600 text-[10px] font-bold tracking-[0.3em] uppercase">Spotlight Geely EX2</span>
                    </div>
                    <h2 class="font-geely text-4xl sm:text-5xl md:text-6xl lg:text-7xl uppercase tracking-tighter text-gray-900 leading-[0.9]">
                        Urban <span class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-rose-500">Blueprint</span>
                    </h2>
                </div>
                <div class="md:text-right pb-2">
                    <p class="text-gray-600 text-sm md:text-base font-light max-w-sm ml-auto border-r-2 border-pink-300 pr-4">
                        Eksplorasi dimensi estetika kaca. Presisi arsitektural untuk mobilitas perkotaan yang minimalis dan elegan.
                    </p>
                </div>
            </div>

            <div class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory items-stretch gap-6 lg:grid lg:grid-cols-12 lg:gap-6 reveal-up delay-100 px-4 md:px-0 -mx-4 md:mx-0 pb-8 lg:pb-0">
                
                <!-- 01: Exterior -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-7 glass-panel-light rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg', '01 // Exterior - Aero Stance', true)">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50 border border-gray-100 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/lp_ex2_02_indo-1jQVDabXPa2GTqAg.jpg" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl" alt="Exterior EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-pink-500 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">01 // Exterior</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none group-hover:text-pink-600 transition-colors">Aero Stance</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Desain aerodinamis mutakhir yang tidak hanya memukau secara visual, namun membelah angin dengan efisiensi absolut.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-pink-50 border border-pink-100 text-pink-500 flex items-center justify-center group-hover:bg-pink-500 group-hover:text-white transition-all duration-500 flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 02: Cockpit -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-5 glass-panel-light rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_ex2_02-1-wMrk98nhwyihCNmX.jpg', '02 // Cockpit - Digital Oasis', true)">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50 border border-gray-100 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/interior_color_ex2_02-1-wMrk98nhwyihCNmX.jpg" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl" alt="Interior EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-pink-500 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">02 // Cockpit</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none group-hover:text-pink-600 transition-colors">Double Tech Joy</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Integrasi Flyme Auto mutakhir dan pengisian daya nirkabel mendefinisikan ulang rasanya mobilitas cerdas.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-pink-50 border border-pink-100 text-pink-500 flex items-center justify-center group-hover:bg-pink-500 group-hover:text-white transition-all duration-500 flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 03: Lifestyle -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-5 glass-panel-light rounded-[2.5rem] p-4 sm:p-5 group cursor-pointer flex flex-col h-full" onclick="openLightbox('https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-10-driving-pleasure-geely-ex2-MJhRNhH2mxqA4wUU.webp', '03 // Lifestyle - Agility', true)">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-50 border border-gray-100 flex items-center justify-center p-2 sm:p-4 flex-shrink-0">
                        <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/gambar-10-driving-pleasure-geely-ex2-MJhRNhH2mxqA4wUU.webp" class="w-full h-full object-contain transform group-hover:scale-[1.03] transition-transform duration-[1.5s] ease-out rounded-xl" alt="Lifestyle EX2">
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-pink-500 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">03 // Lifestyle</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none group-hover:text-pink-600 transition-colors">Agility</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Keseimbangan bermanuver dan kelincahan mutlak menembus dinamika kota Tangerang.</p>
                        </div>
                        <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-pink-50 border border-pink-100 text-pink-500 flex items-center justify-center group-hover:bg-pink-500 group-hover:text-white transition-all duration-500 flex-shrink-0 mb-2">
                            <svg class="w-4 h-4 md:w-5 md:h-5 transform -rotate-45 group-hover:translate-x-0.5 group-hover:-translate-y-0.5 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </div>

                <!-- 04: Utility -->
                <div class="flex-shrink-0 w-[85vw] lg:w-auto snap-center lg:col-span-7 glass-panel-light rounded-[2.5rem] p-4 sm:p-5 flex flex-col h-full group">
                    <div class="relative w-full h-[240px] sm:h-[280px] lg:h-[340px] rounded-[1.5rem] overflow-hidden mb-6 bg-gray-100 border border-gray-200 flex-shrink-0">
                        <video autoplay muted loop playsinline preload="auto" class="absolute inset-0 w-full h-full object-cover opacity-90 group-hover:opacity-100 transition-opacity duration-500">
                            <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/storage-Go9jWSFq0yGaDOkj.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="px-2 md:px-4 flex justify-between items-end gap-4 flex-grow">
                        <div class="flex flex-col w-full h-full">
                            <div class="h-[5rem] sm:h-[5.5rem] lg:h-[6.5rem]">
                                <span class="text-pink-500 font-bold text-[10px] tracking-[0.3em] uppercase mb-2 block">04 // Utility</span>
                                <h3 class="font-geely text-2xl md:text-3xl lg:text-4xl text-gray-900 uppercase tracking-tight leading-none group-hover:text-pink-600 transition-colors">Max Cargo</h3>
                            </div>
                            <p class="text-gray-600 text-xs sm:text-sm leading-relaxed max-w-[90%] mb-2">Optimalisasi tata ruang modular dengan kapasitas penyimpanan super fleksibel di setiap inci untuk kepraktisan Anda.</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="text-center mt-2 flex lg:hidden justify-center items-center gap-2 text-pink-500 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- SECTION TECHNOLOGY -->
    <section class="py-24 lg:py-32 bg-[#f8fafc] overflow-hidden relative">
        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            
            <div class="text-center max-w-4xl mx-auto mb-16 md:mb-20 reveal-up">
                <span class="text-pink-500 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Core Technology</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-gray-900 leading-[0.9] mb-6">
                    Global <span class="text-gradient-premium">Architecture</span>
                </h2>
                <p class="text-gray-600 text-sm md:text-base font-light leading-relaxed max-w-2xl mx-auto">
                    Platform GEA mengintegrasikan superkomputer on-board dengan arsitektur baja boron terkuat, mendefinisikan ulang standar keselamatan dan kecerdasan mobil listrik dunia.
                </p>
            </div>

            <div class="relative w-full aspect-video max-w-6xl mx-auto glass-island bg-white/70 rounded-[2rem] p-2 flex items-center justify-center reveal-scale shadow-[0_20px_50px_rgba(0,0,0,0.05)] border-white mb-8">
                <div class="w-full h-full rounded-[1.5rem] overflow-hidden relative z-10 bg-gray-900">
                    <video autoplay muted loop playsinline aria-label="Teknologi Platform GEA Geely" class="w-full h-full object-cover opacity-90 mix-blend-screen">
                        <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely-ex2-inside-the-gea-intelligent-electric-platform---geely-auto-720p-h264-tjCY49tcStbBVMrV.mp4" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-[radial-gradient(circle_at_center,transparent_0%,rgba(0,0,0,0.8)_100%)] pointer-events-none"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-4xl mx-auto reveal-up delay-200">
                 <div class="glass-panel-light p-6 md:p-8 rounded-[1.5rem] border border-white shadow-sm hover:shadow-lg transition-shadow text-center md:text-left">
                    <span class="text-pink-500 text-[10px] font-bold tracking-widest uppercase block mb-2">Neural Core</span>
                    <h4 class="font-geely text-2xl text-gray-900 uppercase tracking-tight mb-3">AI Integration</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Sinkronisasi millidetik sensor Lidar dan Radar pintar.</p>
                </div>
                <div class="glass-panel-light p-6 md:p-8 rounded-[1.5rem] border border-white shadow-sm hover:shadow-lg transition-shadow text-center md:text-left">
                    <span class="text-pink-500 text-[10px] font-bold tracking-widest uppercase block mb-2">Thermal Mgmt</span>
                    <h4 class="font-geely text-2xl text-gray-900 uppercase tracking-tight mb-3">Hyper Efficiency</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">Melindungi sel baterai dan memaksimal jarak tempuh absolut.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- SECTION EM-i HYBRID -->
    <div class="relative w-full pb-10 bg-white">
        
        <div class="sticky top-[calc(50vh-28.125vw)] md:top-0 w-full aspect-video md:aspect-auto md:h-[100vh] overflow-hidden z-0 flex items-center justify-center bg-black">
            <video autoplay muted loop playsinline aria-label="Teknologi EM-i Hybrid Geely" class="absolute inset-0 w-full h-full object-cover">
                <source src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/geely---coming-soon-starray-em-i---geely-epping-1080p-h264-YZ9EbbbjRws55ErL.mp4" type="video/mp4">
            </video>
            <!-- Overlay gradasi putih telah dihapus agar warna asli video terlihat jelas -->
        </div>

        <section class="mt-[40vh] md:mt-[70vh] py-16 md:py-24 lg:py-32 bg-white relative z-30 min-h-[100vh] rounded-t-[2rem] md:rounded-t-[3rem] border-t-[3px] border-pink-400 shadow-[0_-20px_50px_rgba(0,0,0,0.05)]">
            
            <div class="max-w-[1600px] w-full mx-auto px-6 md:px-12 lg:px-16 relative z-10 grid grid-cols-1 lg:grid-cols-2 gap-8 lg:gap-x-20 lg:gap-y-12 items-center lg:items-start">
                
                <div class="order-1 lg:col-start-1 lg:row-start-1 flex flex-col justify-center">
                    <h3 class="text-pink-500 text-[10px] md:text-sm font-bold tracking-[0.3em] uppercase mb-4 reveal-up">
                        Efficiency meets intelligent
                    </h3>
                    <h2 class="font-geely text-4xl md:text-5xl lg:text-7xl uppercase tracking-tighter text-gray-900 mb-6 reveal-up delay-100 leading-tight">
                        EM-i <br> <span class="text-gradient-premium">Super Hybrid</span>
                    </h2>
                    <p class="text-gray-600 text-sm md:text-base lg:text-lg font-light leading-relaxed mb-4 lg:mb-10 reveal-up delay-200">
                        EM-i atau E-Motive intelligence adalah teknologi hibrida canggih dari Geely, yang menggabungkan manfaat bahan bakar dan baterai untuk efisiensi, kemampuan, dan emisi yang lebih rendah.
                    </p>
                </div>

                <div class="order-2 lg:col-start-2 lg:row-start-1 relative reveal-left delay-300">
                    <div class="glass-island bg-white/80 p-2 rounded-[2rem] relative z-10 border-gray-200 shadow-xl">
                        <div class="relative w-full aspect-video rounded-[1.5rem] overflow-hidden img-container">
                            <video autoplay muted loop playsinline aria-label="Geely Starray EM-i Engine" class="absolute inset-0 w-full h-full object-cover bg-gray-100">
                                <source src="/videos/benefits-of-em-i.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>

                <div class="order-3 lg:col-start-2 lg:row-start-2 glass-panel-light p-8 rounded-[2rem] reveal-up delay-400 relative z-10 group overflow-hidden border-l-[3px] border-l-transparent hover:border-l-pink-500 transition-all duration-300">
                    <h4 class="text-gray-900 font-geely text-2xl mb-4 relative z-10 group-hover:text-pink-600 transition-colors">
                        Highest Thermal Efficiency (46.5%)
                    </h4>
                    <p class="text-gray-600 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        Platform dengan efisiensi termal terdepan di dunia, melampaui standar industri.
                    </p>
                </div>

                <div class="order-4 lg:col-start-1 lg:row-start-2 glass-panel-light p-8 rounded-[2rem] reveal-up delay-300 relative group overflow-hidden border-l-[3px] border-l-transparent hover:border-l-pink-500 transition-all duration-300">
                    <h4 class="text-gray-900 font-geely text-2xl mb-4 relative z-10 group-hover:text-pink-600 transition-colors">
                        High Efficiency Electric Drive
                    </h4>
                    <p class="text-gray-600 text-sm md:text-base relative z-10 leading-relaxed font-light">
                        PHEV terdepan di kelasnya dengan penggerak efisiensi tinggi dan performa PHEV variabel kontinu.
                    </p>
                </div>

            </div>
        </section>
    </div>

    <!-- SECTION 8 APP -->
    <section id="app-remote" class="py-24 lg:py-32 relative bg-pink-50/50 overflow-hidden border-t border-pink-100">
        
        <div class="max-w-[1400px] w-full mx-auto px-6 md:px-12 relative z-10">
            
            <div class="text-center mb-16 md:mb-24 reveal-up">
                <span class="text-pink-500 text-[10px] font-bold tracking-[0.4em] uppercase mb-4 block">Flyme Auto</span>
                <h2 class="font-geely text-4xl md:text-6xl uppercase tracking-tighter text-gray-900 mb-6">
                    Control At Your <span class="text-pink-500">Fingertips</span>
                </h2>
            </div>

            <div class="relative w-full group" data-slider-wrapper>
                <div data-slider class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-6 md:grid md:grid-cols-3 lg:gap-8 pt-6 pb-12 px-4 md:px-0 -mx-4 md:mx-0 scroll-smooth">
                    
                    <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-panel-light rounded-[2rem] p-3 flex flex-col reveal-up delay-100 group cursor-pointer img-container hover:-translate-y-2 transition-transform duration-500 shadow-md hover:border-pink-300">
                        <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/always-carghed.jpg-sPvzxctIegkiPhzC.webp" alt="Fitur Aplikasi Geely Always Charged" class="w-full h-full object-cover">
                        </div>
                        <div class="px-4 pb-4">
                            <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-pink-600 transition-colors">Always Charged</h4>
                            <p class="text-gray-600 text-xs leading-relaxed font-light">Monitor daya baterai dan jadwalkan pengisian secara remote dari smartphone Anda.</p>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-panel-light rounded-[2rem] p-3 flex flex-col reveal-up delay-200 group cursor-pointer img-container hover:-translate-y-2 transition-transform duration-500 shadow-md hover:border-pink-300">
                        <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/never-lost.jpg-9JUUSHg9iMEbQsEN.webp" alt="Fitur Aplikasi Geely GPS Never Lost" class="w-full h-full object-cover">
                        </div>
                        <div class="px-4 pb-4">
                            <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-pink-600 transition-colors">Never Lost</h4>
                            <p class="text-gray-600 text-xs leading-relaxed font-light">Pelacakan posisi kendaraan presisi tinggi dengan fitur "Find My Car" real-time.</p>
                        </div>
                    </div>

                    <div class="flex-shrink-0 w-[85vw] md:w-auto snap-center glass-panel-light rounded-[2rem] p-3 flex flex-col reveal-up delay-300 group cursor-pointer img-container hover:-translate-y-2 transition-transform duration-500 shadow-md hover:border-pink-300">
                        <div class="w-full aspect-[4/3] rounded-[1.5rem] overflow-hidden relative mb-6">
                            <img src="https://assets.zyrosite.com/Yle46KEPN6IkVONg/full-control.jpg-ycOYdP2jZuNB3u9w.webp" alt="Fitur Aplikasi Geely Full Remote Control" class="w-full h-full object-cover">
                        </div>
                        <div class="px-4 pb-4">
                            <h4 class="text-gray-900 font-geely text-2xl uppercase tracking-tight mb-3 group-hover:text-pink-600 transition-colors">Full Control</h4>
                            <p class="text-gray-600 text-xs leading-relaxed font-light">Kendalikan suhu kabin dan akses kunci pintu sebelum Anda tiba di mobil.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-2 flex md:hidden justify-center items-center gap-2 text-pink-500 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to explore
            </div>
        </div>
    </section>

    <!-- SECTION CUSTOMER GALLERY -->
    <section id="customer-gallery" class="py-24 lg:py-32 relative bg-white overflow-hidden border-t border-gray-100">
        <div class="absolute top-0 left-0 w-[600px] h-[600px] ambient-glow-pink opacity-30 pointer-events-none z-0"></div>
        <div class="absolute bottom-0 right-0 w-[500px] h-[500px] ambient-glow-pink opacity-30 pointer-events-none z-0"></div>

        <div class="max-w-[1600px] mx-auto px-6 md:px-12 lg:px-16 relative z-10">
            <div class="text-center max-w-3xl mx-auto mb-12 md:mb-16 reveal-up">
                <span class="text-pink-500 text-[10px] font-bold tracking-[0.4em] uppercase block mb-4">Happy Customers</span>
                <h2 class="font-geely text-4xl sm:text-5xl md:text-7xl uppercase tracking-tighter text-gray-900 leading-none">
                    Delivery <span class="text-pink-500">Moments</span>
                </h2>
                <p class="mt-4 text-gray-600 text-sm md:text-base font-light leading-relaxed">
                    Bergabunglah dengan keluarga besar Geely BSD. Berikut adalah momen bahagia para pelanggan setia kami saat menerima kendaraan impian mereka.
                </p>
            </div>

            <div class="relative w-full group" data-slider-wrapper>
                <!-- Navigation Arrows -->
                <button data-prev class="absolute left-2 md:-left-4 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-200 text-pink-500 flex items-center justify-center hover:bg-pink-500 hover:text-white transition-all shadow-lg z-20 opacity-0 group-hover:opacity-100 hidden md:flex cursor-pointer disabled:opacity-0">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button data-next class="absolute right-2 md:-right-4 top-1/2 -translate-y-1/2 w-10 h-10 md:w-12 md:h-12 rounded-full bg-white border border-gray-200 text-pink-500 flex items-center justify-center hover:bg-pink-500 hover:text-white transition-all shadow-lg z-20 opacity-0 group-hover:opacity-100 hidden md:flex cursor-pointer disabled:opacity-0">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>

                <div data-slider class="flex overflow-x-auto overscroll-x-contain hide-scrollbar snap-x snap-mandatory gap-4 md:gap-6 pt-4 pb-12 px-4 md:px-0 -mx-4 md:mx-0 scroll-smooth">
                    @php
                        $customers = [
                            'images/customer/cs1.jpeg',
                            'images/customer/cs2.jpeg',
                            'images/customer/cs3.jpeg',
                            'images/customer/cs4.jpeg',
                            'images/customer/cs5.jpeg',
                            'images/customer/cs6.jpeg',
                            'images/customer/cs7.jpeg',
                        ];
                    @endphp

                    @foreach($customers as $index => $img)
                    @php $delayClass = $index % 3 == 0 ? 'delay-100' : ($index % 3 == 1 ? 'delay-200' : 'delay-300'); @endphp
                    <div class="flex-shrink-0 w-[75vw] sm:w-[45vw] md:w-[30vw] lg:w-[22vw] snap-center glass-panel-light rounded-[1.5rem] p-2 group cursor-pointer reveal-up {{ $delayClass }}" onclick="openLightbox('{{ asset($img) }}', 'Delivery Moment {{ $index + 1 }}', true)">
                        <div class="relative w-full aspect-[4/5] rounded-[1rem] overflow-hidden img-container bg-gray-50">
                            <img src="{{ asset($img) }}" alt="Customer Geely BSD {{ $index + 1 }}" class="w-full h-full object-cover object-center transition-transform duration-700 group-hover:scale-105">
                            <div class="absolute inset-0 bg-pink-500/10 mix-blend-overlay opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-2 flex justify-center items-center gap-2 text-pink-500 text-[9px] font-bold uppercase tracking-widest animate-pulse">
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                Swipe to view
            </div>
        </div>
    </section>

    <!-- LIGHTBOX LIGHT THEME -->
    <div id="lightbox" class="fixed inset-0 hidden items-center justify-center bg-white/95 backdrop-blur-3xl opacity-0 transition-opacity duration-300" style="z-index: 9999;" onclick="closeLightbox(event)">
        <button onclick="closeLightbox(event)" class="absolute top-6 right-6 md:top-10 md:right-10 text-gray-500 hover:text-pink-600 transition-colors bg-gray-50 p-2 rounded-full border border-gray-200 shadow-sm hover:border-pink-200 cursor-pointer" style="z-index: 10000;">
            <svg class="w-8 h-8 md:w-10 md:h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <div class="relative w-full max-w-7xl h-full flex flex-col items-center justify-center p-4 md:p-12 pointer-events-none">
            <div class="relative max-h-[80vh] w-full flex justify-center items-center group pointer-events-auto">
                <img id="lightbox-img" src="" alt="Fullscreen preview" class="max-w-full max-h-[75vh] md:max-h-[85vh] object-contain rounded-xl shadow-[0_30px_60px_-15px_rgba(0,0,0,0.15)] border border-gray-100 transition-transform duration-300 transform scale-95 bg-white backdrop-blur-sm">
            </div>
            <div class="mt-6 md:mt-8 pointer-events-auto text-center">
                <p id="lightbox-caption" class="font-geely text-pink-600 text-lg md:text-2xl tracking-widest uppercase font-semibold"></p>
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

            // Logika untuk Promo Slider (Dengan Fitur Sentuh/Swipe Mobile)
            const promoCarousel = document.getElementById('promo-carousel');
            const promoPrev = document.getElementById('promo-prev');
            const promoNext = document.getElementById('promo-next');
            const promoDots = document.querySelectorAll('.promo-dot');
            
            if (promoCarousel && promoPrev && promoNext && promoDots.length > 0) {
                let currentPromoSlide = 0;
                const totalPromoSlides = promoDots.length;
                let promoInterval;

                const updatePromoSlider = () => {
                    promoCarousel.style.transform = `translateX(-${currentPromoSlide * 100}%)`;
                    promoDots.forEach((dot, index) => {
                        if (index === currentPromoSlide) {
                            dot.classList.add('bg-pink-500', 'w-6');
                            dot.classList.remove('bg-white/80', 'w-2', 'md:w-2.5');
                        } else {
                            dot.classList.remove('bg-pink-500', 'w-6');
                            dot.classList.add('bg-white/80', 'w-2', 'md:w-2.5');
                        }
                    });
                };

                const nextPromoSlide = () => {
                    currentPromoSlide = (currentPromoSlide + 1) % totalPromoSlides;
                    updatePromoSlider();
                };

                const prevPromoSlide = () => {
                    currentPromoSlide = (currentPromoSlide - 1 + totalPromoSlides) % totalPromoSlides;
                    updatePromoSlider();
                };

                const startPromoAutoPlay = () => {
                    promoInterval = setInterval(nextPromoSlide, 5000); 
                };

                const stopPromoAutoPlay = () => {
                    clearInterval(promoInterval);
                };

                promoNext.addEventListener('click', () => {
                    nextPromoSlide();
                    stopPromoAutoPlay();
                    startPromoAutoPlay();
                });

                promoPrev.addEventListener('click', () => {
                    prevPromoSlide();
                    stopPromoAutoPlay();
                    startPromoAutoPlay();
                });

                promoDots.forEach((dot, index) => {
                    dot.addEventListener('click', () => {
                        currentPromoSlide = index;
                        updatePromoSlider();
                        stopPromoAutoPlay();
                        startPromoAutoPlay();
                    });
                });

                // Tambahan deteksi Swipe untuk pengguna HP di Promo Banner
                let touchStartX = 0;
                promoCarousel.addEventListener('touchstart', e => {
                    touchStartX = e.changedTouches[0].screenX;
                }, {passive: true});

                promoCarousel.addEventListener('touchend', e => {
                    let touchEndX = e.changedTouches[0].screenX;
                    if (touchEndX < touchStartX - 30) { nextPromoSlide(); stopPromoAutoPlay(); startPromoAutoPlay(); }
                    if (touchEndX > touchStartX + 30) { prevPromoSlide(); stopPromoAutoPlay(); startPromoAutoPlay(); }
                }, {passive: true});

                startPromoAutoPlay();
            }

            // Logika Generic untuk Fitur Mouse Drag & Tombol Panah (Customer Gallery & Lainnya)
            document.querySelectorAll('[data-slider-wrapper]').forEach(wrapper => {
                const slider = wrapper.querySelector('[data-slider]');
                const prevBtn = wrapper.querySelector('[data-prev]');
                const nextBtn = wrapper.querySelector('[data-next]');

                if (slider && prevBtn && nextBtn) {
                    // Tombol Panah Klik
                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: slider.clientWidth * 0.8, behavior: 'smooth' });
                    });
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -slider.clientWidth * 0.8, behavior: 'smooth' });
                    });
                    
                    // Fitur Tarik dengan Mouse (Desktop Drag-to-Scroll)
                    let isDown = false;
                    let startX;
                    let scrollLeft;
                    let isDragging = false; // Flag untuk mendeteksi apakah sedang diseret atau cuma diklik

                    slider.addEventListener('mousedown', (e) => {
                        isDown = true;
                        isDragging = false;
                        slider.style.cursor = 'grabbing';
                        startX = e.pageX - slider.offsetLeft;
                        scrollLeft = slider.scrollLeft;
                    });
                    
                    slider.addEventListener('mouseleave', () => {
                        isDown = false;
                        slider.style.cursor = 'grab';
                    });
                    
                    slider.addEventListener('mouseup', () => {
                        isDown = false;
                        slider.style.cursor = 'grab';
                    });
                    
                    slider.addEventListener('mousemove', (e) => {
                        if (!isDown) return;
                        e.preventDefault();
                        isDragging = true;
                        const x = e.pageX - slider.offsetLeft;
                        const walk = (x - startX) * 2; // kecepatan drag scroll
                        slider.scrollLeft = scrollLeft - walk;
                    });

                    // Mencegah gambar / lightbox terbuka jika pengguna sedang niat "menarik" mouse
                    const clickableItems = slider.querySelectorAll('[onclick], a');
                    clickableItems.forEach(item => {
                        item.addEventListener('click', (e) => {
                            if (isDragging) {
                                e.preventDefault();
                                e.stopPropagation();
                            }
                        }, true); // Use capture phase
                    });
                }
            });
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
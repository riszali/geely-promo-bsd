<x-layouts.app>
    <!-- OPTIMASI SEO ON-PAGE DI HEADER -->
    @section('title', 'Hubungi Dealer Resmi Geely BSD Tangerang | Eusdama Geely Premium')
    @section('meta_description', 'Hubungi Eusdama di Dealer Resmi Geely BSD Tangerang. Layanan test drive, promo cicilan, dan info unit Geely EX5, EX2 & Starray.')
    @section('keywords', 'Hubungi Geely BSD, Sales Geely Tangerang, Eusdama Geely Premium, Alamat Dealer Geely BSD, Geely Tangerang Banten')

    @push('schema')
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "AutoDealer",
      "name": "Geely BSD - Eusdama Geely Premium",
      "image": "https://assets.zyrosite.com/Yle46KEPN6IkVONg/azs02470-VCvpUDL4Xo3Qi0iF.JPG",
      "@@id": "https://geelyfatmawati.id/contact",
      "url": "https://geelyfatmawati.id/contact",
      "telephone": "+6282246666904",
      "address": {
        "@@type": "PostalAddress",
        "streetAddress": "Kav. Commercial de Park, Jl. Boulevard Utara No.lot 2 no.17, Lengkong Wetan, Kec. Pagedangan",
        "addressLocality": "Kabupaten Tangerang",
        "addressRegion": "Banten",
        "postalCode": "15331",
        "addressCountry": "ID"
      },
      "geo": {
        "@@type": "GeoCoordinates",
        "latitude": -6.3015,
        "longitude": 106.6432
      },
      "openingHoursSpecification": [
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
          "opens": "08:30",
          "closes": "19:00"
        },
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": "Saturday",
          "opens": "08:30",
          "closes": "16:00"
        },
        {
          "@@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "08:30",
          "closes": "15:00"
        }
      ],
      "sameAs": [
        "https://www.instagram.com/geelyfatmawati.id"
      ]
    }
    </script>
    @endpush

    <style>
        html { scroll-behavior: smooth; }
        
        body {
            background-color: #f8fafc; 
            color: #111827;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(24px);
            -webkit-backdrop-filter: blur(24px);
            border: 1px solid rgba(226, 232, 240, 0.8);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.04);
            transition: all 0.4s ease;
        }
        .glass-card:hover {
            border-color: rgba(244, 114, 182, 0.4);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(236, 72, 153, 0.1);
        }

        .text-gradient-pink {
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

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>

    <div class="relative min-h-screen bg-[#f8fafc] pt-32 pb-24 overflow-hidden bg-noise-overlay border-b border-gray-100">
        <!-- Background Decor -->
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-pink-400/20 rounded-full blur-[150px] pointer-events-none z-0"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-rose-400/20 rounded-full blur-[150px] pointer-events-none z-0"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Header Section -->
            <div class="text-center mb-16">
                <!-- Profile Picture Eusdama -->
                <div class="relative w-32 h-32 md:w-40 md:h-40 mx-auto mb-6 animate-float">
                    <div class="absolute inset-0 bg-pink-500 rounded-full blur-xl opacity-30 animate-pulse"></div>
                    <img src="{{ asset('images/img_6537-mePgExrejnhGjRzp.jpg') }}" alt="Eusdama Sales Geely" class="relative w-full h-full object-cover rounded-full border-4 border-white shadow-[0_10px_30px_rgba(236,72,153,0.2)] z-10">
                </div>

                <div class="inline-flex items-center gap-2 mb-6 px-4 py-2 rounded-full border border-pink-200 bg-pink-50 text-pink-600 shadow-sm">
                    <span class="text-[10px] font-bold tracking-[0.3em] uppercase">Premium Sales Advisor</span>
                </div>
                
                <h1 class="font-geely text-5xl md:text-7xl font-bold uppercase tracking-tighter mb-6 text-gray-900">
                    Hubungi <span class="text-gradient-pink">Eusdama</span>
                </h1>
                
                <p class="text-gray-600 text-sm md:text-base font-light max-w-2xl mx-auto leading-relaxed">
                    Dapatkan pelayanan eksklusif untuk konsultasi, test drive, dan pemesanan unit Geely di BSD Tangerang bersama <strong>Eusdama</strong>.
                </p>
            </div>

            <!-- Top Cards Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 mb-8 lg:mb-16">
                <!-- WhatsApp Card -->
                <div class="glass-card rounded-[2rem] p-8 flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-pink-50 rounded-2xl flex items-center justify-center text-pink-500 border border-pink-100 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"></path></svg>
                    </div>
                    <h3 class="text-gray-900 font-geely text-xl uppercase tracking-widest mb-2">WhatsApp Business</h3>
                    <p class="text-gray-500 text-xs mb-6 font-medium">+62 822-4666-6904</p>
                    <a href="https://wa.me/6282246666904" target="_blank" class="w-full py-4 bg-pink-500 hover:bg-pink-600 text-white font-bold rounded-2xl transition-all uppercase tracking-widest text-[11px] shadow-[0_10px_20px_rgba(236,72,153,0.3)]">
                        Mulai Chat
                    </a>
                </div>

                <!-- Location Card (HIDDEN ON MOBILE, SHOWN ON DESKTOP) -->
                <div class="glass-card rounded-[2rem] p-8 hidden lg:flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-pink-50 rounded-2xl flex items-center justify-center text-pink-500 border border-pink-100 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-gray-900 font-geely text-xl uppercase tracking-widest mb-2">Showroom Lokasi</h3>
                    <p class="text-gray-500 text-[10px] leading-relaxed mb-6 italic line-clamp-3">
                        Kav. Commercial de Park, Jl. Boulevard Utara No.lot 2 no.17, Lengkong Wetan, Kec. Pagedangan, Kabupaten Tangerang
                    </p>
                    <a href="https://maps.google.com/?q=Kav.+Commercial+de+Park,+Jl.+Boulevard+Utara+Lengkong+Wetan,+Pagedangan,+Tangerang" target="_blank" class="w-full py-4 border border-gray-200 hover:bg-pink-50 hover:text-pink-600 hover:border-pink-200 text-gray-600 font-bold rounded-2xl transition-all uppercase tracking-widest text-[11px]">
                        Petunjuk Arah
                    </a>
                </div>

                <!-- Instagram Card -->
                <div class="glass-card rounded-[2rem] p-8 flex flex-col items-center text-center group">
                    <div class="w-14 h-14 bg-pink-50 rounded-2xl flex items-center justify-center text-pink-500 border border-pink-100 mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                    </div>
                    <h3 class="text-gray-900 font-geely text-xl uppercase tracking-widest mb-2">Instagram</h3>
                    <p class="text-gray-500 text-xs mb-6 font-medium">@@promogeely.id</p>
                    <a href="https://instagram.com/promogeely.id" target="_blank" class="w-full py-4 border border-gray-200 hover:bg-pink-50 hover:text-pink-600 hover:border-pink-200 text-gray-600 font-bold rounded-2xl transition-all uppercase tracking-widest text-[11px]">
                        Follow Kami
                    </a>
                </div>
            </div>

            <!-- Bottom Content Grid -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Operational Hours -->
                <div class="lg:col-span-5 glass-card rounded-[2.5rem] p-10 h-max bg-white/90">
                    <h2 class="font-geely text-2xl text-gray-900 uppercase tracking-tight mb-8 flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-pink-500"></span>
                        Opening Hours
                    </h2>
                    <div class="space-y-4">
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 font-medium">Senin - Jumat</span>
                            <span class="text-gray-900 font-bold tracking-wide text-sm">08:30 – 19:00</span>
                        </div>
                        <div class="flex justify-between items-center py-3 border-b border-gray-100">
                            <span class="text-gray-500 font-medium">Sabtu</span>
                            <span class="text-gray-900 font-bold tracking-wide text-sm">08:30 – 16:00</span>
                        </div>
                        <div class="flex justify-between items-center py-3">
                            <span class="text-pink-500 font-medium">Minggu</span>
                            <span class="text-gray-900 font-bold tracking-wide text-sm">08:30 – 15:00</span>
                        </div>
                    </div>
                    
                    <!-- Consultant Message -->
                    <div class="mt-12 p-6 rounded-2xl bg-pink-50 border border-pink-100 relative overflow-hidden">
                        <div class="absolute -right-4 -top-4 w-16 h-16 bg-pink-200/50 rounded-full blur-xl"></div>
                        <p class="text-[11px] text-pink-600 font-bold uppercase tracking-widest mb-2 relative z-10">Private Consultation</p>
                        <p class="text-gray-600 text-xs leading-relaxed italic relative z-10">
                            "Melayani pengantaran unit test drive ke rumah atau kantor Anda di seluruh wilayah Tangerang & sekitarnya."
                        </p>
                        <p class="text-gray-900 text-xs font-bold mt-4 uppercase tracking-tighter relative z-10">— Eusdama</p>
                    </div>
                </div>

                <!-- Showroom Location (SHOWN ONLY ON MOBILE, ABOVE MAPS) -->
                <div class="lg:hidden glass-card rounded-[2.5rem] p-10 bg-white/90">
                    <h2 class="font-geely text-2xl text-gray-900 uppercase tracking-tight mb-6 flex items-center gap-3">
                        <span class="w-8 h-[2px] bg-pink-500"></span>
                        Lokasi Showroom
                    </h2>
                    <p class="text-gray-600 text-sm leading-relaxed mb-8">
                        Kav. Commercial de Park, Jl. Boulevard Utara No.lot 2 no.17, Lengkong Wetan, Kec. Pagedangan, Kabupaten Tangerang, Banten 15331
                    </p>
                    <a href="https://maps.google.com/?q=Kav.+Commercial+de+Park,+Jl.+Boulevard+Utara+Lengkong+Wetan,+Pagedangan,+Tangerang" target="_blank" class="inline-flex items-center gap-2 px-8 py-4 bg-pink-500 hover:bg-pink-600 text-white font-bold rounded-2xl transition-all uppercase tracking-widest text-[11px] w-full justify-center shadow-md">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path></svg>
                        Petunjuk Arah
                    </a>
                </div>

                <!-- Google Maps Embed -->
                <div class="lg:col-span-7 glass-card rounded-[2.5rem] p-2 overflow-hidden h-[400px] lg:h-[550px] relative bg-white">
                    <iframe 
                        src="https://maps.google.com/maps?q=Kav.%20Commercial%20de%20Park,%20Jl.%20Boulevard%20Utara%20Lengkong%20Wetan,%20Pagedangan,%20Tangerang&t=&z=15&ie=UTF8&iwloc=&output=embed" 
                        class="w-full h-full rounded-[2.2rem]" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Executive Cockpit CRM | Promo Geely BSD Tangerang</title>
    
    <!-- Fonts & CDN -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        @font-face {
            font-family: 'Geely';
            src: url('https://assets.zyrosite.com/Yle46KEPN6IkVONg/GEELY Bold Regular.woff2') format('woff2');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        body {
            background-color: #070a12;
            color: #f1f5f9;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
        }

        .font-geely { font-family: 'Geely', sans-serif; }

        .glass-island {
            background: rgba(12, 18, 30, 0.88);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(51, 65, 85, 0.65);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7);
            transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .glass-island:hover {
            border-color: rgba(56, 189, 248, 0.5);
            box-shadow: 0 30px 60px -10px rgba(2, 132, 199, 0.25);
        }

        .text-gradient-cyan {
            background: linear-gradient(135deg, #38bdf8 0%, #22d3ee 50%, #60a5fa 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .btn-stealth {
            background: linear-gradient(135deg, #090d16 0%, #0f172a 100%);
            border: 1px solid rgba(51, 65, 85, 0.8);
            box-shadow: 0 10px 25px rgba(2, 6, 23, 0.35);
            transition: all 0.3s cubic-bezier(0.2, 0.8, 0.2, 1);
        }

        .btn-stealth:hover {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            border-color: #38bdf8;
            box-shadow: 0 15px 35px rgba(2, 132, 199, 0.4);
            transform: translateY(-1px);
        }

        ::-webkit-scrollbar { width: 6px; height: 6px; }
        ::-webkit-scrollbar-track { background: #070a12; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: #0284c7; }
    </style>
</head>
<body class="min-h-screen flex bg-[#070a12] text-slate-100 selection:bg-cyan-500 selection:text-white">

    <!-- Include Reusable Consistent Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content Wrapper with Dynamic Padding for Sidebar Collapse -->
    <div id="admin-content-wrapper" class="flex-1 flex flex-col min-w-0 transition-all duration-300 lg:pl-64">
        
        <!-- Top Utility Header -->
        <header class="sticky top-0 z-30 bg-[#090e18]/90 backdrop-blur-2xl border-b border-slate-800/80 px-4 lg:px-8 py-3.5 flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebarMobile()" class="lg:hidden p-2 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div>
                    <h1 class="font-extrabold tracking-tight text-white uppercase text-sm md:text-base leading-none font-geely">Cockpit Control</h1>
                    <span class="text-[10px] text-slate-400 tracking-wider">Executive Overview Dealership BSD City</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button onclick="openNewLeadModal()" class="btn-stealth px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-300 flex items-center gap-2 border border-sky-500/40 hover:text-white cursor-pointer">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                    <span class="hidden sm:inline">Input Prospek</span>
                </button>
                <a href="{{ route('admin.crm.leads.export') }}" class="p-2.5 rounded-full bg-slate-900 border border-slate-700 text-slate-300 hover:text-white hover:border-cyan-400 transition-all" title="Ekspor Data Prospek (.CSV)">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                </a>
            </div>
        </header>

        <main class="flex-1 max-w-[1720px] w-full mx-auto p-4 lg:p-8 space-y-8">
            
            @if(session('success'))
                <div class="p-4 rounded-2xl bg-emerald-950/70 border border-emerald-500/50 text-emerald-300 text-xs flex items-center justify-between shadow-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <p class="font-semibold">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white cursor-pointer">&times;</button>
                </div>
            @endif

            @if(session('info'))
                <div class="p-4 rounded-2xl bg-sky-950/70 border border-sky-500/50 text-cyan-300 text-xs flex items-center justify-between shadow-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <p class="font-semibold">{{ session('info') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-cyan-400 hover:text-white cursor-pointer">&times;</button>
                </div>
            @endif

            <!-- Executive Cockpit Header Banner -->
            <div class="glass-island rounded-3xl p-6 md:p-8 relative overflow-hidden">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-sky-600/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-950/80 border border-sky-500/30 text-cyan-300 text-[10px] font-bold tracking-widest uppercase mb-3">
                            <svg class="w-3.5 h-3.5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            <span>Dealership Command BSD</span>
                        </div>
                        <h2 class="text-2xl md:text-4xl font-extrabold uppercase tracking-tight text-white font-geely">
                            Executive <span class="text-gradient-cyan">Cockpit Control</span>
                        </h2>
                        <p class="text-slate-400 text-xs md:text-sm mt-1 max-w-xl">
                            Monitor prospek penjualan, armada test drive BSD, permohonan kredit leasing, serta conversion closing rate secara real-time.
                        </p>
                    </div>
                    
                    <div class="flex flex-wrap items-center gap-3">
                        <a href="{{ route('admin.crm.testdrives.index') }}" 
                           class="px-4 py-2.5 rounded-2xl bg-slate-900/90 border border-cyan-500/40 text-cyan-300 hover:bg-sky-950 hover:text-white text-xs font-bold uppercase tracking-wider flex items-center gap-2 transition-all">
                            <svg class="w-3.5 h-3.5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <span>Armada Test Drive</span>
                        </a>
                        <a href="{{ route('admin.crm.creditleads.index') }}" 
                           class="px-4 py-2.5 rounded-2xl bg-slate-900/90 border border-amber-500/40 text-amber-300 hover:bg-amber-950 hover:text-white text-xs font-bold uppercase tracking-wider flex items-center gap-2 transition-all">
                            <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08-.402 2.599-1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Simulasi Kredit</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- KPI Metrics Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-4 md:gap-6">
                
                <!-- KPI 1: Trafik Hari Ini -->
                <div class="glass-island p-5 rounded-3xl border-slate-800 hover:border-cyan-500/60 block group transition-all">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 group-hover:text-cyan-300 transition-colors">Trafik Hari Ini</span>
                        <span class="p-2 rounded-xl bg-cyan-950 text-cyan-400 border border-cyan-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                        </span>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="text-3xl font-extrabold text-white font-mono">{{ $todayVisitsCount }}</h3>
                        <span class="text-xs text-cyan-400 font-semibold">Hits Tayang</span>
                    </div>
                    <p class="text-[11px] text-slate-400 mt-2 flex items-center justify-between">
                        <span>Pengunjung Unik:</span>
                        <span class="font-bold text-emerald-400 font-mono">{{ $todayUniqueVisitors }} IP</span>
                    </p>
                </div>

                <!-- KPI 2: Total Prospek -->
                <a href="{{ route('admin.crm.pipeline') }}" class="glass-island p-5 rounded-3xl border-slate-800 hover:border-cyan-500/60 block group">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 group-hover:text-cyan-300 transition-colors">Total Prospek Riil</span>
                        <span class="p-2 rounded-xl bg-sky-950 text-cyan-400 border border-sky-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </span>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="text-3xl font-extrabold text-white font-mono">{{ $totalLeads }}</h3>
                        <span class="text-xs text-cyan-400 font-semibold">Prospek Masuk</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-2 flex items-center justify-between">
                        <span>Buka Kanban Sales</span>
                        <span class="text-cyan-400">&rarr;</span>
                    </p>
                </a>

                <!-- KPI 3: Test Drive Scheduled -->
                <a href="{{ route('admin.crm.testdrives.index') }}" class="glass-island p-5 rounded-3xl border-slate-800 hover:border-cyan-500/60 block group">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 group-hover:text-cyan-300 transition-colors">Armada & Test Drive</span>
                        <span class="p-2 rounded-xl bg-cyan-950 text-cyan-300 border border-cyan-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </span>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="text-3xl font-extrabold text-white font-mono">{{ $activeTestDrives }}</h3>
                        <span class="text-xs text-cyan-400 font-semibold">Reservasi Aktif</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-2 flex items-center justify-between">
                        <span>Kelola Armada Showroom</span>
                        <span class="text-cyan-400">&rarr;</span>
                    </p>
                </a>

                <!-- KPI 4: SPK Closing -->
                <a href="{{ route('admin.crm.pipeline') }}" class="glass-island p-5 rounded-3xl border-slate-800 hover:border-emerald-500/60 block group">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 group-hover:text-emerald-300 transition-colors">SPK Closing (Won)</span>
                        <span class="p-2 rounded-xl bg-emerald-950 text-emerald-400 border border-emerald-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="text-3xl font-extrabold text-white font-mono">{{ $spkDeals }}</h3>
                        <span class="text-xs text-emerald-400 font-semibold">Rasio {{ $conversionRate }}%</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-2 flex items-center justify-between">
                        <span>Target Dealer Tercapai</span>
                        <span class="text-emerald-400">&rarr;</span>
                    </p>
                </a>

                <!-- KPI 5: Simulasi Kredit -->
                <a href="{{ route('admin.crm.creditleads.index') }}" class="glass-island p-5 rounded-3xl border-slate-800 hover:border-amber-500/60 block group">
                    <div class="flex items-center justify-between mb-4">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-slate-400 group-hover:text-amber-300 transition-colors">Pengajuan Kredit</span>
                        <span class="p-2 rounded-xl bg-amber-950 text-amber-400 border border-amber-800">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08-.402 2.599-1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </span>
                    </div>
                    <div class="flex items-baseline gap-2">
                        <h3 class="text-3xl font-extrabold text-white font-mono">{{ $pendingCredit }}</h3>
                        <span class="text-xs text-amber-400 font-semibold">Perlu Diproses</span>
                    </div>
                    <p class="text-[11px] text-slate-500 mt-2 flex items-center justify-between">
                        <span>Total: {{ $totalCredit }} Berkas</span>
                        <span class="text-amber-400">&rarr;</span>
                    </p>
                </a>

            </div>

            <!-- Chart & Analytics Section -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Line Chart -->
                <div class="lg:col-span-8 glass-island p-6 md:p-8 rounded-3xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Grafik Kunjungan Website Harian</h3>
                            <p class="text-xs text-slate-400">Statistik tayangan halaman (Pageviews) dan Pengunjung Unik 14 hari terakhir</p>
                        </div>
                        <div class="flex items-center gap-4 text-xs font-semibold">
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-cyan-400 shadow-[0_0_8px_#22d3ee]"></span>
                                <span class="text-slate-300">Total Kunjungan</span>
                            </div>
                            <div class="flex items-center gap-1.5">
                                <span class="w-3 h-3 rounded-full bg-emerald-400 shadow-[0_0_8px_#34d399]"></span>
                                <span class="text-slate-300">Pengunjung Unik</span>
                            </div>
                        </div>
                    </div>

                    <div class="relative w-full h-[300px]">
                        <canvas id="dailyVisitsChart"></canvas>
                    </div>

                    <div class="mt-4 pt-4 border-t border-slate-800/80 flex flex-wrap items-center justify-between text-xs text-slate-400 gap-3">
                        <p>Total Akumulasi Trafik: <span class="font-bold text-white font-mono">{{ number_format($totalWebsiteVisits, 0, ',', '.') }}</span> kunjungan tercatat.</p>
                        <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-slate-900 text-cyan-300 border border-slate-800">Otomatis Update Tiap Kunjungan</span>
                    </div>
                </div>

                <!-- Top Pages & Device Breakdown -->
                <div class="lg:col-span-4 glass-island p-6 md:p-8 rounded-3xl flex flex-col justify-between">
                    <div>
                        <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely mb-1">Halaman Terpopuler</h3>
                        <p class="text-xs text-slate-400 mb-5">Halaman showroom paling banyak diakses calon konsumen</p>

                        <div class="space-y-3">
                            @forelse($topPages as $page)
                            <div class="p-3 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-between gap-3">
                                <div class="truncate">
                                    <p class="text-xs font-bold text-white truncate">{{ $page->page_title ?: $page->path }}</p>
                                    <p class="text-[10px] text-slate-500 font-mono truncate">{{ $page->path }}</p>
                                </div>
                                <span class="px-2.5 py-1 rounded-xl bg-sky-950/80 text-cyan-300 font-mono text-xs font-bold border border-sky-800/60 whitespace-nowrap">
                                    {{ $page->total_views }} view
                                </span>
                            </div>
                            @empty
                            <p class="text-slate-500 text-xs text-center py-6">Belum ada data rekaman halaman.</p>
                            @endforelse
                        </div>
                    </div>

                    <div class="mt-6 pt-5 border-t border-slate-800">
                        <div class="flex justify-between items-center text-xs font-semibold mb-2">
                            <span class="text-slate-300">Tipe Perangkat Pengunjung</span>
                            <span class="text-cyan-400 font-mono">{{ $devicePercentages['mobile'] }}% Mobile</span>
                        </div>
                        <div class="w-full h-2.5 bg-slate-800 rounded-full overflow-hidden flex">
                            <div class="h-full bg-cyan-400" style="width: {{ $devicePercentages['mobile'] }}%"></div>
                            <div class="h-full bg-sky-600" style="width: {{ $devicePercentages['desktop'] }}%"></div>
                            <div class="h-full bg-slate-600" style="width: {{ $devicePercentages['tablet'] }}%"></div>
                        </div>
                        <div class="flex justify-between text-[10px] text-slate-400 mt-2">
                            <span>Smartphone: {{ $devicePercentages['mobile'] }}%</span>
                            <span>Desktop: {{ $devicePercentages['desktop'] }}%</span>
                            <span>Tablet: {{ $devicePercentages['tablet'] }}%</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Model Demand Breakdown & Upcoming Test Drive -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Left: Model Breakdown -->
                <div class="lg:col-span-5 glass-island p-6 md:p-7 rounded-3xl flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-1">
                            <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Peminatan Unit Geely BSD</h3>
                            <span class="text-[10px] font-mono text-cyan-400 uppercase font-bold">{{ $totalLeads }} Total</span>
                        </div>
                        <p class="text-xs text-slate-400 mb-6">Minat unit berdasarkan kalkulasi database prospek konsumen</p>

                        <div class="space-y-5">
                            <div>
                                <div class="flex justify-between text-xs font-semibold mb-1.5">
                                    <span class="text-white">Geely EX5 (Smart SUV)</span>
                                    <span class="text-cyan-400 font-mono">{{ $modelCounts['ex5'] }} Unit ({{ $modelPercentages['ex5'] }}%)</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-sky-500 to-cyan-400 rounded-full transition-all duration-700" style="width: {{ $modelPercentages['ex5'] }}%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-xs font-semibold mb-1.5">
                                    <span class="text-white">Geely EX2 (Urban Crossover)</span>
                                    <span class="text-sky-300 font-mono">{{ $modelCounts['ex2'] }} Unit ({{ $modelPercentages['ex2'] }}%)</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-gradient-to-r from-cyan-600 to-sky-300 rounded-full transition-all duration-700" style="width: {{ $modelPercentages['ex2'] }}%"></div>
                                </div>
                            </div>

                            <div>
                                <div class="flex justify-between text-xs font-semibold mb-1.5">
                                    <span class="text-white">Starray EM-i (Super Hybrid)</span>
                                    <span class="text-slate-300 font-mono">{{ $modelCounts['starray'] }} Unit ({{ $modelPercentages['starray'] }}%)</span>
                                </div>
                                <div class="w-full h-2.5 bg-slate-800 rounded-full overflow-hidden">
                                    <div class="h-full bg-slate-500 rounded-full transition-all duration-700" style="width: {{ $modelPercentages['starray'] }}%"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8 pt-5 border-t border-slate-800 flex items-center justify-between">
                        <div>
                            <p class="font-bold text-white text-xs">Akses Modul Showroom</p>
                            <p class="text-[10px] text-slate-400">Pilih modul kerja spesifik</p>
                        </div>
                        <div class="flex gap-2">
                            <a href="{{ route('admin.crm.testdrives.index') }}" class="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700 hover:border-cyan-400 text-[11px] font-bold text-cyan-300 transition-all">Armada &rarr;</a>
                            <a href="{{ route('admin.crm.creditleads.index') }}" class="px-3 py-1.5 rounded-xl bg-slate-900 border border-slate-700 hover:border-amber-400 text-[11px] font-bold text-amber-300 transition-all">Kredit &rarr;</a>
                        </div>
                    </div>
                </div>

                <!-- Right: Upcoming Test Drive Desk -->
                <div class="lg:col-span-7 glass-island p-6 md:p-7 rounded-3xl">
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Jadwal Armada Test Drive Terkini</h3>
                            <p class="text-xs text-slate-400">Pembaruan jadwal reservasi uji jalan konsumen showroom BSD</p>
                        </div>
                        <a href="{{ route('admin.crm.testdrives.index') }}" class="px-3 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-300 bg-sky-950 border border-sky-800 hover:bg-sky-900 transition-all">
                            Kelola Semua &rarr;
                        </a>
                    </div>

                    <div class="space-y-3 overflow-y-auto max-h-[310px] pr-1">
                        @forelse($upcomingTestDrives as $td)
                        <div class="p-3.5 rounded-2xl bg-slate-900/80 border border-slate-800 flex items-center justify-between gap-4 hover:border-slate-700 transition-colors">
                            <div>
                                <div class="flex items-center gap-2">
                                    <span class="font-bold text-white text-xs">{{ $td->lead->name ?? 'Pelanggan Showroom' }}</span>
                                    <span class="px-2 py-0.5 rounded text-[9px] font-bold bg-sky-950 text-cyan-300 border border-sky-800">{{ $td->car_model }}</span>
                                    <span class="px-2 py-0.5 rounded text-[9px] font-mono {{ $td->status === 'Confirmed' ? 'text-emerald-400 bg-emerald-950/60 border border-emerald-800' : 'text-amber-400 bg-amber-950/60 border border-amber-800' }}">
                                        {{ $td->status }}
                                    </span>
                                </div>
                                <p class="text-[11px] text-slate-400 mt-0.5">
                                    {{ $td->scheduled_at ? $td->scheduled_at->format('d M Y - H:i') . ' WIB' : '-' }} &bull; {{ $td->venue }} &bull; Pelat: {{ $td->test_plate ?? '-' }}
                                </p>
                            </div>
                            @if($td->lead)
                            <a href="https://wa.me/{{ $td->lead->whatsapp_number }}?text={{ rawurlencode('Halo ' . $td->lead->name . ', saya Chanda Satya dari Showroom Resmi Geely BSD. Kami mengonfirmasi jadwal test drive mobil ' . $td->car_model . ' Anda pada ' . ($td->scheduled_at ? $td->scheduled_at->format('d M Y - H:i') : '') . ' WIB. Apakah ada perubahan waktu?') }}" 
                               target="_blank"
                               class="px-3 py-1.5 rounded-xl bg-emerald-600/20 text-emerald-400 hover:bg-emerald-600 hover:text-slate-950 font-bold text-[11px] transition-all flex items-center gap-1.5 border border-emerald-500/30 whitespace-nowrap">
                                <span>Konfirmasi</span>
                            </a>
                            @endif
                        </div>
                        @empty
                        <div class="text-center py-10 text-slate-500 text-xs">
                            Belum ada reservasi test drive tercatat di database.
                        </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Tabel Prospek Masuk Terbaru -->
            <div class="glass-island rounded-3xl p-6 md:p-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-lg font-bold uppercase tracking-tight text-white font-geely">Prospek Masuk Terbaru</h3>
                        <p class="text-xs text-slate-400">Klik tombol WhatsApp untuk langsung terhubung dengan pesan personalisasi</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <a href="{{ route('admin.crm.pipeline') }}" class="text-xs font-bold text-cyan-400 hover:text-cyan-300 uppercase tracking-wider flex items-center gap-1">
                            Buka Sales Pipeline &rarr;
                        </a>
                    </div>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-slate-800 text-slate-400 text-[10px] uppercase tracking-wider">
                                <th class="py-3 px-4">Nama Pelanggan</th>
                                <th class="py-3 px-4">Kontak (WhatsApp)</th>
                                <th class="py-3 px-4">Model Unit</th>
                                <th class="py-3 px-4">Domisili</th>
                                <th class="py-3 px-4">Tahapan Pipeline</th>
                                <th class="py-3 px-4 text-right">Aksi Cepat</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            @forelse($recentLeads as $lead)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-white flex items-center gap-2.5">
                                    <div class="w-7 h-7 rounded-xl bg-slate-800 text-[11px] text-cyan-400 flex items-center justify-center font-mono border border-slate-700">
                                        {{ strtoupper(substr($lead->name, 0, 1)) }}
                                    </div>
                                    <div>
                                        <p class="font-bold text-white">{{ $lead->name }}</p>
                                        <p class="text-[10px] text-slate-500 font-normal">{{ $lead->created_at ? $lead->created_at->diffForHumans() : '-' }}</p>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4 font-mono text-slate-300">{{ $lead->phone }}</td>
                                <td class="py-3.5 px-4 font-semibold text-cyan-300">{{ $lead->model_interest }}</td>
                                <td class="py-3.5 px-4 text-slate-400">{{ $lead->city }}</td>
                                <td class="py-3.5 px-4">
                                    @php
                                        $badge = match($lead->stage) {
                                            'won' => 'bg-emerald-950 text-emerald-300 border-emerald-800',
                                            'negotiation' => 'bg-amber-950 text-amber-300 border-amber-800',
                                            'testdrive' => 'bg-cyan-950 text-cyan-300 border-cyan-800',
                                            default => 'bg-sky-950 text-cyan-300 border-sky-800'
                                        };
                                    @endphp
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider border {{ $badge }}">
                                        {{ strtoupper($lead->stage) }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    <a href="{{ $lead->whatsapp_url }}" target="_blank"
                                       class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-[#25D366]/20 hover:bg-[#25D366] text-[#25D366] hover:text-slate-950 font-bold tracking-wider transition-all border border-[#25D366]/40">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                        <span>Chat WA</span>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-10 text-center text-slate-500">
                                    Belum ada prospek tercatat di database. Gunakan tombol "Input Prospek" di atas.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
    </div>

    <!-- Modal Input Prospek Baru -->
    <div id="new-lead-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/80 backdrop-blur-md">
        <div class="relative w-full max-w-lg glass-island p-6 md:p-8 rounded-[2.5rem] border border-slate-700 shadow-2xl">
            <div class="flex items-center justify-between mb-6">
                <div>
                    <h3 class="text-xl font-bold uppercase tracking-tight text-white font-geely">Input Prospek Baru Geely BSD</h3>
                    <p class="text-xs text-slate-400">Pameran GIIAS, walk-in showroom BSD, atau inquiries digital</p>
                </div>
                <button onclick="closeNewLeadModal()" class="p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <form method="POST" action="{{ route('admin.crm.leads.store') }}" class="space-y-4 text-xs">
                @csrf
                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Nama Lengkap Konsumen</label>
                    <input type="text" name="name" required placeholder="Contoh: Bpk. Michael Gunawan" 
                           class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Nomor WhatsApp</label>
                        <input type="tel" name="phone" required placeholder="Contoh: 081234567890" 
                               class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                    </div>
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Domisili / Wilayah</label>
                        <input type="text" name="city" placeholder="BSD City, NavaPark, Gading Serpong" 
                               class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Unit Diminati</label>
                        <select name="model_interest" class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-400">
                            <option value="Geely EX5">Geely EX5 (Smart SUV)</option>
                            <option value="Geely EX2">Geely EX2 (Urban Crossover)</option>
                            <option value="Starray EM-i">Starray EM-i (Super Hybrid)</option>
                        </select>
                    </div>
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Tahapan Awal</label>
                        <select name="stage" class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-400">
                            <option value="new">1. Prospek Masuk</option>
                            <option value="testdrive">2. Jadwal Test Drive</option>
                            <option value="negotiation">3. Simulasi Kredit / Nego</option>
                            <option value="won">4. SPK Deal (Won)</option>
                        </select>
                    </div>
                </div>

                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Skema Pembelian</label>
                    <input type="text" name="budget_plan" placeholder="Contoh: Cash Keras, Kredit DP 20% BCA Finance 3 Tahun" 
                           class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                </div>

                <div>
                    <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Catatan Kebutuhan</label>
                    <textarea name="notes" rows="2" placeholder="Catatan tukar tambah mobil lama, request warna Glacier White, dll..." 
                              class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400"></textarea>
                </div>

                <div class="flex items-center justify-end gap-3 pt-4 border-t border-slate-800">
                    <button type="button" onclick="closeNewLeadModal()" class="px-5 py-3 rounded-xl bg-slate-800 text-slate-300 hover:text-white font-bold uppercase tracking-wider cursor-pointer">
                        Batal
                    </button>
                    <button type="submit" class="btn-stealth px-6 py-3 rounded-xl text-cyan-300 hover:text-white font-bold uppercase tracking-wider flex items-center gap-2 cursor-pointer">
                        <span>Simpan Prospek</span>
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openNewLeadModal() {
            const modal = document.getElementById('new-lead-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeNewLeadModal() {
            const modal = document.getElementById('new-lead-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        document.addEventListener('DOMContentLoaded', function () {
            const ctx = document.getElementById('dailyVisitsChart').getContext('2d');

            const cyanGradient = ctx.createLinearGradient(0, 0, 0, 300);
            cyanGradient.addColorStop(0, 'rgba(34, 211, 238, 0.35)');
            cyanGradient.addColorStop(1, 'rgba(34, 211, 238, 0.0)');

            const emeraldGradient = ctx.createLinearGradient(0, 0, 0, 300);
            emeraldGradient.addColorStop(0, 'rgba(52, 211, 153, 0.25)');
            emeraldGradient.addColorStop(1, 'rgba(52, 211, 153, 0.0)');

            const chartData = {
                labels: {!! json_encode($chartDates) !!},
                datasets: [
                    {
                        label: 'Total Kunjungan (Hits)',
                        data: {!! json_encode($chartViews) !!},
                        borderColor: '#22d3ee',
                        backgroundColor: cyanGradient,
                        borderWidth: 2.5,
                        tension: 0.35,
                        fill: true,
                        pointBackgroundColor: '#22d3ee',
                        pointBorderColor: '#070a12',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        pointHoverRadius: 6,
                    },
                    {
                        label: 'Pengunjung Unik (IP)',
                        data: {!! json_encode($chartUnique) !!},
                        borderColor: '#34d399',
                        backgroundColor: emeraldGradient,
                        borderWidth: 2,
                        borderDash: [5, 4],
                        tension: 0.35,
                        fill: true,
                        pointBackgroundColor: '#34d399',
                        pointBorderColor: '#070a12',
                        pointBorderWidth: 2,
                        pointRadius: 3,
                        pointHoverRadius: 5,
                    }
                ]
            };

            new Chart(ctx, {
                type: 'line',
                data: chartData,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    interaction: { mode: 'index', intersect: false },
                    plugins: {
                        legend: { display: false },
                        tooltip: {
                            backgroundColor: 'rgba(12, 18, 30, 0.95)',
                            titleColor: '#ffffff',
                            bodyColor: '#cbd5e1',
                            borderColor: '#38bdf8',
                            borderWidth: 1,
                            padding: 12,
                            boxPadding: 6,
                            usePointStyle: true,
                        }
                    },
                    scales: {
                        x: {
                            grid: { color: 'rgba(51, 65, 85, 0.25)', drawBorder: false },
                            ticks: { color: '#94a3b8', font: { family: "'Inter', sans-serif", size: 10 } }
                        },
                        y: {
                            beginAtZero: true,
                            grid: { color: 'rgba(51, 65, 85, 0.3)', drawBorder: false },
                            ticks: { color: '#94a3b8', font: { family: "'Inter', sans-serif", size: 10 }, stepSize: 10 }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>
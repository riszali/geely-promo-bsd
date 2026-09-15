<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sales Pipeline Kanban | Promo Geely BSD Tangerang</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

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
        }

        .glass-island:hover {
            border-color: rgba(56, 189, 248, 0.5);
            box-shadow: 0 30px 60px -10px rgba(2, 132, 199, 0.25);
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

        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: #080d16; }
        ::-webkit-scrollbar-thumb { background: #1e293b; border-radius: 9999px; }
        ::-webkit-scrollbar-thumb:hover { background: #0284c7; }
    </style>
</head>
<body class="min-h-screen flex bg-[#070a12] text-slate-100 selection:bg-cyan-500 selection:text-white">

    <!-- Include Reusable Consistent Sidebar -->
    @include('admin.partials.sidebar')

    <!-- Main Content Wrapper with Dynamic Padding for Sidebar Collapse -->
    <div id="admin-content-wrapper" class="flex-1 flex flex-col min-w-0 transition-all duration-300 lg:pl-64">
        
        <!-- Header Navigation -->
        <header class="sticky top-0 z-30 bg-[#090e18]/95 backdrop-blur-2xl border-b border-slate-800/80 px-4 lg:px-8 py-3.5 flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebarMobile()" class="lg:hidden p-2 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div>
                    <h1 class="font-extrabold tracking-tight text-white uppercase text-sm md:text-base leading-none font-geely">Sales Pipeline Kanban</h1>
                    <span class="text-[10px] text-slate-400 tracking-wider">Kelola 4 Tahapan Konversi Prospek Geely BSD</span>
                </div>
            </div>

            <!-- Model Filter -->
            <div class="flex items-center gap-3">
                <form method="GET" action="{{ route('admin.crm.pipeline') }}" class="flex items-center gap-2">
                    <select name="model" onchange="this.form.submit()" class="bg-slate-900 border border-slate-700 text-xs rounded-xl px-3 py-2 text-white focus:outline-none focus:border-cyan-400 cursor-pointer">
                        <option value="ALL" {{ $selectedModel === 'ALL' ? 'selected' : '' }}>Semua Model Geely</option>
                        <option value="Geely EX5" {{ $selectedModel === 'Geely EX5' ? 'selected' : '' }}>Geely EX5 (Smart SUV)</option>
                        <option value="Geely EX2" {{ $selectedModel === 'Geely EX2' ? 'selected' : '' }}>Geely EX2 (Urban Crossover)</option>
                        <option value="Starray EM-i" {{ $selectedModel === 'Starray EM-i' ? 'selected' : '' }}>Starray EM-i (Super Hybrid)</option>
                    </select>
                </form>
            </div>
        </header>

        <!-- Kanban Board 4 Tahapan -->
        <main class="flex-1 max-w-[1720px] w-full mx-auto p-4 lg:p-8">
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
                
                <!-- COLUMN 1: NEW LEADS -->
                <div class="glass-island rounded-3xl p-4 flex flex-col h-[780px]">
                    <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-sky-400"></span>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-white">1. Prospek Masuk</h4>
                        </div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-sky-950 text-cyan-300 font-bold">
                            {{ $kanban['new']->count() }}
                        </span>
                    </div>

                    <div class="space-y-3 overflow-y-auto flex-1 pr-1">
                        @forelse($kanban['new'] as $lead)
                            @include('admin.partials.lead-card', ['lead' => $lead, 'prevStage' => null, 'nextStage' => 'testdrive'])
                        @empty
                            <div class="text-center py-12 text-slate-500 text-xs">Belum ada prospek di tahap ini.</div>
                        @endforelse
                    </div>
                </div>

                <!-- COLUMN 2: TEST DRIVE BOOKED -->
                <div class="glass-island rounded-3xl p-4 flex flex-col h-[780px]">
                    <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-white">2. Booking Test Drive</h4>
                        </div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-cyan-950 text-cyan-300 font-bold">
                            {{ $kanban['testdrive']->count() }}
                        </span>
                    </div>

                    <div class="space-y-3 overflow-y-auto flex-1 pr-1">
                        @forelse($kanban['testdrive'] as $lead)
                            @include('admin.partials.lead-card', ['lead' => $lead, 'prevStage' => 'new', 'nextStage' => 'negotiation'])
                        @empty
                            <div class="text-center py-12 text-slate-500 text-xs">Belum ada booking test drive.</div>
                        @endforelse
                    </div>
                </div>

                <!-- COLUMN 3: CREDIT SIMULATION / NEGOTIATION -->
                <div class="glass-island rounded-3xl p-4 flex flex-col h-[780px]">
                    <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-amber-400"></span>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-white">3. Hitung Kredit / Nego</h4>
                        </div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-amber-950 text-amber-300 font-bold">
                            {{ $kanban['negotiation']->count() }}
                        </span>
                    </div>

                    <div class="space-y-3 overflow-y-auto flex-1 pr-1">
                        @forelse($kanban['negotiation'] as $lead)
                            @include('admin.partials.lead-card', ['lead' => $lead, 'prevStage' => 'testdrive', 'nextStage' => 'won'])
                        @empty
                            <div class="text-center py-12 text-slate-500 text-xs">Tidak ada proses negosiasi aktif.</div>
                        @endforelse
                    </div>
                </div>

                <!-- COLUMN 4: SPK CLOSED WON -->
                <div class="glass-island rounded-3xl p-4 flex flex-col h-[780px]">
                    <div class="flex items-center justify-between pb-3 mb-3 border-b border-slate-800">
                        <div class="flex items-center gap-2">
                            <span class="w-2.5 h-2.5 rounded-full bg-emerald-400"></span>
                            <h4 class="text-xs font-bold uppercase tracking-wider text-white">4. SPK & Booking Deal</h4>
                        </div>
                        <span class="text-[10px] font-mono px-2 py-0.5 rounded-full bg-emerald-950 text-emerald-300 font-bold">
                            {{ $kanban['won']->count() }}
                        </span>
                    </div>

                    <div class="space-y-3 overflow-y-auto flex-1 pr-1">
                        @forelse($kanban['won'] as $lead)
                            @include('admin.partials.lead-card', ['lead' => $lead, 'prevStage' => 'negotiation', 'nextStage' => null])
                        @empty
                            <div class="text-center py-12 text-slate-500 text-xs">Belum ada deal SPK selesai.</div>
                        @endforelse
                    </div>
                </div>

            </div>
        </main>
    </div>

</body>
</html>
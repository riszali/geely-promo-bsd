<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Prospek Simulasi Kredit | Promo Geely BSD CRM</title>
    
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
        
        <!-- Header Navigation Bar -->
        <header class="sticky top-0 z-30 bg-[#090e18]/95 backdrop-blur-2xl border-b border-slate-800/80 px-4 lg:px-8 py-3.5 flex items-center justify-between gap-4">
            <div class="flex items-center gap-3">
                <button onclick="toggleSidebarMobile()" class="lg:hidden p-2 rounded-xl bg-slate-900 border border-slate-700 text-slate-300 hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="font-extrabold tracking-tight text-white uppercase text-sm md:text-base leading-none font-geely">Simulasi Kredit & Leasing</span>
                        <span class="px-2 py-0.5 rounded-full text-[9px] font-bold tracking-widest uppercase bg-amber-950 text-amber-300 border border-amber-600/40">Finance Desk</span>
                    </div>
                    <span class="text-[10px] text-slate-400 tracking-wider">Kalkulasi Permohonan Kredit & Approval Leasing BSD</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('admin.crm.pipeline') }}" class="btn-stealth px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-300 hover:text-white flex items-center gap-1.5">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path></svg>
                    <span>Sales Pipeline</span>
                </a>
            </div>
        </header>

        <main class="flex-1 max-w-[1720px] w-full mx-auto p-4 lg:p-8 space-y-6">

            @if(session('success'))
                <div class="p-4 rounded-2xl bg-emerald-950/70 border border-emerald-500/50 text-emerald-300 text-xs flex items-center justify-between shadow-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <p class="font-semibold">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white cursor-pointer">&times;</button>
                </div>
            @endif

            <!-- Card Header Info -->
            <div class="glass-island rounded-3xl p-6 md:p-8 relative overflow-hidden">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-amber-600/15 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-950/80 border border-amber-500/30 text-amber-300 text-[10px] font-bold tracking-widest uppercase mb-3">
                            <svg class="w-3.5 h-3.5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08-.402 2.599-1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            <span>Partner Pembiayaan Resmi Dealer BSD</span>
                        </div>
                        <h1 class="text-2xl md:text-3xl font-extrabold uppercase tracking-tight text-white font-geely">
                            Pengajuan & Simulasi <span class="text-gradient-cyan">Kredit Prospek</span>
                        </h1>
                        <p class="text-slate-400 text-xs md:text-sm mt-1 max-w-xl">
                            Data kalkulasi uang muka (DP), pilihan tenor, dan estimasi cicilan bulanan yang diajukan oleh pengunjung kalkulator kredit Promo Geely BSD.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-2 text-xs">
                        <span class="px-3 py-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300">
                            <span class="font-bold text-white">Maybank Finance</span> &bull; Rekanan Utama
                        </span>
                        <span class="px-3 py-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300">
                            <span class="font-bold text-white">BCA Finance</span> &bull; Bunga Ringan
                        </span>
                        <span class="px-3 py-2 rounded-xl bg-slate-900 border border-slate-800 text-slate-300">
                            <span class="font-bold text-white">Mandiri Tunas Finance</span>
                        </span>
                    </div>
                </div>
            </div>

            <!-- Tabel Pengajuan Kredit -->
            <div class="glass-island rounded-3xl p-6 md:p-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Daftar Pengajuan Kredit Masuk</h3>
                        <p class="text-xs text-slate-400">Pembaruan status survey berkas leasing nasabah</p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-mono font-bold bg-amber-950 text-amber-300 border border-amber-800">
                        Total: {{ $simulations->total() }} Pengajuan
                    </span>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-slate-800 text-slate-400 text-[10px] uppercase tracking-wider">
                                <th class="py-3 px-4">Nama Pemohon</th>
                                <th class="py-3 px-4">Model Unit</th>
                                <th class="py-3 px-4">Uang Muka (DP)</th>
                                <th class="py-3 px-4">Tenor</th>
                                <th class="py-3 px-4">Estimasi Angsuran</th>
                                <th class="py-3 px-4">Leasing Pilihan</th>
                                <th class="py-3 px-4">Status Leasing</th>
                                <th class="py-3 px-4 text-right">Hubungi & Nego</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            @forelse($simulations as $sim)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-white">
                                    <p class="text-white font-bold">{{ $sim->customer_name }}</p>
                                    <p class="text-[10px] text-slate-500 font-mono">{{ $sim->phone }}</p>
                                </td>
                                <td class="py-3.5 px-4 font-semibold text-cyan-300">
                                    {{ $sim->car_model }}
                                </td>
                                <td class="py-3.5 px-4 font-mono text-slate-300">
                                    Rp {{ number_format($sim->down_payment, 0, ',', '.') }}
                                </td>
                                <td class="py-3.5 px-4 text-slate-300">
                                    {{ $sim->tenor_months }} Bulan ({{ round($sim->tenor_months / 12) }} Thn)
                                </td>
                                <td class="py-3.5 px-4 font-mono font-bold text-emerald-400">
                                    Rp {{ number_format($sim->monthly_installment, 0, ',', '.') }} /bln
                                </td>
                                <td class="py-3.5 px-4 text-slate-400">
                                    {{ $sim->preferred_leasing }}
                                </td>
                                <td class="py-3.5 px-4">
                                    <form method="POST" action="{{ route('admin.crm.creditleads.updateStatus', $sim) }}" class="inline-block">
                                        @csrf
                                        @method('PATCH')
                                        <select name="status" onchange="this.form.submit()" 
                                                class="px-2.5 py-1 rounded-xl text-[10px] font-bold uppercase tracking-wider border bg-slate-900 focus:outline-none cursor-pointer
                                                {{ $sim->status === 'Disetujui' ? 'text-emerald-300 border-emerald-800' : '' }}
                                                {{ $sim->status === 'Proses Survey' ? 'text-amber-300 border-amber-800' : '' }}
                                                {{ $sim->status === 'Baru' ? 'text-cyan-300 border-sky-800' : '' }}
                                                {{ $sim->status === 'Ditolak' ? 'text-rose-400 border-rose-800' : '' }}">
                                            <option value="Baru" {{ $sim->status === 'Baru' ? 'selected' : '' }}>Baru</option>
                                            <option value="Proses Survey" {{ $sim->status === 'Proses Survey' ? 'selected' : '' }}>Proses Survey</option>
                                            <option value="Disetujui" {{ $sim->status === 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                                            <option value="Ditolak" {{ $sim->status === 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                                        </select>
                                    </form>
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    @php
                                        $cleanPhone = preg_replace('/[^0-9]/', '', (string)$sim->phone);
                                        if (str_starts_with($cleanPhone, '0')) {
                                            $cleanPhone = '62' . substr($cleanPhone, 1);
                                        }
                                        $waMsg = "Halo Bpk/Ibu " . $sim->customer_name . ", salam dari Chanda Satya - Promo Geely BSD Tangerang. Terkait permohonan simulasi pembiayaan mobil " . $sim->car_model . " dengan estimasi angsuran Rp " . number_format($sim->monthly_installment, 0, ',', '.') . "/bln via " . $sim->preferred_leasing . ", berkas Anda saat ini berstatus: " . $sim->status . ". Apakah ada promo bunga spesial yang ingin dikonsultasikan?";
                                    @endphp
                                    <a href="https://wa.me/{{ $cleanPhone }}?text={{ rawurlencode($waMsg) }}" target="_blank"
                                       class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-xl bg-[#25D366]/20 hover:bg-[#25D366] text-[#25D366] hover:text-slate-950 font-bold tracking-wider transition-all border border-[#25D366]/40 text-[11px]">
                                        <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51a12.8 12.8 0 00-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                                        <span>Nego WA</span>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="8" class="py-10 text-center text-slate-500">
                                    Belum ada pengajuan simulasi kredit masuk.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-6">
                    {{ $simulations->links() }}
                </div>
            </div>

        </main>
    </div>

</body>
</html>
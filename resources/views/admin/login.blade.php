<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login CRM Dealer | Promo Geely BSD Tangerang</title>
    
    <!-- Fonts matching Homepage -->
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

        .font-geely {
            font-family: 'Geely', sans-serif;
        }

        .glass-island {
            background: rgba(12, 18, 30, 0.88);
            backdrop-filter: blur(28px);
            -webkit-backdrop-filter: blur(28px);
            border: 1px solid rgba(51, 65, 85, 0.7);
            box-shadow: 0 25px 60px -12px rgba(0, 0, 0, 0.85);
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
            transform: translateY(-2px);
        }

        .btn-shimmer {
            position: relative;
            overflow: hidden;
        }
        .btn-shimmer::after {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(to right, transparent, rgba(56, 189, 248, 0.2), transparent);
            transform: rotate(45deg) translateX(-100%);
            animation: shimmer 4s infinite cubic-bezier(0.19, 1, 0.22, 1);
        }
        @keyframes shimmer { 100% { transform: rotate(45deg) translateX(100%); } }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 relative selection:bg-cyan-500 selection:text-white">

    <div class="fixed inset-0 pointer-events-none">
        <div class="absolute -top-40 -left-40 w-[500px] h-[500px] bg-sky-600/15 rounded-full blur-[120px]"></div>
        <div class="absolute -bottom-40 -right-40 w-[500px] h-[500px] bg-cyan-600/15 rounded-full blur-[120px]"></div>
        <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-sky-950/25 via-[#070a12]/85 to-[#070a12]"></div>
    </div>

    <div class="relative w-full max-w-md p-8 md:p-10 glass-island rounded-[2.5rem] z-10 border border-slate-700/80">
        
        <div class="flex flex-col items-center text-center mb-8">
            <div class="mb-5 flex items-center justify-center">
                <img src="{{ asset('images/footer-logos-geely.png') }}" 
                     alt="Geely Auto" 
                     class="h-8 sm:h-9 w-auto object-contain brightness-110 drop-shadow-[0_4px_12px_rgba(2,132,199,0.3)]">
            </div>
            <h1 class="text-2xl sm:text-3xl font-extrabold uppercase tracking-tight text-white font-geely">
                Dealership <span class="text-gradient-cyan">CRM</span>
            </h1>
            <p class="text-xs text-slate-400 mt-2">Sistem Kontrol Prospek & Layanan Konsumen Showroom BSD City</p>
        </div>

        @if(session('info'))
            <div class="mb-5 p-3.5 rounded-2xl bg-sky-950/70 border border-sky-500/40 text-xs text-cyan-300 flex items-center gap-2">
                <svg class="w-4 h-4 text-cyan-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                <span>{{ session('info') }}</span>
            </div>
        @endif

        @if($errors->any())
            <div class="mb-5 p-3.5 rounded-2xl bg-rose-950/70 border border-rose-500/40 text-xs text-rose-300 space-y-1">
                @foreach($errors->all() as $error)
                    <p class="flex items-center gap-2">
                        <svg class="w-3.5 h-3.5 text-rose-400 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <span>{{ $error }}</span>
                    </p>
                @endforeach
            </div>
        @endif

        <form method="POST" action="{{ route('admin.crm.authenticate') }}" class="space-y-5">
            @csrf
            <div>
                <label class="block text-[11px] font-bold tracking-wider uppercase text-slate-300 mb-2">Email Akun Dealer</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.206"></path></svg>
                    </span>
                    <input type="email" id="dealer-email" name="email" value="{{ old('email') }}" required autofocus
                           placeholder="nama@geelybsd.id"
                           class="w-full pl-11 pr-4 py-3.5 bg-slate-900/90 border border-slate-700 rounded-2xl text-sm text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between mb-2">
                    <label class="block text-[11px] font-bold tracking-wider uppercase text-slate-300">Kata Sandi</label>
                    <a href="https://wa.me/6281295443338?text=Halo%20Admin%20IT%20Geely%20BSD,%20mohon%20bantuan%20reset%20kata%20sandi." target="_blank" class="text-[10px] text-cyan-400 hover:underline">Bantuan login?</a>
                </div>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-4 text-slate-500">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </span>
                    <input type="password" id="dealer-pass" name="password" required
                           placeholder="Masukkan kata sandi Anda"
                           class="w-full pl-11 pr-4 py-3.5 bg-slate-900/90 border border-slate-700 rounded-2xl text-sm text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 focus:ring-1 focus:ring-cyan-400 transition-all">
                </div>
            </div>

            <div class="flex items-center justify-between text-xs pt-1">
                <label class="flex items-center gap-2 cursor-pointer text-slate-400 hover:text-white">
                    <input type="checkbox" name="remember" checked class="w-4 h-4 rounded bg-slate-900 border-slate-700 text-cyan-500 focus:ring-0">
                    <span>Ingat sesi browser ini</span>
                </label>
            </div>

            <button type="submit" class="w-full btn-stealth btn-shimmer py-4 rounded-2xl text-white font-bold text-xs uppercase tracking-[0.2em] flex items-center justify-center gap-2 group mt-6 cursor-pointer">
                <span>Otorisasi & Masuk Dashboard</span>
                <svg class="w-4 h-4 text-cyan-400 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
            </button>
        </form>

        <div class="mt-8 pt-6 border-t border-slate-800 text-center">
            <p class="text-[11px] text-slate-500">Promo Geely BSD City Tangerang &bull; Production CRM Engine</p>
        </div>
    </div>
</body>
</html>
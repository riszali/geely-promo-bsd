@php
    $currentRoute = Route::currentRouteName();
    $activeTestDrivesCount = $activeTestDrives ?? \App\Models\TestDrive::whereIn('status', ['Pending', 'Confirmed'])->count();
    $pendingCreditCount = $pendingCredit ?? \App\Models\CreditSimulation::whereIn('status', ['Baru', 'Proses Survey'])->count();
@endphp

<!-- Mobile Sidebar Backdrop Overlay -->
<div id="sidebar-backdrop" onclick="toggleSidebarMobile()" class="fixed inset-0 bg-black/80 backdrop-blur-sm z-40 hidden lg:hidden transition-opacity duration-300"></div>

<!-- Collapsible Sidebar Container -->
<aside id="main-sidebar" class="fixed top-0 bottom-0 left-0 z-50 flex flex-col justify-between bg-[#080d16] border-r border-slate-800/90 text-slate-200 transition-all duration-300 ease-in-out -translate-x-full lg:translate-x-0 w-64 select-none">
    
    <!-- Top Brand & Collapse Trigger -->
    <div>
        <div class="h-16 px-4 flex items-center justify-between border-b border-slate-800/80">
            <!-- Brand Logo & Title -->
            <a href="{{ route('admin.crm.dashboard') }}" class="flex items-center gap-3 overflow-hidden group">
                <div class="w-9 h-9 flex-shrink-0 rounded-xl bg-gradient-to-tr from-sky-600 to-cyan-400 flex items-center justify-center font-extrabold text-slate-950 text-sm shadow-[0_0_15px_rgba(56,189,248,0.35)] font-geely group-hover:scale-105 transition-transform">
                    G
                </div>
                <div class="sidebar-text flex flex-col transition-opacity duration-200 whitespace-nowrap">
                    <span class="font-bold tracking-tight text-white text-sm leading-none">Promo Geely BSD</span>
                    <span class="text-[10px] text-cyan-400 font-semibold mt-0.5">Admin CRM</span>
                </div>
            </a>

            <!-- Toggle Hide/Unhide Button (Desktop) -->
            <button onclick="toggleSidebarDesktop()" id="btn-toggle-sidebar" title="Sembunyikan / Buka Sidebar" class="hidden lg:flex p-1.5 rounded-lg text-slate-400 hover:text-cyan-300 hover:bg-slate-900 border border-transparent hover:border-slate-700 transition-all cursor-pointer">
                <svg id="icon-collapse-left" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                </svg>
            </button>

            <!-- Close Button (Mobile Only) -->
            <button onclick="toggleSidebarMobile()" class="lg:hidden p-1.5 rounded-lg text-slate-400 hover:text-white hover:bg-slate-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </div>

        <!-- Navigation Menu List -->
        <nav class="p-3 space-y-1.5 overflow-y-auto max-h-[calc(100vh-170px)]">
            
            <div class="px-3 py-2 text-[9px] font-extrabold uppercase tracking-[0.25em] text-slate-500 sidebar-text whitespace-nowrap">
                Navigasi Utama
            </div>

            <!-- 1. Cockpit Dashboard -->
            <a href="{{ route('admin.crm.dashboard') }}" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ $currentRoute === 'admin.crm.dashboard' ? 'bg-sky-950/80 text-cyan-300 border border-sky-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Dashboard">
                <svg class="w-4 h-4 flex-shrink-0 {{ $currentRoute === 'admin.crm.dashboard' ? 'text-cyan-400' : 'text-slate-400 group-hover:text-cyan-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Dashboard</span>
            </a>

            <!-- 2. Sales Pipeline Kanban -->
            <a href="{{ route('admin.crm.pipeline') }}" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ $currentRoute === 'admin.crm.pipeline' ? 'bg-sky-950/80 text-cyan-300 border border-sky-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Sales Pipeline Kanban">
                <svg class="w-4 h-4 flex-shrink-0 {{ $currentRoute === 'admin.crm.pipeline' ? 'text-cyan-400' : 'text-slate-400 group-hover:text-cyan-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Sales Pipeline</span>
            </a>

            <!-- 3. Armada Test Drive -->
            <a href="{{ route('admin.crm.testdrives.index') }}" 
               class="flex items-center justify-between px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ $currentRoute === 'admin.crm.testdrives.index' ? 'bg-sky-950/80 text-cyan-300 border border-sky-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Armada & Jadwal Test Drive">
                <div class="flex items-center gap-3">
                    <svg class="w-4 h-4 flex-shrink-0 {{ $currentRoute === 'admin.crm.testdrives.index' ? 'text-cyan-400' : 'text-slate-400 group-hover:text-cyan-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                    <span class="sidebar-text whitespace-nowrap">Armada Test Drive</span>
                </div>
                <span class="sidebar-text px-1.5 py-0.5 rounded-full text-[9px] font-mono font-bold bg-sky-900 text-cyan-300">
                    {{ $activeTestDrivesCount }}
                </span>
            </a>

            <!-- 4. Simulasi Kredit Prospek -->
            <a href="{{ route('admin.crm.creditleads.index') }}" 
               class="flex items-center justify-between px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ $currentRoute === 'admin.crm.creditleads.index' ? 'bg-sky-950/80 text-amber-300 border border-amber-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Simulasi Kredit & Leasing">
                <div class="flex items-center gap-3">
                    <svg class="w-4 h-4 flex-shrink-0 {{ $currentRoute === 'admin.crm.creditleads.index' ? 'text-amber-400' : 'text-slate-400 group-hover:text-amber-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08-.402 2.599-1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span class="sidebar-text whitespace-nowrap">Simulasi Kredit</span>
                </div>
                <span class="sidebar-text px-1.5 py-0.5 rounded-full text-[9px] font-mono font-bold bg-amber-950 text-amber-300">
                    {{ $pendingCreditCount }}
                </span>
            </a>

            <!-- 5. Galeri Delivery Moments -->
            <a href="{{ route('admin.crm.deliverymoments.index') }}" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ $currentRoute === 'admin.crm.deliverymoments.index' ? 'bg-sky-950/80 text-cyan-300 border border-sky-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Manajemen Galeri Delivery Moments">
                <svg class="w-4 h-4 flex-shrink-0 {{ $currentRoute === 'admin.crm.deliverymoments.index' ? 'text-cyan-400' : 'text-slate-400 group-hover:text-cyan-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Galeri Serah Terima</span>
            </a>

            <!-- 6. Artikel & Berita Homepage -->
            <a href="{{ route('admin.crm.articles.index') }}" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold transition-all group relative {{ str_starts_with($currentRoute, 'admin.crm.articles') ? 'bg-sky-950/80 text-cyan-300 border border-sky-500/50 shadow-sm' : 'text-slate-400 hover:text-white hover:bg-slate-900/60' }}"
               title="Manajemen Artikel & Berita">
                <svg class="w-4 h-4 flex-shrink-0 {{ str_starts_with($currentRoute, 'admin.crm.articles') ? 'text-cyan-400' : 'text-slate-400 group-hover:text-cyan-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Artikel & Berita</span>
            </a>

            <!-- Divider -->
            <div class="pt-3 pb-1">
                <div class="border-t border-slate-800/80"></div>
            </div>

            <div class="px-3 py-2 text-[9px] font-extrabold uppercase tracking-[0.25em] text-slate-500 sidebar-text whitespace-nowrap">
                Peralatan Showroom
            </div>

            <!-- 6. Ekspor Data (.CSV) -->
            <a href="{{ route('admin.crm.leads.export') }}" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold text-slate-400 hover:text-white hover:bg-slate-900/60 transition-all group"
               title="Ekspor Seluruh Prospek (.CSV)">
                <svg class="w-4 h-4 flex-shrink-0 text-slate-400 group-hover:text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Ekspor Prospek (.CSV)</span>
            </a>

            <!-- 7. Lihat Website Live -->
            <a href="{{ route('home') }}" target="_blank" 
               class="flex items-center gap-3 px-3.5 py-2.5 rounded-2xl text-xs font-semibold text-slate-400 hover:text-cyan-300 hover:bg-slate-900/60 transition-all group"
               title="Lihat Website Frontend Promo Geely BSD">
                <svg class="w-4 h-4 flex-shrink-0 text-slate-400 group-hover:text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                </svg>
                <span class="sidebar-text whitespace-nowrap">Lihat Website Live</span>
            </a>

        </nav>
    </div>

    <!-- User Profile & Logout Box at Bottom -->
    <div class="p-3 border-t border-slate-800/80 bg-slate-950/40">
        <div class="flex items-center justify-between gap-2 p-2 rounded-2xl bg-slate-900/70 border border-slate-800">
            <div class="flex items-center gap-2.5 min-w-0">
                <div class="w-8 h-8 flex-shrink-0 rounded-full bg-slate-800 border border-sky-400/50 flex items-center justify-center text-xs font-bold text-cyan-300 font-mono">
                    {{ strtoupper(substr(Auth::user()->name ?? 'CS', 0, 2)) }}
                </div>
                <div class="sidebar-text min-w-0">
                    <p class="text-xs font-bold text-white truncate leading-tight">{{ Auth::user()->name ?? 'Chanda Satya' }}</p>
                    <p class="text-[9px] text-cyan-400 font-semibold tracking-wider uppercase truncate">Sales Consultant</p>
                </div>
            </div>

            <form method="POST" action="{{ route('admin.crm.logout') }}" class="flex-shrink-0">
                @csrf
                <button type="submit" title="Keluar Sesi" class="p-1.5 rounded-lg text-slate-400 hover:text-rose-400 hover:bg-slate-800 transition-colors cursor-pointer">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                    </svg>
                </button>
            </form>
        </div>
    </div>

</aside>

<!-- Global Layout Margin Controller Script -->
<script>
    function applySidebarState() {
        const isCollapsed = localStorage.getItem('geely_crm_sidebar_collapsed') === 'true';
        const sidebar = document.getElementById('main-sidebar');
        const contentWrapper = document.getElementById('admin-content-wrapper');
        const textElements = document.querySelectorAll('.sidebar-text');
        const iconCollapse = document.getElementById('icon-collapse-left');

        if (!sidebar) return;

        if (window.innerWidth >= 1024) {
            if (isCollapsed) {
                sidebar.classList.remove('w-64');
                sidebar.classList.add('w-20');
                textElements.forEach(el => el.classList.add('hidden'));
                if (contentWrapper) {
                    contentWrapper.classList.remove('lg:pl-64');
                    contentWrapper.classList.add('lg:pl-20');
                }
                if (iconCollapse) iconCollapse.classList.add('rotate-180');
            } else {
                sidebar.classList.remove('w-20');
                sidebar.classList.add('w-64');
                textElements.forEach(el => el.classList.remove('hidden'));
                if (contentWrapper) {
                    contentWrapper.classList.remove('lg:pl-20');
                    contentWrapper.classList.add('lg:pl-64');
                }
                if (iconCollapse) iconCollapse.classList.remove('rotate-180');
            }
        }
    }

    function toggleSidebarDesktop() {
        const currentlyCollapsed = localStorage.getItem('geely_crm_sidebar_collapsed') === 'true';
        localStorage.setItem('geely_crm_sidebar_collapsed', (!currentlyCollapsed).toString());
        applySidebarState();
    }

    function toggleSidebarMobile() {
        const sidebar = document.getElementById('main-sidebar');
        const backdrop = document.getElementById('sidebar-backdrop');
        if (!sidebar) return;

        const isHidden = sidebar.classList.contains('-translate-x-full');
        if (isHidden) {
            sidebar.classList.remove('-translate-x-full');
            if (backdrop) backdrop.classList.remove('hidden');
        } else {
            sidebar.classList.add('-translate-x-full');
            if (backdrop) backdrop.classList.add('hidden');
        }
    }

    // Auto apply saved state on load and resize
    document.addEventListener('DOMContentLoaded', applySidebarState);
    window.addEventListener('resize', applySidebarState);
</script>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Manajemen Artikel & Berita SEO | Promo Geely BSD CRM</title>
    
    <!-- Fonts & Tailwind CSS CDN -->
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
                        <span class="font-extrabold tracking-tight text-white uppercase text-sm md:text-base leading-none font-geely">Artikel & SEO Suite</span>
                        <span class="px-2 py-0.5 rounded-full text-[9px] font-bold tracking-widest uppercase bg-sky-950 text-cyan-300 border border-sky-600/40">Google SERP Ready</span>
                    </div>
                    <span class="text-[10px] text-slate-400 tracking-wider">Manajemen Berita Showroom, Edukasi EV & Publikasi Homepage</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <button onclick="openCreateModal()" class="btn-stealth px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-300 hover:text-white flex items-center gap-2 cursor-pointer border border-sky-500/40">
                    <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                    <span>Tulis Artikel Baru</span>
                </button>
                <a href="{{ route('home') }}#articles-section" target="_blank" class="p-2.5 rounded-full bg-slate-900 border border-slate-700 text-slate-300 hover:text-white hover:border-cyan-400 transition-all" title="Lihat Section Artikel di Homepage">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>
        </header>

        <main class="flex-1 max-w-[1720px] w-full mx-auto p-4 lg:p-8 space-y-6">

            <!-- Alerts Feedback -->
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

            <!-- Header Info Banner (Clean White Theme) -->
            <div class="bg-white rounded-3xl p-6 md:p-8 relative overflow-hidden border border-slate-200 shadow-xl">
                <div class="absolute -right-20 -top-20 w-80 h-80 bg-sky-100/70 rounded-full blur-3xl pointer-events-none"></div>
                <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                    <div>
                        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-sky-50 border border-sky-200 text-sky-700 text-[10px] font-bold tracking-widest uppercase mb-3 shadow-sm">
                            <svg class="w-3.5 h-3.5 text-sky-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                            <span>Content Marketing & Google Organic Traffic</span>
                        </div>
                        <h1 class="text-2xl md:text-3xl font-extrabold uppercase tracking-tight text-slate-900 font-geely">
                            Pusat Artikel & <span class="text-transparent bg-clip-text bg-gradient-to-r from-sky-600 to-cyan-500">SEO Mesin Pencari</span>
                        </h1>
                        <p class="text-slate-600 text-xs md:text-sm mt-1 max-w-2xl leading-relaxed">
                            Kelola konten promo dealer, artikel ulasan Geely EX5 & EX2, serta panduan perawatan EV. Dilengkapi generator Meta Tag otomatis, pratinjau SERP Google real-time, dan microdata JSON-LD untuk peringkat pencarian teratas di BSD & Tangerang.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 text-center min-w-[125px] shadow-sm">
                            <span class="text-[10px] uppercase font-bold text-slate-500 block">Total Artikel</span>
                            <span class="text-2xl font-mono font-extrabold text-sky-600">{{ $articles->total() }}</span>
                        </div>
                        <div class="p-3.5 rounded-2xl bg-slate-50 border border-slate-200/90 text-center min-w-[125px] shadow-sm">
                            <span class="text-[10px] uppercase font-bold text-slate-500 block">Status Tayang</span>
                            <span class="text-2xl font-mono font-extrabold text-emerald-600">{{ \App\Models\Article::where('is_published', true)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Articles Table Panel -->
            <div class="glass-island rounded-3xl p-6 md:p-8">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                    <div>
                        <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Daftar Publikasi Artikel</h3>
                        <p class="text-xs text-slate-400">Total: {{ $articles->total() }} artikel tercatat dalam database showroom</p>
                    </div>
                    <button onclick="openCreateModal()" class="btn-stealth px-4 py-2 rounded-xl text-xs font-bold uppercase tracking-wider text-cyan-300 hover:text-white flex items-center gap-2 cursor-pointer">
                        <svg class="w-3.5 h-3.5 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path></svg>
                        <span>Tulis Artikel Baru</span>
                    </button>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse text-xs">
                        <thead>
                            <tr class="border-b border-slate-800 text-slate-400 text-[10px] uppercase tracking-wider">
                                <th class="py-3 px-4">Artikel / Thumbnail</th>
                                <th class="py-3 px-4">Kategori</th>
                                <th class="py-3 px-4">Penulis</th>
                                <th class="py-3 px-4">Tanggal & Pembaca</th>
                                <th class="py-3 px-4">Status</th>
                                <th class="py-3 px-4 text-right">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-800/60">
                            @forelse($articles as $article)
                            <tr class="hover:bg-slate-800/40 transition-colors">
                                <td class="py-3.5 px-4 font-bold text-white">
                                    <div class="flex items-center gap-3 min-w-[280px]">
                                        <div class="w-16 h-12 rounded-xl overflow-hidden bg-slate-900 border border-slate-800 flex-shrink-0">
                                            <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
                                        </div>
                                        <div class="min-w-0">
                                            <a href="{{ route('articles.show', $article->slug) }}" target="_blank" class="font-bold text-white hover:text-cyan-300 transition-colors line-clamp-1">
                                                {{ $article->title }}
                                            </a>
                                            <p class="text-[10px] text-slate-500 font-mono truncate">/articles/{{ $article->slug }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="py-3.5 px-4">
                                    <span class="px-2.5 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider bg-sky-950 text-cyan-300 border border-sky-800 whitespace-nowrap">
                                        {{ $article->category }}
                                    </span>
                                </td>
                                <td class="py-3.5 px-4 text-slate-300 font-medium">
                                    {{ $article->author }}
                                </td>
                                <td class="py-3.5 px-4 text-slate-400">
                                    <p class="text-white font-semibold">{{ $article->published_at ? $article->published_at->format('d M Y') : '-' }}</p>
                                    <p class="text-[10px] text-cyan-400 font-mono">{{ number_format($article->views_count) }} kali dibaca</p>
                                </td>
                                <td class="py-3.5 px-4">
                                    @if($article->is_published)
                                        <span class="px-2 py-0.5 rounded text-[9px] font-mono text-emerald-400 bg-emerald-950/60 border border-emerald-800 font-bold uppercase tracking-wider">
                                            Tayang di Beranda
                                        </span>
                                    @else
                                        <span class="px-2 py-0.5 rounded text-[9px] font-mono text-slate-400 bg-slate-900 border border-slate-700 font-bold uppercase tracking-wider">
                                            Draft / Arsip
                                        </span>
                                    @endif
                                </td>
                                <td class="py-3.5 px-4 text-right">
                                    <div class="flex items-center justify-end gap-2">
                                        <!-- Edit Trigger -->
                                        <button onclick='openEditModal(@json($article))' 
                                                class="px-3 py-1.5 rounded-xl bg-slate-800 hover:bg-sky-600 text-slate-300 hover:text-white font-bold transition-all border border-slate-700 hover:border-sky-400 text-[11px] flex items-center gap-1 cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            <span>Edit</span>
                                        </button>

                                        <!-- Delete Trigger -->
                                        <button onclick="openDeleteModal('{{ $article->id }}', '{{ addslashes($article->title) }}')" 
                                                class="px-3 py-1.5 rounded-xl bg-rose-950/40 hover:bg-rose-900 text-rose-400 hover:text-white font-bold transition-all border border-rose-800/60 text-[11px] flex items-center gap-1 cursor-pointer">
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                            <span>Hapus</span>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="py-16 text-center text-slate-500">
                                    <svg class="w-12 h-12 mx-auto text-slate-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                                    <p class="font-bold text-slate-400 text-sm">Belum ada artikel yang dibuat.</p>
                                    <p class="mt-1 text-xs">Klik tombol "Tulis Artikel Baru" di atas untuk mulai membuat artikel dengan optimasi Google SERP.</p>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="mt-6">
                    {{ $articles->links() }}
                </div>
            </div>

        </main>
    </div>

    <!-- Modal Form Tambah / Edit Artikel dengan SEO Suite -->
    <div id="article-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-3 sm:p-6 bg-black/85 backdrop-blur-md overflow-hidden">
        <div class="relative w-full max-w-3xl max-h-[92vh] flex flex-col glass-island rounded-[2.5rem] border border-slate-700 shadow-2xl overflow-hidden my-auto">
            
            <!-- Sticky Modal Header -->
            <div class="flex items-center justify-between px-6 py-5 md:px-8 border-b border-slate-800/90 bg-[#0a0f1d]/95 backdrop-blur-md flex-shrink-0">
                <div>
                    <h3 id="modal-title" class="text-lg md:text-xl font-bold uppercase tracking-tight text-white font-geely">Tulis Artikel Baru</h3>
                    <p class="text-[11px] text-slate-400">Dilengkapi SEO Meta Suite & Preview Google Search Engine Real-time</p>
                </div>
                <button type="button" onclick="closeArticleModal()" class="p-2 rounded-xl text-slate-400 hover:text-white hover:bg-slate-800 cursor-pointer transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                </button>
            </div>

            <!-- Form Wrapper with Scrollable Content Body & Sticky Footer -->
            <form id="article-form" method="POST" action="{{ route('admin.crm.articles.store') }}" enctype="multipart/form-data" class="flex flex-col flex-1 min-h-0 text-xs overflow-hidden">
                @csrf
                <div id="method-put-container"></div>

                <!-- Scrollable Form Body -->
                <div class="flex-1 overflow-y-auto px-6 py-5 md:px-8 space-y-5">
                    <!-- Judul Artikel -->
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Judul Artikel</label>
                        <input type="text" name="title" id="form-title" required placeholder="Contoh: Promo Bunga 0% & Free Wallbox Geely EX5 di BSD" 
                               oninput="updateSerpPreview()"
                               class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                    </div>

                    <!-- Kategori & Penulis -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Kategori</label>
                            <select name="category" id="form-category" class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white focus:outline-none focus:border-cyan-400">
                                <option value="Promo & Penawaran">Promo & Penawaran</option>
                                <option value="Ulasan & Review">Ulasan & Review</option>
                                <option value="Tips & Perawatan EV">Tips & Perawatan EV</option>
                                <option value="Berita Showroom">Berita Showroom</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Penulis / Author</label>
                            <input type="text" name="author" id="form-author" value="Tim Promo Geely BSD" 
                                   class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                        </div>
                    </div>

                    <!-- Excerpt Ringkasan -->
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Ringkasan Singkat (Excerpt)</label>
                        <textarea name="excerpt" id="form-excerpt" rows="2" placeholder="Ringkasan 1-2 kalimat untuk kartu depan beranda..." 
                                  oninput="updateSerpPreview()"
                                  class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400"></textarea>
                    </div>

                    <!-- Isi Lengkap Artikel -->
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Isi Lengkap Artikel</label>
                        <textarea name="content" id="form-content" rows="7" required placeholder="Tuliskan isi artikel selengkap mungkin di sini..." 
                                  class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 font-mono"></textarea>
                    </div>

                    <!-- Thumbnail Gambar -->
                    <div>
                        <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Gambar Thumbnail (Maks 50MB)</label>
                        <input type="file" name="thumbnail" accept="image/*" 
                               class="w-full px-4 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-slate-300 focus:outline-none focus:border-cyan-400 file:mr-4 file:py-1 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-semibold file:bg-sky-950 file:text-cyan-300 hover:file:bg-sky-900">
                        <p id="thumbnail-helper" class="text-[10px] text-slate-500 mt-1">Format: JPG, PNG, WEBP. Kosongkan jika tidak ingin mengubah foto saat edit.</p>
                    </div>

                    <!-- SEO OPTIMIZATION ACCORDION / BOX -->
                    <div class="p-5 rounded-2xl bg-slate-950/80 border border-sky-500/40 space-y-4">
                        <div class="flex items-center justify-between border-b border-slate-800 pb-3">
                            <div class="flex items-center gap-2">
                                <span class="w-2.5 h-2.5 rounded-full bg-cyan-400"></span>
                                <h4 class="font-bold text-white uppercase tracking-wider text-xs font-geely">Optimasi Mesin Pencari (Google SEO Suite)</h4>
                            </div>
                            <span class="text-[10px] text-cyan-300 font-mono font-bold bg-sky-950 px-2.5 py-0.5 rounded-full border border-sky-700">Google SERP Ready</span>
                        </div>

                        <!-- Live Google Search Result Simulator -->
                        <div>
                            <span class="text-[10px] text-slate-400 font-semibold block mb-1.5 uppercase tracking-wider">Simulasi Tampilan di Pencarian Google:</span>
                            <div class="p-3.5 rounded-xl bg-[#202124] border border-slate-700/80 font-sans space-y-1">
                                <div class="flex items-center gap-1.5 text-[11px] text-[#bdc1c6] truncate">
                                    <span class="text-white">https://www.promogeely.id</span>
                                    <span>&rsaquo; articles &rsaquo; <span id="serp-slug" class="text-slate-400">promo-geely-bsd</span></span>
                                </div>
                                <h5 id="serp-title" class="text-[#8ab4f8] text-sm font-semibold line-clamp-1 hover:underline cursor-pointer">
                                    Promo Bunga 0% & Free Wallbox Geely EX5 di BSD | Promo Geely BSD
                                </h5>
                                <p id="serp-desc" class="text-[#bdc1c6] text-xs line-clamp-2 leading-relaxed">
                                    Dapatkan penawaran istimewa unit Geely EX5, EX2, dan Starray EM-i di showroom resmi Geely BSD City Tangerang.
                                </p>
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 pt-2">
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <label class="block font-bold uppercase tracking-wider text-slate-300">Meta Title Google</label>
                                    <span id="title-counter" class="text-[10px] text-cyan-400 font-mono">0 / 60</span>
                                </div>
                                <input type="text" name="meta_title" id="form-meta-title" placeholder="Kustom Judul Tab & Google (Opsional)" 
                                       oninput="updateSerpPreview()"
                                       class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                            </div>
                            <div>
                                <div class="flex justify-between items-center mb-1">
                                    <label class="block font-bold uppercase tracking-wider text-slate-300">Target Kata Kunci (Keywords)</label>
                                    <span class="text-[10px] text-slate-500 font-mono">Pisahkan koma</span>
                                </div>
                                <input type="text" name="meta_keywords" id="form-meta-keywords" placeholder="promo geely bsd, harga geely ex5, kredit ev" 
                                       class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                            </div>
                        </div>

                        <div>
                            <div class="flex justify-between items-center mb-1">
                                <label class="block font-bold uppercase tracking-wider text-slate-300">Meta Description (Snippet Google)</label>
                                <span id="desc-counter" class="text-[10px] text-cyan-400 font-mono">0 / 160</span>
                            </div>
                            <textarea name="meta_description" id="form-meta-description" rows="2" placeholder="Deskripsi ringkas yang tampil di hasil pencarian Google (~150-160 karakter)..." 
                                      oninput="updateSerpPreview()"
                                      class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400"></textarea>
                        </div>

                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1">Canonical URL (Opsional)</label>
                            <input type="url" name="canonical_url" id="form-canonical-url" placeholder="https://www.promogeely.id/articles/..." 
                                   class="w-full px-3.5 py-2.5 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400">
                            <p class="text-[10px] text-slate-500 mt-1">Kosongkan jika ingin menggunakan link bawaan halaman artikel.</p>
                        </div>
                    </div>
                </div>

                <!-- Sticky Modal Footer -->
                <div class="flex items-center justify-between px-6 py-4 md:px-8 border-t border-slate-800/90 bg-[#0a0f1d]/95 backdrop-blur-md flex-shrink-0">
                    <label class="flex items-center gap-2 cursor-pointer text-slate-300 select-none">
                        <input type="checkbox" name="is_published" id="form-published" value="1" checked class="w-4 h-4 rounded bg-slate-900 border-slate-700 text-cyan-500 focus:ring-0">
                        <span class="font-semibold text-xs text-slate-200">Langsung Tayangkan</span>
                    </label>

                    <div class="flex items-center gap-2.5">
                        <button type="button" onclick="closeArticleModal()" class="px-4 py-2.5 rounded-xl bg-slate-800 hover:bg-slate-700 text-slate-300 hover:text-white font-bold uppercase tracking-wider text-[11px] cursor-pointer transition-colors">
                            Batal
                        </button>
                        <button type="submit" class="btn-stealth px-5 py-2.5 rounded-xl text-cyan-300 hover:text-white font-bold uppercase tracking-wider text-[11px] flex items-center gap-2 cursor-pointer shadow-lg">
                            <span id="btn-submit-text">Simpan Artikel</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Custom Safe Delete Modal (No browser alerts/confirms) -->
    <div id="delete-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 bg-black/80 backdrop-blur-md">
        <div class="relative w-full max-w-md glass-island p-6 md:p-8 rounded-3xl border border-rose-900/50 shadow-2xl text-center space-y-4">
            <div class="w-12 h-12 rounded-2xl bg-rose-950 border border-rose-700 text-rose-400 flex items-center justify-center mx-auto">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
            </div>
            
            <h4 class="text-base font-bold text-white uppercase tracking-tight font-geely">Hapus Artikel Ini?</h4>
            <p id="delete-article-name" class="text-xs text-slate-300 font-semibold px-2"></p>
            <p class="text-[11px] text-slate-500 leading-relaxed">Tindakan ini permanen. Artikel dan file gambar thumbnail terkait akan dihapus dari server dan homepage.</p>

            <form id="delete-form" method="POST" action="" class="flex items-center justify-center gap-3 pt-2">
                @csrf
                @method('DELETE')
                <button type="button" onclick="closeDeleteModal()" class="px-5 py-2.5 rounded-xl bg-slate-800 text-slate-300 hover:text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                    Batal
                </button>
                <button type="submit" class="px-5 py-2.5 rounded-xl bg-rose-600 hover:bg-rose-500 text-white font-bold text-xs uppercase tracking-wider cursor-pointer shadow-lg">
                    Ya, Hapus Sekarang
                </button>
            </form>
        </div>
    </div>

    <script>
        function updateSerpPreview() {
            const rawTitle = document.getElementById('form-title').value.trim();
            const metaTitle = document.getElementById('form-meta-title').value.trim();
            const rawExcerpt = document.getElementById('form-excerpt').value.trim();
            const metaDesc = document.getElementById('form-meta-description').value.trim();

            const finalTitle = metaTitle || (rawTitle ? rawTitle + ' | Promo Geely BSD' : 'Judul Artikel Showroom | Promo Geely BSD');
            const finalDesc = metaDesc || rawExcerpt || 'Dapatkan informasi lengkap spesifikasi, simulasi kredit bunga rendah, dan promo test drive mobil Geely BSD City.';
            
            // Slug preview simulation
            const slug = rawTitle ? rawTitle.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '') : 'promo-geely-bsd';

            document.getElementById('serp-title').textContent = finalTitle;
            document.getElementById('serp-desc').textContent = finalDesc;
            document.getElementById('serp-slug').textContent = slug;

            // Update length counters
            document.getElementById('title-counter').textContent = `${(metaTitle || rawTitle).length} / 60`;
            document.getElementById('desc-counter').textContent = `${(metaDesc || rawExcerpt).length} / 160`;
        }

        function openCreateModal() {
            document.getElementById('modal-title').textContent = 'Tulis Artikel Baru';
            document.getElementById('btn-submit-text').textContent = 'Simpan & Tayangkan';
            document.getElementById('article-form').action = "{{ route('admin.crm.articles.store') }}";
            document.getElementById('method-put-container').innerHTML = '';
            
            document.getElementById('form-title').value = '';
            document.getElementById('form-category').value = 'Promo & Penawaran';
            document.getElementById('form-author').value = 'Tim Promo Geely BSD';
            document.getElementById('form-excerpt').value = '';
            document.getElementById('form-content').value = '';
            document.getElementById('form-published').checked = true;

            // Reset SEO fields
            document.getElementById('form-meta-title').value = '';
            document.getElementById('form-meta-description').value = '';
            document.getElementById('form-meta-keywords').value = '';
            document.getElementById('form-canonical-url').value = '';

            updateSerpPreview();

            const modal = document.getElementById('article-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function openEditModal(article) {
            document.getElementById('modal-title').textContent = 'Edit Artikel';
            document.getElementById('btn-submit-text').textContent = 'Perbarui Artikel';
            document.getElementById('article-form').action = `/admin/crm/articles/${article.id}`;
            document.getElementById('method-put-container').innerHTML = '@method("PUT")';

            document.getElementById('form-title').value = article.title || '';
            document.getElementById('form-category').value = article.category || 'Promo & Penawaran';
            document.getElementById('form-author').value = article.author || 'Tim Promo Geely BSD';
            document.getElementById('form-excerpt').value = article.excerpt || '';
            document.getElementById('form-content').value = article.content || '';
            document.getElementById('form-published').checked = Boolean(article.is_published);

            // Populate SEO fields
            document.getElementById('form-meta-title').value = article.meta_title || '';
            document.getElementById('form-meta-description').value = article.meta_description || '';
            document.getElementById('form-meta-keywords').value = article.meta_keywords || '';
            document.getElementById('form-canonical-url').value = article.canonical_url || '';

            updateSerpPreview();

            const modal = document.getElementById('article-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeArticleModal() {
            const modal = document.getElementById('article-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        function openDeleteModal(articleId, articleTitle) {
            document.getElementById('delete-article-name').textContent = `"${articleTitle}"`;
            document.getElementById('delete-form').action = `/admin/crm/articles/${articleId}`;
            const modal = document.getElementById('delete-modal');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
        }

        function closeDeleteModal() {
            const modal = document.getElementById('delete-modal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }

        // Close modal on Escape key press
        window.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeArticleModal();
                closeDeleteModal();
            }
        });
    </script>
</body>
</html>
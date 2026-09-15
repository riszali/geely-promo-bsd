<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Manajemen Galeri Delivery Moments | Promo Geely BSD CRM</title>
    
    <!-- Fonts & CDN -->
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
                        <span class="font-extrabold tracking-tight text-white uppercase text-sm md:text-base leading-none font-geely">Galeri Delivery Moments</span>
                        <span class="px-2 py-0.5 rounded-full text-[9px] font-bold tracking-widest uppercase bg-sky-950 text-cyan-300 border border-sky-600/40">Homepage Sync</span>
                    </div>
                    <span class="text-[10px] text-slate-400 tracking-wider">Kelola Momen Serah Terima Mobil Konsumen BSD</span>
                </div>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('home') }}#customer-gallery" target="_blank" class="btn-stealth px-4 py-2 rounded-full text-xs font-bold uppercase tracking-wider text-cyan-300 hover:text-white flex items-center gap-1.5">
                    <span>Lihat di Website</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>
            </div>
        </header>

        <main class="flex-1 max-w-[1720px] w-full mx-auto p-4 lg:p-8 space-y-8">
            
            <!-- Alerts Feedback -->
            @if(session('success'))
                <div class="p-4 rounded-2xl bg-emerald-950/70 border border-emerald-500/50 text-emerald-300 text-xs flex items-center justify-between shadow-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                        <p class="font-semibold">{{ session('success') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-emerald-400 hover:text-white">&times;</button>
                </div>
            @endif

            @if(session('info'))
                <div class="p-4 rounded-2xl bg-sky-950/70 border border-sky-500/50 text-cyan-300 text-xs flex items-center justify-between shadow-lg">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <p class="font-semibold">{{ session('info') }}</p>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-cyan-400 hover:text-white">&times;</button>
                </div>
            @endif

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                
                <!-- Left Form: Unggah Foto Baru -->
                <div class="lg:col-span-5 glass-island p-6 md:p-8 rounded-3xl sticky top-24">
                    <div class="mb-6">
                        <span class="text-[10px] font-bold tracking-widest uppercase text-cyan-400 block mb-1">Upload Media</span>
                        <h2 class="text-xl font-bold uppercase tracking-tight text-white font-geely">Tambah Momen Serah Terima</h2>
                        <p class="text-xs text-slate-400 mt-1">Foto yang diunggah otomatis tersinkron ke galeri beranda Promo Geely BSD.</p>
                    </div>

                    <form method="POST" action="{{ route('admin.crm.deliverymoments.store') }}" enctype="multipart/form-data" class="space-y-4 text-xs">
                        @csrf
                        
                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-2">Pilih File Foto (Resolusi Bebas / Max 50MB)</label>
                            <div class="border-2 border-dashed border-slate-700 hover:border-cyan-500/60 rounded-2xl p-6 text-center transition-colors bg-slate-900/60 cursor-pointer relative min-h-[160px] flex items-center justify-center">
                                <input type="file" name="photo" id="photo-input" required accept="image/*" class="absolute inset-0 opacity-0 cursor-pointer w-full h-full z-10" onchange="previewSelectedImage(this)">
                                
                                <div id="upload-placeholder">
                                    <svg class="w-10 h-10 text-slate-500 mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                    <p class="text-white font-semibold text-sm">Klik atau seret foto ke sini</p>
                                    <p class="text-[11px] text-cyan-400 mt-1">Format: JPG, JPEG, PNG, WEBP (Maks 50MB)</p>
                                </div>

                                <div id="upload-preview-wrapper" class="hidden w-full">
                                    <img id="upload-preview" src="#" alt="Preview" class="max-h-72 w-full mx-auto rounded-xl object-contain border border-slate-700 shadow-md">
                                    <p class="text-[11px] text-cyan-300 mt-2.5 font-mono" id="upload-filename"></p>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1.5">Keterangan / Nama Konsumen</label>
                            <input type="text" name="caption" placeholder="Contoh: Serah Terima Geely EX5 - Bpk. Hendra" 
                                   class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 text-xs">
                        </div>

                        <div>
                            <label class="block font-bold uppercase tracking-wider text-slate-300 mb-1.5">Urutan Prioritas (Opsional)</label>
                            <input type="number" name="display_order" value="0" min="0" placeholder="0" 
                                   class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-xl text-white placeholder-slate-500 focus:outline-none focus:border-cyan-400 text-xs">
                            <p class="text-[10px] text-slate-500 mt-1">Angka lebih kecil tampil di urutan terdepan.</p>
                        </div>

                        <button type="submit" class="w-full btn-stealth py-3.5 rounded-xl text-cyan-300 hover:text-white font-bold uppercase tracking-wider flex items-center justify-center gap-2 mt-4 cursor-pointer">
                            <svg class="w-4 h-4 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                            <span>Publikasikan Foto ke Beranda</span>
                        </button>
                    </form>
                </div>

                <!-- Right Grid: Daftar Foto yang Sedang Tayang -->
                <div class="lg:col-span-7 glass-island p-6 md:p-8 rounded-3xl">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 mb-6">
                        <div>
                            <h3 class="text-base font-bold uppercase tracking-tight text-white font-geely">Foto Serah Terima Sedang Tayang</h3>
                            <p class="text-xs text-slate-400">Total: {{ $moments->total() }} foto aktif di beranda.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        @forelse($moments as $moment)
                        <div class="rounded-3xl bg-slate-900/90 border border-slate-800 overflow-hidden flex flex-col justify-between hover:border-cyan-500/50 transition-all duration-300 group shadow-lg">
                            
                            <div class="relative w-full aspect-[4/5] bg-slate-950 overflow-hidden">
                                <img src="{{ $moment->image_url }}" alt="{{ $moment->caption }}" class="w-full h-full object-cover object-center group-hover:scale-105 transition-transform duration-700">
                                
                                <div class="absolute top-3 left-3 px-2.5 py-1 rounded-lg bg-slate-950/85 backdrop-blur-md border border-slate-700 text-[10px] font-mono text-cyan-300 font-bold">
                                    Urutan: {{ $moment->display_order }}
                                </div>
                            </div>

                            <div class="p-4 flex flex-col justify-between flex-1 border-t border-slate-800 bg-slate-900/50">
                                <div class="mb-3">
                                    <p class="text-sm font-bold text-white line-clamp-2">{{ $moment->caption ?: 'Momen Serah Terima Unit' }}</p>
                                    <p class="text-[10px] text-slate-400 mt-1 font-mono">{{ $moment->created_at ? $moment->created_at->format('d M Y - H:i') . ' WIB' : '-' }}</p>
                                </div>

                                <form method="POST" action="{{ route('admin.crm.deliverymoments.destroy', $moment) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus foto ini dari galeri beranda?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-full py-2.5 px-3 rounded-xl bg-rose-950/50 hover:bg-rose-900 border border-rose-800/80 text-rose-300 hover:text-white text-[11px] font-bold uppercase tracking-wider flex items-center justify-center gap-1.5 transition-colors cursor-pointer">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                                        <span>Hapus Foto</span>
                                    </button>
                                </form>
                            </div>

                        </div>
                        @empty
                        <div class="col-span-full py-16 text-center text-slate-500 text-xs">
                            <svg class="w-12 h-12 mx-auto text-slate-600 mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="font-bold text-slate-400 text-sm">Belum ada foto yang diunggah.</p>
                            <p class="mt-1 text-xs">Gunakan formulir di sebelah kiri untuk mengunggah foto serah terima unit (ukuran s.d 50MB).</p>
                        </div>
                        @endforelse
                    </div>

                    <div class="mt-8">
                        {{ $moments->links() }}
                    </div>
                </div>

            </div>

        </main>
    </div>

    <script>
        function previewSelectedImage(input) {
            const file = input.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('upload-preview').src = e.target.result;
                    document.getElementById('upload-filename').textContent = file.name + ' (' + (file.size / (1024 * 1024)).toFixed(2) + ' MB)';
                    document.getElementById('upload-placeholder').classList.add('hidden');
                    document.getElementById('upload-preview-wrapper').classList.remove('hidden');
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
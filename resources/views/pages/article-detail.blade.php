<x-layouts.app>
    @section('title', $article->seo_title)
    @section('meta_description', $article->seo_description)
    @section('meta_keywords', $article->seo_keywords)
    @section('og_image', $article->thumbnail_url)
    @section('canonical', $article->canonical_url ?: route('articles.show', $article->slug))

    <!-- OpenGraph & Twitter Card SEO Meta Tags -->
    @push('head')
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->seo_title }}">
    <meta property="og:description" content="{{ $article->seo_description }}">
    <meta property="og:url" content="{{ $article->canonical_url ?: route('articles.show', $article->slug) }}">
    <meta property="og:image" content="{{ $article->thumbnail_url }}">
    <meta property="og:site_name" content="Promo Geely BSD">
    <meta property="article:published_time" content="{{ $article->published_at ? $article->published_at->toIso8601String() : $article->created_at->toIso8601String() }}">
    <meta property="article:author" content="{{ $article->author }}">
    <meta property="article:section" content="{{ $article->category }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $article->seo_title }}">
    <meta name="twitter:description" content="{{ $article->seo_description }}">
    <meta name="twitter:image" content="{{ $article->thumbnail_url }}">

    <!-- Schema.org JSON-LD for Google Rich Snippets & News -->
    @php
        $schemaData = [
            '@context' => 'https://schema.org',
            '@type' => 'NewsArticle',
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('articles.show', $article->slug)
            ],
            'headline' => $article->title,
            'description' => $article->seo_description,
            'image' => [
                $article->thumbnail_url
            ],
            'datePublished' => $article->published_at ? $article->published_at->toIso8601String() : $article->created_at->toIso8601String(),
            'dateModified' => $article->updated_at ? $article->updated_at->toIso8601String() : now()->toIso8601String(),
            'author' => [
                '@type' => 'Person',
                'name' => $article->author
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'Promo Geely BSD Tangerang',
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('images/footer-logos-geely.png')
                ]
            ]
        ];
    @endphp
    <script type="application/ld+json">
    {!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>
    @endpush

    <style>
        html, body {
            background-color: #f8fafc;
            color: #111827;
        }

        .spatial-glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(30px) saturate(120%);
            -webkit-backdrop-filter: blur(30px) saturate(120%);
            border: 1px solid rgba(226, 232, 240, 0.9);
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.05);
        }

        .article-content p {
            margin-bottom: 1.5rem;
            line-height: 1.85;
            font-size: 1.05rem;
            color: #334155;
        }

        .article-content h2 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-top: 2.5rem;
            margin-bottom: 1rem;
            color: #0f172a;
            letter-spacing: -0.02em;
        }

        .article-content h3 {
            font-size: 1.45rem;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 0.75rem;
            color: #1e293b;
        }

        .article-content ul, .article-content ol {
            margin-bottom: 1.5rem;
            padding-left: 1.5rem;
            color: #334155;
        }

        .article-content li {
            margin-bottom: 0.5rem;
            line-height: 1.7;
        }
    </style>

    <div class="relative py-28 lg:py-36 px-4 sm:px-6 lg:px-8 bg-[#f8fafc] overflow-hidden min-h-screen">
        
        <!-- Ambient Glow -->
        <div class="absolute top-0 right-0 w-[700px] h-[700px] bg-sky-200/30 rounded-full blur-[130px] pointer-events-none"></div>
        <div class="absolute bottom-0 left-0 w-[600px] h-[600px] bg-cyan-200/20 rounded-full blur-[120px] pointer-events-none"></div>

        <div class="max-w-4xl mx-auto relative z-10 space-y-10">
            
            <!-- Breadcrumbs with Clean Link Structure -->
            <nav class="flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-slate-500" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="hover:text-sky-600 transition-colors">Beranda</a>
                <span>&rsaquo;</span>
                <span class="text-sky-600">{{ $article->category }}</span>
            </nav>

            <!-- Article Header -->
            <div class="space-y-4">
                <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-sky-100/80 border border-sky-300/60 text-sky-700 text-xs font-bold uppercase tracking-wider">
                    <span>{{ $article->category }}</span>
                </div>

                <h1 class="font-geely text-3xl sm:text-4xl md:text-5xl uppercase tracking-tight text-slate-950 leading-[1.15]">
                    {{ $article->title }}
                </h1>

                <div class="flex flex-wrap items-center gap-4 text-xs text-slate-500 font-mono pt-2 border-b border-slate-200 pb-6">
                    <span class="font-bold text-slate-700">{{ $article->author }}</span>
                    <span>&bull;</span>
                    <span>{{ $article->published_at ? $article->published_at->translatedFormat('d F Y') : '-' }}</span>
                    <span>&bull;</span>
                    <span>{{ $article->reading_time }} menit waktu baca</span>
                    <span>&bull;</span>
                    <span>{{ $article->views_count }} tayangan</span>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="relative w-full aspect-[16/9] rounded-[2.5rem] overflow-hidden shadow-2xl border border-slate-200 bg-slate-100">
                <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-full object-cover">
            </div>

            <!-- Main Content Container -->
            <div class="spatial-glass rounded-[2.5rem] p-8 md:p-14 shadow-lg">
                <div class="article-content max-w-none">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <!-- Call to Action Banner -->
                <div class="mt-12 p-8 rounded-[2rem] bg-gradient-to-br from-slate-950 to-slate-900 text-white flex flex-col sm:flex-row items-center justify-between gap-6 shadow-xl border border-slate-800">
                    <div>
                        <h4 class="font-geely text-2xl uppercase tracking-tight mb-2">Ingin Mencoba Langsung?</h4>
                        <p class="text-slate-300 text-xs md:text-sm max-w-md">Jadwalkan test drive mobil Geely EX5, EX2, atau Starray EM-i bersama tim sales resmi kami di BSD.</p>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3 w-full sm:w-auto">
                        <a href="{{ route('test-drive') }}" class="px-6 py-3.5 rounded-full bg-slate-800 hover:bg-slate-700 text-cyan-300 font-bold uppercase tracking-wider text-xs text-center whitespace-nowrap transition-colors">
                            Book Test Drive
                        </a>
                        <a href="https://wa.me/6281295443338?text={{ rawurlencode('Halo Promo Geely BSD, saya baru saja membaca artikel ' . $article->title . '. Boleh minta informasi promo terbarunya?') }}" target="_blank" class="px-6 py-3.5 rounded-full bg-[#25D366] hover:bg-[#20bd5a] text-slate-950 text-xs font-bold uppercase tracking-wider text-center whitespace-nowrap">
                            Tanya Promo via WA
                        </a>
                    </div>
                </div>
            </div>

            <!-- Related Articles -->
            @if(isset($relatedArticles) && count($relatedArticles) > 0)
            <div class="pt-10">
                <h3 class="font-geely text-2xl uppercase tracking-tight text-slate-950 mb-6">Artikel Terkait Lainnya</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @foreach($relatedArticles as $rel)
                    <a href="{{ route('articles.show', $rel->slug) }}" class="spatial-glass rounded-3xl p-3.5 group hover:-translate-y-1.5 transition-all duration-300 block">
                        <div class="w-full aspect-[16/10] rounded-2xl overflow-hidden bg-slate-200 mb-3">
                            <img src="{{ $rel->thumbnail_url }}" alt="{{ $rel->title }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <span class="text-[10px] text-sky-700 font-bold uppercase tracking-wider block mb-1">{{ $rel->category }}</span>
                        <h5 class="font-bold text-slate-900 text-sm line-clamp-2 group-hover:text-sky-600 transition-colors font-geely">{{ $rel->title }}</h5>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif

        </div>
    </div>
</x-layouts.app>
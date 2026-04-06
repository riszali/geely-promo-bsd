{!! '<' . '?xml version="1.0" encoding="UTF-8"?' . '>' !!}
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Halaman Statis --}}
    @foreach($statics as $url)
    <url>
        {{-- url() akan otomatis mengambil APP_URL dari .env sehingga bebas masalah www/non-www --}}
        <loc>{{ url(ltrim($url, '/')) }}</loc>
        <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>{{ $url == '/' ? '1.0' : '0.8' }}</priority>
    </url>
    @endforeach

    {{-- Halaman Produk (Mobil) --}}
    @foreach($models as $model)
    <url>
        {{-- Mendukung baik format object (model->slug) maupun array (model['slug']) --}}
        <loc>{{ url(ltrim($model->slug ?? $model['slug'], '/')) }}</loc>
        {{-- Dibungkus dengan Carbon::parse untuk mencegah error jika format tanggal berupa string --}}
        <lastmod>{{ \Carbon\Carbon::parse($model->updated_at ?? $model['updated_at'])->tz('UTC')->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach

    {{-- Halaman Detail Spesifikasi (Jika ada) --}}
    @if(isset($details))
        @foreach($details as $detailUrl)
        <url>
            <loc>{{ url(ltrim($detailUrl, '/')) }}</loc>
            <lastmod>{{ now()->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
        @endforeach
    @endif
</urlset>
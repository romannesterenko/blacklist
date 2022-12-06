<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>2022-11-25T12:00:00+00:00</lastmod> 
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @foreach ($blacklists as $blacklist)
        <url>
            <loc>{{ url('/') }}/buyer/{{ $blacklist->phone }}</loc>
            <lastmod>{{ $blacklist->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
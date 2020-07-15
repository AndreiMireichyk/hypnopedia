<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
@section('sitemap')
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>{{route('home')}}</loc>
            <priority>0.6</priority>
            <changefreq>monthly</changefreq>
            <lastmod>{{\Carbon\Carbon::now()->format('c')}}</lastmod>
        </url>

        <url>
            <loc>{{route('contacts')}}</loc>
            <priority>0.6</priority>
            <changefreq>monthly</changefreq>
            <lastmod>{{\Carbon\Carbon::now()->format('c')}}</lastmod>
        </url>

        <url>
            <loc>{{route('blog')}}</loc>
            <priority>0.6</priority>
            <changefreq>monthly</changefreq>
            <lastmod>{{\Carbon\Carbon::now()->format('c')}}</lastmod>
        </url>

        @foreach($articles_categories as $category)
            <url>
                <loc>{{route('blog.category', $category->slug)}}</loc>
                <priority>0.6</priority>
                <changefreq>monthly</changefreq>
                <lastmod>{{\Carbon\Carbon::parse($category->updated_at)->format('c')}}</lastmod>
            </url>
        @endforeach
        @foreach($articles as $article)
            <url>
                <loc>{{route('blog.article', $article->slug)}}</loc>
                <priority>0.7</priority>
                <changefreq>monthly</changefreq>
                <lastmod>{{\Carbon\Carbon::parse($article->updated_at)->format('c')}}</lastmod>
            </url>
        @endforeach
    </urlset>
@show
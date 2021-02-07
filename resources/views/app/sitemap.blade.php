<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>
@section('sitemap')
    <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>{{route('home', 'ru')}}</loc>
            <priority>1</priority>
            <changefreq>weekly</changefreq>
        </url>
        <url>
            <loc>{{route('home', 'en')}}</loc>
            <priority>1</priority>
            <changefreq>weekly</changefreq>
        </url>

        <url>
            <loc>{{route('contacts', 'en')}}</loc>
            <priority>0.6</priority>
            <changefreq>weekly</changefreq>
        </url>

        <url>
            <loc>{{route('contacts', 'ru')}}</loc>
            <priority>0.6</priority>
            <changefreq>weekly</changefreq>
        </url>

        <url>
            <loc>{{route('blog', 'ru')}}</loc>
            <priority>0.6</priority>
            <changefreq>weekly</changefreq>
        </url>
        <url>
            <loc>{{route('blog', 'en')}}</loc>
            <priority>0.6</priority>
            <changefreq>weekly</changefreq>
        </url>

        @foreach($articles_categories as $category)
            <url>
                <loc>{{route('blog.category', ['locale'=>$category->lang, 'slug'=>$category->slug])}}</loc>
                <priority>0.6</priority>
                <changefreq>weekly</changefreq>
            </url>
        @endforeach
        @foreach($articles as $article)

            <url>
                <loc>{{route('blog.article', ['locale'=>$article->lang, 'slug'=>$category->slug ])}}</loc>
                <priority>0.6</priority>
                <changefreq>weekly</changefreq>
            </url>
        @endforeach
    </urlset>
@show

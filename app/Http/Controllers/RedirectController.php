<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\ArticleCategory;

class RedirectController extends Controller
{
    public function home()
    {
        return redirect()->route('home', 'en', 301);
    }

    public function contacts()
    {

        return redirect()->route('contacts', 'en', 301);
    }

    public function index()
    {
        return redirect()->route('blog', 'en', 301);
    }

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->firstOrFail();

        return redirect()->route('blog.article', ['locale'=>$article->lang, 'slug'=>$article->slug], 301);
    }

    public function category($slug)
    {
        $category = ArticleCategory::where('slug', $slug)->findOrFail();

        return redirect()->route('blog.category', ['locale'=>$category->lang, 'slug'=>$category->slug], 301);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Blog\Article;
use App\Models\Blog\ArticleCategory;
use App\Models\Blog\ArticlePopular;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request)
    {

        return view('app.blog.index', [
            'articles' => Article::with('categories')->lang()->where('is_active', true)->orderBy('id','desc')->paginate(6),
            'categories' => ArticleCategory::with('articles')->lang()->orderBy('id')->get(),
            'populars' => ArticlePopular::with('article')->lang()->orderBy('id')->get(),
        ]);
    }

    public function category($lang, $slug)
    {

        $category = ArticleCategory::where('slug', $slug)->lang()->firstOrFail();

        return view('app.blog.category', [
            'category' => $category,
            'articles' => $category->articles()->lang()->where('is_active', true)->orderBy('id')->paginate(6),
            'categories' => ArticleCategory::with('articles')->lang()->orderBy('id')->get(),
            'populars' => ArticlePopular::with('article')->lang()->orderBy('id')->get(),
        ]);
    }

    public function article($lang, $slug)
    {
        $article = Article::where('slug', $slug)->lang()->where('is_active', true)->firstOrFail();

        $lastFiveArticles = Article::with('categories')->lang()->where('is_active', true)->orderBy('id')->take(5)->get();


        return view('app.blog.article', [
            'article'=>$article,
            'lastFiveArticles'=>$lastFiveArticles,
        ]);
    }
}

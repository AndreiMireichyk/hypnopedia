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
            'articles' => Article::with('categories')->where('is_active', true)->orderBy('id','desc')->paginate(6),
            'categories' => ArticleCategory::with('articles')->orderBy('id')->get(),
            'populars' => ArticlePopular::with('article')->orderBy('id')->get(),
        ]);
    }

    public function category($slug)
    {
        $category = ArticleCategory::where('slug', $slug)->firstOrFail();

        return view('app.blog.category', [
            'category' => $category,
            'articles' => $category->articles()->where('is_active', true)->orderBy('id')->paginate(6),
            'categories' => ArticleCategory::with('articles')->orderBy('id')->get(),
            'populars' => ArticlePopular::with('article')->orderBy('id')->get(),
        ]);
    }

    public function article($slug)
    {
        $article = Article::where('slug', $slug)->where('is_active', true)->firstOrFail();

        $lastFiveArticles = Article::with('categories')->where('is_active', true)->orderBy('id')->take(5)->get();


        return view('app.blog.article', [
            'article'=>$article,
            'lastFiveArticles'=>$lastFiveArticles,
        ]);
    }
}

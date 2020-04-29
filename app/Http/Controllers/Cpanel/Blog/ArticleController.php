<?php

namespace App\Http\Controllers\Cpanel\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cpnale\Blog\ArticleRequest;
use App\Models\Blog\Article;
use App\Models\Blog\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('cpanel.articles.index', ['articles'=>Article::with('categories')->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpanel.articles.create', [
            'categories'=>ArticleCategory::all()->pluck('title', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return Response
     */
    public function store(ArticleRequest $request)
    {

        $article = new Article();

        $request->merge(['user_id' => Auth::user()->id]);

        $article->fill($request->except(['categories']))->save();

        $article->categories()->sync($request->get('categories'));

        return  redirect()->route('cp.articles.index')->with('alert', "Статья добавлена");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Response
     */
    public function edit(Article $article)
    {
        return view('cpanel.articles.edit', [
            'article'=>$article,
            'categories'=>ArticleCategory::all()->pluck('title', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return Response
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->fill($request->except(['categories']))->save();

        $article->categories()->sync($request->get('categories'));

        return  redirect()->route('cp.articles.index')->with('alert', "Статья $article->title изменена");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return Response
     * @throws \Exception
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return  redirect()->route('cp.articles.index')->with('alert', "Статья удалена");
    }
}

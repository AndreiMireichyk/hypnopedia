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
    protected $fill = ['title', 'is_active', 'meta_title', 'meta_keys', 'meta_desc', 'announcement', 'cover_path', 'lb_content', 'user_id', 'lang'];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang)
    {

        return view('cpanel.articles.index', ['articles'=>Article::with('categories')->lang()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($lang)
    {
        return view('cpanel.articles.create', [
            'categories'=>ArticleCategory::lang()->get()->pluck('title', 'id')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleRequest $request
     * @return Response
     */
    public function store($lang, ArticleRequest $request)
    {

        $article = new Article();

        $request->merge(['user_id' => Auth::user()->id, 'lang'=>app()->getLocale()]);

        $article->fill($request->only($this->fill))->save();

        $article->categories()->sync($request->get('categories'));

        return  redirect()->route('cp.articles.index', app()->getLocale())->with('alert', "Статья добавлена");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param Article $article
     * @return Response
     */
    public function edit($lang, Article $article)
    {
        return view('cpanel.articles.edit', [
            'article'=>$article,
            'categories'=>ArticleCategory::lang()->get()->pluck('title', 'id')
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleRequest $request
     * @param Article $article
     * @return Response
     */
    public function update($lang, ArticleRequest $request, Article $article)
    {
        $request->merge(['lang'=>app()->getLocale()]);

        $article->fill($request->only($this->fill))->save();

        $article->categories()->sync($request->get('categories'));

        return  redirect()->route('cp.articles.index', app()->getLocale())->with('alert', "Статья $article->title изменена");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Article $article
     * @return Response
     * @throws \Exception
     */
    public function destroy($lang, Article $article)
    {
        $article->delete();

        return  redirect()->route('cp.articles.index', app()->getLocale())->with('alert', "Статья удалена");
    }
}

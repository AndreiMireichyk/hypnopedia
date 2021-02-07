<?php

namespace App\Http\Controllers\Cpanel\Blog;

use App\Http\Controllers\Controller;

use App\Http\Requests\Cpnale\Blog\ArticlePopularRequest;
use App\Models\Blog\Article;
use App\Models\Blog\ArticlePopular;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticlePopularController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang)
    {
        $populars = ArticlePopular::with(['article.categories'])->lang()->get();

        $articles = Article::whereNotIn('id', $populars->pluck('article_id'))->lang()->get()->pluck('title', 'id');

        return  view('cpanel.article_popular.index', [
            'populars'=>$populars,
            'articles' => $articles
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store($lang, ArticlePopularRequest $request)
    {
        $request->merge(['lang'=>app()->getLocale()]);

        $popular = new ArticlePopular();

        $popular->fill($request->all(['article_id', 'lang']))->save();

        return redirect()->route('cp.populars.index', app()->getLocale())->with('alert', 'Статья добавлена в популярные');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($lang, ArticlePopular $popular)
    {
        $popular->delete();
        return redirect()->route('cp.populars.index', app()->getLocale())->with('alert', 'Статья удалена из популярных');
    }
}

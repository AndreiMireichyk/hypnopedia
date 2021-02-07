<?php

namespace App\Http\Controllers\Cpanel\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cpnale\Blog\ArticleCategoryRequest;
use App\Models\Blog\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ArticleCategoryController extends Controller
{

    protected $fill = ['title', 'slug', 'meta_title', 'meta_keys', 'meta_desc', 'lb_content', 'lang'];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($lang)
    {

        return view('cpanel.article_category.index', ['categories' => ArticleCategory::lang()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($lang)
    {
        return view('cpanel.article_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleCategoryRequest $request
     * @return Response
     */
    public function store($lang, ArticleCategoryRequest $request)
    {
        $request->merge(['lang'=>app()->getLocale()]);

        $category = new ArticleCategory();
        $category->fill($request->only($this->fill))->save();

        return redirect()->route('cp.categories.index', app()->getLocale())->with('alert', 'Тэг добавлен');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ArticleCategory $category
     * @return Response
     */
    public function edit($lang, ArticleCategory $category)
    {
        return view('cpanel.article_category.edit', ['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ArticleCategoryRequest $request
     * @param ArticleCategory $category
     * @return Response
     */
    public function update($lang, ArticleCategoryRequest $request, ArticleCategory $category)
    {
        $request->merge(['lang'=>app()->getLocale()]);
        $category->fill($request->only($this->fill))->save();
        return redirect()->route('cp.categories.index', app()->getLocale())->with('alert', 'Тэг изменен');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ArticleCategory $category
     * @return Response
     * @throws \Exception
     */
    public function destroy($lang, ArticleCategory $category)
    {
        $category->delete();
        return redirect()->route('cp.categories.index', app()->getLocale())->with('alert', 'Тэг удален');
    }
}

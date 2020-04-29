<?php

namespace App\Http\Controllers\Cpanel\Blog;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cpnale\Blog\ArticleCategoryRequest;
use App\Models\Blog\ArticleCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        return view('cpanel.article_category.index', ['categories' => ArticleCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('cpanel.article_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ArticleCategoryRequest $request
     * @return Response
     */
    public function store(ArticleCategoryRequest $request)
    {
        $category = new ArticleCategory();
        $category->fill($request->all())->save();
        return redirect()->route('cp.categories.index')->with('alert', 'Категория добавлена');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param ArticleCategory $category
     * @return Response
     */
    public function edit(ArticleCategory $category)
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
    public function update(ArticleCategoryRequest $request, ArticleCategory $category)
    {
        $category->fill($request->all())->save();
        return redirect()->route('cp.categories.index')->with('alert', 'Категория изменена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ArticleCategory $category
     * @return Response
     * @throws \Exception
     */
    public function destroy(ArticleCategory $category)
    {
        $category->delete();
        return redirect()->route('cp.categories.index')->with('alert', 'Категория удалена');
    }
}

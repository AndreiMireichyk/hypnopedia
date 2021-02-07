<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Auth Routs

Route::get('/', 'RedirectController@home')->name('r.home');
Route::get('/contacts', 'RedirectController@contacts')->name('r.contacts');
Route::get('/blog', "RedirectController@index")->name('r.blog');
Route::get('/blog/article/{slug}', "RedirectController@article")->name('r.blog.article');
Route::get('/blog/category/{slug}', "RedirectController@category")->name('r.blog.category');
Route::redirect('/cp', '/en/cp');
Route::get('/lang/ru', "LangController@setRu")->name('lang.ru');
Route::get('/lang/en', "LangController@setEn")->name('lang.en');
Route::get('/sitemap.xml', 'AppController@sitemap')->name('sitemap');

Route::prefix("{locale?}")->middleware('lang')->group(function (){
    Auth::routes(['register' => false]);


    Route::namespace('Cpanel')->prefix('cp')->name('cp.')->middleware('auth')->group(function () {
        Route::get('/', 'DashBoardController@index')->name('dashboard');
        Route::resource('/articles', 'Blog\ArticleController');
        Route::resource('/categories', 'Blog\ArticleCategoryController');
        Route::resource('/populars', 'Blog\ArticlePopularController');
        Route::resource('/users', 'User\UserController');
        //Route::resource('/users', 'DashBoardController@index')->name('dashboard');
    });


    Route::get('/', 'AppController@home')->name('home');
    Route::get('/contacts', 'AppController@contacts')->name('contacts');
    Route::post('/ph_subscribe', 'AppController@phSubscribe')->name('phSubscribe');



    Route::get('/blog', "BlogController@index")->name('blog');
    Route::get('/blog/article/{slug}', "BlogController@article")->name('blog.article');
    Route::get('/blog/category/{slug}', "BlogController@category")->name('blog.category');
});




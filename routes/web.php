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
Auth::routes(['register' => false]);
Route::get('/test', function () {
    return view('welcome');
})->name('home');
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

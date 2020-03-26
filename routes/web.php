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

Route::get('/', 'AppController@home')->name('home');
Route::get('/contacts', 'AppController@contacts')->name('contacts');
Route::post('/ph_subscribe', 'AppController@phSubscribe')->name('phSubscribe');

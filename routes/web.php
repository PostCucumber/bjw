<?php

/*
--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages/front-page');
});

Route::get('/the-walk', 'TheWalkController@index')->name('blog');

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/board-members', function () {
    return view('pages/board-members');
});

Route::get('/cpc', function () {
    return view('pages/cpc');
});

Route::get('/testimonies', function () {
    return view('pages/testimonies');
});

Route::get('/shop', function () {
    return view('pages/shop');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/contribute', function () {
    return view('pages/contribute');
});

Auth::routes();
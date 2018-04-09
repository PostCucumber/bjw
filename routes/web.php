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
    return view('front-page');
});

Route::get('/kiosk', function () {
    return view('kiosk');
});

Route::get('/the-walk', 'TheWalkController@index')->name('blog');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
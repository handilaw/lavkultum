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

Route::get('/', 'KultumController@home');
Route::get('/about', function () {
    return view('layouts.about');
});
Route::get('/contact', function () {
    return view('layouts.contact');
});
Route::get('/post', function () {
    return view('layouts.post');
});

Route::resource('/kultum', 'KultumController');
Route::resource('/kategori', 'KategoriController');
Route::resource('/santri', 'SantriController');
Route::get('/cari', 'KultumController@cari');
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

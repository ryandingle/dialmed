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


Route::middleware(['web'])->group(function () {
    Auth::routes(['verify' => true]);
    Auth::routes();

    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/blog', 'BlogController@index')->name('blog');
    Route::get('/blog/{url}', 'BlogController@show')->name('blog.show');


    Route::get('/services', 'ServicesController@index')->name('services');
    Route::get('/about', 'AboutController@index')->name('about');
    Route::get('/contact', 'ContactController@index')->name('contact');
    Route::get('/gallery', 'GalleryController@index')->name('gallery');
});

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    
});

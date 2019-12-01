<?php

/**
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get(
    '/',
    function () {
        $about = App\About::all();
        //$about=App\About::take(2)->get();
        //$about=App\About::paginate(2);
        //$about=App\About::latest()-get();;
        return view(
            'pages.about',
            [
                'abouts' => App\About::all()
            ]
        );
        //return View::make('pages.about');
    }
)->name('about');


Route::get('/pricelist', 'ServiceController@index')->name('pricelist');
Route::get('/pricelist/{service}', 'ServiceController@show')->name('pricelist.show');

Route::get('/team', 'TeammateController@index')->name('team');

Route::get(
    '/gallery',
    function () {
        return View::make('pages.gallery');
    }
)->name('gallery');

Route::get(
    '/contacts',
    function () {
        return View::make('pages.contacts');
    }
)->name('contacts');


Route::get('/news', 'ArticleController@index')->name('news');
Route::get('/news/{article}', 'ArticleController@show')->name('news.show');

Route::get('/comments', 'CommentController@index')->name('comments');
Route::post('/comments', 'CommentController@store');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

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
//About
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

//Pricelist
Route::get('/pricelist', 'ServiceController@index')->name('pricelist');
Route::get('/pricelist/{service}', 'ServiceController@show')->name('pricelist.show');

//Team
Route::get('/team', 'TeammateController@index')->name('team');

//Gallery
Route::get(
    '/gallery',
    function () {
        return View::make('pages.gallery');
    }
)->name('gallery');

//Contacts
Route::get(
    '/contacts',
    function () {
        return View::make('pages.contacts');
    }
)->name('contacts');

//News
Route::get('/news', 'ArticleController@index')->name('news');
Route::get('/news/{article}', 'ArticleController@show')->name('news.show');

//Comments
Route::get('/comments', 'CommentController@index')->name('comments');
Route::post('/comments', 'CommentController@store');
Route::get('/comments/{comment}/edit', 'CommentController@edit')
    ->name('comments.edit')
    ->middleware('auth');
Route::put('/comments/{comment}', 'CommentController@update')
    ->name('comments.update')
    ->middleware('auth');
Route::delete('/comments/{comment}', 'CommentController@delete')
    ->name('comments.delete')
    ->middleware('auth');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// только для админа
Route::group( [ 'middleware' => 'admin' ], function () {
    Route::get('/news/create', 'ArticleController@create')->name('news.create');
    Route::post('/news/create', 'ArticleController@store')->name('news.store');
    Route::get('/news/{article}/edit', 'ArticleController@edit')->name('news.edit');
    Route::put('/news/{article}', 'ArticleController@update')->name('news.update');
    Route::delete('/news/{article}', 'ArticleController@destroy')->name('news.destroy');
    });

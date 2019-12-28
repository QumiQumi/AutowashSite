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

use Illuminate\Routing\RouteGroup;

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
Route::group(['prefix' => 'pricelist'], function () {
    Route::get('/', 'ServiceController@index')->name('pricelist');
    Route::group(['middleware' => 'admin'], function () {
        Route::post('/', 'ServiceController@store')->name('pricelist.store');
        Route::put('/{service}', 'ServiceController@update')->name('pricelist.update');
        Route::delete('/{service}', 'ServiceController@destroy')->name('pricelist.destroy');
    });
    Route::get('/{service}', 'ServiceController@show')->name('pricelist.show');
});

//Team
Route::get('/team', 'TeammateController@index')->name('team');

//Contacts
Route::get(
    '/contacts',
    function () {
        return View::make('pages.contacts');
    }
)->name('contacts');

//News
Route::group(['prefix' => 'news'], function () {
    Route::get('/', 'ArticleController@index')->name('news');
    //Для админа
    Route::group(['middleware' => 'admin'], function () {
        Route::get('/create', 'ArticleController@create')->name('news.create');
        Route::post('/create', 'ArticleController@store')->name('news.store');
        Route::get('/{article}/edit', 'ArticleController@edit')->name('news.edit');
        Route::put('/{article}', 'ArticleController@update')->name('news.update');
        Route::delete('/{article}', 'ArticleController@destroy')->name('news.destroy');
    });
    Route::get('/{article}', 'ArticleController@show')->name('news.show');
});

//Comments
Route::group(['prefix' => 'comments'], function () {
    Route::get('/', 'CommentController@index')->name('comments');
    Route::post('/', 'CommentController@store');
    //Для авторизованного пользователя
    Route::group(['middleware' => 'auth'], function () {
        Route::put('/{comment}', 'CommentController@update')
        ->name('comments.update');
        Route::delete('/{comment}', 'CommentController@delete')
        ->name('comments.delete');
        Route::get('/{comment}/edit', 'CommentController@edit')
            ->name('comments.edit')->middleware(['admin']);
    });
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

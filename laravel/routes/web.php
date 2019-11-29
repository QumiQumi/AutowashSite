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


Route::get(
    '/team',
    function () {
        return View::make('pages.team');
    }
)->name('team');

Route::get(
    '/gallery',
    function () {
        return View::make('pages.gallery');
    }
);
Route::get(
    '/contact',
    function () {
        return View::make('pages.contact');
    }
);
Route::get(
    '/news',
    function () {
        return View::make('pages.news');
    }
);
// Route::get(
//     '/comment',
//     function () {
//         return View::make('pages.comment');
//     }
// );
Route::get('/comment', 'CommentController@index')->name('comment');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

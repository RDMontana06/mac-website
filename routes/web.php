<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view(
        'landing.index',
        array(
            'header' => 'home',
        )
    );
});
Route::get('about-us', function () {
    return view(
        'inner_pages.about-us',
        array(
            'header' => 'about-us',
        )
    );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/changepassword', 'HomeController@changepassword')->name('changepassword');
    Route::post('/edit_password', 'HomeController@update')->name('update.password');

    Route::resource('posts', 'PostController');

    Route::get('post/json','PostController@json');
});



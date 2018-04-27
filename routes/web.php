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

Auth::routes();

Route::get('/', 'PostsController@index')->name('posts.index');

Route::middleware('auth')->group(function() {
    Route::resource('posts', 'PostsController')->except([
        'index', 'show'
    ]);
    Route::resource('users', 'UsersController')->except([
        'index', 'show'
    ]);
});

Route::resource('posts', 'PostsController')->only([ 'show' ]);
Route::resource('users', 'UsersController')->only([ 'index', 'show' ]);
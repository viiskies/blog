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
Route::get('/post/{id}', 'PostsController@show')->name('posts.single');

Route::middleware('auth')->group(function() {
    Route::get('/create', 'PostsController@create')->name('posts.create');
    Route::post('/post/store', 'PostsController@store')->name('posts.store');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('posts.edit');
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('posts.delete');
    Route::post('/post/update/{id}', 'PostsController@update')->name('posts.update');

    Route::post('/user/store', 'UsersController@store')->name('users.store');
    Route::get('/user/edit/{id}', 'UsersController@edit')->name('users.edit');
    Route::get('/user/delete/{id}', 'UsersController@destroy')->name('users.delete');
    Route::post('/user/update/{id}', 'UsersController@update')->name('users.update');
});

Route::get('/user/{id}', 'UsersController@show')->name('users.single');
Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/registration', 'UsersController@create')->name('users.create');


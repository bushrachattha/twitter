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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('Posts/{post}', 'PostController@show')->name('post.show');

Route::post('comment/save', 'PostController@store');

Route::get('posts', 'PostController@index')->name('posts.index');
Route::post('posts', 'PostController@savePost');


Route::delete('/delete-post', 'homeController@deletePost')->name('delete_post');


Route::get('users/{user}', 'UserController@show')->name('user.show');

Route::get('users/{user}/follow', 'UserController@follow')->name('user.follow');

Route::get('users/{user}/unfollow', 'UserController@unfollow')->name('user.unfollow');

//Route::get('posts', 'PostController@index')->name('posts.index');

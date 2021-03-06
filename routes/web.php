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
Route::resource('category', 'CategoryController');
Route::resource('post', 'PostController');
Route::resource('comment', 'CommentController');
Route::resource('posttag', 'PostTagController');
Route::resource('tag', 'TagController');


Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('/','HomeController@index');
    Route::get('home','HomeController@index');
    Route::get('blog/{post}','PostController@show')->name('blog.show');
});
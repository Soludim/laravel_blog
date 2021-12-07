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

Route::Auth();

Route::get('home', 'PagesController@getIndex')->name('home');

Route::get('contact', 'PagesController@getContact')->middleware('auth');

Route::get('about', 'PagesController@getAbout');

Route::get('post/{id}', 'PagesController@getPost')->name('post');

Route::get('/', 'PagesController@getIndex');

Route::resource('ups', 'UserPostController');

Route::resource('comments', 'CommentController');
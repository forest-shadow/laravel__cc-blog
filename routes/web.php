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

Route::get('/', [
    'as'    => 'home',
    'uses'  => 'PostsController@index'
]);

Route::get('/post/{post}', [
    'as'    => 'post.show',
    'uses'  => 'PostController@show'
]);

Route::get('/posts/{tag}', [
    'as'    => 'posts.tagged',
    'uses'  => 'PostsController@tagged'
]);

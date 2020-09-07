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

Route::get('/', 'PostController@index')->name('top');;

Route::get('/posts/detail/{id}', 'PostController@show');
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/posts/entry', 'PostController@create')->name('entry');
Route::post('/posts/entry', 'PostController@store')->name('store');

// Route::get('/posts/entry', 'PostController@create');

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
Route::get('/home', function () {
    return view('layouts.app');
});

/* supplemented custom methods for PostController */
Route::get('/posts?=new', 'PostController@new');
Route::get('/posts?=popular', 'PostController@popular');
Route::resource('/posts', 'PostController');

Route::resource('/users', 'UserController')->names([
    'show' => 'users.profile',
]);

/* Search autocomplete */
Route::get('autocomplete', 'SearchController@autocomplete');



// TEMP - testing
Route::get('/sample-post', function () {
    return view('components.post');
});

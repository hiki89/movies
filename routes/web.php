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

Route::get('/movies', 'MoviesController@index')->name('index');

Route::get('/movies/{id}','MoviesController@show')->name('show');

Route::get('/create', 'MoviesController@create')->name('create');

Route::post('/create', 'MoviesController@store')->name('store');

Route::post('movies/{movie}/comments', 'CommentsController@store');

Route::get('/genres/{genre}', 'GenresController@show'); 


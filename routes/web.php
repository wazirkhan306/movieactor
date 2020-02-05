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

//movies
Route::get('movie', 'MovieController@index')->name('movie');
Route::post('movie/create', 'MovieController@create')->name('movie.create');

//actors
Route::get('actor', 'ActorController@index')->name('actor');
Route::post('actor/create', 'ActorController@create')->name('actor.create');

//movies list
Route::get('movies-list', 'HomeController@index')->name('movies.list');

//Single Movie
Route::get('single-movie', 'HomeController@singleMovie')->name('single.movie');

//Single Actor
Route::get('single-actor', 'HomeController@singleActor')->name('single.actor');
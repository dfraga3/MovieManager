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

Route::get("/", "PagesController@home");

Route::get('/home', 'HomeController@index');

Route::resource("movies", "MoviesController");
Route::get("/movies/{id}/delete", "MoviesController@delete");

Auth::routes();

Route::get('names', function()
{
    return array(
        1 => "John",
        2 => "Mary",
        3 => "Steven"
    );
});

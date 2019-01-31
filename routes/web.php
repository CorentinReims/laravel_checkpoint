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

Route::get('/add-movies', 'AddMoviesController@show') -> name('movieForm');
Route::post('/add-movies', 'AddMoviesController@addmovie') -> name('addMovie');

Route::get('movies-list', 'MoviesListController@show') -> name ('movies-list');

//Search Routes

Route::get('Action', 'SearchController@showAction') -> name('action');

Route::get('Aventure', 'SearchController@showAventure') -> name('aventure');

Route::get('Comedie', 'SearchController@showComedie') -> name('comedie');

Route::get('Drame', 'SearchController@showDrame') -> name('drame');

Route::get('Fantastique', 'SearchController@showFantastique') -> name('fantastique');

Route::get('Horreur', 'SearchController@showHorreur') -> name('horreur');

Route::get('Policier', 'SearchController@showPolicier') -> name('policier');

Route::get('ScienceF', 'SearchController@showScienceF') -> name('scienceF');

Route::get('Thriller', 'SearchController@showThriller') -> name('thriller');

Route::get('delete/{id}', 'MoviesListController@destroy');

Route::get('update/{id}', 'MoviesListController@update');
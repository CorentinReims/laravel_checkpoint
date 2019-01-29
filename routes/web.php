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

Route::get('movies-list', function(){
    if (Auth::user()){
    $userId = Auth::user() -> id;
    
    // $userMovies = DB::select(`SELECT * FROM movies WHERE user_id = {{$userId}}`, [1]);
    $userMovies = App\Movies::where('user_id', $userId)->get();
    // WHERE('user_id', $userId);
    

    return view ('moviesList', [
        'movies' => $userMovies,
        'userId' => $userId
    ]);
    }
});

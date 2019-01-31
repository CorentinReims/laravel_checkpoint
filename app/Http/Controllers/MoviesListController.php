<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Redirect;
// use Illuminate\Http\Request;
use App;

class MoviesListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $currentUser_id = Auth::user() -> id;
            
        // $userMovies = DB::select(`SELECT * FROM movies WHERE user_id = {{$userId}}`, [1]);
        $userMovies = App\Movies::where('user_id', $currentUser_id)->get();
            
        
        return view ('moviesList', [
            'movies' => $userMovies,
            'userId' => $currentUser_id
        ]);
            
    }

    public function destroy($id)
    {
        $deleteSelectedMovie = App\Movies::where('id', [$id])-> delete();;
        return back();
    }

    public function update($id)
    {
        
    }
}
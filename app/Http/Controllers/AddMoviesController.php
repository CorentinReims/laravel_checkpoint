<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App;

class AddMoviesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return view('addMovies');
    }

    public function addmovie(Request $request)
    {
        $this->validate($request, [
            'poster'  => 'required|image|max:5000'
        ]);
      
        $image = $request->file('poster');
      
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
      
        $image->move(public_path('images'), $new_name);

        $userId = Auth::user() -> id;
            
      
        $movie = new App\Movies;
        $movie -> user_id = $userId;
        $movie -> title = request('title');
        $movie -> poster = $new_name;
        $movie -> synopsis = request('synopsis');
        $movie -> release_date = request('release_date');
        $movie -> save();

       
        return view ('moviePrevisu', [
            'poster' => $new_name,
            'movie' => $movie
        ]);
    }
}
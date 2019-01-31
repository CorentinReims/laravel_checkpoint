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
        
        $userId = Auth::user() -> id;
      
        $new_name = $userId . '_' . rand() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('images'), $new_name);  
      
        $movie = new App\Movies;
        $movie -> user_id = $userId;
        $movie -> title = request('title');
        $movie -> poster = $new_name;
        $movie -> category = request('category');
        $movie -> synopsis = request('synopsis');
        $movie -> release_date = request('release_date');
        $movie -> save();

       
        return view ('moviePrevisu', [
            'poster' => $new_name,
            'movie' => $movie
        ]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\Request;
use App;

class SearchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function showAction()
    {
        $currentUser_id = Auth::user() -> id;

        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Action']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);
    }

    public function showAventure()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Aventure']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showComedie()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Comédie']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showDrame()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Drame']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showFantastique()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Fantastique']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showHorreur()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Horreur']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showPolicier()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Policier']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showScienceF()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Science-fiction']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }

    public function showThriller()
    {
        $currentUser_id = Auth::user() -> id;
        $userMoviesSelected = App\Movies::where([
            ['user_id', '=', $currentUser_id],
            ['category', '=', 'Thriller']])
            ->get();

        return view ('moviesList', [
            'movies' => $userMoviesSelected,
            'userId' => $currentUser_id
        ]);

    }
}
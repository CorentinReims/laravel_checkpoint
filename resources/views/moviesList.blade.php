@extends('layouts.app')

@section('content')
    <div> 
        <a href="{{ url('/add-movies') }}">Ajouter un film ?</a>
        @foreach ($movies as $movie)
            <div class="container">
                <div class="card" style="width: 18rem;">
                        <img src="/images/{{$movie->poster}}" class="card-img-top" alt="affiche">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie->title}}</h5>
                            
                            <p class="card-text">Resumé : {{$movie->synopsis}}</p>
                            <p class="card-text">Date de sortie : {{$movie->release_date}}</p>
                        </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
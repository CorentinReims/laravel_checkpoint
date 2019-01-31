@extends('layouts.app')

@section('content')
    <div class="container"> 
        <div class="row justify-content-center">
        <div class="col-12 text-center">
                <h3>Rechercher par catégories</h3>
            </div>

            <div class="col-12 text-center mb-1">
                <a href="{{ url('Action') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Action
                    </button>
                </a>
                <a href="{{ url('Aventure') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Adventure
                    </button>
                </a>
                <a href="{{ url('Comedie') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Comedy
                    </button>
                </a>
                <a href="{{ url('Drame') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Drame
                    </button>
                </a>
                <a href="{{ url('Fantastique') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Fantastique
                    </button>
                </a>
                <a href="{{ url('Horreur') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Horror
                    </button>
                </a>
                <a href="{{ url('Policier') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Police
                    </button>
                </a>
                <a href="{{ url('ScienceF') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Science-Fiction
                    </button>
                </a>
                <a href="{{ url('Thriller') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Thriller
                    </button>
                </a>
            </div>
            <div class="col-12 text-center mb-5">
                <a href="{{ url('movies-list') }}">
                    <button style="backgroundColor: rgba(210, 227, 17, 0.5);border:1px solid black">Tous les films par date d'ajout
                    </button>
                </a>
            </div>

        @if(count($movies) > 0)
            <div class="col-12 text-center">
                <h3><a href="{{ url('/add-movies') }}">Ajouter un nouveau film ?</a></h3>
            </div>

            
            @foreach ($movies as $movie)
                    <div class="card m-4" style="width: 18rem;border:1px solid black">
                            <img src="/images/{{$movie->poster}}" class="card-img-top" alt="affiche">
                            <div class="card-body" style="backgroundColor: rgba(210, 227, 17, 0.5);borderTop:1px solid black">
                                <h5 class="card-title">{{$movie->title}}</h5>
                                
                                <p class="card-text">Resumé : {{$movie->synopsis}}</p>
                                <p class="card-text">Catégorie : {{$movie->category}}</p>
                                <p class="card-text">Date de sortie : {{$movie->release_date}}</p>
                                <a href='delete/{{ $movie->id }}'>
                                    <i class="fas fa-trash"></i>
                                </a>
                                <a href="">
                                    <i class="fas fa-pencil-alt"></i>
                                </a>
                            </div>
                    </div>
            @endforeach
        @else
            <div>
                @if(strpos(Request::url(), 'movies-list') == true)
                    <p>Tu n'as aucuns films dans ta liste !
                        <a href="{{ url('/add-movies') }}">Ajoutes-en !</a>
                    </p>
                @else
                    <p>Tu n'as ajouté aucuns films dans cette catégorie !
                        <a href="{{ url('/add-movies') }}">Ajoutes-en !</a>
                    </p>
                @endif
            </div>
        @endif
        </div>
    </div>
@endsection
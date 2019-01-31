@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Film bien ajouté !</h1>
   <div class="card" style="width: 18rem;">
        <img src="/images/{{$poster}}" class="card-img-top" alt="affiche">
        <div class="card-body">
            <h5 class="card-title">{{$movie->title}}</h5>
            <p class="card-text">Resumé : {{$movie->synopsis}}</p>
            <p class="card-text">Catégorie : {{$movie->category}}</p>
            <p class="card-text">Date de sortie : {{$movie->release_date}}</p>
           
        </div>
        <a href="{{ url('/add-movies') }}">Ajouter un autre film ?</a>
</div>
@endsection
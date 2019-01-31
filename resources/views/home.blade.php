@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>
                        Bienvenue<br />
                        Vous êtes connecté en tant que {{ Auth::user()->firstname }} {{ Auth::user()->lastname }} <br />
                        <a href="{{ url('/add-movies') }}">Ajoute un film !</a><br />
                        <a href="{{ url('/movies-list') }}">Ma liste de films</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

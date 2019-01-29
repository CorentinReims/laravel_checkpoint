@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajoute un film') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('addMovie') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="poster" class="col-md-4 col-form-label text-md-right">{{ __('Affiche') }}</label>

                            <div class="col-md-6">
                                <input id="poster" type="text" class="form-control{{ $errors->has('poster') ? ' is-invalid' : '' }}" name="poster" value="{{ old('poster') }}" required autofocus>

                                @if ($errors->has('poster'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('poster') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->
                        <div class="form-group row">
                            <label for="poster" class="col-md-4 col-form-label text-md-right">
                                Affiche
                            </label>
                            <div class="col-md-6">
                                <input type="file" name="poster" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="synopsis" class="col-md-4 col-form-label text-md-right">{{ __('Resumé') }}</label>

                            <div class="col-md-6">
                                <input id="synopsis" type="text" class="form-control{{ $errors->has('synopsis') ? ' is-invalid' : '' }}" name="synopsis" value="{{ old('synopsis') }}" required autofocus>

                                @if ($errors->has('synopsis'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('synopsis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="release_date" class="col-md-4 col-form-label text-md-right">{{ __('Date de sortie') }}</label>

                            <div class="col-md-6">
                                <input id="release_date" type="date" class="form-control{{ $errors->has('release_date') ? ' is-invalid' : '' }}" name="release_date" value="{{ old('release_date') }}" required>

                                @if ($errors->has('release_date'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('release_date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Ajouter') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
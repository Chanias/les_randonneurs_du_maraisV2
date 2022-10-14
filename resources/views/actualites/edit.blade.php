@extends('layouts.app')

@section('title')
    MOFIFICATION D'UNE ACTUALITE
@endsection

@section('content')
<div class="container">
    <div class="row text-center md-6 mx-auto">
        <div class="col-md-12">
            <h2>Modifier une actualité</h2>
        </div>
    </div>

    @if (isset($actualite))
    <form method="POST" action="{{ route('actualite.update', $actualite) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row text-center">
            <div class="field">
                <div class="col-md-6 mx-auto">
                    <label for="label" class="mt-3 fs-4">Nouveau titre :</label>
                    <div class="control">
                        <input class="input" id="content" type="text" name="titre"
                            value="{{ $actualite->titre }}">
                    </div>
                    @if ($errors->has('titre'))
                        <p class="help is-danger">{{ $errors->first('titre') }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="row text-center">
            <div class="field">
                <div class="col-md-6 mx-auto">
                    <label for="label" class="mt-3 fs-4">Nouveau texte :</label>
                    <div class="control">
                        <input class="input" id="content" type="text" name="content"
                            value="{{ $actualite->content }}">
                    </div>
                    @if ($errors->has('content'))
                        <p class="help is-danger">{{ $errors->first('content') }}</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="row text-center" id="image">
            <div class="col-md-6 mx-auto">
                <label for="image" class="fs-4 mt-3">Image : </label>
                <input type="file" name="image" class="form-control ">
            </div>
        </div>     

        <div class="field text-center">
            <div class="control">
                <button type="submit" class="btn btn-success">
                    {{ __('Modifier l\'article') }}
                </button>
            </div>
        </div>
    </form>
 @endif





@endsection
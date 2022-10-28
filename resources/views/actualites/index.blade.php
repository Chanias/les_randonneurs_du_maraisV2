@extends('layouts.app')

@section('title')
    LES ACTUALITES
@endsection

@section('content')
    <div class="container">

        <!-- On parcourt la liste des actualités -->
        <h2>Les Actualités de l'association</h2>
        @foreach ($actualites as $actualite)
            <div class="card-group">
                <div class="card">
                    <img class="card-img" src="{{ asset("images/actualites/$actualite->image") }}" alt="actualites"
                        style="width:18rem">
                    <div class="card-body">
                        <h5 class="card-title">{{ $actualite->titre }}</h5>
                        <p class="card-text">{{ $actualite->content }}</p>
                        <p class="card-text"><small class="text-muted">{{ $actualite->created_at }}</small></p>
                        <a href="{{ route('actualite.show', $actualite) }}">
                            <input type="submit" class="btn btn-primary" value="Détails de l'actualité">
                        </a>
                    </div>
                </div>




            </div>
        @endforeach
    @endsection

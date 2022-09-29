@extends('layouts.app')

@section('title')
    DETAILS D'UNE ACTUALITE
@endsection

@section('content')
<div class="container">
    <h2>{{$actualite->titre}}</h2>
    <div class="card">
        <img class="card-img" style="width: 18rem" src="{{ asset("images/actualites/$actualite->image") }}"
        alt="actualites">
      <div class="card-body">
        <p class="card-text">{{$actualite->texte}}</p>
        <p class="card-text"><small class="text-muted">{{$actualite->created_at}}</small></p>
      </div>
    </div>
  </div>


@endsection
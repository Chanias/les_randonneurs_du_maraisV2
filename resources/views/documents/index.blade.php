@extends('layouts/app')

@section('title')
   Les documents
@endsection

@section('content')
<h1>Les comptes rendus</h1>
@foreach ($documents as $document)
@if($document)
    <div class="card text-center" style="width: 18rem;">
        <h3 class="card-title ">{{ $document->nom }}</h3>
        <div class="card-body">
            <img class="card-img" src="{{ asset("images/documents/$document->image") }}"
                alt="Documents">
        </div>

       
    </div>

@endforeach

@endsection
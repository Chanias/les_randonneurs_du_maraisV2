@extends('layouts.app')

@section('title')
    MOFIFICATION D'UNE CARTE
@endsection

@section('content')
<div class="container">
    <div class="row text-center md-6 mx-auto">
        <div class="col-md-12">
            <h2>Modifier une carte</h2>
        </div>
    </div>
@if(isset($carte))
<form method="POST" action="{{ route('carte.update', $carte) }}">
    @csrf
    @method('PUT')
    <div class="row text-center">
        <div class="field">
            <div class="col-md-6 mx-auto">
                <label for="label" class="mt-3 fs-4">Nouveau nom de carte :</label>
                <div class="control">
                    <input class="input" id="content" type="text" name="date"
                        value="{{ $randonnee->date }}">
                </div>
                @if ($errors->has('date'))
                    <p class="help is-danger">{{ $errors->first('date') }}</p>
                @endif
            </div>
        </div>
        @endif

</div>
    @endsection
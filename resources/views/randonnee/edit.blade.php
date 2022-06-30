@extends('layouts.app')

@section('title')
    MOFIFICATION DES RANDONNEES
@endsection

@section('content')

<div class="Container">
    <div class="row text-center md-6 mx-auto">
        <div class="col-md-12">
            <h2>Modifier une randonnée</h2>
        </div>
    </div>

    @if (isset($randonnee))
        <form method="POST" action="{{ route('randonnee.update', $randonnee) }}">
            @csrf
            @method('PUT')
            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Nouvelle date :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="date_rando"
                                value="{{ $randonnee->date_rando }}">
                        </div>
                        @if ($errors->has('date_rando'))
                            <p class="help is-danger">{{ $errors->first('date_rando') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Nouvel horaire :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="heure_depart"
                                value="{{ $randonnee->heure_depart }}">
                        </div>
                        @if ($errors->has('heure_depart'))
                            <p class="help is-danger">{{ $errors->first('heure_depart') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Nouveau point de départ :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="depart_rando"
                                value="{{ $randonnee->depart_rando }}">
                        </div>
                        @if ($errors->has('depart_rando'))
                            <p class="help is-danger">{{ $errors->first('depart_rando') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Circuit :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="circuit"
                                value="{{ $randonnee->circuit }}">
                        </div>
                        @if ($errors->has('circuit'))
                            <p class="help is-danger">{{ $errors->first('circuit') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Nombre de kilomètres :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="kilometres"
                                value="{{ $randonnee->kilometres }}">
                        </div>
                        @if ($errors->has('kilometres'))
                            <p class="help is-danger">{{ $errors->first('kilometres') }}</p>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="field">
                    <div class="col-md-6 mx-auto">
                        <label for="label" class="mt-3 fs-4">Nouveaux animateurs :</label>
                        <div class="control">
                            <input class="input" id="content" type="text" name="animateurs"
                                value="{{ $randonnee->animateurs }}">
                        </div>
                        @if ($errors->has('animateurs'))
                            <p class="help is-danger">{{ $errors->first('animateurs') }}</p>
                        @endif
                    </div>
                </div>
            </div>

            <div class="field text-center">
                <div class="control">
                    <button type="submit" class="btn btn-success">
                        {{ __('Modifier randonnée') }}
                    </button>
                </div>
            </div>
        </form>
     @endif
</div>

@endsection
@extends('layouts.app')

@section('title')
    MOFIFICATION D'UNE RANDONNEE
@endsection

@section('content')
    <div class="container">
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
                            <label for="label" class="mt-3 fs-4">Nouvelle date de randonnée :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="date"
                                    value="{{ $randonnee->date }}">
                            </div>
                            @if ($errors->has('date'))
                                <p class="help is-danger">{{ $errors->first('date') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouvelle heure de rendez vous :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="heure_rdv"
                                    value="{{ $randonnee->heure_rdv }}">
                            </div>
                            @if ($errors->has('heure_rdv'))
                                <p class="help is-danger">{{ $errors->first('heure_rdv') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouvelle heure de départ :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="heure_depart"
                                    value="{{ $randonnee->heure_depart }}">
                            </div>
                            @if ($errors->has('heure_depart'))
                                <p class="help is-danger">{{ $errors->first('heure_depart') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveau lieu de départ :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="point_de_depart"
                                    value="{{ $randonnee->point_de_depart }}">
                            </div>
                            @if ($errors->has('point_de_depart'))
                                <p class="help is-danger">{{ $errors->first('point_de_depart') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveau nom de randonnée :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="nom"
                                    value="{{ $randonnee->nom }}">
                            </div>
                            @if ($errors->has('nom'))
                                <p class="help is-danger">{{ $errors->first('nom') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveau commentaire :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="commentaires"
                                    value="{{ $randonnee->commentaires }}">
                            </div>
                            @if ($errors->has('commentaires'))
                                <p class="help is-danger">{{ $errors->first('commentaires') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveau nombre de kilomètres :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="kilometres"
                                    value="{{ $randonnee->kilometres }}">
                            </div>
                            @if ($errors->has('kilometres'))
                                <p class="help is-danger">{{ $errors->first('kilometres') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveau lien photos :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="lien_photos"
                                    value="{{ $randonnee->lien_photos }}">
                            </div>
                            @if ($errors->has('lien_photos'))
                                <p class="help is-danger">{{ $errors->first('lien_photos') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouvelle carte :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="carte"
                                    value="{{ $randonnee->carte }}">
                            </div>
                            @if ($errors->has('carte'))
                                <p class="help is-danger">{{ $errors->first('carte') }}</p>
                            @endif
                        </div>
                    </div>

                    <div class="field">
                        <div class="col-md-6 mx-auto">
                            <label for="label" class="mt-3 fs-4">Nouveaux animateurs :</label>
                            <div class="control">
                                <input class="input" id="content" type="text" name="animateur"
                                    value="{{ $randonnee->animateur }}">
                            </div>
                            @if ($errors->has('animateur'))
                                <p class="help is-danger">{{ $errors->first('animateur') }}</p>
                            @endif
                        </div>
                    </div>
                </div>
    </div>
    </div>

    <div class="field text-center">
        <div class="control">
            <button type="submit" class="btn btn-success">
                {{ __('Modifier la randonnee') }}
            </button>
        </div>
    </div>

    </form>
    @endif
    </div>
@endsection

@extends('layouts/app')

@section('title')
    Mon compte
@endsection

@section('content')
    <div class="container">
        <h1 class="text-center p-2">Mon compte</h1>
        <h4 class="text-center p-3">Bienvenue {{ $user->nom }} {{ $user->prenom }} ! </h4>
        <div class="row">

            <div class="col-md-6">

                <h4 class="text-center p-4">Mes informations</h4>

                <div class="row">
                    <div class="col-10 offset-1 text-center">
                        <form class="col-12 mx-auto p-5 border " action="{{ route('compte.update') }}" method="POST">
                            @csrf
                            @method('PUT')


                            <input type="hidden" name="email" value="{{ $user->email }}" id="email">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" value="{{ $user->email }}"
                                    id="email">
                            </div>

                            <input type="hidden" name="num_telephone_fixe" value="{{ $user->num_telephone_fixe }}"
                                id="num_telephone_fixe">
                            <div class="form-group">
                                <label for="num_telephone_fixe">Numéro de téléphone fixe</label>
                                <input type="text" class="form-control" name="num_telephone_fixe"
                                    value="{{ $user->num_telephone_fixe }}" id="num_telephone_fixe">
                            </div>

                            <input type="hidden" name="num_telephone_portable" value="{{ $user->num_telephone_portable }}"
                                id="num_telephone_portable">
                            <div class="form-group">
                                <label for="num_telephone_portable">Numéro de téléphone portable</label>
                                <input type="text" class="form-control" name="num_telephone_portable"
                                    value="{{ $user->num_telephone_portable }}" id="num_telephone_portable">
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>

            </div>

            <div class="col-md-6">

                <h4 class="text-center p-4">Modifier mon mot de passe</h4>

                <div class="row">
                    <div class="col-10 offset-1 text-center">
                        <form class="col-12 mx-auto p-5 border " action="{{ route('compte.updatePassword') }}"
                            method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group ">
                                <label class="label">Mot de passe actuel</label>
                                <div class="control">
                                    <input class="form-control" type="password" name="Password">
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('Password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="label">Nouveau mot de passe</label>
                                <div class="control">
                                    <input class="form-control" type="password" name="newPassword">
                                </div>
                                @if ($errors->has('password'))
                                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="label">Confirmez le mot de passe</label>
                                <div class="control">
                                    <input class="form-control" type="password" name="newPassword_confirmation">
                                </div>
                                @if ($errors->has('password_confirmation'))
                                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                                @endif
                                @if ($errors->has('password_error'))
                                    <p class="help is-danger">{{ $errors->first('password_error') }}</p>
                                @endif
                            </div>
                            <button type="submit" class="btn btn-primary">Modifier</button>
                        </form>
                    </div>
                </div>

            </div>
            <!----------------------------------------MODIFIER MON ADRESSE-------------------------------------------------------->

            <div class="row">
                <div class="col-md-8 offset-2 text-center">
                    <h4 class="text-center p-4">Modifier mon adresse</h4>
                    <form class="col-12 mx-auto p-5 border " action="{{ route('adresse.update', $user->adresse) }}"
                        method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="adresse">Adresse</label>
                            <input type="adresse" class="form-control" name="adresse" value="{{ $user->adresse->adresse }}"
                                id="adresse">
                        </div>

                        <div class="form-group">
                            <label for="code_postal">Code postal</label>
                            <input type="text" class="form-control" name="code_postal"
                                value="{{ $user->adresse->code_postal }}" id="code_postal">
                        </div>

                        <div class="form-group">
                            <label for="ville">Ville</label>
                            <input type="text" class="form-control" name="ville"
                                value="{{ $user->adresse->ville }}" id="ville">
                        </div>
                        <button type="submit" class="btn btn-primary">Modifier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 text-center">
                <h3>SUPPRIMER MON COMPTE</h3>
                <!--SUPPRIMER L'UTILISATEUR-->
                <form method="POST" action="{{ route('user.destroy', $user) }}">
                    <!-- CSRF token -->
                    @csrf
                    @method('DELETE')
                    <td>
                        <input type="submit" class="btn btn-danger" value="Supprimer mon compte">
                    </td>
                </form>


            </div>
        </div>

    </div>
@endsection

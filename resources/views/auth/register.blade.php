@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inscription') }}</div>
                    <div class=" col-md-8 offset-2 text-center">
                        <p>Pour nous rejoindre, vous devrez lire et valider le règlement intérieur et renseigner le
                            formulaire ci-joint. Par la suite, vous serez recontacté par le bureau de l'association qui
                            confirmera votre inscription et vous demandera de préparer un certificat médical ainsi qu'un
                            montant chèque de 30€. <!--METTRE UN ESPACE --><input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"></p>
                            
                            <a href="{{ route('reglement.index') }}" class="btn-1" target="_blank">Réglement intérieur</a>
                    </div>
<!--VOIR POUR L ENVOI DE MAIL VIA FORMULAIRE ET METTRE UNE ALERTE SUR LE COMPTE ADMIN POUR LES NOUVELLES ADHESIONS POUR RECONTACTER LA PERSONNE-->

                    <!--FORMULAIRE INSCRIPTOION-->
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!--NOM-->
                            <div class="row mb-3">
                                <label for="nom" class="col-md-4 col-form-label text-md-end">{{ __('Nom') }}</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text" class="form-control @error('nom') is-invalid @enderror"
                                        name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--PRENOM-->
                            <div class="row mb-3">
                                <label for="prenom" class="col-md-4 col-form-label text-md-end">{{ __('Prénom') }}</label>
                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                        value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--DATE DE NAISSANCE-->
                            <div class="row mb-3">
                                <label for="date_de_naissance"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date de naissance') }}</label>
                                <div class="col-md-6">
                                    <input id="date_de_naissance" type="text"
                                        class="form-control @error('date_de_naissance') is-invalid @enderror"
                                        name="date_de_naissance" value="{{ old('date_de_naissance') }}" required
                                        autocomplete="date_de_naissance" autofocus>
                                    @error('date_de_naissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--ADRESSE-->
                            <div class="row mb-3">
                                <label for="adresse"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Adresse') }}</label>
                                <div class="col-md-6">
                                    <input id="adresse" type="text"
                                        class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                                        value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--CODE POSTAL-->
                            <div class="row mb-3">
                                <label for="code_postal"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Code postal') }}</label>
                                <div class="col-md-6">
                                    <input id="code_postal" type="text"
                                        class="form-control @error('code_postal') is-invalid @enderror" name="code_postal"
                                        value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>
                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--VILLE-->
                            <div class="row mb-3">
                                <label for="ville" class="col-md-4 col-form-label text-md-end">{{ __('Ville') }}</label>
                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror"
                                        name="ville" value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--NUMERO DE TELEPHONE FIXE-->
                            <div class="row mb-3">
                                <label for="num_telephone_fixe"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone fixe') }}</label>
                                <div class="col-md-6">
                                    <input id="num_telephone_fixe" type="text" placeholder="00 00 00 00 00"
                                        class="form-control @error('num_telephone_fixe') is-invalid @enderror"
                                        name="num_telephone_fixe" value=" {{ old('num_telephone_fixe') }}"
                                        autocomplete="num_telephone_fixe" autofocus>
                                    @error('num_telephone_fixe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--NUMERO DE TELEPHONE PORTABLE-->
                            <div class="row mb-3">
                                <label for="num_telephone_portable"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone portable') }}</label>
                                <div class="col-md-6">
                                    <input id="num_telephone_portable" type="text" placeholder="00 00 00 00 00"
                                        class="form-control @error('num_telephone_portable') is-invalid @enderror"
                                        name="num_telephone_portable" value="{{ old('num_telephone_portable') }}"
                                        autocomplete="num_telephone_portable" autofocus>
                                    @error('num_telephone_portable')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--EMAIL-->
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Adresse mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="exemple@exemple.fr"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--MOT DE PASSE-->
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--CONFIRMATION MOT DE PASSE-->
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirmation mot de passe') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!--BOUTON ENREGISTRER-->
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
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

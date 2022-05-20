@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>


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

                            <!--NUMERO DE TELEPHONE FIXE-->
                            <div class="row mb-3">
                                <label for="num_telephone_fixe"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone fixe') }}</label>
                                <div class="col-md-6">
                                    <input id="num_telephone_fixe" type="text" placeholder="00 00 00 00 00"
                                        class="form-control @error('num_telephone_fixe') is-invalid @enderror" name="num_telephone_fixe
                                        value="{{ old('num_telephone_fixe') }}" autofocus>
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
                                        class="form-control @error('num_telephone_portable') is-invalid @enderror" name="adrenum_telephone_portablesse"
                                        value="{{ old('num_telephone_portable') }}" autofocus>
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
                                    <input id="email" type="email" placeholder="exemple@exemple.fr" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                        {{ __('Engeristrer') }}
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

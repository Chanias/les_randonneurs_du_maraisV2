@extends('layouts.app')

@section('title')
    INTERFACE ADMINISTRATEUR
@endsection

@section('content')
    <script>
        function showElement(id) {
            let element = document.getElementById(id)
            if (element.style.display == 'block') {
                element.style.display = 'none'
            } else {
                element.style.display = 'block'
            }
        }
    </script>

    <div class="container">
        <div class="row text-center">
            <h2 class="mb-4">Bienvenue sur l'interface administrateur</h2>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title text-center">ADHERENTS</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <button class="btn btn-primary btn-lg"
                                onclick="showElement('liste_adherents')">Liste des adhérents</button></li>
                        <li class="list-group-item"><input type="submit" class="btn btn-danger"
                                value="Supprimer un utilisateur"></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title text-center">RANDONNEES</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <button class="btn btn-primary btn-lg"
                                onclick="showElement('liste_randonnees')">Liste des randonnées</button></li>
                        <li class="list-group-item">
                            <!--LIEN POUR ALLER SUR LA VIEW AJOUTER RANDONNEE-->
                            {{-- <a href="{{ route('randonnee.edit', $randonnee) }}"> --}}
                            <button class="btn btn-success">Ajouter une randonnée</button>
                            {{-- </a> --}}
                        </li>
                        <li class="list-group-item">
                            <!--LIEN POUR ALLER SUR LA VIEW MODIFIER RANDONNEE-->
                            {{-- <a href="{{ route('randonnee.edit', $randonnee) }}"> --}}
                            <button class="btn btn-success">Modifier une randonnée</button>
                            {{-- </a> --}}
                        </li>
                        <li class="list-group-item"><input type="submit" class="btn btn-danger"
                                value="Supprimer une randonnée"></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title text-center">DOCUMENTS</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"> <button class="btn btn-primary btn-lg"
                                onclick="showElement('liste_documents')">Liste des documents</button></li>
                        <li class="list-group-item">
                            <!--LIEN POUR ALLER SUR LA VIEW AJOUTER DOCUMENT-->
                            {{-- <a href="{{ route('randonnee.edit', $randonnee) }}"> --}}
                            <button class="btn btn-success">Ajouter un document</button>
                            {{-- </a> --}}
                        </li>
                        <li class="list-group-item"><input type="submit" class="btn btn-danger"
                                value="Supprimer un document"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="container" id="card-admin">
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <h5 class="card-title text-center">FORUM</h5>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Dernier message</li>
                        <li class="list-group-item"></li>
                        <li class="list-group-item"></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!---------------------------------------------LES LISITES---------------------------------------------->
    <!--LISTE ADHERENTS-->
    <div class="container" id="liste_adherents" style="display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des adhérents -->
            <h2 class="text-center">La liste des adhérents</h2>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Nom :</th>
                        <th>Prénom :</th>
                        <th>Date de naissance :</th>
                        <th>Numéro de téléphone fixe :</th>
                        <th>Numéro de téléphone portable :</th>
                        <th>Email :</th>
                        {{-- <th>Rôle</th> --}}
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->nom }}</td>
                            <td>{{ $user->prenom }}</td>
                            <td>{{ $user->date_de_naissance }}</td>
                            <td>{{ $user->num_telephone_fixe }}</td>
                            <td>{{ $user->num_telephone_portable }}</td>
                            <td>{{ $user->email }}</td>
                            {{-- <td>{{ $user->role }}</td> --}}


                            <!--SUPPRIMER L'UTILISATEUR-->
                            <form method="POST" action="{{ route('user.destroy', $user) }}">
                                <!-- CSRF token -->
                                @csrf
                                @method('DELETE')
                                <td>
                                    <input type="submit" class="btn btn-danger" value="Supprimer utilisateur">
                                </td>
                            </form>
                        </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>


    <!--LISTE RANDONNEES-->
    <div class="container" id="liste_randonnees" style="display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des randonnees -->
            <h2 class="text-center">La liste des randonnées</h2>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Date de la randonnée</th>
                        <th>Heure de rendez vous</th>
                        <th>Heure de départ</th>
                        <th>Circuit</th>
                        <th>Nombre de kilomètres</th>
                        <th>Animateurs</th>

                        <th>Modifier</th>
                        <th>Supprimer</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($randonnees as $randonnee)
                        <tr>
                            <td>{{ $randonnee->date_rando }}</td>
                            <td>{{ $randonnee->heure_depart }}</td>
                            <td>{{ $randonnee->depart_rando }}</td>
                            <td>{{ $randonnee->circuit }}</td>
                            <td>{{ $randonnee->kilometres }}</td>
                            <td>{{ $randonnee->animateurs }}</td>



                            <!--SUPPRIMER L'UTILISATEUR-->
                            <form method="POST" action="{{ route('randonnees.destroy', $randonnee) }}">
                                <!-- CSRF token -->
                                @csrf
                                @method('DELETE')
                                <td>
                                    <input type="submit" class="btn btn-danger" value="Supprimer la randonnée">
                                </td>
                            </form>
                        </tr>
                </tbody>
                @endforeach

            </table>
        </div>
    </div>
@endsection

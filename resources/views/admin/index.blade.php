@extends('layouts.app')

@section('title')
    INTERFACE ADMINISTRATEUR
@endsection

@section('content')
    <script>
        let nomsTableaux = ['liste_adherents', 'liste_documents', 'liste_randonnees', 'ajouter_document', 'creer_randonnee',
            'creer_actualite', 'actualites', 'balisage']

        function showElement(id) {
           
            nomsTableaux.forEach(element => { // nom du tableau 
                let objet =document.getElementById(element)
                if (objet){
                    objet.style.display='none'
                }
                // document.getElementById(element).style.display = 'none'
            });
            let element = document.getElementById(id)
            if (element.style.display == 'block') {
                element.style.display = 'none'
            } else {
                element.style.display = 'block'
            }
        }
    </script>

    <div class="container text-center">
        <div class="row text-center">
            <h2 class="mb-4">Bienvenue sur votre interface d'administration</h2>
        </div>
        @can('create', App\Models\User::class)
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_adherents')">Liste des adhérents</button>
        @endcan
        @can('create', App\Models\Document::class)
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_documents')">Liste des
            documents</button>
            @endcan
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_randonnees')">Liste des randonnées</button>

    </div>
    <br>
    <div class="container text-center">
        @can('create', App\Models\Document::class)
        <button class="btn btn-success btn-lg" onclick="showElement('ajouter_document')">Ajouter un document</button>
        @endcan

        <button class="btn btn-success btn-lg" onclick="showElement('creer_randonnee')">Créer une
            randonnee</button>

       @can('create', App\Models\Actualite::class)
        <button class="btn btn-success btn-lg" onclick="showElement('creer_actualite')">Créer une actualité</button>
        @endcan
    </div>
    <br>
    <div class="container text-center">
        {{-- <button class="btn btn-primary btn-lg" onclick="showElement('notifications')">Mes notifications</button> --}}
        <button class="btn btn-primary btn-lg" onclick="showElement('actualites')">Les actualités</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('balisage')">Le balisage</button>

    </div>


    <!---------------------------------------------LES ADHERENTS :---------------------------------------------->
    @if (Auth::user() && Auth::user()->role_id != 5)
    @else
        <!--LISTE ADHERENTS-->
        <div class="container" id="liste_adherents"style="padding-top: 5%;display: none">
            <div class="mb-4">
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
                            <th>Rôle :</th>

                            <th>Supprimer</th>
                        </tr>

                    </thead>

                    <tbody>
                        @foreach ($users as $user)
                            @can('view', $user)
                                <tr>
                                    <td>{{ $user->nom }}</td>
                                    <td>{{ $user->prenom }}</td>
                                    <td>{{ $user->date_de_naissance }}</td>
                                    <td>{{ $user->num_telephone_fixe }}</td>
                                    <td>{{ $user->num_telephone_portable }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role->role }}</td>
                                @endcan
                                <td>

                                    @can('delete', $user)
                                        <!--SUPPRIMER L'UTILISATEUR-->
                                        <form class="section" action="{{ route('compte.destroy', $user) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger" value="Supprimer le compte">
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                    </tbody>
    @endforeach
    </table>
    </div>
    {{ $users->links() }}

    </div>
    @endif
    <!----------------------------------------------------------------------------------------------------->
    <!------------------------------------------MES NOTIFICATIONS------------------------------------------->
    <!--LES NOTIFICAIONS A LIRE-->
    {{-- <div class="container p-5 text-center" id="notifications" style="padding-top: 5%;display: none">
        <h2>Mes notifications</h2>
        <div class="row">
            <div class="card-group">
                <div class="card col-md-2 p-5 ">
                    <i class="fas fa-check-circle fa-3x"></i>
                    <div class="card-body">
                        <h3 class="card-title">Notifications lues :</h5>
                            <p class="card-text">3</p>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Sujet : </th>
                                <th>Commentaire :</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notifications as $notification)
                                <tr>
                                    <td>{{ $notification->titre }}</td>
                                    <td>{{ $notification->texte }}</td>
                                </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                <div class="card col-md-2  p-5 ">
                    <div class="card-img-top">
                        <i class="fas fa-times-circle fa-3x"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Notifications non lues :</h5>
                            <p class="card-text ">2</p>

                    </div>
                </div>
            </div>
            <div class="card-group">
                <div class="card col-md-2 p-5 ">
                    <i class="fas fa-check-circle fa-3x"></i>
                    <div class="card-body">
                        <h3 class="card-title">Notifications traitées :</h5>
                            <p class="card-text">3</p>
                    </div>
                </div>
                <div class="card col-md-2  p-5 ">
                    <div class="card-img-top">
                        <i class="fas fa-times-circle fa-3x"></i>
                    </div>
                    <div class="card-body">
                        <h3 class="card-title">Notifications non traitées :</h5>
                            <p class="card-text">2</p>

                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!--LES NOTIFICAIONS A TRAITER-->
    <!----------------------------------------------------------------------------------------------------->


    <!------------------------------------------LES RANDONNEES------------------------------------------->

    <!--LISTE RANDONNEES-->
    <div class="container" id="liste_randonnees" style="padding-top: 5%;display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des randonnees -->
            <h2 class="text-center">La liste des randonnées</h2>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Date de la randonnée</th>
                        <th>Heure de rendez vous</th>
                        <th>Heure de départ</th>
                        <th>Point de départ</th>
                        <th>Nom de la randonnée</th>
                        <th>Commentaire</th>
                        <th>Nombre de kilomètres</th>
                        <th>Lien des photos</th>
                        <th>La carte</th>

                        <th>Modifier</th>
                        <th>Supprimer</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($randonnees as $randonnee)
                        <tr>
                            <td>{{ $randonnee->date }}</td>
                            <td>{{ $randonnee->heure_rdv }}</td>
                            <td>{{ $randonnee->heure_depart }}</td>
                            <td>{{ $randonnee->point_de_depart }}</td>
                            <td>{{ $randonnee->nom }}</td>
                            <td>{{ $randonnee->commentaires }}</td>
                            <td>{{ $randonnee->kilometres }}</td>
                            <td>{{ $randonnee->lien_photos }}</td>
                            {{-- Faire une icone pour la carte --}}
                            @if ($randonnee->carte)
                                @php
                                    $nom_fichier = $randonnee->carte->nom_fichier;
                                    
                                @endphp
                                <td><a href="{{ asset("images/cartes/$nom_fichier") }}">Télécharger </a></td>
                            @else
                                <td>pas de carte disponible pour cette randonnée</td>
                            @endif
                            @can('update', $randonnee)
                                <!--MODIFIER LA RANDONNEE-->
                                <td>
                                    <!--LIEN POUR ALLER SUR LA VIEW MODIFIER LA RANDONNEE-->
                                    <a href="{{ route('randonnee.edit', $randonnee) }}">
                                        <button class="btn btn-success">Modifier la randonnée</button>
                                    </a>
                                </td>
                            @endcan


                            @can('delete', $randonnee)
                                <!--SUPPRIMER LA RANDONNEE-->
                                <form method="POST" action="{{ route('randonnee.destroy', $randonnee) }}">
                                    <!-- CSRF token -->
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <input type="submit" class="btn btn-danger" value="Supprimer la randonnée">
                                    </td>
                                </form>
                            @endcan
                        </tr>
                </tbody>
                @endforeach

            </table>
        </div>
        {{ $randonnees->links() }}
    </div>




    <!----------------------------------------------------------------------------------------------------->

    <!-----------------------------------------LA CREATION D'UNE RANDONNEE:------------------------------------------------>
    <div class="container" id="creer_randonnee" style="padding-top: 5%;display: none">
        <div class="row text-center">
            <div class="col-md-12 text-center">
                <h3>Créer une randonnée</h3>
            </div>
            <hr>
            <div class="row">
                <form action="{{ route('randonnee.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @can('create', $randonnee)
                        <div class="mb-3 row">
                            <label class="label">Date de la randonnée :</label>
                            <div class="control">
                                <input class="input" type="text" name="date">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Heure de rendez vous :</label>
                            <div class="control">
                                <input class="input" type="text" name="heure_rdv">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Heure de départ :</label>
                            <div class="control">
                                <input class="input" type="text" name="heure_depart">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Point de départ :</label>
                            <div class="control">
                                <input class="input" type="text" name="point_de_depart">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Nom de la randonnée :</label>
                            <div class="control">
                                <input class="input" type="text" name="nom">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Commentaire :</label>
                            <div class="control">
                                <input class="input" type="text" name="commentaires">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Nombre de kilomètres :</label>
                            <div class="control">
                                <input class="input" type="number" name="kilometres">
                            </div>
                        </div>
                    @endcan
                    <div class="mb-3 row">
                        <label class="label">La carte :</label>
                        <div class="control">
                            <input class="input" type="text" name="carte">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="label">Les animateurs :</label>
                        <div class="control">
                            <input class="input" type="text" name="animateurs">
                        </div>
                    </div>

                    <div class="field">
                        <div class="control">
                            <button class="btn btn-success" type="submit">Valider</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <!------------------------------------LES DOCUMENTS--------------------------------------------->

    <!--LA LISTE DES DOCUMENTS-->
    <div class="container" id="liste_documents" style="padding-top: 5%;display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des documents -->
            <h2 class="text-center">La liste des documents</h2>
            <div class="col-12 text-center">
                <div class="row mb-5">

                    @foreach ($documents as $document)
                        @can('view', $document)
                            <div class="card text-center" style="width: 18rem;">
                                <h3 class="card-title ">{{ $document->nom }}</h3>
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset("images/documents/$document->image") }}"
                                        alt="Documents">
                                </div>

                                @can('delete', $document)
                                    <!--SUPPRIMER UN DOCUMENT-->
                                    <form method="POST" action="{{ route('document.destroy', $document) }}">
                                        <!-- CSRF token -->
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Supprimer le document">
                                    </form>
                                @endcan
                            </div>
                        @endcan
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------>

    <!------------------------------------------AJOUTER UN DOCUMENT-------------------------------------------------->
    @can('create', $document)
        <div class="container" id="ajouter_document" style="padding-top: 5%;display: none">
            <div class="row text-center">
                <div class="col-md-12 text-center">
                    <h3>Ajouter un document</h3>
                </div>
                <hr>
                <div class="row">
                    <form action="{{ route('document.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="label">Nom du document :</label>
                            <div class="control">
                                <input class="input" type="text" name="nom">
                            </div>
                        </div>

                        <div class="mb-3 mx-auto">
                            <label for="image" class="fs-4 mt-3">Image : </label>
                            <input type="file" name="image" class="form-control">
                        </div>
                        {{-- Mettre un select --}}
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="categorie">
                            <option selected>Choisir la catégorie de document</option>
                            <option value="certificat_medical">Certificat médical</option>
                            <option value="questionnaire">Questionnaire</option>
                            <option value="compte_rendu">Compte rendu</option>
                        </select>


                        <div class="field">
                            <div class="control">
                                <button class="btn btn-success" type="submit">Valider</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endcan
    <!----------------------------------------------------------LES ACTUALITES------------------------------------------->
    <!--LA LISTE DES ACTUALITES-->
    <div class="container" id="actualites" style="padding-top: 5%;display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des actualités -->
            <h2>Les Actualités de l'association</h2>

            @foreach ($actualites as $actualite)
                <div class="card-group">
                    <div class="card">
                        <img class="card-img" src="{{ asset("images/actualites/$actualite->image") }}" alt="actualites">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actualite->titre }}</h5>
                            <p class="card-text">{{ $actualite->texte }}</p>
                            <p class="card-text"><small class="text-muted">{{ $actualite->created_at }}</small></p>
                            <a href="{{ route('actualite.show', $actualite) }}">
                                <input type="submit" class="btn btn-primary" value="Détails de l'actualité">
                            </a>

                            @can('update', $actualite)
                                <!--MODIFIER L'ACTUALITE-->
                                <td>
                                    <!--LIEN POUR ALLER SUR LA VIEW MODIFIER L'ACTUALITE-->
                                    <a href="{{ route('actualite.edit', $actualite) }}">
                                        <button class="btn btn-success">Modifier l'actualité</button>
                                    </a>
                                </td>
                            @endcan

                            @can('delete', $actualite)
                                <!--SUPPRIMER UNE ACTUALITE-->
                                <form method="POST" action="{{ route('actualite.destroy', $actualite) }}">
                                    <!-- CSRF token -->
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Supprimer l'actualité">
                                </form>
                            @endcan
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img" src="{{ asset("images/actualites/$actualite->image") }}" alt="actualites">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actualite->titre }}</h5>
                            <p class="card-text">{{ $actualite->texte }}</p>
                            <p class="card-text"><small class="text-muted">{{ $actualite->created_at }}</small></p>
                            <a href="{{ route('actualite.show', $actualite) }}">
                                <input type="submit" class="btn btn-primary" value="Détails de l'actualité">
                            </a>

                            @can('update', $actualite)
                                <!--MODIFIER L'ACTUALITE-->
                                <td>
                                    <!--LIEN POUR ALLER SUR LA VIEW MODIFIER L'ACTUALITE-->
                                    <a href="{{ route('actualite.edit', $actualite) }}">
                                        <button class="btn btn-success">Modifier l'actualité</button>
                                    </a>
                                </td>
                            @endcan

                            @can('delete', $actualite)
                                <!--SUPPRIMER UNE ACTUALITE-->
                                <form method="POST" action="{{ route('actualite.destroy', $actualite) }}">
                                    <!-- CSRF token -->
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Supprimer l'actualité">
                                </form>
                            @endcan
                        </div>
                    </div>


                    <div class="card">
                        <img class="card-img" src="{{ asset("images/actualites/$actualite->image") }}" alt="actualites">
                        <div class="card-body">
                            <h5 class="card-title">{{ $actualite->titre }}</h5>
                            <p class="card-text">{{ $actualite->content }}</p>
                            <p class="card-text"><small class="text-muted">{{ $actualite->created_at }}</small></p>
                            <a href="{{ route('actualite.show', $actualite) }}">
                                <input type="submit" class="btn btn-primary" value="Détails de l'actualité">
                            </a>

                            @can('update', $actualite)
                                <!--MODIFIER L'ACTUALITE-->
                                <td>
                                    <!--LIEN POUR ALLER SUR LA VIEW MODIFIER L'ACTUALITE-->
                                    <a href="{{ route('actualite.edit', $actualite) }}">
                                        <button class="btn btn-success">Modifier l'actualité</button>
                                    </a>
                                </td>
                            @endcan

                            @can('delete', $actualite)
                                <!--SUPPRIMER UNE ACTUALITE-->
                                <form method="POST" action="{{ route('actualite.destroy', $actualite) }}">
                                    <!-- CSRF token -->
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Supprimer l'actualité">
                                </form>
                            @endcan
                        </div>
                    </div>


                </div>
            @endforeach
        </div>
    </div>

    @can('create', $actualite)
        <!--CREER UNE NOUVELLE ACTUALITE-->
        <div class="container" id="creer_actualite" style="padding-top: 5%;display: none">
            <div class="row text-center">
                <div class="col-md-12 text-center">
                    <h3>Créer une actualité</h3>
                </div>
                <hr>
                <div class="row">
                    <form action="{{ route('actualite.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="label">Titre de l'actualité :</label>
                            <div class="control">
                                <input class="input" type="text" name="titre">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="label">Texte :</label>
                            <div class="control">
                                <textarea class="textarea" name="content" placeholder="Les détails par ici..."></textarea>
                            </div>
                        </div>

                        <div class="mb-3 mx-auto">
                            <label for="image" class="fs-4 mt-3">Image : </label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="field">
                            <div class="control">
                                <button class="btn btn-success" type="submit">Valider</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <div>
        @endcan
    </div>

    <!-----------------------------------LE BALISAGE----------------------------------------------------->
    <div class="container" id="balisage" style="padding-top: 5%;display: none">
        <h2>Le programme de balisage 2022</h2>
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-title">Balisage 2022</h5>
                    <div class="card-body">
                        <img src="{{ asset('images/documents/carte_balisage.jpg') }}" class="img-fluid"
                            alt="carte_balisage">
                        <p class="card-text">Pour plus de détails au niveau du balisage, veuillez cliquer sur le bouton En
                            savoir
                            plus</p>
                        <a href="#" class="btn btn-primary">En savoir plus</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <h5 class="card-title">Note de frais FFR</h5>
                    <div class="card-body">
                        <img src="{{ asset('images/documents/baliseur_note_de_frais.jpg') }}" class="img-fluid"
                            alt="baliseur_note_de_frais">
                        <p class="card-text">Pour ceux qui font le balisage pensez à bien télécharger cette note de frais,
                            la remplir et la renvoyer à la FFR Vendéee</p>
                        <a href="{{ asset('images/documents/balisaeur_note_de_frais.jpg') }}" class="btn btn-success"
                            target="_blank">Télécharger</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

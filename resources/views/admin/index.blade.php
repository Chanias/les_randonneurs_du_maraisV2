@extends('layouts/app')

@section('title')
    Nous contacter
@endsection

@section('content')
    <script>
        let nomsTableaux = ['liste_adherents', 'actualites', 'liste_documents', 'ajouter_document',
            'creer_actualite', 'balisage', 'liste_randonnees', 'creer_randonnee'
        ];

        function showElement(id) {

            nomsTableaux.forEach(element => { // nom du tableau 
                let objet = document.getElementById(element)
                if (objet) {
                    // objet.style.display = 'none'
                    document.getElementById(element).style.display = 'none'
                }
            });
            let element = document.getElementById(id)
            console.log(id)
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
        {{-- ON CACHE LES BOUTONS POUR CEUX QUI N'ONT PAS ACCES --}}
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

        @can('create', App\Models\Randonnee::class)
            <button class="btn btn-success btn-lg" onclick="showElement('creer_randonnee')">Ajouter une randonnées</button>
        @endcan

        @can('create', App\Models\Actualite::class)
            <button class="btn btn-success btn-lg" onclick="showElement('creer_actualite')">Créer une actualité</button>
        @endcan
    </div>

    <br>
    <div class="container text-center">
        <button class="btn btn-primary btn-lg" onclick="showElement('actualites')">Les actualités</button>
        @can('create', App\Models\Balisage::class)
            <button class="btn btn-primary btn-lg" onclick="showElement('balisage')">Le balisage</button>
        @endcan
    </div>




    <!---------------------------------------------LES ADHERENTS :---------------------------------------------->
    @if (Auth::user() && Auth::user()->role_id != 5)
    @else
        <!--LISTE ADHERENTS-->
        <div class="container" id="liste_adherents" style="padding-top: 5%;display: none">
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
                    @endcan
    @endforeach
    </table>
    {{ $users->links() }}
    </div>

    </div>
    @endif
    <!----------------------------------------------------------------------------------------------------->

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
    <!------------------------------------------------ LES RANDONNEES ------------------------------------------------------------->
    <!--LA LISTE DES RANDONNEES-->
    <div class="container" id="liste_randonnees" style="padding-top: 5%;display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des documents -->
            <h2 class="text-center">Les randonnées</h2>
            <div class="col-12 text-center">
                <div class="row mb-5">

                    @foreach ($randonnees as $randonnee)
                        <div class="card text-center" style="width: 18rem;">
                            <h3 class="card-title ">{{ $randonnee->nom }}</h3>
                            <div class="card-body">
                                <img class="card-img" src="{{ asset("images/documents/randonnees/$randonnee->image") }}"
                                    alt="Documents">
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <!-- AJOUTER UNE RANDONNEES-->
    <div class="container" id="creer_randonnee" style="padding-top: 5%;display: none">
        <div class="mb-3">
            <!-- On parcourt la liste des documents -->
            <h2 class="text-center">Ajouter une randonnée</h2>
            <div class="col-12 text-center">
                <div class="row mb-5">

                    <div class="row">
                        <form action="{{ route('randonnee.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3 row">
                                <label class="label">Nom de la randonnée :</label>
                                <div class="control">
                                    <input class="input" type="text" name="nom">
                                </div>
                            </div>

                            <div class="mb-3 mx-auto">
                                <label for="image" class="fs-4 mt-3">Image : </label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            {{-- Mettre un select --}}
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                                name="categorie">
                                <option selected>Choisir la catégorie de document</option>

                                @if (Auth::user()->role_id == 5)
                                    <option value="randonnees">Randonnées</option>
                                    <option value="questionnaire">Questionnaire</option>
                                @endif
                                <option value="compte_rendu">Compte rendu</option>

                            </select>

                            <div class="field">
                                <div class="control">
                                    <button class="btn btn-success" type="submit">Valider</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- @foreach ($randonnees as $randonnee)
                        @can('view', $randonnee)
                            <div class="card text-center" style="width: 18rem;">
                                <h3 class="card-title ">{{ $randonnee->nom }}</h3>
                                <div class="card-body">
                                    <img class="card-img" src="{{ asset("images/documents/$document->image") }}"
                                        alt="Documents">
                                </div>
                                @can('delete', $randonnee)
                                    <!--SUPPRIMER UN DOCUMENT-->
                                    <form method="POST" action="{{ route('randonnee.destroy', $randonnee) }}">
                                        <!-- CSRF token -->
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger" value="Supprimer la randonnées">
                                    </form>
                                @endcan
                            </div>
                        @endcan
                    @endforeach  --}}


                </div>
            </div>
        </div>
    </div>



    <!------------------------------------------AJOUTER UN DOCUMENT-------------------------------------------------->
    {{-- @can('create', $document) --}}
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
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example"
                        name="categorie">
                        <option selected>Choisir la catégorie de document</option>

                        @if (Auth::user()->role_id == 5)
                            <option value="certificat_medical">Certificat médical</option>
                            <option value="questionnaire">Questionnaire</option>
                        @endif
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
    <!----------------------------------------------------------------------------------------------------->


    <!----------------------------------------------------------------------------------------------------->




    <!----------------------------------------------------------LES ACTUALITES------------------------------------------->
    <div class="container" id="actualites" style="padding-top: 5%;display: none">
        <!-- On parcourt la liste des actualités -->
        <h2>Les Actualités de l'association</h2>
        @foreach ($actualites as $actualite)
            <div class="card text-start">
                <h4 class="card-title">{{ $actualite->titre }}</h4>
                <img class="card-img-top" src="{{ asset("images/actualites/$actualite->image") }}" alt="Title"
                    style="width:20%;text-content: center">
                <div class="card-body">
                    <p class="card-text">{{ $actualite->content }}</p>
                    <p class="card-text"><small class="text-muted">{{ $actualite->created_at }}</small></p>

                    <a href="{{ route('actualite.show', $actualite) }}">
                        <input type="submit" class="btn btn-primary" value="Détails de l'actualité">
                    </a>

                    <!--MODIFIER L'ACTUALITE-->
                    @can('update', $actualite)
                        <!--LIEN POUR ALLER SUR LA VIEW MODIFIER L'ACTUALITE-->
                        <a href="{{ route('actualite.edit', $actualite) }}">
                            <button class="btn btn-success">Modifier l'actualité</button>
                        </a>
                    @endcan

                    <!--SUPPRIMER L'ACTUALITE-->
                    @can('delete', $actualite)
                        <!--LIEN POUR SUPPRIMER L'ACTUALITE-->
                        <form class="section" action="{{ route('actualite.destroy', $actualite) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Supprimer l'actualité">
                        </form>
                    @endcan
                </div>
            </div>
        @endforeach
    </div>


    <!--CREER UNE NOUVELLE ACTUALITE-->
    @can('create', $actualite)
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
    @endcan



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

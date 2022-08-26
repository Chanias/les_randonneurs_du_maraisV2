
 @extends('layouts.app')

 @section('title')
     INTERFACE ADMINISTRATEUR
 @endsection
 
 @section('content')
     <!---------------------------------------------LES ADHERENTS :---------------------------------------------->
     <!--LISTE ADHERENTS-->
     <div class="container" id="liste_adherents">
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
     <!----------------------------------------------------------------------------------------------------->

     <div class="container text-center">
        <div class="row text-center">
            <h2 class="mb-4">Bienvenue sur le back office</h2>
        </div>
        <button class="btn btn-primary btn-lg" onclick="showElement('creer_article')">Créer un article</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('creer_gamme')">Créer une gamme</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('creer_campagne')">Créer une campagne</button>
    </div>
    
    <div class="container text-center">
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_article')">Liste des articles</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_gamme')">Liste des gammes</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_campagne')">Liste des campagnes</button>
        <button class="btn btn-primary btn-lg" onclick="showElement('liste_utilisateur')">Liste des utilisateurs</button>
    </div>
    <!------------------------------------------LES RANDONNEES------------------------------------------->
    
        <!--LISTE RANDONNEES MOIS EN COURS-->
        <div class="container" id="liste_randonnees">
            <div class="mb-3">
                <!-- On parcourt la liste des randonnees -->
                <h2 class="text-center">La liste des randonnées du mois en cours</h2>
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
    
                                <!--MODIFIER LA RANDONNEE-->
                                <td>
                                    <!--LIEN POUR ALLER SUR LA VIEW MODIFIER LA RANDONNEE-->
                                    <a href="{{ route('randonnee.edit', $randonnee) }}">
                                        <button class="btn btn-success">Modifier la randonnée</button>
                                    </a>
                                </td>
                                <!--SUPPRIMER LA RANDONNEE-->
                                <form method="POST" action="{{ route('randonnee.destroy', $randonnee) }}">
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
        <!--LISTE RANDONNEES DE TOUTES LES RANDONNEES-->
        <div class="container" id="liste_randonnees">
            <div class="mb-3">
                <!-- On parcourt la liste de toutes les randonnees -->
                <h2 class="text-center">La liste de toutes les randonnées</h2>
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
    
                            </tr>
                    </tbody>
                    @endforeach
    
                </table>
            </div>
        </div>
    
        <!----------------------------------------------------------------------------------------------------->
        <!-----------------------------------------LA CREATION D'UNE RANDONNEE:------------------------------------------------>
        <div class="container" id="creer_randonnee">
            <div class="row text-center">
                <div class="col-md-12 text-center">
                    <h3>Créer une randonnée</h3>
                </div>
                <hr>
                <div class="row">
                    <form action="{{ route('randonnee.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3 row">
                            <label class="label">Date de la randonnee :</label>
                            <div class="control">
                                <input class="input" type="text" name="date_rando">
                            </div>
                        </div>
    
                        <div class="mb-3 row">
                            <label class="label">Heure de départ :</label>
                            <div class="control">
                                <input class="input" type="text" name="heure_depart">
                            </div>
                        </div>
    
                        <div class="mb-3 row">
                            <label class="label">Lieu de départ :</label>
                            <div class="control">
                                <input class="input" type="text" name="depart_rando">
                            </div>
                        </div>
    
                        <div class="mb-3 row">
                            <label class="label">Circuit de la randonnée :</label>
                            <div class="control">
                                <input class="input" type="text" name="circuit">
                            </div>
                        </div>
    
                        <div class="mb-3 row">
                            <label class="label">Les kilomètres :</label>
                            <div class="control">
                                <input class="input" type="number" name="kilometres">
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

        !------------------------------------LES DOCUMENTS--------------------------------------------->
    
    <!--LA LISTE DES DOCUMENTS-->
    <div class="container" id="liste_documents">
        <div class="mb-3">
            <!-- On parcourt la liste des documents -->
            <h2 class="text-center">La liste des documents</h2>
            <div class="col-12 text-center">
                <div class="row mb-5">
                    @foreach ($documents as $document)
                        <div class="card text-center" style="width: 18rem;">
                            <h3 class="card-title ">{{ $document->nom_document }}</h3>
                            <div class="card-body">
                                <img class="card-img" src="{{ asset("images/Documents/$document->image") }}"
                                    alt="Documents">
                            </div>
                            <!--SUPPRIMER UN DOCUMENT-->
                            <form method="POST" action="{{ route('document.destroy', $document) }}">
                                <!-- CSRF token -->
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger" value="Supprimer le document">
                            </form>
                        </div>
                @endforeach
            </div>
            </div>
        </div>
    </div>

    <!------------------------------------------------------------------------------------------------>

    <!------------------------------------------AJOUTER UN DOCUMENT-------------------------------------------------->
    <div class="container" id="ajouter_document">
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
                            <input class="input" type="text" name="nom_document">
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
 @endsection
    
     


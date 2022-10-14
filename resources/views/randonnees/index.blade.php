@extends('layouts/app')

@section('title')
    Nos activités
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-title">
                <h1>Exemples de nos randonnées</h1>
            </div>
        </div>
    </div>

    <!-- Exemples de randonnées-->
    <section id="randos">
        <div class="container px-4 px-lg-5">
            <!-- Rando One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{ './images/photos/plage_normale.jpg' }}"
                        alt=" Bord de mer" /></div>
                <div class="col-lg-6">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-dark">Rando bord de mer</h4>
                                <h5 class="text-dark">Le 15 juin 2022 - Saint George d'Oléron</h5>
                                <p class="text-center">Une marche de 16,4 kilomètres</p>
                                <p class="text-center">Heure de rendez vous : 8h30<br>Heure de départ : 9h00<br>Point de
                                    départ : Plage de la Gautrelle<br>Animateurs : BC et CR</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m36!1m12!1m3!1d11089.397885347953!2d-1.2868105071654514!3d45.98425117580669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m21!3e2!4m3!3m2!1d45.988192999999995!2d-1.293194!4m3!3m2!1d45.9869488!2d-1.2836075999999998!4m3!3m2!1d45.9850083!2d-1.2860509!4m3!3m2!1d45.9848814!2d-1.2924569!4m3!3m2!1d45.9882001!2d-1.2932154999999999!5e0!3m2!1sfr!2sfr!4v1662983788526!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Rando Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{ './images/photos/foret_normale.jpg' }}"
                        alt="lead dév" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-dark">Rando forêt</h4>
                                <h5 class="text-dark">Le 15 juin 2022 - Saint George d'Oléron</h5>
                                <p class="text-center">Une marche de 11 kilomètres</p>
                                <p class="text-center">Heure de rendez vous : 9h00<br>Heure de départ : 9h30<br>Point de
                                    départ : La Chaise Boire<br>Animateurs : AS et IW</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m40!1m12!1m3!1d26613.56435492321!2d-0.7655934643502585!3d46.54649913328689!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m25!3e2!4m5!1s0x4806e6585487dc87%3A0x8f906686274e2da6!2sLa%20Chaise%20Boire%2C%2085120%20Vouvant!3m2!1d46.563882899999996!2d-0.7587902!4m5!1s0x4806e6e86cf095a7%3A0xa2d1f744df018a0c!2sLes%20Basses%20Guilloti%C3%A8res!3m2!1d46.56285!2d-0.736787!4m3!3m2!1d46.5517884!2d-0.7261531!4m3!3m2!1d46.5543688!2d-0.7455872!4m3!3m2!1d46.562523!2d-0.7578707!5e0!3m2!1sfr!2sfr!4v1662984882509!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Rando Three Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{ './images/photos/moutons_normale.jpg' }}"
                        alt=" gestion de projet" /></div>
                <div class="col-lg-6">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-dark">Rando nature</h4>
                                <h5 class="text-dark">Le 18 novembre 2021 - YOURTES DU BOCAGE (Route de Bazoges en Pareds)
                                </h5>
                                <p class="text-center">Une marche de 14,6 kilomètres </p>
                                <p class="text-center">Heure de rendez vous : 8h00<br>Heure de départ : 8h30<br>Point de
                                    départ : Les Yourtes du Bocage (Route de Bazoges en Pareds)<br>Animateurs : BG et LS</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m42!1m12!1m3!1d69486.65099052442!2d-0.9583132248441248!3d46.708392156256124!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m27!3e2!4m5!1s0x4806f2b8ed51ca55%3A0x4fe610d4deeddea0!2sYOURTES%20DU%20BOCAGE%2C%20Route%20de%20Bazoges%20en%20Pareds%2C%20Bazoges-en-Pareds!3m2!1d46.6846713!2d-0.9473678!4m3!3m2!1d46.6882124!2d-0.9613816!4m3!3m2!1d46.6847083!2d-0.9322349999999999!4m3!3m2!1d46.6978085!2d-0.9189701!4m3!3m2!1d46.703769099999995!2d-0.9498842!4m3!3m2!1d46.688816599999996!2d-0.961128!5e0!3m2!1sfr!2sfr!4v1662985198267!5m2!1sfr!2sfr"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
    </section>


    <!------------------------------------------LES RANDONNEES------------------------------------------->
    @if (auth()->check())
        <!--LISTE RANDONNEES-->
        <div class="container">
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
                                @if ($randonnee->carte)
                                @php
                                    $nom_fichier = $randonnee->carte->nom_fichier;
                                    
                                @endphp
                                <td><a href="{{ asset("images/cartes/$nom_fichier") }}">Télécharger </a></td>
                            @else
                                <td>pas de carte disponible pour cette randonnée</td>
                            @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <!--AVIS MARCHEURS START-->
    <section id="avis">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Avis de randonneurs</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 offset-md-2">
                    <div class="avis_randonneurs">
                        <blockquote>
                            <p>Marche très sympathique, bonne humeur comme à l'accoutumé.
                            </p>
                            <figcaption>—Jean-Charles </figcaption>
                        </blockquote>
                        <br>
                        <blockquote>
                            <p>Belles marches, de beaux paysages et le vin chaud en hiver n'est pas de refus.</p>
                            <figcaption>—Marine </figcaption>
                        </blockquote>

                    </div>
                </div>
            </div>
    </section>
    <!--AVIS MARCHEURS END-->
@endsection

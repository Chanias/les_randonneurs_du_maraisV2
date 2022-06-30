@extends('layouts/app')

@section('title')
    Nos activités
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-title">
                <h1>Nos randonnées</h1>
            </div>
        </div>
    </div>
   
     <!-- Exemples de randonnées-->
     <section id="randos">
        <div class="container px-4 px-lg-5">
            <!-- Rando One Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{'./images/plage_normale.jpg'}}"
                        alt=" gestion de projet"/></div>
                <div class="col-lg-6">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-dark">Rando bord de mer</h4>
                                <h5 class="text-dark">Date rando et lieu</h5>
                               <p class="text-center">&emsp;Nombre de kilomètres ... explication du déroulé de la journée</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">         
                    <div class="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d88783.50824667313!2d-1.2629644370818098!3d45.94159934367591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4803e23710694dd3%3A0xbe863388683aae42!2sPlage%20de%20la%20Gautrelle!3m2!1d45.988839999999996!2d-1.286689!4m5!1s0x48016067600411eb%3A0x405d39260eea2f0!2zTGUgQ2jDonRlYXUtZCdPbMOpcm9u!3m2!1d45.885588!2d-1.19505!5e0!3m2!1sfr!2sfr!4v1642581799563!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>         
                </div>
            </div>
           <hr>
            <!-- Rando Two Row-->
            <div class="row gx-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{'./images/foret_normale.jpg'}}" alt="lead dév" /></div>
                <div class="col-lg-6 order-lg-first">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-right">
                                <h4 class="text-dark">Rando en forêt</h4>
                                <h5 class="text-dark">Date rando et lieu</h5>
                                <p>&emsp;Nombre de kilomètres ... explication du déroulé de la journée</p>
                                <hr class="d-none d-lg-block mb-0 me-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">         
                    <div class="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d88783.50824667313!2d-1.2629644370818098!3d45.94159934367591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4803e23710694dd3%3A0xbe863388683aae42!2sPlage%20de%20la%20Gautrelle!3m2!1d45.988839999999996!2d-1.286689!4m5!1s0x48016067600411eb%3A0x405d39260eea2f0!2zTGUgQ2jDonRlYXUtZCdPbMOpcm9u!3m2!1d45.885588!2d-1.19505!5e0!3m2!1sfr!2sfr!4v1642581799563!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>         
                </div>
            </div>
           <hr>
            <!-- Rando Three Row-->
            <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                <div class="col-lg-6"><img class="img-fluid" src="{{'./images/moutons_normale.jpg'}}"
                        alt=" gestion de projet"/></div>
                <div class="col-lg-6">
                    <div class="bg-light text-center h-100 project">
                        <div class="d-flex h-100">
                            <div class="project-text w-100 my-auto text-center text-lg-left">
                                <h4 class="text-dark">Rando nature</h4>
                                <h5 class="text-dark">Date rando et lieu</h5>
                               <p class="text-center">&emsp;Nombre de kilomètres ... explication du déroulé de la journée</p>
                                <hr class="d-none d-lg-block mb-0 ms-0" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">         
                    <div class="map">
                      <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d88783.50824667313!2d-1.2629644370818098!3d45.94159934367591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4803e23710694dd3%3A0xbe863388683aae42!2sPlage%20de%20la%20Gautrelle!3m2!1d45.988839999999996!2d-1.286689!4m5!1s0x48016067600411eb%3A0x405d39260eea2f0!2zTGUgQ2jDonRlYXUtZCdPbMOpcm9u!3m2!1d45.885588!2d-1.19505!5e0!3m2!1sfr!2sfr!4v1642581799563!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>         
                </div>
            </div>
    </section>

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
    <!--FOOTER START-->
    <footer>
        <div class="container-fluid">

            <img src="{{ asset('images/logo_fond_vert.jpeg') }}" alt="Logo" style="width:60px;" class="rounded-pill">
        </div>

        <div class="details_2">
            <button type="button" class="btn-1">Copyright<a href="#"></a></button>
            <button type="button" class="btn-1">Mentions Légales<a href="#"></a></button>
            <button type="button" class="btn-1">Politique de confidentialité<a href="#"></a></button>
        </div>

        <div class="copyright">
            <p>Les Randonneurs du Marais Sud Vendée - 2021.</p>
        </div>
        </div>
    </footer>
    <!--FOOTER END-->
@endsection

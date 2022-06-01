@extends('layouts/app')

@section('title')
    Nos activités
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-title">
                <h1>Les randonneurs du marais sud vendée</h1>
            </div>
        </div>
    </div>
    <h2>Quelques renseignements</h2>

    <div class="container">
        <div class="row" id="bandeau">
            <div class="col-md-4">
                <i class="fas fa-users mb-4"></i>
                <h2 class="fs-4">Public concerné : tous public</h2>
            </div>
            <div class="col-md-4">
                <i class="fas fa-hiking mb-4"></i>
                <h2 class="fs-4">Jours de sorties : mercredi et samedi </h2>
            </div>
            <div class="col-md-4">
                <i class="fas fa-euro-sign mb-4"></i>
                <h2 class="fs-4">Coût individuel de la cotisation : 30 €</h2>

            </div>
        </div>
        <div class="container" id="plus">
            <div class="row">
                <div class="col-md-12">
                    <h4>Ce que comprend l'adhésion :</h4>
                    <p>La cotisation au club</p>
                    <p>La licence de la FFR Randonnée</p>
                    <p>Les assurances</p>
                </div>
            </div>
        </div>

        <h4>Un certificat médical sera demandé pour toute nouvelle inscription.</h4>
    </div>


    <section id="rando">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Exemple d'une randonnée</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-7">
                    <img src="{{ asset('images/petites/plage_petite.jpeg') }}" alt="plage" class="exemple_rando img">
                </div>
                <div class="col-md-5">
                    <!--exemple rando-->
                    <div class="exemple_rando">
                        <div class="row">
                            <div class="col-md-10">
                                <h3>BORD DE MER </h3>
                                <p>NOMBRE DE KMS : 10 kms</p>
                                <p>NOM DU CIRCUIT : Plage de la Gautrelle - Le Château-d'Oléron</p>
                                <p>DATE : le mercredi 17 mars 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d88783.50824667313!2d-1.2629644370818098!3d45.94159934367591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e2!4m5!1s0x4803e23710694dd3%3A0xbe863388683aae42!2sPlage%20de%20la%20Gautrelle!3m2!1d45.988839999999996!2d-1.286689!4m5!1s0x48016067600411eb%3A0x405d39260eea2f0!2zTGUgQ2jDonRlYXUtZCdPbMOpcm9u!3m2!1d45.885588!2d-1.19505!5e0!3m2!1sfr!2sfr!4v1642581799563!5m2!1sfr!2sfr"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <!--CONTACT START-->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row" id="image_et_texte">
                <div class="col-md-6">
                    <p>ADRESSE : 25 rue de l'Eglise 85770 Le Gué de Velluire </p>
                    <p>TEL : 02 51 52 54 93</p>
                    <p>MAIL : bonneau.marcelle@gmail.com</p>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT END-->
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

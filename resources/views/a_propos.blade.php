@extends('layouts/app')

@section('title')
    Nos activités
@endsection

@section('content')
    <section id="titre">
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-title">
                    <h1>Les randonneurs du marais sud vendée</h1>
                </div>
            </div>
        </div>
    </section>


    <section id="texte-perso">
        <div class="container">
            <div class="row">
                <h5>Pourquoi ce site ?</h5>
            </div>
        </div>
        <div class="container">
            <div class="col-md-10">
                <p>BONJOUR , JE M’APPELLE FLORIANE, JE SUIS DEVELOPPEUSE WEB JUNIOR , JE SUIS EN ALTERNANCE AVEC L’ECOLE
                    ARINFO. POUR LE PROJET DE FIN D’ANNEE, JE DEVAIS CREER UN SITE DE A A Z (CAHIER DES CHARGES ...)
                    C’EST POURQUOI, J’AI DECIDER DE CREER CE SITE AVEC LES INSTRUCTIONS DES MEMBRES DE L’ASSOCIATION. CE
                    SITE EST FAIT POUR QU’IL Y EST DE NOUVEAUX ADHERENTS ET DE NOUVELLES VISITES AINSI QUE ME FAIRE
                    CONNAITRE (UN PEU DE BONNE PUB CA NE FAIT PAS DE MAL)</p>
            </div>
        </div>
    </section>
    <!--CONTACT START-->
    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact</h2>
                </div>
            </div>
            <div class="row" id="perso">
                <div class="col-md-12">




                    <a href="https://github.com/Chanias" target="_blank">Github:<i
                            class="fab fa-github-square mb-4"></i></a>
                    <a href="https://www.linkedin.com/in/floriane-siedlecki/" target="_blank">Linkedin :<i
                            class="fab fa-linkedin mb-4"></i></a>


                    <p>TEL : 07 69 34 56 40</p>
                    <p>MAIL : florianesiedlecki@gmail.com</p>
                </div>
            </div>
        </div>
    </section>

    <!--CONTACT END-->

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

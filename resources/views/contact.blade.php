@extends('layouts/app')

@section('title')
    Nous contacter
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
    <!--FORMULAIRE DE CONTACT-->
    <section id="contact">
        <div class="container">
            <div class="col-md-12">
                <p>Pour nous rejoindre veuillez remplir ce document après avoir pris connaissance du règlement intérieur
                </p>
                <a href="{{ route('reglement.index') }}" class="btn-1" target="_blank">Réglement intérieur</a>
            </div>
            <div class="col-md-12" id="intro">
                <p>Les randonnées ont lieu les mercredis et samedis matin les mois de mai, juin et septembre. Les autres ont
                    lieu les mercredis et samedis après-midi. (Pas de randonnées en juillet et août.)</p>
            </div>
        </div>
        
      
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Une fois ce formulaire rempli, veuillez cliquer sur le bouton envoyer</p>
                </div>
            </div>
            <span>* non obligatoire</span>
        </div>
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

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
        <form>
            <div class="row">
                <div class="col-25">
                    <label for="fname">NOM</label>
                </div>
                <div class="col-75">
                    <input type="text" id="fname" placeholder="Votre nom...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">PRENOM</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre prénom...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">DATE DE NAISSANCE</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre date de naissance...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">ADRESSE</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre adress...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">NUM TELEPHONE FIXE*</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre numéro fixe...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">NUM TELEPHONE PORTABLE</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre numéro portable...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="lname">ADRESSE MAIL</label>
                </div>
                <div class="col-75">
                    <input type="text" id="lname" placeholder="Votre adresse mail...">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="subject">Sujet</label>
                </div>
                <div class="col-75">
                    <textarea id="subject" name="subject" placeholder="Votre message..." style="height:200px"></textarea>
                </div>
            </div>
            <br>
            <button type="button" class="btn-1">Envoyer<a href="#"></a></button>
        </form>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6" id="check">
                    <p>Serais intéressé(e) par une adhésion à l’association les RANDONNEURS DU MARAIS SUD VENDEE, ayant pris
                        connaissance du règlement intérieur. </p>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    </div>
                </div>


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

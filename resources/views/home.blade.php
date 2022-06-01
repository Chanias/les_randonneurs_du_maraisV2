@extends('layouts.app')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 home-title">
                <h1>Les randonneurs du marais sud vendée</h1>
            </div>
        </div>
    </div>


    <!--CAROUSEL START-->
    <div class="container-fluid">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000">
                    <img src="{{ asset('images/bois_reduite.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block w-25 h-75">
                        <div class="details">
                            <p>ADRESSE : 25 rue de l'Eglise 85770 Le Gué de Velluire </p>
                            <p>TEL : 02 51 52 54 93</p>
                            <p>MAIL : bonneau.marcelle@gmail.com</p>
                            <a href="./contact.html" class="btn-1" target="_blank">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/marais_salant_reduite.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block w-25 h-75">
                        <div class="details">
                            <p>ADRESSE : 25 rue de l'Eglise 85770 Le Gué de Velluire </p>
                            <p>TEL : 02 51 52 54 93</p>
                            <p>MAIL : bonneau.marcelle@gmail.com</p>
                            <a href="./contact.html" class="btn-1" target="_blank">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/port_reduite.jpeg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block w-25 h-75">
                        <div class="details">
                            <p>ADRESSE : 25 rue de l'Eglise 85770 Le Gué de Velluire </p>
                            <p>TEL : 02 51 52 54 93</p>
                            <p>MAIL : bonneau.marcelle@gmail.com</p>
                            <a href="./contact.html" class="btn-1" target="_blank">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!--CAROUSEL END-->

    <!--PRESENTATION START-->
    <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-title">
                    <h2>Qui sommes nous</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Affiliés à la FFR Vendée, l’association « Les Randonneurs du Marais Sud-Vendée » est une association
                        regroupant des Hommes et des femmes qui ont pour but de marcher ensemble en milieu naturel (plaine,
                        marais, bord de mer). C’est non seulement une activité physique de plein air, mais également de la
                        découverte du patrimoine, dans une ambiance conviviale et chaleureuse. </p>
                </div>
            </div>
        </div>
        <!--CAROUSEL 2 START-->
        <div class="container-fluid">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner" id="pop">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/bloc_pierre_reduite.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption w-25 h-75">
                            <a href="./contact.html" class="btn-1">Je m'inscris</a>
                        </div>
                    </div>
                    <div class="carousel-caption">
                        <span>La première marche est gratuite, venez en profiter !!!</span>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('images/plage_reduite.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption w-25 h-75">
                            <a href="./contact.html" class="btn-1">Je m'inscris</a>
                        </div>
                    </div>
                    <div class="carousel-caption">
                        <span>La première marche est gratuite, venez en profiter !!!</span>
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/moutons_reduite.jpeg') }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption w-25 h-75">
                            <a href="./contact.html" class="btn-1">Je m'inscris</a>
                        </div>
                    </div>
                    <div class="carousel-caption">
                        <span>La première marche est gratuite, venez en profiter !!!</span>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <!--CAROUSEL 2 END-->

        <!--PRESENTATION END-->

        <!--SORTIES START-->
        <section id="sorties">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Quelques sorties</h2>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4">
                        <div class="sorties-details">
                            <img src="{{ asset('images/petites/plage2_petite.jpeg') }}" class="d-block w-100" alt="...">
                            <h4>Bord de mer</h4>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sorties-details">
                            <img src="{{ asset('images/petites/foussais_payre_petite.jpeg') }}" class="d-block w-100"
                                alt="...">
                            <h4>Foussais payré</h4>

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sorties-details">
                            <img src="{{ asset('images/petites/cheveaux_petite.jpeg') }}" class="d-block w-100" alt="...">
                            <h4>Découverte nature</h4>


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="mot_presidente">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Un petit mot de la présidente</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-md-2">
                        <p>L’Association Les Randonneurs du Marais Sud Vendée a été créée en 2010. Elle compte 50 adhérents
                            au 1er janvier 2022.
                            Les marches qui ont lieu les mercredis et les samedis se font dans une ambiance bon-enfant.
                            Plusieurs moments de convivialités nous réunissent, galette des Rois, pot en fin de randonnée
                            pour fêter un anniversaire, ou lors d’un pique-nique lorsque nous randonnons à la journée.😀
                        </p>
                    </div>
                </div>
        </section>
        <!--SORTIES END-->

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

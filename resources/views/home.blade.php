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
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/marais_salant_reduite.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item" data-bs-interval="3000">
                    <img src="{{ asset('images/port_reduite.jpeg') }}" class="d-block w-100" alt="...">
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
                        regroupant des Hommes et des femmes qui ont pour but de marcher ensemble en milieu naturel plaine,
                        marais, bord de mer. C’est non seulement une activité physique de plein air, mais également de la
                        découverte du patrimoine, dans une ambiance conviviale et chaleureuse. L’Association Les Randonneurs
                        du Marais Sud Vendée a été créée en 2010. Elle compte 50 adhérents
                        au 1er janvier 2022. </p>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Les randonnées :</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                Les marches qui ont lieu les mercredis et les samedis se font dans une ambiance bon-enfant.
                                Plusieurs moments de convivialités nous réunissent, galette des Rois, pot en fin de
                                randonnée
                                pour fêter un anniversaire, ou lors d’un pique-nique lorsque nous randonnons à la journée.😀
                                Il faudra adhérer à l'association pour avoir accès à la liste des activités tout au long de
                                l'année, à l'accès à toutes les photos ainsi qu'au forum. Vous trouverez le lien vers
                                l'inscription un peu plus bas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!--PRESENTATION END-->

            <!--SORTIES START-->
            <section id="sorties">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Quelques sorties</h2>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="sorties-details">
                                    <img src="{{ asset('images/petites/plage2_petite.jpeg') }}" class="d-block w-100"
                                        alt="...">
                                    <h4>Bord de mer</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sorties-details">
                                    <img src="{{ asset('images/petites/foret_petite.jpeg') }}"
                                        class="d-block w-100" alt="...">
                                    <h4>Forêt</h4>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="sorties-details">
                                    <img src="{{ asset('images/petites/cheveaux_petite.jpeg') }}" class="d-block w-100"
                                        alt="...">
                                    <h4>Découverte nature</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" id="plus">
                        <div class="row">
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
                    </div>

                    <div class="container">
                        <div class="card-body">
                            <h4>Ce que comprend l'adhésion :</h4>
                            <p class="card-text text-center font-weight-light">La cotisation au club</p>
                            <p class="card-text text-center font-weight-light">La licence de la FFR Randonnée</p>
                            <p class="card-text text-center font-weight-light">Les assurances</p>
                        </div>
                        <h4>Un certificat médical sera demandé pour toute nouvelle inscription.</h4>
                    </div>
            </section>

            <!--SORTIES END-->
            <!--CAROUSEL 2 START-->
            <div class="container-fluid" id="carrousel2">
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
                            <img src="{{ asset('images/bloc_pierre_reduite.jpeg') }}" class="d-block w-100"
                                alt="...">
                            <div class="carousel-caption w-25 h-75">
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <span>La première marche est gratuite, venez en profiter !!!</span>
                        </div>

                        <div class="carousel-item">
                            <img src="{{ asset('images/plage_reduite.jpeg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption w-25 h-75">
                            </div>
                        </div>
                        <div class="carousel-caption">
                            <span>La première marche est gratuite, venez en profiter !!!</span>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/moutons_reduite.jpeg') }}" class="d-block w-100" alt="...">
                            <div class="carousel-caption w-25 h-75">
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

            <!--NOUS REJOINDRE START-->
            <section id="nous_rejoindre">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Nous rejoindre</h2>
                        </div>
                    </div>
                    <p>Si vous voulez adhérer à l'association, voici le lien d'inscription: <a
                            href="{{ route('register') }}" class="btn-1">Nous rejoindre</a>
                    </p>

                </div>
            </section>
            <!--CONTACT END-->

            <!--FOOTER START-->
            <footer>
                <div class="container-fluid">

                    <img src="{{ asset('images/logo_fond_vert.jpeg') }}" alt="Logo" style="width:60px;"
                        class="rounded-pill">
                </div>

                <div class="details_2">
                    <button type="button" class="btn-1">Copyright<a href="#"></a></button>
                    <button type="button" class="btn-1">Mentions Légales<a href="#"></a></button>
                    <button type="button" class="btn-1">Politique de confidentialité<a href="#"></a></button>
                </div>

                <div class="copyright">
                    <p>Les Randonneurs du Marais Sud Vendée - 2021.</p>
                </div>
            </footer>
            <!--FOOTER END-->
        @endsection

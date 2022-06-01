@extends('layouts/app')

@section('title')
    Nos photos
@endsection

@section('content')
    <section id="photos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-title">
                    <h1>Les randonneurs du marais sud vendée</h1>
                </div>
            </div>
        </div>


        <!--GALLERY START-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Quelques photos de 2022</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4 justify-content-center">
                    <img src="{{ asset('images/petites/sentier_petite.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/plage2_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/cheveaux_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/bois_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/foussais_payre_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/moutons_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            <a href="{{ route('contact.index') }} class=" btn-1">En savoir plus</a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Quelques photos de 2021</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/port_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/plage_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/etang_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/foret_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/20200625_134148_petite.jpeg') }}" class="d-block w-100"
                        alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/petites/footer_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            <a href="{{ route('contact.index') }} class=" btn-1">En savoir plus</a>
        </div>
    </section>

    <!--GALLERY END-->
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

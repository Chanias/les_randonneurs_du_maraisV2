@extends('layouts/app')

@section('title')
    Nos photos
@endsection

@section('content')
    <section id="photos">
        <div class="container">
            <div class="row">
                <div class="col-md-12 home-title">
                    <h1>Nos photos souvenirs</h1>
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
                    <img src="{{ asset('images/photos/petites/sentier_petite.jpeg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/plage2_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/cheveaux_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/bois_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/foussais_payre_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/moutons_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Quelques photos de 2021</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/port_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/plage_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/etang_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/foret_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/20200625_134148_petite.jpeg') }}" class="d-block w-100"
                        alt="image">
                </div>
                <div class="col-md-4 mt-3 col-lg-4">
                    <img src="{{ asset('images/photos/petites/footer_petite.jpeg') }}" class="d-block w-100" alt="image">
                </div>
            </div>
            
        </div>
    </section>

    <!--GALLERY END-->
   
@endsection

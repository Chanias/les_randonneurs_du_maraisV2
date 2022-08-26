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
    <!------------------------------------------ADRESSE------------------------------------------------>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center">Vous pouvez nous contacter à l'adresse suivante :</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card" id="adresse_contact">
                    <div class="card-body">
                      <h5 class="card-title">Nous retrouver</h5>
                      <p class="card-text">25 rue de l'Église</p>
                      <p class="card-text">85770 Le Gué de Velluire</p>
                      <p class="card-text">Téléphone : 02.51.52.54.93</p>
                      <p class="card-text">bonneau.marcelle@gmail.com</p>
                      
                    </div>
                  </div>
            </div>
      
            <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2752.8331586860163!2d-0.9212984999999999!3d46.3726981!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4806c7c5e65bc56b%3A0xab10422fe860332!2s25%20Rue%20de%20l&#39;%C3%89glise%2C%2085770%20Le%20Gu%C3%A9-de-Velluire!5e0!3m2!1sfr!2sfr!4v1658906243057!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
              
        
    </div>
    @endsection

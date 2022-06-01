@extends('layouts/app')

@section('title')
    Réglement intérieur
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

    <section id="reglement_interieur">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Règlement intérieur de l'association "Randonneurs du Marais Sud Vendée"</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Article 1</h3>
                    <p>Agrément des nouveaux membres. Tout nouveau membre doit être parrainé et présenté par deux membres de
                        l’association, dont au moins un membre fondateur, préalablement à son agrément. Il est agréé par le
                        conseil statuant à la majorité de tous ses membres. Le conseil statue lors de chacune de ses
                        réunions sur les demandes d’admission présentées. Les personnes désirant adhérer doivent remplir un
                        bulletin d’adhésion. </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Article 2</h3>
                    <p> Démission – Exclusion – Décès d’un membre 1. La démission doit être adressée au président du conseil
                        par lettre recommandée. Elle n’a pas à être motivée par le membre démissionnaire. 2. Comme indiqué à
                        l’article « N » des statuts, l’exclusion d’un membre peut être prononcée par le conseil, pour motif
                        grave. Sont notamment réputés constituer des motifs graves : - la non-participation aux activités de
                        l’association ; - une condamnation pénale pour crime et délit ; - toute action de nature à porter
                        préjudice, directement ou indirectement, aux activités de l’association ou à sa réputation. En tout
                        état de cause, l’intéressé doit être mis en mesure de présenter sa défense, préalablement à la
                        décision d’exclusion. La décision d’exclusion est adoptée par le conseil statuant à la majorité des
                        deux tiers des membres présents. 3. En cas de décès d’un membre, les héritiers ou les légataires ne
                        peuvent prétendre à un quelconque maintien dans l’association</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Article 3</h3>
                    <p>Votes des membres présents Les membres présents votent à main levée. Toutefois, un scrutin secret
                        peut être demandé par le conseil ou « X » % (par exemple, 20%) des membres présents. 2. Votes par
                        procuration Comme indiqué à l’article « N » des statuts, si un membre de l’association ne peut
                        assister personnellement à une assemblée. </p>
                </div>
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

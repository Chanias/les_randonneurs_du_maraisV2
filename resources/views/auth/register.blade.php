@extends('layouts.app')

@section('content')
    <div class="container" id="inscription">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Inscription') }}</div>
                    <div class=" col-md-8 offset-2 text-center">
                        <p>Pour nous rejoindre, vous devrez lire et valider le règlement intérieur et renseigner le
                            formulaire ci-joint. Par la suite, vous serez recontacté par le bureau de l'association qui
                            confirmera votre inscription et vous demandera de préparer un certificat médical ainsi qu'un
                            montant chèque de 30€.</p>
                    </div>
                    <!--BOUTON DU MODAL -->
                    <button type="button" class="btn btn-success d-flex justify-content-center mx-auto text-center mb-4"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Réglement intérieur
                    </button>
                    <!-- MODAL START -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2 class="modal-title" style="color: #198754" id="exampleModalLabel">Règlement
                                        intérieur de l'association "Randonneurs du Marais Sud Vendée"</h2>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <div class="marge intérieure" style="line-height: 1;">
                                        <div class="row">
                                            <div class="col-md-12" id="preambule">
                                                <p>Tout adhérent doit lire attentivement ce règlement intérieur et s’engager
                                                    à le respecter, notamment
                                                    les consignes de sécurité, l’équipement personnel ainsi que le
                                                    comportement individuel et collectif.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 1 : objet du règlement intérieur</h3>

                                                <p>Le règlement intérieur a pour objet :</p>

                                                <p><i class="fas fa-angle-right"></i> De préciser les modalités
                                                    d’application des statuts,</p>

                                                <p><i class="fas fa-angle-right"></i> De fixer les points non prévus dans
                                                    les statuts.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 2 : objectif de l'association</h3>

                                                <p> L’association a pour objectif de promouvoir la découverte de la nature
                                                    en général par la randonnée
                                                    pédestre, dans un esprit amical, sans caractère de compétition.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 3 : adhésion</h3>

                                                <p>Etre membre de l’association, c’est accepter son règlement intérieur
                                                    après avoir sollicité son
                                                    adhésion et acquitté la cotisation au nom « des Randonneurs du Marais -
                                                    Sud Vendée ».</p>

                                                <p>Les dates de validité de l’adhésion sont celles définies par la
                                                    Fédération Française de Randonnée
                                                    Pédestre (FFRP) à laquelle l’association est affiliée, soit du 1er
                                                    septembre au 31 août de l’année
                                                    suivante.</p>

                                                <p>La cotisation est à régler lors de l’assemblée Générale annuelle en cas
                                                    de renouvellement ou après
                                                    la première randonnée dite d’essai pour une nouvelle adhésion.</p>

                                                <p>Le montant de l’adhésion est fixé chaque année et adopté par l’Assemblée
                                                    Générale ; elle comprend :
                                                </p>

                                                <p>- la cotisation proprement dite à l’association,</p>

                                                <p>- la licence à la FFRP incluant l’assurance individuelle (article 4).</p>

                                                <p>Tout membre justifiant d’une licence FFRP obtenue par ailleurs, ne paie
                                                    que la cotisation à
                                                    l’Association.</p>

                                                <p>L’adhésion n’est effective qu’après présentation d’un certificat médical
                                                    précisant qu’il n’existe
                                                    pas de restriction ou de contre indication à la pratique de la
                                                    randonnée.</p>
                                                <p>Un reçu peut être délivré sur demande.</p>

                                                <p>Lors de l’adhésion, chaque adhérent doit préciser s’il accepte que son
                                                    image soit utilisée pour
                                                    enrichir l’album photo de l’association, et publiée sur Internet ou dans
                                                    la presse. En cas de
                                                    désaccord, il doit expressément le signaler lors de l’adhésion.</p>

                                                <p> Chaque année, le bureau de l’association se réserve le droit de décider
                                                    d’accepter ou de limiter le
                                                    nombre de ses adhérents.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 4 : assurance</h3>

                                                <p>L’assurance est incluse dans le coût de la licence. Elle garantit
                                                    l’adhérent au cours de randonnées
                                                    pratiquées en dehors de celles organisées par l’Association, sur le
                                                    territoire national ou à
                                                    l’étranger.</p>

                                                <p>Elle est valable du 1er septembre au 31 décembre de l’année suivante.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Participation occasionnelle</h3>

                                                <p>Une personne, non adhérente à l’association des « Randonneurs du
                                                    Marais-Sud Vendée » peut participer
                                                    à 2 activités de l’association sous réserve : </p>

                                                <p>1. qu’il s’agisse d’un essai préalable à l’adhésion,</p>

                                                <p>2. qu’elle ait été invitée par un membre de l’Association qui doit en
                                                    informer celle-ci. En cas de
                                                    désaccord, il se porte garant de son invité, qui aura signé une décharge
                                                    de responsabilité, et le
                                                    prendra en charge, en cas de problème.</p>

                                                <p>3. que l’activité concernée ne soit pas pour un éventuel séjour de
                                                    plusieurs jours.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 5 : organisation des activités de l'association</h3>

                                                <p>L’activité de l’Association « les Randonneurs du Marais-Sud Vendée » est
                                                    principalement constituée
                                                    par l’organisation de randonnées :</p>

                                                <p>- en matinée,</p>

                                                <p>- l’après-midi,</p>

                                                <p>- pendant une journée.</p>

                                                <p>Des randonnées avec séjour pourront être proposées, soit par
                                                    l’Association, soit par ses membres.</p>

                                                <p>Le calendrier des randonnées est décidé lors de réunions du collectif élu
                                                    et validé par le Bureau.
                                                    Il est établi et diffusé à l’ensemble des membres adhérents.</p>

                                                <p>Toutefois, il est prudent de se renseigner avant chaque randonnée auprès
                                                    de l’un des membres du
                                                    bureau en cas de risque d’annulation due, par exemple, aux conditions
                                                    atmosphériques, par trop
                                                    dissuasives ou comportant des difficultés ou risques...</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 6 : déroulement des randonnées</h3>

                                                <p>Chaque randonnée est placée sous la responsabilité de 2 ou 4 animateurs
                                                    qui seront seuls juges sur la
                                                    conduite du groupe qu’ils encadrent.</p>

                                                <p>Les enfants mineurs doivent, en permanence, rester sous la surveillance
                                                    de leurs parents.</p>

                                                <p>Les animaux de compagnie sont strictement interdits lors des randonnées.
                                                </p>

                                                <p>Tout randonneur se doit d’avoir un équipement minimum adapté et lui
                                                    permettant de faire face aux
                                                    conditions géographiques et climatiques d’une randonnée normale :
                                                    chaussures de marche, sac à dos,
                                                    gourde, vêtements de pluie, contre le froid ou le soleil.</p>

                                                <p>L’association fournira une pharmacie de base.</p>

                                                <p>Les aliments d’appoint restent personnels.</p>

                                                <p>Chaque adhérent doit être muni de sa licence FFRP.</p>

                                                <p>Les déplacements vers le point de départ des randonnées sont effectués en
                                                    véhicule personnel et sous
                                                    la responsabilité de chaque conducteur.</p>

                                                <p>Le covoiturage est conseillé.</p>

                                                <p>Le parcours de la randonnée pourra être modifié ou la randonnée annulée
                                                    en cas de force majeure.</p>

                                                <p>Pour le bon déroulement de la randonnée, chacun doit avoir une attitude
                                                    responsable, respectueuse et
                                                    conviviale.</p>

                                                <p>Les animateurs désignés pour ouvrir la marche du groupe ne pourront être
                                                    dépassés que sur leur
                                                    autorisation explicite.</p>

                                                <p>En cas d’incident ou d’accident, les personnes qui outrepasseraient ces
                                                    consignes ou qui resteraient
                                                    derrière l’animateur en serre-file (gilet jaune) n’auraient aucune
                                                    garantie ni assurance autre que
                                                    leur propre assurance responsabilité civile personnelle.</p>

                                                <p>Aucun participant ne peut quitter le groupe ou changer d’itinéraire, en
                                                    cours de randonnée. Dans ce
                                                    cas, l’Association ne serait plus responsable pour tout incident survenu
                                                    après son départ du groupe
                                                    ou sur un tronçon d’itinéraire non prévu.</p>

                                                <p>En cas d’accident :</p>

                                                <p>- pour les petits bobos, une trousse de premier secours est à
                                                    disposition,</p>

                                                <p>- signaler l’accident à l’animateur ou à un responsable de l’Association
                                                    qui alertera les secours,
                                                    si nécessaire,</p <p>- établir éventuellement une déclaration à
                                                l’assureur.</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 7 : respect de l'environnement</h3>

                                                <p><i class="fas fa-angle-right"></i> Ne jetez rien à terre et rapportez
                                                    tous vos déchets. </p>

                                                <p><i class="fas fa-angle-right"></i> Laissez les lieux aussi propres que
                                                    vous auriez souhaité les trouver.</p>

                                                <p><i class="fas fa-angle-right"></i> N’arrachez et ne coupez pas les
                                                    plantes ou fleurs, contentez-vous de les photographier.</p>

                                                <p><i class="fas fa-angle-right"></i> Suivez les sentiers,</p>

                                                <p><i class="fas fa-angle-right"></i> Refermez les barrières et respectez
                                                    les clôtures et les propriétés privées.</p>

                                                <p><i class="fas fa-angle-right"></i> Attention aux risques d’incendie (feu,
                                                    cigarettes...)</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3>Article 8 : organisation de séjours</h3>
                                                <p>L’association pourra, à l’avenir et sur décision du bureau, après
                                                    discussion en Assemblée Générale,
                                                    proposer des séjours avec randonnées. Les conditions d’organisation en
                                                    seraient alors précisées.
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                    </section>
                                    <br>
                                    <section id="CGU">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-center">J'ai pris connaissance du règlement intérieur et
                                                        l'accepte</p>
                                                    <div class="form-check text-center">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="flexCheckDefault"style="margin-left:45%; margin-right:auto;"
                                                            </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <div class="modal-footer text-center mx-auto">
                                    <form action="" method="POST">
                                        <input type="hidden" name="">
                                        <button type="submit" class="btn btn-primary text-center mx-auto">Retour à
                                            l'inscription</button>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>


                    <!-- MODAL END -->

                    <!--VOIR POUR L ENVOI DE MAIL VIA FORMULAIRE ET METTRE UNE ALERTE SUR LE COMPTE ADMIN POUR LES NOUVELLES ADHESIONS POUR RECONTACTER LA PERSONNE-->

                    <!--FORMULAIRE INSCRIPTOION-->
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <!--NOM-->
                            <div class="row mb-3">
                                <label for="nom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Nom :') }}</label>
                                <div class="col-md-6">
                                    <input id="nom" type="text"
                                        class="form-control @error('nom') is-invalid @enderror" name="nom"
                                        value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--PRENOM-->
                            <div class="row mb-3">
                                <label for="prenom"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Prénom :') }}</label>
                                <div class="col-md-6">
                                    <input id="prenom" type="text"
                                        class="form-control @error('prenom') is-invalid @enderror" name="prenom"
                                        value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                                    @error('prenom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--DATE DE NAISSANCE-->
                            <div class="row mb-3">
                                <label for="date_de_naissance"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Date de naissance :') }}</label>
                                <div class="col-md-6">
                                    <input id="date_de_naissance" type="text"
                                        class="form-control @error('date_de_naissance') is-invalid @enderror"
                                        name="date_de_naissance" value="{{ old('date_de_naissance') }}" required
                                        autocomplete="date_de_naissance" autofocus>
                                    @error('date_de_naissance')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--ADRESSE-->
                            <div class="row mb-3">
                                <label for="adresse"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Adresse :') }}</label>
                                <div class="col-md-6">
                                    <input id="adresse" type="text"
                                        class="form-control @error('adresse') is-invalid @enderror" name="adresse"
                                        value="{{ old('adresse') }}" required autocomplete="adresse" autofocus>
                                    @error('adresse')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--CODE POSTAL-->
                            <div class="row mb-3">
                                <label for="code_postal"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Code postal :') }}</label>
                                <div class="col-md-6">
                                    <input id="code_postal" type="text"
                                        class="form-control @error('code_postal') is-invalid @enderror" name="code_postal"
                                        value="{{ old('code_postal') }}" required autocomplete="code_postal" autofocus>
                                    @error('code_postal')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--VILLE-->
                            <div class="row mb-3">
                                <label for="ville"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Ville :') }}</label>
                                <div class="col-md-6">
                                    <input id="ville" type="text"
                                        class="form-control @error('ville') is-invalid @enderror" name="ville"
                                        value="{{ old('ville') }}" required autocomplete="ville" autofocus>
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--NUMERO DE TELEPHONE FIXE-->
                            <div class="row mb-3">
                                <label for="num_telephone_fixe"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone fixe :') }}</label>
                                <div class="col-md-6">
                                    <input id="num_telephone_fixe" type="text" placeholder="00 00 00 00 00"
                                        class="form-control @error('num_telephone_fixe') is-invalid @enderror"
                                        name="num_telephone_fixe" value=" {{ old('num_telephone_fixe') }}"
                                        autocomplete="num_telephone_fixe" autofocus>
                                    @error('num_telephone_fixe')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--NUMERO DE TELEPHONE PORTABLE-->
                            <div class="row mb-3">
                                <label for="num_telephone_portable"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Numéro de téléphone portable :') }}</label>
                                <div class="col-md-6">
                                    <input id="num_telephone_portable" type="text" placeholder="00 00 00 00 00"
                                        class="form-control @error('num_telephone_portable') is-invalid @enderror"
                                        name="num_telephone_portable" value="{{ old('num_telephone_portable') }}"
                                        autocomplete="num_telephone_portable" autofocus>
                                    @error('num_telephone_portable')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--EMAIL-->
                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Adresse mail :') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="exemple@exemple.fr"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--MOT DE PASSE-->
                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Mot de passe :') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!--CONFIRMATION MOT DE PASSE-->
                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirmation mot de passe :') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <!--BOUTON ENREGISTRER-->
                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enregistrer') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

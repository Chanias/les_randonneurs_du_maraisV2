@extends('layouts.app')

@section('content')
    <script>
        $(document).on('click', '#checkbox', function() {
            console.log("Checkbox clicked");
            let value = "";
            if ($(this).is(':checked') == true) {
                value = $(this).attr('data-sid');
                console.log(value);
            } else if ($(this).is(':checked') == false) {
                // value = $(this).attr('value', 'false1').val();
                console.log("CAN'T SELECT CHECKBOX");
            }

        })
    </script>
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
                        Réglement intérieur et politique de confidentialité
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

                                    <div class="container">
                                        <div class="row">
                                            <h2 class="modal-title" style="color: #198754" id="exampleModalLabel">Mentions légales</h2>
    
                                            <h3 class="text-center">Définitions</h3>
    
                                            <p>Client : tout professionnel ou personne physique capable au sens des articles 1123
                                                et suivants du Code civil, ou personne morale, qui visite le Site objet des
                                                présentes conditions générales.
                                                Prestations et Services : https://www.les-randonneurs-du-marais.fr met à disposition
                                                des Clients :</p>
    
                                            <p>Contenu : Ensemble des éléments constituants l’information présente sur le Site,
                                                notamment textes – images – vidéos.</p>
    
                                            <p>Informations clients : Ci après dénommé « Information (s) » qui correspondent à
                                                l’ensemble des données personnelles susceptibles d’être détenues par
                                                https://www.les-randonneurs-du-marais.fr pour la gestion de votre compte, de la
                                                gestion de la relation client et à des fins d’analyses et de statistiques.
        </p>
                                            <p>Utilisateur : Internaute se connectant, utilisant le site susnommé.</p>
    
                                            <p>Informations personnelles : « Les informations qui permettent, sous quelque forme
                                                que ce soit, directement ou non, l'identification des personnes physiques auxquelles
                                                elles s'appliquent » (article 4 de la loi n° 78-17 du 6 janvier 1978).</p>
    
                                            <p>Les termes « données à caractère personnel », « personne concernée », « sous
                                                traitant » et « données sensibles » ont le sens défini par le Règlement Général sur
                                                la Protection des Données (RGPD : n° 2016-679)
                                                1. Présentation du site internet.</p>
    
                                            <p>En vertu de l'article 6 de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans
                                                l'économie numérique, il est précisé aux utilisateurs du site internet
                                                https://www.les-randonneurs-du-marais.fr l'identité des différents intervenants dans
                                                le cadre de sa réalisation et de son suivi:</p>
    
                                            <p>Propriétaire : Floriane Siedlecki – 2 rue du stade 79410 Saint Maxire
                                                Responsable publication : Floriane Siedlecki – florianesiedlecki@gmail.com
                                                Le responsable publication est une personne physique ou une personne morale.
                                                Webmaster : Floriane Siedlecki – florianesiedlecki@gmail.com
                                                Hébergeur : 1and1 – 7 Place de la Gare 57200 Sarreguemines 0970 808 911
                                                Délégué à la protection des données : Floriane Siedlecki –
                                                florianesiedlecki@gmail.com</p>
    
                                            <p>Les mentions légales sont issues du modèle proposé par le générateur gratuit de
                                                mentions légales pour un site internet</p>

                                            <p>2. Conditions générales d’utilisation du site et des services proposés.</p>
    
                                            <p>Le Site constitue une œuvre de l’esprit protégée par les dispositions du Code de la
                                                Propriété Intellectuelle et des Réglementations Internationales applicables. Le
                                                Client ne peut en aucune manière réutiliser, céder ou exploiter pour son propre
                                                compte tout ou partie des éléments ou travaux du Site.</p>
    
                                            <p>L’utilisation du site https://www.les-randonneurs-du-marais.fr implique
                                                l’acceptation pleine et entière des conditions générales d’utilisation ci-après
                                                décrites. Ces conditions d’utilisation sont susceptibles d’être modifiées ou
                                                complétées à tout moment, les utilisateurs du site
                                                https://www.les-randonneurs-du-marais.fr sont donc invités à les consulter de
                                                manière régulière.</p>
    
                                            <p>Ce site internet est normalement accessible à tout moment aux utilisateurs. Une
                                                interruption pour raison de maintenance technique peut être toutefois décidée par
                                                https://www.les-randonneurs-du-marais.fr, qui s’efforcera alors de communiquer
                                                préalablement aux utilisateurs les dates et heures de l’intervention. Le site web
                                                https://www.les-randonneurs-du-marais.fr est mis à jour régulièrement par
                                                https://www.les-randonneurs-du-marais.fr responsable. De la même façon, les mentions
                                                légales peuvent être modifiées à tout moment : elles s’imposent néanmoins à
                                                l’utilisateur qui est invité à s’y référer le plus souvent possible afin d’en
                                                prendre connaissance.</p>

                                            <p>3. Description des services fournis.</p>
    
                                            <p>Le site internet https://www.les-randonneurs-du-marais.fr a pour objet de fournir
                                                une information concernant l’ensemble des activités de la société.
                                                https://www.les-randonneurs-du-marais.fr s’efforce de fournir sur le site
                                                https://www.les-randonneurs-du-marais.fr des informations aussi précises que
                                                possible. Toutefois, il ne pourra être tenu responsable des oublis, des
                                                inexactitudes et des carences dans la mise à jour, qu’elles soient de son fait ou du
                                                fait des tiers partenaires qui lui fournissent ces informations.</p>
    
                                            <p>Toutes les informations indiquées sur le site
                                                https://www.les-randonneurs-du-marais.fr sont données à titre indicatif, et sont
                                                susceptibles d’évoluer. Par ailleurs, les renseignements figurant sur le site
                                                https://www.les-randonneurs-du-marais.fr ne sont pas exhaustifs. Ils sont donnés
                                                sous réserve de modifications ayant été apportées depuis leur mise en ligne.</p>

                                            <p>4. Limitations contractuelles sur les données techniques.</p>
    
                                            <p>Le site utilise la technologie JavaScript. Le site Internet ne pourra être tenu
                                                responsable de dommages matériels liés à l’utilisation du site. De plus,
                                                l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne
                                                contenant pas de virus et avec un navigateur de dernière génération mis-à-jour Le
                                                site https://www.les-randonneurs-du-marais.fr est hébergé chez un prestataire sur le
                                                territoire de l’Union Européenne conformément aux dispositions du Règlement Général
                                                sur la Protection des Données (RGPD : n° 2016-679)</p>
    
                                            <p>L’objectif est d’apporter une prestation qui assure le meilleur taux
                                                d’accessibilité. L’hébergeur assure la continuité de son service 24 Heures sur 24,
                                                tous les jours de l’année. Il se réserve néanmoins la possibilité d’interrompre le
                                                service d’hébergement pour les durées les plus courtes possibles notamment à des
                                                fins de maintenance, d’amélioration de ses infrastructures, de défaillance de ses
                                                infrastructures ou si les Prestations et Services génèrent un trafic réputé anormal.</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr et l’hébergeur ne pourront être tenus
                                                responsables en cas de dysfonctionnement du réseau Internet, des lignes
                                                téléphoniques ou du matériel informatique et de téléphonie lié notamment à
                                                l’encombrement du réseau empêchant l’accès au serveur.</p>

                                            <p>5. Propriété intellectuelle et contrefaçons.
                                            </p>
                                           <p>https://www.les-randonneurs-du-marais.fr est propriétaire des droits de propriété
                                            intellectuelle et détient les droits d’usage sur tous les éléments accessibles sur
                                            le site internet, notamment les textes, images, graphismes, logos, vidéos, icônes et
                                            sons. Toute reproduction, représentation, modification, publication, adaptation de
                                            tout ou partie des éléments du site, quel que soit le moyen ou le procédé utilisé,
                                            est interdite, sauf autorisation écrite préalable de :
                                            https://www.les-randonneurs-du-marais.fr.</p> 
    
                                            <p>Toute exploitation non autorisée du site ou de l’un quelconque des éléments qu’il
                                                contient sera considérée comme constitutive d’une contrefaçon et poursuivie
                                                conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété
                                                Intellectuelle.</p>

                                            <p>6. Limitations de responsabilité.</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr agit en tant qu’éditeur du site.
                                                https://www.les-randonneurs-du-marais.fr est responsable de la qualité et de la
                                                véracité du Contenu qu’il publie.</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr ne pourra être tenu responsable des
                                                dommages directs et indirects causés au matériel de l’utilisateur, lors de l’accès
                                                au site internet https://www.les-randonneurs-du-marais.fr, et résultant soit de
                                                l’utilisation d’un matériel ne répondant pas aux spécifications indiquées au point
                                                4, soit de l’apparition d’un bug ou d’une incompatibilité.</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr ne pourra également être tenu responsable
                                                des dommages indirects (tels par exemple qu’une perte de marché ou perte d’une
                                                chance) consécutifs à l’utilisation du site
                                                https://www.les-randonneurs-du-marais.fr. Des espaces interactifs (possibilité de
                                                poser des questions dans l’espace contact) sont à la disposition des utilisateurs.
                                                https://www.les-randonneurs-du-marais.fr se réserve le droit de supprimer, sans mise
                                                en demeure préalable, tout contenu déposé dans cet espace qui contreviendrait à la
                                                législation applicable en France, en particulier aux dispositions relatives à la
                                                protection des données. Le cas échéant, https://www.les-randonneurs-du-marais.fr se
                                                réserve également la possibilité de mettre en cause la responsabilité civile et/ou
                                                pénale de l’utilisateur, notamment en cas de message à caractère raciste, injurieux,
                                                diffamant, ou pornographique, quel que soit le support utilisé (texte, photographie
                                                …).</p>

                                            <p>7. Gestion des données personnelles.</p>
    
                                            <p>Le Client est informé des réglementations concernant la communication marketing, la
                                                loi du 21 Juin 2014 pour la confiance dans l’Economie Numérique, la Loi Informatique
                                                et Liberté du 06 Août 2004 ainsi que du Règlement Général sur la Protection des
                                                Données (RGPD : n° 2016-679).</p>
                                            
                                            <p> 7.1 Responsables de la collecte des données personnelles</p>   
    
                                            <p>Pour les Données Personnelles collectées dans le cadre de la création du compte
                                                personnel de l’Utilisateur et de sa navigation sur le Site, le responsable du
                                                traitement des Données Personnelles est : Floriane Siedlecki.
                                                https://www.les-randonneurs-du-marais.frest représenté par Marcelle Bonneau, son
                                                représentant légal</p>
    
                                            <p>En tant que responsable du traitement des données qu’il collecte,
                                                https://www.les-randonneurs-du-marais.fr s’engage à respecter le cadre des
                                                dispositions légales en vigueur. Il lui appartient notamment au Client d’établir les
                                                finalités de ses traitements de données, de fournir à ses prospects et clients, à
                                                partir de la collecte de leurs consentements, une information complète sur le
                                                traitement de leurs données personnelles et de maintenir un registre des traitements
                                                conforme à la réalité. Chaque fois que https://www.les-randonneurs-du-marais.fr
                                                traite des Données Personnelles, https://www.les-randonneurs-du-marais.fr prend
                                                toutes les mesures raisonnables pour s’assurer de l’exactitude et de la pertinence
                                                des Données Personnelles au regard des finalités pour lesquelles
                                                https://www.les-randonneurs-du-marais.fr les traite.</p>

                                            <p>7.2 Finalité des données collectées
                                            </p>
                                            <p>https://www.les-randonneurs-du-marais.fr est susceptible de traiter tout ou partie
                                                des données :</p>
    
                                            <p>pour permettre la navigation sur le Site et la gestion et la traçabilité des
                                                prestations et services commandés par l’utilisateur : données de connexion et
                                                d’utilisation du Site, facturation, historique des commandes, etc.
                                                pour prévenir et lutter contre la fraude informatique (spamming, hacking…) :
                                                matériel informatique utilisé pour la navigation, l’adresse IP, le mot de passe
                                                (hashé)
                                                pour améliorer la navigation sur le Site : données de connexion et d’utilisation
                                                pour mener des enquêtes de satisfaction facultatives sur
                                                https://www.les-randonneurs-du-marais.fr : adresse email
                                                pour mener des campagnes de communication (sms, mail) : numéro de téléphone, adresse
                                                email</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr ne commercialise pas vos données
                                                personnelles qui sont donc uniquement utilisées par nécessité ou à des fins
                                                statistiques et d’analyses.</p>

                                            <p>7.3 Droit d’accès, de rectification et d’opposition</p>
    
                                            <p>Conformément à la réglementation européenne en vigueur, les Utilisateurs de
                                                https://www.les-randonneurs-du-marais.fr disposent des droits suivants :</p>
    
                                            <p>droit d'accès (article 15 RGPD) et de rectification (article 16 RGPD), de mise à
                                                jour, de complétude des données des Utilisateurs droit de verrouillage ou
                                                d’effacement des données des Utilisateurs à caractère personnel (article 17 du
                                                RGPD), lorsqu’elles sont inexactes, incomplètes, équivoques, périmées, ou dont la
                                                collecte, l'utilisation, la communication ou la conservation est interdite
                                                droit de retirer à tout moment un consentement (article 13-2c RGPD)
                                                droit à la limitation du traitement des données des Utilisateurs (article 18 RGPD)
                                                droit d’opposition au traitement des données des Utilisateurs (article 21 RGPD)
                                                droit à la portabilité des données que les Utilisateurs auront fournies, lorsque ces
                                                données font l’objet de traitements automatisés fondés sur leur consentement ou sur
                                                un contrat (article 20 RGPD)</p>

                                            <p>droit de définir le sort des données des Utilisateurs après leur mort et de choisir
                                                à qui https://www.les-randonneurs-du-marais.fr devra communiquer (ou non) ses
                                                données à un tiers qu’ils aura préalablement désigné</p>
    
                                            <p>Dès que https://www.les-randonneurs-du-marais.fr a connaissance du décès d’un
                                                Utilisateur et à défaut d’instructions de sa part,
                                                https://www.les-randonneurs-du-marais.fr s’engage à détruire ses données, sauf si
                                                leur conservation s’avère nécessaire à des fins probatoires ou pour répondre à une
                                                obligation légale.</p>
    
                                            <p>Si l’Utilisateur souhaite savoir comment https://www.les-randonneurs-du-marais.fr
                                                utilise ses Données Personnelles, demander à les rectifier ou s’oppose à leur
                                                traitement, l’Utilisateur peut contacter https://www.les-randonneurs-du-marais.fr
                                                par écrit à l’adresse suivante :
                                                Floriane Siedlecki – DPO, Floriane Siedlecki
                                                2 rue du stade 79410 Saint Maxire.</p>
    
                                            <p>Dans ce cas, l’Utilisateur doit indiquer les Données Personnelles qu’il souhaiterait
                                                que https://www.les-randonneurs-du-marais.fr corrige, mette à jour ou supprime, en
                                                s’identifiant précisément avec une copie d’une pièce d’identité (carte d’identité ou
                                                passeport).</p>
    
                                            <p>Les demandes de suppression de Données Personnelles seront soumises aux obligations
                                                qui sont imposées à https://www.les-randonneurs-du-marais.fr par la loi, notamment
                                                en matière de conservation ou d’archivage des documents. Enfin, les Utilisateurs de
                                                https://www.les-randonneurs-du-marais.fr peuvent déposer une réclamation auprès des
                                                autorités de contrôle, et notamment de la CNIL (https://www.cnil.fr/fr/plaintes).
                                                7.4 Non-communication des données personnelles</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr s’interdit de traiter, héberger ou
                                                transférer les Informations collectées sur ses Clients vers un pays situé en dehors
                                                de l’Union européenne ou reconnu comme « non adéquat » par la Commission européenne
                                                sans en informer préalablement le client. Pour autant,
                                                https://www.les-randonneurs-du-marais.fr reste libre du choix de ses sous-traitants
                                                techniques et commerciaux à la condition qu’il présentent les garanties suffisantes
                                                au regard des exigences du Règlement Général sur la Protection des Données (RGPD :
                                                n° 2016-679).</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr s’engage à prendre toutes les précautions
                                                nécessaires afin de préserver la sécurité des Informations et notamment qu’elles ne
                                                soient pas communiquées à des personnes non autorisées. Cependant, si un incident
                                                impactant l’intégrité ou la confidentialité des Informations du Client est portée à
                                                la connaissance de https://www.les-randonneurs-du-marais.fr, celle-ci devra dans les
                                                meilleurs délais informer le Client et lui communiquer les mesures de corrections
                                                prises. Par ailleurs https://www.les-randonneurs-du-marais.fr ne collecte aucune «
                                                données sensibles ».</p>
    
                                            <p>Les Données Personnelles de l’Utilisateur peuvent être traitées par des filiales de
                                                https://www.les-randonneurs-du-marais.fr et des sous-traitants (prestataires de
                                                services), exclusivement afin de réaliser les finalités de la présente politique.</p>
    
                                            <p>Dans la limite de leurs attributions respectives et pour les finalités rappelées
                                                ci-dessus, les principales personnes susceptibles d’avoir accès aux données des
                                                Utilisateurs de https://www.les-randonneurs-du-marais.fr sont principalement les
                                                agents de notre service client.</p>

                                            <p>8. Notification d’incident</p>

                                            <p>Quels que soient les efforts fournis, aucune méthode de transmission sur Internet et
                                                aucune méthode de stockage électronique n'est complètement sûre. Nous ne pouvons en
                                                conséquence pas garantir une sécurité absolue. Si nous prenions connaissance d'une
                                                brèche de la sécurité, nous avertirions les utilisateurs concernés afin qu'ils
                                                puissent prendre les mesures appropriées. Nos procédures de notification d’incident
                                                tiennent compte de nos obligations légales, qu'elles se situent au niveau national
                                                ou européen. Nous nous engageons à informer pleinement nos clients de toutes les
                                                questions relevant de la sécurité de leur compte et à leur fournir toutes les
                                                informations nécessaires pour les aider à respecter leurs propres obligations
                                                réglementaires en matière de reporting.</p>
    
                                            <p>Aucune information personnelle de l'utilisateur du site
                                                https://www.les-randonneurs-du-marais.fr n'est publiée à l'insu de l'utilisateur,
                                                échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule
                                                l'hypothèse du rachat de https://www.les-randonneurs-du-marais.fr et de ses droits
                                                permettrait la transmission des dites informations à l'éventuel acquéreur qui serait
                                                à son tour tenu de la même obligation de conservation et de modification des données
                                                vis à vis de l'utilisateur du site https://www.les-randonneurs-du-marais.fr.</p>

                                            <p>Sécurité</p>
    
                                            <p>Pour assurer la sécurité et la confidentialité des Données Personnelles et des
                                                Données Personnelles de Santé, https://www.les-randonneurs-du-marais.fr utilise des
                                                réseaux protégés par des dispositifs standards tels que par pare-feu, la
                                                pseudonymisation, l’encryption et mot de passe.</p>
    
                                            <p>Lors du traitement des Données Personnelles,
                                                https://www.les-randonneurs-du-marais.frprend toutes les mesures raisonnables visant
                                                à les protéger contre toute perte, utilisation détournée, accès non autorisé,
                                                divulgation, altération ou destruction.</p>

                                            <p>9. Liens hypertextes « cookies » et balises (“tags”) internet</p>
    
                                            <p>Le site https://www.les-randonneurs-du-marais.fr contient un certain nombre de liens
                                                hypertextes vers d’autres sites, mis en place avec l’autorisation de
                                                https://www.les-randonneurs-du-marais.fr. Cependant,
                                                https://www.les-randonneurs-du-marais.fr n’a pas la possibilité de vérifier le
                                                contenu des sites ainsi visités, et n’assumera en conséquence aucune responsabilité
                                                de ce fait.</p>
                                            <p>Sauf si vous décidez de désactiver les cookies, vous acceptez que le site puisse les
                                                utiliser. Vous pouvez à tout moment désactiver ces cookies et ce gratuitement à
                                                partir des possibilités de désactivation qui vous sont offertes et rappelées
                                                ci-après, sachant que cela peut réduire ou empêcher l’accessibilité à tout ou partie
                                                des Services proposés par le site.
        </p>
                                            <p>9.1. « COOKIES »</p>
    
                                            <p>Un « cookie » est un petit fichier d’information envoyé sur le navigateur de
                                                l’Utilisateur et enregistré au sein du terminal de l’Utilisateur (ex : ordinateur,
                                                smartphone), (ci-après « Cookies »). Ce fichier comprend des informations telles que
                                                le nom de domaine de l’Utilisateur, le fournisseur d’accès Internet de
                                                l’Utilisateur, le système d’exploitation de l’Utilisateur, ainsi que la date et
                                                l’heure d’accès. Les Cookies ne risquent en aucun cas d’endommager le terminal de
                                                l’Utilisateur.</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr est susceptible de traiter les informations
                                                de l’Utilisateur concernant sa visite du Site, telles que les pages consultées, les
                                                recherches effectuées. Ces informations permettent à
                                                https://www.les-randonneurs-du-marais.fr d’améliorer le contenu du Site, de la
                                                navigation de l’Utilisateur.</p>
    
                                            <p>Les Cookies facilitant la navigation et/ou la fourniture des services proposés par
                                                le Site, l’Utilisateur peut configurer son navigateur pour qu’il lui permette de
                                                décider s’il souhaite ou non les accepter de manière à ce que des Cookies soient
                                                enregistrés dans le terminal ou, au contraire, qu’ils soient rejetés, soit
                                                systématiquement, soit selon leur émetteur. L’Utilisateur peut également configurer
                                                son logiciel de navigation de manière à ce que l’acceptation ou le refus des Cookies
                                                lui soient proposés ponctuellement, avant qu’un Cookie soit susceptible d’être
                                                enregistré dans son terminal. https://www.les-randonneurs-du-marais.fr informe
                                                l’Utilisateur que, dans ce cas, il se peut que les fonctionnalités de son logiciel
                                                de navigation ne soient pas toutes disponibles.</p>
    
                                            <p>Si l’Utilisateur refuse l’enregistrement de Cookies dans son terminal ou son
                                                navigateur, ou si l’Utilisateur supprime ceux qui y sont enregistrés, l’Utilisateur
                                                est informé que sa navigation et son expérience sur le Site peuvent être limitées.
                                                Cela pourrait également être le cas lorsque https://www.les-randonneurs-du-marais.fr
                                                ou l’un de ses prestataires ne peut pas reconnaître, à des fins de compatibilité
                                                technique, le type de navigateur utilisé par le terminal, les paramètres de langue
                                                et d’affichage ou le pays depuis lequel le terminal semble connecté à Internet.</p>
    
                                            <p>Le cas échéant, https://www.les-randonneurs-du-marais.fr décline toute
                                                responsabilité pour les conséquences liées au fonctionnement dégradé du Site et des
                                                services éventuellement proposés par https://www.les-randonneurs-du-marais.fr,
                                                résultant (i) du refus de Cookies par l’Utilisateur (ii) de l’impossibilité pour
                                                https://www.les-randonneurs-du-marais.fr d’enregistrer ou de consulter les Cookies
                                                nécessaires à leur fonctionnement du fait du choix de l’Utilisateur. Pour la gestion
                                                des Cookies et des choix de l’Utilisateur, la configuration de chaque navigateur est
                                                différente. Elle est décrite dans le menu d’aide du navigateur, qui permettra de
                                                savoir de quelle manière l’Utilisateur peut modifier ses souhaits en matière de
                                                Cookies.</p>
    
                                            <p>À tout moment, l’Utilisateur peut faire le choix d’exprimer et de modifier ses
                                                souhaits en matière de Cookies. https://www.les-randonneurs-du-marais.fr pourra en
                                                outre faire appel aux services de prestataires externes pour l’aider à recueillir et
                                                traiter les informations décrites dans cette section.</p>
    
                                            <p>Enfin, en cliquant sur les icônes dédiées aux réseaux sociaux Twitter, Facebook,
                                                Linkedin et Google Plus figurant sur le Site de
                                                https://www.les-randonneurs-du-marais.fr ou dans son application mobile et si
                                                l’Utilisateur a accepté le dépôt de cookies en poursuivant sa navigation sur le Site
                                                Internet ou l’application mobile de https://www.les-randonneurs-du-marais.fr,
                                                Twitter, Facebook, Linkedin et Google Plus peuvent également déposer des cookies sur
                                                vos terminaux (ordinateur, tablette, téléphone portable).</p>
    
                                            <p>Ces types de cookies ne sont déposés sur vos terminaux qu’à condition que vous y
                                                consentiez, en continuant votre navigation sur le Site Internet ou l’application
                                                mobile de https://www.les-randonneurs-du-marais.fr. À tout moment, l’Utilisateur
                                                peut néanmoins revenir sur son consentement à ce que
                                                https://www.les-randonneurs-du-marais.fr dépose ce type de cookies.</p>

                                            <p>Article 9.2. BALISES (“TAGS”) INTERNET</p>
    
                                            <p>https://www.les-randonneurs-du-marais.fr peut employer occasionnellement des balises
                                                Internet (également appelées « tags », ou balises d’action, GIF à un pixel, GIF
                                                transparents, GIF invisibles et GIF un à un) et les déployer par l’intermédiaire
                                                d’un partenaire spécialiste d’analyses Web susceptible de se trouver (et donc de
                                                stocker les informations correspondantes, y compris l’adresse IP de l’Utilisateur)
                                                dans un pays étranger.</p>
    
                                            <p>Ces balises sont placées à la fois dans les publicités en ligne permettant aux
                                                internautes d’accéder au Site, et sur les différentes pages de celui-ci.</p>
    
                                            <p>Cette technologie permet à https://www.les-randonneurs-du-marais.fr d’évaluer les
                                                réponses des visiteurs face au Site et l’efficacité de ses actions (par exemple, le
                                                nombre de fois où une page est ouverte et les informations consultées), ainsi que
                                                l’utilisation de ce Site par l’Utilisateur.</p>
    
                                            <p>Le prestataire externe pourra éventuellement recueillir des informations sur les
                                                visiteurs du Site et d’autres sites Internet grâce à ces balises, constituer des
                                                rapports sur l’activité du Site à l’attention de
                                                https://www.les-randonneurs-du-marais.fr, et fournir d’autres services relatifs à
                                                l’utilisation de celui-ci et d’Internet.</p>
    
                                            <p>10. Droit applicable et attribution de juridiction.</p>

                                            <p>Tout litige en relation avec l’utilisation du site
                                                https://www.les-randonneurs-du-marais.fr est soumis au droit français. En dehors des
                                                cas où la loi ne le permet pas, il est fait attribution exclusive de juridiction aux
                                                tribunaux compétents de Niort</p>
                                        </div>
                                    </div>

                                    <div class="container">
                                        <div class="row">
                                            <h2 style="color:#198754"> Politique de confidentialité </h2>
           
            <p>ARTICLE 1 : PRÉAMBULE </p>
            <p>La présente politique de confidentialité a pour but d’informer les utilisateurs du site : </p>

            <p>• Sur la manière dont sont collectées leurs données personnelles. Sont considérées comme des données
                personnelles, toute information permettant d’identifier un utilisateur. A ce titre, il peut s’agir : de ses
                noms et prénoms, de son âge, de son adresse postale ou email, de sa localisation ou encore de son adresse IP
                (liste non-exhaustive) ;
                • Sur les droits dont ils disposent concernant ces données ;
                • Sur la personne responsable du traitement des données à caractère personnel collectées et traitées ;
                • Sur les destinataires de ces données personnelles ;
                • Sur la politique du site en matière de cookies. </p>

            <p>Cette politique complète les mentions légales et les Conditions Générales d’Utilisation consultables par les
                utilisateurs à l’adresse suivante :
                <a href="{{ route('mentions_legales') }}" class="btn-1" target="_blank">Mentions légales</a>
                <a href="{{ route('politique_confidentialite') }}" class="btn-1" target="_blank">Politiques de confidentialités</a></p>

            <p>ARTICLE 2 : PRINCIPES RELATIFS À LA COLLECTE ET AU TRAITEMENT DES DONNÉES PERSONNELLES </p>
            <p>Conformément à l’article 5 du Règlement européen 2016/679, les données à caractère personnel sont :
                • Traitées de manière licite, loyale et transparente au regard de la personne concernée ;
                • Collectées pour des finalités déterminées (cf. Article 3.1 des présentes), explicites et légitimes, et ne
                pas être traitées ultérieurement d'une manière incompatible avec ces finalités ;
                • Adéquates, pertinentes et limitées à ce qui est nécessaire au regard des finalités pour lesquelles elles
                sont traitées ;
                • Exactes et, si nécessaire, tenues à jour. Toutes les mesures raisonnables doivent être prises pour que les
                données à caractère personnel qui sont inexactes, eu égard aux finalités pour lesquelles elles sont
                traitées, soient effacées ou rectifiées sans tarder ;
                • Conservées sous une forme permettant l'identification des personnes concernées pendant une durée
                n'excédant pas celle nécessaire au regard des finalités pour lesquelles elles sont traitées ;
                • Traitées de façon à garantir une sécurité appropriée des données collectées, y compris la protection
                contre le traitement non autorisé ou illicite et contre la perte, la destruction ou les dégâts d'origine
                accidentelle, à l'aide de mesures techniques ou organisationnelles appropriées.
                Modèle réalisé sur LegalPlace.fr</p>

            <p>Le traitement n'est licite que si, et dans la mesure où, au moins une des conditions suivantes est remplie :
                • La personne concernée a consenti au traitement de ses données à caractère personnel pour une ou plusieurs
                finalités spécifiques ;
                • Le traitement est nécessaire à l'exécution d'un contrat auquel la personne concernée est partie ou à
                l'exécution de mesures précontractuelles prises à la demande de celle-ci ;
                • Le traitement est nécessaire au respect d'une obligation légale à laquelle le responsable du traitement
                est soumis ;
                • Le traitement est nécessaire à la sauvegarde des intérêts vitaux de la personne concernée ou d'une autre
                personne physique ;
                • Le traitement est nécessaire à l'exécution d'une mission d'intérêt public ou relevant de l'exercice de
                l'autorité publique dont est investi le responsable du traitement ;
                • Le traitement est nécessaire aux fins des intérêts légitimes poursuivis par le responsable du traitement
                ou par un tiers, à moins que ne prévalent les intérêts ou les libertés et droits fondamentaux de la personne
                concernée qui exigent une protection des données à caractère personnel, notamment lorsque la personne
                concernée est un enfant. </p>

            <p>ARTICLE 3 : DONNÉES À CARACTÈRE PERSONNEL COLLECTÉES ET TRAITÉES DANS LE CADRE DE LA NAVIGATION SUR LE SITE
            </p>

            <p>Article 3.1 : Données collectées </p>
            <p>Les données personnelles collectées dans le cadre de notre activité sont les suivantes :
                [Listez les données collectées lors de l’utilisation du site]
                La collecte et le traitement de ces données répond à la (aux) finalité(s) suivante(s) :
                [Préciser la/les raison(s) pour laquelle/lesquelles la collecte de données personnelles est nécessaire dans
                le cadre de votre activité]
                exemple : gestion de contrat, gestion de l’espace client, suivi de la qualité des services, envoi de
                newsletter, etc. </p>

            <p>Article 3.2 : Mode de collecte des données </p>
            <p>Lorsque vous utilisez notre site, sont automatiquement collectées les données suivantes :
                [Liste des données automatiquement collectées lors de la simple visite de l’utilisateur sur le site]
                D’autres données personnelles sont collectées lorsque vous effectuez les opérations suivantes sur la
                plateforme :
                [Lister les données personnelles collectées, et préciser la finalité de la collecte] </p>

            <p>Elles sont conservées par le responsable du traitement dans des conditions raisonnables de sécurité, pour une
                durée de : [Indiquer la durée de conservation prévue]
                La société est susceptible de conserver certaines données à caractère personnel au-delà des délais annoncés
                ci-dessus afin de remplir ses obligations légales ou réglementaires. </p>

            <p>Article 3.3 : Hébergement des données </p>
            <p>Le site Les Randonneurs du Marais Sud Vendée est hébergé par :
                [Dénomination sociale de l’entreprise
                Adresse du siège social
                Contact (adresse email et/ou numéro de téléphone)] </p>

            <p>[Dans le cas ou les données personnelles collectées par l’entreprise seraient partagées avec des tiers,
                insérer une clause “Article 3.4 : Transmission des données à des tiers” :
                “Les données peuvent être transmises à nos partenaires, ci-après énumérés :”] </p>

            <p>[Si le site est concerné par l’utilisation de cookies, préciser leur utilisation dans un Article 3.5 :
                Politique en matière de “cookies”] </p>

            <p>ARTICLE 4 : RESPONSABLE DU TRAITEMENT DES DONNÉES ET DÉLÉGUÉ À LA PROTECTION DES DONNÉES </p>

            <p>Article 4.1 : Le responsable du traitement des données </p>
            <p>Les données à caractère personnelles sont collectées par [raison ou dénomination sociale de l’entreprise],
                [forme juridique] au capital de [montant du capital social], dont le numéro d’immatriculation est le
                [indiquez votre numéro RCS].
                Le responsable du traitement des données à caractère personnel peut être contacté de la manière suivante :
                Par courrier à l’adresse : [indiquez l’adresse du siège social] ;
                Par téléphone, au [numéro de téléphone] ;
                Par mail : [email du responsable du traitement des données]. </p>

            <p>Article 4.2 : Le délégué à la protection des données </p>

            <p>Le délégué à la protection des données de l’entreprise ou du responsable est : </p>

            <p>[Indiquez l’identité, l’adresse, le numéro de téléphone et/ou l’adresse email du DPO] </p>

            <p>Si vous estimez, après nous avoir contactés, que vos droits “Informatique et Libertés”, ne sont pas
                respectés, vous pouvez adresser une information à la CNIL. </p>

            <p>ARTICLE 5 : LES DROITS DE L’UTILISATEUR EN MATIÈRE DE COLLECTE ET DE TRAITEMENT DES DONNÉES </p>
            <p>Tout utilisateur concerné par le traitement de ses données personnelles peut se prévaloir des droits
                suivants, en application du règlement européen 2016/679 et de la Loi Informatique et Liberté (Loi 78-17 du 6
                janvier 1978) :
                • Droit d’accès, de rectification et droit à l’effacement des données (posés respectivement aux articles 15,
                16 et 17 du RGPD) ;

                • Droit à la portabilité des données (article 20 du RGPD) ;

                • Droit à la limitation (article 18 du RGPD) et à l’opposition du traitement des données (article 21 du
                RGPD) ;

                • Droit de ne pas faire l’objet d’une décision fondée exclusivement sur un procédé automatisé ;

                • Droit de déterminer le sort des données après la mort ;

                • Droit de saisir l’autorité de contrôle compétente (article 77 du RGPD).
                Pour exercer vos droits, veuillez adresser votre courrier à [Nom et adresse de l’entreprise] ou par mail à
                [Insérer l’adresse e-mail du Délégué à la protection des données]
                Afin que le responsable du traitement des données puisse faire droit à sa demande, l’utilisateur peut être
                tenu de lui communiquer certaines informations telles que : ses noms et prénoms, son adresse e-mail ainsi
                que son numéro de compte, d’espace personnel ou d’abonné.
                Consultez le site cnil.fr pour plus d’informations sur vos droits. </p>


            <p>ARTICLE 6 : CONDITIONS DE MODIFICATION DE LA POLITIQUE DE CONFIDENTIALITÉ </p>

            <p>L’éditeur du site [Nom du site] se réserve le droit de pouvoir modifier la présente Politique à tout moment
                afin d’assurer aux utilisateurs du site sa conformité avec le droit en vigueur.
                Les éventuelles modifications ne sauraient avoir d’incidence sur les achats antérieurement effectués sur le
                site, lesquels restent soumis à la Politique en vigueur au moment de l’achat et telle qu’acceptée par
                l’utilisateur lors de la validation de l’achat.
                L’utilisateur est invité à prendre connaissance de cette Politique à chaque fois qu’il utilise nos services,
                sans qu’il soit nécessaire de l’en prévenir formellement.
                La présente politique, éditée le [date de mise en ligne], a été mise à jour le [date de modification de la
                politique].</p>
                                        </div>
                                    </div>

                                    </section>
                                    <br>
                                    <section id="CGU">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="text-center">J'ai pris connaissance du règlement intérieur et
                                                        des mentions légales et
                                                        les accepte.</p>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                

                                <div class="modal-footer text-center mx-auto">
                                    <form action="{{ route('reglementAccepte') }}" value="Save" method="POST">
                                        @csrf
                                        <div class="form-check text-center">
                                            <input class="form-check-input" type="checkbox" name="checkbox"
                                                id="flexCheckDefault"style="margin-left:45%; margin-right:auto;"
                                                @if (session()->has('reglementAccepte') && session()->get('reglementAccepte') == 'on') checked @endif>
                                        </div>

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
                                            <strong> {{ $message }}</strong>
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
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10">
                                        <p>L'association " Les Randonneurs du Marais Sud Vendée" traite les données
                                            recueillies pour la gestion d'une association.
                                            Pour en savoir plus sur la gestion de vos données personnelles et pour exercer
                                            vos droits, reportez-vous à la politique de confidentialité et les mentions légales.</p>
                                    </div>
                                </div>
                            </div>

                            <!--BOUTON ENREGISTRER-->
                            @if (Session::get('reglementAccepte'))
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Enregistrer') }}
                                        </button>
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

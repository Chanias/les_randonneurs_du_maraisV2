<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=>'SIEDLECKI',
            'prenom'=>'Floriane',
            'date_de_naissance'=>'09/10/1989',
            'adresse'=>'2 Rue du stade',
            'code_postal'=>'79410',
            'ville'=>'SAINT MAXIRE',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'07 69 34 56 40',
            'password' => Hash::make('Diablo18!'),
            'email' => 'florianesiedlecki@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'ARSICAUD',
            'prenom'=>'Marie-Claude',
            'date_de_naissance'=>'16/07/1954',
            'adresse'=>'Lieu dit l aventure - 17230 MARANS',
            'num_telephone_fixe'=>'05 46 01 03 84',
            'num_telephone_portable'=>'06 42 54 29 82',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'marieclaudearsicaud@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'AYRAUD',
            'prenom'=>'Rémi',
            'date_de_naissance'=>'26/03/1940',
            'adresse'=>'8 allee Helene de Suzannet - 85200 FONTENAY LE COMTE',
            'num_telephone_fixe'=>'02 51 52 80 29',
            'num_telephone_portable'=>'06 32 31 67 78',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'remi.ayraud@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BAUDON',
            'prenom'=>'Françoise',
            'date_de_naissance'=>'09/12/1952',
            'adresse'=>'L ileau - 85450 LA TAILLEE',
            'num_telephone_fixe'=>'02 51 51 37 73',
            'num_telephone_portable'=>'07 88 20 45 71',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jjfbaudon@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BAUDON',
            'prenom'=>'Jean-Jacques',
            'date_de_naissance'=>'29/11/1948',
            'adresse'=>'L ileau - 85450 LA TAILLEE',
            'num_telephone_fixe'=>'02 51 51 37 73',
            'num_telephone_portable'=>'07 88 20 45 71',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jjfbaudon@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BEGUE',
            'prenom'=>'Monique',
            'date_de_naissance'=>'11/07/1953',
            'adresse'=>'10 rue de la chapelle 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 14 53 75 28',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'monique.bernet@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BETTIN',
            'prenom'=>'Muriel',
            'date_de_naissance'=>'21/02/1967',
            'adresse'=>'13 Le champ de la grange 85370 MOUZEUIL',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 08 84 46 62',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'muriel.bettin@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BIGOT',
            'prenom'=>'Ghislaine',
            'date_de_naissance'=>'28/07/1948',
            'adresse'=>'6 quartier St Nicolas 85 420 MAILLE',
            'num_telephone_fixe'=>'02 51 87 02 56',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'ghislaine85@hotmail.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BONNEAU',
            'prenom'=>'Marcelle',
            'date_de_naissance'=>'04/11/1949',
            'adresse'=>'25 Rue de l Eglise - 85770 LE GUE DE VELLUIRE',
            'num_telephone_fixe'=>'02 51 52 54 93',
            'num_telephone_portable'=>'06 89 70 46 25',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'bonneau.marcelle@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BONNEAU',
            'prenom'=>'Marie-Thérèse',
            'date_de_naissance'=>'25/05/1946',
            'adresse'=>'4 Rue du Grand Verger - 85770 LE GUE DE VELLUIRE',
            'num_telephone_fixe'=>'02 51 52 51 31',
            'num_telephone_portable'=>'06 71 36 72 30',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'marie-theresebonneau@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'BRARD',
            'prenom'=>'Jeanine',
            'date_de_naissance'=>'28/10/1954',
            'adresse'=>'13 B Rue Jean Moulin - 85770 LE POIRE SUR VEILLUIRE',
            'num_telephone_fixe'=>'02 51 50 06 98',
            'num_telephone_portable'=>'06 49 93 29 60',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'brard.jeanine@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'CHAPUIS',
            'prenom'=>'Solange',
            'date_de_naissance'=>'20/10/1946',
            'adresse'=>'1 Rue des Moulins - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 72 42',
            'num_telephone_portable'=>'06 17 59 76 59',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'solangechapuis@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'COUZINET',
            'prenom'=>'James',
            'date_de_naissance'=>'20/03/1950',
            'adresse'=>'87 Rue des Faienciers - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 00 92',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'james.couzinet@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'COUZINET',
            'prenom'=>'Martine',
            'date_de_naissance'=>'12/10/1953',
            'adresse'=>'87 Rue des Faienciers - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 00 92',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'james.couzinet@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'DECLOUX',
            'prenom'=>'Catherine',
            'date_de_naissance'=>'14/08/1952',
            'adresse'=>'66 Route de Fontaines - 85200 AUCHAY SUR VENDEE',
            'num_telephone_fixe'=>'02 51 50 62 68',
            'num_telephone_portable'=>'06 73 38 85 77',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jp.decloux@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'DECLOUX',
            'prenom'=>'Jean-Paul',
            'date_de_naissance'=>'02/07/1955',
            'adresse'=>'66 Route de Fontaines - 85200 AUCHAY SUR VENDEE',
            'num_telephone_fixe'=>'02 51 50 62 68',
            'num_telephone_portable'=>'06 47 24 62 79',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jp.decloux@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'DELAHAYE',
            'prenom'=>'Eveline',
            'date_de_naissance'=>'27/11/1947',
            'adresse'=>'98 Rue de Rablais - 85200 FONTENAY LE COMTE',
            'num_telephone_fixe'=>'02 51 51 17 10',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'evelinedelahaye@free.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'DIEU',
            'prenom'=>'Michelle',
            'date_de_naissance'=>'22/08/1956',
            'adresse'=>'47 Rue du Cloucq - 85570 ST VALERIEN',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 85 62 96 56',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'michelle.dieu@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'DURAND',
            'prenom'=>'Jean-Marc',
            'date_de_naissance'=>'28/11/1952',
            'adresse'=>'10 Rue de la Chapelle - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 21 02 67 78',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'monique.bernet@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'FAIVRE',
            'prenom'=>'Christine',
            'date_de_naissance'=>'29/08/1957',
            'adresse'=>'24 Chemin du Bas des Vignes - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 60 75',
            'num_telephone_portable'=>'06 81 59 87 51',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'lebasdesvignes@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'FAIVRE',
            'prenom'=>'Claude',
            'date_de_naissance'=>'06/11/1952',
            'adresse'=>'24 Chemin du Bas des Vignes - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 60 75',
            'num_telephone_portable'=>'06 81 59 87 51',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'lebasdesvignes@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'FILLONNEAU',
            'prenom'=>'Chantal',
            'date_de_naissance'=>'03/08/1956',
            'adresse'=>'14 Rue de la Treille - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 00 28',
            'num_telephone_portable'=>'06 71 18 86 67',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'chantal.fillonneau17@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'FILLONNEAU',
            'prenom'=>'Patrice',
            'date_de_naissance'=>'11/02/1954',
            'adresse'=>'14 Rue de la Treille - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 00 28',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'chantal.fillonneau17@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GAUTRONNEAU',
            'prenom'=>'Gerard',
            'date_de_naissance'=>'08/04/1952',
            'adresse'=>'40 Rue Nationale - Aisne - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 76 69',
            'num_telephone_portable'=>'06 31 33 02 39',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'gerard.gautronneau@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GAUTRONNEAU',
            'prenom'=>'Yvette',
            'date_de_naissance'=>'07/07/1955',
            'adresse'=>'40 Rue Nationale - Aisne - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 76 69',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'yvette.gautronneau@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GONZALEZ',
            'prenom'=>'Faustino',
            'date_de_naissance'=>'16/10/1945',
            'adresse'=>'2 Allee Fleur de Sel - 85200 FONTENAY LE COMTE',
            'num_telephone_fixe'=>'02 51 87 01 78',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'rossi.lucette@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GOUBIN',
            'prenom'=>'Marie-José',
            'date_de_naissance'=>'02/10/1949',
            'adresse'=>'1 Rue Nationale - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 02 40',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'mjogoubin@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GREAU',
            'prenom'=>'Marie-José',
            'date_de_naissance'=>'31/10/1961',
            'adresse'=>'6 Rue des Venelles - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 81 85 11 71',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'mariejosegreau@hotmail.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GUILLAIN',
            'prenom'=>'Jean-Claude',
            'date_de_naissance'=>'17/04/1943',
            'adresse'=>'16 Rue des Six Moulins - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 67 49',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jcmcguillain@aol.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'GUILLAIN',
            'prenom'=>'Marie-Charles',
            'date_de_naissance'=>'08/07/1944',
            'adresse'=>'16 Rue des Six Moulins - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 67 49',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jcmcguillain@aol.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'HOCBON',
            'prenom'=>'Rosy',
            'date_de_naissance'=>'02/11/1947',
            'adresse'=>'4 Les Gargouillasses - 85770 LE GUE DE VELLUIRE',
            'num_telephone_fixe'=>'02 51 52 51 28',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'rosydaniel@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'JOUANNAUD',
            'prenom'=>'Sophie',
            'date_de_naissance'=>'06/11/1957',
            'adresse'=>'31 Bis Chemin du Retour - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 30 09 83 23',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'sophie.jouannaud@sfr.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'LEPECUCHEL',
            'prenom'=>'Jacky',
            'date_de_naissance'=>'13/06/1954',
            'adresse'=>'5 Rue du Parc - 85770 LE POIRE SUR VEILLUIRE',
            'num_telephone_fixe'=>'02 51 52 31 13',
            'num_telephone_portable'=>'06 35 93 83 62',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jlepecuchel@yahoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'LIGONNIERE',
            'prenom'=>'Nicole',
            'date_de_naissance'=>'06/06/1957',
            'adresse'=>'12 Rue de l an VII - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 03 47 31 53',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'nicoleligo@hotmail.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MARTINET',
            'prenom'=>'Jacqueline',
            'date_de_naissance'=>'24/02/1954',
            'adresse'=>'La Petite Coutrolle - 85450 MOREILLES',
            'num_telephone_fixe'=>'02 51 56 26 73',
            'num_telephone_portable'=>'06 98 76 39 01',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jakleg@free.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MEEUS',
            'prenom'=>'Lydie',
            'date_de_naissance'=>'03/02/1948',
            'adresse'=>'4 Rue des Quarts - 85450 CHAMPAGNE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 62 15',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'meeus.lydie@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MOCQUET',
            'prenom'=>'Nadia',
            'date_de_naissance'=>'17/04/1955',
            'adresse'=>'15 Place Charles de Gaulle - 85770 VIX',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 88 47 04 62',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'nadbena@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MOCQUET',
            'prenom'=>'Philippe',
            'date_de_naissance'=>'17/10/1955',
            'adresse'=>'15 Place Charles de Gaulle - 85770 VIX',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 52 05 77 47',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'pmocquet@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MOLERO',
            'prenom'=>'Michelle',
            'date_de_naissance'=>'22/05/1957',
            'adresse'=>'19 Le Passage - 85770 L ILE D ELLE',
            'num_telephone_fixe'=>'02 51 52 03 91',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'molero.mimiche85770@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MONTAUBIN',
            'prenom'=>'Béatrice',
            'date_de_naissance'=>'15/4/55',
            'adresse'=>'Rue de la Courroie - Aisne - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 53 75 97 38',
            'num_telephone_portable'=>'06 12 76 36 00',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'beatrice.montaubin@gmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MUREAU',
            'prenom'=>'Mireille',
            'date_de_naissance'=>'09/11/1955',
            'adresse'=>'9 Rue des Orchidees - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 78 21',
            'num_telephone_portable'=>'06 83 27 19 56',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'thierry.mureau@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'MUREAU',
            'prenom'=>'Thierry',
            'date_de_naissance'=>'29/01/1956',
            'adresse'=>'9 Rue des Orchidees - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 78 21',
            'num_telephone_portable'=>'06 83 27 19 56',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'thierry.mureau@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PACAUD',
            'prenom'=>'Guy',
            'date_de_naissance'=>'29/05/1953',
            'adresse'=>'51 Rue de la Chapelle - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 78 20',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => ' guy.pacaud@wanadoo.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PACAUD',
            'prenom'=>'Sylvette',
            'date_de_naissance'=>'21/03/1955',
            'adresse'=>'51 Rue de la Chapelle - 85450 CHAILLE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 78 20',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'sylvette.pacaud2@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PAPILLON',
            'prenom'=>'Anick',
            'date_de_naissance'=>'09/07/1939',
            'adresse'=>' 3 Rue du pré Tarin - 44760 LA BERNERIE EN RETZ ',
            'num_telephone_fixe'=>'02 51 18 17 56',
            'num_telephone_portable'=>'06 83 59 52 89',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'anikcastel9@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PERCHE',
            'prenom'=>'Armelle',
            'date_de_naissance'=>'03/11/1952',
            'adresse'=>'143 Route de Souil - 85200 FONTAINES',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 04 40 06 08',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'ar.perche@laposte.net',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PIERRE',
            'prenom'=>'Alain',
            'date_de_naissance'=>'22/07/1953',
            'adresse'=>'19 Rue Georges Clemenceau - 85770 VELLUIRE',
            'num_telephone_fixe'=>'02 51 50 55 19',
            'num_telephone_portable'=>'06 81 45 64 56',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'alabri85@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'PIERRE',
            'prenom'=>'Brigitte',
            'date_de_naissance'=>'22/01/1951',
            'adresse'=>'19 Rue Georges Clemenceau - 85770 VELLUIRE',
            'num_telephone_fixe'=>'02 51 50 55 19',
            'num_telephone_portable'=>'06 18 45 11 57',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'alabri85@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'RAGUIN',
            'prenom'=>'Sylvie',
            'date_de_naissance'=>'21/07/1955',
            'adresse'=>'54 Chemin des Loges - 85400 LUÇON',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 09 35 60 43',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'sraguin@hotmail.com',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'RINGEARD',
            'prenom'=>'Josette',
            'date_de_naissance'=>'05/03/1950',
            'adresse'=>'24 Rue du Bourg Chapon - 85450 CHAMPAGNE LES MARAIS',
            'num_telephone_fixe'=>'02 51 56 53 44',
            'num_telephone_portable'=>'06 24 78 15 88',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'josette.ringeard@outlook.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'RONDEL',
            'prenom'=>'Christiane',
            'date_de_naissance'=>'02/01/1951',
            'adresse'=>'17 Rue du Sablon - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 69 84',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'christiane.rondel@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'ROSSI',
            'prenom'=>'Lucette',
            'date_de_naissance'=>'25/04/1944',
            'adresse'=>'2 Allee Fleur de Sel - 85200 FONTENAY LE COMTE',
            'num_telephone_fixe'=>'',
            'num_telephone_portable'=>'06 30 43 93 12',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'rossi.lucette@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'SABOURAUD',
            'prenom'=>'Mercedes',
            'date_de_naissance'=>'19/09/1951',
            'adresse'=>'é1 Rue de la Touchante - 85770 VIX',
            'num_telephone_fixe'=>'02 51 00 49 39',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'mercedes.sabouraud@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'SOULARD',
            'prenom'=>'Pierrette',
            'date_de_naissance'=>'23/02/1948',
            'adresse'=>'25 Rue de la Fontaine au Clain - 85450 STE RADEGONDE DES NOYERS',
            'num_telephone_fixe'=>'02 51 29 03 56',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'pierrette.soulard@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'TROGET',
            'prenom'=>'Jacques',
            'date_de_naissance'=>'30/07/1948',
            'adresse'=>'7 Route de Chaix - 85770 VELLUIRE',
            'num_telephone_fixe'=>'02 51 52 31 05  ',
            'num_telephone_portable'=>'',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jacques.troget@orange.fr',
            'remember_token' => Str::random(10),
        ]);
        User::create([
            'nom'=>'WEISGERBER',
            'prenom'=>'Jean-Marie',
            'date_de_naissance'=>'22/09/1949',
            'adresse'=>'34 Chemin du Puits Mairand - 85400 LUÇON',
            'num_telephone_fixe'=>'09 54 30 98 15',
            'num_telephone_portable'=>'06 60 50 49 81',
            'password' => Hash::make('Bonbon79!'),
            'email' => 'jmwgb@free.fr',
            'remember_token' => Str::random(10),
        ]);

    }
}

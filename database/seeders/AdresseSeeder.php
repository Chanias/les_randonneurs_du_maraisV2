<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Adresse;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class AdresseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Adresse::create([
            'adresse'=>'2 Rue du stade',
            'code_postal'=>'79410',
            'ville'=>'SAINT MAXIRE',
            'user_id'=>1,
        ]);
        Adresse::create([
            'adresse'=>'Lieu dit l aventure',
            'code_postal'=>'17230',
            'ville'=>' MARANS',
            'user_id'=>2,

        ]);
        Adresse::create([
            'adresse'=>'8 allee Helene de Suzannet',
            'code_postal'=>'85200',
            'ville'=>'FONTENAY LE COMTE',
            'user_id'=>3,
        ]);
        Adresse::create([
            'adresse'=>'L ileau',
            'code_postal'=>'85450',
            'ville'=>'LA TAILLEE',
            'user_id'=>4,
        ]);
        Adresse::create([
            'adresse'=>'L ileau',
            'code_postal'=>'85450',
            'ville'=>'LA TAILLEE',
            'user_id'=>5,
        ]);
        Adresse::create([
            'adresse'=>'10 rue de la chapelle',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>6,
        ]);
        Adresse::create([
            'adresse'=>'13 Le champ de la grange',
            'code_postal'=>'85370',
            'ville'=>'MOUZEUIL',
            'user_id'=>6,
        ]);
        Adresse::create([
            'adresse'=>'6 quartier St Nicolas',
            'code_postal'=>'85420',
            'ville'=>'MAILLE',
            'user_id'=>7,
        ]);
        Adresse::create([
            'adresse'=>'25 Rue de l Eglise',
            'code_postal'=>'85770',
            'ville'=>'LE GUE DE VELLUIRE',
            'user_id'=>8
        ]);
        Adresse::create([
            'adresse'=>'4 Rue du Grand Verger',
            'code_postal'=>'85770',
            'ville'=>'LE GUE DE VELLUIRE',
            'user_id'=>10,
        ]);
        Adresse::create([
            'adresse'=>'13 B Rue Jean Moulin',
            'code_postal'=>'85770',
            'ville'=>'LE POIRE SUR VEILLUIRE',
            'user_id'=>11,
        ]);
        Adresse::create([
            'adresse'=>'1 Rue des Moulins',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>12
        ]);
        Adresse::create([
            'adresse'=>'87 Rue des Faienciers',
            'code_postal'=>'85770',
            'ville'=>' L ILE D ELLE',
            'user_id'=>13
        ]);
        Adresse::create([
            'adresse'=>'87 Rue des Faienciers',
            'code_postal'=>'85770',
            'ville'=>'L ILE D ELLE',
            'user_id'=>14
        ]);
        Adresse::create([
            'adresse'=>'66 Route de Fontaines',
            'code_postal'=>'85200',
            'ville'=>'AUCHAY SUR VENDEE',
            'user_id'=>15
        ]);
        Adresse::create([
            'adresse'=>'66 Route de Fontaines',
            'code_postal'=>'85200',
            'ville'=>'AUCHAY SUR VENDEE',
            'user_id'=>16
        ]);
        Adresse::create([
            'adresse'=>'98 Rue de Rablais',
            'code_postal'=>'85200',
            'ville'=>'FONTENAY LE COMTE',
            'user_id'=>17
        ]);
        Adresse::create([
            'adresse'=>'47 Rue du Cloucq',
            'code_postal'=>'85570',
            'ville'=>'ST VALERIEN',
            'user_id'=>18
        ]);
        Adresse::create([
            'adresse'=>'10 Rue de la Chapelle',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>19
        ]);
        Adresse::create([
            'adresse'=>'24 Chemin du Bas des Vignes',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>20
        ]);
        Adresse::create([
            'adresse'=>'24 Chemin du Bas des Vignes',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>21
        ]);
        Adresse::create([
            'adresse'=>'14 Rue de la Treille',
            'code_postal'=>'85770',
            'ville'=>'L ILE D ELLE',
            'user_id'=>22
        ]);
        Adresse::create([
            'adresse'=>'14 Rue de la Treille',
            'code_postal'=>'85770',
            'ville'=>'L ILE D ELLE',
            'user_id'=>23
        ]);
        Adresse::create([
            'adresse'=>'40 Rue Nationale - Aisne ',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>24
        ]);
        Adresse::create([
            'adresse'=>'40 Rue Nationale - Aisne ',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>25
        ]);
        Adresse::create([
            'adresse'=>'2 Allee Fleur de Sel',
            'code_postal'=>'85200',
            'ville'=>'FONTENAY LE COMTE',
            'user_id'=>26
        ]);
        Adresse::create([
            'adresse'=>'1 Rue Nationale ',
            'code_postal'=>'85770',
            'ville'=>'L ILE D ELLE',
            'user_id'=>27
        ]);
        Adresse::create([
            'adresse'=>'6 Rue des Venelles',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>28
        ]);
        Adresse::create([
            'adresse'=>'16 Rue des Six Moulins',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>29
        ]);
        Adresse::create([
            'adresse'=>'16 Rue des Six Moulins',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>30
        ]);
        Adresse::create([
            'adresse'=>'4 Les Gargouillasses',
            'code_postal'=>'85770',
            'ville'=>'LE GUE DE VELLUIRE',
            'user_id'=>31
        ]);
        Adresse::create([
            'adresse'=>'31 Bis Chemin du Retour ',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>32
        ]);
        Adresse::create([
            'adresse'=>'5 Rue du Parc',
            'code_postal'=>'85770',
            'ville'=>'LE POIRE SUR VEILLUIRE',
            'user_id'=>33
        ]);
        Adresse::create([
            'adresse'=>'12 Rue de l an VII',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>34
        ]);
        Adresse::create([
            'adresse'=>'La Petite Coutrolle ',
            'code_postal'=>'85450',
            'ville'=>'MOREILLES',
            'user_id'=>35
        ]);
        Adresse::create([
            'adresse'=>'4 Rue des Quarts',
            'code_postal'=>'85450',
            'ville'=>'CHAMPAGNE LES MARAIS',
            'user_id'=>36
        ]);
        Adresse::create([
            'adresse'=>'15 Place Charles de Gaulle',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>37
        ]);
        Adresse::create([
            'adresse'=>'15 Place Charles de Gaulle',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>38
        ]);
        Adresse::create([
            'adresse'=>'19 Le Passage',
            'code_postal'=>'85770',
            'ville'=>'L ILE D ELLE',
            'user_id'=>39
        ]);
        Adresse::create([
            'adresse'=>'Rue de la Courroie - Aisne',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>40
        ]);
        Adresse::create([
            'adresse'=>'9 Rue des Orchidees',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>41
        ]);
        Adresse::create([
            'adresse'=>'9 Rue des Orchidees',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>42
        ]);
        Adresse::create([
            'adresse'=>'51 Rue de la Chapelle',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>43
        ]);
        Adresse::create([
            'adresse'=>'51 Rue de la Chapelle',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>44
        ]);
        Adresse::create([
            'adresse'=>'3 Rue du pré Tarin',
            'code_postal'=>'44760',
            'ville'=>'LA BERNERIE EN RETZ',
            'user_id'=>45
        ]);
        Adresse::create([
            'adresse'=>'143 Route de Souil',
            'code_postal'=>'85200',
            'ville'=>'FONTAINES',
            'user_id'=>46
        ]);
        Adresse::create([
            'adresse'=>'19 Rue Georges Clemenceau',
            'code_postal'=>'85770',
            'ville'=>'VELLUIRE',
            'user_id'=>47
        ]);
        Adresse::create([
            'adresse'=>'19 Rue Georges Clemenceau',
            'code_postal'=>'85770',
            'ville'=>'VELLUIRE',
            'user_id'=>48
        ]);
        Adresse::create([
            'adresse'=>'54 Chemin des Loges',
            'code_postal'=>'85400',
            'ville'=>'LUÇON',
            'user_id'=>49
        ]);
        Adresse::create([
            'adresse'=>'24 Rue du Bourg Chapon',
            'code_postal'=>'85450',
            'ville'=>'CHAMPAGNE LES MARAIS',
            'user_id'=>50
        ]);
        Adresse::create([
            'adresse'=>'17 Rue du Sablon',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>51
        ]);
        Adresse::create([
            'adresse'=>'2 Allee Fleur de Sel',
            'code_postal'=>'85200',
            'ville'=>'FONTENAY LE COMTE',
            'user_id'=>52
        ]);
        Adresse::create([
            'adresse'=>'21 Rue de la Touchante',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>53
        ]);
        Adresse::create([
            'adresse'=>'25 Rue de la Fontaine au Clain',
            'code_postal'=>'85450',
            'ville'=>'STE RADEGONDE DES NOYERS',
            'user_id'=>54
        ]);
        Adresse::create([
            'adresse'=>'7 Route de Chaix',
            'code_postal'=>'85770',
            'ville'=>'VELLUIRE',
            'user_id'=>55
        ]);
        Adresse::create([
            'adresse'=>'34 Chemin du Puits Mairand',
            'code_postal'=>'85400',
            'ville'=>'LUÇON',
            'user_id'=>56
        ]);
        Adresse::create([
            'adresse'=>'5 rue du Port d\'Aisne',
            'code_postal'=>'85450',
            'ville'=>'VOUILLE LES MARAIS',
            'user_id'=>57
        ]);
        Adresse::create([
            'adresse'=>'8 route de Chaix',
            'code_postal'=>'85770',
            'ville'=>'LES VEILLUIRES SUR VENDEE',
            'user_id'=>58
        ]);
        Adresse::create([
            'adresse'=>'8 route de Chaix',
            'code_postal'=>'85770',
            'ville'=>'LES VEILLUIRES SUR VENDEE',
            'user_id'=>59
        ]);
        Adresse::create([
            'adresse'=>'LIEU DIT L\'AVENTURE',
            'code_postal'=>'17230',
            'ville'=>'MARANS',
            'user_id'=>60
        ]);
        Adresse::create([
            'adresse'=>'47 rue du 11 Novembre',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>61
        ]);
        Adresse::create([
            'adresse'=>'7 ALLEE HELENE DE SUZANNET ',
            'code_postal'=>'85200',
            'ville'=>'FONTENAY LE COMTE',
            'user_id'=>62
        ]);
        Adresse::create([
            'adresse'=>'42 rue de la Touchantée',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>63
        ]);
        Adresse::create([
            'adresse'=>'3 impasse des Plantes',
            'code_postal'=>'85200',
            'ville'=>'AUCHAY SUR VENDEE',
            'user_id'=>64
        ]);
        Adresse::create([
            'adresse'=>'5 Rue Peirre Chisson',
            'code_postal'=>'85400',
            'ville'=>'STE GEMME LA PLAINE',
            'user_id'=>65
        ]);
        Adresse::create([
            'adresse'=>'5 Rue Peirre Chisson',
            'code_postal'=>'85400',
            'ville'=>'STE GEMME LA PLAINE',
            'user_id'=>66
        ]);
        Adresse::create([
            'adresse'=>'60 rue Georges Clémenceau',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>67
        ]);
        Adresse::create([
            'adresse'=>'42 Le Petit Louvre',
            'code_postal'=>'85450',
            'ville'=>'LA TAILLEE',
            'user_id'=>68
        ]);
        Adresse::create([
            'adresse'=>'1 Bis rue de la Combe',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>69
        ]);
        Adresse::create([
            'adresse'=>'42 rue de la Touchantée',
            'code_postal'=>'85770',
            'ville'=>'VIX',
            'user_id'=>70
        ]);
        Adresse::create([
            'adresse'=>'5 rue de la Frégate',
            'code_postal'=>'17230',
            'ville'=>'MARANS',
            'user_id'=>71
        ]);
        Adresse::create([
            'adresse'=>'5 rue mermoz',
            'code_postal'=>'85450',
            'ville'=>'CHAILLE LES MARAIS',
            'user_id'=>72
        ]);
        Adresse::create([
            'adresse'=>'4 impasse des Aigrettes ',
            'code_postal'=>'85450',
            'ville'=>'STE RADEGONDE DES NOYERS',
            'user_id'=>73
        ]);
    }
}

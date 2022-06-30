<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Randonnee;

class RandonneesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Randonnee::create([
            'date_rando'=>'01/06/2022', 
            'heure_depart'=>'8h30', 
            'depart_rando'=>'9h – Nalliers – Maison de la Réserve (Les Huttes)', 
            'circuit'=>'NALLIERS – Autour de la Douve – Côté Mouzeuil', 
            'kilometres'=>'13 kms',
            'animateurs'=>'MB et JMW : 06 60 50 49 81',
        ]);
        Randonnee::create([
            'date_rando'=>'04/06/2022', 
            'heure_depart'=>'7h30', 
            'depart_rando'=>'8h45 – St Vincent sur Graon – Parking place de l’église', 
            'circuit'=>'ST VINCENT SUR GRAON – Autour du Lac (possibilité de pique-nique à la fin de la randonnée - à laisser dans les voitures)', 
            'kilometres'=>'12,5 kms',
            'animateurs'=>'MCLA : 06 49 54 29 82 et MB',
        ]);
        Randonnee::create([
            'date_rando'=>'08/06/2022', 
            'heure_depart'=>'8h30', 
            'depart_rando'=>'9h00 – Fontenay – Place Marcel Henri (parking des impôts)', 
            'circuit'=>'FONTENAY – LE – COMTE – La Trouée Verte', 
            'kilometres'=>'11 kms',
            'animateurs'=>'MB et RA',
        ]);
        Randonnee::create([
            'date_rando'=>'11/06/2022', 
            'heure_depart'=>'8h00', 
            'depart_rando'=>'9h – Sigournais – Parking place de l’église', 
            'circuit'=>'SIGOURNAIS – Le Cudet (possibilité de pique-nique à la fin de la Randonnée – à laisser dans les voitures', 
            'kilometres'=>'10 kms',
            'animateurs'=>'MS : 06 68 89 01 87 et CD : 06 47 24 62 79',
        ]);
        Randonnee::create([
            'date_rando'=>'15/06/2022', 
            'heure_depart'=>'8h30', 
            'depart_rando'=>'9h - Le Poiré sur Velluire – Parking du Communal', 
            'circuit'=>'LE POIRE SUR VELLUIRE – Le Communal', 
            'kilometres'=>'11 kms',
            'animateurs'=>'AP : 06 81 456 456 et BP : 06 18 45 11 57',
        ]);
        Randonnee::create([
            'date_rando'=>'18/06/2022', 
            'heure_depart'=>'8h15', 
            'depart_rando'=>'9h – Mervent – Parking grotte du Père de Montfort', 
            'circuit'=>'MERVENT – Autour de la Grotte (Dénivelé)', 
            'kilometres'=>'11 kms',
            'animateurs'=>'JPD et CD : 06 47 24 62 79',
        ]);
        Randonnee::create([
            'date_rando'=>'22/06/2022', 
            'heure_depart'=>'9h00', 
            'depart_rando'=>'10h – St Pierre du Chemin – Place du Pavé (D938 ter) après 1er feu à droite', 
            'circuit'=>'ST PIERRE DU CHEMIN – La Pierre Rose (pique-nique dans sas à dos)', 
            'kilometres'=>'14,5  kms',
            'animateurs'=>' MS et JMW',
        ]);
        Randonnee::create([
            'date_rando'=>'25/06/2022', 
            'heure_depart'=>'8h15', 
            'depart_rando'=>'9h – Beugné l’Abbé – Parking du Communal', 
            'circuit'=>'BEUGNE L’ABBE – Les Charrières', 
            'kilometres'=>'12 kms',
            'animateurs'=>'JMW et JPD',
        ]);
        Randonnee::create([
            'date_rando'=>'29/06/2022', 
            'heure_depart'=>'8h15', 
            'depart_rando'=>'9h – St Sigismond – Place de l’église', 
            'circuit'=>'ST SIGISMOND – Entre Plaine et Marais ', 
            'kilometres'=>'9 kms',
            'animateurs'=>'MB et CD',
        ]);
        Randonnee::create([
            'date_rando'=>'02/07/2022', 
            'heure_depart'=>'8h00', 
            'depart_rando'=>'9h – Libaud – Parking sur la droite entrée du village', 
            'circuit'=>'LIBAUD – Entre Eaux et Bois (tourner à la Petite Leue) NOUVELLE Escarpée', 
            'kilometres'=>'9 kms',
            'animateurs'=>'AP et BP',
        ]);
    }
}

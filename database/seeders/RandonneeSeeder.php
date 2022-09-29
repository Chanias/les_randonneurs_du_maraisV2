<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Randonnee;

class RandonneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Randonnee::create([
            'date'=>'2022-06-01', 
            'heure_rdv'=>'8h30', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Nalliers – Maison de la Réserve (Les Huttes)',
            'nom'=>'NALLIERS', 
            'commentaires'=>'Autour de la Douve – Côté Mouzeuil',
            'kilometres'=>13 ,
            'lien_photos'=>'dqdsfsef',
            
        ]);
        Randonnee::create([
            'date'=>'2022-06-04', 
            'heure_rdv'=>'7h30', 
            'heure_depart'=>'8h45', 
            'point_de_depart'=>'St Vincent sur Graon – Parking place de l’église',
            'nom'=>'ST VINCENT SUR GRAON', 
            'commentaires'=>'Autour du Lac (possibilité de pique-nique à la fin de la randonnée - à laisser dans les voitures)',
            'kilometres'=>12.5 ,
            'lien_photos'=>'cqxcq',
            
        ]);
        Randonnee::create([
            'date'=>'2022-06-08', 
            'heure_rdv'=>'8h30', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Fontenay – Place Marcel Henri (parking des impôts)',
            'nom'=>'FONTENAY – LE – COMTE', 
            'commentaires'=>'La Trouée Verte',
            'kilometres'=>11 ,
          'lien_photos'=>'https://img.gg/6Oc2A9n',
          
        ]);
        Randonnee::create([
            'date'=>'2022-06-11', 
            'heure_rdv'=>'8h00', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Sigournais – Parking place de l’église',
            'nom'=>'SIGOURNAIS – Le Cudet', 
            'commentaires'=>'(possibilité de pique-nique à la fin de la Randonnée – à laisser dans les voitures',
            'kilometres'=>10 ,
           'lien_photos'=>'https://img.gg/6jgO9cm',
          
        ]);
        Randonnee::create([
            'date'=>'2022-06-15', 
            'heure_rdv'=>'8h30', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Le Poiré sur Velluire – Parking du Communal',
            'nom'=>'LE POIRE SUR VELLUIRE', 
            'commentaires'=>'Le Communal',
            'kilometres'=>11 ,
            'lien_photos'=>'fsdd',
            
        ]);
        Randonnee::create([
            'date'=>'2022-06-18', 
            'heure_rdv'=>'8h15', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Mervent – Parking grotte du Père de Montfort',
            'nom'=>'MERVENT', 
            'commentaires'=>'Autour de la Grotte (Dénivelé)',
            'kilometres'=>11 ,
            'lien_photos'=>'fdscdcwdqs',
            
        ]);
        Randonnee::create([
            'date'=>'2022-06-22', 
            'heure_rdv'=>'9h00', 
            'heure_depart'=>'10h00', 
            'point_de_depart'=>'St Pierre du Chemin – Place du Pavé (D938 ter) après 1er feu à droite',
            'nom'=>'ST PIERRE DU CHEMIN', 
            'commentaires'=>'La Pierre Rose (pique-nique dans sas à dos)',
            'kilometres'=>14.5  ,
            'lien_photos'=>'fsdxswx<',
           
        ]);
        Randonnee::create([
            'date'=>'2022-06-25', 
            'heure_rdv'=>'8h15', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'Beugné l’Abbé – Parking du Communal',
            'nom'=>'BEUGNE L’ABBE', 
            'commentaires'=>'Les Charrières',
            'kilometres'=>12 ,
             'lien_photos'=>'https://img.gg/g6795QY',
             
        ]);
        Randonnee::create([
            'date'=>'2022-06-29', 
            'heure_rdv'=>'8h15', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>' St Sigismond – Place de l’église',
            'nom'=>'ST SIGISMOND', 
            'commentaires'=>'Entre Plaine et Marais',
            'kilometres'=>9 ,
             'lien_photos'=>'sfs',
             
        ]);
        Randonnee::create([
            'date'=>'2022-07-02', 
            'heure_rdv'=>'8h00', 
            'heure_depart'=>'9h00', 
            'point_de_depart'=>'LIBAUD – Parking sur la droite entrée du village',
            'nom'=>'LIBAUD', 
            'commentaires'=>'Entre Eaux et Bois (tourner à la Petite Leue) NOUVELLE Escarpée',
            'kilometres'=>9 ,
          'lien_photos'=>'fsd,lkp',
          
        ]);
    }
}

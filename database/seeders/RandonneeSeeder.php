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
            'nom'=>'Saint Sigismond',
            'image'=>'saint_sigismond.jpeg',
            'categorie'=>'randonnee',
        ]);

    }

            // 'date'=>'2023-01-01', 
            // 'heure_rdv'=>'8h30', 
            // 'heure_depart'=>'9h00', 
            // 'point_de_depart'=>'Ceci est un test pour le site en ligne',
            // 'nom'=>'NALLIERS', 
            // 'commentaires'=>'test',
            // 'kilometres'=>13 ,
            // 'lien_photos'=>'dqdsfsef',
        
       
}

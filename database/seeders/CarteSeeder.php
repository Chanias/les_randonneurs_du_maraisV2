<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Carte;

class CarteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Carte::create([
            'randonnee_id'=>9,
            'nom_fichier'=>'saint_sigismond.jpeg'
        ]);
        Carte::create([
            'randonnee_id'=>8,
            'nom_fichier'=>'beugne_labbbe.jpeg'
        ]);
    }
}
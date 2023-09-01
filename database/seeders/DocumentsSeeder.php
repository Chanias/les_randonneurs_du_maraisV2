<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Document;

class DocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        Document::create([
            'nom'=>'Questionnaire de ...',
            'image'=>'Modele_questionnaire.jpg',
            'categorie'=>'questionnaire',
        ]);
    }
}

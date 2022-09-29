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
            'nom'=>'Certificat médical de Catherine Decloux',
            'image'=>'certificat_medical_CD.jpg',
            'categorie'=>'certificat_medical',
            
        ]);

        Document::create([
            'nom'=>'Certificat médical de Jean-Paul Decloux',
            'image'=>'certificat_medical_JPD.jpg',
            'categorie'=>'certificat_medical',
        ]);

        Document::create([
            'nom'=>'Certificat médical de Marcelle Bonneau',
            'image'=>'certificat_medical_MB.jpg',
            'categorie'=>'certificat_medical',
        ]);

        Document::create([
            'nom'=>'Certificat médical de Rémi Ayraud',
            'image'=>'certificat_medical_RA.jpg',
            'categorie'=>'certificat_medical',
        ]);

        Document::create([
            'nom'=>'Questionnaire de ...',
            'image'=>'Modele_questionnaire.jpg',
            'categorie'=>'questionnaire',
        ]);
    }
}

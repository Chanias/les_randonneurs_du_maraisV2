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
            'nom_document'=>'Certificat médical de Catherine Decloux',
            'image'=>'certificat_medical_CD.jpg'
        ]);

        Document::create([
            'nom_document'=>'Certificat médical de Jean-Paul Decloux',
            'image'=>'certificat_medical_JPD.jpg'
        ]);

        Document::create([
            'nom_document'=>'Certificat médical de Marcelle Bonneau',
            'image'=>'certificat_medical_MB.jpg'
        ]);

        Document::create([
            'nom_document'=>'Certificat médical de Rémi Ayraud',
            'image'=>'certificat_medical_RA.jpg'
        ]);

        Document::create([
            'nom_document'=>'Questionnaire de ...',
            'image'=>'modele_questionnaire.jpg'
        ]);
    }
}

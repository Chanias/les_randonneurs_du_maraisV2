<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Notification;

class NotificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notification::create([
            'titre'=>'Nouvel utilisateur inscrit',
            'message'=> 'Vous avez un nouvel utlisateur d\'inscrit, vous devez traiter son dossier',
            'lue'=>0,
            'traitee'=>0,
            'user_id'=>1   
        ]);
        Notification::create([
            'titre'=>'Suppression compte utilisateur',
            'message'=> 'Vous avez un utlisateur qui a supprimé son compte',
            'lue'=>0,
            'traitee'=>0,
            'user_id'=>1   
        ]);
        Notification::create([
            'titre'=>'Ajout des documents de santé',
            'message'=> 'Vous avez un utlisateur qui a renseigné ses documents médicaux, vous devez traiter son dossier',
            'lue'=>1,
            'traitee'=>0,
            'user_id'=>3  
        ]);
        
    }
}

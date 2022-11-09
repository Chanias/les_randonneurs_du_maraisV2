<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randonnee extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'heure_rdv',
        'heure_depart',
        'point_de_depart',
        'nom',
        'commentaires',
        'kilometres',
        'lien_photos',
    ];

    // ON CHARGE DIRECTEMENT A LA CREATION D'UNE RANDONNEE LES INFORMATIONS DES CARTES
    protected $with=[
        'carte',
        'animateurs'
    ];
 

    // CREATION DE 2 EAGER LOADING POUR LIER LA TABLE RANDONNEE AVEC LES INFORMATIONS DE LA TABLE
    // CARTE ET LA TABLE ANIMATEUR

    public function carte(){
        return $this->hasOne(Carte::class);
    }
   
    public function animateurs(){
        return $this ->belongsToMany(User::class, 'animateurs');
    }
}

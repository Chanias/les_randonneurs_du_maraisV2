<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randonnee extends Model
{
    use HasFactory;

    protected $fillable = [
        'randonnee_id',
        'nom',
        'image',
        'categorie'
    ];

    // // ON CHARGE DIRECTEMENT A LA CREATION D'UNE RANDONNEE LES INFORMATIONS DES CARTES
    // protected $with=[
    //     'carte',
    //     'animateurs'
    // ];
 

    // // CREATION DE 2 EAGER LOADING POUR LIER LA TABLE RANDONNEE AVEC LES INFORMATIONS DE LA TABLE
    // // CARTE ET LA TABLE ANIMATEUR

    // public function carte(){
    //     return $this->hasOne(Carte::class);
    // }
   
    // public function animateurs(){
    //     return $this ->belongsToMany(User::class, 'animateurs');
    // }
}

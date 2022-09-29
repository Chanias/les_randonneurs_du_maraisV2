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
    protected $with=[
        'carte'
    ];

    public function carte()
    {
        return $this->hasOne(Carte::class);
    }
    public function animateur()
    {
        return $this->hasOne(Animateur::class);
    }
}

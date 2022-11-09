<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    use HasFactory;

    protected $fillable = [
        'randonnee_id',
        'nom_fichier'
       
    ];
    public function randonnee()
    {
        return $this->belongsTo(Randonnee::class);
    }

}

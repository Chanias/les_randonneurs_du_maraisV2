<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Randonnee extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_rando', 
        'heure_depart', 
        'depart_rando', 
        'circuit', 
        'kilometres',
        'animateurs'
    ];
}

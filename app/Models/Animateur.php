<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'randonnee_id'
     ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adresse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'adresse', 
        'code_postal', 
        'ville'
        
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
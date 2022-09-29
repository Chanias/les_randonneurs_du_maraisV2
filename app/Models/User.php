<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenom',
        'date_de_naissance',
        'num_telephone_fixe',
        'num_telephone_portable',
        'email',
        'password',
    ];

//on charge automatique le role du user
    protected $with = [
        'role'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function adresse()
    {
        return $this->hasOne(Adresse::class);
    }
    public function document()
    {
        return $this->hasOne(Document::class);
    }
    public function role()
    {
        return $this->belongsTo(Role::class);
    }
    public function animateur()
    {
        return $this->hasOne(Animateur::class);
    }
    public function isAdmin()
    {
        if ($this-> role->role=='Administrateur'){
            return true;
        }
    }
}

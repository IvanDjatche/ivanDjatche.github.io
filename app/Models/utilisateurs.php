<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class utilisateurs extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'Nom',
        'Prenom',
        'Telephone',
        'Ville',
        'Adresse',
        'Sexe',
        'DateNaiss',
        'email',
        'Role',
        'password',
        
    ];
}

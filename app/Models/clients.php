<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accueil extends Model
{
    use HasFactory;



        protected $guard = 'home';

        protected $fillable = [
            'Nom', 'email', 'password',
        ];

        protected $hidden = [
            'Passe', 'remember_token',
        ];
}

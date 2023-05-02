<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    use HasFactory;

    protected $guard = 'admin';

    protected $fillable = [
        'Nom', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

}

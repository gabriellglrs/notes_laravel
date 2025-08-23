<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 */
class User extends Model
{
    use HasFactory;

    // Colunas que podem ser preenchidas em massa
    protected $fillable = ['name', 'email', 'password'];
}


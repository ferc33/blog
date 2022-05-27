<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $table = 'blog'; //NOMBRE DE TABLA DE BASE DE DATOS

    use HasFactory;
}

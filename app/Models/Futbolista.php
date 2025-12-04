<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Futbolista extends Model
{
    protected $fillable = [
    'nombre',
    'posicion',
    'edad',
    'equipo',
    'nacionalidad'
];
}

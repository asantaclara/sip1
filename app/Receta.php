<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
    protected $fillable = [
        'id',
        'tipo_id',
        'profesional_id',
        'contenido' ,
        'titulo'
    ];
}

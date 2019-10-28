<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicion extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'tipo_id',
        'profesional_id',
        'peso',
        'created_at',
        'updated_at',
        'masa_muscular',
        'masa_grasa',
        'fecha',
        'altura',
        'contenido'
    ];
}

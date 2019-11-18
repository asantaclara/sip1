<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'url',
        'tipo_id',
        'profesional_id',
        'contenido',
        'created_at',
        'updated_at'
    ];
}

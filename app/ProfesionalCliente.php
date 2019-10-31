<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfesionalCliente extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'profesional_id',
        'created_at',
        'updated_at',
    ];
}

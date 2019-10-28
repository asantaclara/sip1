<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteReceta extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'receta_id',
        'created_at',
        'updated_at',

    ];

}

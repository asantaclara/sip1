<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividad extends Model
{
    protected $fillable = [
        'id',
        'cliente_id',
        'profesional_id',
        'contenido',
        'tipo_id',
        'created_at',
        'updated_at',
        'fecha_inicio',
        'fecha_fin',
        'finalizada',
        'comentario_paciente',
        'comentario_profesional',
        'template',
        'titulo',
        'descripcion',
        'url'
    ];
}

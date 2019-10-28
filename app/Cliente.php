<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'apellido',
        'dni',
        'fecha_nacimiento',
        'created_at',
        'updated_at',
        'genero',
        'comentarios',
        'telefono',
        'direccion',
        'email',
        'obra_social',
        'plan_obra_social',
        'numero_obra_social'
    ];

    public function recetas()
    {
        return $this->belongsToMany('App\Receta','laravel.cliente_recetas','cliente_id', 'receta_id');
    }

    public function actividades()
    {
        return $this->hasMany('App\Actividad', 'cliente_id' );
    }

    public function notas()
    {
        return $this->hasMany('App\Nota', 'cliente_id' );
    }

}

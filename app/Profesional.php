<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesional extends Model
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
        'email'
    ];

    public function recetas()
    {
        return $this->hasMany('App\Receta', 'profesional_id' );
    }

    public function actividades()
    {
        return $this->hasMany('App\Actividad', 'profesional_id' );
    }

    public function notas()
    {
        return $this->hasMany('App\Nota', 'profesional_id' );
    }

    public function clientes()
    {
        return $this->belongsToMany('App\Cliente','laravel.profesional_clientes','profesional_id', 'cliente_id');
    }

    public function templates()
    {
        return Actividad::where('profesional_id', $this->id)->where('template', 1)->get();
    }

}

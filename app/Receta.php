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
        'titulo',
        'url'
    ];

    public function productos()
    {
        return $this->belongsToMany('App\Producto','laravel.receta_productos','receta_id', 'producto_id');
    }
}

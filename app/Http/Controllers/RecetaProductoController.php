<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Medicion;
use App\Receta;
use App\RecetaProducto;
use Illuminate\Http\Request;

class RecetaProductoController extends Controller
{
    public function index()
    {
        return RecetaProducto::all();

    }

    public function productosDeReceta(Receta $receta)
    {
        return $receta->productos;

    }

    public function show(RecetaProducto $recetaProducto)
    {
        return $recetaProducto;
    }

    public function store(Request $request)
    {
        $recetaProducto = RecetaProducto::create($request->all());

        return response()->json($recetaProducto, 201);
    }

    public function update(Request $request, RecetaProducto $recetaProducto)
    {
        info($request->all());
        $recetaProducto->update($request->all());

        return response()->json($recetaProducto, 200);
    }

    public function delete(RecetaProducto $recetaProducto)
    {
        $recetaProducto->delete();

        return response()->json(null, 204);
    }
}

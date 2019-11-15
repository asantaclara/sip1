<?php

namespace App\Http\Controllers;

use App\Profesional;
use App\Receta;
use Illuminate\Http\Request;

class RecetaController extends Controller
{
    public function index()
    {
        return Receta::all();

    }

    public function show(Receta $receta)
    {
        return $receta;
    }

    public function recetasDeProfesional(Profesional $profesional)
    {
        return Receta::where('profesional_id', $profesional->id)->get();
    }

    public function store(Request $request)
    {
        $receta = Receta::create($request->all());

        return response()->json($receta, 201);
    }

    public function update(Request $request, Receta $receta)
    {
        info($request->all());
        $receta->update($request->all());

        return response()->json($receta, 200);
    }

    public function delete(Receta $receta)
    {
        $receta->delete();

        return response()->json(null, 204);
    }
}

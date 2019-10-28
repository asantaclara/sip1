<?php

namespace App\Http\Controllers;

use App\Medicion;
use Illuminate\Http\Request;

class MedicionController extends Controller
{
    public function index()
    {
        return Medicion::all();

    }

    public function show(Medicion $medicion)
    {
        return $medicion;
    }

    public function store(Request $request)
    {
        $medicion = Medicion::create($request->all());

        return response()->json($medicion, 201);
    }

    public function update(Request $request, Medicion $medicion)
    {
        info($request->all());
        $medicion->update($request->all());

        return response()->json($medicion, 200);
    }

    public function delete(Medicion $medicion)
    {
        $medicion->delete();

        return response()->json(null, 204);
    }
}

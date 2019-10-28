<?php

namespace App\Http\Controllers;

use App\Profesional;
use Illuminate\Http\Request;

class ProfesionalController extends Controller
{
    public function index()
    {
        return Profesional::all();

    }

    public function show(Profesional $profesional)
    {
        return $profesional;
    }

    public function store(Request $request)
    {
        $profesional = Profesional::create($request->all());

        return response()->json($profesional, 201);
    }

    public function update(Request $request, Profesional $profesional)
    {
        info($request->all());
        $profesional->update($request->all());

        return response()->json($profesional, 200);
    }

    public function delete(Profesional $profesional)
    {
        $profesional->delete();

        return response()->json(null, 204);
    }
}

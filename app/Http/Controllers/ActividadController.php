<?php

namespace App\Http\Controllers;
Use App\Actividad;

use App\Cliente;
use App\Profesional;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        return Actividad::all();

    }

    public function show(Actividad $actividad)
    {
        return $actividad;
    }

    public function store(Request $request)
    {
        $actividad = Actividad::create($request->all());

        return response()->json($actividad, 201);
    }

    public function update(Request $request, Actividad $actividad)
    {
        info($request->all());
        $actividad->update($request->all());

        return response()->json($actividad, 200);
    }

    public function delete(Actividad $actividad)
    {
        $actividad->delete();

        return response()->json(null, 204);
    }

    public function getActividadesProfesional(Profesional $profesional)
    {
        return $profesional->actividades;

    }

    public function getActividadesProfesionalCliente(Profesional $profesional, Cliente $cliente)
    {
        return Actividad::where('profesional_id',$profesional->id)->where('cliente_id', $cliente->id)->get();
    }

    public function getActividadesCliente(Cliente $cliente)
    {
        return $cliente->actividades;
    }

    public function getTemplatesFromProfesional(Profesional $profesional)
    {
        return $profesional->templates();
    }


}

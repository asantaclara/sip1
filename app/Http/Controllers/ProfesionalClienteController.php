<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Profesional;
use App\ProfesionalCliente;
use Illuminate\Http\Request;

class ProfesionalClienteController extends Controller
{
    public function index()
    {
        return ProfesionalCliente::all();

    }

    public function show(ProfesionalCliente $profesionalCliente)
    {
        return $profesionalCliente;
    }

    public function store(Request $request)
    {
        $profesionalCliente = ProfesionalCliente::create($request->all());

        return response()->json($profesionalCliente, 201);
    }

    public function update(Request $request, ProfesionalCliente $profesionalCliente)
    {
        info($request->all());
        $profesionalCliente->update($request->all());

        return response()->json($profesionalCliente, 200);
    }

    public function delete(ProfesionalCliente $profesionalCliente)
    {
        $profesionalCliente->delete();

        return response()->json(null, 204);
    }

    public function clientesDeProfesional(Profesional $profesional) {

        return $profesional->clientes;
    }

}

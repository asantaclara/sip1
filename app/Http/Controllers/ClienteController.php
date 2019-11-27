<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Profesional;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();

    }

    public function login($dni)
    {
        $cliente = Cliente::where('dni', $dni)->get();

        if(count($cliente)){
            return response()->json(true, 200);
        }

        $profesional = Profesional::where('dni', $dni)->get();

        if(count($profesional)){
            return response()->json(false, 200);
        }

        return response()->json('', 500);

    }

    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return response()->json($cliente, 201);
    }

    public function update(Request $request, Cliente $cliente)
    {
        info($request->all());
        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function delete(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json(null, 204);
    }

}

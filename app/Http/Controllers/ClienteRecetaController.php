<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\ClienteReceta;
use Illuminate\Http\Request;

class ClienteRecetaController extends Controller
{
    public function index()
    {
        return ClienteReceta::all();

    }

    public function show(ClienteReceta $clienteReceta)
    {
        return $clienteReceta;
    }

    public function store(Request $request)
    {
        $clienteReceta = ClienteReceta::create($request->all());

        return response()->json($clienteReceta, 201);
    }

    public function update(Request $request, ClienteReceta $clienteReceta)
    {
        info($request->all());
        $clienteReceta->update($request->all());

        return response()->json($clienteReceta, 200);
    }

    public function delete(ClienteReceta $clienteReceta)
    {
        $clienteReceta->delete();

        return response()->json(null, 204);
    }

    public function recetasDeCliente(Cliente $cliente) {

        return $cliente->recetas;
    }
}

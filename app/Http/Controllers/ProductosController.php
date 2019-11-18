<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        return Producto::all();

    }

    public function show(Producto $producto)
    {
        return $producto;
    }

    public function store(Request $request)
    {
        $producto = Producto::create($request->all());

        return response()->json($producto, 201);
    }

    public function update(Request $request, Producto $producto)
    {
        info($request->all());
        $producto->update($request->all());

        return response()->json($producto, 200);
    }

    public function delete(Producto $producto)
    {
        $producto->delete();

        return response()->json(null, 204);
    }
}

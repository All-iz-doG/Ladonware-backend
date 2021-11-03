<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return response()->json($productos->toArray(), 200);
    }

    //store a new Producto
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->cantidad = $request->cantidad;
        $producto->categoria = $request->categoria;
        $producto->save();
        return response()->json($producto, 201);
    }

    //update an existing Producto
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['message' => 'Producto no encotrado'], 404);
        }
        $producto->nombre = $request->nombre;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->imagen = $request->imagen;
        $producto->cantidad = $request->cantidad;
        $producto->categoria = $request->categoria;
        $producto->save();
        return response()->json($producto, 200);
    }

    //delete an existing Producto
    public function destroy($id)
    {
        $producto = Producto::find($id);
        if (!$producto) {
            return response()->json(['message' => 'Producto no encotrado'], 404);
        }
        $producto->delete();
        return response()->json(['message' => 'Producto borrado con exito'], 200);
    }
}

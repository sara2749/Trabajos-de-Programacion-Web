<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $loKi = Producto::all();
        return response()->json($loKi,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $agua = new Producto(
            [
            'name' => $request->get('name'),
            'stock' => $request->get('stock'),
            'price' => $request->get('price')
            ]
        );
        $agua->save();
        return response()->json($agua,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto= Producto::find($id);
        return response()->json($producto,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto= Producto::find($id);
        $producto->name=$request->get('name');
        $producto->stock=$request->get('stock');
        $producto->price=$request->get('price');
        $producto->save();
        return response()->json($producto,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cosa= Producto::find($id);
        $cosa->delete();
        return response()->json($cosa,200);
    }
}

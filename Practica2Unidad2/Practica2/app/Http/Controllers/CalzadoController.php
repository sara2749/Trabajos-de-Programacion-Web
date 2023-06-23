<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calzado;

class CalzadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dulce=Calzado::all();
        return response()->json($dulce,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sopa = new Calzado(
            [
                'Marca'=> $request->get('Marca'),
                'Categoria'=> $request->get('Categoria'),
                'Talla'=> $request->get('Talla'),
                'Color'=> $request->get('Color'),
                'stock'=> $request->get('stock'),
                'Precio'=> $request->get('Precio')
        ]

        );
        $sopa->save();
        return response()->json($sopa,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paquetito= Calzado::find($id);
        return response()->json($paquetito,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paquetito= Calzado::find($id);
        $paquetito->Marca=$request->get('Marca');
        $paquetito->Categoria=$request->get('Categoria');
        $paquetito->Talla=$request->get('Talla');
        $paquetito->Color=$request->get('Color');
        $paquetito->Precio=$request->get('Precio');
        $paquetito->stock=$request->get('stock');
        $paquetito->save();
        return response()->json($paquetito,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto= Calzado::find($id);
        $producto->delete();
        return response()->json($producto,200);
    }
}

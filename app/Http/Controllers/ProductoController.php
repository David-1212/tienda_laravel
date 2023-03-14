<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $producto = Producto::all();
        
        return view('productos.index',compact('producto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('productos.agregar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombrep' => ['required', 'string', 'max:40', 'min:5'],
            'precio' => ['required', 'numeric', 'min:1'],
            'descripcion' => ['required', 'string', 'min:5', 'max:200'],
        ]);

        $producto = new Producto();
        $producto->nombrep = $request->nombrep;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect('/producto');
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        
        return view('productos.editp',compact('producto'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        
        $request->validate([
            'nombrep' => ['required', 'string', 'max:40', 'min:5'],
            'precio' => ['required', 'numeric', 'min:1'],
            'descripcion' => ['required', 'string', 'min:5', 'max:200'],
        ]);


        $producto->nombrep = $request->nombrep;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->descripcion;

        $producto->save();

        return redirect('/producto');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        
        $producto->delete();
        return redirect('/producto');
    }
}

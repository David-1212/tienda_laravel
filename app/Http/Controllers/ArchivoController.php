<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use Illuminate\Http\Request;

class ArchivoController extends Controller
{
    public function index()
    {
        $archivos = Archivo::all();
        return view('archivos.index', compact('archivos'));
        
        
    }

    public function store(Request $request)
    {
        $ruta = $request->file('archivo')->store('archivo');
        $nombre = $request->file('archivo')->getClientOriginalName();

        $archivo = new Archivo;
        $archivo->nombre = $nombre;
        $archivo->ruta = $ruta;
        $archivo->save();

        
        return redirect('/archivo');
    }

    public function show($id)
    {



        $archivo = Archivo::find($id);
        $user = $archivo->user;
        return view('archivos.show', compact('archivo'));
    }

    public function destroy($id)
    {
        $archivo = Archivo::findOrFail($id);
        $archivo->delete();

        return redirect()->route('archivo.index')->with('success', 'Archivo eliminado exitosamente.');
    }
}
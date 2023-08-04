<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dependencia;

class DependenciaController extends Controller
{
    // Mostrar la página de inicio
    public function index()
    {
        $dependencias = Dependencia::all();
        
        return view('dependencias.index', compact('dependencias'));
    }

    // Mostrar el formulario para crear una nueva dependencia
    public function create()
    {
        $dependencias = Dependencia::all();
        
        return view('dependencias.create', compact('dependencias'));
    }

    // Guardar la nueva dependencia
    public function store(Request $request)
    {
        $dependencia = new Dependencia();
        $dependencia->nombre = $request->nombre;
        $dependencia->descripcion = $request->descripcion;
        $dependencia->save();
        
        return redirect()->route('dependencias.index');
    }

    // Mostrar el formulario para editar una dependencia
    public function edit($id)
    {
        $dependencia = Dependencia::find($id);
        
        return view('dependencias.edit', compact('dependencia'));
    }

    // Actualizar la dependencia
    public function update(Request $request, $id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->nombre = $request->nombre;
        $dependencia->descripcion = $request->descripcion;
        $dependencia->save();
        
        return redirect()->route('dependencias.index');
    }

    // Eliminar la dependencia
    public function destroy($id)
    {
        $dependencia = Dependencia::find($id);
        $dependencia->delete();
        
        return redirect()->route('dependencias.index');
    }
    
}
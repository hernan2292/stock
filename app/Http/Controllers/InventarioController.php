<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Dependencia;

class InventarioController extends Controller
{
    // Mostrar la página de inicio
    public function index()
    {
        $productos = Producto::all();
        $dependencias = Dependencia::all();

        return view('productos.index', compact('productos', 'dependencias'));
    }

    // Mostrar el formulario para crear una nueva producto
    public function create()
    {
        $productos = Producto::all();
        $dependencias = Producto::all();

        return view('productos.create', compact('productos', 'dependencias'));
    }

    // Guardar la nueva producto
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->modelo = $request->modelo;
        $producto->numero_serie = $request->numero_serie;
        $producto->cantidad = $request->cantidad;
        $producto->novedad = $request->novedad;
        $producto->save();

        return redirect()->route('inventarios.index');
    }

    // Mostrar el formulario para editar una producto
    public function edit($id)
    {
        $producto = Producto::find($id);

        return view('productos.edit', compact('producto'));
    }

    // Actualizar la producto
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->modelo = $request->modelo;
        $producto->numero_serie = $request->numero_serie;
        $producto->cantidad = $request->cantidad;
        $producto->novedad = $request->novedad;
        $producto->save();

        return redirect()->route('inventarios.index');
    }

    // Eliminar la producto
    public function destroy($id)
    {
        $producto = Producto::find($id);
        $producto->delete();

        return redirect()->route('inventarios.index');
    }
}

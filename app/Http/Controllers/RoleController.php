<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dependencia;
use App\Models\Role;
use App\Models\Permiso;

class RoleController extends Controller
{
    // Mostrar la página de inicio
    public function index()
    {
        $roles = Role::all();
        $permisos = Permiso::all();

        return view('roles.index', compact('permisos', 'roles'));
    }

    // Mostrar el formulario para crear una nueva usuario
    public function create()
    {
        $roles = Role::all();
        $permisos = Permiso::all();

        return view('roles.create', compact('permisos', 'roles'));
    }

    // Guardar la nueva usuario
    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->password = $request->password;

        $usuario->dependencia_id = $request->dependencia_id;
        $usuario->role_id = $request->role_id;

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    // Mostrar el formulario para editar una usuario
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        $dependencias = Dependencia::all();


        return view('usuarios.edit', compact('user', 'dependencias', 'roles'));
    }

    // Actualizar la usuario
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'roles' => 'array',
        ]);

        $user->update($request->only('name', 'email', 'password'));
        $user->roles()->sync($request->input('roles', []));
        
        return redirect()->route('users.index')->with('success', 'Usuario actualizado exitosamente.');
    }

    // Eliminar una usuario
    public function destroy($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect()->route('usuarios.index');
    }
}

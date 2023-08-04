<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permiso;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear el rol Administrador
        $adminRole = Role::create([
            'nombre' => 'Administrador',
            'descripcion' => 'Rol con acceso completo a todas las funcionalidades del sistema.',
        ]);

        // Asignar permisos al rol Administrador
        $adminRole->permisos()->attach([
            Permiso::where('codigo', 'ver_usuarios')->first()->id,
            Permiso::where('codigo', 'crear_usuarios')->first()->id,
            Permiso::where('codigo', 'editar_usuarios')->first()->id,
            Permiso::where('codigo', 'eliminar_usuarios')->first()->id,
            Permiso::where('codigo', 'ver_roles')->first()->id,
            Permiso::where('codigo', 'crear_roles')->first()->id,
            Permiso::where('codigo', 'editar_roles')->first()->id,
            Permiso::where('codigo', 'eliminar_roles')->first()->id,
            Permiso::where('codigo', 'ver_dependencias')->first()->id,
        ]);

        // Crear el rol Usuario
        $userRole = Role::create([
            'nombre' => 'Usuario',
            'descripcion' => 'Rol con acceso limitado a ciertas funcionalidades del sistema.',
        ]);

        // Asignar permisos al rol Usuario
        $userRole->permisos()->attach([
            Permiso::where('codigo', 'ver_usuarios')->first()->id,
            Permiso::where('codigo', 'ver_dependencias')->first()->id,
        ]);
    }
}

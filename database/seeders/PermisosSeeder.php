<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permiso;

class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisos = [
            // Permisos para el recurso 'users'
            [
                'nombre' => 'Ver usuarios',
                'codigo' => 'ver_usuarios',
                'descripcion' => 'Permite ver la lista de usuarios registrados.',
            ],
            [
                'nombre' => 'Crear usuarios',
                'codigo' => 'crear_usuarios',
                'descripcion' => 'Permite crear nuevos usuarios en el sistema.',
            ],
            [
                'nombre' => 'Editar usuarios',
                'codigo' => 'editar_usuarios',
                'descripcion' => 'Permite editar la información de los usuarios.',
            ],
            [
                'nombre' => 'Eliminar usuarios',
                'codigo' => 'eliminar_usuarios',
                'descripcion' => 'Permite eliminar usuarios del sistema.',
            ],

            // Permisos para el recurso 'roles'
            [
                'nombre' => 'Ver roles',
                'codigo' => 'ver_roles',
                'descripcion' => 'Permite ver la lista de roles disponibles.',
            ],
            [
                'nombre' => 'Crear roles',
                'codigo' => 'crear_roles',
                'descripcion' => 'Permite crear nuevos roles en el sistema.',
            ],
            [
                'nombre' => 'Editar roles',
                'codigo' => 'editar_roles',
                'descripcion' => 'Permite editar los nombres y permisos de los roles.',
            ],
            [
                'nombre' => 'Eliminar roles',
                'codigo' => 'eliminar_roles',
                'descripcion' => 'Permite eliminar roles del sistema.',
            ],

            // Permisos para el recurso 'dependencias'
            [
                'nombre' => 'Ver dependencias',
                'codigo' => 'ver_dependencias',
                'descripcion' => 'Permite ver la lista de dependencias registradas.',
            ],
            [
                'nombre' => 'Crear dependencias',
                'codigo' => 'crear_dependencias',
                'descripcion' => 'Permite crear nuevas dependencias en el sistema.',
            ],
            [
                'nombre' => 'Editar dependencias',
                'codigo' => 'editar_dependencias',
                'descripcion' => 'Permite editar la información de las dependencias.',
            ],
            [
                'nombre' => 'Eliminar dependencias',
                'codigo' => 'eliminar_dependencias',
                'descripcion' => 'Permite eliminar dependencias del sistema.',
            ],

            // Permisos para el recurso 'inventarios'
            [
                'nombre' => 'Ver inventarios',
                'codigo' => 'ver_inventarios',
                'descripcion' => 'Permite ver la lista de inventarios registrados.',
            ],
            [
                'nombre' => 'Crear inventarios',
                'codigo' => 'crear_inventarios',
                'descripcion' => 'Permite crear nuevos registros de inventarios.',
            ],
            [
                'nombre' => 'Editar inventarios',
                'codigo' => 'editar_inventarios',
                'descripcion' => 'Permite editar la información de los inventarios.',
            ],
            [
                'nombre' => 'Eliminar inventarios',
                'codigo' => 'eliminar_inventarios',
                'descripcion' => 'Permite eliminar registros de inventarios.',
            ],
        ];

        foreach ($permisos as $permiso) {
            Permiso::create($permiso);
        }
    }
}

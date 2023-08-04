@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Roles</h3>
                        <a href="{{ route('roles.create') }}" class="btn btn-primary">Crear nuevo rol</a>
                        <br>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripcion</th>
                                    <th>Permisos</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->nombre }}</td>
                                        <td>{{ $role->descripcion }}</td>
                                        <td>
                                            @if (optional($role->permisos)->count() > 0)
                                                <ul>
                                                    @foreach ($role->permisos as $permiso)
                                                        <li>{{ $permiso->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>No hay permisos asociados a este rol.</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}"
                                                class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este rol?')">Eliminar</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Usuarios</h3>
                        <a href="{{ route('users.create') }}" class="btn btn-primary">Crear nuevo usuario</a>
                        <br>
                        <br>
                        <select name="dependencia_id" id="dependencia_id" class="form-control">
                            <option value="">Selecciona una dependencia</option>
                            @foreach ($dependencias as $dependencia)
                                <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Dependencia</th>
                                    <th>Roles</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($usuarios as $usuario)
                                    <tr>
                                        <td>{{ $usuario->name }}</td>
                                        <td>{{ $usuario->email }}</td>
                                        <td>
                                            @if (optional($usuario->dependencias)->count() > 0)
                                                <ul>
                                                    @foreach ($usuario->dependencias as $dependencia)
                                                        <li>{{ $dependencia->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>No hay dependencias asociadas a este usuario.</p>
                                            @endif
                                        </td>
                                        <td>
                                            @if (optional($usuario->roles)->count() > 0)
                                                <ul>
                                                    @foreach ($usuario->roles as $rol)
                                                        <li>{{ $rol->nombre }}</li>
                                                    @endforeach
                                                </ul>
                                            @else
                                                <p>No hay roles asociados a este usuario.</p>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('users.edit', $usuario->id) }}"
                                                class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('users.destroy', $usuario->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?')">Eliminar</button>
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

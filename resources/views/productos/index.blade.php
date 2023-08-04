@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Dependencias</h3>
                        <a href="{{ route('dependencias.create') }}" class="btn btn-primary">Crear nueva dependencia</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dependencias as $dependencia)
                                    <tr>
                                        <td>{{ $dependencia->id }}</td>
                                        <td>{{ $dependencia->nombre }}</td>
                                        <td>{{ $dependencia->descripcion }}</td>
                                        <td>
                                            <a href="{{ route('dependencias.edit', $dependencia->id) }}"
                                                class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('dependencias.destroy', $dependencia->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar esta dependencia?')">Eliminar</button>
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

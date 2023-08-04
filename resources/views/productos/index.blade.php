@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Listado de Equipos</h3>
                        <a href="{{ route('inventarios.create') }}" class="btn btn-primary">Crear nuevo equipo</a>
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
                                    <th>Descripción</th>
                                    <th>Modelo</th>
                                    <th>Nro Serie</th>
                                    <th>Cantidad</th>
                                    <th>Novedad</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($productos as $producto)
                                    <tr>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->descripcion }}</td>
                                        <td>{{ $producto->modelo }}</td>
                                        <td>{{ $producto->numero_serie }}</td>
                                        <td>{{ $producto->cantidad }}</td>
                                        <td>{{ $producto->novedad }}</td>
                                        <td>
                                            <a href="{{ route('inventarios.edit', $producto->id) }}"
                                                class="btn btn-sm btn-primary">Editar</a>
                                            <form action="{{ route('inventarios.destroy', $producto->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger"
                                                    onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?')">Eliminar</button>
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

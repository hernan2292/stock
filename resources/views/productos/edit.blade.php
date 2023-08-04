@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Equipo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('inventarios.update', $producto->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    value="{{ $producto->nombre }}" required>
                            </div>

                            <div class="form-group">
                                <label for="modelo">Modelo:</label>
                                <input type="text" name="modelo" id="modelo" class="form-control"
                                    value="{{ $producto->modelo }}" required>
                            </div>

                            <div class="form-group">
                                <label for="numero_serie">Numero de Serie:</label>
                                <input type="text" name="numero_serie" id="numero_serie" class="form-control"
                                    value="{{ $producto->numero_serie }}" required>
                            </div>

                            <div class="form-group">
                                <label for="cantidad">Cantidad:</label>
                                <input type="number" name="cantidad" id="cantidad" class="form-control"
                                    value="{{ $producto->cantidad }}" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ $producto->descripcion }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="novedad">Novedad:</label>
                                <textarea name="novedad" id="novedad" class="form-control" rows="4" required>{{ $producto->novedad }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar Equipo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

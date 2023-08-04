@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Nueva Dependencia</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dependencias.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required></textarea>
                            </div>

                            <!-- Si hay una relación de dependencia, agrega un campo select para seleccionar la dependencia padre -->
                            <!-- <div class="form-group">
                                <label for="dependencia_id">Dependencia Padre:</label>
                                <select name="dependencia_id" id="dependencia_id" class="form-control">
                                    <option value="">Seleccione una dependencia padre (opcional)</option>
                                    @foreach ($dependencias as $dependencia)
                                    <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}</option>
                                    @endforeach
                                </select>
                            </div> -->

                            <button type="submit" class="btn btn-primary">Crear dependencia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

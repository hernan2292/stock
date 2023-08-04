@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Editar Dependencia</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('dependencias.update', $dependencia->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control"
                                    value="{{ $dependencia->nombre }}" required>
                            </div>

                            <div class="form-group">
                                <label for="descripcion">Descripción:</label>
                                <textarea name="descripcion" id="descripcion" class="form-control" rows="4" required>{{ $dependencia->descripcion }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Actualizar dependencia</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

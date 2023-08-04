@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Crear Nuevo Rol</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('roles.store') }}" method="POST">
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
                            <div class="form-group">
                                <label for="permisos">Permisos:</label>
                                <select name="permisos" id="permisos" class="form-control">
                                    <option value="">Seleccione permisos (opcional)</option>
                                    @foreach ($permisos as $permiso)
                                        <option value="{{ $permiso->id }}">{{ $permiso->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Crear Rol</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

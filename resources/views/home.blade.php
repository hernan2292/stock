@extends('layouts.app')

@section('content')
    <select name="dependencia_id" id="dependencia_id" class="form-control">
        <option value="">Selecciona una dependencia</option>
        @foreach ($dependencias as $dependencia)
            <option value="{{ $dependencia->id }}">{{ $dependencia->nombre }}</option>
        @endforeach
    </select>
@endsection

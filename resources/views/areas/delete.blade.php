@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Confirmar eliminación del área</h1>

    <div class="alert alert-warning">
        <strong>¿Estás seguro de que deseas eliminar esta área?</strong>
        <p>Nombre del Área: {{ $area->nombreArea }}</p>
        <p>Descripción: {{ $area->descripcion }}</p>
    </div>

    <form action="{{ route('areas.destroy', $area->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Eliminar</button>
        <a href="{{ route('areas.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
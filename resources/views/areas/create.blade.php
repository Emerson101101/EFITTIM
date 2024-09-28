@extends('layout.app')
@section('content')
<div class="container">
    <h1>Crear Nueva Área</h1>

    <!-- Mostrar errores de validación ::::::::::::::
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif -->

    <form action="{{ route('areas.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nombreArea" class="form-label">Nombre del Área</label>
            <input type="text" name="nombreArea" id="nombreArea" class="form-control" value="{{ old('nombreArea') }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea name="descripcion" id="descripcion" class="form-control">{{ old('descripcion') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="{{ route('areas.show') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection

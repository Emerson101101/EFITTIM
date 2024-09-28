
@extends('layout.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<div class="container">
@section('title', 'Inicio')
    <h1>Lista de Áreas</h1>

        <!-- Mensaje de éxito o error -->
        @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <a href="#" class="btn btn-primary mb-3">Agregar Nueva Área</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre del Área</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($areas as $area)
            <tr>
                <td>{{ $area->id }}</td>
                <td>{{ $area->nombreArea }}</td>
                <td>{{ $area->descripcion }}</td>
                <td>
                    <!-- Aquí puedes agregar enlaces para editar o eliminar -->
                    <a href="#" class="btn btn-danger btn-sm">Editar</a>
                    <a href="{{ route('areas.delete', $area->id) }}" class="btn btn-sm btn-danger">Eliminar</a>
                    <a href="{{ route('areas.create') }}" class="btn btn-sm btn-danger">Agregar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
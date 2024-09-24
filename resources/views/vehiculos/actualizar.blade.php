@extends('layout.app')

@section('title', 'Actualizar')

@section('content')
    <div class="container">
        <form action="/vehiculos/update/{{ $vehiculo->id }}" method="POST">
            @csrf
            @method('PUT')
            <!-- modelo -->
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input value="{{ $vehiculo->modelo }}" type="text" class="form-control" id="modelo" name="modelo" placeholder="Ingrese el modelo"
                    required>
                @error('modelo')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- marca -->
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input value="{{ $vehiculo->marca }}" type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca"
                    required>
                @error('marca')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- placas -->
            <div class="mb-3">
                <label for="placas" class="form-label">Placas</label>
                <input value="{{ $vehiculo->placas }}" type="text" class="form-control" id="placas" name="placas" placeholder="Ingrese las placas"
                    required>
                @error('placas')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Vehículo</button>
        </form>

    </div>

@endsection

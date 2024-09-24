@extends('layout.app')

@section('title', 'Registrar')

@section('content')
    <div class="container">
        <form action="/vehiculos/store" method="POST">
            @csrf
            <div class="mb-3">
                <label for="idCliente" class="form-label">Cliente</label>
                <select id="idCliente" name="idCliente" class="form-select" required>
                    <option value="" selected disabled>Seleccione un cliente</option>
                    <option value="123445">Cliente 1</option>
                    <option value="2">Cliente 2</option>
                </select>
                @error('idCliente')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- modelo -->
            <div class="mb-3">
                <label for="modelo" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ingrese el modelo"
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
                <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese la marca"
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
                <input type="text" class="form-control" id="placas" name="placas" placeholder="Ingrese las placas"
                    required>
                @error('placas')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- fechaIngreso -->
            <div class="mb-3">
                <label for="fechaIngreso" class="form-label">Fecha de Ingreso</label>
                <input type="date" class="form-control" id="fechaIngreso" name="fechaIngreso" required>
                @error('fechaIngreso')
                    <span class="invalid-feedback d-block" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <!-- Botón de envío -->
            <button type="submit" class="btn btn-primary">Guardar Vehículo</button>
        </form>

    </div>

@endsection
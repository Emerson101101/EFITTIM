@extends('layout.app')

@section('title', 'Inicio')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="row">
                <div class="col-sm-3">
                    <a class="btn btn-success" href="/vehiculos/create">
                        <i class="fas fa-user-plus"></i> Nuevo Vehiculo
                    </a>
                </div>
            </div>
            <hr />
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered" id="tbdata" cellspacing="0" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Cliente</th>
                                <th>Modelo</th>
                                <th>Marca</th>
                                <th>Placas</th>
                                <th>Fecha de Ingreso</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($vehiculos as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->idCliente }}</td>
                                <td>{{ $item->modelo }}</td>
                                <td>{{ $item->marca }}</td>
                                <td>{{ $item->placas }}</td>
                                <td>{{ $item->fechaIngreso }}</td>
                                <td>
                                    <a class="btn btn-success btn-sm" href="/vehiculos/edit/{{ $item->id }}">Modificar</a>
                                    <button class="btn btn-danger btn-sm" url="/vehiculos/destroy/{{ $item->id }}"
                                        onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

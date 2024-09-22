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
                            <!-- Datos de la tabla -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')

@section('title', 'Cambio de aceite')

@section('content')

<style>
    .container{
        margin-top:90px;
    }
</style>


<div class="container">
    <div class="card">
        <div class="card-body">
        <center><h1>Cambio de aceite</h1>
        <h5>Lista de las tareas asignadas</h5></center>

    </div>
</div>

      <br>
 {{-- Botón para ir al formulario de agregar categorias --}}
 <a class="btn btn-primary" href="/aceite/create">Agregar nueva tarea</a>
 <a class="btn btn-danger btn-sm" href="/products/create">PDF</a>

 <table class="table table-hover table-bordered mt-2">
 <tr>
 <td>Código</td>
 <td>Empleado</td>
 <td>Vehiculo</td>
 <td>Fecha</td>
 <td>Marca Aceite</td>
 <td>Telefono</td>
 <td>Hora</td>
 <td>Direccion</td>

 <td>Acciones</td>
 </tr>
 {{-- Listado de categorias --}}
 <tr>
 <td>1</td>
 <td>Emerson</td>
 <td>Nissan</td>
 <td>14-09-24</td>
 <td>Formula1</td>
 <td>99999</td>
 <td>4:00 PM</td>
 <td>San juan Nonualco</td>
 <td>
 <a class="btn btn-primary btn-sm" href="/categorias/edit/">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 
 <td>2</td>
 <td>Emerson</td>
 <td>Nissan</td>
 <td>14-09-24</td>
 <td>Formula1</td>
 <td>99999</td>
 <td>4:00 PM</td>
 <td>San juan Nonualco</td>
 <td>
 <a class="btn btn-primary btn-sm" href="/categorias/edit/">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

 <tr>
 </td>

 <td>3</td>
 <td>Emerson</td>
 <td>Nissan</td>
 <td>14-09-24</td>
 <td>Formula1</td>
 <td>99999</td>
 <td>4:00 PM</td>
 <td>San juan Nonualco</td>
 <td>
<a class="btn btn-primary btn-sm" href="/categorias/edit/">Modificar</a>

<button class="btn btn-danger btn-sm" url="/clientes/destroy/" onclick="destroy(this)" token="{{ csrf_token() }}">Eliminar</button>

</td>
 </tr> 
 </table>
@endsection
@section('scripts') 
 {{-- SweetAlert --}}
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 {{-- JS --}}
 <script src="{{ asset('js/product.js') }}"></script>
@endsection
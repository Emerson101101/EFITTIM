@extends('layout.app')

@section('title', 'Agregar nueva tarea')

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
        <h5>Formulario para crear una nueva tarea</h5></center>
        </div>
    </div>
    <br>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombre del empleado</label>
    <select id="inputState" class="form-select">
        
      <option selected>Emerson</option>
      <option selected>Wilson</option>
      <option selected>Yair</option>
      <option selected>Anibal</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Vehiculo</label>
    <select id="inputState" class="form-select">
        
        <option selected>Nissan</option>
        <option selected>KIA</option>
        <option selected>TOYOTA</option>
        </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Fecha</label>
    <input type="date" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Marca de aceite</label>
    <select id="inputState" class="form-select">
        
        <option selected>Formula 1</option>
        <option selected>Mobil 1</option>
        <option selected>SYNTEC</option>
        </select>
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Telefono</label>
    <input type="text" class="form-control" placeholder="Telefono del cliente" aria-label="First name">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Hora de entrada</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Direccion</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Direccion del cliente">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Tarea Lista
      </label>
    </div>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Craer</button>
  </div>
</form>
@endsection
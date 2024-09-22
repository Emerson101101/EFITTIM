
@extends('layout.app')

@section('title', 'Inicio')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style>
       .h1{
        margin-top:50px;
        text-align: center;
        margin-bottom:20px;
    }
 
    
    .container{
        
        margin-top:100px;
        max-width: 98%;
        max-height:100%;

    }
    #c{
        width: 77%;
        margin-top:-100px;
    }
    #c1{
        float:right;
        width: 20%;
        margin-right:2%;
        margin-top:-25%;
        height:100px;
    }
    .empresas{
        text-decoration:none;
        color:black;
    }
    
   
   #encabezado{
    margin-top:-3%;
    height:30vh;
   }
   .contenido{
    margin-top:5%;
      max-width:98%;
      background:white;
      height:92vh;
   } 
   .container2{
    margin-top:-14%;
    max-width: 98%;
   }
   
   
   
</style>

<body class="p-3 mb-2 bg-body-secondary">
<div id="encabezado" class="p-3 mb-2 bg-info text-dark">
      <center><div class="contenido">
        <br>
        <br>
      
          
      </div></center>
</div>


<div class="container">
    <center><div class="container2">
        <div class="card">
            <div class="card-body">
            <center><h1>EFFITIME <img src="{{ asset('img/logo1.ico') }}" alt=""></h1>
            <h5>Sistema de gestion de talleres automotriz, que combina eficicienta y tiempo</h5></center>
        </div>
    </div></center>

      

<br>

    <div class="grid text-center">
  <div id="c" class="g-col-6">
  <div class="container text-center">
                    <div class="row">
                        <div class="col">
                        
                        <div class="card" style="width: 18rem;  ">
                        <img src="{{ asset('img/cambio de llanta.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cambio de llanta</h5>
                            <p class="card-text">Cambio respectivo de lanta, asignar tareas y control de trabajadores.</p>
                            <a href="aceite/show" class="btn btn-primary">Ver tareas</a>
                        </div>
                        </div>
                        
                        </div>

                        <div class="col">
                        
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/aceite.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cambio de aceite</h5>
                            <p class="card-text">Cambio respectivo de aceite, asignar tareas y control de trabajadores.</p>
                            <a href="aceite/show" class="btn btn-primary">Ver tareas</a>
                        </div>
                        </div>
                        
                        </div>

                        <div class="col">
                    
                        <div class="card" style="width: 18rem;">
                        <img src="{{ asset('img/OIP.jpeg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Pastillas de frenos</h5>
                            <p class="card-text">Monitoreo de mantenimiento y control de pastillas de frenos</p>
                            <a href="#" class="btn btn-primary">Ver tareas</a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
  </div>
  <div  id="c1" class="g-col-6">
     <!---------------->
  
                <!---------------->
        <div class="card">
        <div class="card-body">
            
        
        <h5> Pedir mas repuestos</h5>
        <hr>
        <a class="empresas" href="https://sv.superrepuestos.com/Home/"><h6> Super Repuestos <img src="{{ asset('img/super.ico') }}" alt=""></h6></a>
        <hr>
        <a class="empresas" href="https://excelautomotriz.com/el-salvador/"><h6>Excel Automotriz <img src="{{ asset('img/excel.ico') }}" alt=""></h6></a>
        <hr>
        <a class="empresas" href="https://resauto.com.sv/"><h6>Resauto, S.A. de C.V.<img src="{{ asset('img/Resauto.ico') }}" alt=""></h6></a>
        </div>

        </div>
      

        
    </div>
   <br>
            
    </div>
  </div>
  
</div>
  
@endsection
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Aquí irá el título de cada página--}}
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <title>@yield('title')</title>
 @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
 {{-- Nuestro menú --}}

 <!--Encabezado-->

 

<body>
<nav class="navbar navbar-expand-lg p-3 mb-2 bg-info text-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="/home">Home <img src="{{ asset('img/casa.png') }}" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/pacientes/show">Administracion <img src="{{ asset('img/administracion (1).png') }}" alt=""></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kit de Herramientas<img src="{{ asset('img/llave-inglesa (2).png') }}" alt=""></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Taller<img src="{{ asset('img/mecanico.png') }}" alt="">
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="aceite/show">Cambio de aceite</a></li>
            <li><a class="dropdown-item" href="#">Cambio de llanta</a></li>
            <li><a class="dropdown-item" href="#"> Pastillas de freno</a></li>
           
          </ul>
        </li>
       
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>




</body>
</html>

@yield('content') 

{{-- Scripts --}}
@yield('scripts') 

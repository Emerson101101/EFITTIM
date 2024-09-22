<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 {{-- Aquí irá el título de cada página--}}
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
 <title>@yield('title')</title>
 <link rel="stylesheet" href="css/app.css">
 @vite(['resources/sass/app.scss', 'resources/js/app.js']) 
</head>
<body>
<br>
    <div class="container">
      <div class="card">
        <div class="card-body">
          <center><h1> <img src="{{ asset('img/logo1.ico') }}" alt=""> EFFITTIME </h1></center>
        </div>
      </div>
      <br>

 <div class="container-fluid">
{{-- Aquí irá el contenido de todas las páginas --}}
@yield('content') 
</div> 
</body>
</html>
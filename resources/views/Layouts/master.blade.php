<!DOCTYPE html> 
<html lang="es"> 
<head> 
   <meta charset="UTF-8"> 
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
   <title>Examen</title> 
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
   rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
   crossorigin="anonymous">
   </head> 
   <body> 
    @include('partials.navbar') 
    <div class="container"> 
        @yield('content') 
    </div> 
    @include('partials.footer') 
</body> 
</html>
<nav>
    <style>
        .activo a{
            color:red;
            text-decoration: underline;
        }
    </style>
    </head>
    <body>
<nav>
    <table class="table">
        <thead class="table table-bordered">
            <tr>
                <th scope="col" class="{{ request('inicio') ? 'activo' : ''}}"><a href="/"><Inicio</a></th>
                <th scope="col" class="{{ request('alumnos') ? 'activo' : ''}}"><a href="/"><Alumnos</a></th>

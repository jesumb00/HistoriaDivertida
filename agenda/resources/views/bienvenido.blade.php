<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('style.css')}}">
    </head>
    <body>
    <h1>Bienvenid@</h1>
    <p>Bienvenido querido usuario a la agenda laravel</p>
    <sub>Elija que quiere ver</sub>
    <button><a href='{{route('categorias.index')}}'>Categorias</a></button>
    <button><a href='{{route('personas.index')}}'>Personas</a></button>
    </body>
</html>

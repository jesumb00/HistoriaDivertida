<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
<x-menu />
<h2>Actualizar persona</h2>
<p>Nombre:{{$persona->nombre}}</p>
<p>Apellidos:{{$persona->apellidos}}</p>
<p>Telefono:{{$persona->telefono}}</p>
@if($persona->estrella==1)
    <p>Estrella:<p id='estrella2'>⚝</p></body>
@else
<p>Estrella:⚝</p>
@endif
<p>Categoria_id:{{$persona->categoria_id}}</p>

<a href='{{route('personas.edit',$persona)}}'><button>Editar</button></a>
<x-pie lugar="detalles" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

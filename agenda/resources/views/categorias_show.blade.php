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
<h2>Actualizar categoria</h2>
<p>{{$categoria->nombre}}</p>
<a href='{{route('categorias.edit',$categoria)}}'><button>Editar</button></a>
<x-pie lugar="detalles" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

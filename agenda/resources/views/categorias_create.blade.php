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
<h2>Crear categoria</h2>
<form action='{{route('categorias.store')}}' method='POST'>
    <label for='nombre'>Nombre</label>
    <input type='text' name='nombre' value=''>
    <input type='submit' value='Crear'>
</form>
<x-pie lugar="crear" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

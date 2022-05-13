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
<form action='{{route('personas.store')}}' method='POST'>
    <input type='text' name='nombre' value=''>
    <input type='text' name='apellidos' value=''>
    <input type='number' name='telefono' value=''>
    <select name='estrella'>
        <option value='1'>si</option>
        <option value='0'>no</option>
    </select>
    <input id='categoria_id' name='categoria_id' type='text' placeholder='Categoría'><br/>
    <input type='submit' value='Crear'>
</form>
<x-pie lugar="crear" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

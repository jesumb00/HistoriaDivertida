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
<form action='{{route('personas.update',$persona)}}' method='post'>
    @method('PUT')
    <input type='text' name='nombre' value='{{$persona->nombre}}'>
    <input type='text' name='apellidos' value='{{$persona->apellidos }}'>
    <input type='text' name='telefono' value='{{$persona->telefono }}'>
    <select name='estrella'>
        <option value='1'>si</option>
        <option value='0'>no</option>
    </select>
    <input id='categoria_id' name='categoria_id' type='text' placeholder='Categoría' value='{{$persona->categoria_id}}'><br/>
    <input type='submit' name='actualizar' value='Actualizar'>
</form>
<x-pie lugar="editar" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

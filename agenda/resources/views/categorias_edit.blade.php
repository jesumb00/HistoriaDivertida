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
<form action='{{route('categorias.update',$categoria)}}' method='post'>
    @method('PUT')
    <input type='text' name='nombre' value='{{$categoria->nombre}}'>
    <input type='submit' name='actualizar' value='Actualizar'>
</form>
<x-pie lugar="editar" fecha="{{Carbon\Carbon::now()->toDateTimeString()}}"/>
</body>
</html>

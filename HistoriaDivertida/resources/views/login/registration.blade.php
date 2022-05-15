<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('styles/style.login.css')}}">
</head>
<body>
<section class="login">
    <img src="{{asset('img/movimiento/color1.png')}}" alt="1" id="image">
    <form action="/store" method="POST" class="formulario">
        @csrf
        <input name="name" id="input-name" type="text" required placeholder="Nombre" value="{{old('name')}}" autocomplete="off">

        <input name="surname" id="input-surname" type="text" required placeholder="Apellido" value="{{old('surname')}}" autocomplete="off">

        <input name="email" id="input-user" type="text" required placeholder="Usuario" value="{{old('email')}}" autocomplete="off">
        @error('email'){{$message}} @enderror
        <input name="password" id="input-password" required type="password" placeholder="************">
        @error('password'){{$message}} @enderror
        <button type="submit">Registrar</button>


    </form>
</section>
<script src="{{asset('javaScript/javascript.login.js')}}"></script>
</body>
</html>

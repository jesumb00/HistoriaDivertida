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

    <form action="/forgetPassword" method="POST" class="formulario">
        @csrf
        <h3>Escribe tu email</h3>
        <input name="email" id="input-user" type="text" required placeholder="Usuario" value="{{old('email')}}" autocomplete="off">
        <button type="submit">Send</button>
    </form>
</section>
<script src="{{asset('javaScript/javascript.login.js')}}"></script>
</body>
</html>

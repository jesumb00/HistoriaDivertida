
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

    <form action="/login" method="GET" class="formulario">
        <h3>Todo correcto, revisa tu correo</h3>
        @csrf
        <button type="submit">Volver</button>
    </form>
</section>
<script src="{{asset('javaScript/javascript.login.js')}}"></script>
</body>
</html>

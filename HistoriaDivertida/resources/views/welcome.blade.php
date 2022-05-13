<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('styles/style.welcome.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.footer.css')}}">
    <script src="https://kit.fontawesome.com/fa7c04661d.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="HTTP://code.jquery.com/jquery-latest.js"></script>
</head>
<body>
<x-menu-welcome/>
<main>
    <section id="expo1" class="img-section">
        <h1>Panteon griego</h1>
        <a href="#">Explorar</a>
    </section>
    <section id="expo2" class="img-section">
        <h1>Piramides</h1>
        <a href="#">Explorar</a>
    </section>
    <section  id="expo3" class="img-section">
        <h1>Arte griego</h1>
        <a href="#">Explorar</a>
    </section>
    <section  id="expo4" class="img-section">
        <h1>Sarcófago</h1>
        <a href="#">Explorar</a>
    </section>
</main>

<!-- Menu -->
<div class="full-menu">
    <div class="wrap">

        <nav class="navigation">
            <ul class="menu-main">
                <li><a href=""></a></li>
                <li><a href="">Tienda</a></li>
                <li><a href="">Comprar entradas</a></li>
                <li><a href="">Que ver</a></li>
                <li><a href="">Exposiciones temporales</a></li>
                <li><a href="">Sobre nosotros</a></li>
            </ul>
            <article class="social-items">
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                <a href="#"><i class="fa-brands fa-twitter-square"></i></a>
            </article>

        </nav>
        <section class="menu-text">
            <article id="close">
                <i  class="fa-solid fa-xmark"></i>
            </article>

            <p>Bienvenido al museo de las mitologias donde podras descubrir y aprender sobre fantasticas obras del Antiguo Egipto y la Antigua Grecia </p>
        </section>
    </div>

</div>
<x-footer />
</body>
</html>
<script type="text/javascript" src="{{asset('javaScript/javascript.welcome.js')}}"></script>

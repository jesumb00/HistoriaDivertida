<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>login</title>
    <link rel="stylesheet" href="{{asset('styles/style.menu.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.shop.home.css')}}">
    <link rel="stylesheet" href="{{asset('styles/style.footer.css')}}">
</head>
<body>
<x-menu-shop />
<main>
    <section id="presentation">
        <h1 >Historia divertida</h1>
        <sub>Extiende tu gusto por el saber</sub>
    </section>
    <section id="function-descripcion">
        <p class="function-description">Pulsa el boton de la parte del sitio web quiere acceder.</p>
        <p class="function-description">Tenemos distintos productos perfectos para ti</p>
    </section>
    <section id="visual-nav">
        <article id="art">
            <span><a href="">Arte</a></span>
        </article>
        <article id="media">
            <span><a href="">Media</a></span>
        </article>
        <article id="stationery">
            <span><a href="">Papeleria</a></span>
        </article>
        @auth
        <article id="orders">
            <span><a href="">Pedidos</a></span>
        </article>
        @endauth
    </section>
    <section id="website-description">
        <article id="title-one">
            <h1 class="title">Expande tus conocimientos</h1>
        </article>
        <article id="explanation">
            <p class="description">Aprende las maravillas de las antiguas civilizaciones visitándonos en nuestro museo laguna donde nos dedicaremos a descubrir las maravillas de la Antigua Grecia.</p>
            <p class="description">En el museo encontraras estatuas y monumentos de distintas épocas de Grecia desde el inicio, hasta el final.</p>
        </article>
    </section>
    <section class="previous">
        <h1 class="title">¿Como se creo el universo griego?</h1>
        <iframe src="https://www.youtube.com/embed/6T8m5t5VkZc" frameborder="0" allow="accelerometer; gyroscope" ></iframe>
    </section>
    <section class="previous">
        <h1 class="title">¿Y el egipcio?</h1>
        <iframe src="https://www.youtube.com/embed/bOK8EdWl1vM"  frameborder="0" allow="accelerometer; gyroscope"></iframe>
    </section>
</main>
<x-footer />
</body>
</html>

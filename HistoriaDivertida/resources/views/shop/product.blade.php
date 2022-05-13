
<html lang="es-ES">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Museo de las mitologias</title>
        <link rel="stylesheet" href="{{asset('framework/materialize.min.css')}}">
        <script src="https://kit.fontawesome.com/fa7c04661d.js" crossorigin="anonymous"></script>
        <script type="text/javascript" src="HTTP://code.jquery.com/jquery-latest.js"></script>
        <link rel="stylesheet" href="{{asset('styles/style.product.css')}}">
    </head>
    <body>

    <main>

        <x-menu-shop />
        <section class="carousel">

            <article class="carousel-item">
                <img src="{{asset('img/columnas-4.JPG')}}">
            </article>

            <article class="carousel-item">
                <img src="{{asset('img/columnas-4.JPG')}}">
            </article>

            <article class="carousel-item">
                <img src="{{asset('img/columnas-4.JPG')}}">
            </article>

            <article class="carousel-item">
                <img src="{{asset('img/columnas-4.JPG')}}">
            </article>

            <article class="carousel-item">
                <img src="{{asset('img/columnas-4.JPG')}}">
            </article>
        </section>



        <section id="details">
            <h3>Afrodita Venus de Milo-Marmol fundido</h3>
            <p>Las estatuas de mármol fundido están hechas de un material compuesto en el que la piedra de mármol triturada natural se mezcla con una pequeña cantidad de resina que funciona como pegamento. La mezcla se vierte en un molde del diseño de la estatua. Solo en nuestras esculturas, el 90% de la escultura terminada es piedra de mármol griego triturada naturalmente, lo que le da un aspecto y una sensación de mármol natural sólido. Todas las esculturas están terminadas a mano. Este material fuerte es resistente al agua y se puede lavar con la mayoría de los agentes de limpieza. Tenga en cuenta: Nuestras estatuas no están talladas. Las estatuas de mármol natural están talladas a mano y tienen un precio muy alto. Nuestras ofertas de productos están destinadas a ser asequibles para el público mayoritario.

                Afrodita de Milos, más conocida como la Venus de Milo, es una antigua estatua griega y una de las obras más famosas de la escultura griega antigua. Creada en algún momento entre 130 y 100 aC, se cree que representa a Afrodita, la diosa griega del amor y la belleza (Venus para los romanos). Actualmente se encuentra en exhibición permanente en el Museo del Louvre en París.

                Embalaje profesional: tenemos especial cuidado en el embalaje seguro de nuestros artículos frágiles para garantizar una entrega segura.</p>
            <h4>20€</h4>
            <article>
                <input id="num"  min="1" value="1"type="number">
                <input type="button" id="add-product" value="Añadir al carrito">
                <i id="like" class="fa-brands fa-gratipay"></i>
                <i class="fa-solid fa-share-nodes"></i>

            </article>
        </section>
        <section id="features">
            <details open>
                <summary >Caracteristicas</summary>
                <table>
                    <thead><tr><td>Puntos destacables</td></tr></thead>
                    <tbody>
                    <tr>
                        <td>Materiales:</td>
                        <td> Mármol fundido</td>
                    </tr>
                    <tr>
                        <td>Alto:</td>
                        <td>23,5 cm (9.25 pulgadas)</td>

                    </tr>
                    <tr>
                        <td>Peso neto:</td>
                        <td>477 gr (1.05 pound)</td>
                    </tr>
                    </tbody>
                </table>
                <table>
                    <thead><tr><td>Otros</td></tr></thead>
                    <tbody>
                    <tr>
                        <td>Color:</td>
                        <td>Blanco</td>
                    </tr>
                    <tr>
                        <td>Cuidado:</td>
                        <td>Limpiar sin contacto con liquidos</td>
                    </tr>
                    </tbody>
                </table>

            </details>
        </section>

    </main>

    <!-- Menu -->

    <div class="full-menu">
        <div class="wrap">

            <section class="navigation">
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

            </section>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="{{asset('javaScript/javascript.product.js')}}"></script>

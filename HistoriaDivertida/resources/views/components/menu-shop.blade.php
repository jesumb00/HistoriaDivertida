<header>
    <section><h5>TIENDA MIOLOGIAS</h5></section>
    <section id="menu-front">
        <article>
            <a href="">Arte</a>
        </article>
        <article>
            <a href="">Escultura</a>
        </article>
        <article>
            <a href="">Patata</a>
        </article>
        <article>
            <a href="">Perfil</a>
        </article>
        @auth
        <article id="latest">
            <a href="">Perfil</a>
        </article>
        <article id="latest">
            <a href="">Perfil</a>
        </article>
        @else
            <article id="latest">
                <a href="">Perfil</a>
            </article>
        @endauth
    </section>
    <section id="icon-section">
        <article>
            <i class="fa-solid fa-cart-shopping"></i>
        </article>
        <article>
            <i class="fa-solid fa-magnifying-glass"></i>
        </article>
        <article id="open">
            <i class="fa-solid fa-bars"></i>
        </article>
    </section>
</header>


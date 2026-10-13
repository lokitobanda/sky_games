<?php
$titulo_pagina = 'Blog';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="hearder">
    <h1>ZONA BLOG</h1>
    <p>¡COMPARTE TUS OPINIONES!</p>
</div>

<hr>
<h1>BLOG</h1>

<section id="blog">
    <h1>Blog Gamer</h1>

    <h2>Últimas Entradas</h2>

    <article class="post">
        <h3>Las mejores consolas de 2026</h3>
        <p><strong>Publicado el:</strong> 10 de marzo de 2026</p>

        <h4>Resumen</h4>
        <p>
            Analizamos las consolas más destacadas del año, sus características,
            rendimiento y cuál se adapta mejor a cada tipo de jugador.
        </p>

        <h4>Contenido</h4>
        <p>
            Este año destacan nuevas versiones de consolas con mejor rendimiento,
            gráficos avanzados y mayor almacenamiento...
        </p>

        <h4>Comentarios</h4>

        <h5>Usuario1</h5>
        <p>¡Excelente análisis! Me ayudó a decidir mi compra.</p>

        <h5>Usuario2</h5>
        <p>Faltó incluir más detalles sobre el rendimiento online.</p>

        <h5>Agregar comentario</h5>
        <form>
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br>

            <label>Comentario:</label><br>
            <textarea name="comentario"></textarea><br>

            <button type="submit">Enviar</button>
        </form>
    </article>

    <article class="post">
        <h3>Top 5 videojuegos más esperados</h3>
        <p><strong>Publicado el:</strong> 5 de marzo de 2026</p>

        <h4>Resumen</h4>
        <p>
            Descubre los títulos más esperados por la comunidad gamer este año.
        </p>

        <h4>Lista de juegos</h4>
        <ul>
            <li>Juego 1</li>
            <li>Juego 2</li>
            <li>Juego 3</li>
            <li>Juego 4</li>
            <li>Juego 5</li>
        </ul>

        <h4>Comentarios</h4>

        <h5>GamerPro</h5>
        <p>Estoy esperando el Juego 3, se ve increíble.</p>

        <h5>PlayerX</h5>
        <p>El Juego 1 será el mejor del año, seguro.</p>

        <h5>Agregar comentario</h5>
        <form>
            <label>Nombre:</label><br>
            <input type="text" name="nombre"><br>

            <label>Comentario:</label><br>
            <textarea name="comentario"></textarea><br>

            <button type="submit">Enviar</button>
        </form>
    </article>

    <h2>Categorías</h2>
    <ul>
        <li>Consolas</li>
        <li>Videojuegos</li>
        <li>Accesorios</li>
        <li>Noticias</li>
    </ul>
</section>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

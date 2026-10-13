<?php
$titulo_pagina = 'Novedades';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="hearder">
    <h1>NOTICIAS</h1>
    <p>¡INFORMATE!</p>
   </div>
<div class="galeria">
    <img id="imagenGaleria" src="imagenes/novedad1.jfif" alt="Novedad1">
      <div>
        <button id="anterior">Anterior</button>
        <button id="siguiente">Siguiente</button>
      </div>
   </div>

    <h3>¡DESCUBRE LAS ÚLTIMAS NOVEDADES EN SKYGAMES Y MANTENTE AL DÍA CON LOS JUEGO  S MÁS RECIENTES!</h3>
    <h3>¡EXPLORA NUEVOS TÍTULOS, ACTUALIZACIONES Y CONTENIDO EXCLUSIVO EN NUESTRA SECCIÓN DE NOVEDADES!</h3>
           
    <button id = "botonInfo">Mostrar informacion</button>
    <div id="informacion" class="oculto">
        <h2> Info. de seccion </h2>
        <p>
            Aqui se publicaran los productos mas pedidos y accesibles de todo el mercado de videojuegos.
        </p>
    </div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

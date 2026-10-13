<?php
$menu = [
    ['inicio.php', 'Inicio'],
    ['catalogo.php', 'Catálogo'],
    ['ofertas.php', 'Ofertas'],
    ['pagos.php', 'Pagos'],
    ['envios.php', 'Envíos'],
    ['vendedores.php', 'Vendedores'],
    ['novedades.php', 'Novedades'],
    ['opciones.php', 'Opciones'],
    ['clasificacion.php', 'Clasificación'],
    ['fin.php', 'Fin'],
    ['curso.php', 'Curso'],
    ['blog.php', 'Blog'],
    ['cv.php', 'CV'],
    ['preguntas.php', 'Preguntas Frecuentes'],
    ['formulario.php', 'Formulario'],
];
?>
<div class="hearder">
    <h1>SKYGAMES</h1>
    <p>BIENVENIDO!!</p>
    <p id="fechaHora"></p>
</div>

<button id="modoOscuro">🌙 Activar modo oscuro</button>

<nav class="menu-principal" aria-label="Navegación principal">
    <?php foreach ($menu as $index => $item): ?>
        <?php if ($index > 0): ?> | <?php endif; ?>
        <a href="<?= $item[0]; ?>"><?= $item[1]; ?></a>
    <?php endforeach; ?>
</nav>
<hr>

<?php
$titulo_pagina = 'Formulario';
$body_class = 'fondo-purpura';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>


<form id="formulario">

    <h2>FORMULARIO PARA CONSULTAS DE PRODUCTOS</h2>

    <label for="nombre">Nombre completo:</label><br>
    <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre">
    <span id="errorNombre"></span>
    <br><br>

    <label for="correo">Correo electrónico:</label><br>
    <input type="email" id="correo" name="correo" placeholder="direccion de correo">
    <span id="errorCorreo"></span>
    <br><br>

    <label for="producto">Tipo de producto elegido:</label><br>
    <select id="producto" name="producto">
        <option>Consolas</option>
        <option>Videojuegos</option>
        <option>Accesorios</option>
        <option>PC Gaming</option>
        <option>Muebles Complementarios</option>
    </select>
    <br><br>

    <label for="mensaje">Consulta o pedido:</label><br>
    <textarea id="mensaje" name="mensaje" rows="5" placeholder="Escribe tu consulta"></textarea>
    <span id="errorMensaje"></span>
    <br><br>

    <button type="button" id="mostrarResumen"> Ver Resumen</button>
    <button type="submit">Enviar Consulta</button>

</form>
<div id="resumen"></div>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

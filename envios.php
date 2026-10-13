<?php
$titulo_pagina = 'Envíos';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="contenedor principal">
    <h1>FORMAS DE ENVIO</h1>
    <p>Aqui tienes las zonas de envío disponibles</p>
    </div>
<hr>
        <h1>ENVÍOS</h1>

    <img src="imagenes/envios.png" alt="Envios" class="envios">


    <h2>Formulario</h2>

    <label>Seleccionar producto:</label>
    <select>
    <option>Consola</option>
    <option>videojuegos</option>
    <option>otros</option>
   </select>

   <br><br>

  <label>Seleccionar país:</label>
  <select>
  <option>Uruguay</option>
  <option>Chile</option>
  <option>Brasil</option>
  <option>Bolivia</option>
  </select>

  <br><br>

    <label>Seleccionar provincia:</label>
  <select>
  <option>Buenos Aires</option>
  <option>La Pampa</option>
  <option>Corrientes</option>
  <option>Jujuy</option>
  <option>Misiones</option>
  </select>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

<?php
$titulo_pagina = 'Pagos';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="hearder">
    <h1>FORMAS DE PAGOS</h1>
    <p>ELIJE LA FORMA DE PAGO DE TU PREFERENCIA</p>
   </div>




<hr>
        <h1>PAGOS</h1>

       
        <img src="imagenes/pagos.png" alt="Pagos" width="500" height="300">
       

        <h1>SELECCIONAR FORMA DE PAGOS</h1>


         <label>Seleccionar metodo de pago:</label>
     <select>
     <option>tarjeta de credito</option>
     <option>transferencia</option>
    <option>tarjeta de debito</option>
    </select>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

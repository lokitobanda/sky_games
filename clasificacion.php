git<?php
$titulo_pagina = 'Clasificación';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="hearder">
    <p>¡LOS MAS VENDIDOS!</p>
   </div>
<hr>
        <h1>CLASIFICACIÓN DE PRODUCTOS</h1>


        <table>
  <tr>
    <th>Posición</th>
    <th>Productos</th>
    <th>Ventas</th>
  </tr>

  <tr>
    <td>🥇 1</td>
    <td>Nintendo Switch</td>
    <td>150</td>
  </tr>

  <tr>
    <td>🥈 2</td>
    <td>PlayStation 5</td>
    <td>120</td>
  </tr>

  <tr>
    <td>🥉 3</td>
    <td>Xbox Series X</td>
    <td>100</td>
  </tr>

  <tr>
    <td>4</td>
    <td>Fortnite juego fisico para PS5</td>
    <td>90</td>
  </tr>
 </table>
      

  <h3> Esta lista muestra los mejores productos del mercado </h3>
  <h3> Dicha lista se actualizara de forma mensual. Recibiras notificaciones cada vez que los datos sean renovados </h3>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

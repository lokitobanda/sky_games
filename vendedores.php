<?php
$titulo_pagina = 'Vendedores';
$body_class = 'fondo-azul';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<div class="hearder">
    <h1>CALIFICACION DE VENDEDORES</h1>
    <p>LOS MEJORES VENDEDORES DEL SITIO</p>
  </div>
<hr>
        <h1>VENDEDORES</h1>


       <h2 class="titulo"> Mejores Vendedores</h2>

<table>
  <tr>
    <th>Posicion</th>
    <th>Vendedor</th>
    <th>Ventas</th>
  </tr>

  <tr>
    <td>🥇 1</td>
    <td>Juan Apaza</td>
    <td>150</td>
  </tr>

  <tr>
    <td>🥈 2</td>
    <td>Mari­a González</td>
    <td>120</td>
  </tr>

  <tr>
    <td>🥉 3</td>
    <td>Carlos Rami­rez</td>
    <td>100</td>
  </tr>

  <tr>
    <td>4</td>
    <td>Ana Marti­nez</td>
    <td>90</td>
  </tr>
 </table>
      

  <h3> Esta lista muestra a los mejores vendedores del mercado</h3>
  <h3> Dicha lista se actualizara de forma mensual. Recibiras notificaciones cada vez que los datos sean renovados </h3>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

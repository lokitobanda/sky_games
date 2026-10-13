<?php
if (!isset($titulo_pagina)) {
    $titulo_pagina = 'SKYGAMES';
}
if (!isset($body_class)) {
    $body_class = '';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titulo_pagina, ENT_QUOTES, 'UTF-8'); ?> - SKYGAMES</title>
    <meta name="description" content="Descubre la mejor tienda en venta de videojuegos. Encuentra títulos digitales y físicos al mejor precio con envío rápido y garantía asegurada.">
    <link rel="icon" href="imagenes/icono.png">
    <link rel="stylesheet" href="estilos.css">
</head>
<body<?php if ($body_class !== '') { echo ' class="' . htmlspecialchars($body_class, ENT_QUOTES, 'UTF-8') . '"'; } ?>>

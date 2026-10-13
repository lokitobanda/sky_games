<?php
$titulo_pagina = 'Inicio';
$body_class = '';

require_once __DIR__ . '/includes/header.php';
require_once __DIR__ . '/includes/nav.php';
?>

<header>
    <h1>Iniciar Sesión</h1>
  </header>

    
   <div class="hearder">
   <h1>SKYGAMES</h1>
   <p>BIENVENIDO!!</p>
   <p id="fechaHora"></p>


   </div>
<hr>

    <h1>INICIO DE SESION</h1>
    
    <form>
    <h2>Formulario para registrarse</h2>
     
     <label for="correo">Correo electrónico:</label><br>
    <input type="email" id="correo" name="correo" placeholder="direccion de correo"><br><br>
    </form>

   <button
     class="boton-registro">Registrarse</button>



 <h3>Bienvenido a skygames, aqui encontrarás los mejores juegos y las consolas más recientes y potentes en tecnologia</h3>
 <img src="imagenes/icono.png" alt="Icono1" class="index">


<p>Bienvenido a nuestra plataforma especializada en la <strong>venta de videojuegos</strong> para consolas y PC. Si estás buscando renovar tu colección de entretenimiento digital o probar los títulos más recientes del mercado, contamos con un catálogo diverso pensado para todo tipo de jugadores. Nos enfocamos en ofrecer una experiencia rápida, segura y accesible para que consigas tus títulos favoritos sin complicaciones.</p>

      <p>Al buscar <em>dónde comprar videojuegos en línea</em>, la seguridad y la inmediatez son fundamentales. Por eso, en nuestra tienda organizamos las categorías de manera intuitiva para que navegues entre géneros como acción, aventura, carreras y simulación. Trabajamos con opciones digitales y físicas que se adaptan a tus preferencias de uso, garantizando entregas efectivas y claves de activación instantáneas.</p>

      <h2>Ventajas de Elegir Nuestra Tienda de Videojuegos</h2>
      <p>Adquirir tus entregas preferidas con nosotros te ofrece múltiples beneficios pensados para optimizar tu tiempo y presupuesto:</p>
      <ul>
        <li><strong>Precios competitivos:</strong> Promociones continuas y ofertas en títulos de catálogo.</li>
        <li><strong>Soporte continuo:</strong> Asistencia técnica para resolver dudas durante el proceso de compra e instalación.</li>
        <li><strong>Compatibilidad comprobada:</strong> Información clara sobre requisitos de sistema y plataformas compatibles.</li>
      </ul>

      <p>Explora nuestras ofertas semanales y mantente al día con los próximos lanzamientos. Nuestra misión es brindarte la mejor atención y los precios más bajos del sector para que disfrutes de tus partidas sin límites.</p>

<?php
require_once __DIR__ . '/includes/footer.php';
?>

<?php

session_start();

include_once 'dataBase/conexion.php';
include_once 'components/component.php';
include_once 'dataBase/funciones.php';

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name=description content="Línea de ropa moderna con una excelente calidad">
  <title>Inicio</title>

  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/header.css" />
  <link rel="stylesheet" href="assets/css/cards.css" />
  <link rel="stylesheet" href="assets/css/estilo_categorias.css" />
  <link rel="stylesheet" href="assets/css/footer.css">
  <link rel="stylesheet" href="assets/css/login.css">
  <link rel="stylesheet" href="assets/css/glider.min.css" />
</head>

<body>

  <!-- HEADER -->
  <?php echo navbar(); ?>

  <!-- Formulario del Login -->
  <?php echo formLogin(); ?>


  <!-- Banner -->
  <article>
    <div class="img-banner">
      <img src="assets/img/2e6a77913878b8cac8225ad880045a1f.jpg" alt="banner-img" />
    </div>
  </article>

  <!-- Sección de Productos -->
  <section class="container-cards">
    <div class="title-container-cards">
      <h2>NUEVA COLECCIÓN</h2>
    </div>

    <div class="slider-btn">
      <button aria-label="Previous" class="glider-prev">«</button>
      <button aria-label="Next" class="glider-next">»</button>
    </div>

    <!-- Contenedor slider productos -->
    <div class="glider-contain">
      <div class="glider">
        <?php echo getProductosColeccion(); ?>
      </div>
    </div>
  </section>

  <!-- Sección de Categorias -->
  <section class="container-categorias">
    <div class="title-categorias">
      <h2>NUESTRAS CATEGORÍAS</h2>
    </div>

    <!-- Items de Categorías -->
    <div class="container-items-categorias">
      <article class="item-categoria">
        <div class="item-title-categoria">
          <a href=""><img src="assets/img/categoria_camisas.png" alt="item-image" />
            <div class="item-title-categoria">
              <p>CAMISAS</p>
            </div>
          </a>
      </article>

      <article class="item-categoria">
        <a href=""><img src="assets/img/categoria_jean.png" alt="item-image" />
          <div class="item-title-categoria">
            <p>JEAN</p>
          </div>
        </a>
      </article>

      <article class="item-categoria">
        <a href=""><img src="assets/img/categoria_buzos1.jpg" alt="item-image" />
          <div class="item-title-categoria">
            <p>BUZOS</p>
          </div>
        </a>
      </article>

      <article class="item-categoria">
        <a href=""><img src="assets/img/categoria_gorras.jpg" alt="item-image" />
          <div class="item-title-categoria">
            <p>GORRAS</p>
          </div>
        </a>
      </article>
    </div>
  </section>

  <!-- Footer -->
  <?php echo footer(); ?>

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/menu-header.js"></script>
  <script src="assets/js/form-login.js"></script>
  <script src="assets/js/item-favorites.js"></script>
  <script src="assets/js/glider.min.js"></script>

  <!-- Script para el Slider de los productos -->
  <script>
    new Glider(document.querySelector(".glider"), {
      slidesToScroll: 1,
      slidesToShow: 4,
      draggable: true,
      dragVelocity: 1,
      dots: ".dots",
      arrows: {
        prev: ".glider-prev",
        next: ".glider-next",
      },

      responsive: [{
          // screens greater than >= 775px
          breakpoint: 1200,
          settings: {
            // Set to `auto` and provide item width to adjust to viewport
            slidesToShow: 4,
            slidesToScroll: 2,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 900,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 600,
          settings: {
            slidesToShow: 2.5,
            slidesToScroll: 1,
          },
        },
        {
          // screens greater than >= 1024px
          breakpoint: 310,
          settings: {
            slidesToShow: 1.5,
            slidesToScroll: 1,
          },
        },
      ],
    });
  </script>
</body>

</html>
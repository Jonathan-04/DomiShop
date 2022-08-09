<?php

session_start();
include_once 'components/component.php';
include_once 'dataBase/funciones.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>

    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/cards.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/detalles_producto.css" />
    <link rel="stylesheet" href="assets/css/glider.min.css" />
</head>

<body>

    <?php echo navbar(); ?>

    <!-- Formulario de Login -->
    <?php echo formLogin(); ?>

    <!-- CONTENEDOR DE DETALLES PRODUCTO-->
    <main class="container-detalles-producto">
        <?php echo getDetallesProducto(); ?>
    </main>



    <!-- Contenedor slider productos -->
    <section class="container-cards">
        <div class="title-container-cards title-interes">
            <h2>TE PUEDE INTERESAR</h2>
        </div>

        <div class="glider-contain">
            <div class="glider">
                <?php echo getProductosColeccion(); ?>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php echo footer(); ?>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/menu-header.js"></script>
    <script src="assets/js/form-login.js"></script>
    <script src="assets/js/item-favorites.js"></script>
    <script src="assets/js/glider.min.js"></script>
    <script src="assets/js/imageProduc.js"></script>

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
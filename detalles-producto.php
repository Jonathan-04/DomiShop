<?php

include_once 'components/component.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/cards.css" />
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/detalles_producto.css" />
    <link rel="stylesheet" href="css/glider.min.css" />
</head>

<body>

    <?php echo navbar(); ?>

    <!-- Formulario de Login -->
    <div class="bg-content-form" id="bg-form-login"></div>
    <div class="content-form" id="form-login">
        <div class="content-login">
            <h1>Inicia Sesión</h1>
            <h4>
                ¿No tienes una Cuenta? <a href="registro.html">Registrate aqui!</a>
            </h4>

            <!-- Datos-->
            <form class="informacion" method="POST" enctype="multipart/form-data" action="#">
                <input type="email" id="email" name="email" placeholder="Email" required />
                <input type="password" id="password" name="password" placeholder="Contraseña" required />

                <div class="content-options">
                    <a href="#">¿Olvidaste tu Contraseña?</a>
                </div>

                <input type="submit" value="Ingresar" id="Ingresar" name="Ingresar" />

                <p id="btn-cerrar-login">Cerrar</p>
            </form>
        </div>
    </div>

    <!-- CONTENEDOR DE DETALLES PRODUCTO-->
    <main class="container-detalles-producto">

        <article class="container-image">
            <!-- IMAGENES DEL PRODUCTO -->
            <div class="detalles-producto-imagen product-image1">
                <img class="image-product1" src="img/Oto-o-2019-mujeres-Casual-blusa-blanca-coreana-de-man.jpg">
                <img class="image-product1" src="img/Oto-o-2019-mujeres-.jpg">
                <img class="image-product1" src="img/Oto-o-2019-mujeres-Casual-blusa-blanca-coreana-de-man.jpg">
                <img class="image-product1" src="img/Oto-o-2019-mujeres-.jpg">
            </div>

            <div class="detalles-producto-imagen product-image2">
                <img class="image-product2" src="img/Oto-o-2019-mujeres-.jpg">

            </div>
        </article>

        <!-- ITEMS DETALLES DEL PRODUCTO-->
        <div class="detalles-producto">

            <h1 class="titulo_producto">
                CAMISA BLANCA
            </h1>
            <h2 class="referencia_producto">
                AN12345
            </h2>
            <label class="precio_producto">$20.000
            </label>

            <!-- SELECICION DEL COLOR-->
            <p class="color_producto">Color: <label> Blanco </label></p>

            <select class="seleccion_color_producto" name="" id="seleccion_color_producto">

                <option value="none">--</option>
                <option value="Blanco">Blanco</option>
                <option value="Negro">Negro</option>

            </select>

            <!-- SELECCION DE TALLA -->
            <p class="talla_producto">Talla:</p>

            <select class="seleccion_talla_producto" name="genero" id="genero">

                <option value="none">--</option>
                <option value="S">S</option>
                <option value="L">L</option>

            </select>

            <!-- CANTIDAD A LLEVAR -->
            <p class="cantidad_producto">Cantidad:</p>

            <div class="seleccion_cantidad_producto">
                <input type="number" value="1">
            </div>
            <a href="checkout.html" class="btn-comprar">Comprar</a>
            <button class="btn-add-carrito">Agregar al Carrito</button>
        </div>
    </main>

    <div class="detalles-secundarios-producto">
        <p><span>Disponible:</span> 4 Unidades</p>
        <p><span>Materiales:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. A, aut.</p>
    </div>

    <!-- Contenedor slider productos -->
    <section class="container-cards">
        <div class="title-container-cards title-interes">
            <h2>TE PUEDE INTERESAR</h2>
        </div>

        <div class="glider-contain">
            <div class="glider">

                <article class="cards cards-interes">
                    <a class="container-cards-img" href="#">
                        <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
                        <img src="img/adidas1.png" class="img-back" alt="img-product" />
                    </a>
                    <h3>Camisa Adidas</h3>
                    <p>$58.000</p>
                    <div class="options-cards">
                        <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
                        <a href="#"><span>
                                <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
                    </div>
                </article>

                <article class="cards">
                    <a class="container-cards-img" href="#">
                        <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
                        <img src="img/adidas1.png" class="img-back" alt="img-product" />
                    </a>
                    <h3>Camisa Adidas</h3>
                    <p>$58.000</p>
                    <div class="options-cards">
                        <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
                        <a href="#"><span>
                                <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
                    </div>
                </article>

                <article class="cards">
                    <a class="container-cards-img" href="#">
                        <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
                        <img src="img/adidas1.png" class="img-back" alt="img-product" />
                    </a>
                    <h3>Camisa Adidas</h3>
                    <p>$58.000</p>
                    <div class="options-cards">
                        <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
                        <a href="#"><span>
                                <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
                    </div>
                </article>

                <article class="cards">
                    <a class="container-cards-img" href="#">
                        <img src="img/t-shirt-large3.png" class="img-front" alt="img-product" />
                        <img src="img/adidas1.png" class="img-back" alt="img-product" />
                    </a>
                    <h3>Camisa Adidas</h3>
                    <p>$58.000</p>
                    <div class="options-cards">
                        <a href="#"><span><img src="assets/favorite.svg" alt="favorite-item" /> </span></a>
                        <a href="#"><span>
                                <img src="assets/shopping_cart.svg" alt="shopping_cart-item" /> </span></a>
                    </div>
                </article>


            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php echo footer(); ?>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu-header.js"></script>
    <script src="js/form-login.js"></script>
    <script src="js/item-favorites.js"></script>
    <script src="js/glider.min.js"></script>

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
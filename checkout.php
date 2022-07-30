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
    <title>Checkout</title>

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/header.css" />
    <link rel="stylesheet" href="css/checkout.css">
    <link rel="stylesheet" href="css/footer.css" />
</head>

<body>

    <!-- HEADER -->
    <?php echo navbar(); ?>





    <main class="container-checkout">
        <h2>Checkout</h2>
        <form class="form-checkout" action="">
            <div class="information-checkout">
                <section class="inputs-checkout">
                    <p>Información de Contacto</p>
                    <article class="inputs-data-checkout">
                        <div class="content">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre">
                        </div>
                        <div class="content">
                            <label for="apellidos">Apellidos</label>
                            <input type="text" name="apellidos" id="apellidos">
                        </div>
                        <div class="content">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="content">
                            <label for="email">Celular</label>
                            <input type="text" name="celular" id="celular">
                        </div>
                    </article>
                </section>

                <section class="inputs-checkout">
                    <p>Método Envío</p>
                    <article class="inputs-data-checkout rb-tipo-servicio">
                        <input type="radio" id="control_01" name="tipo-servicio" value="Servicio Básico">
                        <label class="lb-rb-tipo-servicio" for="control_01">
                            <img src="assets/icons/store.svg" alt="">
                            <p>Recoger en Tienda</p>
                            <p>Solo en Cali</p>
                        </label>

                        <input type="radio" id="control_02" name="tipo-servicio" value="Servicio Básico">
                        <label class="lb-rb-tipo-servicio" for="control_02">
                            <img src="assets/icons/envio.svg" alt="">
                            <p>Envío</p>
                            <p>Nivel Nacional</p>
                        </label>

                    </article>
                </section>

                <section class="inputs-checkout">
                    <p>Información de Envío</p>
                    <article class="inputs-data-checkout">

                        <div class="content">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion">
                        </div>

                        <div class="content">
                            <label for="nombre">Ciudad</label>
                            <input type="text" name="nombre" id="nombre">
                        </div>

                        <div class="content">
                            <label for="nombre">Observaciones</label>
                            <input type="text" name="nombre" id="nombre">
                        </div>

                    </article>
                </section>
            </div>
            <div class="details-checkout">
                <section class="order-checkout">
                    <p>Orden</p>
                    <div class="products-details">
                        <ul class="details">
                            <li><img src="img/Oto-o-2019-mujeres-.jpg" alt=""></li>
                            <li>Camisa Oto Mujer x 1</li>
                            <li id="details-price">$40.000</li>
                        </ul>

                        <ul class="details">
                            <li><img src="img/Oto-o-2019-mujeres-.jpg" alt=""></li>
                            <li>Camisa Oto Mujer x 1</li>
                            <li id="details-price">$40.000</li>
                        </ul>

                        <ul class="details">
                            <li><img src="img/Oto-o-2019-mujeres-.jpg" alt=""></li>
                            <li>Camisa Oto Mujer x 1</li>
                            <li id="details-price">$40.000</li>
                        </ul>
                    </div>
                </section>
            </div>
        </form>
    </main>

    <!-- Footer -->
    <?php echo footer(); ?>



    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu-header.js"></script>
    <script src="js/item-favorites.js"></script>
</body>

</html>
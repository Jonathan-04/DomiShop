<?php

include_once 'components/component.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Compras</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cuenta_usuario.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">
</head>

<body>

    <!-- HEADER -->
    <?php echo navbar() ?>

    <div class="contenedor-Usuario">
        <!-- FILTRO USUARIO -->
        <?php echo filtroUsuario(); ?>


        <!-- CONTENEDOR DE LAS COMPRAS DEL USUARIO -->
        <section class="container-comprasUsuario">

            <!-- TITULO DE LAS COMPRAS-->
            <ul class="top-compras">
                <li id="titulo-compras">Compras Realizadas</li>
                <li><input type="text" placeholder="N°"></li>
            </ul>

            <!-- (1 ITEM) DETALLES DE LA COMPRA-->
            <div class="comprasUsuario">
                <!--TITULO -->
                <div class="titulo-comprasUsuario">
                    <ul>
                        <li>Orden N°: 2232 <a href="" id="id-compras">
                            </a></li>
                        <li>Fecha: 13/06/2022 <label id="fecha-compra">
                            </label> </li>
                    </ul>
                </div>
                <!-- DETALLES -->
                <div class="detalleSpace">
                    <div class="detalles-compras">
                        <ul>
                            <li>Estado:Entregado <label id="estado-compra">
                                </label></li>
                            <li>Total:$120.000 <label id="valor-compra">
                                </label></li>
                            <li>Destino: Cali <label id="ciudad-compra">
                                </label></li>
                        </ul>
                    </div>
                    <!-- IMAGENES DE LAS COMPRAS REALIZADAS POR EL USAURIO  -->
                    <div class="imagenesCompras" id="imagenesCompras">
                        <div class="imagencompra">
                            <a href=""><img src="img/Oto-o-2019-mujeres-.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="botonDetalles">
                    <a href=""><input type="submit" value="Detalles" id="Detalles"></a>
                </div>

            </div>
        </section>


    </div>

    <!-- FOOTER -->
    <?php echo footer(); ?>


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu-header.js"></script>
    <script src="js/item-favorites.js"></script>
    <script src="js/form-login.js"></script>
</body>

</html>
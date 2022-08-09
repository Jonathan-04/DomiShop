<?php

include_once 'components/component.php';

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Favoritos</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/cuenta_usuario.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>

    <!-- HEADER -->
    <?php echo navbar(); ?>


    <section class="contenedor-Usuario">
        <!-- FILTRO USUARIO -->
        <?php echo filtroUsuario(); ?>

        <!-- CONTENEDOR DE FAVORITOS USUARIO -->
        <div class="container-favoritosUsuario">
            <div class="items-favoritos">
                <div class="style-favoritos">
                    <div class="imagen-favorito">
                        <a href="#"><img src="assets/img/Oto-o-2019-mujeres-.jpg"></a>

                    </div>
                    <div class="info-favorito">
                        <h2>Camisa Ref Mujer</h2>
                        <p>$70.000</p>
                        <p>Estado: <label id="estado-favorito">Disponible</label></p>
                        <p>Vendidos (23)</p>
                    </div>
                </div>
            </div>


            <div class="items-favoritos">
                <div class="style-favoritos">
                    <div class="imagen-favorito">
                        <a href="#"><img src="assets/img/Oto-o-2019-mujeres-.jpg"></a>

                    </div>
                    <div class="info-favorito">
                        <h2>Camisa Ref Mujer</h2>
                        <p>$70.000</p>
                        <p>Estado: <label id="estado-favorito">Disponible</label></p>
                        <p>Vendidos (23)</p>
                    </div>
                </div>
            </div>


            <div class="items-favoritos">
                <div class="style-favoritos">
                    <div class="imagen-favorito">
                        <a href="#"><img src="assets/img/Oto-o-2019-mujeres-.jpg"></a>

                    </div>
                    <div class="info-favorito">
                        <h2>Camisa Ref Mujer</h2>
                        <p>$70.000</p>
                        <p>Estado: <label id="estado-favorito">Disponible</label></p>
                        <p>Vendidos (23)</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <?php echo footer(); ?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/menu-header.js"></script>
    <script src="assets/js/item-favorites.js"></script>
    <script src="assets/js/form-login.js"></script>
</body>

</html>
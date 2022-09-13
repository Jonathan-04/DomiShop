<?php

session_start();
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
        <main class="container-favoritosUsuario">
            <?php echo getFavoritesAccount(); ?>
        </main>
    </section>

    <!-- FOOTER -->
    <?php echo footer(); ?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/menu-header.js"></script>
    <script src="assets/js/item-favorites.js"></script>
    <script src="assets/js/form-login.js"></script>
</body>

</html>
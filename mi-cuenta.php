<?php

session_start();

include_once 'components/component.php';
include_once 'dataBase/funciones.php';

if (!isset($_SESSION['id']) || !$_SESSION['id']) {

    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mi cuenta</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/cuenta_usuario.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body>

    <!-- HEADER -->
    <?php echo navbar(); ?>

    <div class="contenedor-Usuario">
        <!-- FILTRO USUARIO -->
        <?php echo filtroUsuario(); ?>


        <!-- DETALLES ITEM (INFORMACION USUARIO) -->
        <section class="container-detallesUsuario">
            <?php echo getDatosCuenta(); ?>
        </section>
    </div>

    <!-- FOOTER -->
    <?php echo footer(); ?>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/menu-header.js"></script>
    <script src="assets/js/item-favorites.js"></script>
    <script src="assets/js/form-login.js"></script>
</body>

</html>
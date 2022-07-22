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

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/cuenta_usuario.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/footer.css">

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


    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/menu-header.js"></script>
    <script src="js/item-favorites.js"></script>
    <script src="js/form-login.js"></script>
</body>

</html>
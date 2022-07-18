<?php

include_once 'components/component.php';

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

            <!-- DATOS DE CUENTA-->
            <div class="detalle-informacion1">
                <h2>Datos de Cuenta</h2>
                <ul class="informacion-usuario1">
                    <li>Usuario: Jonathan04</li>
                    <li>E-mail: jonathanvel84@gmail.com</li>
                </ul>
            </div>

            <!-- DATOS PERSONALES-->
            <div class="detalle-informacion2">
                <h2>Datos Personales</h2>
                <ul class="informacion-usuario1">
                    <li>Nombre: Jonathan</li>
                    <li>Apellidos: Velásquez Vargas</li>
                    <li>Documento: 111111111</li>
                    <li>Celular: 11111111</li>
                </ul>
            </div>

            <!-- DATOS DIRECCION -->


            <div class="detalle-direccion">
                <h2>Direccion</h2>

                <div class="cuadros-direccion">
                    <div class="direccion-usuario">
                        <ul class="item-direccion">
                            <li id="ciudad">Cali</li>
                            <li id="direccion">Cra 111111</li>
                            <li id="barrio">Barrio</li>
                            <li id="observaciones">Observaciones:
                                Esta es una observación
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="#" class="editar-informacionUsuario" id="editar_informacion">Editar</a>

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
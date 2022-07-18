<?php

include_once 'conexion.php';

if (isset($_POST['Registrarse'])) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $cedula = $_POST['cedula'];
    $email = $_POST['email'];
    $clave = $_POST['clave'];
    $password_hash = password_hash($clave, PASSWORD_DEFAULT);

    $sql = "INSERT INTO `usuarios` (`nombre`, `apellidos`, `cedula`, `correo_electronico`, `clave`)
            VALUES (:nombre,:apellidos,:cedula,:email,:clave)";

    $sentencia = $conexion->prepare($sql);
    $ejecutar = $sentencia->execute(array(
        ":nombre" => $nombre,
        ":apellidos" => $apellidos,
        ":cedula" => $cedula,
        ":email" => $email,
        ":clave" => $password_hash
    ));

    if ($ejecutar) {
        echo '
        <script>
            alert("Se ha registrado correctamente");
            window.location = "../index.php";
        </script>
    ';
    } else {
        echo '
        <script>
            alert("No se pudo realizar el Registro");
            window.location = "../registro.html";
        </script>
        ';
    }
}

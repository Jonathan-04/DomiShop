<?php

session_start();
include_once 'conexion.php';

if ($_POST['Ingresar']) {

    $email = $_POST['email'];
    $clave = $_POST['clave'];

    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = $conexion->prepare("SELECT id, clave FROM usuarios WHERE email = :email ");
    $sql->bindParam(':email', $email);
    $sql->execute();

    $user = $sql->fetch(PDO::FETCH_ASSOC);

    $password_hash = $user['clave'];

    if (password_verify($clave, $password_hash)) {

        $_SESSION['id'] = $user['id'];
        header("Location: ../index.php");
    } else {
        echo '
        <script>
            alert("Contraseña Incorrecta");
            window.location="../index.php";
        </script>
        ';
    }
}

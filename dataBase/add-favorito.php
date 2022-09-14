<?php

session_start();
require 'conexion.php';

if (isset($_SESSION['id'])) {

        $referencia = $_POST['id'];

        $comprobar = "SELECT * FROM favoritos 
                      WHERE id_usuario = '" . $_SESSION['id'] . "'
                      AND referencia_producto = '$referencia' ";
        $ejecutar = $conexion->prepare($comprobar);
        $ejecutar->execute();

        if ($ejecutar->rowCount() >= 1) {
                $icon = "<img src='assets/icons/add-favorite.png' alt='favorite-item' />";
        } else {
                $icon = "<img src='assets/icons/favorite.png' alt='favorite-item' />";
        }

        $datos = array('icon' => $icon);

        echo json_encode($datos);


        if ($ejecutar->rowCount() > 0) {

                $deleteFavorito = "DELETE FROM favoritos
                                   WHERE id_usuario = '" . $_SESSION['id'] . "'
                                   AND referencia_producto = '$referencia' ";
                $ejecutar2 = $conexion->prepare($deleteFavorito);
                $ejecutar2->execute();
        } else {
                $addFavorito = "INSERT INTO favoritos (id_usuario, referencia_producto, fecha_agregado)
                VALUES ('" . $_SESSION['id'] . "', '$referencia', now()) ";

                $ejecutar3 = $conexion->prepare($addFavorito);
                $ejecutar3->execute();
        }
} else {

        $error = "error";
        $response = array('response' => $error);
        echo json_encode($response);
}

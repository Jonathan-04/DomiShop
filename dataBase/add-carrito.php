<?php

session_start();
require 'conexion.php';

if (isset($_SESSION['id'])) {

    $referencia = $_POST['id'];

    $comprobar = "SELECT * FROM carrito 
                      WHERE id_usuario = '" . $_SESSION['id'] . "'
                      AND referencia_producto = '$referencia' ";
    $ejecutar = $conexion->prepare($comprobar);
    $ejecutar->execute();

    if ($ejecutar->rowCount() >= 1) {
        $icon = "<img src='assets/icons/add-car.png' alt='car-item' />";
    } else {
        $icon = "<img src='assets/icons/delete-car.png' alt='car-item' />";
    }

    $datos = array('icon' => $icon);

    echo json_encode($datos);


    if ($ejecutar->rowCount() > 0) {

        $deleteCarrito = "DELETE FROM carrito
                                   WHERE id_usuario = '" . $_SESSION['id'] . "'
                                   AND referencia_producto = '$referencia' ";
        $ejecutar2 = $conexion->prepare($deleteCarrito);
        $ejecutar2->execute();
    } else {
        $addCarrito = "INSERT INTO carrito (id_usuario, referencia_producto, fecha_agregado)
                VALUES ('" . $_SESSION['id'] . "', '$referencia', now()) ";

        $ejecutar3 = $conexion->prepare($addCarrito);
        $ejecutar3->execute();
    }
} else {

    $error = "error";
    $response = array('responseCarrito' => $error);
    echo json_encode($response);
}

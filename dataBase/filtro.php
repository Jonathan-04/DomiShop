<?php

require 'conexion.php';

$query_values = $_POST;
$extra_query = "WHERE estatus = 0";

if ($query_values) {

    $extra_query .= " AND ";
    $values = [];
    $queries = [];

    foreach ($query_values as $field_name => $field_value) {
        foreach ($field_value as $value) {
            $values[$field_name][] = " {$field_name} = '{$value}'";
        }
    }

    foreach ($values as $field_name => $field_values) {
        $queries[$field_name] = "(" . implode(" OR ", $field_values) . ")";
    }

    $extra_query .= " " . implode(" AND ", $queries);
}

$sql = "SELECT * FROM productos " . $extra_query;

$productos = $conexion->prepare($sql);
$productos->execute();

$items = [];

while ($producto = $productos->fetch(PDO::FETCH_ASSOC)) {

    $items[$producto['referencia']] = $producto;
}

echo json_encode($items);

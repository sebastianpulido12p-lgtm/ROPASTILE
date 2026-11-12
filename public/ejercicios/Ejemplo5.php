<?php

$producto = [
    "nombre" => "Monitor",
    "precio" => 750000,
    "proveedor" => [
        "nombre" => "Tecnología SAS",
        "ciudad" => "Bogotá"
    ]
];

echo $producto["nombre"];
echo "<br>";

echo $producto["proveedor"]["nombre"];
echo "<br>";

echo $producto["proveedor"]["ciudad"];

?>
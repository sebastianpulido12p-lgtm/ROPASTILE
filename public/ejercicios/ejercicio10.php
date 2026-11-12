<?php

$producto = [
    "nombre" => "Computador",
    "precio" => 2500000,

    "fabricante" => [
        "nombre" => "HP",
        "pais" => "Estados Unidos"
    ]
];

echo "Nombre del producto: " . $producto["nombre"];
echo "<br>";

echo "Pais del fabricante: " . $producto["fabricante"]["pais"];

?>
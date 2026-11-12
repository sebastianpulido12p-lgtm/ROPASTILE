<?php

$productos = [
    [
        "nombre" => "Camiseta",
        "precio" => 45000,
        "cantidad" => 10
    ],
    [
        "nombre" => "Pantalon",
        "precio" => 80000,
        "cantidad" => 5
    ],
    [
        "nombre" => "Tenis",
        "precio" => 150000,
        "cantidad" => 8
    ]
];

echo "Nombre del segundo producto: " . $productos[1]["nombre"];
echo "<br>";

echo "Precio del tercer producto: " . $productos[2]["precio"];
echo "<br>";

echo "Cantidad del primer producto: " . $productos[0]["cantidad"];

?>
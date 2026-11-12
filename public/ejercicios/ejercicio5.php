<?php

$producto = [
    "nombre" => "Camiseta",
    "precio" => 50000,
    "cantidad" => 10
];

$producto["precio"] = 45000;
$producto["cantidad"] = 15;
$producto["categoria"] = "Ropa deportiva";

echo "Nombre: " . $producto["nombre"];
echo "<br>";

echo "Precio: " . $producto["precio"];
echo "<br>";

echo "Cantidad: " . $producto["cantidad"];
echo "<br>";

echo "Categoria: " . $producto["categoria"];

?>
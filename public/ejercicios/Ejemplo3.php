<?php

$producto = [
    "nombre" => "Teclado",
    "precio" => 60000
];

$producto["precio"] = 55000;
$producto["stock"] = 8;

echo $producto["nombre"];
echo "<br>";
echo $producto["precio"];
echo "<br>";
echo $producto["stock"];

?>
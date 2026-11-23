<?php

$productos = [
    [
        "id" => 1,
        "nombre" => "Camiseta",
        "precio" => 80000,
        "stock" => 10,
        "disponibilidad" => true
    ],
    [
        "id" => 2,
        "nombre" => "Pantaloneta",
        "precio" => 60000,
        "stock" => 15,
        "disponibilidad" => true
    ],
    [
        "id" => 3,
        "nombre" => "Zapatillas",
        "precio" => 180000,
        "stock" => 5,
        "disponibilidad" => true
    ]
];

$json = json_encode($productos);

echo $json;



$json = file_get_contents(__DIR__ . "/productos.json");


$productos = json_decode($json, true);


echo "<h2>Todos los productos</h2>";

foreach ($productos as $producto) {

    echo "Nombre: " . $producto["nombre"] . "<br>";
    echo "Precio: $" . $producto["precio"] . "<br><br>";

}

echo "<h2>Productos con precio superior a $100.000</h2>";

foreach ($productos as $producto) {

    if ($producto["precio"] > 100000) {

        echo "Nombre: " . $producto["nombre"] . "<br>";
        echo "Precio: $" . $producto["precio"] . "<br><br>";

    }

}




echo "<h2>Ejercicio 3: Modificar producto</h2>";

$json = file_get_contents(__DIR__ . "/productos.json");

$productos = json_decode($json, true);


$idBuscar = 2;

foreach ($productos as $indice => $producto) {

    if ($producto["id"] == $idBuscar) {
        echo "Producto: " . $producto["nombre"] . "<br>";
        echo "Precio anterior: $" . $producto["precio"] . "<br>";
    
        $productos[$indice]["precio"] = 200000;

        echo "Precio nuevo: $" . $productos[$indice]["precio"] . "<br><br>";

    }

}


$jsonNuevo = json_encode($productos, JSON_PRETTY_PRINT);


echo "<h3>Resultado JSON</h3>";

echo "<pre>";
echo $jsonNuevo;
echo "</pre>";




?>




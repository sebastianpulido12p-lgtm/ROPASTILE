<?php

$aprendiz = [
    "datos_personales" => [
        "nombre" => "Yojan Sebastian Galeano Pulido",
        "edad" => 20,
        "documento" => "123456789"
    ],

    "contacto" => [
        "telefono" => "3001234567",
        "correo" => "yojan@gmail.com"
    ]
];

echo "Nombre: " . $aprendiz["datos_personales"]["nombre"];
echo "<br>";

echo "Edad: " . $aprendiz["datos_personales"]["edad"];
echo "<br>";

echo "Documento: " . $aprendiz["datos_personales"]["documento"];
echo "<br>";

echo "Telefono: " . $aprendiz["contacto"]["telefono"];
echo "<br>";

echo "Correo: " . $aprendiz["contacto"]["correo"];

?>
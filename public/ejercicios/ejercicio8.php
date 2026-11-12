<?php

$aprendices = [
    [
        "nombre" => "Yojan Sebastian",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Miguel Suarez",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ],
    [
        "nombre" => "Luz Amparo",
        "ficha" => 3230905,
        "programa" => "ADSO"
    ]
];

echo "Nombre del tercer aprendiz: " . $aprendices[2]["nombre"];
echo "<br>";

echo "Ficha del primer aprendiz: " . $aprendices[0]["ficha"];

?>
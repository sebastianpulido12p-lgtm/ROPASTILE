<?php

require_once "../config/Database.php";

$database = new Database();
$conexion = $database->connect();

echo "Conexión exitosa a la base de datos ROPASTILE";
<?php

require_once "../config/Database.php";

$database = new Database();

$pdo = $database->conectar();

echo "Conexión exitosa a la base de datos ROPASTILE";
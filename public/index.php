<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";



$controller = new ProductoController();
$controller->index();

$controller = new ClienteController();
$controller->index();
<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/descripVentaController.php";
require_once __DIR__ . "/../app/controllers/descripCompraController.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
?>

<a href="/productos">Productos</a>

<?php

if ($method === 'GET' && $uri === "/productos") {
    $productoController = new ProductoController();
    $productoController->index();
}

?>

<a href="/clientes">Clientes</a>

<?php

if ($method === 'GET' && $uri === "/clientes") {
    $clienteController = new ClienteController();
    $clienteController->index();
}

?>

<a href="/proveedores">Proveedores</a>

<?php

if ($method === 'GET' && $uri === "/proveedores") {
    $proveedorController = new ProveedorController();
    $proveedorController->index();
}

?>

<a href="/ventas">Ventas</a>

<?php

if ($method === 'GET' && $uri === "/ventas") {
    $ventaController = new VentaController();
    $ventaController->index();
}

?>

<a href="/compras">Compras</a>

<?php

if ($method === 'GET' && $uri === "/compras") {
    $compraController = new CompraController();
    $compraController->index();
}

?>

<a href="/descripVenta">Detalle de ventas</a>

<?php

if ($method === 'GET' && $uri === "/descripVenta") {
    $descripVentaController = new DescripVentaController();
    $descripVentaController->index();
}

?>

<a href="/descripCompra">Detalle de compras</a>

<?php

if ($method === 'GET' && $uri === "/descripCompra") {
    $descripCompraController = new DescripCompraController();
    $descripCompraController->index();
}

?>
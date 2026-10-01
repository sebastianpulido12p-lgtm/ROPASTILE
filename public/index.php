<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";


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

/

<a href="/clientes">Clientes</a>

<?php
if ($method === 'GET' && $uri === "/clientes") {
    $clienteController = new ClienteController();
    $clienteController->index();
}
?>

/

<a href="/proveedores">Proveedores</a>

<?php
if ($method === 'GET' && $uri === "/proveedores") {
    $proveedorController = new ProveedorController();
    $proveedorController->index();
}
?>

/

<a href="/ventas">Ventas</a>

<?php
if ($method === 'GET' && $uri === "/ventas") {
    $ventaController = new VentaController();
    $ventaController->index();
}
?>

/

<a href="/compras">Compras</a>

<?php
if ($method === 'GET' && $uri === "/compras") {
    $compraController = new CompraController();
    $compraController->index();
}
?>

/

//CREACION//

<a href="/clientes/crear">Crear Cliente</a>

<?php
if ($method === 'GET' && $uri === "/clientes/crear") {
    $clienteController = new ClienteController();
    $clienteController->crear();
}

if ($method === 'POST' && $uri === "/clientes/crear") {
    $clienteController = new ClienteController();
    $clienteController->guardar();
}
?>

/

<a href="/compras/crear">Crear Compra</a>

<?php
if ($method === 'GET' && $uri === "/compras/crear") {
    $compraController = new CompraController();
    $compraController->crear();
}

if ($method === 'POST' && $uri === "/compras/crear") {
    $compraController = new CompraController();
    $compraController->guardar();
}
?>

/

<a href="/productos/crear">Crear Producto</a>

<?php
if ($method === 'GET' && $uri === "/productos/crear") {
    $productoController = new ProductoController();
    $productoController->crear();
}

if ($method === 'POST' && $uri === "/productos/crear") {
    $productoController = new ProductoController();
    $productoController->guardar();
}
?>

/

<a href="/proveedores/crear">Crear Proveedor</a>

<?php
if ($method === 'GET' && $uri === "/proveedores/crear") {
    $proveedorController = new ProveedorController();
    $proveedorController->crear();
}

if ($method === 'POST' && $uri === "/proveedores/crear") {
    $proveedorController = new ProveedorController();
    $proveedorController->guardar();
}
?>

/

<a href="/ventas/crear">Crear Venta</a>

<?php
if ($method === 'GET' && $uri === "/ventas/crear") {
    $ventaController = new VentaController();
    $ventaController->crear();
}

if ($method === 'POST' && $uri === "/ventas/crear") {
    $ventaController = new VentaController();
    $ventaController->guardar();
}
?>
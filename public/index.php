<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";


$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

$ruta = parse_url($uri, PHP_URL_PATH);


// PRODUCTOS
if ($ruta === "/productos/editar" && $method === "GET") {
    $productoController = new ProductoController();
    $productoController->editar();
}
if ($ruta === "/productos/actualizar" && $method === "POST") {
    $productoController = new ProductoController();
    $productoController->actualizar();
}
if ($ruta === "/productos/eliminar" && $method === "GET") {
    $productoController = new ProductoController();
    $productoController->eliminar();
}


// CLIENTES
if ($ruta === "/clientes/editar" && $method === "GET") {
    $clienteController = new ClienteController();
    $clienteController->editar();
}
if ($ruta === "/clientes/actualizar" && $method === "POST") {
    $clienteController = new ClienteController();
    $clienteController->actualizar();
}
if ($ruta === "/clientes/eliminar" && $method === "GET") {
    $clienteController = new ClienteController();
    $clienteController->eliminar();
}




// PROVEEDORES
if ($ruta === "/proveedores/editar" && $method === "GET") {
    $proveedorController = new ProveedorController();
    $proveedorController->editar();
}
if ($ruta === "/proveedores/actualizar" && $method === "POST") {
    $proveedorController = new ProveedorController();
    $proveedorController->actualizar();
}
if ($ruta === "/proveedores/eliminar" && $method === "GET") {
    $proveedorController = new ProveedorController();
    $proveedorController->eliminar();
}




// VENTAS
if ($ruta === "/ventas/editar" && $method === "GET") {
    $ventaController = new VentaController();
    $ventaController->editar();
}
if ($ruta === "/ventas/actualizar" && $method === "POST") {
    $ventaController = new VentaController();
    $ventaController->actualizar();
}
if ($ruta === "/ventas/eliminar" && $method === "POST") {
    $ventaController = new VentaController();
    $ventaController->eliminar();
}





// COMPRAS

if ($ruta === "/compras/editar" && $method === "GET") {
    $compraController = new CompraController();
    $compraController->editar();
}

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






/////

<!-- CREACION -->

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






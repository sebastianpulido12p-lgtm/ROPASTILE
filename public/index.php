<?php

require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClienteController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";
require_once __DIR__ . "/../app/controllers/VentaController.php";
require_once __DIR__ . "/../app/controllers/CompraController.php";

$rutas = require_once dirname(__DIR__) . "/rutas/web.php";

$method = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
$ruta = parse_url($uri, PHP_URL_PATH);
$ruta = str_replace("/ROPASTILE/public", "", $ruta);

$enrutamiento = $rutas[$method][$ruta] ?? null;

if ($enrutamiento != null) {

    $ncontrolador = $enrutamiento[0];
    $nMetodo = $enrutamiento[1];

    $controlador = new $ncontrolador();
    $controlador->$nMetodo();

} else {

    echo "Ruta no encontrada";

}

?>

<hr>

LISTADO

<a href="/ROPASTILE/public/productos">Productos</a> /
<a href="/ROPASTILE/public/clientes">Clientes</a> /
<a href="/ROPASTILE/public/proveedores">Proveedores</a> /
<a href="/ROPASTILE/public/ventas">Ventas</a> /
<a href="/ROPASTILE/public/compras">Compras</a>

<br><br>

CREAR 

<a href="/ROPASTILE/public/productos/crear">Crear Producto</a> /
<a href="/ROPASTILE/public/clientes/crear">Crear Cliente</a> /
<a href="/ROPASTILE/public/proveedores/crear">Crear Proveedor</a> /
<a href="/ROPASTILE/public/ventas/crear">Crear Venta</a> /
<a href="/ROPASTILE/public/compras/crear">Crear Compra</a>


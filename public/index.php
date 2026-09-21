<?php 
 
require_once __DIR__ . "/../app/controllers/ProductoController.php"; 
require_once __DIR__ . "/../app/controllers/ClienteController.php"; 
require_once __DIR__ . "/../app/controllers/ProveedorController.php"; 
require_once __DIR__ . "/../app/controllers/VentaController.php"; 
require_once __DIR__ . "/../app/controllers/CompraController.php";
require_once __DIR__ . "/../app/controllers/descripVentaController.php";
require_once __DIR__ . "/../app/controllers/descripCompraController.php";
 


$productoController = new ProductoController(); 
$productoController->index(); 
 
$clienteController = new ClienteController(); 
$clienteController->index(); 
 
$proveedorController = new ProveedorController(); 
$proveedorController->index(); 
 
$ventaController = new VentaController(); 
$ventaController->index(); 
 
$compraController = new CompraController(); 
$compraController->index();

$descripVentaController = new DescripVentaController();
$descripVentaController->index();

$descripCompraController = new DescripCompraController();
$descripCompraController->index();
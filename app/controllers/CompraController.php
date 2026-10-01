<?php

require_once __DIR__ . "/../models/Compra.php";

class CompraController
{
    public function index()
    {
        $compraModel = new Compra();
        $compras = $compraModel->getAll();
        $compra = $compraModel->getById(1);

        require_once __DIR__ . "/../views/compras/index.php";
    }

     public function guardar()
    {
    $fecha = $_POST['fecha'];
    $proveedor = $_POST['proveedor'];

    $compraModel = new Compra();
    $resultado = $compraModel->guardar($fecha, $proveedor);

    if ($resultado) {
        echo "Compra guardada correctamente.";
        $this->index();
    } else {
        echo "Error al guardar la compra.";
    }
    

    }
    public function crear()
    {
        require_once __DIR__ . "/../views/compras/crear.php";
    }
}

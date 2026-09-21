<?php

require_once __DIR__ . "/../models/Venta.php";

class VentaController
{
    public function index()
    {
        $ventaModel = new Venta();

        $ventas = $ventaModel->getAll();

        $venta = $ventaModel->getById(1);

        require_once __DIR__ . "/../views/ventas/index.php";
    }
}
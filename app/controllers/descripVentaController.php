<?php

require_once __DIR__ . "/../models/descripVenta.php";

class DescripVentaController
{
    public function index()
    {
        $descripVentaModel = new DescripVenta();

        $descripVentas = $descripVentaModel->getAll();

        $descripVenta = $descripVentaModel->getById(1);

        require_once __DIR__ . "/../views/descripVenta/index.php";
    }
}
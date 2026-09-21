<?php

require_once __DIR__ . "/../models/descripCompra.php";

class DescripCompraController
{
    public function index()
    {
        $descripCompraModel = new DescripCompra();

        $descripCompras = $descripCompraModel->getAll();

        $descripCompra = $descripCompraModel->getById(1);

        require_once __DIR__ . "/../views/descripCompra/index.php";
    }
}
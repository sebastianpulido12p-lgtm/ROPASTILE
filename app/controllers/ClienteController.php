<?php

require_once __DIR__ . "/../models/Cliente.php";

class ClienteController
{
    public function index()
    {
        $clienteModel = new Cliente();

        $clientes = $clienteModel->getAll();

        $cliente = $clienteModel->getById(1);

        require_once __DIR__ . "/../views/clientes/index.php";
    }
}
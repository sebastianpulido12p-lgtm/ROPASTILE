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

public function guardar()
{
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];

    $clienteModel = new Cliente();
    $resultado = $clienteModel->guardar($nombre, $apellido, $documento, $telefono, $correo, $ciudad);

    if ($resultado) {
        echo "Cliente guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el cliente.";
    }
}

    public function crear()
    {
        require_once __DIR__ . "/../views/clientes/crear.php";
    }
}
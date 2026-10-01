<?php

require_once __DIR__ . "/../models/Proveedor.php";

class ProveedorController
{
    public function index()
    {
        $proveedorModel = new Proveedor();

        $proveedores = $proveedorModel->getAll();

        $proveedor = $proveedorModel->getById(1);

        require_once __DIR__ . "/../views/proveedores/index.php";
    }

    public function guardar()
    {
    $nombre = $_POST['nombre'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];

    $proveedorModel = new Proveedor();
    $resultado = $proveedorModel->guardar($nombre, $documento, $telefono, $correo, $ciudad);

    if ($resultado) {
        echo "Proveedor guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el proveedor.";
    }
    }

    
    public function crear()
    {
        require_once __DIR__ . "/../views/proveedores/crear.php";
    }
}
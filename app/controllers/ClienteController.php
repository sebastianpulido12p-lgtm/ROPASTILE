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


public function editar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    $modeloCliente = new Cliente();

    $cliente = $modeloCliente->getById($id);

    require_once __DIR__ . "/../views/clientes/editar.php";
}


public function actualizar()
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $ciudad = $_POST['ciudad'];

    $clienteModel = new Cliente();

    $resultado = $clienteModel->actualizar(
        $id,
        $nombre,
        $apellido,
        $documento,
        $telefono,
        $correo,
        $ciudad
    );

    if ($resultado) {
        echo "Cliente actualizado correctamente.";
        $this->index();
    } else {
        echo "Error al actualizar el cliente.";
    }
}


public function eliminar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if ($id) {
        $clienteModel = new Cliente();

        $resultado = $clienteModel->eliminar($id);

        if ($resultado) {
            echo "Cliente eliminado correctamente.";
        } else {
            echo "Error al eliminar el cliente.";
        }
    } else {
        echo "ID de cliente no válido.";
    }

    $this->index();
}

}
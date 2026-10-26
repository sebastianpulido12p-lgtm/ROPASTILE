<?php

require_once __DIR__ . "/../models/Producto.php";

class ProductoController
{
    public function index()
    {
        $productoModel = new Producto();

        $productos = $productoModel->getAll();

        $producto = $productoModel->getById(1);

        require_once __DIR__ . "/../views/productos/index.php";
        
    }


  public function guardar()
{
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $tipoProducto = $_POST['tipoProducto'];
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $productoModel = new Producto();

    $resultado = $productoModel->guardar($nombre, $descripcion, $marca, $tipoProducto, $estado, $precio, $stock);

    if ($resultado) {
        echo "Producto guardado correctamente.";
        $this->index();
    } else {
        echo "Error al guardar el producto.";
    }
}

   
    public function crear()
    {
        require_once __DIR__ . "/../views/productos/crear.php";
    }



    public function editar()
    {
      $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
      $modeloProducto = new Producto();
      $producto = $modeloProducto->getById($id);
    require_once __DIR__ . "/../views/productos/editar.php";
    
}


public function actualizar()
{
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $marca = $_POST['marca'];
    $tipoProducto = $_POST['tipoProducto'];
    $estado = $_POST['estado'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    $productoModel = new Producto();

    $resultado = $productoModel->actualizar(
        $id,
        $nombre,
        $descripcion,
        $precio,
        $stock,
        $marca,
        $tipoProducto,
        $estado
    );

    if ($resultado) {
        echo "Producto actualizado correctamente.";
        $this->index();
    } else {
        echo "Error al actualizar el producto.";
    }
}


public function eliminar()
{
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

    if ($id) {
        $productoModel = new Producto();

        $resultado = $productoModel->eliminar($id);

        if ($resultado) {
            echo "Producto eliminado correctamente.";
        } else {
            echo "Error al eliminar el producto.";
        }
    } else {
        echo "ID de producto no válido.";
    }

    $this->index();
}

}
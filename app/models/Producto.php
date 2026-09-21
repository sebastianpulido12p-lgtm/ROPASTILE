<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto
{
    private $connection;

    public function __construct()
    {
        try {
            $db = new Database();
            $this->connection = $db->connect();
        } catch (PDOException $e) {
            echo "Error al conectar: " . $e->getMessage();
        }
    }

    public function getAll()
    {
        try {
            $sql = "SELECT
                        producto.idProducto,
                        producto.nombre,
                        producto.descripcion,
                        producto.precio,
                        producto.stock,
                        marca.nombre AS marca_nombre,
                        tipoproducto.nombre AS tipo_nombre,
                        producto.estado
                    FROM producto
                    INNER JOIN marca
                    ON producto.idMarca = marca.idMarca
                    INNER JOIN tipoproducto
                    ON producto.idTipoProducto = tipoproducto.idTipoProducto";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los productos: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        producto.idProducto,
                        producto.nombre,
                        producto.descripcion,
                        producto.precio,
                        producto.stock,
                        producto.idMarca,
                        marca.nombre AS marca_nombre,
                        producto.idTipoProducto,
                        tipoproducto.nombre AS tipo_nombre,
                        producto.estado
                    FROM producto
                    INNER JOIN marca
                    ON producto.idMarca = marca.idMarca
                    INNER JOIN tipoproducto
                    ON producto.idTipoProducto = tipoproducto.idTipoProducto
                    WHERE producto.idProducto = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el producto: " . $e->getMessage();
            return false;
        }
    }
}
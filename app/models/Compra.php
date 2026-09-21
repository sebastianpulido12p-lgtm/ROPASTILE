<?php

require_once __DIR__ . "/../../config/Database.php";

class Compra
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
                        compra.idCompra,
                        compra.fecha,
                        proveedor.nombre AS proveedor_nombre
                    FROM compra
                    INNER JOIN proveedor
                    ON compra.idProveedor = proveedor.idProveedor";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las compras: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        compra.idCompra,
                        compra.fecha,
                        compra.idProveedor,
                        proveedor.nombre AS proveedor_nombre
                    FROM compra
                    INNER JOIN proveedor
                    ON compra.idProveedor = proveedor.idProveedor
                    WHERE compra.idCompra = :id";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la compra: " . $e->getMessage();
            return false;
        }
    }
}
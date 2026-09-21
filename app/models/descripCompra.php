<?php

require_once __DIR__ . "/../../config/Database.php";

class DescripCompra
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
                        idDescripCompra,
                        idCompra,
                        idProducto,
                        cantidad,
                        precioUnitario
                    FROM descripcompra";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los detalles de compra: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        idDescripCompra,
                        idCompra,
                        idProducto,
                        cantidad,
                        precioUnitario
                    FROM descripcompra
                    WHERE idDescripCompra = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el detalle de compra: " . $e->getMessage();
            return false;
        }
    }
}
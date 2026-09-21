<?php

require_once __DIR__ . "/../../config/Database.php";

class TipoPago
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
                        idTipoPago,
                        nombre
                    FROM tipopago";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los tipos de pago: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        idTipoPago,
                        nombre
                    FROM tipopago
                    WHERE idTipoPago = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el tipo de pago: " . $e->getMessage();
            return false;
        }
    }
}
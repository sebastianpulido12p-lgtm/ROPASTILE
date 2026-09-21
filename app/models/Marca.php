<?php

require_once __DIR__ . "/../../config/Database.php";

class Marca
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
            $sql = "SELECT idMarca, nombre FROM marca";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las marcas: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT idMarca, nombre
                    FROM marca
                    WHERE idMarca = :id";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la marca: " . $e->getMessage();
            return false;
        }
    }
}
<?php

require_once __DIR__ . "/../../config/Database.php";

class TipoDocumento
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
                        id_tipo_documento,
                        nombre
                    FROM tipo_documento";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener los tipos de documento: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        id_tipo_documento,
                        nombre
                    FROM tipo_documento
                    WHERE id_tipo_documento = :id";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener el tipo de documento: " . $e->getMessage();
            return false;
        }
    }
}
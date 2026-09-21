<?php

require_once __DIR__ . "/../../config/Database.php";

class Proveedor
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
                    proveedor.idProveedor,
                    proveedor.nombre,
                    proveedor.documento,
                    proveedor.telefono,
                    proveedor.correo,
                    ciudad.nombre AS ciudad_nombre
                FROM proveedor
                LEFT JOIN ciudad
                ON proveedor.idCiudad = ciudad.idCiudad";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error al obtener los proveedores: " . $e->getMessage();
        return [];
    }
}

public function getById($id)
{
    try {
        $sql = "SELECT
                    proveedor.idProveedor,
                    proveedor.nombre,
                    proveedor.documento,
                    proveedor.telefono,
                    proveedor.correo,
                    ciudad.nombre AS ciudad_nombre
                FROM proveedor
                LEFT JOIN ciudad
                ON proveedor.idCiudad = ciudad.idCiudad
                WHERE proveedor.idProveedor = :id";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error al obtener el proveedor: " . $e->getMessage();
        return false;
    }
}
}
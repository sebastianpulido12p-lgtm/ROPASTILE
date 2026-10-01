<?php

require_once __DIR__ . "/../../config/Database.php";

class Cliente
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
                    cliente.idCliente,
                    cliente.nombre,
                    cliente.apellido,
                    cliente.documento,
                    cliente.telefono,
                    cliente.correo,
                    ciudad.nombre AS ciudad_nombre
                FROM cliente
                LEFT JOIN ciudad
                ON cliente.idCiudad = ciudad.idCiudad";

        $consulta = $this->connection->query($sql);

        return $consulta->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error al obtener los clientes: " . $e->getMessage();
        return [];
    }
}

public function getById($id)
{
    try {
        $sql = "SELECT
                    cliente.idCliente,
                    cliente.nombre,
                    cliente.apellido,
                    cliente.documento,
                    cliente.telefono,
                    cliente.correo,
                    ciudad.nombre AS ciudad_nombre
                FROM cliente
                LEFT JOIN ciudad
                ON cliente.idCiudad = ciudad.idCiudad
                WHERE cliente.idCliente = :id";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);

        return $stmt->fetch(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        echo "Error al obtener el cliente: " . $e->getMessage();
        return false;
    }
}

public function guardar($nombre, $apellido, $documento, $telefono, $correo, $ciudad)
{
    try {
        $sql = "INSERT INTO cliente (nombre, apellido, documento, telefono, correo, idCiudad)
                SELECT :nombre, :apellido, :documento, :telefono, :correo, idCiudad
                FROM ciudad
                WHERE nombre = :ciudad";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':nombre', $nombre);
        $consulta->bindParam(':apellido', $apellido);
        $consulta->bindParam(':documento', $documento);
        $consulta->bindParam(':telefono', $telefono);
        $consulta->bindParam(':correo', $correo);
        $consulta->bindParam(':ciudad', $ciudad);

        return $consulta->execute();

    } catch (PDOException $e) {
        echo "Error al guardar el cliente: " . $e->getMessage();
        return false;
    }
}
}
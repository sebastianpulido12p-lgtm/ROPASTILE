<?php

require_once __DIR__ . "/../../config/Database.php";

class Venta
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
                        venta.idVenta,
                        venta.fecha,
                        cliente.nombre AS cliente_nombre,
                        cliente.apellido AS cliente_apellido,
                        tipopago.nombre AS tipo_pago
                    FROM venta
                    INNER JOIN cliente
                    ON venta.idCliente = cliente.idCliente
                    INNER JOIN tipopago
                    ON venta.idTipoPago = tipopago.idTipoPago";

            $consulta = $this->connection->query($sql);

            return $consulta->fetchAll(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener las ventas: " . $e->getMessage();
            return [];
        }
    }

    public function getById($id)
    {
        try {
            $sql = "SELECT
                        venta.idVenta,
                        venta.fecha,
                        venta.idCliente,
                        cliente.nombre AS cliente_nombre,
                        cliente.apellido AS cliente_apellido,
                        venta.idTipoPago,
                        tipopago.nombre AS tipo_pago
                    FROM venta
                    INNER JOIN cliente
                    ON venta.idCliente = cliente.idCliente
                    INNER JOIN tipopago
                    ON venta.idTipoPago = tipopago.idTipoPago
                    WHERE venta.idVenta = :id";

            $stmt = $this->connection->prepare($sql);
            $stmt->execute([':id' => $id]);

            return $stmt->fetch(PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            echo "Error al obtener la venta: " . $e->getMessage();
            return false;
        }
    }

 public function guardar($fecha, $cliente, $tipoPago)
{
    try {
        $sql = "INSERT INTO venta (fecha, idCliente, idTipoPago)
                SELECT :fecha, cliente.idCliente, tipopago.idTipoPago
                FROM cliente, tipopago
                WHERE CONCAT(cliente.nombre, ' ', cliente.apellido) = :cliente
                AND tipopago.nombre = :tipoPago";

        $consulta = $this->connection->prepare($sql);

        $consulta->bindParam(':fecha', $fecha);
        $consulta->bindParam(':cliente', $cliente);
        $consulta->bindParam(':tipoPago', $tipoPago);

        return $consulta->execute();

    } catch (PDOException $e) {
        echo "Error al guardar la venta: " . $e->getMessage();
        return false;
    }
}
}

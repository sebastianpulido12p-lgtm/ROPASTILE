<?php 
 
require_once __DIR__ . "/../../config/Database.php"; 
 
class DescripVenta 
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
                        idDescripVenta, 
                        idVenta, 
                        idProducto, 
                        cantidad, 
                        precioUnitario 
                    FROM descripventa"; 
 
            $consulta = $this->connection->query($sql); 
 
            return $consulta->fetchAll(PDO::FETCH_ASSOC); 
 
        } catch (PDOException $e) { 
            echo "Error al obtener los detalles de venta: " . $e->getMessage(); 
            return []; 
        } 
    } 
 
    public function getById($id) 
    { 
        try { 
            $sql = "SELECT 
                        idDescripVenta, 
                        idVenta, 
                        idProducto, 
                        cantidad, 
                        precioUnitario 
                    FROM descripventa 
                    WHERE idDescripVenta = :id"; 
 
            $stmt = $this->connection->prepare($sql); 
 
            $stmt->execute([':id' => $id]); 
 
            return $stmt->fetch(PDO::FETCH_ASSOC); 
 
        } catch (PDOException $e) { 
            echo "Error al obtener el detalle de venta: " . $e->getMessage(); 
            return false; 
        } 
    } 
}
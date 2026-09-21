<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Venta</title>
</head>
<body>

<h1>Lista de Detalles de Venta</h1>

<table border="1">
    <tr>
        <th>ID Detalle</th>
        <th>ID Venta</th>
        <th>ID Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
    </tr>

    <?php foreach ($descripVentas as $detalle) { ?>
    <tr>
        <td><?php echo $detalle['idDescripVenta']; ?></td>
        <td><?php echo $detalle['idVenta']; ?></td>
        <td><?php echo $detalle['idProducto']; ?></td>
        <td><?php echo $detalle['cantidad']; ?></td>
        <td><?php echo $detalle['precioUnitario']; ?></td>
    </tr>
    <?php } ?>
</table>

<h1>Detalle de Venta</h1>

<?php if ($descripVenta) { ?>

<table border="1">
    <tr>
        <th>ID Detalle</th>
        <th>ID Venta</th>
        <th>ID Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
    </tr>

    <tr>
        <td><?php echo $descripVenta['idDescripVenta']; ?></td>
        <td><?php echo $descripVenta['idVenta']; ?></td>
        <td><?php echo $descripVenta['idProducto']; ?></td>
        <td><?php echo $descripVenta['cantidad']; ?></td>
        <td><?php echo $descripVenta['precioUnitario']; ?></td>
    </tr>
</table>


<hr style="border: 2px solid black;">

<?php } ?>

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalle de Compra</title>
</head>
<body>

<h1>Lista de Detalles de Compra</h1>

<table border="1">
    <tr>
        <th>ID Detalle Compra</th>
        <th>ID Compra</th>
        <th>ID Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
    </tr>

    <?php foreach ($descripCompras as $detalle) { ?>
    <tr>
        <td><?php echo $detalle['idDescripCompra']; ?></td>
        <td><?php echo $detalle['idCompra']; ?></td>
        <td><?php echo $detalle['idProducto']; ?></td>
        <td><?php echo $detalle['cantidad']; ?></td>
        <td><?php echo $detalle['precioUnitario']; ?></td>
    </tr>
    <?php } ?>
</table>

<h2>Detalle de Compra</h2>

<?php if ($descripCompra) { ?>

<table border="1">
    <tr>
        <th>ID Detalle Compra</th>
        <th>ID Compra</th>
        <th>ID Producto</th>
        <th>Cantidad</th>
        <th>Precio Unitario</th>
    </tr>

    <tr>
        <td><?php echo $descripCompra['idDescripCompra']; ?></td>
        <td><?php echo $descripCompra['idCompra']; ?></td>
        <td><?php echo $descripCompra['idProducto']; ?></td>
        <td><?php echo $descripCompra['cantidad']; ?></td>
        <td><?php echo $descripCompra['precioUnitario']; ?></td>
    </tr>
</table>

<hr style="border: 2px solid black;">

<?php } ?>

</body>
</html>
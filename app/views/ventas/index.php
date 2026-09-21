<h1>Listado de Ventas</h1>

<table border="1">
    <tr>
        <th>ID Venta</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Tipo de Pago</th>
    </tr>

    <?php foreach ($ventas as $ventaItem): ?>
        <tr>
            <td><?= $ventaItem['idVenta'] ?></td>
            <td><?= $ventaItem['fecha'] ?></td>
            <td><?= $ventaItem['cliente_nombre'] ?> <?= $ventaItem['cliente_apellido'] ?></td>
            <td><?= $ventaItem['tipo_pago'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Detalle de la venta</h1>

<?php if ($venta): ?>

<table border="1">
    <tr>
        <th>ID Venta</th>
        <th>Fecha</th>
        <th>Cliente</th>
        <th>Tipo de Pago</th>
    </tr>

    <tr>
        <td><?= $venta['idVenta'] ?></td>
        <td><?= $venta['fecha'] ?></td>
        <td><?= $venta['cliente_nombre'] ?> <?= $venta['cliente_apellido'] ?></td>
        <td><?= $venta['tipo_pago'] ?></td>
    </tr>
</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Venta no encontrada.</p>

<?php endif; ?>
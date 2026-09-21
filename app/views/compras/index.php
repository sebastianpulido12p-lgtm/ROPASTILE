<h1>Listado de Compras</h1>

<table border="1">
    <tr>
        <th>ID Compra</th>
        <th>Fecha</th>
        <th>Proveedor</th>
    </tr>

    <?php foreach ($compras as $compraItem): ?>
        <tr>
            <td><?= $compraItem['idCompra'] ?></td>
            <td><?= $compraItem['fecha'] ?></td>
            <td><?= $compraItem['proveedor_nombre'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Detalle de la compra</h1>

<?php if ($compra): ?>

<table border="1">
    <tr>
        <th>ID Compra</th>
        <th>Fecha</th>
        <th>Proveedor</th>
    </tr>

    <tr>
        <td><?= $compra['idCompra'] ?></td>
        <td><?= $compra['fecha'] ?></td>
        <td><?= $compra['proveedor_nombre'] ?></td>
    </tr>
</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Compra no encontrada.</p>

<?php endif; ?>
<h1>Listado de Proveedores</h1>

<table border="1">
    <tr>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Ciudad</th>
    </tr>

    <?php foreach ($proveedores as $proveedorItem): ?>
        <tr>
            <td><?= $proveedorItem['idProveedor'] ?></td>
            <td><?= $proveedorItem['nombre'] ?></td>
            <td><?= $proveedorItem['documento'] ?></td>
            <td><?= $proveedorItem['telefono'] ?></td>
            <td><?= $proveedorItem['correo'] ?></td>
            <td>
                <?php if ($proveedorItem['ciudad_nombre']): ?>
                    <?= $proveedorItem['ciudad_nombre'] ?>
                <?php else: ?>
                    Sin ciudad
                <?php endif; ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Detalle del proveedor</h1>

<?php if ($proveedor): ?>

<table border="1">
    <tr>
        <th>ID Proveedor</th>
        <th>Nombre</th>
        <th>Documento</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>Ciudad</th>
    </tr>

    <tr>
        <td><?= $proveedor['idProveedor'] ?></td>
        <td><?= $proveedor['nombre'] ?></td>
        <td><?= $proveedor['documento'] ?></td>
        <td><?= $proveedor['telefono'] ?></td>
        <td><?= $proveedor['correo'] ?></td>
        <td>
            <?php if ($proveedor['ciudad_nombre']): ?>
                <?= $proveedor['ciudad_nombre'] ?>
            <?php else: ?>
                Sin ciudad
            <?php endif; ?>
        </td>
    </tr>
</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Proveedor no encontrado.</p>

<?php endif; ?>
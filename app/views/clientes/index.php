<h1>Listado de Clientes</h1>

<table border="1">
    <tr>
        <th>ID Cliente</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>ID Ciudad</th>
    </tr>

    <?php foreach ($clientes as $clienteItem): ?>
        <tr>
            <td><?= $clienteItem['idCliente'] ?></td>
            <td><?= $clienteItem['nombre'] ?></td>
            <td><?= $clienteItem['apellido'] ?></td>
            <td><?= $clienteItem['documento'] ?></td>
            <td><?= $clienteItem['telefono'] ?></td>
            <td><?= $clienteItem['correo'] ?></td>
            <td><?= $clienteItem['idCiudad'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h1>Detalle del cliente</h1>

<?php if ($cliente): ?>

<table border="1">
    <tr>
        <th>ID Cliente</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Documento</th>
        <th>Teléfono</th>
        <th>Correo</th>
        <th>ID Ciudad</th>
    </tr>

    <tr>
        <td><?= $cliente['idCliente'] ?></td>
        <td><?= $cliente['nombre'] ?></td>
        <td><?= $cliente['apellido'] ?></td>
        <td><?= $cliente['documento'] ?></td>
        <td><?= $cliente['telefono'] ?></td>
        <td><?= $cliente['correo'] ?></td>
        <td><?= $cliente['idCiudad'] ?></td>
    </tr>
</table>

<?php else: ?>

<p>Cliente no encontrado.</p>

<?php endif; ?>
<h1>Listado de Productos</h1>

<table border="1">
    <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Marca</th>
        <th>Tipo Producto</th>
        <th>Estado</th>
    </tr>

    <?php foreach ($productos as $productoItem): ?>
        <tr>
            <td><?= $productoItem['idProducto'] ?></td>
            <td><?= $productoItem['nombre'] ?></td>
            <td><?= $productoItem['descripcion'] ?></td>
            <td><?= $productoItem['precio'] ?></td>
            <td><?= $productoItem['stock'] ?></td>
            <td><?= $productoItem['marca_nombre'] ?></td>
            <td><?= $productoItem['tipo_nombre'] ?></td>
            <td><?= $productoItem['estado'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>
 

<h1>Detalle del producto</h1>

<?php if ($producto): ?>

<table border="1">
    <tr>
        <th>ID Producto</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Stock</th>
        <th>Marca</th>
        <th>Tipo Producto</th>
        <th>Estado</th>
    </tr>

    <tr>
        <td><?= $producto['idProducto'] ?></td>
        <td><?= $producto['nombre'] ?></td>
        <td><?= $producto['descripcion'] ?></td>
        <td><?= $producto['precio'] ?></td>
        <td><?= $producto['stock'] ?></td>
        <td><?= $producto['marca_nombre'] ?></td>
        <td><?= $producto['tipo_nombre'] ?></td>
        <td><?= $producto['estado'] ?></td>
    </tr>
</table>

<hr style="border: 2px solid black;">

<?php else: ?>

<p>Producto no encontrado.</p>

<?php endif; ?>
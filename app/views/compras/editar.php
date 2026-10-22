<h1>Editar Compra</h1>

<form action="/compras/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $compra['idCompra'] ?>">

    <label>Fecha:</label>
    <input type="date" name="fecha" value="<?= $compra['fecha'] ?>" required>
    <br><br>

    <label>Proveedor:</label>
    <input type="text" name="proveedor" value="<?= $compra['idProveedor'] ?>" required>
    <br><br>

    <button type="submit">Actualizar Compra</button>

</form>
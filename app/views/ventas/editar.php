<h1>Editar Venta</h1>

<form action="/ventas/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $venta['idVenta'] ?>">

    <label>Fecha:</label>
    <input type="date" name="fecha" value="<?= $venta['fecha'] ?>" required>

    <br><br>

    <label>ID Cliente:</label>
    <input type="number" name="cliente" value="<?= $venta['idCliente'] ?>" required>

    <br><br>

    <label>ID Tipo de Pago:</label>
    <input type="number" name="tipoPago" value="<?= $venta['idTipoPago'] ?>" required>

    <br><br>

    <button type="submit">Actualizar Venta</button>

</form>

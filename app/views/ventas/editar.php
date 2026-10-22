<h1>Editar Venta</h1>

<form action="/ventas/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $venta['idVenta'] ?>">

    <label>Fecha:</label>
    <input type="date" name="fecha" value="<?= $venta['fecha'] ?>" required>
    <br><br>

    <label>Cliente:</label>
    <input type="text" name="cliente" value="<?= $venta['idCliente'] ?>" required>
    <br><br>

    <label>Tipo de Pago:</label>
    <input type="text" name="tipoPago" value="<?= $venta['idTipoPago'] ?>" required>
    <br><br>

    <button type="submit">Actualizar Venta</button>

</form>
<h1>Editar Cliente</h1>

<form action="/clientes/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $cliente['idCliente'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $cliente['nombre'] ?>" required>
    <br><br>

    <label>Apellido:</label>
    <input type="text" name="apellido" value="<?= $cliente['apellido'] ?>" required>
    <br><br>

    <label>Documento:</label>
    <input type="text" name="documento" value="<?= $cliente['documento'] ?>" required>
    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= $cliente['telefono'] ?>" required>
    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" value="<?= $cliente['correo'] ?>" required>
    <br><br>

    <label>Ciudad:</label>
    <input type="text" name="ciudad" value="<?= $cliente['idCiudad'] ?>" required>
    <br><br>

    <button type="submit">Actualizar Cliente</button>

</form>



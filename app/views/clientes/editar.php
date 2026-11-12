
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
    <select name="ciudad" required>
        <option value="2" <?= $cliente['idCiudad'] == 2 ? 'selected' : '' ?>>Bogota</option>
        <option value="1" <?= $cliente['idCiudad'] == 1 ? 'selected' : '' ?>>La Dorada</option>
        <option value="4" <?= $cliente['idCiudad'] == 4 ? 'selected' : '' ?>>Manizales</option>
        <option value="3" <?= $cliente['idCiudad'] == 3 ? 'selected' : '' ?>>Medellin</option>
    </select>

    <br><br>

    <button type="submit">Actualizar Cliente</button>

</form>



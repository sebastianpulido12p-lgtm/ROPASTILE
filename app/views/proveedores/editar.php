
<h1>Editar Proveedor</h1>

<form action="/proveedores/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $proveedor['idProveedor'] ?>">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?= $proveedor['nombre'] ?>" required>

    <br><br>

    <label>Documento:</label>
    <input type="text" name="documento" value="<?= $proveedor['documento'] ?>" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" value="<?= $proveedor['telefono'] ?>" required>

    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" value="<?= $proveedor['correo'] ?>" required>

    <br><br>

    <label>Ciudad:</label>
    <select name="ciudad" required>
        <option value="2" <?= $proveedor['idCiudad'] == 2 ? 'selected' : '' ?>>Bogota</option>
        <option value="1" <?= $proveedor['idCiudad'] == 1 ? 'selected' : '' ?>>La Dorada</option>
        <option value="4" <?= $proveedor['idCiudad'] == 4 ? 'selected' : '' ?>>Manizales</option>
        <option value="3" <?= $proveedor['idCiudad'] == 3 ? 'selected' : '' ?>>Medellin</option>
    </select>

    <br><br>

    <button type="submit">Actualizar Proveedor</button>

</form>

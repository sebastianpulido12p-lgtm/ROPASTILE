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
    <input type="text" name="ciudad" value="<?= $proveedor['idCiudad'] ?>" required>
    <br><br>

    <button type="submit">Actualizar Proveedor</button>

</form>
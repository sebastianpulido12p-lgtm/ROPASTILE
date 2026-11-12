
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Proveedor</title>
</head>
<body>

<h1>Crear Proveedor</h1>

<form action="/proveedores/crear" method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" required>

    <br><br>

    <label>Documento:</label>
    <input type="text" name="documento" required>

    <br><br>

    <label>Teléfono:</label>
    <input type="text" name="telefono" required>

    <br><br>

    <label>Correo:</label>
    <input type="email" name="correo" required>

    <br><br>

    <label>Ciudad:</label>
    <select name="ciudad" required>
        <option value="">Seleccione una ciudad</option>
        <option value="Bogota">Bogota</option>
        <option value="La Dorada">La Dorada</option>
        <option value="Manizales">Manizales</option>
        <option value="Medellin">Medellin</option>
    </select>

    <br><br>

    <button type="submit">Guardar Proveedor</button>

</form>

</body>
</html>

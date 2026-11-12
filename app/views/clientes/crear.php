
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cliente</title>
</head>
<body>

    <h1>Crear Cliente</h1>

    <form action="/clientes/crear" method="POST">

        <label>Nombre:</label>
        <input type="text" name="nombre" required>

        <br><br>

        <label>Apellido:</label>
        <input type="text" name="apellido" required>

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

        <button type="submit">Guardar Cliente</button>

    </form>

</body>
</html>

```php
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Venta</title>
</head>
<body>

<h1>Crear Venta</h1>

<form action="" method="POST">

    <label>Fecha:</label>
    <input type="datetime-local" name="fecha" required>

    <br><br>

    <label>Cliente:</label>
    <input type="text" name="cliente" required>

    <br><br>

    <label>Tipo de Pago:</label>
    <input type="text" name="tipoPago" required>

    <br><br>

    <button type="submit">Guardar Venta</button>

</form>

</body>
</html>
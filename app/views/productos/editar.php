<h1>Actualizando Datos del Producto</h1>

<form action="/productos/actualizar" method="POST">

    <input type="hidden" name="id" value="<?= $producto['idProducto'] ?>">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?= $producto['nombre'] ?>">

    <br><br>

    <label for="descripcion">Descripción:</label>
    <input type="text" id="descripcion" name="descripcion" value="<?= $producto['descripcion'] ?>">

    <br><br>

    <label for="precio">Precio:</label>
    <input type="number" id="precio" name="precio" step="0.01" value="<?= $producto['precio'] ?>">

    <br><br>

    <label for="stock">Stock:</label>
    <input type="number" id="stock" name="stock" value="<?= $producto['stock'] ?>">

    <br><br>

    <label for="marca">ID de la marca:</label>
    <input type="number" id="marca" name="marca" value="<?= $producto['idMarca'] ?>">

    <br><br>

    <label for="tipoProducto">ID del tipo de producto:</label>
    <input type="number" id="tipoProducto" name="tipoProducto" value="<?= $producto['idTipoProducto'] ?>">

    <br><br>

    <label for="estado">Estado:</label>
    <input type="text" id="estado" name="estado" value="<?= $producto['estado'] ?>">

    <br><br>

    <button type="submit">Actualizar Producto</button>

</form>


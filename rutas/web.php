<?php

$rutas = [

    "GET" => [

        "/" => ["ProductoController", "index"],

        // PRODUCTOS
        "/productos" => ["ProductoController", "index"],
        "/productos/crear" => ["ProductoController", "crear"],
        "/productos/editar" => ["ProductoController", "editar"],
        "/productos/eliminar" => ["ProductoController", "eliminar"],

        // CLIENTES
        "/clientes" => ["ClienteController", "index"],
        "/clientes/crear" => ["ClienteController", "crear"],
        "/clientes/editar" => ["ClienteController", "editar"],
        "/clientes/eliminar" => ["ClienteController", "eliminar"],

        // PROVEEDORES
        "/proveedores" => ["ProveedorController", "index"],
        "/proveedores/crear" => ["ProveedorController", "crear"],
        "/proveedores/editar" => ["ProveedorController", "editar"],
        "/proveedores/eliminar" => ["ProveedorController", "eliminar"],

        // VENTAS
        "/ventas" => ["VentaController", "index"],
        "/ventas/crear" => ["VentaController", "crear"],
        "/ventas/editar" => ["VentaController", "editar"],

        // COMPRAS
        "/compras" => ["CompraController", "index"],
        "/compras/crear" => ["CompraController", "crear"],
        "/compras/editar" => ["CompraController", "editar"]

    ],

    "POST" => [

        // PRODUCTOS
        "/productos/crear" => ["ProductoController", "guardar"],
        "/productos/actualizar" => ["ProductoController", "actualizar"],

        // CLIENTES
        "/clientes/crear" => ["ClienteController", "guardar"],
        "/clientes/actualizar" => ["ClienteController", "actualizar"],

        // PROVEEDORES
        "/proveedores/crear" => ["ProveedorController", "guardar"],
        "/proveedores/actualizar" => ["ProveedorController", "actualizar"],

        // VENTAS
        "/ventas/crear" => ["VentaController", "guardar"],
        "/ventas/actualizar" => ["VentaController", "actualizar"],
        "/ventas/eliminar" => ["VentaController", "eliminar"],

        // COMPRAS
        "/compras/crear" => ["CompraController", "guardar"],
        "/compras/actualizar" => ["CompraController", "actualizar"],
        "/compras/eliminar" => ["CompraController", "eliminar"]

    ]

];

return $rutas;

?>

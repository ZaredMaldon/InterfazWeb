<?php
include_once "functions.php";
if (!isset($_POST["idmodelo"])) {
    exit("No hay id_producto");
}
agregarProductoAlCarrito($_POST["idmodelo"]);
header("Location: Producto.php");
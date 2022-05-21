<?php

include_once('db.php');

function obtenerProductosEnCarrito()
{
    $bd = conn();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sql = "SELECT modelo.idmodelo, modelo.nombre as nombre, modelo.precio as precio, modelo.imagen as imagen
     FROM modelo
     INNER JOIN carrito
     ON modelo.idmodelo = carrito.idmodelo
     WHERE carrito.idsesion = '$idSesion'";  
    $result = $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);
    return $result->fetch_All();
}

function quitarProductoDelCarrito($idProducto)
{
    $bd = conn();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sql = "DELETE FROM carrito WHERE idsesion = '$idSesion' AND idmodelo = $idProducto";
    return $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);
}

function obtenerProductos()
{
    $bd = conn();
    $sentencia = $bd->query("SELECT idmodelo, nombre, precio FROM modelo");
    return $sentencia->fetch_All();
}

function productoYaEstaEnCarrito($idmodelo)
{
    $ids = obtenerIdsDeProductosEnCarrito();

    if($ids == false){
        return false;
    }
    else{
        foreach ($ids as $id) {
            if ($id['IdModelo'] == $idmodelo) {
                return true;
            }        
        }
        return false;
    }
}

function obtenerIdsDeProductosEnCarrito()
{
    $bd = conn();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();   
    $sql = "SELECT IdModelo FROM carrito WHERE idsesion = '$idSesion'"; 
    $result = $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);

    if($result->num_rows > 0){
        while($row = $result->fetch_array()) { 
            $the_rows[] = $row; 
        }
            
        return $the_rows;
    }
    else{
        return false;
    } 
}

function agregarProductoAlCarrito($idProducto)
{
    $bd = conn();
    iniciarSesionSiNoEstaIniciada();
    $idSesion = session_id();
    $sql = "INSERT INTO carrito(IdSesion, IdModelo) VALUES ('$idSesion', $idProducto)";
    return $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);
}

function iniciarSesionSiNoEstaIniciada()
{
    if (session_status() !== PHP_SESSION_ACTIVE) {
        session_start();
    }
}

function eliminarProducto($id)
{
    $bd = conn();
    $sql = "DELETE FROM modelo WHERE id = $id";
    return $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);
}

function guardarProducto($nombre, $precio, $descripcion)
{
    $bd = conn();
    $sentencia = $bd->prepare("INSERT INTO productos(nombre, precio, descripcion) VALUES(?, ?, ?)");
    return $sentencia->execute([$nombre, $precio, $descripcion]);
}

function obtenerVariableDelEntorno($key)
{
    if (defined("_ENV_CACHE")) {
        $vars = _ENV_CACHE;
    } else {
        $file = "env.php";
        if (!file_exists($file)) {
            throw new Exception("El archivo de las variables de entorno ($file) no existe. Favor de crearlo");
        }
        $vars = parse_ini_file($file);
        define("_ENV_CACHE", $vars);
    }
    if (isset($vars[$key])) {
        return $vars[$key];
    } else {
        throw new Exception("La clave especificada (" . $key . ") no existe en el archivo de las variables de entorno");
    }
}


<?php
include_once('db.php');

//recibo todos los datos del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$conectar = conn();
$sql = "SELECT * FROM `usuario` WHERE `Usuario` = '$usuario' AND `Contraseña` = '$clave'";
$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

if($result->num_rows > 0){

    header("Status: 301 Moved Permanently");
    header("Location: index.php");
    exit;

}
else{

    header("Status: 301 Moved Permanently");
    header("Location: Inicio de sesion.html");
    exit;

}

?>
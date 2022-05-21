<?php
include_once('db.php');

//recibo todos los datos del formulario
$nombre = $_POST['nombre'];
$apPat = $_POST['apPat'];
$apMat = $_POST['apMat'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$conectar = conn();
$sql = "insert into usuario(nombre, apPat, apMat, edad, usuario, contraseña) values ('$nombre', '$apPat', '$apMat', '$edad', '$usuario', '$clave')";
$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

// header("Status: 301 Moved Permanently");
// header("Location: index.php");

exit;

?>
<?php
include_once('db.php');

//recibo todos los datos del formulario
$nombre = $_POST['nombre'];
$apPat = $_POST['apellidoP'];
$apMat = $_POST['apellidoM'];
$edad = $_POST['edad'];
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

echo "Los datos son los siguientes: <br>";
echo "$nombre,$apPat, $apMat, $edad, $usuario y $clave";

$conectar = conn();
$sql = "insert into usuario(nombre, apPat, apMat, edad, usuario, contraseña) values ('$nombres', '$apPat', '$apMat', '$edad', '$usuario', '$clave')";
$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

echo "$sql";


?>
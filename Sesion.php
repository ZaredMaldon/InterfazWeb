<?php
include_once('db.php');

//recibo todos los datos del formulario
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

echo "<br>Los datos son los siguientes: <br>";
echo "$usuario y $clave <br>";

$conectar = conn();
$sql = "SELECT * FROM `usuario` WHERE `Usuario` LIKE '$usuario' AND `Contraseña` LIKE '$clave'";
$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

if($result->num_rows > 0){
    echo "<br>Si existe<br>";
}
else{
    echo "<br>Contraseña o Usuario incorrecto<br>";
}

echo "$sql";

?>
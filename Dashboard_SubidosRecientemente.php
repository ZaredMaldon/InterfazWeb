<?php
Include_once('db.php');
//Variables
$json[]=array();




$conectar = conn();

$conectar = conn();
$sql = "Select * from Modelos order by fechaSubida desc limit 3;";
$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);


while($consulta=mysqli_fetch_array($result)){
    $json=array(
        'IdModelo'=>$consulta['IdModelo'],
        'IdUsuario'=>$consulta['IdUsuario'],
        'Precio'=>$consulta['Precio'],
        'Nombre'=>$consulta['Nombre'],
        'Fecha'=>$consulta['fechaSubida'],
        'Vistas'=>$consulta['Vistas'],
        'Imagen'=>$consulta['Imagen'],   
    );
}
$jsonstring=json_encode($json);

?>

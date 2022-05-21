<?php
//fetch.php
if(isset($_POST["id"]))
{
    include_once('db.php');

    $db = conn();
    $query = "Select nombre from usuario where idUsuario = ".$_POST["id"]." ;";
    $result = mysqli_query($db, $query);
 while($row = mysqli_fetch_array($result))
 {
  $data["nombre"] = $row["nombre"];
 }

 echo json_encode($data);
}
?>
<?php
//Configuracion necesaria para acceder a la data base.

function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "ppi";

    $conectar = mysql_connect($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;

}

?>
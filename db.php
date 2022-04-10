<?php
//Configuracion necesaria para acceder a la data base.

function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $passworddb = "";
    $dbname = "inteexpdb";

    $conectar = new mysqli($hostname, $usuariodb, $passworddb, $dbname);
    return $conectar;

}

?>
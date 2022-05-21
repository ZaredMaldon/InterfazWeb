<?php

if(isset($_POST['name'])&& !empty($_POST['msg']) && !empty ($_POST['email'])){
    $name=$_POST['name'];
    $asunto="Servicio de Asistencia";
    $msg=$_POST['msg'];
    $email=$_POST['email'];
    $header="From:zaredmaldonado@gmail.com"."\r\n";
    $header="Reply-To:juanlala02@hotmail.com"."\r\n";
    $header="X-Mailer: PHP/".phpversion();
    $mail=mail($email,$asunto,$msg,$header);
    if($mail){
        echo "<h4>¡Mail enviado Exitosamente!</h4>"
        
    }else{
        header("Status: 301 Moved Permanently");
        header("Location: index.php");
        echo "<h4>¡Mail NO enviado Exitosamente!</h4>"
    }
}
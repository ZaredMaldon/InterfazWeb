<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Inicio de Sesion</title>
    <link rel="icon" href="imagenes/icono.png">
    <link rel="stylesheet" href="Css/InicioSesion.css">
    <link rel="stylesheet" href="css/sweetalert2.css">

    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="container text-center" id="contenedor">
        <img src="imagenes/icono.png" class="img-thumbnail mx-auto d-block" id="logotipo">
        <h2>Login</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">

            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Contraseña" required>
            <input type="submit" value="Log in" name="Login" class="btn btn-dark" id = "tn">
            
        </form>
        <p style="color:rgb(235, 242, 250);">¿No tienes cuenta? Registrate <a href="Formulario de registro.html">Aquí</a></p>

    </div>
    
    <?php
    include_once('db.php');

    if(isset($_POST['Login'])){

        
        $usuario = $_POST['usuario'];
        $clave = $_POST['clave'];

        $conectar = conn();
        $sql = "SELECT * FROM `usuario` WHERE `Usuario` LIKE '$usuario' AND `Contraseña` LIKE '$clave'";
        $result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);

        if($result->num_rows > 0){

            header("Status: 301 Moved Permanently");
            header("Location: index.php");
            exit;

        }
        else{

            ?>
            <p class="container text-center" style="color:rgb(235, 50, 50);">Contraseña Incorecta</p>
            <?php

        }
        
    }  

    ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/sweetalert2.js"></script>
</body>
</html>
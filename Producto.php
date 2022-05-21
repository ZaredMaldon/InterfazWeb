<?php
include_once('db.php');

session_start();

if(isset($_SESSION['lastId'])){
    $idmodelo = $_SESSION['lastId'];

    $bd = conn();
    $sql = "SELECT idmodelo, nombre, imagen, precio FROM modelo WHERE idmodelo = $idmodelo";
    $result = $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);

    $producto=mysqli_fetch_array($result);

    $nombreM = $producto['nombre'];
    $imagen = $producto['imagen'];
    $precio = $producto['precio'];
    $id = $producto['idmodelo'];
}

if(isset($_POST['idmodelo'])){

    $idmodelo = $_POST['idmodelo'];

    $bd = conn();
    $sql = "SELECT idmodelo, nombre, imagen, precio FROM modelo WHERE idmodelo = $idmodelo";
    $result = $bd->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($bd), E_USER_ERROR);

    $producto=mysqli_fetch_array($result);

    $nombreM = $producto['nombre'];
    $imagen = $producto['imagen'];
    $precio = $producto['precio'];
    $id = $producto['idmodelo'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
    <link rel="icon" href="imagenes/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/Producto.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <header class="top">
        <div class="fixedArea">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 noPadding">
                    <div class="content-wrapper one">
                        <!-- Main Menu Start -->
                        <!-- Navbar-->
                        <header class="header">
                            <nav class="navbar navbar-default myNavBar active">
                                <div class="container">

                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-9" id="sizeC">

                                                <div class="col-md-7 col-sm-7 col-xs-7">
                                                    <a href="index.php"><img class="img-responsive logo "
                                                            src="imagenes/logo.png" alt="Archive3D" id="Logotipo" /></a>

                                                </div>



                                            </div>
                                            <div class="col-md-3 col-sm-3 col-xs-3">
                                                <button type="button" class="navbar-toggle collapsed"
                                                    data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                    aria-expanded="false">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                    <span class="icon-bar"></span>
                                                </button>
                                            </div>
                                        </div>

                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav navbar-right navBar">
                                            <li class="nav-item"><a href="index.php"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Inicio<span
                                                        class="sr-only">(current)</span></a></li>
                                            <?php

if(!isset($_SESSION['id'])){   
    ?>
                                            <li class="nav-item"><a href="Inicio de Sesion.php"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Login</a>
                                            </li>
                                            <li class="nav-item"><a href="Formulario de registro.html"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Register</a>
                                            </li>
                                            <?php
}
else{
    $nombre = $_SESSION['nombre'];
    echo '<li class="nav-item"><a href="Inicio de Sesion.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">'.$nombre.'</a></li>';
    ?>
                                            <li class="nav-item"><a href="logout.php"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Cerrar
                                                    Sesion</a></li>
                                            <?php
}
    ?>
                                            <li class="nav-item"><a href="Carrito.php"
                                                    class="nav-link text-uppercase font-weight-bold js-scroll-trigger"><img
                                                        src="imagenes/iconos/Carrito.png" /></a></li>

                                        </ul>
                                    </div>
                                </div>
                            </nav>
                        </header>
                        <!-- Main Menu End -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="Producto titleProduct">
                    <h2><?php echo $nombreM ?></h2>
                    <img class="Imagen" src="<?php echo $imagen ?>" alt="">
                </div>
            </div>
            <div class="col-md-4">
                <div class="DescripcionProducto Descripcion">
                    <h2 style="font-weight: bolder; font-size: 30px;">Precio</h2>
                    <h2>$<?php echo $precio ?></h2>
                    <span>by zaredmaldonado</span>
                </div>
            </div>
        </div>
        <div class="row">
            <?php              

include_once('functions.php');

if(isset($_SESSION['id'])){

<<<<<<< Updated upstream
=======
    ?>
            <script>
            console.log(<?php echo session_id(); ?>)
            </script>
            <?php

>>>>>>> Stashed changes
    if(productoYaEstaEnCarrito($idmodelo)){
        ?>
            <div class="row">
                <button type="submit" class="btn btn-dark">En carrito</button>
            </div>

            <?php    
    }
    else{
        ?>
            <form action="agregaCarrito.php" method="post">
                <input type="hidden" name="idmodelo" value="<?php echo $idmodelo ?>">
                <input type="submit" value="Agregar al carrito" class="btn btn-dark">
            </form>
            <?php   
    }   
}
else{
    ?>

            <div class="row">
                <button type="submit" class="btn btn-dark">Inicia sesion</button>
            </div>

            <?php    
}
    ?>

        </div>

    </div>



    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
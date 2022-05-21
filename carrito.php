<?php

include_once('functions.php');

session_start();

$productos = obtenerProductosEnCarrito();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
    <link rel="icon" href="imagenes/icono.png">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet"> 
    
   
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/Carrito.css">   
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
                          <nav class="navbar navbar-default myNavBar active" >
                              <div class="container">

                                  <!-- Brand and toggle get grouped for better mobile display -->
                                  <div class="navbar-header">
                                      <div class="row">
                                          <div class="col-md-9 col-sm-9 col-xs-9" id="sizeC">
                                             
                                                  <div class="col-md-7 col-sm-7 col-xs-7">
                                                      <a href="index.php"><img class="img-responsive logo " src="imagenes/logo.png" alt="Archive3D" id="Logotipo" /></a>
                                                      
                                                  </div>
                                             


                                          </div>
                                          <div class="col-md-3 col-sm-3 col-xs-3">
                                              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
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
                                          <li class="nav-item"><a href="index.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Inicio<span class="sr-only">(current)</span></a></li>
                                          <?php

if(!isset($_SESSION['id'])){   
    ?>
    <li class="nav-item"><a href="Inicio de Sesion.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Login</a></li>
    <li class="nav-item"><a href="Formulario de registro.html" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Register</a></li>
    <?php
}
else{
    $nombre = $_SESSION['nombre'];
    echo '<li class="nav-item"><a href="Inicio de Sesion.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">'.$nombre.'</a></li>';
    ?>
    <li class="nav-item"><a href="logout.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger">Cerrar Sesion</a></li>
    <?php
}


?>
                                          <li class="nav-item"><a href="carrito.php" class="nav-link text-uppercase font-weight-bold js-scroll-trigger"><img  src="imagenes/iconos/Carrito.png"/></a></li>
                                          
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
<section class="row" id="Carrito">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h2 id="TusProductosh2">Tus productos</h2>
                </div>

                <div class="container">
<?php

if($productos){

    $total = 0;
    foreach ($productos as $producto) {
    $total += $producto[2];
    ?>
                         <div class="row ProductoCarro">
    
                            <div class="col-md-12 noPadding Contenedorproducto">
                                <div class="col-lg-8 col-md-10 col-sm-1 PrecioContenedor">
                                    <h4 tipo="textos"><?php echo $producto[1] ?></h4>
                                    <img src="<?php echo $producto[3] ?>" class="Imagen2">   
        
                                </div> 
                                                    
                                <div class="col-lg-2 col-md-1 col-sm-1 PrecioContenedor">
                                    <h2 tipo="textos">Precio</h2>
                                    <span>$<?php echo number_format($producto[2], 2)?></span>
                                </div>
        
                            </div>                   
                         </div>
    <?php 
    } 

}
else{
    $total = 0;

    ?>
                         <div class="row ProductoCarro">
    
                            <div class="col-md-12 noPadding Contenedorproducto">
                                <div class="col-lg-8 col-md-10 col-sm-1 PrecioContenedor">
                                    <h4 tipo="textos">No hay ningun modelo en el carrito</h4>
        
                            </div>                   
                         </div>
    <?php 
}

?>
                     
    
                
                </div>
               
                
                
              
               
            </div>
            

        </div>
        
        

    </div>

</section>
<section class="row" id="Calculo">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-title">
                    <h3>Total: </h3>
                    <h1>$<?php echo number_format($total, 2) ?></h1>
                </div>
            </div>
        </div>

    </div>
</section>
   

    <script src="js/vendor/jquery-1.12.0.min.js"></script>
<<<<<<< Updated upstream
    <script src="js/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script src="js/ajax-mail.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/Scroll.js"></script>


=======
        <script src="js/jquery-easing/jquery.easing.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/parallax.min.js"></script>
        <script src="js/ajax-mail.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
      
>>>>>>> Stashed changes
</body>
</html>
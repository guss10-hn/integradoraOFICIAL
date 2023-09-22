<?php
  //Variable para implementar las alertas
  $entrar="";
  if ($_SERVER["REQUEST_METHOD"]=="POST")
   {
      $nombre=$_POST['nombre'];
      $apellido_pa=$_POST['apellido_pa'];
      $apellido_ma=$_POST['apellido_ma'];
      $edad=$_POST['edad'];
      $calle=$_POST['calle'];
      $fracc_col=$_POST['fracc_col'];
      $num_ext=$_POST['num_ext'];
      $cp=$_POST['cp'];
      $cel=$_POST['cel'];
      $correo=$_POST['correo'];
      $user=$_POST['user'];
      $pwd=$_POST['pwd'];
      $privilegio=$_POST['privilegio'];

    include_once('conexion.php');
    $consulta="insert into usuarios VALUES (NULL, '$nombre', '$apellido_pa', '$apellido_ma', '$edad','$calle', '$fracc_col', '$num_ext', '$cp' ,'$cel', '$correo', '$user', '$pwd', '$privilegio')";
    $resultado=mysqli_query($con,$consulta);
      if ($resultado)
      { 
        $entrar="registro";
      }
      else
      {
        $entrar="noregistro";
      }
   }
?>

<!doctype html>
<html lang="en-US">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro</title>
    <meta name="description" content="Unika - Responsive One Page HTML5 Template">
    <meta name="keywords" content="HTML5, Bootsrtrap, One Page, Responsive, Template, Portfolio" />
    <meta name="author" content="imransdesign.com">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Fonts  -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,500' rel='stylesheet' type='text/css'>
    <!-- Body font -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <!-- Navbar font -->

    <!-- Libs and Plugins CSS -->
    <link rel="stylesheet" href="inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="inc/owl-carousel/css/owl.theme.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/mobile.css">

    <!-- Skin CSS -->
    <link rel="stylesheet" href="css/skin/cool-gray.css">

</head>

<body data-spy="scroll" data-target="#main-navbar" class="body1">
    <div class="page-loader"></div> <!-- Display loading image while page loads -->
    <div class="body">

        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">

            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
                <!-- Classes: navbar-default, navbar-inverse, navbar-fixed-top, navbar-fixed-bottom, navbar-transparent. Note: If you use non-transparent navbar, set "height: 98px;" to #header -->

                <div class="container">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                      <a  href="index.php"> <img src="img/logo.png" alt="" width="260" height="75"></a>

                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li><a class="navbar__item page-scroll" href="login.php">Regresar</a></li>

                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->

        </header>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"> 

        <h1 class="text-off-white">_</h1>
        <br><br><br><br><br><br>
        <footer  id="login" >

            <div class="footer-top">
                <div class="container">
                    <div class="row wow bounceInLeft" data-wow-delay="0.1s">

                        <div class="page-header-wrapper">
                            <div class="container">
                                <div class="page-header text-center wow fadeInDown" data-wow-delay="0.1s">
                                    <h2 class="bl">registro de usuarios</h2>
                                    <div class="devider"></div>
                                    <p  class="bl">Crea una cuenta con base a lo que se pide</p>
                                </div>
                            </div>
                        </div>
                        <div class="centrado">
                            <div class="contact-form">
                                <form role="form">
                                    <div class="form-group">
                                        <input type="text" name="nombre" class="form-control input-lg"
                                            placeholder="Nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="apellido_pa" class="form-control input-lg" placeholder="Apellido Paterno"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text"name="apellido_ma" class="form-control input-lg" placeholder="Aellido Materno"
                                            required>
                                    </div>
                                
                                    <div class="form-group">
                                        <input type="text"name="edad" class="form-control input-lg"
                                            placeholder="Edad" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="calle" class="form-control input-lg"
                                            placeholder="Calle" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="fracc_col" class="form-control input-lg"
                                            placeholder="Fraccionamiento o Colonia" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="num_ext" class="form-control input-lg"
                                            placeholder="Numero Exterior" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="cp" class="form-control input-lg"
                                            placeholder="Codigo Postal" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="cel"class="form-control input-lg"
                                            placeholder="Numero de Telefono" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text"name="correo" class="form-control input-lg" placeholder="E-mail"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <input type="text" name="user"class="form-control input-lg" placeholder="Nombre de Usuario"
                                            required>
                                    </div>
                                    
                                    <div class="form-group">
                                        <p >Tu contraseña debe contener 8 caractéres, incluir mayusculas y minusculas y caractéres especiales</p><br>
                                        <input type="password" name="pwd" class="form-control input-lg"
                                            placeholder="Contraseña" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="hidden"name="privilegio" class="form-control input-lg"
                                            required value="estandar">
                                    </div>
                                    <button type="submit" class="boton-env" data-wow-delay="0.8s">Enviar</button>
                                    <br>
                                    <br><br>

                                </form>
                                
                            </div>
                        </div>
                        <!-- End team-->

                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div>
<br><br><br><br>
    <script src="inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="inc/animations/js/wow.min.js"></script>
    <script src="inc/waypoints.min.js"></script>
    <script src="inc/isotope.pkgd.min.js"></script>
    <script src="inc/classie.js"></script>
    <script src="inc/jquery.easing.min.js"></script>
    <script src="inc/jquery.counterup.min.js"></script>
    <script src="inc/smoothscroll.js"></script>

    <!-- Theme JS -->
    <script src="js/theme.js"></script>
</body>
</html>



<?php include_once("alertas.php")?>
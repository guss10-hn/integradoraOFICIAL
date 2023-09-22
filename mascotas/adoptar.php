<!doctype html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Adopta
    </title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
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
    <link rel="stylesheet" href="../inc/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../inc/animations/css/animate.min.css">
    <link rel="stylesheet" href="../inc/font-awesome/css/font-awesome.min.css"> <!-- Font Icons -->
    <link rel="stylesheet" href="../inc/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="../inc/owl-carousel/css/owl.theme.css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/mobile.css">
    <!-- Skin CSS -->
    <link rel="stylesheet" href="../css/skin/cool-gray.css">
</head>
<body data-spy="scroll" data-target="#main-navbar">
    <!-- <div class="page-loader"></div> Display loading image while page loads -->
    <div>
        <!--========== BEGIN HEADER ==========-->
        <header id="header" class="header-main">
            <!-- Begin Navbar -->
            <nav id="main-navbar" class="navbar navbar-fixed-top bg-primary" role="navigation">
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
                        <a  href="index.php"> <img src="../img/logo.png" alt="" width="260" height="75"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a class="navbar__item page-scroll" href="../adopta.php">Regresar</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
            </nav>
            <!-- End Navbar -->
        </header>
        <?php
                        include_once('../conexion.php');
                        $id_mascota = $_REQUEST['id_mascota'];
                        $consulta="select * from mascotas where id_mascota = '$id_mascota' ";
                        $resultado = mysqli_query($con, $consulta);
                        if (!$resultado) {
                            echo "No se pudo ejecutar con exito la consulta en la BD: ";
                            exit;
                        }
                        $fila = $resultado->fetch_assoc()
                        ?>
        <div class="container2">
            <div class="form-image">
            <img height="500px" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen']);?>">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1><?php echo $fila['nombre_mascota'];?></h1>
                            <h5>Información</h5>
                        </div>
                    </div>
                    <div class="input-group">
                    
                            <h4> 
                                Tipo de mascota: <?php echo $fila['tipo'];?> 
                    </h4>
                            <h4>Genero: <?php echo $fila['genero'];?></h4>
                            <h4>Color: <?php echo $fila['color'];?></h4>
                            <h4>Edad: <?php echo $fila['edad'];?></h4>
                            <!-- Acomodar bien, no deve de estar fuera del -->
                            

                    </div>
                    <?php
                        if ($fila['adoptado']==0) {
                    ?>
                    <div class="continue-button">
                        <button><a href="../cuestionario.php?id_mascota=<?php echo $fila['id_mascota']?>">Siguente</a></button>
                    </div>
                    <?php }else{
                    ?>
                        <br><br><h1>NO DISPONIBLE</h1>
                        <h6><?php echo $fila['nombre_mascota'];?> ya ha sido salvado(:</h6>
                    <?php 
                    }
                    ?>
                </form>
            </div>
        </div>
        <script src="../inc/jquery/jquery-1.11.1.min.js"></script>
    <script src="../inc/bootstrap/js/bootstrap.min.js"></script>
    <script src="../inc/owl-carousel/js/owl.carousel.min.js"></script>
    <script src="../inc/stellar/js/jquery.stellar.min.js"></script>
    <script src="../inc/animations/js/wow.min.js"></script>
    <script src="../inc/waypoints.min.js"></script>
    <script src="../inc/isotope.pkgd.min.js"></script>
    <script src="../inc/classie.js"></script>
    <script src="../inc/jquery.easing.min.js"></script>
    <script src="../inc/jquery.counterup.min.js"></script>
    <script src="../inc/smoothscroll.js"></script>

    <!-- Theme JS -->
    <script src="../js/theme.js"></script>
</body>
</html>
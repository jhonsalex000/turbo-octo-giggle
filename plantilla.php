
<!DOCTYPE html>
<html lang="en">
<head>
<title>Backend</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <!-- Favicon icon -->
    <link rel="icon" href="Vistas/assets/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="Vistas/assets/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="Vistas/assets/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="Vistas/assets/css/style.css">

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

 
<nav class="pcoded-navbar menu-light brand-lightblue icon-colored">
<?php  

include "modulos/menu.php";
?>
 </nav>

<header class="navbar pcoded-header navbar-expand-lg navbar-light header-lightblue headerpos-fixed">
<?php 
 include "modulos/header.php";
 ?>
</header> 
 <?php
  
  if(isset($_SESSION["Ingreso"]) && $_SESSION["Ingreso"] == true){
 
    echo '<div class="auth-wrapper">';

    if(isset($_GET["url"])){

      if($_GET["url"] == "inicio" || $_GET["url"] == "ingreso" || $_GET["url"] == "usuarios" || $_GET["url"] == "salir" || $_GET["url"] == "perfil" || $_GET["url"] == "slide"){

        include "modulos/".$_GET["url"].".php";

      }

    }else{

      
      include "modulos/inicio.php";
    }

    echo '</div>';

  }else{
  
  include "modulos/ingreso.php";
  }

  ?>
 <!-- [ chat user list ] start -->

    <!-- [ chat user list ] end -->

    <!-- [ chat message ] start -->
    <!-- [ chat message ] end -->
    
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          {{ config.version }}
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; {{ config.anio }} 
            <a href="{{ config.web }}" target="blank">Compañía</a>.
        </strong> Derechos reservados.
      </footer>


    <!-- Required Js -->
    <script src="Vistas/assets/js/vendor-all.min.js"></script>
    <script src="Vistas/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="Vistas/assets/js/pcoded.min.js"></script>
    <script>
 
</script>
</body>
</html>

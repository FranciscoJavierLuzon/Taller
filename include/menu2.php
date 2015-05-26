<?php
session_start();
$user = isset($_SESSION['usuario']) ? $_SESSION['clave'] : null ;
if ($user=="") {
    header("location: ../administrador/administrador.php");
  }else{
    include("../static/site_config.php");
    include("../static/clase_mysql.php");
    include("../static/conect_mysql.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="mnf" class="col-xs-12 col-md-12">

    <nav id="admin" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://127.0.0.1/ing_web_2015/taller/include/menu2.php">Administrador</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <?php include("menu3.php"); ?>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>
    </div>

    <div id="admin" class="container-fluid">
      <div class="row">
         <div id="menu_administrador" class="col-md-2">
          <ul class="nav nav-sidebar">
            <?php  
              $query="select * from menu_administrador";
              $result=mysql_query($query) or die("error".mysql_error());
              while ($row=mysql_fetch_array($result)) {
                if ($row["nivel"]==1 and $row["hijos"]==1) {
                  //$ide=$row["id"];
                  $ider=$row['nombre_menu'];
                  echo "<li><a href='http://127.0.0.1/ing_web_2015/taller/include/menu4.php?va=$ider'>".$row['nombre_menu']."</a></li>";
                }
              }
            ?>
          </ul>
        </div>
        <div id="img" class="col-md-9">
          <h1 class="page-header"><?php echo "Bienbenido ".$_SESSION['usuario'].""; ?></h1>
          <div class="col-md-8">
          <img id="img12" src="http://127.0.0.1/ing_web_2015/web_app4_05_05_2015/imagenes/image.jpg" width="70%">
          </div>
          <div class="col-md-4">
          <?php 
          $query="select * from administrador where  usuario='".$_SESSION['usuario']."'";
          $result=mysql_query($query) or die("error".mysql_error());
          while ($row=mysql_fetch_array($result)) {
              echo "Nombre: ".$row['nombre']."<br>";
              echo "Correo: ".$row['correo'];
          }
          ?>
          </div>
        </div>
      </div>
    </div>
      <footer class="footer">
        <p align="center">Diego Guevara</p>
        <p align="center">dfguevara1@hotmail.com</p>
        <p align="center">&copy; Universidad Tecnica particular de Loja 2015</p>
      </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../bootstrap/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../bootstrap/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

<?php
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="../bootstrap/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>

    <div class="container">

      <?php 
header('Content-Type: text/html; charset=ISO-8859-1');
include("../static/site_config.php");
include("../static/conect_mysql.php");

  if ($_GET["var"]=="bloques") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="nombre" placeholder="Id" required></td>
        </tr>
        <tr>
          <td><p>Nombre: </p></td>
          <td><input type="text" name="nombre" placeholder="Nombre" required></td>
        </tr>
        <tr>
          <td><p>Descripcion: </p></td>
          <td><input type="text" name="descripcion" placeholder="Descripcion"></td>
        </tr>
        <tr>
          <td><p>Posicio: </p></td>
          <td><input type="text" name="posicion" placeholder="Posicio" required></td>
        </tr>
        <tr>
          <td><p>Estado: </p></td>
          <td><input type="text" name="estado" placeholder="Estado" required></td>
        </tr>
        <tr>
          <td><p>Nombre Tabla: </p></td>
          <td><input type="text" name="nombretabla" placeholder="Nombre Tabla" required></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php 
  }
    if ($_GET["var"]=="menu") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Nombre:</p></td>
          <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
          <td><p>Estado:</p></td>
          <td><input type="text" name="estado"></td>
        </tr>
        <tr>
          <td><p>Posicion:</p></td>
          <td><input type="text" name="posicion"></td>
        </tr>
        <tr>
          <td><p>Nivel:</p></td>
          <td><input type="text" name="nivel"></td>
        </tr>
        <tr>
          <td><p>Url:</p></td>
          <td><input type="text" name="url"></td>
        </tr>
        <tr>
          <td><p>Padre:</p></td>
          <td><input type="text" name="padre"></td>
        </tr>
        <tr>
          <td><p>Hijo:</p></td>
          <td><input type="text" name="hijo"></td>
        </tr>
        <tr>
          <td><p>NomTabla:</p></td>
          <td><input type="text" name="nombretabla"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php
  }
  if ($_GET["var"]=="contenidos") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Id de Usuario:</p></td>
          <td><input type="text" name="id1"></td>
        </tr>
        <tr>
          <td><p>Titulo:</p></td>
          <td><input type="text" name="titulo"></td>
        </tr>
        <tr>
          <td><p>Fecha:</p></td>
          <td><input type="text" name="fecha"></td>
        </tr>
        <tr>
          <td><p>Estado:</p></td>
          <td><input type="text" name="estado"></td>
        </tr>
        <tr>
          <td><p>Descripcion:</p></td>
          <td><input type="text" name="descripcion"></td>
        </tr>
        <tr>
          <td><p>NomTabla:</p></td>
          <td><input type="text" name="nombretabla"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php
  }
  if ($_GET["var"]=="administrador") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Nombre:</p></td>
          <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
          <td><p>Usuario:</p></td>
          <td><input type="text" name="usuario"></td>
        </tr>
        <tr>
          <td><p>Clave:</p></td>
          <td><input type="text" name="clave"></td>
        </tr>
        <tr>
          <td><p>Correo:</p></td>
          <td><input type="text" name="correo"></td>
        </tr>
        <tr>
          <td><p>NomTabla:</p></td>
          <td><input type="text" name="nombretabla"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php
  }
  if ($_GET["var"]=="configuracion") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Nombre Sitio:</p></td>
          <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
          <td><p>Logo:</p></td>
          <td><input type="text" name="logo"></td>
        </tr>
        <tr>
          <td><p>Correo:</p></td>
          <td><input type="text" name="correo"></td>
        </tr>
        <tr>
          <td><p>Hompage:</p></td>
          <td><input type="text" name="homePage"></td>
        </tr>
        <tr>
          <td><p>NomTabla:</p></td>
          <td><input type="text" name="nombretabla"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php
  }
  if ($_GET["var"]=="menu_administrador") {
    $var1=$_GET["var"];
?>
    <center>
    <div class="estilo_caja">
    <p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
    <form action="ingresado.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Nombre menu:</p></td>
          <td><input type="text" name="nombre"></td>
        </tr>
        <tr>
          <td><p>Link:</p></td>
          <td><input type="text" name="link"></td>
        </tr>
        <tr>
          <td><p>Nivel:</p></td>
          <td><input type="text" name="nivel"></td>
        </tr>
        <tr>
          <td><p>Hijos:</p></td>
          <td><input type="text" name="hijos"></td>
        </tr>
        <tr>
          <td><p>NomTabla:</p></td>
          <td><input type="text" name="nombretabla"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    <div>
    </center>
<?php
  }
 ?>

    </div> <!-- /container -->

  </body>
</html>
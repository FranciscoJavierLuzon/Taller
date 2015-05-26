
<?php 
//header('Content-Type: text/html; charset=ISO-8859-1');
include ("static/site_config.php"); 
include ("static/conect_mysql.php");

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

    <title>Administrador</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="http://127.0.0.1/ing_web_2015/taller/index.php">Home</a></li>
            <li role="presentation"><a href="http://127.0.0.1/ing_web_2015/taller/administrador/administrador.php">Admin</a></li>
            <li role="presentation"><a href="#">About</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Bienbenidos al Taller</h3>
      </div>

      <div class="jumbotron">
        <center>
    <div class="estilo_caja">
    <form action="usuario.php" method="post" name="form">
      <table>
        <tr>
          <td><p>Id: </p></td>
          <td><input type="hidden" name="id"></td>
        </tr>
        <tr>
          <td><p>Nombre: </p></td>
          <td><input type="text" name="nombre" placeholder="Nombres" required></td>
        </tr>
        <tr>
          <td><p>Apellido:</p></td>
          <td><input type="text" name="apellido" placeholder="Apellidos" required></td>
        </tr>
        <tr>
          <td><p>Direccion:</p></td>
          <td><input type="text" name="direccion" placeholder="Direccion" required></td>
        </tr>
        <tr>
          <td><p>Correo:</p></td>
          <td><input type="text" name="correo" placeholder="correo" required></td>
        </tr>
        <tr>
          <td><p>Cedula:</p></td>
          <td><input type="number" name="cedula" placeholder="Cedula" required></td>
        </tr>
        <tr>
          <td><p>Institución:</p></td>
          <td>
            <select name="istitucion">
              <option value="UTPL">UTPL</option>
              <option value="Nacional">Nacional</option>
              <option value="Espol">Espol</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><p>Tipo de Inscrito:</p></td>
          <td>
            <select name="inscrito">
              <option value="Estudiante">Estudiante</option>
              <option value="Expositor">Expositor</option>
              <option value="Organizador">Organizador</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><p>Curso:</p></td>
          <td>
            <select name="curso">
              <option value="Inovacion">Inovacion</option>
              <option value="Desarrollo">Desarrollo</option>
              <option value="Emprendimiento">Emprendimiento</option>
            </select>
          </td>
        </tr>
        <tr>
          <td><p>Conferencia:</p></td>
          <td>
            <select name="conferencia">
              <option value="Conferencia1">Conferencia1</option>
              <option value="Conferencia2">Conferencia2</option>
              <option value="Conferencia3">Conferencia3</option>
            </select>
          </td>
        </tr>
        <tr>
          <td></td>
          <td><input align="right" type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
        </tr>
      </table>    
    </form>
    </div>
    </center>
      </div>

      <footer class="footer">
        <p align="center">Diego Guevara | &copy; Universidad Técnica particular de Loja 2015</p>
      </footer>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

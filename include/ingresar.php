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
          <a class="navbar-brand" href="http://127.0.0.1/ing_web_2015/web_app4_05_05_2015/include/menu2.php">Administrador</a>
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
        <div id="img1" class="col-md-8">
        	<?php 
	if ($_GET["var"]=="institucion") {
		$var1=$_GET["var"];
?>
		<center>
		<div class="estilo_caja">
		<p class="estilo_titulo"><h1><?php echo $var1; ?></h1></p>
		<form action="ingresado.php" method="post" name="form">
			<table>
				<tr>
					<td><p>Id:</p></td>
					<td><input type="hidden" name="id"></td>
				</tr>
				<tr>
					<td><p>Nombre:</p></td>
					<td><input type="text" name="nombre" placeholder="Nombre" required></td>
				</tr>
				<tr>
					<td><p>Nombre Tabla:</p></td>
					<td><input type="hidden" name="nombretabla" value="<?php echo $var1; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
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
					<td><input type="hidden" name="id_menu" ></td>
				</tr>
				<tr>
					<td><p>Nombre:</p></td>
					<td><input type="text" name="nombre" placeholder="Nombre del menu" required></td>
				</tr>
				<tr>
					<td><p>Estado:</p></td>
					<td>
						<select name="estado">
							<option value="1">1</option>
							<option value="0">0</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>Posicio:</p></td>
					<td>
						<select name="posicion">
							<option value="arriba">arriba</option>
							<option value="abajo">abajo</option>
							<option value="izquierda">izquierda</option>
							<option value="arriba">derecha</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>Nivel:</p></td>
					<td>
						<select name="nivel">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>Url:</p></td>
					<td><textarea name="url"></textarea></td>
				</tr>
				<tr>
					<td><p>Padre:</p></td>
					<td>
						<select name="padre">
							<option value="0">no tiene</option>
							<?php 
								$query="select * from menu where estado='1' and padre='0' and hijos='1'";
              					$result=mysql_query($query) or die("error".mysql_error());
              					while ($row=mysql_fetch_array($result)) {
              				?>
              						<option value="<?php echo $row["id_menu"]; ?>"><?php echo $row["nombre_menu"]; ?></option>
              				<?php
              					}
							 ?>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>Hijos:</p></td>
					<td>
						<select name="hijo">
							<option value="0">0</option>
							<option value="1">1</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>NomTabla:</p></td>
					<td><input type="hidden" name="nombretabla" value="<?php echo $var1; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
		</center>
<?php
	}
	if ($_GET["var"]=="curso") {
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
					<td><p>Tipo:</p></td>
					<td><input type="text" name="tipo" ></td>
				</tr>
				<tr>
					<td><p>Costo:</p></td>
					<td><input type="number" name="costo" placeholder="Titulo del contenido" required></td>
				</tr>
				<tr>
					<td><p>nomTabla:</p></td>
					<td><input type="date" name="nombretabla" placeholder="Fecha de hoy"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
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
					<td><input type="text" name="nombre" placeholder="Nombre" required></td>
				</tr>
				<tr>
					<td><p>Usuario:</p></td>
					<td><input type="text" name="usuario" placeholder="Usuario" required></td>
				</tr>
				<tr>
					<td><p>Clave:</p></td>
					<td><input type="text" name="clave" placeholder="Clave" required></td>
				</tr>
				<tr>
					<td><p>Correo:</p></td>
					<td><textarea name="correo"></textarea></td>
				</tr>
				<tr>
					<td><p>NomTabla:</p></td>
					<td><input type="hidden" name="nombretabla" value="<?php echo $var1; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
		</center>
<?php
	}
	if ($_GET["var"]=="conferencia") {
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
					<td><input type="text" name="nombre" placeholder="Nombre Sitio" required></td>
				</tr>
				<tr>
					<td><p>Lugar:</p></td>
					<td><input type="text" name="lugar" placeholder="Logo"></td>
				</tr>
				<tr>
					<td><p>Hora:</p></td>
					<td><input type="text" name="hora" placeholder="Logo"></td>
				</tr>
				<tr>
					<td><p>nomTabla:</p></td>
					<td><input type="text" name="nombretabla" placeholder="Hompage" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
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
					<td><input type="text" name="nombre" placeholder="Nombre menu" required></td>
				</tr>
				<tr>
					<td><p>Link:</p></td>
					<td><textarea name="link"></textarea></td>
				</tr>
				<tr>
					<td><p>Nivel:</p></td>
					<td>
						<select name="nivel">
							<option value="1">1</option>
							<option value="2">2</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>Hijos:</p></td>
					<td>
						<select name="hijos">
							<option value="1">1</option>
							<option value="0">0</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><p>NomTabla:</p></td>
					<td><input type="hidden" name="nombretabla" value="<?php echo $var1; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
		</center>
<?php
	}
	if ($_GET["var"]=="tipo_inscrito") {
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
					<td><p>Tipo:</p></td>
					<td><input type="text" name="tipo" placeholder="Nombre menu" required></td>
				</tr>
				<tr>
					<td><p>Precio:</p></td>
					<td><input type="number" name="precio" placeholder="Nombre menu" required></td>
				</tr>
				<tr>
				<tr>
					<td><p>NomTabla:</p></td>
					<td><input type="hidden" name="nombretabla" value="<?php echo $var1; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" id="boton" name="btn_enviar" value="Enviar"></td>
				</tr>
			</table>		
		</form>
		</div>
		</center>
<?php
	}
 ?>
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
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

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/estilos.css">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/js/ie-emulation-modes-warning.js"></script>
    <!-- Dependencias --> 
    <link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.3.0/build/menu/assets/skins/sam/menu.css">
    <script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
    <script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/container/container_core-min.js"></script>
 
    <!-- Código para menús -->
    <script type="text/javascript" src="http://yui.yahooapis.com/2.3.0/build/menu/menu-min.js"></script>
<?php
header('Content-Type: text/html; charset=ISO-8859-1');
class clase_mysql{
	var $baseDatos;
	var $servidor;
	var $usuario;
	var $clave;
	/*identiicadores de conexion y consulta*/
	var $conexio_ID;
	var $consulta_ID;
	/*numero de error y error de texto*/
	var $Errno=0;
	var $Error="";
	function clase_mysqul(){
		//constructor
	}
	function conectar($db,$host,$user,$pass){
		if ($db!="") $this->baseDatos=$db;
		if ($host!="") $this->servidor=$host;
		if ($user!="") $this->usuario=$user;
		if ($pass!="") $this->clave=$pass;
		/*conectamos al servidor*/
		$this->conexio_ID=mysql_connect($this->servidor,$this->usuario,$this->clave);
		if (!$this->conexio_ID) {
			$this->Error="conexion fallida";
			return 0;
		}
		//seleccionamos la base de datos
		if (!mysql_select_db($this->baseDatos,$this->conexio_ID)) {
			$this->Error="Imposible abrir".$this->baseDatos;
		}
		/*si todo sale bien*/
		return $this->conexio_ID;
	}
	//Ejecuta cualquier consulta
	function consulta($sql=""){
		if ($sql=="") {
			$this->Error="no hay ningun sql";
			return 0;
		}
		//ejecutamos la consulta
		$this->consulta_ID=mysql_query($sql,$this->conexio_ID);
		if (!$this->consulta_ID) {
			$this->Error=mysql_errno();
			$this->Error=mysql_error();
		}
		//si todo sale bien
		return $this->consulta_ID;
	}
	//devuelve el numero de campos de la consulta
	function numcampos(){
		return @mysql_num_fields($this->consulta_ID);
	}
	//devuelve el numero de registros
	function numregistros(){
		return mysql_num_rows($this->consulta_ID);
	}
	//devuelve el nombre de un campo de la consulta
	function nombrecampo($numcampo){
		return mysql_field_name($this->consulta_ID, $numcampo);
	}
	//muestra los resultados de la consulta
	function verconsulta(){
		echo"<table align='center' whidth=100% aligen='center' border=0>";
		echo "<tr id='color4'>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			echo "<td id='color'>".$this->nombrecampo($i)."</td>";
		}
		echo "<td id='color'></td>";
		echo "</tr>";
		while (@$row=mysql_fetch_array($this->consulta_ID)) {
			echo "<tr id='color1'>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td id='color2'>".$row[$i]."</td>";
			}
			$nombreTabla=end( $row );
			echo "<td id='color3'>";
?>
			<li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Opciones</a>
                <ul class="dropdown-menu" role="menu">
                	<li><a href=<?php echo "../include/actualizar.php?id=$row[0]&act=2&var=$nombreTabla"; ?>>Actualizar</a></li>
   					<li><a id="borrar" href=<?php echo "../include/menu4.php?id=$row[0]&act=1&va=$nombreTabla"; ?>>Borrar</a></li>
                </ul>
              </li>
<?php
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	function verconsultausuario(){
		echo"<table align='center' whidth=100% aligen='center' border=0>";
		echo "<tr id='color4'>";
		for ($i=0; $i < $this->numcampos() ; $i++) { 
			echo "<td id='color'>".$this->nombrecampo($i)."</td>";
		}
		echo "<td id='color'></td>";
		echo "</tr>";
		while (@$row=mysql_fetch_array($this->consulta_ID)) {
			echo "<tr id='color1'>";
			for ($i=0; $i < $this->numcampos(); $i++) { 
				echo "<td id='color2'>".$row[$i]."</td>";
			}
			echo "</td>";
			echo "</tr>";
		}
		echo "</table>";
	}
	/*function consulta_lista(){
		while ($row=mysql_fetch_array($this->consulta_ID)) {
			for ($i=0; $i < $this->numcampos; $i++) { 
				$row[$i];
			}
			return $row;
		}
	}*/
	function consulta_lista(){
		$posicion=0;
		$vector="";
		while ($row = mysql_fetch_array($this->consulta_ID)) {
			for ($i=0; $i < $this->numcampos(); $i++) { 
					$vector[$posicion]=$row[$i];
					$posicion++;
			}				
		}
		return $vector;
	}
}
 
 ?>
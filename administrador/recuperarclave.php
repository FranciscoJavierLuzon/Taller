<?php 
include("../static/site_config.php");
include("../static/conect_mysql.php");
$usuario1 = $_POST['usuario'];
$query="select * from administrador where usuario='".$usuario1."'";
$result=mysql_query($query) or die("error".mysql_error());
while ($row=mysql_fetch_array($result)) {
	if ($row["usuario"]==$usuario1) {
		echo "<script>alert('Su clave es:  ".$row["clave"]."')</script>";
  		echo "<script>location.href='administrador.php'</script>";
	}else{
  echo "<script>alert('Usted no consta en la base de datos')</script>";
  echo "<script>location.href='administrador.php'</script>";
	}
}
?>
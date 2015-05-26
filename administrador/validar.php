<?php 
include("../static/site_config.php");
include("../static/conect_mysql.php");
//extract($_POST);
$usuario1 = $_POST['usuario'];
$clave1 = $_POST['clave'];
$query="select * from administrador where usuario='".$usuario1."' and clave='".$clave1."' ";
$result=mysql_query($query) or die("error".mysql_error());
if ($row=mysql_fetch_array($result)) {
	//echo $row[3];
  session_start();//Inicializamos sesion
  $_SESSION['usuario']=$row[2];
  $_SESSION['clave']=$row[3];
  //$_SESSION['nombre']=$row[1];
  //echo $_SESSION['clave'];
  echo "<script>location.href='../include/menu2.php'</script>";
}else{
  echo "<script>alert('usuario y contraseña ingresados incorrectos')</script>";
  echo "<script>location.href='administrador.php'</script>";
}
?>
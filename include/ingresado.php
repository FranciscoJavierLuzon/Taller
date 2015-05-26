<?php 
 session_start();
$user = isset($_SESSION['usuario']) ? $_SESSION['clave'] : null ;
if ($user=="") {
    header("location: ../administrador/administrador.php");
  }else{
  	include("../static/site_config.php");
include("../static/clase_mysql.php");
$var5=$_POST['nombretabla'];
extract($_POST);
$miconexion=new clase_mysql;
$miconexion->conectar($db_name, $db_host, $db_user, $db_pasword);
if ($var5=="institucion") {
	//insert into datosnoticias values ('','$nombre', '$descripcion', '$imagen')
	$miconexion->consulta("insert into institucion values ('', '$nombre', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=institucion'</script>";
	//$miconexion->verconsulta();
}
if ($var5=="menu") {
	$miconexion->consulta("insert into menu values ('', '$nombre', '$estado', '$posicion', '$nivel', '$url', '$padre', '$hijo', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=menu'</script>";
}
if ($var5=="curso") {
	$miconexion->consulta("insert into curso values ('', '$tipo', '$costo', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=curso'</script>";
}
if ($var5=="administrador") {
	$miconexion->consulta("insert into administrador values ('', '$nombre', '$usuario', '$clave', '$correo', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=administrador'</script>";
}
if ($var5=="conferencia") {
	$miconexion->consulta("insert into conferencia values ('', '$nombre', '$lugar', '$hora', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=conferencia'</script>";
}
if ($var5=="menu_administrador") {
	$miconexion->consulta("insert into menu_administrador values ('', '$nombre', '$link', '$nivel', '$hijos', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=menu_administrador'</script>";
}
if ($var5=="tipo_inscrito") {
	$miconexion->consulta("insert into tipo_inscrito values ('', '$tipo', '$precio', '$nombretabla')");
	echo "<script>location.href='menu4.php?va=tipo_inscrito'</script>";
}
  	}
?>
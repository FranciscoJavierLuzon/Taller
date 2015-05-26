<?php
include("../static/site_config.php");
include("../static/clase_mysql.php");
extract($_POST);
$var5=$_POST['nombretabla'];
$miconexion=new clase_mysql;
$miconexion->conectar($db_name, $db_host, $db_user, $db_pasword);
if ($var5=="bloques") {
	$miconexion->consulta("update bloques set id='$id', nombre='$nombre', descripcion='$descripcion', posicion='$posicion', estado='$estado', tipoContenido='$tipocontenido', nombreTabla='$nombretabla' where id='$id'");
	echo "<script>location.href='menu4.php?va=bloques'</script>";
}
if ($var5=="menu") {
	$miconexion->consulta("update menu set id_menu='$id', nombre_menu='$nombre', estado='$estado', posicion='$posicion', nivel='$nivel', url='$url', padre='$padre', hijos='$hijo', nombreTabla='$nombretabla' where id_menu='$id'");
	echo "<script>location.href='menu4.php?va=menu'</script>";
}
if ($var5=="contenidos") {
	$miconexion->consulta("update contenidos set ID='$id', id_usuario='$id1', titulo='$titulo', fecha_p='$fecha', estado='$estado', descripcion='$descripcion', nombreTabla='$nombretabla' where ID='$id'");
	echo "<script>location.href='menu4.php?va=contenidos'</script>";
}
if ($var5=="administrador") {
	$miconexion->consulta("update administrador set id='$id', nombre='$nombre', usuario='$usuario', clave='$clave', correo='$correo', nombreTabla='$nombretabla' where id='$id'");
	echo "<script>location.href='menu4.php?va=administrador'</script>";
}
if ($var5=="configuracion") {
	$miconexion->consulta("update configuracion set id='$id', nombre_sitio='$nombre', logo='$logo', correo='$correo', home_page='$homePage', nombreTabla='$nombretabla' where id='$id'");
	echo "<script>location.href='menu4.php?va=configuracion'</script>";
}
if ($var5=="menu_administrador") {
	$miconexion->consulta("update menu_administrador set id='$id', nombre_menu='$nombre', link='$link', nivel='$nivel', hijos='$hijos', nombreTabla='$nombretabla' where id='$id'");
	echo "<script>location.href='menu4.php?va=menu_administrador'</script>";
}
?>
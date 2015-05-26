<?php 
  include("static/site_config.php");
  include("static/clase_mysql.php");
  extract($_POST);
  $miconexion=new clase_mysql;
  $miconexion->conectar($db_name, $db_host, $db_user, $db_pasword);
  $miconexion->consulta("insert into persona values ('', '$nombre', '$apellido', '$direccion', '$correo', '$cedula', '$istitucion', '$inscrito', '$curso', '$conferencia')");
  echo "<script>location.href='index.php'</script>";
 ?>
<?php 
include("site_config.php");

$link=mysql_connect($db_host,$db_user,$db_pasword);
mysql_select_db($db_name, $link);
if (!$link) {
	echo "eroor de coneccion a la base de datos";
}
mysql_select_db($db_name,$link);
?>
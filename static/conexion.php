<?php
//extract($_GET);
$var1=$_GET["var"];
//echo $var1;
include ("site_config.php"); 
include("conect_mysql.php");
header('Content-Type: text/html; charset=ISO-8859-1');
$query="select * from enlaces where id_menu=$var1";
$result=mysql_query($query) or die("error".mysql_error());
while ($row=mysql_fetch_array($result)) {
  echo "".$row['url']."<br>";
}
?>
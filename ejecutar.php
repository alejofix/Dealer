<?php

session_start();
$mensaje=$_POST['mensaje'];
$alias = $_SESSION['login'];
$ip=$_SERVER['REMOTE_ADDR'];
//$fecha=date("H-i-s");
$fecha=date("D-H:i");
if($alias!="" and $mensaje!="") {
mysql_connect("localhost","root","cocacola0");
mysql_select_db("sistemas");
mysql_query("insert into mensajes(alias,mensaje,ip,fecha) values('$alias','$mensaje','$ip','$fecha')");
$conteo=mysql_query("select count(*) from mensajes group by fecha");
$primero=mysql_query("select min(id) from mensajes");
$repri=mysql_result($primero,0);
$registros=mysql_num_rows($conteo);
if($registros>150) {
mysql_query("delete from mensajes where id=$repri");
}
}
header("Location:user.php");
?>

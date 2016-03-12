<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="alejo_fix@hotmail.com">
    <title>Dealer</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animate.css" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">
    <!-- <script type="text/javascript">alert('lo que quieras');</script> -->

</head>
<body data-spy="scroll">
<div class="container">
			<ul id="gn-menu" class="gn-menu-main">
				<li class="gn-trigger">
					<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
					<nav class="gn-menu-wrapper">
						<div class="gn-scroller">
							<ul class="gn-menu">
								
								<li>
                                    <a href="login.php" class="gn-icon gn-icon-cog">Iniciar</a>
                                </li>
								<li>
									<a href="inicio.php" class="gn-icon gn-icon-archive">Registrarse</a>
								</li>
                                <li>
									<a href="logout.php" class="gn-icon gn-icon-download">Cerrar sesión</a>
								</li>
							</ul>
						</div><!-- /gn-scroller -->
					</nav>
				</li>
				<li><a href="index.html">DEALER</a></li>
                <li></li>
			</ul>
	</div>
	<!-- Section: intro -->
    <section id="contact" class="home-section text-center">
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
<?php
session_start();
include("config.php");
mysql_connect($datos[0],$datos[1],$datos[2]);
mysql_select_db($datos[3]);
$bd = "SELECT banned FROM usuarios WHERE login='".$_SESSION['login']."'";
$rank = "SELECT rango FROM usuarios WHERE login='".$_SESSION['login']."'";
$res = mysql_query($rank);
$rango = mysql_fetch_array($res);
$result = mysql_query($bd);
$ban = mysql_fetch_array($result);
if($ban["banned"] == 0){
if(!isset($_SESSION)){
header("Location:login.php");
} else {
//echo "";
//echo "Bienvenido :<strong>";
//echo $_SESSION["nombre"]." ".$_SESSION["apellidos"]."<br>";
//echo "</strong> nick : <strong> ";
//echo $_SESSION["login"];
//echo "</strong><br>";
echo "<a href='logout.php'>Cerrar Sesion</a>";
echo "";
}
$sql = "UPDATE usuarios SET estado=1 WHERE login='".$_SESSION['login']."'";
mysql_query($sql);
?>
<table width="400" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<td width="400"><iframe src="mensajes.php" width="444" height="290" scrolling="yes"></iframe></td>
</tr>
<tr>
<td align="center"><form id="form1" name="form1" method="post" action="ejecutar.php">
<label></label>
<label></label>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<label>
<?php $alias = $_SESSION['login']; echo $alias." dice :"; ?>
</label>
</td>
<td>Mensaje<br>
		<script>
		contenido_textarea = ""
		num_caracteres_permitidos = 140
		
		function valida_longitud(){
			num_caracteres = document.forms[0].mensaje.value.length 

	   if (num_caracteres > num_caracteres_permitidos){ 
		  document.forms[0].mensaje.value = contenido_textarea 
	   }else{ 
		  contenido_textarea = document.forms[0].mensaje.value    
	   } 

	   if (num_caracteres >= num_caracteres_permitidos){ 
		  document.forms[0].caracteres.style.color="#ff0000"; 
	   }else{ 
		  document.forms[0].caracteres.style.color="#000000"; 
	   } 

	   cuenta() 
	} 
	function cuenta(){ 
	   document.forms[0].caracteres.value=document.forms[0].mensaje.value.length 
	} 
		
		</script>
	<textarea name="mensaje" cols="40" rows="2" onKeyDown="valida_longitud()" onKeyUp="valida_longitud()"></textarea>
	<!--<br> <input type="text" name=caracteres size=4><br><br>-->
	<input class="btn btn-skin scroll" type="submit" name="submit" value="Enviar">
</td>
</tr>
</table>
</form></td>
</tr>
</table>
<?php
if($rango['rango'] >= 5){
echo "Panel Administrativo.<br>";
echo "Que deseas realizar?<br>";
?>
<i>Recuerda escribir todo con exactitud.<br></i>
<form method="post">
<select name="sel">
<option selected>Elejir</option>
<option>Banear una cuenta</option>
<option>Dar rango</option>
<option>Cambiar mensaje de bienvenida</option>
</select><br>
Nick :<input type="text" name="nick" size="10"><br>
Valor :<input type="text" name="valor" size="10"><br>
<input type="submit" value="Realizar"><br>
<?php
$nick = $_POST['nick'];
$valor = $_POST['valor'];
$sel = $_POST['sel'];
switch($sel){
case("Banear una cuenta"):
$sql = "UPDATE usuarios SET banned='".$valor."' WHERE login='".$nick."'";
mysql_query($sql);
echo "El usuario ".$nick." ah sido baneado con exito.";
break;
case("Dar rango"):
$sql = "UPDATE usuarios SET rango='".$valor."' WHERE login='".$nick."'";
mysql_query($sql);
echo "El usuario ".$nick." se le ah asignado nivel ".$valor;
break;
case("Cambiar mensaje de bienvenida"):
$sql = "UPDATE bienvenida SET mensaje='".$valor."'"; 
mysql_query($sql);
echo "Mensaje de bienvenida cambiado a <font color='green'>".$valor."</font>.";
break;
default:
echo "Selecciona porfavor";
}
echo "</form>";
}
?>
<?php
}else{
    echo "La cuenta ah sido baneada por motivos de seguridad.<a href='inicio.php'>Regresar</a>";
}



?>
            </div>
			
	
        </div>
    </div>	

		</div>
	</section>
	<!-- /Section:  -->
	<!-- /Section: intro -->

    <!-- Core JavaScript Files -->
   
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/classie.js"></script>
	<script src="js/gnmenu.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	<script src="js/stellar.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.js"></script>

</body>

</html>







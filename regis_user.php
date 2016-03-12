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
include("config.php");
$nombre = htmlspecialchars(trim($_POST['nombre']));
$apell = htmlspecialchars(trim($_POST['apellidos']));
$login = htmlspecialchars(trim($_POST['login']));
$pass1 = trim($_POST['pass1']);
$pass2 = trim($_POST['pass2']);
$email = htmlspecialchars(trim($_POST['email']));
$link = mysql_connect($datos[0],$datos[1],$datos[2]);
$query = sprintf("SELECT login FROM usuarios WHERE usuarios.login='%s'",
mysql_real_escape_string($login));
$result = mysql_db_query($datos[3],$query,$link);
if(mysql_num_rows($result)){
    echo "usuario ya existente, por favor intentalo de nuevo.";
} else {
mysql_free_result($result);
if($pass1 != $pass2){
echo "Las contraseñas deben de coincidir<br> Por favor intentarlo de nuevo ";
} else {
$pass1 = sha1(md5($pass1));
$query = sprintf("INSERT INTO usuarios (nombre, apellidos, login, password, email) VALUES ('%s','%s','%s','%s','%s')",
mysql_real_escape_string($nombre) , mysql_real_escape_string($apell),
mysql_real_escape_string($login) , mysql_real_escape_string($pass1),
mysql_real_escape_string($email));
$result = mysql_db_query($datos[3],$query,$link);
if(mysql_affected_rows()){
echo "usuario introducido correctamente.<br>";
echo "<a href='login.php'><h4>Iniciar Sesi&oacute;n</h4></a>";
} else {
echo "Error introduciendo el usuario";
}
}
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


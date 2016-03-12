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
session_start();
include("config.php");
$login = htmlspecialchars(trim($_POST['login']));
$pass = sha1(md5(trim($_POST['pass'])));
$link = mysql_connect($datos[0],$datos[1],$datos[2]);
$query = sprintf("SELECT nombre,apellidos,login,password,email FROM usuarios WHERE login='%s'and password='%s'",
mysql_real_escape_string($login), mysql_real_escape_string($pass));
$result = mysql_db_query($datos[3],$query,$link);
if(mysql_num_rows($result)){
$array = mysql_fetch_array($result);
$_SESSION["login"] = $array["login"];
$_SESSION["nombre"] = $array["nombre"];
$_SESSION["apellidos"] = $array["apellidos"];
$_SESSION["email"] = $array["email"];
header("Location:user.php");
} else {
echo "Contraseña y/o Login Errados <br> <a href='login.php'><h4>Ingresar Nuevamente</h4></a>";

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


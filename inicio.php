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
		<div class="section-heading">
					<h4>Bienvenido </h4>
		</div>
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
                <form id="contact-form" method="POST" action="regis_user.php">
                <div class="row">
                    <div class="col-md-12">
					    <div class="form-group">
                            <label for="nombre">
                                Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre y Apellido" required="required" />
                        </div>
						<div class="form-group">
                            <label for="apellidos">
                                Móvil</label>
                            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="# Móvil" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="login">
                                Login</label>
                            <input type="text" class="form-control" id="login" name="login" placeholder="NickName chat" required="required" />
                        </div>
						<div class="form-group">
                            <label for="pass1">
                                Contraseña</label>
                            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Contraseña" required="required" />
                        </div>
						<div class="form-group">
                            <label for="pass2">
                                Re-Contraseña</label>
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder="Confirmar Contraseña" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Dirección de Correo Electrónico</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email"  placeholder="Email" required="required" /></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Regístrate</button>
                    </div>
                </div>
                </form>
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

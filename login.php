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
					<h4>Iniciar </h4>
		</div>
		<div class="container">

    <div class="row">
        <div class="col-lg-8 col-md-offset-2">
            <div class="boxed-grey">
<?php
session_start();
if(isset($SESSION)){
header("Location:usuarios.php");
} else {
?>
                     <form action="inicio_sesion.php" method="post">   
						<div class="form-group">
          
                            <div class="input-group">
                                <span class="input-group-addon"><span class="#">Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                                </span>
                                <input type="text" class="form-control" name="login" placeholder="NickName chat" required="required" /></div>
                        </div>
						<div class="form-group">
              
                            <div class="input-group">
                                <span class="input-group-addon"><span class="#">Contraseña</span>
                                </span>
                                <input type="password" name="pass" class="form-control" placeholder="Contraseña" required="required" /></div>
                        </div>
						<div class="col-md-4">
                        <button type="submit" value="Ingresar" class="btn btn-skin scroll" id="btnContactUs">
                            Ingresar</button>
						</div>
					</form>
<?php
}
?>
	<label><br /><a href="inicio.php">Desea registrarse?</a></label>		
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







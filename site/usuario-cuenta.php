<!doctype html>
<!--
Site Name: Woow
Site URI: http://woow.com.uy
Version: 2.0
Design Date: May 24 - Aug 2 | 2012
Coding Date: Aug 3 - Sep 17 | 2012
Design: IUGO | http://iugo.com.uy - @iugo_uruguay
HTML/CSS, jQuery: IUGO | http://iugo.com.uy - @iugo_uruguay
Based on CSS Framework: Bootstrap | http://twitter.github.com/bootstrap/
--> 

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es-UY"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="es-UY"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="es-UY"><![endif]-->

<!--[if gt IE 8]><!-->
<html class="no-js" lang="es-UY">
<!--<![endif]-->


<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title>Amigos Referidos | Woow!</title>

	<meta name="description" content="Amigos Referidos | Woow!" />
	<meta name="author" content="Woow | http://www.woow.com.uy" />
	<meta name="keywords" content="" /> 
	<meta name="robots" content="all" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

	<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/style.css">
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<!--[if IE]><link href="css/ie.css" rel="stylesheet"><![endif]-->
	<!--[if lt IE 9]><link href="css/ie8-7.css" rel="stylesheet"><![endif]-->
	<!--[if IE 7]><link href="css/ie7.css" rel="stylesheet"><![endif]-->


<!--| ================================================================================================================================================ |-->

</head>


<body>

<?php include("menu-provisorio.php"); ?>

<?php include("header.php"); ?>


<div class="container">

<div class="main_wrapper"> <!--| main + footer |-->

<div class="main"> <!--| main + footer2 |-->



<!--| LIBRETA
====================================================================================================================================================== |-->

<div class="content">

<div class="usuario-wrapper">
	
	<div class="usuario-blue">
	    <div class="usuario-blue-left tela volumen"></div>
	    <div class="usuario-blue-right tela volumen"></div>
	</div>

	<div class="usuario-menu-back">
		<div class="usuario-menu-back-item">
			<h4><a href="usuario-cuenta.php"><i class="usuario-menu-back-icon icon-cuenta"></i>Mi Cuenta</a></h4>
		</div>
		<div class="usuario-menu-back-item">
			<h4><a href="usuario-pedidos.php"><i class="usuario-menu-back-icon icon-pedidos"></i>Mis Pedidos</a></h4>
		</div>
		<div class="usuario-menu-back-item">
			<h4><a href="usuario-amigos.php"><i class="usuario-menu-back-icon icon-amigos"></i>Amigos</a></h4>
		</div>
		<div class="usuario-menu-back-item">
			<h4><a href="usuario-libreta.php"><i class="usuario-menu-back-icon icon-direcciones"></i>Direcciones</a></h4>
		</div>
	</div>



	<!--| CUENTA - BODY
	========================================================================================================================= |-->

	<div class="usuario paper volumen">


		<!--| TITLE
		================================================================================= |-->

		<div class="usuario-title">
			<div class="triangle"></div>
			<h3>Mi Cuenta<i class="usuario-icon icon-top-cuenta"></i></h3>
		</div>


		<!--| BODY
		================================================================================= |-->

		<div class="usuario-body">


			<div class="usuario-cuenta-top">

			<!--| CÉDULA DE IDENTIDAD (?)
			============================================================= |-->

				<div class="usuario-cuenta-cedula">
					<div class="usuario-cuenta-avatar-nombre">
						<div class="usuario-cuenta-avatar"><img src="img/samples/john.jpg" align="left" width="94" height="94" alt="John Lennon" /></div>
						<h4 class="usuario-cuenta-nombre">John<br>Lennon</h4>
					</div>
					<div class="usuario-cuenta-rows">
						<div class="usuario-cuenta-row usuario-cuenta-row-fecha"><i class="usuario-icon cuenta-cumple"></i><p>Nací el: <b class="usuario-cedula-data">09/10/1940</b></p></div>
						<div class="usuario-cuenta-row usuario-cuenta-row-cel"><i class="usuario-icon cuenta-cel"></i><p>Celular: <b class="usuario-cedula-data">099589345</b></p></div>
						<div class="usuario-cuenta-row usuario-cuenta-row-sexo"><p>Sexo: <i class="cuenta-hombre"></i></p></div>
					</div>
                    <div class="usuario-cuenta-rows">
						<div class="usuario-cuenta-row usuario-cuenta-row-lugar"><i class="usuario-icon cuenta-luegar"></i><p>Vivo en: <b class="usuario-cedula-data">Woolton, Liverpool</b></p></div>
                    </div>
					<div class="usuario-cuenta-rows">
						<div class="usuario-cuenta-row usuario-cuenta-row-correo"><i class="usuario-icon cuenta-correo"></i><p>Email: <b class="usuario-cedula-data"><a href="john@thebeatles.com">john@thebeatles.com</a></b></p></div>
						<div class="usuario-cuenta-row usuario-cuenta-row-ci"><i class="usuario-icon cuenta-ci"></i><p>CI: <b class="usuario-cedula-data">4356458-3</b></p></div>
					</div>
					<div class="usuario-cuenta-rows">
						<div class="usuario-cuenta-row usuario-cuenta-row-pass"><i class="usuario-icon cuenta-pass"></i><p>Contraseña: <b class="usuario-cedula-data">&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;&#8226;</p></b></div>
						<div class="usuario-cedula-boton"><a href="#" class="cedula-editar" rel="tooltip" title="Editá tus datos"><i class="usuario-cedula-editar"></i><span class="none">Editar</span></a></div>
					</div>
				</div>



			<!--| DIRECCIONES + AMIGOS
			============================================================= |-->

				<div class="usuario-cuenta-direcciones-amigos">

					<div class="usuario-cuenta-direcciones">
						<div class="usuario-cuenta-title-1">
							<div class="usuario-pedidos-triangle"></div>
							<h3>Mis últimas direcciones</h3>
						</div>
						<ul class="usuario-cuenta-list">
							<li><i class="usuario-icon-small usuario-cuenta-lugarazul"></i>Casa</li>
							<li><i class="usuario-icon-small usuario-cuenta-lugarazul"></i>Estudio</li>
						</ul>
						<p class="ver"><a href="usuario-libreta.php">Ver todos</a></p>
					</div>

					<div class="usuario-cuenta-amigos">
						<div class="usuario-cuenta-title-1">
							<div class="usuario-pedidos-triangle"></div>
							<h3>Amigos Referidos</h3>
						</div>
						<ul class="usuario-cuenta-list">
							<li><i class="usuario-icon-small usuario-cuenta-amigos"></i>Paul McCartney</li>
							<li><i class="usuario-icon-small usuario-cuenta-amigos"></i>Ringo Starr</li>
						</ul>
						<p class="ver"><a href="usuario-amigos.php">Ver todos</a></p>
					</div>

				</div>

			<!--| ======================================================= |-->

			</div> <!--"usuario-cuenta-top"-->


			<div class="usuario-cuenta-bot">

			<!--| OPCIONES + ACTIVIDADES
			============================================================= |-->

				<div class="usuario-cuenta-opciones-actividades">

					<div class="usuario-cuenta-opciones">
						<div class="usuario-cuenta-title-2">
							<div class="usuario-pedidos-triangle"></div>
							<h3>Opciones</h3>
						</div>
						<ul class="usuario-cuenta-list">
							<li><div class="usuario-check"><input type="checkbox"></div>Notificaciones por Correo</li>
							<li><div class="usuario-check"><input type="checkbox"></div>Notificaciones por SMS</li>
							<li><div class="usuario-check"><input type="checkbox"></div>Conectarme con Twitter</li>
							<li><div class="usuario-check"><input type="checkbox"></div>Conectarme con Facebook</li>
						</ul>
						<div class="boton usuario-cuenta-boton"><a href="#">Guardar</a></div>
					</div>

					<div class="usuario-cuenta-actividades">
						<div class="usuario-cuenta-title-2">
							<div class="usuario-pedidos-triangle"></div>
							<h3>Actividades</h3>
						</div>
						<ul class="usuario-cuenta-list">
							<li>Compraste un cupón para 2</li>
							<li>Paul McCartney es tu nuevo amigo Referido</li>
                            <li>Conectado con Facebook</li>
                            <li>Notificaciones por SMS</li>
						</ul>
						<!--<p class="ver"><a href="#">Ver todos</a></p>-->
					</div>

				</div>



			<!--| ÚLTIMOS PEDIDOS
			============================================================= |-->

				<div class="usuario-cuenta-pedidos">
					<div class="usuario-cuenta-title-1">
							<div class="usuario-pedidos-triangle"></div>
							<h3>Mis últimos Pedidos</h3>
						</div>
					<ul class="usuario-cuenta-list">
						<li class="pedidos">
							<div class="usuario-cuenta-pedido-img"><img src="img/samples/sample.jpg" width="120" height="60"></div>
							<div class="usuario-cuenta-pedido-data">
								<p class="usuario-cuenta-data">Disfrutá del mejor sushi para dos al mejor precio</p>
								<p class="ver-pedido"><a href="#">Ver Oferta</a></p>
							</div>
						</li>
						<li class="pedidos">
							<div class="usuario-cuenta-pedido-img"><img src="img/samples/sample.jpg" width="120" height="60"></div>
							<div class="usuario-cuenta-pedido-data">
								<p class="usuario-cuenta-data">Disfrutá del mejor sushi para dos al mejor precio</p>
								<p class="ver-pedido"><a href="#">Ver Oferta</a></p>
							</div>
						</li>
						<li class="pedidos">
							<div class="usuario-cuenta-pedido-img"><img src="img/samples/sample.jpg" width="120" height="60"></div>
							<div class="usuario-cuenta-pedido-data">
								<p class="usuario-cuenta-data">Disfrutá del mejor sushi para dos al mejor precio</p>
								<p class="ver-pedido"><a href="#">Ver Oferta</a></p>
							</div>
						</li>
                        <li class="pedidos">
							<div class="usuario-cuenta-pedido-img"><img src="img/samples/sample.jpg" width="120" height="60"></div>
							<div class="usuario-cuenta-pedido-data">
								<p class="usuario-cuenta-data">Disfrutá del mejor sushi para dos al mejor precio</p>
								<p class="ver-pedido"><a href="#">Ver Oferta</a></p>
							</div>
						</li>
					</ul>
					<p class="ver"><a href="#">Ver todos</a></p>
				</div>

			<!--| ======================================================= |-->

			</div> <!--"usuario-cuenta-top"-->

		</div> <!--"usuario-body"-->


		<!--| =========================================================================== |-->


		<div class="usuario-line"></div>

	</div> <!--"usuario"-->



	<!--| MENU
	========================================================================================================================= |-->

		<div id="usuario-cuenta" class="usuario-menu">
			<h4><a href="usuario-cuenta.php"><i class="usuario-menu-icon icon-cuenta"></i>Mi Cuenta</a></h4>
		</div> <!--"usuario-menu"-->

	<!--| =================================================================================================================== |-->




</div> <!--"usuario-wrapper"-->


<!--| ================================================================================================================================================ |-->



</div> <!--"content"-->

	<?php include("footer.php"); ?>

</body>

	<?php include("scripts.php"); ?>




</html>

<!--| ===================================================================================================================================| iugo.com.uy |-->

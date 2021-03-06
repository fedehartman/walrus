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



	<!--| AMIGOS - BODY
	========================================================================================================================= |-->

	<div class="usuario paper volumen">


		<!--| TITLE
		================================================================================= |-->

		<div class="usuario-title">
			<div class="triangle"></div>
			<h3>Amigos Referidos<i class="usuario-icon icon-top-amigos"></i></h3>
		</div>


		<!--| BODY
		================================================================================= |-->

		<div class="usuario-body">


			<!--| TOP
			============================================================= |-->
        
			<article class="usuario-amigos-top">
				<p><b class="usuario-azul">Recomendanos</b> y te regalamos <b class="usuario-azul">un cupón por $100</b> por cada nuevo usuario que traigas a <b class="usuario-azul">wóÒw</b>. Podés utilizar el cupón en tu próxima compra en wóÒw!</p>
				<p>Para eso, <b class="usuario-azul">compartí</b> este &uarr; link con tus amigos. Hacé <b class="usuario-azul">clic</b> para copiarlo:</p>
				<form>
					<fieldset>
						<div class="input-prepend usuario-amigos-form-margin">
							<span class="add-on"><i class="icon-link"></i></span><input class="usuario-amigos" id="prependedInput" type="text" value="https://www.woow.com.uy/auth/register/index/d612fd5aac840aeb8da33cedd9ea6c4e">
						</div>
					</fieldset>
				</form>
				<p>Estos son los amigos que ya se registraron gracias a <b class="usuario-azul">tu link</b>:</p>
			</article>


			<!--| TABLA
			============================================================= |-->
            
			<div class="usuario-amigos-tabla">
				<table border="0" cellpadding="0" class="usuario-amigos-table">
					<tr>
						<td width="148px" height="28px" align="right">Nombre</td>
						<td width="148px" height="28px">Apellido</td>
						<td width="308px" height="28px"><a href="mailto:correo@correo.com">correo@correo.com</a></td>
						<td width="18px"  height="28px"><i class="usuario-amigos-check"></i></td>
					</tr>
					<tr>
						<td width="148px" height="28px" align="right">Nombre</td>
						<td width="148px" height="28px">Apellido</td>
						<td width="308px" height="28px"><a href="mailto:correo@correo.com">correo@correo.com</a></td>
						<td width="18px"  height="28px"><i class="usuario-amigos-check"></i></td>
					</tr>
					<tr>
						<td width="148px" height="28px" align="right">Nombre</td>
						<td width="148px" height="28px">Apellido</td>
						<td width="308px" height="28px"><a href="mailto:correo@correo.com">correo@correo.com</a></td>
						<td width="18px"  height="28px"><i class="usuario-amigos-check"></i></td>
					</tr>
					<tr>
						<td width="148px" height="28px" align="right">Nombre</td>
						<td width="148px" height="28px">Apellido</td>
						<td width="308px" height="28px"><a href="mailto:correo@correo.com">correo@correo.com</a></td>
						<td width="18px"  height="28px"><i class="usuario-amigos-check"></i></td>
					</tr>
					<tr>
						<td width="148px" height="28px" align="right">Nombre</td>
						<td width="148px" height="28px">Apellido</td>
						<td width="308px" height="28px"><a href="mailto:correo@correo.com">correo@correo.com</a></td>
						<td width="18px"  height="28px"><i class="usuario-amigos-check"></i></td>
					</tr>
				</table>
			</div>


			<!--| BOTTOM
			============================================================= |-->
        
			<article class="usuario-amigos-bot">
				<div class="usuario-amigos-col">
					<h4>¿Cómo funciona?</h4>
						<p>Cada vez que un amigo que invites realice su primera compra (dentro del período de validez) se acreditarán $100 de descuento para tu próxima compra.</p>
					<h4>¿Qué es el período de validez?</h4>
						<p>Luego de que tu amigo se registre hay un período de 3 días para que efectúe su primer compra y tu ganes el descuento, pasado ese periodo la invitación caduca.</p>
				</div>
				<div class="usuario-amigos-col">
					<h4>¿Cuánto descuento tengo acumulado hasta ahora?</h4>
						<p>Cuando tengas un descuento que aun no consumiste podrás ver en esta página el monto del mismo.</p>
					<h4>¿Cuándo puedo consumir mi descuento?</h4>
						<p>La totalidad del descuento generado se consumirá en tu próxima compra, incluso cuando el monto del descuento supere el monto de la compra</p>
				</div>
			</article>
            
			<!--| ======================================================= |-->

        </div> <!--"usuario-body"-->


		<!--| =========================================================================== |-->


		<div class="usuario-line"></div>

	</div> <!--"usuario"-->

	<!--| MENU
	========================================================================================================================= |-->

		<div id="usuario-amigos" class="usuario-menu">
			<h4><a href="usuario-amigos.php"><i class="usuario-menu-icon icon-amigos"></i>Amigos</a></h4>
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

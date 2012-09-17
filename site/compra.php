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

	<title>Compra | Woow!</title>

	<meta name="description" content="Compra | Woow!" />
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

<?php include("header.php"); ?>


<div class="container">

<div class="main_wrapper"> <!--| main + footer |-->

<div class="main"> <!--| main + footer2 |-->



<!--| COMPRA
====================================================================================================================================================== |-->

<div class="content">



<!--| TICKET
========================================================================================================================= |-->

<div id="compra-ticket">
<div class="compra-ticket-body paper volumen">

	<figure class="img"><img src="img/samples/sample.jpg" width="330" height="165"></figure>

	<div class="detalles">

		<div class="papertitle"><div class="triangle"></div><h4>Lo que vas a comprar</h4><i class="icon-info-sign"></i></div>

		<div class="opa">
		<div class="column-left">
			<article class="doce-pts">
				<p>Sushi para 2 al mejor precio</p>
				<p>Roll de vegetales al wok, 8 piezas + 1 Philadelphia roll de 8 piezas (salmón, queso philadelphia y palta) + 1 Ebi roll de 8 piezas (langostino, queso philadelphia y ciboulette) + 4 Niguiris</p>
			</article>
		</div>

		<div class="column-right">
			<table border="0" cellpadding="0" class="tablita">
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Precio: </b></strong></td>
						<td width="" height="28px" style="text-align: right"><strong><u>U$S</u>298</strong></td>
						<td width="" height="28px" align="right" class="cantidad" ><strong><b class="p-azul">Cantidad</b></strong></td>
						<td width="" height="28px" class="select">
							<select class="compra-ticket-select">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Subtotal: </b></strong></td>
						<td width="" height="28px"><strong><u>U$S</u>42298</strong></td>
					</tr>
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Total: </b></strong></td>
						<td width="" height="28px"><strong><u>U$S</u>52025</strong></td>
					</tr>
			</table>
		</div> <!--"column-right"-->
</div>
	</div> <!--"detalles"-->

</div> <!--"compra-ticket-body"-->
<div class="compra-ticket-piolin"></div>
</div> <!--"compra-ticket"-->



<!--| FACTURA
========================================================================================================================= |-->

<div id="compra-factura">
<div class="compa-factura-agujeritos"></div>
<div class="compra-factura-body">



<!--| IZQUIERDA
===================================================================================================== |-->

<div class="compra-factura-izquierda">

	<div class="compra-title"><div class="compra-title-circle">1</div><h3>Ingresá con tu cuenta</h3><i class="compra-title-icon compra-keys"></i></div>

	<div class="compra-login-form">
		<form>
			<fieldset>
				<div class="input-prepend">
					<span class="add-on"><i class="icon-envelope"></i></span><input class="compra-login-email" id="prependedInput" size="16" type="text" placeholder="Email:">
				</div>
				<div class="input-prepend left">
					<span class="add-on"><i class="icon-lock"></i></span><input class="compra-login-pass" id="prependedInput" size="16" type="text" placeholder="Contraseña:">
				</div>
				<div class="boton boton-compra-login right"><a href="#">Ingresar</a></div>
				<label class="checkbox"><input type="checkbox" value="">No cerrar sesión</label>
				<p class="olvide"><a href="#">Olvidé mi contraseña</a></p>
			</fieldset>
		</form>
	</div>

</div> <!--"compra-factura-izquierda"-->



<!--| DERECHA
===================================================================================================== |-->

<div class="compra-factura-derecha" style="">

	<div class="compra-title"><div class="compra-title-circle">2</div><h3>Formas de pago</h3><i class="compra-title-icon compra-tarjeta"></i></div>
    
    <table border="0" cellpadding="0" class="tablita">
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-visa"><span class="none">Visa</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>Visa Uruguay</strong> - Pago Online</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-master"><span class="none">MasterCard</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>MasterCard</strong> - Pago Online</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-oca"><span class="none">OcaCard</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>OcaCard</strong> - Pago Online</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-santander"><span class="none">Santander</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>Santander</strong> - Banca Móvil</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-debito"><span class="none">Débito</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>Débito Bancario</strong> - Pago Online</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
		<tr>
			<td width="135px" height="44px" align="right"><div class="compra-abitab"><span class="none">Abitab</span></div></td>
			<td width="305px" height="44px"><input type="radio" class="compra-tarjetas"><div class="compra-tarjetas-texto"><strong>Abitab</strong> - Call Center</div></td>
			<td width="70px" height="44px" align="right" class="cantidad" ><a href="#" class="compra-tarjetas-info">Más Info</a></td>
		</tr>
	</table>
    
    <div style="clear:both"></div>
    
    <div class="compra-title"><div class="compra-title-circle">3</div><h3>Detalles de tu compra</h3><i class="compra-title-icon compra-compra"></i></div>


			<table border="0" cellpadding="0" class="tablita">
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Precio: </b></strong></td>
						<td width="" height="28px" style="text-align: right"><strong><u>U$S</u>298</strong></td>
						<td width="" height="28px" align="right" class="cantidad"></td>
						<td width="" height="28px" class="select">
						<!--	<select class="compra-ticket-select">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>-->
						</td>
					</tr>
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Subtotal: </b></strong></td>
						<td width="" height="28px"><strong><u>U$S</u>42298</strong></td>
					</td>
					<tr>
						<td width="65px" height="24px" align="right"><strong><b class="p-azul">Total: </b></strong></td>
						<td width="" height="28px"><strong><u>U$S</u>52025</strong></td>
					</tr>
			</table>
		
                  <div class="boton compra-confirmar right"><a href="#">Confirmar Compra</a></div>


</div> <!--"compra-factura-derecha"-->

<!--| =============================================================================================== |-->



</div> <!--"compra-factura-body"-->
</div> <!--"compra-factura"-->

<!--| =================================================================================================================== |-->

</div> <!--"content"-->

	<?php include("footer.php"); ?>

</body>

	<?php include("scripts.php"); ?>




</html>

<!--| ===================================================================================================================================| iugo.com.uy |-->

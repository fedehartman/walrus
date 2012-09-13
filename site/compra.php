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

	<title>Woow | Compra</title>

	<meta name="description" content="Woow | Compra" />
	<meta name="author" content="Woow | http://www.woow.com.uy" />
	<meta name="keywords" content="" /> 
	<meta name="robots" content="all" /> 
	<meta name="viewport" content="width=device-width">

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
<div class="compra-ticket-body paper">

	<figure class="img"><img src="img/samples/sample.jpg" width="330" height="165"></figure>

	<div class="detalles">

		<div class="papertitle"><div class="triangle"></div><h4>Detalles</h4><i class="icon-info-sign"></i></div>

		<div class="column-left">
			<article class="doce-pts">
				<p>Sushi para 2 al mejor precio</p>
				<p>Roll de vegetales al wok, 8 piezas + 1 Philadelphia roll de 8 piezas (salmón, queso philadelphia y palta) + 1 Ebi roll de 8 piezas (langostino, queso philadelphia y ciboulette) + 4 Niguiris</p>
			</article>
		</div>

		<div class="column-right">
			<div class="tablita">
				<div class="tablita-tr">
					<div class="tablita-td-l-iz">
						<p><b class="referencia"><strong>Cantidad: </strong></b></p>
						<div class="compra-ticket-select">
							<select class="compra-ticket-select">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
					</div>
					<div class="tablita-td"><p><strong><b class="p-azul">Precio: </b>$15045</strong></p></div>
				</div>
				<div class="tablita-tr">
					<div class="tablita-td"><p><strong><b class="p-azul">Subtotal: </b>$15045</strong></p></div>
				</div>
				<div class="tablita-tr">
					<div class="tablita-td"><p><strong><b class="p-azul">Precio Final: </b><b class="blackpaper">$15045</b></strong></p></div>
				</div>
			</div> <!--"tablita"-->
		</div> <!--"column-right"-->

	</div> <!--"detalles"-->

</div> <!--"compra-ticket-body"-->
<div class="compra-ticket-piolin"></div>
</div> <!--"compra-ticket"-->



<!--| FACTURA
========================================================================================================================= |-->

<div id="compra-factura paper">

</div> <!--"compra-factura"-->



<!--| =================================================================================================================== |-->

</div> <!--"content"-->

	<?php include("footer.php"); ?>

</body>

	<?php include("scripts.php"); ?>




</html>

<!--| ===================================================================================================================================| iugo.com.uy |-->

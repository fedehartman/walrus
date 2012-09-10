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

	<title>Woow</title>

	<meta name="description" content="Woow | Store" />
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



<!--| LIBRETA
====================================================================================================================================================== |-->

<div class="content">

<div class="usuario-wrapper">
	
	<div class="usuario-blue">
	    <div class="usuario-blue-left blue"></div>
	    <div class="usuario-blue-right blue"></div>
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



	<!--| MI CUENTA
	========================================================================================================================= |-->
    
	<div class="usuario paper">
		<div class="usuario-title">
			<div class="triangle"></div>
			<h3>Amigos Referidos<i class="usuario-icon icon-top-amigos"></i></h3>
		</div>
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

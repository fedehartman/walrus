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

	<title>Woow | Mis Pedidos</title>

	<meta name="description" content="Woow | Mis Pedidos" />
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



<!--| MIS PEDIDOS
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



	<!--| MIS PEDIDOS - BODY
	========================================================================================================================= |-->

	<div class="usuario paper">


		<!--| TITLE
		================================================================================= |-->

		<div class="usuario-title">
			<div class="triangle"></div>
			<h3>Mis Pedidos<i class="usuario-icon icon-top-pedidos"></i></h3>
		</div>


		<!--| BODY
		================================================================================= |-->

		<div class="usuario-body body-pedidos">
			<div class="usuario-pedidos-items">


			<!--| ITEM
			============================================================ |-->

				<div class="usuario-pedidos-item">

					<div class="usuario-pedidos-title">
						<div class="usuario-pedidos-triangle"></div>
						<h3>Disfruta del mejor sushi para dos al mejor precio<i class="usuario-icon-small usuario-pedidos-title"></i></h3>
					</div>

					<div class="usuario-pedidos-body">

						<div class="usuario-pedidos-img"><img src="img/samples/sample.jpg" width="210" height="105"></div>

						<div class="usuario-pedidos-columna1">
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-check"></i><p class="cupon-listo">Cupón Listo</p></div>
                            <!--<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-uncheck"></i><p class="cupon-nolisto">Cupón no está listo</p></div>-->
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-descargar"></i><p><a href="#">Descargar Cupón</a></p></div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-stars">
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star"></i>
									<i class="usuario-icon-small usuario-star"></i>
								</div>
								<p>Calificar</p>
							</div>
							<div class="usuario-pedidos-rows">
								<div class="usuario-pedidos-row-small"><i class="usuario-icon-small usuario-ver"></i><p><a href="#">Ver</a></p></div>
								<div class="usuario-pedidos-row-small-archivar"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Archivar</a></p></div>
							</div>
						</div>

						<div class="usuario-pedidos-columna2">
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2113548894</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Fecha:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2012-05-08</p></div>
							</div>
								<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Método de Pago:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>Contado</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Total Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p class="usuarios-pedidos-total">$ 23235</p></div>
							</div>
						</div>

					</div> <!--"usuario-pedidos-body"-->

				</div> <!--usuario-pedidos-item-->


			<!--| ITEM
			============================================================ |-->

				<div class="usuario-pedidos-item">

					<div class="usuario-pedidos-title">
						<div class="usuario-pedidos-triangle"></div>
						<h3>Disfruta del mejor sushi para dos al mejor precio<i class="usuario-icon-small usuario-pedidos-title"></i></h3>
					</div>

					<div class="usuario-pedidos-body">

						<div class="usuario-pedidos-img"><img src="img/samples/sample.jpg" width="210" height="105"></div>

						<div class="usuario-pedidos-columna1">
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-check"></i><p class="cupon-listo">Cupón Listo</p></div>
                            <!--<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-uncheck"></i><p class="cupon-nolisto">Cupón no está listo</p></div>-->
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-descargar"></i><p><a href="#">Descargar Cupón</a></p></div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-stars">
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star"></i>
									<i class="usuario-icon-small usuario-star"></i>
								</div>
								<p>Calificar</p>
							</div>
							<div class="usuario-pedidos-rows">
								<div class="usuario-pedidos-row-small"><i class="usuario-icon-small usuario-ver"></i><p><a href="#">Ver</a></p></div>
								<div class="usuario-pedidos-row-small-archivar"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Archivar</a></p></div>
							</div>
						</div>

						<div class="usuario-pedidos-columna2">
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2113548894</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Fecha:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2012-05-08</p></div>
							</div>
								<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Método de Pago:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>Contado</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Total Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p class="usuarios-pedidos-total">$ 23235</p></div>
							</div>
						</div>

					</div> <!--"usuario-pedidos-body"-->

				</div> <!--usuario-pedidos-item-->


			<!--| ITEM
			============================================================ |-->

				<div class="usuario-pedidos-item">

					<div class="usuario-pedidos-title">
						<div class="usuario-pedidos-triangle"></div>
						<h3>Disfruta del mejor sushi para dos al mejor precio<i class="usuario-icon-small usuario-pedidos-title"></i></h3>
					</div>

					<div class="usuario-pedidos-body">

						<div class="usuario-pedidos-img"><img src="img/samples/sample.jpg" width="210" height="105"></div>

						<div class="usuario-pedidos-columna1">
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-check"></i><p class="cupon-listo">Cupón Listo</p></div>
                            <!--<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-uncheck"></i><p class="cupon-nolisto">Cupón no está listo</p></div>-->
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-descargar"></i><p><a href="#">Descargar Cupón</a></p></div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-stars">
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star"></i>
									<i class="usuario-icon-small usuario-star"></i>
								</div>
								<p>Calificar</p>
							</div>
							<div class="usuario-pedidos-rows">
								<div class="usuario-pedidos-row-small"><i class="usuario-icon-small usuario-ver"></i><p><a href="#">Ver</a></p></div>
								<div class="usuario-pedidos-row-small-archivar"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Archivar</a></p></div>
							</div>
						</div>

						<div class="usuario-pedidos-columna2">
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2113548894</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Fecha:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2012-05-08</p></div>
							</div>
								<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Método de Pago:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>Contado</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Total Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p class="usuarios-pedidos-total">$ 23235</p></div>
							</div>
						</div>

					</div> <!--"usuario-pedidos-body"-->

				</div> <!--usuario-pedidos-item-->


			<!--| ITEM
			============================================================ |-->

				<div class="usuario-pedidos-item">

					<div class="usuario-pedidos-title">
						<div class="usuario-pedidos-triangle"></div>
						<h3>Disfruta del mejor sushi para dos al mejor precio<i class="usuario-icon-small usuario-pedidos-title"></i></h3>
					</div>

					<div class="usuario-pedidos-body">

						<div class="usuario-pedidos-img"><img src="img/samples/sample.jpg" width="210" height="105"></div>

						<div class="usuario-pedidos-columna1">
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-check"></i><p class="cupon-listo">Cupón Listo</p></div>
                            <!--<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-uncheck"></i><p class="cupon-nolisto">Cupón no está listo</p></div>-->
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-descargar"></i><p><a href="#">Descargar Cupón</a></p></div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-stars">
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star"></i>
									<i class="usuario-icon-small usuario-star"></i>
								</div>
								<p>Calificar</p>
							</div>
							<div class="usuario-pedidos-rows">
								<div class="usuario-pedidos-row-small"><i class="usuario-icon-small usuario-ver"></i><p><a href="#">Ver</a></p></div>
								<div class="usuario-pedidos-row-small-archivar"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Archivar</a></p></div>
							</div>
						</div>

						<div class="usuario-pedidos-columna2">
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2113548894</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Fecha:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2012-05-08</p></div>
							</div>
								<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Método de Pago:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>Contado</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Total Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p class="usuarios-pedidos-total">$ 23235</p></div>
							</div>
						</div>

					</div> <!--"usuario-pedidos-body"-->

				</div> <!--usuario-pedidos-item-->


			<!--| ITEM
			============================================================ |-->

				<div class="usuario-pedidos-item">

					<div class="usuario-pedidos-title">
						<div class="usuario-pedidos-triangle"></div>
						<h3>Disfruta del mejor sushi para dos al mejor precio<i class="usuario-icon-small usuario-pedidos-title"></i></h3>
					</div>

					<div class="usuario-pedidos-body">

						<div class="usuario-pedidos-img"><img src="img/samples/sample.jpg" width="210" height="105"></div>

						<div class="usuario-pedidos-columna1">
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-check"></i><p class="cupon-listo">Cupón Listo</p></div>
                            <!--<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-uncheck"></i><p class="cupon-nolisto">Cupón no está listo</p></div>-->
							<div class="usuario-pedidos-row"><i class="usuario-icon-small usuario-descargar"></i><p><a href="#">Descargar Cupón</a></p></div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-stars">
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star-active"></i>
									<i class="usuario-icon-small usuario-star"></i>
									<i class="usuario-icon-small usuario-star"></i>
								</div>
								<p>Calificar</p>
							</div>
							<div class="usuario-pedidos-rows">
								<div class="usuario-pedidos-row-small"><i class="usuario-icon-small usuario-ver"></i><p><a href="#">Ver</a></p></div>
								<div class="usuario-pedidos-row-small-archivar"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Archivar</a></p></div>
							</div>
						</div>

						<div class="usuario-pedidos-columna2">
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2113548894</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Fecha:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>2012-05-08</p></div>
							</div>
								<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Método de Pago:</p></div>
								<div class="usuario-pedidos-row-item-r"><p>Contado</p></div>
							</div>
							<div class="usuario-pedidos-row">
								<div class="usuario-pedidos-row-item-l"><p>Total Pedido:</p></div>
								<div class="usuario-pedidos-row-item-r"><p class="usuarios-pedidos-total">$ 23235</p></div>
							</div>
						</div>

					</div> <!--"usuario-pedidos-body"-->

				</div> <!--usuario-pedidos-item-->

			<!--| ====================================================== |-->

			</div> <!--"usuario-pedidos-items"-->


		<!--| FOOTER
		================================================================================= |-->
            
			<div class="usuario-pedidos-footer">
				<div class="usuario-pedidos-footer-archivados"><i class="usuario-icon-small usuario-archivar"></i><p><a href="#">Ver ofertas archivadas</a></p></div>
				<div class="usuario-pedidos-footer-paginación">
					<nav class="paginacion">
						<ul>
							<li class="current"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">»</a></li>
						</ul>
					</nav> <!--"paginacion"-->
				</div> <!--"usuario-pedidos-footer-paginación"-->
			</div> <!--"usuario-pedidos-footer"-->

		<!--| =========================================================================== |-->

		</div> <!--"usuario-body"-->

	</div> <!--"usuario"-->



	<!--| MENU
	========================================================================================================================= |-->

		<div id="usuario-pedidos" class="usuario-menu">
			<h4><a href="usuario-pedidos.php"><i class="usuario-menu-icon icon-pedidos"></i>Mis Pedidos</a></h4>
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

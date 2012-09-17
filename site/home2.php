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

	<title>Woow!</title>

	<meta name="description" content="Woow" />
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

	<?php include("main/home_oferta_slider.php"); ?>

<!--| ================================================================================================================================================ |-->

</head>


<body id="home">

<?php include("menu-provisorio.php"); ?>

<?php /*?><?php include("modales.php"); ?><?php */?>

<?php include("header.php"); ?>


<div class="container">

<div class="main_wrapper"> <!--| main + footer |-->

<div class="main"> <!--| main + footer2 |-->



<!--| HOME
====================================================================================================================================================== |-->

<div class="content"> <!--| oferta + aside |-->

<section class="home">



<!--| LA OFERTA
========================================================================================================================= |-->

	<article id="home-oferta">



	<!--| SLIDER
	================================================================================= |-->

		<div id="rg-gallery" class="rg-gallery">
			<div class="rg-thumbs">
			  <div class="es-carousel-wrapper">
					<div class="es-nav">
						<span class="es-nav-prev"></span>
						<span class="es-nav-next"></span>
					</div>
					<div class="es-carousel">
						<ul>
							<li><a href="#"><img src="img/samples/sample.jpg" data-large="img/samples/sample.jpg" alt="image01" /></a></li>
							<li><a href="#"><img src="img/samples/sample02.jpg" data-large="img/samples/sample02.jpg" alt="image01" /></a></li>
							<li><a href="#"><img src="img/samples/sample03.jpg" data-large="img/samples/sample03.jpg" alt="image01"  /></a></li>
							<li><a href="#"><img src="img/samples/sample04.jpg" data-large="img/samples/sample04.jpg" alt="image01" /></a></li>
							<li><a href="#"><img src="img/samples/sample05.jpg" data-large="img/samples/sample05.jpg" alt="image01" /></a></li>
							<li><a href="#"><img src="img/samples/sample06.jpg" data-large="img/samples/sample06.jpg" alt="image01" /></a></li>
						</ul>
					</div>
				</div>
			</div> <!-- rg-thumbs -->
		</div> <!-- rg-gallery -->



	<!--| TEXTOS
	================================================================================= |-->

		<canvas class="circulo"></canvas>
		<div class="data">
			<div class="descuento">52</div>
			<div class="texto-precio">
				<article class="titulos">
					<h2>Disfrutá del mejor sushi para 2 al mejor precio</h2>
					<h3>52% de descuento en 1 Roll de vegetales al wok 8 piezas</h3>
                    <div class="slider-controls"></div>
				</article>
                <!--<div class="right" style="margin-top: 210px;">-->
				<div class="precio-oferta">
					<div class="comprar home-comprar">
						<div class="comprar-precio"><p><u>U$S</u>25980</p></div>
						<div class="comprar-action"><p><a href="#">Compralo</a></p></div>
					</div>
				</div>
                <!--</div>-->
			</div>
		</div> <!--"data"-->
	</article> <!--"home-oferta"-->



	<!--| =========================================================================== |-->



	
<!--| DETALLES
========================================================================================================================= |-->


	<div id="home-detalles">

		<canvas class="home-detalles-top"></canvas>

		<article class="home-detalles-body">



		<!--| NÚMEROS
		================================================================================= |-->

			<section class="data">

				<div class="data-1">
					<div class="data-1-wrapper">
						<p class="precio"><i class="precio"></i><u>$</u><b class="tachado">250</b><b class="referencia">precio original</b></p>
						<p class="porcentaje"><i class="porcentaje"></i>57<u>%</u><b class="referencia">de descuento</b></p>
					</div>
					<canvas class="data-1-linea"></canvas>
				</div>

				<div class="data-2">
					<div class="data-2-wrapper">
						<p class="comprados"><i class="comprados"></i>1837<b class="referencia">comprados</b></p>
						<p class="activa"><i class="activa"></i>Oferta Activada</p>
						<!--<p class="desactivada"><i class="desactivada"></i>Oferta Sin Activar</p>-->
					</div>
				</div>

				<div class="data-3">
					<div class="data-3-wrapper">
						<p class="finaliza">la oferta finaliza en:</p>
						<p class="tiempo"><i class="tiempo"></i><time class="horas">23</time> : <time class="minutos">05</time> : <time class="segundos">08</time></p>
					</div>
					<canvas class="data-3-linea"></canvas>
				</div>

			</section>




		<!--| OCA
		================================================================================= |-->

			<div class="home-oca"></div>



		<!--| TEXTOS
		================================================================================= |-->

			<section id="detalles">

				<div class="detalles-top">



			<!--| DETALLES
			===================================================== |-->

					<article class="detalles left">
						<div class="papertitle papertitle30"><div class="triangle"></div><h4>Detalles</h4><i class="icon-info-sign"></i></div>
						<article class="trece-pts detalles-home">
							<dl>
								<dt><strong>El Menú incluye:</strong></dt>
									<dd>1 Roll de vegetales al wok, 8 piezas</dd>
									<dd>1 Philadelphia roll de 8 piezas (salmón, queso philadelphia y palta)</dd>
									<dd>1 roll de 8 piezas (langostino, queso philadelphia y ciboulette)</dd>
									<dd>4 Niguiris (salmón, langostino, palta y huevo)</dd>
									<dd>2 Cervezas alemanas c/pomelo (cerveza Schofferhofer c/pomelo 330cc)</dd>
							</dl>
							<p>Válido para consumir en el local o delivery.</p>
							<p>Envíos sin costo en Centro y Ciudad Vieja.</p>
							<p>Barrios Aguada, Cordón, Barrio Sur: costo $40.</p>
							<p>Otras zonas: <a href="#">consultar</a>.</p>
						</article>
						<!--<figure class="detalles-img">
							<img src="img/samples/sample.jpg" width="284" height="142" class="active">
							<img src="img/samples/sample02.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample03.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample04.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample05.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample06.jpg" width="284" height="142" class="none">
						</figure>-->
						<div class="relleno-top-left corners"></div>
					</article>



			<!--| CONDICIONES
			===================================================== |-->

					<article class="condiciones right">
						<div class="papertitle papertitle30"><div class="triangle"></div><h4>Condiciones</h4><i class="icon-exclamation-sign"></i></div>
						<article class="trece-pts detalles-home">
							<p>Lo podrás retirar o lo recibirás entre el 30 de julio y el 3 de agosto de 2012.</p>
							<p>En caso de elegir la opción que incluye envío, recordá leer las condiciones de envío.</p>
							<p>Deberás presentar tu <strong>documento de identidad</strong> al momento de retirar el producto.</p>
							<p>Sin límite de cupones por persona.</p>
							<p>Precio de referencia basado en promedio de mercado de empresas minoristas referentes.</p>
							<p>Dicho promedio no incluye precios mayoristas o promocionales.</p>
							<p>Por tratarse de una oferta, no estamos aptos para efectuar devoluciones.</p>
							<p>Pagá con tarjeta de crédito Visa, Master, Oca o débito bancario online hasta en 3 cuotas. Hasta en 6 cuotas vía Call Center.</p>
							<p>Pagá con Abitab después de pulsar comprar y completar tus datos.</p>
						</article>
						<figure class="detalles-img">
							<img src="img/samples/sample.jpg" width="284" height="142" class="active">
							<img src="img/samples/sample02.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample03.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample04.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample05.jpg" width="284" height="142" class="none">
							<img src="img/samples/sample06.jpg" width="284" height="142" class="none">
						</figure>
						<div class="relleno-top-right corners"></div>
					</article>



			<!--| =============================================== |-->

				</div> <!--"detalles-top"-->


				<div class="detalles-bot">



			<!--| DESCRIPCION
			===================================================== |-->

					<article class="descripcion left">
						<div class="papertitle papertitle30"><div class="triangle"></div><h4>Descripción</h4><i class="icon-th-list"></i></div>
						<article class="trece-pts descripcion-home">
							<p>En Tsunami Sushi Lounge se combinan técnicas japonesas con productos regionales de alta calidad, logrando una perfecta armonía entre lo tradicional y los sabores de su vanguardia gastronómica más actual.</p>
							<p>El mejor maridaje no tiene porque ser regional. Los mariscos cocidos y el pescado crudo combinan increíblemente con la cerveza.</p>
							<p>Por la presencia de las semillas de sésamo tostado en nuestra cocina, sugerimos cervezas de trigo como Schofferhofer, con jugo de pomelo para darle un toque fresco y frutal a la comida.</p>
							<p>El sushi se pude incluir en una dieta sana por sus ingredientes, que poseen la cantidad justa de proteínas, hidratos de carbono, fibras, vitaminas y minerales. Es libre de grasas, contiene una gran cantidad de omega 3 y omega 6, sin dejar de mencionar que es delicioso.</p>
							<p>Con el cupón de hoy vas a poder disfrutar de un 56% de descuento en 1 Roll de vegetales al wok 8 piezas + 1 Philadelphia roll de 8 piezas + 1 Ebi roll de 8 piezas + 4 Niguiris + 2 Cervezas de trigo.</p>
						</article>
						<div class="relleno-bot-left corners"></div>
					</article>



			<!--| LA COMPAÑÍA
			===================================================== |-->

					<article class="compania right">
						<div class="papertitle papertitle30"><div class="triangle"></div><h4>La Compañía</h4><i class="icon-map-marker"></i></div>
						<figure class="detalles-logo"><img src="img/samples/logo.jpg" width="190" height="95"></figure>
						<article class="trece-pts compania-home">
							<address class="detalles">
								<p><i class="icon-map-marker"></i>Boulevar Artigas 1283/701</p>
								<p><i class="icon-link"></i><a href="#">tsunamisushi.com.uy</a></p>
								<p><i class="icon-envelope"></i><a href="mailto:">info@tsunamisushi.com.uy</a></p>
								<p><i class="icon-time"></i>9:00 - 18:00</p>
								<p><i class="icon-cel"></i>2 408 55 55</p>
							</address>
						</article>
						<div class="relleno-bot-right corners"></div>
					</article>

			<!--| =============================================== |-->



				</div> <!--"detalles-bot"-->

			</section> <!--"detalles"-->



		<!--| MAPA SOCIAL TARJETAS
		================================================================================= |-->

			<section class="mapasocial">


			<!--| MAPA
			===================================================== |-->

				<figure class="mapa"><img src="img/samples/mapa.jpg" width="300" height="150"></figure>



			<!--| SOCIAL + TARJETAS
			===================================================== |-->
	
				<div class="social-tarjetas">

 					<div class="social-regala"><p class="width-170 corners"><a href="#"><i class="icon-gift"></i>Regaláselo a un amigo</a></p></div>
 					<div class="social-regala"><p class="width-240 corners"><a href="#"><i class="icon-bullhorn"></i>Recomendá esta oferta y ganá $100</a></p></div>

					<div class="social">

						<div class="social-item">
							<div id="fb-root"></div>
								<script>(function(d, s, id) {
								var js, fjs = d.getElementsByTagName(s)[0];
								if (d.getElementById(id)) return;
								js = d.createElement(s); js.id = id;
								js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1";
								fjs.parentNode.insertBefore(js, fjs);
								}(document, 'script', 'facebook-jssdk'));</script>
								<div class="fb-like" data-href="https://www.facebook.com/woOw.MVD" data-send="false" data-width="90" layout="button_count" data-show-faces="false"></div>
						</div>

						<div class="social-item">
							<a href="https://twitter.com/share" class="twitter-share-button" data-lang="es" data-dnt="true">Twittear</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
						</div>

						<div class="social-item gl">
							<g:plusone size="medium" annotation="none"></g:plusone>
							<script type="text/javascript">
								window.___gcfg = {lang: 'es-419'};
								(function() {
									var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
									po.src = 'https://apis.google.com/js/plusone.js';
									var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
									})();
							</script>
						</div>

					</div>

					<div class="tarjetas paper71">
						<dl>
							<div class="tarjetas-txt"><dt>Tu Compra Segura con:</dt></div>
							<div class="tarjetas-logos">
								<dd class="visa"><span class="none">Visa</span></dd>
								<dd class="mastercard"><span class="none">MasterCard</span></dd>
								<dd class="ocacard"><span class="none">OcaCard</span></dd>
								<dd class="cabal"><span class="none">Cabal</span></dd>
								<dd class="ebrou"><span class="none">E-Brou</span></dd>
								<dd class="santander"><span class="none">Santander</span></dd>
								<dd class="abitab"><span class="none">Abitab</span></dd>
							</div>
						</dl>
					</div>

 				</div>


			<!--| =============================================== |-->

			</section>



		<!--| COMPRALO
		================================================================================= |-->

			<section class="compralo">

				<div class="comprar home-comprar right">
					<div class="comprar-precio"><p><u>$</u>590</p></div>
					<div class="comprar-action"><p><a href="#">Compralo</a></p></div>
				</div>

				<div class="num num-home">
					<div class="num-precio"><p class="num-precio"><i class="icon-precio"></i><u>$</u>790</p></div>
					<div class="num-porcen"><p class="num-porcen"><i class="icon-porce"></i>58<u>%</u></p></div>
					<div class="num-tiempo"><p class="num-tiempo"><i class="icon-tiempo"></i><time class="horas">28</time>:<time class="minutos">30</time>:<time class="segundos">45</time></p></div>
				</div>

			</section>



		<!--| =========================================================================== |-->

		</article>

		<canvas class="home-detalles-bot"></canvas>

	</div> <!--"home-detalles"-->


</section> <!--"home"-->



<?php include("main/aside.php"); ?>


<!--| =================================================================================================================== |-->

</div> <!--"content"-->

<?php include("footer.php"); ?>


</body>

	<?php include("scripts.php"); ?>




</html>

<!--| ===================================================================================================================================| iugo.com.uy |-->

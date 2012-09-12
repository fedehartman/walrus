/*--| HOME - NOTIFICACIONES - CERRAR CON CLIC AFUERA
------------------------------------------------------------------------------------------------------------- |--*/

$(document).click(function(){
    $(".header-news_icon > .header-news").addClass('none');
	});

$(document).click(function(){
    $(".header-departamentos-select > .header-departamentos-dropdown").addClass('none');
	});

$(document).click(function(){
    $(".header-usuario-logueado > .header-usuario-dropwdown").addClass('none');
	});

$(document).click(function(){
    $(".main-nav_categorias > .main-nav_dropdown").addClass('none');
	});

$(document).ready(function () {
    /*$("body").queryLoader2({
        barColor: "#6e6d73",
        backgroundColor: "#fff1b0",
        percentage: true,
        barHeight: 30,
        completeAnimation: "grow"
    });*/


/*--| HOME - ASIDE
------------------------------------------------------------------------------------------------------------- |--*/

var total = $('section.home').height();		
var totalAside = $('.aside-total').height();		
$('.aside-back').height(total-totalAside-27);



/*--| HEADER - CERRAR CON CLIC AFUERA
------------------------------------------------------------------------------------------------------------- |--*/

$(".header-news_icon").click(function(){
	$(".header-news").removeClass('none');
	$(".header-news-counter").addClass('none');
	$(".header-departamentos-dropdown").addClass('none');
	$(".header-usuario-dropwdown").addClass('none');
	$(".main-nav_dropdown").addClass('none');
	});
	
$(".header-news_icon").click(function(e){
    e.stopPropagation();
	});

$(".header-departamentos-select .header-top-arrow-wrapper").click(function(){
	$(".header-departamentos-dropdown").removeClass('none');
	$(".header-usuario-dropwdown").addClass('none');
	$(".header-news").addClass('none');
	$(".main-nav_dropdown").addClass('none');
	});

$(".header-departamentos-select").click(function(e){
    e.stopPropagation();
	});

$(".header-usuario-logueado .header-top-arrow-wrapper").click(function(){
	$(".header-usuario-dropwdown").removeClass('none');
	$(".header-departamentos-dropdown").addClass('none');
	$(".header-news").addClass('none');
	$(".main-nav_dropdown").addClass('none');
	});

$(".header-usuario-logueado").click(function(e){
    e.stopPropagation();
	});

$(".main-nav_categorias a").click(function(){
	$(".main-nav_dropdown").removeClass('none');
	$(".header-usuario-dropwdown").addClass('none');
	$(".header-departamentos-dropdown").addClass('none');
	$(".header-news").addClass('none');
	});

$(".main-nav_categorias").click(function(e){
    e.stopPropagation();
	});

/*--| TOOLTIP
------------------------------------------------------------------------------------------------------------- |--*/

$("[rel=tooltip]").tooltip();
$("#example").tooltip({'placement':'top', 'trigger' : 'hover'});



/*--| MODAL FOOTER YOUTUBE
------------------------------------------------------------------------------------------------------------- |--*/

$("#modal_footer_youtube").modal('hide');



/*--| SLIDER STORE ASIDE
------------------------------------------------------------------------------------------------------------- |--*/

$('#home-aside-store .slider').easySlider({
		auto: true,
		continuous: true,
		pause: 3600,
		numeric: true
	});



/*--| SLIDER HOME
------------------------------------------------------------------------------------------------------------- |--*/

$('figure.detalles-img').cycle({ 
    fx:    'fade', 
    speed:  2500 
 });

$('#popup-button').click(function(){
	$("#popup h2").addClass('none');
	$("#popup .popup-form-step1").addClass('none');
	$("#popup .popup-form-step2").removeClass('none');
	$("#popup h3.step1").addClass('none');
	$("#popup h3.step2").removeClass('none');
	});

$('a.popup-close').click(function(){
	$("html").removeClass('popup');
	$("#popup").addClass('none');
	});

});
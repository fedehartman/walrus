$(document).ready(function () {
    /*$("body").queryLoader2({
        barColor: "#6e6d73",
        backgroundColor: "#fff1b0",
        percentage: true,
        barHeight: 30,
        completeAnimation: "grow"
    });*/

$("#modal_footer_youtube").modal('hide');

$('#home-aside-store .slider').easySlider({
		auto: true,
		continuous: true,
		pause: 3600,
		numeric: true
	});

$('figure.detalles-img').cycle({ 
    fx:    'fade', 
    speed:  2500 
 });


});
$(document).ready(function () {
    $("body").queryLoader2({
        barColor: "#6e6d73",
        backgroundColor: "#fff1b0",
        percentage: true,
        barHeight: 30,
        completeAnimation: "grow"
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
$(document).ready(function() {

	if (Modernizr.borderradius) {
		cyclefx = "fade";
	} else {
		cyclefx = "scrollHorz";
	}

	$('.cycle-slideshows').cycle({

		fx: cyclefx,  
		timeout: 13000,
		prev: "#prev",
		next: "#next",
		slides: "> div"

	});

});
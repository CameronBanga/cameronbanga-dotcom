"use strict";

$(document).ready(function(){
	
/* VEGAS Home Slider */
	function loadVegas(){
		$.vegas('slideshow', {
			  backgrounds:[
				
				{ src:'img/slider/01.jpg', fade:10000 },
			  ]
			})('overlay', {
			  src:'css/vegas/overlays/05.png'
			});
			$( "#vegas-next" ).click(function() {
			  $.vegas('next');
			});
			$( "#vegas-prev" ).click(function() {
			  $.vegas('previous');
		});
	}
	
	loadVegas();
});
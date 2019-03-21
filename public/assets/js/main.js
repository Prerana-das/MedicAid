(function ($) {
	"use strict";
	
	jQuery(document).ready(function( $ ) {
		
		//testimonials slider
	$('.testimonial_slider').owlCarousel({
		items:1,
		loop:true,
		autoplay:true
		});
		
		//team carousel
		$(".highlighted-slider").owlCarousel({
			dots:true,
			items:1,
			loop:true,
			nav:true,
			navText: ["<i class='fas fa-angle-left'></i>", "<i class='fas fa-angle-right'></i>"],
		});

		
		
		
		//wow js
		new WOW().init();	

});

$(window).scroll(function(){
		if ($(this).scrollTop() > 300) {
			$('.scroll-top').fadeIn();
		} else {
			$('.scroll-top').fadeOut();
		}
	});
	$('.scroll-top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});	
	
	
}(jQuery));		
	
	
$(document).ready(function(){
	let options = {
		loop: true,
		// center: true,
		freeDrag: true,
		autoplayHoverPause: true,
		autoplay: true,
		responsive:{
			0:{
				items:1,
			},
			550:{
				items:2,
			},
			775:{
				items:3,
			},
			1000:{
				items:4
			}
		}
	}

	$(".owl-carousel").owlCarousel(options);
});
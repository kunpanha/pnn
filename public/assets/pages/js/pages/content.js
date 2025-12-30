$(document).ready(function($) {
	$('iframe, object').parents('#contents div,#contents p,#contents strong').addClass('video-article');
	/* // Full screen vdo
	$('iframe, object').parents('#contents div,#contents p,#contents strong').addClass('video-article embed-responsive embed-responsive-16by9');
	$('iframe, object').addClass('embed-responsive-item'); */
	// full row
	$('img').parents('#contents div,#contents p').addClass('img-full');
	// relate article
	var count_relate = $('#divRelate .slide').length;
	if(count_relate == 0) {
		$("#divRelate").css("display","none");
	}
	
	// slide relate
	window.onload=function() {		
		$('#relate-slide').slick({
			slidesToShow: 2,
			slidesToScroll: 2,
			infinite: false,
			autoplay: false,
			dots: false,
			arrows: true,
			nextArrow: '<i class="fa fa-angle-right"></i>',
			prevArrow: '<i class="fa fa-angle-left"></i>',
			speed: 500,
			autoplaySpeed: 5000,
			//lazyLoad: 'ondemand',
			cssEase: 'linear',
			responsive: [
				{
					breakpoint: 767,
					settings: {											
						slidesToShow: 2,		
						slidesToScroll: 2
					}
				},
				{
					breakpoint: 480,
					settings: {	
						slidesToShow: 1,
						slidesToScroll: 1
					}
				}
			]
		});
		
	}	
  
});

/* // Disable key
$(window).on('keydown',function(event) {
	if(event.keyCode == 123) {			
		return false;
	}else if(event.ctrlKey && event.shiftKey && event.keyCode == 73) {			
		return false;  //Prevent from ctrl+shift+i
	}else if(event.ctrlKey && event.keyCode == 73) {			
		return false;  //Prevent from ctrl+shift+i
	}else if (event.ctrlKey && (event.keyCode == 85 )) {
		return false; //Prevent from ctrl+u
	}else if (event.ctrlKey && (event.keyCode == 83 )) {
		return false; //Prevent from ctrl+s
	}
});
// Disable right click
$(window).bind('contextmenu', false);
// Disable cut copy paste
$('body').bind('cut copy paste', function(e) {
	e.preventDefault();
}); */
$(document).ready(function() {
    // banner slide	
	window.onload=function() {
		$('#bannerSlide').slick({
			slidesToShow: 1,
			infinite: true,
			autoplay: true,
			dots: true,
			arrows: false,
			speed: 500,
			autoplaySpeed: 5000,
			//lazyLoad: 'ondemand',
			cssEase: 'linear'
		});
	}
});
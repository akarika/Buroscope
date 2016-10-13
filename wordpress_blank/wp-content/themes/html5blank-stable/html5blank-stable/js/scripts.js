(function ($, root, undefined) {
	
	$('#slider').slick( {
		dots:false,
		infinite:true,
		speed: 300,
		slideToshow: 1,
		adaptiveHeight:true,
		asNavFor: '#slider_nav',
		arrows:false,
	});
	$('#slider_nav').slick({
		slidesToShow : 3,
		slidesToScroll : 1,
		asNavFor: '#slider',
		dots: false,
		centerMode: true,
		focusOnSelect:true

	});

	/***CARROUSEL**********************************************/
	$('#carrousel').slick({
		slidesToShow : 3.5,
		slidesToScroll : 1,
		autoplay: true,
		autoplaySpeed:2000,
		arrows: false
	});
})(jQuery, this);

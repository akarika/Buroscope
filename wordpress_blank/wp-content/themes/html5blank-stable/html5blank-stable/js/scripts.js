(function ($, root, undefined) {
	
	$('#slider').slick( {
		dots:false,
		infinite:true,
		speed: 300,
		slideToshow: 1,
		adaptiveHeight:true,
		asNavFor: '#slide_nav',
		arrows:false,
	});
	$('#slide_nav').slick({
		slidesToShow : 3,
		slidesToScroll : 1,
		asNavFor: '#slider',
		dots: false,
		centerMode: true,
		focusOnSelect:true

	})
})(jQuery, this);

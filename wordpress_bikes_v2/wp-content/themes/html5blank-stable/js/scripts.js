(function ($, root, undefined) {

/**SLIDER*****************************/
 $('#slider').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '#slider_nav'
});

/**SIDER NAV*****************************/
$('#slider_nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '#slider',
  dots: true,
  centerMode: true,
  focusOnSelect: true
});

/**CARROUSEL*****************************/
$('#carrousel').slick({
  slidesToShow: 3.5,
  slidesToScroll:1,
  autoplay: true,
  autoplaySpeed: 2000,
  arrows: false,
});
	
	
})(jQuery, this);

/**DOCUMENT READY************************************************/
$(document).ready(function(){

	// On cache les sous-menus :
	$(".menu-item ul.sub-menu").hide();
	jQuery(".menu-item a").click(function()
	{
		jQuery(this).next(".menu-item ul.sub-menu").slideToggle(500);
	}); 
} ) ;
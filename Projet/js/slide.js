var slideout = new Slideout({
    'panel': document.getElementById('panel'),
    'menu': document.getElementById('menu'),
    'padding': 256,
    'tolerance': 70
});
$('.toggle-button').click(function() {
    slideout.toggle();
});
slideout.on('beforeopen', function() {
    $('.fixed').addClass('fixed-open');
});
slideout.on('beforeclose', function() {
    $('.fixed').removeClass('fixed-open');
});
/*animation icone hamburger*/
$(".toggle-icon").click(function() {
    $('#nav-container').toggleClass("pushed");
});
$('#panel').click(function() {
    if ($('.fixed').hasClass('fixed-open')) {
        slideout.toggle();
        $('#nav-container').toggleClass("pushed");
    }
});

$(window).scroll(function() {
    var w_height = ($(window).height()) * 0.5,
        pos = $(window).scrollTop(),
        bottom_screen = w_height + pos;
    $('nav a').each(function() {
        var target = $($(this).attr('href')).offset().top;
        if (target < bottom_screen && target > (pos - w_height)) {
            $(this).css({
                'color': 'rgba(222, 17, 24, 1)',
            });
        } else {
            $(this).css({
                'color': 'white',
            });
        }
    });
});
$('a').on('click', function() { // Au clic sur un élément
    var page = $(this).attr('href'); // Page cible
    var speed = 750; // Durée de l'animation (en ms)
    $('html, body').animate({
        scrollTop: $(page).offset().top
    }, speed); // Go
    return false;
});

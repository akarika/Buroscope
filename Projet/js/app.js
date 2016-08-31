$(document).ready(function () {
    $('.bt_more').click(function () {
        if ($(this).hasClass("open")) {
            $('.bt_more').text('Voir plus').removeClass('open');
        }
        else {
            $('.bt_more').addClass('open').text('Voir moins');
        }
        $('.open_slide').slideToggle('fast');
    });
    /*slideout*/
    var slideout = new Slideout({
        'panel': document.getElementById('panel')
        , 'menu': document.getElementById('menu')
        , 'padding': 256
        , 'tolerance': 70
    });
    $('.toggle-button').click(function () {
        slideout.toggle();
    });
    slideout.on('beforeopen', function () {
        $('.fixed').addClass('fixed-open');
    });
    slideout.on('beforeclose', function () {
        $('.fixed').removeClass('fixed-open');
    });
    /*animation icone hamburger*/
    $(".toggle-icon").click(function () {
        $('#nav-container').toggleClass("pushed");
    });
    $('#panel').click(function () {
        if ($('.fixed').hasClass('fixed-open')) {
            slideout.toggle();
            $('#nav-container').toggleClass("pushed");
        }
    });
    /*Position del anavigation dans nav*/
    $(window).scroll(function () {
        var w_height = ($(window).height()) * 0.5
            , pos = $(window).scrollTop()
            , bottom_screen = w_height + pos;
        $('nav a').each(function () {
            var target = $($(this).attr('href')).offset().top;
            if (target < bottom_screen && target > (pos - w_height)) {
                $(this).css({
                    'border-bottom': '1px solid red'
                    ,
                })
            }
            else {
                $(this).css({
                    'background-color': 'transparent'
                    , 'border': 'none'
                    ,
                })
            }
        });
    });
    $('a').on('click', function () { // Au clic sur un élément
        var page = $(this).attr('href'); // Page cible
        var speed = 750; // Durée de l'animation (en ms)
        $('html, body').animate({
            scrollTop: $(page).offset().top
        }, speed); // Go
        return false;
    });
});

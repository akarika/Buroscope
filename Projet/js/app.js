/*--------------------------BT MORE-------------------------------------------*/
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
    /*---------------------------------slideout-------------------------------*/
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
    /*----------------Position del anavigation dans nav-------------------*/
    $(window).scroll(function () {
        var w_height = ($(window).height()) * 0.5
            , pos = $(window).scrollTop()
            , bottom_screen = w_height + pos;
        $('nav a').each(function () {
            var target = $($(this).attr('href')).offset().top;
            if (target < bottom_screen && target > (pos - w_height)) {
                $(this).css({
                    'color': 'rgba(222, 17, 24, 1)'
                    ,
                })
            }
            else {
                $(this).css({
                    'color':'white'
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
    /*--------------------EFFET STICKY---------------------------------------*/
    $(window).scroll(function (event) {
        // A chaque fois que l'utilisateur va scroller (descendre la page)
        var y = $(this).scrollTop(); // On récupérer la valeur du scroll vertical
        //si cette valeur > à 200 on ajouter la class
        if (y >= (400)) {
            $('.navbar').addClass('fixed_navbar');
            $('.navbar li:last-of-type').addClass('li_show');
        } else {
            // sinon, on l'enlève
            $('.navbar').removeClass('fixed_navbar');
            $('.navbar li:last-of-type').removeClass('li_show');
        }
    });


});

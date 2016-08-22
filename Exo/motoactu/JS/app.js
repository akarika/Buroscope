/* Created by Yann-Soaz 2015*/
$(document).ready(function () {
    //lancement de la fancybox
    $(".fancybox").fancybox();
    $('a').click(function () {
        var $target = $(this).attr('href');
        if ($target == '#') {
            $('html, body').animate({
                scrollTop: 0
            }, 'slow');
        }
        else {
            $('html, body').animate({
                scrollTop: $($target).offset().top
            }, 'slow');
        }
        return false;
    });
    $(window).scroll(function () {
        var w_height = ($(window).height()) * 0.90
            , pos = $(window).scrollTop()
            , bottom_screen = w_height + pos;
        var w_width = $(window).width()
            , $document = $('body').height;
        $('article').each(function () {
            var target = $(this).offset().top;
            if (target < bottom_screen) {
                $(this).fadeIn();
            }
            else {
                $(this).fadeOut();
            }
        })
    });
});
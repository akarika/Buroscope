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

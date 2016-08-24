(function ($) {
    $(document).ready(function () {
        $('.dropdown').click(function (e) {
            e.preventDefault();
            if ($(this).next('.sous-menu').hasClass('open')) {
                $(this).next('.sous-menu').removeClass('open').slideToggle();
                
            }
            else {
                $('.dropdown').each(function () {
                    if ($(this).next('.sous-menu').hasClass('open')) {
                        $(this).next('.sous-menu').removeClass('open').slideToggle();
                    }
                });
                $(this).next('.sous-menu').addClass('open').slideToggle();
            }
        })
        $('.sous-menu li a').click(function () {
            $(this).parent().parent().removeClass('open').slideToggle();
        })
        
        $('.btn').click(function(){
         $('header img').addClass('active');
        })
        $('.chaton').click(function(){
            $('.infobox').addClass('view');
        })
        $('.close').click(function(){
            $('.infobox').removeClass('view');
        })
        
    })
}(jQuery));
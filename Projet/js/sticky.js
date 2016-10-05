
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

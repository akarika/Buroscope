$(document).ready(function(){
    $('nav a').on('click',function (e) {
        //stop l effet du a
        e.preventDefault();
        //recupére la valeur de l artibut href
        var cible= $(this).attr('href');
        //charge dans section la page html qui est la valur de cible
        $('section').load(cible);
    });

});
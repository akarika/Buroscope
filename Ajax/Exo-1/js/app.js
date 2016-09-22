$(document).ready(function(){
    $('nav a').on('click',function (e) {
        //stop l effet du a
        e.preventDefault();
        //recupére la valeur de l artibut href
        var cible = $(this).attr('href');
        //charge dans section la page html qui est la valur de cible
        var link = this;
        //on copie le contenu du fichier ciblé dans la section #content
        // et on lance une fonction callback pour ajouter une classe
        $('section').load(cible, function () {
            //alert('BANZAI!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!');
            //on retire la classe active a tout les liens
            $('nav a').removeClass("active");
            //on ajoute une clase au lien cliqué
            $(link).addClass("active");

        });
    });
});
<?php
require "config.php";// chargement constante de configuration
require "fonctions/bdd.php";//chargement des fonctions de gestions de la base de données
require "fonctions/tools.php";//chargement des fonctions outiles
//connexion a la BDD
$bdd=connect(DB_HOST,DB_NAME,DB_USER,DB_PASS);


// définit le type de page a afficher

if(!empty($_GET['page'])){
    $page=$_GET['page'];
}else{
    $page = 'home';
}

// routage vers la page demandée

switch($page){
    case 'home':

        $title = "JS + PHP = AJAX";

        $articles = getAllArticles($bdd,6);

        include "templates/home.php";
        break;

    case 'article':

        break;
    case 'addArticle':
        $nb= 6;
        if (!empty($_GET['decalage'])){
            $decalage=$_GET['decalage'];
            $articles = getMoreArticles($bdd,$nb,$decalage);

            include "templates/_boucleHome.php";
        }else{

            echo"<div class=\"alert alert-warning\">Erreur dans le traitement de la requete</div>";

        }


        break;

}




$bdd= NULL;


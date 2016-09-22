<?php

/*fonction permettant de se connecter a la base de données*/

function connect($db_host,$db_name,$db_user,$db_pass){
    try{
        $dbh = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
        return $dbh;

    }catch(PDOException $erreur){
        echo $erreur->getMessage() . "LA BDD a planté !!!! <a href=\"mailto:web@wab.com\"---->mail</a>";
    }

}
/*-----------FUNCTION GET ARTICLES--- RECUPERE £NB ARTICLES DANS MA BDD----------------*/
//@param $nb nbre d article souhaitez
//@param $bdd connexion à l abase de donnée PDO
//@return renvoie un array

function getAllArticles($bdd,$nb){
    //transforme le type en £nb en integer


    //pour eviter les comportements les injection SQL et les erreus de syntaxe

    $nb= intval($nb);//converti en int

    $question="SELECT * FROM article ORDER BY created_at DESC LIMIT $nb";

    $result=$bdd->query($question);

    return $result->fetchAll();
}
function getArticle($bdd,$id){

    $id = intval($id);//converti en int

    $question ="SELECT * FROM article WHERE id=$id";

    $resultat=$bdd->query($question);

    return $resultat->fetch();
}

/**
 * récupére $nb article à partir $decalage
 */
function getMoreArticles($bdd, $nb, $decalage){

    $nb = intval($nb);

    $decalage = intval($decalage);

    $question="SELECT * FROM article ORDER BY created_at DESC LIMIT $decalage,$nb";

    $result=$bdd->query($question);

    return $result->fetchAll();
}

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

function getUserByPseudo($bdd,$pseudo){

    $question ="SELECT * FROM user WHERE pseudo=".$bdd->quote($pseudo);// prepare la requete
    $resultat=$bdd->query($question);//lance la requete
    return $resultat->fetch();
}
function insertMessage($bdd,$message,$urlFile,$userId){
    $message=strip_tags($message,'<p><a><img><span><em><b><i>');

    $requete="INSERT INTO message(id,content,created_date,url_file,user_id) VALUES (NULL,:content,:created_date,:url_file,:user_id)";
    $resultat=$bdd->prepare($requete);
    $resultat->execute(array(
       ':content'       =>$bdd->quote($message),
        ':created_date' =>date('Y-m-d H:i:s'),
        ':url_file'     =>$urlFile,
        ':user_id'      =>$userId
    ));
    return $resultat;
}
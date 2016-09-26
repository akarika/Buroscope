<?php
include "config.php";
include "function/bdd.php";
$bdd = connect(DB_HOST,DB_NAME,DB_USER,DB_PASS);
/*var_dump($_POST);
var_dump($_FILES);*/
if (isset($_POST['submit'])) {
    if (!empty($_POST['message'])) {
        if (!empty($_POST['pseudo'])) {
            $user=getUserByPseudo($bdd,$_POST['pseudo']);
            if(!empty($user)&& $user['ban']==0){
                if(!empty($_FILES['file']['name'])){
                    $temp=explode(".",$_FILES['file']['name']);// on découpe le nom du fichier sur le point et le place dans un tableau
                    $ext=".".end($temp);// retourne la derniére valeur du tableau $temp

                    $urlFile='/media/'.uniqid('file-').$ext;// on cré un chemin avec un nom unique
                    move_uploaded_file($_FILES['file']['tmp_name']);
                }else{
                    $urlFile=null;
                }

                insertMessage($bdd,$_POST['message'],$urlFile,$user['id']);
            }else{
                //TODO: Message erreur utilisateur
            }
        }
    } else {
        //TODO: message erreur a faire
    }
}


include "templates/home.php";


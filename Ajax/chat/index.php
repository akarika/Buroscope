<?php
$basepath = $_SERVER['REQUEST_URI'];
include "config.php";
include "function/bdd.php";
include "function/tools.php";

$bdd = connect(DB_HOST,DB_NAME,DB_USER,DB_PASS);


if (isset($_POST['submit'])) {
    if (!empty($_POST['message'])) {
        if (!empty($_POST['pseudo'])) {
            $user=getUserByPseudo($bdd,$_POST['pseudo']);
            if(!empty($user)&& $user['ban']==0){
                if(!empty($_FILES['file']['name'])){
                    $temp=explode(".",$_FILES['file']['name']);// on découpe le nom du fichier sur le point et le place dans un tableau
                    $ext=".".end($temp);// retourne la derniére valeur du tableau $temp
                    $urlFile='media/'.uniqid('file-').$ext;// on cré un chemin avec un nom unique
                    move_uploaded_file($_FILES['file']['tmp_name'],__DIR__."/".$urlFile);
                }else{
                    $urlFile=null;
                }
                insertMessage($bdd,$_POST['message'],$urlFile,$user['id']);
                $_POST="";
            }else{
                //TODO: Message erreur utilisateur
                $erreur="Le pseudo utilisé n existe pas ou a été ban!";
            }
        }
    } else {
        //TODO: message erreur a faire
        $erreur="vous devez écrire un message";
    }
}
$messages=array_reverse(getMessages($bdd,20));
include "templates/home.php";


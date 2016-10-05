<?php

// pour tester le retour
/*$data['file'] = $_FILES['file']['name'];
$data['post']=$_POST;
echo json_encode($data);*/
$basepath = '/Buroscope/Ajax/Chat/';// pour écrire les url des fichiers dans _loopMsg
require "config.php";
require "function/bdd.php";
require "function/tools.php";// pour etEtension utilsié dans _loopMsg
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
                echo 1;//1 = erreur pseudo inconnue ou banni
            }
        }
    } else {
        //TODO: message erreur a faire
        echo 2;//erreur msg vide
    }
}
//maj des messages
if (isset($_GET["id"])){


    $messages=getNewMsg($bdd,$_GET["id"]);

    //générer la reponse
    include "templates/_loopMsg.php";

}

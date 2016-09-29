<?php

/**
 * @param $ext retourne l extension d un fichier
 */
function getExtension($file){
$temp=explode(".",$file);
    $ext=end($temp);
    return strtolower($ext);
}
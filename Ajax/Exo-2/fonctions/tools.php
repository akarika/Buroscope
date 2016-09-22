<?php
/* fct extrait retourne un txt tronqué à $nb caractére si sa longeur sup à $nb caractére
*
*/
function extrait($texte ,$nb=150){
    if (strlen($texte)>=$nb){
        $extrait = substr($texte,0,$nb)."…";
        return $extrait;
    }else{
        return $texte;
    }
}

//fct printActive ($nomdepage) ,
// affiche le texte class="active" si $nomdepage == la page en cours
function printActive($nomdepage){
    global $page;
    if($page==$nomdepage){
        echo 'class="active"';
    }
}



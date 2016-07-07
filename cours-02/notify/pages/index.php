<?php
//on calcule le menu du footer
$items=array("Contact", "Download", "Press", "Email", "Support", "Privacy Police");
$menu = "<ul>\n";
for ($i=0; $i < sizeof($item) ; $i++) {
    $menu .="<li>\n<a href=\"#\">".$items[$i]."</a>\n</li>\n";
}
$menu .="</ul>\n";

//on gére les clics sur la favoris(3 pages)
// si on reçoit une variable qui s appelle "page
if(isset_($_GET['page'])){
    echo "BANZAI";
}else{
    echo "Bye";
}


//destiné en sortie pour index.html
include("index.html");
 ?>

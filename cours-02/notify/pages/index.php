<?php
//on calcule le menu du footer
$items=array("Contact", "Download", "Press", "Email", "Support", "Privacy Police");
$menu = "<ul>\n";
for ($i=0; $i < sizeof($item) ; $i++) {
    $menu .="<li>\n<a href=\"#\">".$items[$i]."</a>\n</li>\n";
}
$menu .="</ul>\n";













//destiné en sortie pour index.html
include("index.html");
 ?>

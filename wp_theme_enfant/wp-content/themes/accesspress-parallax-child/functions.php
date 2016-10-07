<?php
// on hook la fonction admin_menu
add_action('admin_menu','mon_menu_admin');
function mon_menu_admin($context)
{
    remove_menu_page('edit.php');
    remove_menu_page('edit-comments.php');

//si on veut ajouter une entré dans le back office
    add_menu_page("Support d'aide du thème", "Aide pdf", "manage_options",'../wp-content/themes/accesspress-parallax-child/aide.pdf');
}
//en 1 titre de l onglet
//en 2 titre dans le menu
//en 3 doit pour visualiser l aide
//(manage_options=admin/    edit_posts=editeur/  read=lecture seule
//en 4 chemin vers fichier
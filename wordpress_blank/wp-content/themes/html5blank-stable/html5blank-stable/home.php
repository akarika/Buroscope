<?php get_header(); ?>

<?php
//arguments de la requête
$arguments=array(
    'post_type'=>'slider_intro',
    'posts_per_page'=>'3',
    'orderby'=>'meta_value',
    'meta_key'=>'rang',
    'order'=>'ASC');

//exécution de la requete

$slide = new WP_Query($arguments);

if($slide->have_posts()){
    $mon_slider='<div id="slider_content">';
    $mon_slider.='<div id="slider">';

    $slider_nav='<div id="slide_nav">';

    while($slide->have_posts()){
        //on initialise la variable global $post
        $slide->the_post();

        $slider_nav.=get_the_post_thumbnail($slide->ID,'small');

        $mon_slider.='<div class="slide">';
        //on affiche l'image à la une en mode large
        $mon_slider.='<div class="text_slide">';
        $mon_slider.="<h2>". get_the_title() ."</h2>";
        $mon_slider.= extrait(get_the_content(),20);
        $mon_slider.='</div>';
        $mon_slider.="<div class=\"more\">";
        $mon_slider.="<a href=\"" . get_field('call_to_action') . "\"> READ MORE </a>";
        $mon_slider.='</div>';
        $mon_slider.= get_the_post_thumbnail($slide->ID,'large'); //large/medium/thumbnail
        $mon_slider.='</div>';
    }

    $slider_nav.='</div>';
    $mon_slider.='</div>';

    //on ajoute au slider principal le slider de navigation
    $mon_slider.=$slider_nav;
    $mon_slider.="</div>\n";
}
echo $mon_slider;
//pour cloturer proprement les requêtes (à la chaque fin de requête)
wp_reset_query(); ?>

<?php

//on calcule le bestseller
$arguments=array(
    'post_type'=>'produits',
    'posts_per_page'=>'1',
    'meta_key'=>'best_seller',
    'meta_value'=>'oui');
// en SQL : SELECT * FROM produits WHERE bestseller='oui' LIMIT 0,1

$bestseller=new WP_query($arguments);

if($bestseller->have_posts())
{
    $produit=affiche_bestseller($bestseller,"best");
}
else{
    $arguments=array('post_type'=>'produits',
        'posts_per_page'=>'-1',
        'orderby'=>'rand');
    $bestseller=new WP_query($arguments);
    $produit=affiche_bestseller($bestseller,"");
}

echo $produit;
//pour cloturer proprement les requetes (a chaque fin de requete)
wp_reset_query();

//===============================================================
//on calcule le carrousel
$arguments=array('post_type'=>'produits','posts_per_page'=>'4','orderby'=>'rand');
$carrousel=new WP_query($arguments);
if($carrousel->have_posts())
{
    $zone_carrousel="<div id=\"carrousel\">\n";
    while($carrousel->have_posts())
    {
        //on initialise la variable global $post
        $carrousel->the_post();

        $zone_carrousel.="<div class=\"carrousel\">\n";
        $zone_carrousel.=get_the_post_thumbnail($carrousel->ID, 'medium');
        $zone_carrousel.="</div>\n";
    }
    $zone_carrousel.="</div>\n";
}

echo $zone_carrousel;

//pour cloturer proprement les requetes (a chaque fin de requete)
wp_reset_query();

?>


<?php get_footer(); ?>

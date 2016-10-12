<?php get_header(); ?>


<?php
//arguements de la requete
$arguments = array(
    'post_type' => 'slider_intro',
    'posts_per_page' => '3',
    'orderby' => 'meta_value',
    'meta_key' => 'rang',
    'order' => 'ASC');

//execution de la requete
$slide = new WP_Query($arguments);
if ($slide->have_posts()) {
    $mon_slider = "<div id=\"slider_content\">\n";//position relative
    $mon_slider .= "<div id=\"slider\">\n";//position absolute+zindex1

    $slider_nav = "<div id=\"slide_nav\">\n";//position absolute+zindex2


    while ($slide->have_posts()) {
        //on initialise la variable global $post
        $slide->the_post();
        //on affiche la navigation avec les 3 images en medium
        $slider_nav .= get_the_post_thumbnail($slide->ID, 'small') . "\n";

        $mon_slider .= "<div class=\"slide\">\n";
        //on affiche l image a la une en mode large
        $mon_slider .= "<div class=\"text_slide\">";
        $mon_slider .= "<h2>" . get_the_title() . "</h2>\n";
        $mon_slider .= get_the_content();
        $mon_slider .= "</div>\n";
        $mon_slider .= get_the_post_thumbnail($slide->ID, 'large') . "\n";
        $mon_slider .= "</div>\n";

    }
    $slider_nav .= "</div>\n";

    $mon_slider .= "</div>\n";//fin div id=slider
    //on ajoute le slider principale le slider de navigation
    $mon_slider .= $slider_nav;
    $mon_slider .= "</div>\n";//fin div id=slider_content
    //fin div id=slider_content


}
echo $mon_slider;
//pour cloturer proprement les requetes (a chaque fin de requete)
wp_reset_query();
//==================================================================================
//on calcule le bestseller
$arguments = array(
    'post_type' => 'produits',
    'posts_per_page' => '1',
    'meta_key' => 'best_seller',
    'meta_value' => 'oui');
// SELECT * FROM produits WHERE bestseller='oui' LIMI 0,1

$bestseller = new WP_Query($arguments);
if ($bestseller->have_posts()) {
    $bestseller->the_post();
    $produits = "<article id=\"bestseller\">\n";
    $produits .= "<div class=\"bestseller_g best\">\n";
    $produits .= "<figure>".get_the_post_thumbnail($bestseller->ID, 'medium') ."</figure>"."\n";
    $produits .= "</div>\n";
    $produits .= "<div class=\"bestseller_d\">\n";
    $produits .= "<h2>".get_the_title()."</h2>";
    $produits .= "<p class=\"designer\">By ".get_field("designer")."</p>"."\n";
    $produits .= "<p class=\"price\">".get_field("prix")." $</p>"."\n";
    $produits .= "</div>\n";
    $produits .= "</article>";
} else {
    $arguments = array(
        'post_type' => 'produits',
        'posts_per_page' => '-1',
        'orderby' => 'rand');
    //SELECT * FROM produits ORDER BY RAND
    $bestseller = new WP_Query($arguments);
    if ($bestseller->have_posts()) {
        //on initialise la variable global $post
        $bestseller->the_post();
        $produits = "<article id=\"bestseller\">\n";
        $produits .= "<div class=\"bestseller_g\">\n";
        $produits .= get_the_post_thumbnail($bestseller->ID, 'medium') . "\n";
        $produits .= "</div>\n";
        $produits .= "<div class=\"bestseller_d\">\n";
        $produits .= "</div>\n";
        $produits .= "</article>";
    }
}

echo $produits;
?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
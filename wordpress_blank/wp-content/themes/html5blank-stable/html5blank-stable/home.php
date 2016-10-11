<?php get_header(); ?>


<?php
//arguements de la requete
$arguments = array(
    'post_type' => 'slider_intro',
    'post_per_page' => '3',
    'orderby' => 'meta_value',
    'meta_key'=>'rang',
    'order'=>'ASC');

//execution de la requete
$slide = new WP_Query($arguments);
if ($slide->have_posts()) {
    $mon_slider = "<div id=\"slider_content\">\n";
    $mon_slider .= "<div id=\"slider\">\n";
    while ($slide->have_posts()) {
        //on initialise la variable global $post
        $slide->the_post();
        $mon_slider .= "<div class=\"slide\">\n";
        //on affiche l image a la une en mode large
        $mon_slider.="<h2>".get_the_title()."</h2>\n";
        $mon_slider .=get_the_post_thumbnail($slide->ID,'large')."\n";
        $mon_slider .= "</div>\n";

    }
    $mon_slider .= "</div>\n";//fin div id=slider
    $mon_slider .= "</div>\n";//fin div id=slider_content

    //pour cloturer proprement les requetes (a chaque fin de requete)
    wp_reset_query();

}
echo $mon_slider;
?>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
<?php get_header(); ?>

<?php
	include_once("functions_affichage.php");
	//arguments de la requête
	$arguments=array('post_type'=>'slideintro','posts_per_page'=>'3','orderby'=>'meta_value','meta_key'=>'rang','order'=>'ASC');
	
	//exécution de la requete
	$slide=new WP_query($arguments);
	
	if($slide->have_posts())
		{		
		$mon_slider="<div id=\"slider_content\">\n";//position:relative
		$mon_slider.="<div id=\"slider\">\n";//on le laisse dans le flux		
		$slider_nav="<div id=\"slider_nav\">\n";//position:absolute+z-index	
		while($slide->have_posts())
			{
			//on initialise la variable global $post
			$slide->the_post();
			
			//on affiche la navigation avec les 3 images en medium
			$slider_nav.=get_the_post_thumbnail($slide->ID, 'small') . "\n";//large/medium/thumbnail
			
			$mon_slider.="<div class=\"slide\">\n";
			
			//on affiche l'image à la une en mode large
			$mon_slider.="<div class=\"text_slide\">";
			$mon_slider.="<h2>". get_the_title() . "</h2>\n";
			$mon_slider.=extrait(get_the_content(),5);
			$mon_slider.="</div>";
			$mon_slider.="<div class=\"more\">";
			$mon_slider.="<a href=\"" . get_field("call_to_action") . "\">READ MORE</a>";
			$mon_slider.="</div>";
			$mon_slider.=get_the_post_thumbnail($slide->ID, 'large') . "\n";//large/medium/thumbnail
			$mon_slider.="</div>\n";
			}
		$slider_nav.="</div>\n";//fin de la div=slider_nav
		$mon_slider.="</div>\n";//fin de la div id=slider
		
		//on ajoute au slider principal le slider de navigation
		$mon_slider.=$slider_nav;		
		$mon_slider.="</div>\n";//fin de la div id=slider_content
		}
	echo $mon_slider;
	//pour cloturer proprement les requetes (a chaque fin de requete)
	wp_reset_query();
	
//===================================================================
//on calcule le bestseller
	$arguments=array('post_type'=>'produits',
					'posts_per_page'=>'1',
					'meta_key'=>'bestseller',
					'meta_value'=>'oui');
	//SELECT * FROM produits WHERE bestseller='oui' LIMIT 0,1
	
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
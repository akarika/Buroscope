<?php

	get_header();
	/*if(have_posts()):while(have_posts()):the_post(); ?>

		contenu de la boucle ici

	<?php endwhile;
	endif;*/
	$arguments=array('post_type'=>'slider','posts_per_page'=>'3','orderby'=>'rand');
	$slide=new WP_query($arguments);
	if($slide->have_posts())
		{
		
		echo '<div id="slider_content"><div id="slider">';
		while($slide->have_posts())
			{
			//on initialise la variable global $post
			$slide->the_post();?>
			<div class="slide">
				<?php the_post_thumbnail('large'); ?>
				<div class="text_slide">
					<h2><?php the_title(); ?></h2>	
					<p><?php the_content(); ?></p>
				</div>
				<a href="<?php the_field("call_to_action"); ?>" class="plus">READ<br />MORE</a>					
			</div>
			<?php
			//pour cloturer proprement les requetes (a chaque fin de requete)
			wp_reset_query();
			}
		echo '</div>';	
		
		//deuxième boucle pour le slider_nav
		echo '<div id="slider_nav">';
		while($slide->have_posts())
			{
			//on initialise la variable global $post
			$slide->the_post();?>
			<div class="slide_nav">
				<?php the_post_thumbnail('medium'); ?>			
			</div>
			<?php
			//pour cloturer proprement les requetes (a chaque fin de requete)
			wp_reset_query();
			}
		echo '</div></div>';					
		}
		
	//on calcule le bestseller
	$arguments=array('post_type'=>'produits','posts_per_page'=>'1','orderby'=>'rand','meta_key'=>'bestseller','meta_value'=>'oui');
	$bestseller=new WP_query($arguments);		
	if($bestseller->have_posts())
		{
		echo '<article id="bestseller">';
		while($bestseller->have_posts())
			{
			//on initialise la variable global $post
			$bestseller->the_post();?>
			<div class="bestseller_g">
				<?php the_post_thumbnail("large"); ?>				
			</div>
			<div class="bestseller_d">
				<h2><?php the_title(); ?></h2>	
				<p class="designer"><?php the_field("designer"); ?></p>	
				<p class="prix"><?php the_field("prix"); ?>$</p>	
				<p class="rating">Rating: <?php the_field("notation"); ?>.0&nbsp;&nbsp;&nbsp;
				<?php for($i=0;$i<get_field("notation");$i++)
					{
					echo '<span class="dashicons dashicons-star-filled"></span>';
					}
				?>
				</p>
				<a href="<?php the_permalink(258); ?>">Ask the Customer a Question</a>
			</div>			
			<?php
			//pour cloturer proprement les requetes (a chaque fin de requete)
			wp_reset_query();
			}
		echo '</article>';					
		}	

			//on calcule le carrousel
	$arguments=array('post_type'=>'produits','posts_per_page'=>'4','orderby'=>'rand');
	$produits=new WP_query($arguments);
	if($produits->have_posts())
		{
		echo '<div id="carrousel">';
		while($produits->have_posts())
			{
			//on initialise la variable global $post
			$produits->the_post();?>
			<div class="carrousel">
				<?php the_post_thumbnail('medium'); ?>				
			</div>
			<?php
			//pour cloturer proprement les requetes (a chaque fin de requete)
			wp_reset_query();
			}
		echo '</div>';					
		}

	get_footer();
	
?>
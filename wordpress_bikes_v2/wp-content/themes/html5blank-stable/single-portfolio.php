<?php

	get_header();

	//boucle principale
	if(have_posts())
		{
		while(have_posts())
			{
			//on initialise la variable global $post
			the_post(); ?>

			<!--contenu de la boucle ici-->
			<main>
			<h1><?php the_title(); ?></h1>
			<section>
				<?php echo wp_get_attachment_image(get_field('fichier_realisation'),'medium');//wp_get_attachment_image génere l'HTML de l'image avec son ID | get_field('fichier_realisation') pour récuperer le champ créé par ACF | thumbnail, medium, large, full ?>
				<?php the_content(); ?>
			</section>
			</main>
			
			<?php
			}
		}

	get_footer();
	
?>
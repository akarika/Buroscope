<?php
//on hook la fonction admin_menu
add_action('admin_menu','mon_menu_admin');

function mon_menu_admin($context){
remove_menu_page('edit.php');
remove_menu_page('edit-comments.php');
//si on veut ajouter une entrée dans le back office qui pointe vers un pdf
$chemin="../wp-content/themes/accesspress-parallax-child/aide.pdf"; 
add_menu_page('Support aide du thème',
'Aide pdf',
'manage_options',$chemin);
}

//on hook la fonction admin_bar_menu
add_action('admin_bar_menu','modifier_bar_admin',999);

function modifier_bar_admin($admin_bar){	
	//pour modifier le logo WP coté back office
	$chemin_image=get_theme_root_uri() . "/accesspress-parallax-child/logo.png";
	
	$admin_bar->add_node(array(
						'id'=>'wp-logo',
						'title'=>'<span id="mon_logo"><img src="' . $chemin_image . '" alt="Logo" /></span>'
						));

	// on tune le about
	$admin_bar->add_node(array(
						'id'=>'about',
						'title'=>'Le nom de votre boite',
						'href'=>'http://www.google.fr'
						));
	
	//on supprime tout le menu
	$admin_bar->remove_node('wp-logo-external');
	}
	


//on hook la fonction qui appelle les liaisons script et css
add_action('wp_enqueue_scripts', 'mon_css_form');
function mon_css_form(){
	wp_enqueue_style( 'formulaire', get_theme_root_uri() . '/accesspress-parallax-child/form.css' );
}


//pour désactiver la barre d'admin coté front
/*add_filter('show_admin_bar' , 'wpc_show_admin_bar');
function wpc_show_admin_bar() {
	return false;
}*/

add_action('accesspress_bxslider','mon_slider');
function mon_slider(){
	
		global $post;
		$accesspress_parallax = of_get_option('parallax_section');
		if(!empty($accesspress_parallax)){
			$accesspress_parallax_first_page_array = array_slice($accesspress_parallax, 0, 1);
			$accesspress_parallax_first_page = $accesspress_parallax_first_page_array[0]['page'];
			}
		$accesspress_slider_category = of_get_option('slider_category');
		$accesspress_slider_full_window = of_get_option('slider_full_window') ;
		$accesspress_show_slider = of_get_option('show_slider') ;
		$accesspress_show_pager = (!of_get_option('show_pager') || of_get_option('show_pager') == "yes") ? "true" : "false";
		$accesspress_show_controls = (!of_get_option('show_controls') || of_get_option('show_controls') == "yes") ? "true" : "false";
		$accesspress_auto_transition = (!of_get_option('auto_transition') || of_get_option('auto_transition') == "yes") ? "true" : "false";
		$accesspress_slider_transition = (!of_get_option('slider_transition')) ? "fade" : of_get_option('slider_transition');
		$accesspress_slider_speed = (!of_get_option('slider_speed')) ? "5000" : of_get_option('slider_speed');
		$accesspress_slider_pause = (!of_get_option('slider_pause')) ? "5000" : of_get_option('slider_pause');
		$accesspress_show_caption = of_get_option('show_caption') ;
		$accesspress_enable_parallax = of_get_option('enable_parallax');
		

		if( $accesspress_show_slider == "yes" || empty($accesspress_show_slider)): ?>
		<section id="main-slider" class="full-screen-<?php echo $accesspress_slider_full_window; ?>">
		
		<div class="overlay"></div>

		<?php if(!empty($accesspress_parallax_first_page) && $accesspress_enable_parallax == 1): ?>
		<div class="next-page"><a href="<?php echo esc_url( home_url( '/' ) ); ?>#section-<?php echo esc_attr($accesspress_parallax_first_page); ?>"></a></div>
		<?php endif ?>

 		<script type="text/javascript">
            jQuery(function($){
				$('#main-slider .bx-slider').bxSlider({
					adaptiveHeight: true,
					pager: <?php echo $accesspress_show_pager; ?>,
					controls: <?php echo $accesspress_show_controls; ?>,
					mode: '<?php echo $accesspress_slider_transition; ?>',
					auto : <?php echo $accesspress_auto_transition; ?>,
					pause: <?php echo $accesspress_slider_pause; ?>,
					speed: <?php echo $accesspress_slider_speed; ?>
				});

				<?php if($accesspress_slider_full_window == "yes" && !empty($accesspress_slider_category)) : ?>
				$(window).resize(function(){
					var winHeight = $(window).height();
					var headerHeight = $('#masthead').outerHeight();
					$('#main-slider .bx-viewport , #main-slider .slides').height(winHeight-headerHeight);
				}).resize();
				<?php endif; ?>
				
			});
        </script>
        <?php

				$loop = new WP_Query(array(
						'post_type' => 'slider_post',
						'posts_per_page' => -1
					));
					if($loop->have_posts()) : ?>

					<div class="bx-slider">
					<?php
					while($loop->have_posts()) : $loop-> the_post(); 
					$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full', false ); 
					$image_url = "";
					if($accesspress_slider_full_window == "yes") : 
						$image_url =  "style = 'background-image:url(".esc_url($image[0]).");'";
				    endif;
					?>
					<div class="slides" <?php echo $image_url; ?>>
					
					<?php if($accesspress_slider_full_window == "no") : ?>		
						<img src="<?php echo esc_url($image[0]); ?>">
					<?php endif; ?>
								
						<?php if($accesspress_show_caption == 'yes'): ?>
						<div class="slider-caption">
							<div class="mid-content">
								<h1 class="caption-title"><?php the_title();?></h1>
								<h2 class="caption-description"><?php the_content();?></h2>
							</div>
						</div>
						<?php endif; ?>
				
			        </div>
					<?php endwhile; ?>
					</div>
					<?php endif; ?>

		</section>
		<?php endif; ?>
<?php
}

?>



	



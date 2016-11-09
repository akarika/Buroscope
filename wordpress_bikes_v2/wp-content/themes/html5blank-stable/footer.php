			<?php if(is_front_page()): ?>
			<div id="shop">
				<a href="<?php the_permalink(252); ?>">BROWSE SHOP</a>
			</div>
			<?php endif; ?>
			
			<!-- footer -->
			<footer class="footer" role="contentinfo">
				<nav class="nav" role="navigation">
					<?php wp_nav_menu(array("menu"=>"menu_bas")); ?>
				</nav>
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->
	<div><a data-pin-do="embedBoard" data-pin-lang="fr" data-pin-board-width="200" data-pin-scale-height="240" data-pin-scale-width="80" href="https://www.pinterest.com/akarika34/cats/"></a></div>
		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
	</body>
</html>

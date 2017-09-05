	
	<footer class="site-footer">
		<h5 class="site-footer-title"></h5>
		<nav>
		
			<?php
			
			$args = array(
				'menu' => 'footer'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
			

				<!-- hd-search -->
			<div class="hd-search">
				<?php get_search_form(); ?>
			</div><!-- /hd-search -->

		</nav>
		
	<span><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></span>
	</footer>
	
<?php wp_footer(); ?>
</body>
</html>
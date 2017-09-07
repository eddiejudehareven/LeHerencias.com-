	
	<footer class="site-footer">
		<h5 class="site-footer-title"></h5>
		<nav>
		
			<?php
			
			$args = array(
				'menu' => 'footer menu'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		

		</nav>
		
	<span><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></span>
	</footer>
	
<?php wp_footer(); ?>
</body>
</html>
	
	<footer class="site-footer">

				<!--outputs AF icon-->
	<div class="social-media-icons-footer">
	<a href="#"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></a>
	</div>
	<!-- outputs AF icon --> 
		<div class="footer-mobile-navigation">
		<span><?php bloginfo('name'); ?> &copy; <?php echo date('Y');?></span>

		<nav>
		
			<?php
			
			$args = array(
				'menu' => 'footer menu'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		
		</nav>
	</div> <!-- footer mobile navigation --> 

	</footer>
	
<?php wp_footer(); ?>
</body>
</html>
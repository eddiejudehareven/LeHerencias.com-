	
	<footer class="site-footer"> 

		<!--outputs AF icon-->
	<div class="social-media-icons-footer">
	<i class="fa fa-phone" aria-hidden="true">&nbsp;(111) 111-1111</i>&nbsp;
	<address><a href="mailto:contact@groupeherencias.ca"<i class="fa fa-envelope" aria-hidden="true">&nbsp;contact@groupeherencias.ca</i></a></address>
	</div>

	<!-- outputs AF icon -->

		<span><?php bloginfo('name'); ?> &copy; <?php echo date('Y');?></span>

		<nav>
		
			<?php
			
			$args = array(
				'menu' => 'footer menu'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		
		</nav> 

	</footer>
	
<?php wp_footer(); ?>
</body>
</html>
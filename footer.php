	
	<footer class="site-footer">

		<div class="wrapper"> 

		<!--outputs AF icon-->
	<div id="social-media-icons-footer" class="social-media-icons-footer">
		<a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
		<a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
		<address><a href="mailto:contact@groupeherencias.ca"<i class="fa fa-envelope" aria-hidden="true">&nbsp;</i></a></address>
		<i id="phone-icon" class="fa fa-phone" aria-hidden="true">&nbsp;(111) 111-1111</i>
	</div>


	<!-- mailing list sign up -->

    <div id="mailing-list" class="mailing-list">
    	<h5>MAILING LIST SIGN UP HERE</h5></div>

	<!-- outputs AF icon -->

		<span><?php bloginfo('name'); ?> &copy; <?php echo date('Y');?></span>

		<nav class="footer-menu">
		
			<?php
			
			$args = array(
				'menu' => 'footer menu'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		
		</nav>

		</div> <!-- wrapper --> 

	</footer>
	
<?php wp_footer(); ?>
</body>
</html>
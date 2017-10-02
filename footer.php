	
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

    		<div class="mailing-list">
					<h3 class="mailing-list__title">Subscribe to our Newsletter</h3>
				<!-- Begin MailChimp Signup Form -->
				<div id="mc_embed_signup">
					<form action="<!-- //eddiejude.us15.list-manage.com/subscribe/post?u=ededb7e20c7658a52f1d02987&amp;id=0a9a068b5a" method="post" id="mc-embedded-subscribe-form -->" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
						<div id="mc_embed_signup_scroll">
							<div class="mc-field-group">
								<p><input type="text" name="MMERGE1" class="mailing-list__name" placeholder="Your Name"></p>
							</div>
							<div class="mc-field-group">
								<p><input type="email" name="EMAIL" class="mailing-list__email" placeholder="Your Email"></p>
							</div>
							<div id="mce-responses" class="clear">
								<div class="response" id="mce-error-response" style="display:none"></div>
								<div class="response" id="mce-success-response" style="display:none"></div>
							</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_ededb7e20c7658a52f1d02987_0a9a068b5a" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Submit" name="submit" id="mc-embedded-subscribe" class=""></div>
						</div>
					</form>
				</div>

<!--End mc_embed_signup-->

	<!-- outputs AF icon -->
		<nav class="footer-menu">
		<span><?php bloginfo('name'); ?> &copy; <?php echo date('Y');?></span>

		
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
<?php

get_header(); ?>
	
	<!-- wrapper -->
	<div class="wrapper clearfix">
		<div id="page" class="gutters">
		<!-- left column -->
		<div class="two-col-left">
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content','page');

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
		</div><!-- left column -->

		<!-- right column --> 
		<div class="two-col-right">
		<?php get_sidebar(); ?>
		</div> <!-- right column --> 

		</div> <!-- page -->

	</div><!-- /wrapper -->
	
	<?php get_footer();

?>
	</div>
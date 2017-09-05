<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="wrapper clearfix">
		
		<!-- main-column -->
		<div class="post-main-column">
			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content','page');

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>
		</div><!-- /main-column -->

		
	</div><!-- /site-content -->

	<div class="">
	
	<?php get_footer();

?>
	</div>
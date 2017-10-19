<?php

get_header(); ?>

<div class="wrapper">

	<!-- site-content -->
	<div class="post-container clearfix">
		
		<!-- main-column -->
		<div class="main-column">
			
			<?php
			
			if (have_posts()) : ?>

				<h2>Search results for: <?php the_search_query(); ?></h2>

				<?php
				while (have_posts()) : the_post();

				the_content();

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
			
			?>
			
		</div><!-- /main-column -->
		
		<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>
		
	</div><!-- /post-container -->

</div> <!-- wrapper --> 

<?php get_footer();

?>
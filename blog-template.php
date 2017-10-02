<?php 
/*
* Template Name: Blog Post
*/
?>

<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">

		<div class="wrapper"> 
		
		<!-- main-column -->
		<div class="main-column">

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', get_post_format());

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>

		<?php get_sidebar(); ?>

		</div><!-- /main-column -->

	</wrapper> <!-- wrapper -->

		</div><!-- /site-content -->
		
	
	<?php get_footer();

?>
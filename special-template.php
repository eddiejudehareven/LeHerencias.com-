<?php

/*
Template Name: Special Layout
*/

get_header(); ?>

<!-- wrapper -->
<div class="wrapper clearfix">
	<div id="page-news">
		<div class="two-col-left">
			<?php if (have_posts()) :
			while (have_posts()) : the_post();

				get_template_part('content');

			endwhile;

		else :
			echo '<p>No content found</p>';

		endif;
		?>

	</div> <!-- two-col-left -->

		<!-- right column --> 
		<div class="two-col-right">
			<?php get_sidebar(); ?>
		</div> <!-- two-col-right --> 


	</div> <!-- page -->

</div><!-- /wrapper -->

<?php get_footer();

?>
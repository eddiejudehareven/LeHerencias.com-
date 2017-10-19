<!-- is this for single post pages? --> 

<?php

get_header(); ?>

<!-- wrapper -->
<div class="wrapper clearfix">
	<div id="page">
		<div class="full-width-content">
			<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>


				<?php get_template_part('content-page','page'); 

			endwhile;

		else :
			echo '<p>No content found</p>';

		endif;
		?>

	</div> <!-- page-full-width-content --> 

</div> <!-- page -->

</div><!-- /wrapper -->

<?php get_footer();

?> 
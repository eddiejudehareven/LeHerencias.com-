 <?php 
/*
Template Name: Two Column Page 
*/

get_header(); ?>

<!-- wrapper --> 

<div class="wrapper clearfix">
	<div id="two-column-page">

		<div class="colum-left">
			<h2>Image Here</h2>
		</div> <!-- left-column-content --> 

		<div class="main-column">
			<h2>Content Here</h2>

			<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>

				<?php get_template_part('content-page','page');

			endwhile;

		else :
			echo '<p>No content found</p>';

		endif;
		?>

	</div> <!-- main-column-content --> 

</div> <!-- two-column-page -->

</div><!-- /wrapper -->

<?php get_footer();

?> 
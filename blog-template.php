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

		<div class="side-bar-column">
			<?php get_sidebar(); ?>
		</div> <!-- side bar -->
		
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

	</div><!-- /main-column -->


</wrapper> <!-- wrapper -->

</div><!-- /site-content -->


<?php get_footer();

?>
/*
Template Name: Blog Posts
*/

<?php

get_header(); ?>

<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

<!-- wrapper -->
<div class="wrapper clearfix">
	<div id="page-news">
		<div class="two-col-left">
			<?php if (have_posts()) :
			while (have_posts()) : the_post();

				get_template_part('content'); ?>

			<?php endwhile; ?>

				<div class="blog-navigation">
		<span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
		</div><!-- /.navigation -->

		<?php else :
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
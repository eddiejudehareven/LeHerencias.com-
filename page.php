<?php

get_header(); ?>

<!-- wrapper -->
<div class="wrapper clearfix">
	<div id="page">
		<div class="full-width-content">
			<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>

				<article class="post page">

					<!-- so parent page link displays on child pages --> 
					<span class="parent-link"><a href="<?php echo get_the_permalink(get_top_ancestor_id()); ?>"><?php echo get_the_title(get_top_ancestor_id()); ?></a></span>

			<?php 

			$args = array(
				'child_of' => get_top_ancestor_id(), 
				'title_li' => ''
			);

			?>

	<?php wp_list_pages($args); ?>

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
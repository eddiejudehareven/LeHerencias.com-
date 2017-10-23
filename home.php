<!-- layout for blog posts page --> 

<?php

get_header(); ?>

		<div class="wrapper"> 

			<!-- post-container -->
	<div class="post-container clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			<h3 class="blog-page-title">Latest Posts</h3>

				<article>

			<?php if (have_posts()) :
				while (have_posts()) : the_post();

				get_template_part('content', get_post_format());

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;
				?>

				</article>

			</div>

			<div class="side-bar">
		<?php get_sidebar(); ?>
	</div>

	</div> <!-- /post container -->	

	</div> <!-- wrapper -->

	
	<?php get_footer();

?>

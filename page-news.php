<!-- page.php for the blog/news page --> 

<?php

get_header(); ?>
	
	
			<?php if (have_posts()) :
				while (have_posts()) : the_post(); ?>

<!-- wrapper -->
	<div class="wrapper clearfix">
		<div id="page" class="gutters">
		<!-- left column -->
		<div class="two-col-left">
		<h2><?php the_title(); ?></h2>
		</div><!-- left column -->

		<!-- right column --> 
		<div class="two-col-right">
		<?php get_sidebar(); ?>
		</div> <!-- right column --> 

				<!-- new column loop begins here --> 
				
						$newsColumn = new WP_Query('news=55&posts_per_page=3'); // change page ID for each loop

						if ($newsColumn->have_posts()) :

							while ($newsColumn->have_posts()) : $newsColumn->the_post(); ?>

							<h2><?php the_title(); ?></h2>	

							<?php endwhile;

							else : 

							// non content msg here

							endif;
							wp_reset_postdata(); // put after every WP Query ?>
	</div> <!-- page -->

	</div><!-- /wrapper -->
	
	<?php get_footer();

?>
		
<?php 

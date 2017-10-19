<?php

 /* what is between this & endwhile = content would be repeated on every blog post */
/* index.php targets the home page/blog page */ 
//anything in the loop will get repeated for every post // 

get_header(); ?>

<div class="wrapper">

	<!-- site-content -->
	<div class="post-container clearfix">
		
		<!-- main-column -->
		<div class="main-column">

			
			<?php
			
			if (have_posts()) :

				?>

				<h2><?php

					if ( is_category() ) {
						single_cat_title();
					} elseif ( is_tag() ) {
						single_tag_title();
					} elseif ( is_author() ) {
						the_post();
						echo 'Author Archives: ' . get_the_author();
						rewind_posts();
					} elseif ( is_day() ) {
						echo 'Daily Archives: ' . get_the_date();
					} elseif ( is_month() ) {
						echo 'Monthly Archives: ' . get_the_date('F Y');
					} elseif ( is_year() ) {
						echo 'Yearly Archives: ' . get_the_date('Y');
					} else {
						echo 'Archives:';
					}

				?></h2>

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
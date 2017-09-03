<?php

get_header(); ?>
	
	<!-- site-content -->
	<div class="site-content clearfix">
		
			<h3>WELCOME</h3>

			<?php if (have_posts()) :

				while (have_posts()) : the_post();

				get_template_part('content', 'page');

				endwhile;

				else :
					echo '<p>No content found</p>';

				endif;  ?>
				<!-- home page columns --> 
				<div class="home-page-columns clearfix">
				
				<!-- columns one -->
				<div class="column-one">

				<?php 

					// new column loop begins here
						$newsColumn = new WP_Query('news=55&posts_per_page=2'); // change page ID for each loop

						if ($newsColumn->have_posts()) :

							while ($newsColumn->have_posts()) : $newsColumn->the_post(); ?>

							<h2><?php the_title(); ?></h2>	

							<?php endwhile;

							else : 

							// non content msg here

							endif;
							wp_reset_postdata(); // put after every WP Query ?>
					
				</div> <!-- column one -->

				<!-- column two -->
				<div class="column-two">
				<?php 
					// Events column loop begins here

							$eventsColumn = new WP_Query('events=2&posts_per_page=2');

						if ($eventsColumn->have_posts()) :

							while ($eventsColumn->have_posts()) : $eventsColumn->the_post(); ?>

							<h2><?php the_title(); ?></h2>	

							<?php endwhile;

							else : 

							// non content msg here

							endif;
							wp_reset_postdata(); // put after every WP Query ?>

				</div><!-- column two -->

				<!-- column three --> 
				<div class="column-three">
				<?php 
				// third column loop begins here 

							$thirdColumn = new WP_Query('events=2&posts_per_page=2');

						if ($thirdColumn->have_posts()) :

							while ($thirdColumn->have_posts()) : $thirdColumn->the_post(); ?>

							<h2><?php the_title(); ?></h2>	

							<!-- if wanting a link: use a href with permalink php --> 

							<?php endwhile;

							else : 

							// non content msg here

							endif;
							wp_reset_postdata(); // put after every WP Query ?>

					</div><!-- column three -->
					

				</div> <!-- home page columns -->

<?php get_footer( );
?>
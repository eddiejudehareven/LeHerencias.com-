<?php

get_header(); ?>

<!-- home page columns --> 
	<div class="wrapper clearfix">

	<h3>WELCOME</h3>

	<?php if (have_posts()) :

	while (have_posts()) : the_post();

	the_content(); 

	endwhile;

	else :
		echo '<p>No content found</p>';

	endif;  ?>

		<!-- columns one -->
		<div class="home-column-one">

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
				<div class="home-column-two">

					<h2><?php the_permalink(); ?></h2>	

				</div><!-- column two -->

				<!-- column three --> 
				<div class="home-column-three"> 

					<h2><?php the_permalink(); ?></h2>	

					<!-- if wanting a link: use a href with permalink php --> 

				</div><!-- column three -->

			</div> <!-- home page columns -->

			<?php get_footer( );
			?>
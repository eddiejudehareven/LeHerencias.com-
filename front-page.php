<?php

get_header(); ?>

<div id="metaslider">
	<?php 
	echo do_shortcode("[metaslider id=43]"); 
	?>
</div>

<!-- wrapper --> 
<div class="wrapper clearfix">

	<?php if (have_posts()) :

	while (have_posts()) : the_post();

	the_content(); 

	endwhile;

	else :
		echo '<p>No content found</p>';

	endif;  ?>

	<!-- grid container -->
	<div class="grid-container">

		<!-- row --> 
		<div class="row">
			<div id="front-page-block" class="front-page-section">
				<!-- column one --> 
				<div class="column-left">
					<h2><a href="#" class="btn">Professional Production</a></h2>
				</div> <!-- front page section --> 
			</div> <!-- row --> 
		</div> <!-- column one --> 

		<!-- row --> 
		<div class="row">
			<!-- column two -->
			<div class="column-right">
				<h2><a href="#" class="btn">Community Engagement</a></h2>
				<img src="herencias/images/front-page2.jpg">
			</div> <!-- column two --> 
		</div> <!-- row --> 

		<div class="row">
			<!-- column three -->
			<div class="column-center">
			<h2><a href="#" class="btn">Advocacy and Consultation</a></h2>
			</div> <!-- row -->
			
		</div> <!-- column three --> 

	</div> <!-- grid container -->

	</div> <!-- wrapper -->

	<?php get_footer( );
	?>
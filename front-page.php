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

	while (have_posts()) : the_post(); ?>

	<?php the_content();  

	endwhile;

	else :
		echo '<p>No content found</p>';

	endif;  ?>


	<!-- grid container -->
	<div class="grid-container">

		<!-- column one --> 
		<div class="column-left">
			<!-- create div around h2 in order to enforce min height -->
			<div class="column-title"><h2><a href="#" class="btn front-column-btn">Professional Production</a></h2></div>
			<a href="<?php the_field('link-url-left') ?>"><img src="<?php the_field('image-left') ?>"></a>
		</div> <!-- column one --> 

		<!-- column two -->
		<div class="column-centre">
			<div class="column-title"><h2><a href="#" class="btn front-column-btn">Advocacy & Consultation</a></h2></div>
			<a href="<?php the_field('link-url-centre') ?>"><img src="<?php the_field('image-centre') ?>"></a>
		</div> <!-- column two --> 
		

		<!-- column three -->
		<div class="column-right">
			<div class="column-title"><h2><a href="#" class="btn front-column-btn">Community Engagement</a></h2></div>
			<a href="<?php the_field('link-url-right') ?>"><img src="<?php the_field('image-right') ?>"></a>
		</div> <!-- column three -->  

	</div> <!-- grid container -->

</div> <!-- wrapper -->

<?php get_footer( );
?>
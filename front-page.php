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

		<!-- column one --> 
		<div class="column-left">
			<h2><a href="#" class="btn">Professional Production</a></h2>
			<a href="<?php the_field('link-url-left') ?>"><img src="<?php the_field('image-left') ?>"></a>
		</div> <!-- column one --> 

		<!-- row --> 

		<!-- column two -->
		<div class="column-centre">
			<h2><a href="#" class="btn">Advocacy & Consultation</a></h2>
			<a href="<?php the_field('link-url-centre') ?>"><img src="<?php the_field('image-centre') ?>"></a>
		</div> <!-- column two --> 
		

		<!-- column three -->
		<div class="column-right">
			<h2><a href="#" class="btn">Community Engagement</a></h2>
			<a href="<?php the_field('link-url-right') ?>"><img src="<?php the_field('image-right') ?>"></a>
		</div> <!-- column three --> 

	</div> <!-- grid container -->

</div> <!-- wrapper -->
<?php get_footer( );
?>
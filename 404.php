<?php
get_header(); ?>

<div class="wrapper">
	<div id="" class="">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="site-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h1>
				</header><!-- site-header -->

				<!-- class for the content of a page -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
					<!-- function still needs to be compelted in functions.php -->
					<?php get_search_form(); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- ? -->
</div><!-- .wrapper -->

<?php get_footer();
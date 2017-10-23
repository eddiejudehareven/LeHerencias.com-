	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo('charset'); ?>"> <!-- character set -->
			<meta name="description" content="<?php bloginfo('description'); ?>" />
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- responsiveness // add scale -->
			<title><?php bloginfo('name'); ?></title>
			<?php wp_head(); ?> <!-- wp plugins --> 
		</head>	


		<body <?php body_class(); ?>> <!-- to target css easily -->

				<!-- top bar --> 
	 		<div class="top-bar">

	 			<h5><a href="#">Français</a></h5>

	 				<div class="top-bar-wrap">

				<!--outputs AF icon-->
				<div id="social-media-icons" class="social-media-icons-header">
					<a href="#"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a>
					<address><a href="mailto:contact@groupeherencias.ca"<i class="fa fa-envelope" aria-hidden="true">&nbsp;</i></a></address><br>
					<i class="fa fa-phone" aria-hidden="true">&nbsp;(111) 111-1111</i>
				</div> <!-- outputs AF icon --> 

					<!-- hd-search -->
				<div id="searchbar">
				<div class="hd-search">
					<?php get_search_form(); ?>
				</div><!-- /hd-search --> 
			</div> <!-- searchbar -->

				</div> <!-- top bar wrap --> 
			</div> <!-- top bar -->
				
				<!-- site-header -->
			<header class="site-header">

				<div class="site-heading"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<!-- <h5><?php bloginfo('description'); ?></h5></div> -->

				<a href="<?php the_field('link-url-left') ?>" class="header-logo"><img src="<?php the_field('image') ?>"></a><br>
		
				
				<!-- <div id="site-nav-container"> -->
						<nav class="site-nav" role="navigation">
						<?php

						$args = array(
							'theme_location' => 'primary menu',
							'menu' => 'primary menu'
						);

						?>

						<?php wp_nav_menu(  $args ); ?>
					</nav> 
					

				</header><!-- /site-header -->
			
			
			
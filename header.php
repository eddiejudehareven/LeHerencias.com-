	<!DOCTYPE html>
	<html <?php language_attributes(); ?>>
		<head>
			<meta charset="<?php bloginfo('charset'); ?>"> <!-- character set -->
			<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"> <!-- responsiveness // add scale -->
			<title><?php bloginfo('name'); ?></title>
			<?php wp_head(); ?> <!-- wp plugins --> 
		</head>	


		<body <?php body_class(); ?>> <!-- to target css easily -->

				<!-- top bar --> 
	 		<div class="top-bar">
	 				<div class="top-bar-wrap">
				<!--outputs AF icon-->
				<div id="social-media-icons" class="social-media-icons-header">
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
				</div> <!-- outputs AF icon --> 

				<!-- hd-search -->
				<div id="searchbar">
				<div class="hd-search">
					<i class="fa fa-search fa-lg" aria-hidden="true"></i>
					<?php get_search_form(); ?>
				</div><!-- /hd-search --> 
			</div> <!-- searchbar -->
				</div> <!-- top bar wrap --> 
			</div> <!-- top bar -->
				
				<!-- site-header -->
			<header class="site-header">

				<div class="site-heading"><h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
				<!-- <h5><?php bloginfo('description'); ?></h5></div> -->
		
				

				<!-- <div id="site-nav-container"> -->
						<nav class="site-nav">
						<?php

						$args = array(
							'menu' => 'primary menu'
						);

						?>

						<?php wp_nav_menu(  $args ); ?>
					</nav> 

					<nav class="mobile-navigation" role="navigation">
						<button class="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button></button>

						<?php

						$args = array(
							'menu' => 'primary menu'
						);

						?>

						<?php wp_nav_menu(  $args ); ?>

					</nav>
					

				</header><!-- /site-header -->
			
			
			
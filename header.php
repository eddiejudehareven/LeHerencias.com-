<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>"> <!-- character set -->
		<meta name="viewport" content="width=device-width"> <!-- responsiveness -->
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?> <!-- wp plugins --> 
	</head>	


<body <?php body_class(); ?>> <!-- to target css easily -->
	
		<!-- site-header -->
		<header class="site-header">

		<!--outputs AF icon-->
	<div id="social-media-icons" class="social-media-icons-header">
	<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
	<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
	</div>
	<!-- outputs AF icon --> 
			
			<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			<h5><?php bloginfo('description'); ?></h5> 

			</header><!-- /site-header -->
			
			<!-- hd-search -->
			<div class="hd-search">
			<i class="fa fa-search" aria-hidden="true"></i>
			<?php get_search_form(); ?>
			</div><!-- /hd-search --> 

			<nav class="site-nav">
				
				<?php
				
				$args = array(
					'menu' => 'primary menu'
				);
				
				?>
				
				<?php wp_nav_menu(  $args ); ?>
			</nav>
			
<?php
//theme set up
function addAssets() { // resources: any css or js files // 
	
	wp_enqueue_style('style', get_stylesheet_uri());
	// adding various functionality to your theme all go in this function 
}


// add_action allows us to fire certain functions on events we specify
// in this case, we fire our custom function addAssets on the wp_enqueue_scripts hook (which fires when user loads page)
add_action('wp_enqueue_scripts', 'addAssets');

//Fonts
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css?family=Raleway|Assistant", false ); // add link to font you want
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

// //404 Not Found 
// get_search_form('echo', 'string');

// // // Create Slider Post Type
// require( get_template_directory() . '/slider/slider_post_type.php' );
// // Create Slider
// require( get_template_directory() . '/slider/slider.php' );

function wpb_load_fa() {
 
wp_enqueue_style( 'wpb-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
 
}
 
add_action( 'wp_enqueue_scripts', 'wpb_load_fa' );

/**
 Register our sidebars and widgetized areas.
 */
function sidebar_widgets_init() {

	register_sidebar( array(
		'name'          => 'sidebar-news',
		'id'            => 'sidebar_news_right_1',
		'class' 		=> 'news',
		'description'	=> 'sidebar for the news/blog page',
		'before_widget' => '<div class="widget-item">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'sidebar_widgets_init' );



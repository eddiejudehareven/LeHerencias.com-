<?php
//theme set up
function addAssets() { // resources: any css or js files // 
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/navigation.js', array('jquery'));
	// adding various functionality to your theme all go in this function 
}


// Loading JS Navigation 
// function addNavigation() {
// 	wp_enqueue_script( 'wpb_togglemenu', get_template_directory_uri() . './js/navigation.js', array('jquery'), '20160909', true );
// }


// add_action allows us to fire certain functions on events we specify
// in this case, we fire our custom function addAssets on the wp_enqueue_scripts hook (which fires when user loads page)
add_action('wp_enqueue_scripts', 'addAssets');

// Registering of Menus to Theme // 
function register_my_menus() {
  register_nav_menus(
    array(
      'primary menu' => __( 'primary menu' ),
      'footer menu' => __( 'footer menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// List Child Pages

// function wpb_list_child_pages() { 
 
// global $post; 
 
// if ( is_page() && $post->post_parent )
 
//     $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
// else
//     $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
 
// if ( $childpages ) {
 
//     $string = '<ul>' . $childpages . '</ul>';
// }
 
// return $string;
 
// }
 
// add_shortcode('wpb_childpages', 'wpb_list_child_pages'); 

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



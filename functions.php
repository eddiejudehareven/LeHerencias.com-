<?php
//theme set up
function addAssets() { // resources: any css or js files // 
	
	wp_enqueue_style('style', get_stylesheet_uri());
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/navigation.js', array('jquery'));
	// adding various functionality to your theme all go in this function 
}
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

//Fonts
function wpb_add_google_fonts() {
 
wp_enqueue_style( 'wpb-google-fonts', "https://fonts.googleapis.com/css?family=Raleway|Assistant", false ); // add link to font you want
}
 
add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );

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

// Function to get archives list with limited months // shortcode used in sidebar 'text' widget
function wpb_limit_archives() { 
 
$my_archives = wp_get_archives(array(
    'type'=>'monthly', 
    'limit'=>12,
    'echo'=>0
));
     
return $my_archives; 
 
} 
 
// Create a shortcode
add_shortcode('wpb_custom_archives', 'wpb_limit_archives'); 
 
// Enable shortcode execution in text widget
add_filter('widget_text', 'do_shortcode'); 

// limiting number of tags in tag cloud widget
add_filter('widget_tag_cloud_args', 'limit_tag_in_tag_cloud_widget');

function limit_tag_in_tag_cloud_widget($args){
if(isset($args['taxonomy']) && $args['taxonomy'] == 'post_tag'){
$args['number'] = 10; //Limit number of tags
}

return $args;
}

/* Stylesheet for the Visual Editor */ 

function wpdocs_theme_add_editor_styles() {
    add_editor_style( 'styles/modules/editor-style.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );
// add_editor_style( array( 'styles/modules/editor-style.css') );

// Read more link //
function herencias_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'herencias_excerpt_more' );
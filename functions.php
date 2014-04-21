<?php
/*****************************************************************************/
/*Define Constants*/
/*****************************************************************************/

define('THEMEROOT', get_stylesheet_directory_uri());
define('IMAGES',THEMEROOT. '/images');
function Miza_setup() {
	/*
	 * Makes voyage available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on Twenty Thirteen, use a find and
	 * replace to change 'twentythirteen' to the name of your theme in all
	 * template files.
	 */
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );
	/*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */


	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'Miza_setup' );

function Miza_assets() {

	wp_enqueue_style( 'reset', get_template_directory_uri().'/css/reset.css',false,'0.0.0.1', 'all' );
	wp_enqueue_style( 'ut-fontface', get_template_directory_uri().'/css/ut-fontface.css',false,'0.0.0.1', 'all' );
	wp_enqueue_style( 'ut-responsive-grid', get_template_directory_uri().'/css/ut-responsive-grid.css',false,'0.0.0.1', 'all' );
	wp_enqueue_style( 'fontello', get_template_directory_uri().'/css/fontello.css',false,'0.0.0.1', 'all' );
	wp_enqueue_style( 'animation', get_template_directory_uri().'/css/animation.css',false,'0.0.0.1', 'all' );
	wp_enqueue_style( 'style', get_template_directory_uri().'/style.css',false,'1.0', 'all' );
	// Load JavaScripts
	if (!is_admin()) {
		wp_deregister_script('jquery');
	}
    wp_enqueue_script( 'jquery.min', get_template_directory_uri().'/js/jquery.min.js',false, '1.10.2',false);   
    //wp_enqueue_script( 'SmoothScroll', get_template_directory_uri().'/js/SmoothScroll.js',false, '1.2.1',false);   
    wp_enqueue_script( 'modernizr', get_template_directory_uri().'/js/modernizr.js',false, '2.6.2',false);   
    wp_enqueue_script( 'device', get_template_directory_uri().'/js/device.min.js',false, '0.1.57',false);   
    wp_enqueue_script( 'YTPlayer', get_template_directory_uri().'/js/jquery.mb.YTPlayer.js',false, '1.0.0',false);
    wp_enqueue_script( 'parallax', get_template_directory_uri().'/js/jquery.parallax.min.js',false, '1.1.3',false);
    wp_enqueue_script( 'scrollTo', get_template_directory_uri().'/js/jquery.scrollTo.min.js',false, '1.0.0',false);
    wp_enqueue_script( 'waypoints', get_template_directory_uri().'/js/waypoints.min.js',false, '2.0.2',false);
    wp_enqueue_script( 'easing', get_template_directory_uri().'/js/jquery.easing.1.3.js',false, '1.3',false);
    wp_enqueue_script( 'plugin', get_template_directory_uri().'/js/plugin.js',false, '1.0.0',false);
    wp_enqueue_script( 'mixitup', get_template_directory_uri().'/js/jquery.mixitup.min.js',false, '1.5.5',false);
    wp_enqueue_script( 'contentcarousel', get_template_directory_uri().'/js/jquery.contentcarousel.js',false, '1.0.0',false);
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/jquery.custom.js',false, '1.0.0',false);
    wp_enqueue_script( 'map','//maps.google.com/maps/api/js?sensor=true&language=en',false, '2.6.2',false);
}

add_action( 'wp_enqueue_scripts', 'Miza_assets' );



function custom_excerpt_length( $length ) {
	return 100;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
function new_excerpt_more( $more ) {
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');

function get_vogaye_next_link($html){
	preg_match('/<a href="(.+)" >/', $html, $match);
	if(isset($match[1])){
		$url=$match[1];
		return $url;
	}
}
function miza_functions() {
?>

<?php   
}
add_action('wp_footer', 'miza_functions', 50);

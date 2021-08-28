<?php
/**
 * UnderStrap functions and definitions
 *
 * @package UnderStrap
 */


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

require_once get_template_directory() ."/inc/tgm/tgm-activation.php";
require_once get_template_directory() ."/inc/redux/config.php";
require_once get_template_directory() ."/inc/demo-data/demo.php";

// UnderStrap's includes directory.
$understrap_inc_dir = 'inc';

// Array of files to include.
$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);

// Load WooCommerce functions if WooCommerce is activated.
if ( class_exists( 'WooCommerce' ) ) {
	$understrap_includes[] = '/woocommerce.php';
}

// Load Jetpack compatibility file if Jetpack is activiated.
if ( class_exists( 'Jetpack' ) ) {
	$understrap_includes[] = '/jetpack.php';
}

// Include files.
foreach ( $understrap_includes as $file ) {
	require_once get_theme_file_path( $understrap_inc_dir . $file );
}



/**
 * Redux Framework Init.
 */
function get_option_value($key, $default=''){
	if(class_exists('Redux')){
		return Redux::get_option( 'aleshatech-redux', $key, $default );
	}else{
		return $default;
	}
}





// Add Menu Class li Tag
function tanem_menu_item_class($classes, $item)
{
    $classes[] = 'nav-item';
    return $classes;
}
add_filter('nav_menu_css_class', 'tanem_menu_item_class', 10, 2);
// Add Menu Class a Tag
function add_link_atts($atts)
{
    $atts['class'] = "nav-link";
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_link_atts', 100, 1);

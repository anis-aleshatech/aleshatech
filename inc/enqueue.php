<?php
/**
 * UnderStrap enqueue scripts
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'aleshatech-style', get_stylesheet_uri(), array(), $css_version  );
		wp_enqueue_style( 'aleshatech-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'animate-css',  get_theme_file_uri('assets/css/animate.min.css'),null, $css_version  );
		wp_enqueue_style( 'fontawesome-css',  get_theme_file_uri('assets/css/fontawesome.css'),null, $css_version  );
		wp_enqueue_style( 'glightbox-css',  get_theme_file_uri('assets/vendors/glightbox/css/glightbox.min.css'),null, $css_version  );
		wp_enqueue_style( 'aos-css',  get_theme_file_uri('assets/css/aos.css'),null, $css_version  );
		wp_enqueue_style( 'custom-css',  get_theme_file_uri('assets/css/style.css'),null, $css_version  );


		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'aleshatech-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script('glightbox-js',get_theme_file_uri('/assets/vendors/glightbox/js/glightbox.min.js'),['jquery'],$css_version,true);   
		wp_enqueue_script('bootstrap-js',get_theme_file_uri('/assets/js/bootstrap.bundle.js'),['jquery'],$css_version,true);   
		wp_enqueue_script('bootnavbar-js',get_theme_file_uri('/assets/js/bootnavbar.js'),['jquery'],$css_version,true);   
		wp_enqueue_script('all-js',get_theme_file_uri('/assets/js/all.js'),['jquery'],$css_version,true);   
		wp_enqueue_script('aos-js',get_theme_file_uri('/assets/js/aos.js'),['jquery'],$css_version,true);   
		wp_enqueue_script('main-js',get_theme_file_uri('/assets/js/main.js'),['jquery'],$css_version,true);   

	wp_enqueue_script( 'aleshatech-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $css_version, true );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // End of if function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );

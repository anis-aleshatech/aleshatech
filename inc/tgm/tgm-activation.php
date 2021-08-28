<?php


require_once get_template_directory()."/inc/tgm/class-tgm-plugin-activation.php";

add_action( 'tgmpa_register', 'aleshatech_register_required_plugins' );



function aleshatech_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Alesha Tech Elementor Widget', // The plugin name.
			'slug'               => 'Atl-Elementor-Extension', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/inc/plugins/Atl-Elementor-Extension.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'Social Icon', // The plugin name.
			'slug'               => 'socialicon', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/inc/plugins/socialicon.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => true, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => true, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
		array(
			'name'               => 'Revulation Slider', // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() . '/inc/plugins/revslider.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),



	
		array(
			'name'        => 'Redux Framework',
			'slug'        => 'redux-framework',
			'force_activation'   => true, 
			'required'     => true,
		),
		
		array(
			'name'        => 'Classic Widgets',
			'slug'        => 'classic-widgets',
			'required'     => true,
		),
		array(
			'name'        => 'Elementor',
			'slug'        => 'elementor',
			'force_activation'   => true, 
			'required'     => true,
		),
		array(
			'name'        => 'Contact Form',
			'slug'        => 'contact-form-7',
		),
		array(
			'name'        => 'Demo Content Import',
			'slug'        => 'one-click-demo-import',
		),

	);

	


	tgmpa( $plugins, $config );
}

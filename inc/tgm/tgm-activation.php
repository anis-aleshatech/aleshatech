<?php


require_once get_template_directory()."/inc/tgm/class-tgm-plugin-activation.php";

add_action( 'tgmpa_register', 'aleshatech_register_required_plugins' );



function aleshatech_register_required_plugins() {

	$plugins = array(

		// This is an example of how to include a plugin bundled with a theme.
		array(
			'name'               => 'Alesha Tech Assets', // The plugin name.
			'slug'               => 'atl-extension', // The plugin slug (typically the folder name).
			'source'             => 'https://github.com/anis-aleshatech/atl-extension/archive/refs/heads/main.zip', // The plugin source.
			'required'           => true, // If false, the plugin is only 'recommended' instead of required.
			'version'            => '', // E.g. 1.0.0. If set, the active plugin must be this version or higher. If the plugin version is higher than the plugin version installed, the user will be notified to update the plugin.
			'force_activation'   => false, // If true, plugin is activated upon theme activation and cannot be deactivated until theme switch.
			'force_deactivation' => false, // If true, plugin is deactivated upon theme switch, useful for theme-specific plugins.
			'external_url'       => '', // If set, overrides default API URL and points to an external URL.
			'is_callable'        => '', // If set, this callable will be be checked for availability to determine if a plugin is active.
		),
	
		array(
			'name'               => 'Revulation Slider', // The plugin name.
			'slug'               => 'revslider', // The plugin slug (typically the folder name).
			'source'             => get_template_directory() .'/inc/plugins/revslider.zip', // The plugin source.
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
			'force_activation'   => false, 
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
			'force_activation'   => false, 
			'required'     => false,
		),
		array(
			'name'        => 'Contact Form',
			'slug'        => 'contact-form-7',
		),
		array(
			'name'        => 'Demo Content Import',
			'slug'        => 'one-click-demo-import',
		),
		array(
			'name'        => 'Mail Chimp',
			'slug'        => 'mailchimp-for-wp',
		),

	);
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
		/*
		'strings'      => array(
			'page_title'                      => __( 'Install Required Plugins', 'theme-slug' ),
			'menu_title'                      => __( 'Install Plugins', 'theme-slug' ),
			// <snip>...</snip>
			'nag_type'                        => 'updated', // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
		)
		*/
	);
	


	tgmpa( $plugins, $config );
}

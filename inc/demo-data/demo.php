<?php

function aleshatech_import_files() {
  return [
    [
      'import_file_name'             => 'Alesha Tech Demo Data',
      'categories'                   => [ 'New Category', 'Old Category' ],
      'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo-data/content.xml',
      'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo-data/localhost-alesha-tech-widgets.wie',
      'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo-data/aleshatech-export.dat',
      'local_import_redux'           => [
        [
          'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo-data/redux_options__aleshatech-redux_backup_08-28-2021.json',
          'option_name' => 'aleshatech-redux',
        ],
      ],
      'import_preview_image_url'     => get_template_directory_uri().'/screenshot.png',
      'preview_url'                  => 'http://www.aleshatech.net',
    ],
 
  ];
}
add_filter( 'ocdi/import_files', 'aleshatech_import_files' );

function aleshatech_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
 
    set_theme_mod( 'nav_menu_locations', [
            'primary' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function in your theme.
        ]
    );
 
    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );
 
    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
 
}
add_action( 'ocdi/after_import', 'aleshatech_after_import_setup' );
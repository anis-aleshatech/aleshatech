<?php
/**
 * Redux Framework media config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Blog', 'alesha-tech' ),
		'id'         => 'blog-settings',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'blog-layout',
				'url'          => true,
				'type'     => 'image_select',
				'title'        => esc_html__( 'Select Layout', 'alesha-tech' ),
				'default' => '2',
				'options'  => array(
						'1'      => array(
							'alt'   => '1 Column', 
							'img'   =>  ReduxFramework::$_url.'assets/img/1c.png'
						),
						'2'      => array(
							'alt'   => '2 Column Left', 
							'img'   => ReduxFramework::$_url.'assets/img/2-col-portfolio.png'
						),
						'3'      => array(
							'alt'   => '2 Column Right', 
							'img'  => ReduxFramework::$_url.'assets/img/3-col-portfolio.png'
						),
						
				),
			)
			)
		)
	
);

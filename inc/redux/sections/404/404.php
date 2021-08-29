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
		'title'      => esc_html__( '404 Page', 'alesha-tech' ),
		'id'         => 'alesha-404',
		'subsection' => true,
		'fields'     => array(
		
			array(
				'id'       => 'text-404',
				'type'     => 'text',
				'title'    => esc_html__( '404 Text', 'alesha-tech' ),
				'desc'     => esc_html__( 'Write Here 404 Text', 'alesha-tech' ),
			),	
			array(
				'id'           => 'image-404',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( '404 Image', 'alesha-tech' ),
				'compiler'     => 'true',
				'preview_size' => 'medium',
			),
				
		),
	)
);

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
		'title'      => esc_html__( 'logo', 'alesha-tech' ),
		'id'         => 'alesha-logo',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Logo', 'alesha-tech' ),
				'compiler'     => 'true',
				'preview_size' => 'thumbnail',
			),
			array(
				'id'       => 'mobile',
				'type'     => 'text',
				'title'    => esc_html__( 'Mobile Number', 'alesha-tech' ),
				'desc'     => esc_html__( 'Write Here Mobile Number', 'alesha-tech' ),
			),
			array(
				'id'       => 'email',
				'type'     => 'text',
				'title'    => esc_html__( 'Email Address', 'alesha-tech' ),
				'desc'     => esc_html__( 'Write Here Email Address', 'alesha-tech' ),
			),
				
		),
	)
);

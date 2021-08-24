<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Copy Right', 'alesha-tech' ),
		'desc'             => esc_html__( 'Write Here Footer Text ', 'alesha-tech' ),
		'id'               => 'copyright-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'copyright',
				'type'     => 'text',
				'title'    => esc_html__( 'Copy Right', 'alesha-tech' ),
				'desc'     => esc_html__( 'Write Here Copy Right Text', 'alesha-tech' ),
				'default'  => '© COPYRIGHT - ALESHA TECH. ALL RIGHTS RESERVED',
			),
			
		),
	)
);

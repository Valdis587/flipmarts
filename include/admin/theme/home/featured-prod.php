<?php
/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Избранные товары', 'your-textdomain-here' ),
		'id'         => 'featured-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-featured-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Избранные товары Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-featured-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Избранные товары',
			),
        ),
        )
    );
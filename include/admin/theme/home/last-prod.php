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
		'title'      => esc_html__( 'Последние поступления', 'your-textdomain-here' ),
		'id'         => 'last-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-lastslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Последние поступления Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-lastslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Последние поступления',
			),
        ),
        )
    );
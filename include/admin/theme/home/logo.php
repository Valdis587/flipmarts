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
		'title'      => esc_html__( 'Лотипы', 'your-textdomain-here' ),
		'id'         => 'logo-home',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'logo-home-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Лотипы Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
                'id'       => 'logo-home-width',
                'type'     => 'text',
                'title'    => esc_html__( 'Ширина', 'your-textdomain-here' ),
                'default'  => '150',
            ),
            array(
                'id'       => 'logo-home-height',
                'type'     => 'text',
                'title'    => esc_html__( 'Высота', 'your-textdomain-here' ),
                'default'  => '150',
            ),
        ),
        )
    );
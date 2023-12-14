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
		'title'      => esc_html__( 'Хиты продаж', 'your-textdomain-here' ),
		'id'         => 'hit-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-hitslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Хиты продаж Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-hitslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Хиты продаж',
			),
        ),
        )
    );
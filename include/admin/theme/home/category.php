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
		'title'      => esc_html__( 'Категории', 'your-textdomain-here' ),
		'id'         => 'cat-home',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-catslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Категории Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-catslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Категории',
			),
        ),
        )
    );
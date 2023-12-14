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
		'title'      => esc_html__( 'Товары со скидкой', 'your-textdomain-here' ),
		'id'         => 'sale-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-saleslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Товары со скидкой Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-saleslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Товары со скидкой',
			),
        ),
        )
    );
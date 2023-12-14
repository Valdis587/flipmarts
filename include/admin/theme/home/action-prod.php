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
		'title'      => esc_html__( 'Товары по акции', 'your-textdomain-here' ),
		'id'         => 'action-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-actionslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Товары по акции Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-actionslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Товары по акции',
			),
        ),
        )
    );
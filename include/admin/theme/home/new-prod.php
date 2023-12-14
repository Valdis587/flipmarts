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
		'title'      => esc_html__( 'Новые поступления', 'your-textdomain-here' ),
		'id'         => 'new-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-newslider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Новые поступления Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-newslider-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Новые поступления',
			),
        ),
        )
    );
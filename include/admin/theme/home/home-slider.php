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
		'title'      => esc_html__( 'Слайдер', 'your-textdomain-here' ),
		'id'         => 'home-slider',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-slider-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Слайдер Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
			array(
				'id'          => 'home-sl',
				'type'        => 'slides',
				'title'       => esc_html__( 'Слайдер', 'your-textdomain-here' ),
				'placeholder' => array(
					'title'       => esc_html__( 'Заголовок', 'your-textdomain-here' ),
					'description' => esc_html__( 'Описание', 'your-textdomain-here' ),
					'url'         => esc_html__( 'Картинка', 'your-textdomain-here' ),
				),
			),
			array(
                'id'       => 'home-preim-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Преимущества Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
			array(
				'id'     => 'preim1',
				'type'   => 'info',
				'notice' => false,
				'style'  => 'success',
				'icon'   => 'el el-info-circle',
				'title'  => esc_html__( 'Преимущество 1', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'preim1-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'MONEY BACK',
			),
			array(
				'id'       => 'preim1-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => '30 Days Money Back Guarantee',
			),
			array(
				'id'     => 'preim2',
				'type'   => 'info',
				'notice' => false,
				'style'  => 'success',
				'icon'   => 'el el-info-circle',
				'title'  => esc_html__( 'Преимущество 2', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'preim2-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'FREE SHIPPING',
			),
			array(
				'id'       => 'preim2-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Shipping on orders over $99',
			),
			array(
				'id'     => 'preim3',
				'type'   => 'info',
				'notice' => false,
				'style'  => 'success',
				'icon'   => 'el el-info-circle',
				'title'  => esc_html__( 'Преимущество 2', 'your-textdomain-here' ),
			),
			array(
				'id'       => 'preim3-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'SPECIAL SALE',
			),
			array(
				'id'       => 'preim3-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Extra $5 off on all items',
			),
		),
	)
);
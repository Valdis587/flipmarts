<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
    $opt_name,
    array(
        'title'      => esc_html__( 'Цветовая схема', 'your-textdomain-here' ),
        'id'         => 'colortheme',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'color-head',
				'type'     => 'color',
				'title'    => esc_html__( 'Основной цвет', 'your-textdomain-here' ),
				'default'  => '#59b210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorHead' => ':root',
                    '--yith-wcan-labels_style_background_hover' => ':root',
                    '--yith-wcan-filters_colors_accent' => ':root',
                    '--yith-wcan-anchors_style_text_hover' => ':root',
                    '--yith-wcan-anchors_style_text_active' => ':root',
					'--yith-wcan-labels_style_background_active' => ':root',
				),
			),
            array(
				'id'       => 'color-head-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста на основном', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorTextHead' => ':root',
				),
			),
			array(
				'id'       => 'color-header-back',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет фона шапки', 'your-textdomain-here' ),
				'default'  => '#333333',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--backHeaderColor' => ':root',
				),
			),
			array(
				'id'       => 'color-header-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста шапки', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--textHeaderColor' => ':root',
				),
			),
			array(
				'id'       => 'minicart-num',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста количества товаров', 'your-textdomain-here' ),
				'default'  => '#ffffff',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'color' => '.header__minicart-item-num',
				),
			),
			array(
				'id'       => 'button-site',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок', 'your-textdomain-here' ),
				'default'  => '#59b210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButton' => ':root',
				),
			),
			array(
				'id'       => 'button-site-hover',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет кнопок при наведении', 'your-textdomain-here' ),
				'default'  => '#59b210',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--ColorButtonHover' => ':root',
				),
			),
			array(
				'id'       => 'color-header-menu-back',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет фона меню', 'your-textdomain-here' ),
				'default'  => '#222222',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--menuBoxColor' => ':root',
				),
			),
			array(
				'id'       => 'color-footer-back',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет фона футера', 'your-textdomain-here' ),
				'default'  => '#202020',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--backFooterColor' => ':root',
				),
			),
			array(
				'id'       => 'color-footer-text',
				'type'     => 'color',
				'title'    => esc_html__( 'Цвет текста футера', 'your-textdomain-here' ),
				'default'  => '#666666',
				'transparent' => false,
				'validate' => 'color',
				'output'   => array(
					'--textFooterColor' => ':root',
				),
			),
        ),
        )
    );
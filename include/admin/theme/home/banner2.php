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
        'title'      => esc_html__( 'Баннеры 2', 'your-textdomain-here' ),
        'id'         => 'banner2',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'home-banner2-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Баннеры 2 Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'     => 'banner2-info',
				'type'   => 'info',
				'notice' => false,
				'style'  => 'success',
				'icon'   => 'el el-info-circle',
				'title'  => esc_html__( 'Рекомендуемый размер 750px на 450px', 'your-textdomain-here' ),
			),
            array(
				'id'       => 'banner2-left',
				'type'     => 'media',
				'title'    => esc_html__( 'Баннер 1', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
            array(
				'id'       => 'banner2-right',
				'type'     => 'media',
				'title'    => esc_html__( 'Баннер 2', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );
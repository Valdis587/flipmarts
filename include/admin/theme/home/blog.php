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
        'title'      => esc_html__( 'Новости', 'your-textdomain-here' ),
        'id'         => 'blog',
        'subsection' => true,
        'fields'     => array(
			array(
                'id'       => 'home-blog-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Новости Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-blog-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Новости',
			),
        ),
        )
    );
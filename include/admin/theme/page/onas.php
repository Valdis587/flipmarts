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
        'title'      => esc_html__( 'О нас', 'your-textdomain-here' ),
        'id'         => 'onas',
        'subsection' => true,
        'fields'     => array(
            array(
				'id'       => 'onastext',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Illo aperiam natus voluptas dolorem enim, modi nostrum sequi numquam impedit repudiandae incidunt voluptatum explicabo dolore dolor deserunt nihil quas earum repellendus! ',
			),
            array(
				'id'       => 'onas-url',
				'type'     => 'media',
				'title'    => esc_html__( 'Картинка', 'your-textdomain-here' ),
				'url'      => false,
				'preview'  => true,
			),
        ),
        )
    );
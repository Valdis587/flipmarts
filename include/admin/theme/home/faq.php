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
		'title'      => esc_html__( 'Вопрос ответ', 'your-textdomain-here' ),
		'id'         => 'faq-home',
		'subsection' => true,
		'fields'     => array(
			array(
                'id'       => 'home-faq-on',
                'type'     => 'switch',
                'title'    => esc_html__( 'Вопрос ответ Вкл/Выкл', 'your-textdomain-here' ),
                'default'  => true,
            ),
            array(
				'id'       => 'home-faq-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => 'Вопрос ответ',
			),
        ),
        )
    );
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
		'title'      => esc_html__( 'Секции', 'your-textdomain-here' ),
		'id'         => 'sections',
		'subsection' => true,
		'fields'     => array(
            array(
				'id'       => 'sections-home',
				'type'     => 'sorter',
				'title'    => 'Секции главной страцы',
				'compiler' => 'true',
				'options'  => array(
					'disabled' => array(
						'slider'     => 'Слайдер',
                        'last'     => 'Последние поступления',
                        'sale'     => 'Товары со скидкой',
                        'new'     => 'Новые поступления',
                        'hit'     => 'Хиты продаж',
                        'actions'     => 'Товары по акции',
						'featured'     => 'Избранные товары ',
                        'category'     => 'Категории',
                        'ban1'     => 'Баннеры 1',
                        'faq'     => 'Вопрос ответ',
                        'bantwo'     => 'Баннеры 2',
                        'blog'     => 'Новости',
					),
					'enabled'  => array(
					
					),
				),
			),
        ),
        )
    );
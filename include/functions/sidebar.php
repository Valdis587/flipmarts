<?php
/**
 * woo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package woo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function woo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар', 'woo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'woo' ),
			'before_widget' => '<section id="%1$s" class="widget sidebar__widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="sitetitle"><span>',
			'after_title'   => '</span></h3>',
		)
	);
}
add_action( 'widgets_init', 'woo_widgets_init' );
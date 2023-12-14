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

require get_template_directory() . '/include/tgm/example.php';

require get_template_directory() . '/include/functions/scripts.php';

require get_template_directory() . '/include/functions/settings.php';

require get_template_directory() . '/include/functions/sidebar.php';

require get_template_directory() . '/include/functions/paginations.php';

require get_template_directory() . '/include/functions/breadcrumbs.php';

require get_template_directory() . '/include/functions/category-menu.php';

require get_template_directory() . '/include/functions/primary-menu.php';

require get_template_directory() . '/include/functions/footer-menu.php';

require get_template_directory() . '/include/functions/rewievs.php';

require get_template_directory() . '/include/functions/faq.php';

require get_template_directory() . '/include/functions/logo.php';

require get_template_directory() . '/include/admin/redux-framework.php';

require get_template_directory() . '/include/admin/theme/config.php';

require get_template_directory() . '/widgets/last-news.php';

require get_template_directory() . '/widgets/rewievs.php';



/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/woocommerce/include/woocommerce.php';

    require get_template_directory() . '/woocommerce/include/hoock.php';

	require get_template_directory() . '/woocommerce/include/loop-img.php';

	require get_template_directory() . '/woocommerce/include/cat-carousel-hoock.php';

	require get_template_directory() . '/woocommerce/include/shop-sidebar.php';

	require get_template_directory() . '/woocommerce/include/quick.php';

	require get_template_directory() . '/woocommerce/include/count.php';

	require get_template_directory() . '/woocommerce/include/message.php';

	require get_template_directory() . '/widgets/sale.php';

	require get_template_directory() . '/widgets/prosm.php';

	require get_template_directory() . '/widgets/new.php';

	require get_template_directory() . '/widgets/hit.php';

	require get_template_directory() . '/widgets/actions.php';

	require get_template_directory() . '/widgets/category.php';

	require get_template_directory() . '/widgets/featured.php';

	require get_template_directory() . '/elementor/config.php';
}



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



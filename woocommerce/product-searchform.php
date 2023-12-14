<?php
/**
 * The template for displaying product search form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/product-searchform.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 7.0.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

?>
<form role="search" method="get" class="woocommerce-product-search header__search" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<?php
    if(isset($_REQUEST['product_cat']) && !empty($_REQUEST['product_cat']))	{
        $optsetlect=$_REQUEST['product_cat'];
    } else {
        $optsetlect=0;
    }

    $args = array(
        'show_option_all' => esc_html__( 'Все категории', 'woocommerce' ),
        'hierarchical' => 1,
        'depth' => 2,
        'class' => 'header__search-select',
        'echo' => 1,
        'value_field' => 'slug',
        'selected' => $optsetlect
    );
    $args['taxonomy'] = 'product_cat';
    $args['name'] = 'product_cat';
    $args['class'] = 'header__search-select';

    wp_dropdown_categories($args);
    ?>
	<input type="search" id="woocommerce-product-search-field-<?php echo isset( $index ) ? absint( $index ) : 0; ?>" class="search-field header__search-input" placeholder="<?php echo esc_attr__( 'Search products&hellip;', 'woocommerce' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	<button type="submit"  class="header__search-button <?php echo esc_attr( wc_wp_theme_get_element_class_name( 'button' ) ); ?>"><i class="icon-search"></i></button>
	<input type="hidden" name="post_type" value="product" />
</form>

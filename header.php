<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flipmarts
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); 
global $themesetting;
?>>
<?php wp_body_open(); ?>
<div class="site-wrapper">
   <header class="header">
    <div class="header__content container">
    <div class="header__top-line">
        <ul class="header__top-menu">
			<?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <li><i class="icon-user-alt"></i><a href="<?php echo home_url(); ?>/my-account">Мой аккаунт</a></li>
			<?php if ( class_exists( 'YITH_WCWL' ) ) { ?>
            <li><i class="icon-heart"></i><a href="<?php echo home_url(); ?>/wishlist">Закладки</a></li>
			<?php } ?>
            <li><i class="icon-shopping-cart"></i><a href="<?php echo home_url(); ?>/cart">Корзина</a></li>
            <li><i class="icon-check"></i><a href="<?php echo home_url(); ?>/checkout">Оформить заказ</a></li> 
			<?php } ?>
        </ul>
    </div>
    <div class="header__center-line">
        <div class="header__logo">
			<?php 
			if($themesetting['logo-url']) {
			if(is_front_page()) { ?>
            <img width="<?php echo $themesetting['logo-width']; ?>" height="<?php echo $themesetting['logo-height']; ?>" src="<?php echo $themesetting['logo-url']['url'] ?>" alt="<?php bloginfo('name'); ?>">
			<?php } else { ?>
				<a href=""><img width="<?php echo $themesetting['logo-width']; ?>" height="<?php echo $themesetting['logo-height']; ?>" src="<?php echo $themesetting['logo-url']['url'] ?>" alt="<?php bloginfo('name'); ?>"></a>
				<?php } } ?>
        </div>
        <div class="header__search-box">
		<?php
            if ( class_exists( 'WooCommerce' ) ) {
                get_product_search_form();
             }  ?>
        </div>
        <div class="header__minicart-box">
		<?php if ( class_exists( 'WooCommerce' ) ) { ?>
            <div class="header__minicart-icon"><i class="icon-shopping-cart"></i></div>
            <div class="header__minicart-item">
                <span class="header__minicart-item-num"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
            </div>
            <div class="header__minicart-total">
                <span>Корзина</span> - <span><?php echo WC()->cart->get_cart_subtotal(); ?></span>
            </div>
			<?php woocommerce_mini_cart(); ?>
			<?php } ?>
        </div>
    </div>
</div>
<div class="header__menu-content">
    <div class="header__menu-box container">
    <?php if( has_nav_menu('category-menu') ) { ?>
        <div class="header__menu-category-box">
        <div class="header__menu-category-box-button">
            <span><i class="icon-bars"></i></span>
            <span class="header__menu-category-box-text">Категории</span>
        </div>
        <nav class="header__menu-category-nav"> 
            <button aria-label="menu-close" class="header__button-close"><i class="icon-plus"></i></button>
            <?php flipmarts_menu_category(); ?>  
    </nav>
        </div>
        <?php } ?>
        <?php if( has_nav_menu('primary-menu') ) { ?>
        <div class="header__menu-primary-box">
        <button aria-label="menu" class="header__button-open"><i class="icon-bars"></i></button> 
        <nav class="header__menu-primary">
        <button aria-label="menu-close" class="header__button-close-primary"><i class="icon-plus"></i></button> 
                <?php flipmarts_menu_primary(); ?>
        </nav>
        </div>
        <?php } ?>
    </div>
</div>
</header>
   <div class="page-wrapper">
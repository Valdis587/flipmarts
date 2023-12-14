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
add_action('woocommerce_before_main_content', 'theme_head_banner', 3);

function theme_head_banner() { 
    global $themesetting; ?>
<section class="topPanel">
   <div class="topPanel__img">
    <?php if($themesetting['headimg']) { ?>
    <img src="<?php echo $themesetting['headimg']['url']; ?>" alt="<?php bloginfo('name'); ?>">
    <?php } ?>
   </div> 
   <div class="topPanel__content">
    <h2 class="topPanel__title"><?php wp_title(''); ?></h2>
<?php }

add_action('woocommerce_before_main_content', 'theme_head_banner_end', 6);
function theme_head_banner_end() { ?>
   </div>
</section> 
<?php }
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
add_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 5);



// wrapper //
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);

remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'theme_output_content_wrapper', 10);

function theme_output_content_wrapper() { ?>
	<div class="shop container"> 
<?php }

add_action('woocommerce_sidebar', 'theme_output_content_wrapper_end', 15);

function theme_output_content_wrapper_end() { ?>
</div>
<!-- end shop-->
<?php }

//end wrapper //

// column page //
add_action('woocommerce_archive_description', 'theme_column_page', 5);

function theme_column_page() { ?>
<div class="shop__column">
<?php }

add_action('woocommerce_after_main_content', 'theme_column_page_end', 5);

function theme_column_page_end() { 
    if(!is_single()) {
    ?>
</div>
<!--column_page_end -->
<?php } } 
// end column page //

//theme sidebar //
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

// add shop sidebar //
add_action('woocommerce_archive_description', 'theme_arhive_get_sidebar', 5);

function theme_arhive_get_sidebar() { 
	if ( ! is_active_sidebar( 'sidebar-shop-arhive' ) ) {
		return;
	} ?>
	<div class="shop__arhive-sidebar">
	<?php dynamic_sidebar( 'sidebar-shop-arhive' ); ?>
</div><!-- #secondary -->

<?php }

//end theme sidebar //

// delete description//
remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

// loop wrapper //
add_action('woocommerce_archive_description', 'theme_arhive_loop_wrapper', 10);
function theme_arhive_loop_wrapper() { ?>
<div class="shop__loop-wrapper"> 
<?php }

add_action('woocommerce_after_main_content', 'theme_arhive_loop_wrapper_end', 2);
function theme_arhive_loop_wrapper_end() {
    if(!is_single()) {
    ?>
</div>
<!--loop_wrapper_end --> 
<?php } }


// filter wrapper //
add_action('woocommerce_before_shop_loop', 'theme_filter_wrapper', 5);
function theme_filter_wrapper() { ?>
<div class="shop__filter-wrapper">
<?php }
add_action('woocommerce_before_shop_loop', 'theme_filter_wrapper_end', 35);
function theme_filter_wrapper_end() { ?>
</div>
<!--end filter wrapper -->
<?php }
// end filter wrapper //

//button grid list //
add_action('woocommerce_before_shop_loop', 'theme_filter_button', 10);
function theme_filter_button() { ?>
   <div class="shop__shop-filter-buttons">
                <button aria-label="grid" class="shop__shop-filter-buttons-grid"><i class="icon-th"></i></button>
                <button aria-label="list" class="shop__shop-filter-buttons-list"><i class="icon-th-list"></i></button>
            </div> 
<?php }

// end button grid list //

// notice //
remove_action('woocommerce_before_shop_loop', 'woocommerce_output_all_notices', 10);
remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
//add_action('woocommerce_before_main_content', 'woocommerce_output_all_notices', 23);

remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);

// end notice //

// remove default link loop //
remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10);

remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5);

// end remove default link loop //

remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);

add_action('woocommerce_before_shop_loop_item_title', 'theme_woocommerce_template_loop_product_thumbnail', 5);

function theme_woocommerce_template_loop_product_thumbnail() { ?>
<div class="productShopcart__left">
<?php }

add_action('woocommerce_before_shop_loop_item_title', 'theme_woocommerce_template_loop_product_thumbnail_end', 11);

function theme_woocommerce_template_loop_product_thumbnail_end(){ ?>
</div>
<?php }

add_action('woocommerce_shop_loop_item_title', 'theme_woocommerce_template_loop_product_title', 5);

function theme_woocommerce_template_loop_product_title() { ?>
<div class="productShopcart__right">
<?php }

add_action('woocommerce_after_shop_loop_item', 'theme_woocommerce_template_loop_product_title_end', 20);
function theme_woocommerce_template_loop_product_title_end() { ?>
</div>
<?php }



add_action('woocommerce_after_shop_loop_item_title', 'theme_descriptions', 15);
function theme_descriptions() { ?>
<div class="productShopcart__description"><?php do_excerpt(get_the_excerpt(), 25); ?></div>
<?php }


// add link title //
add_action('woocommerce_shop_loop_item_title', 'theme_title_link', 9);
function  theme_title_link() { ?>
<a href="<?php the_permalink(); ?>" class="productShopcart__link">
<?php }

add_action('woocommerce_shop_loop_item_title', 'theme_title_link_end', 11);
function theme_title_link_end() { ?>
</a>
<?php }
// end add link title //

// add wrapper rating //
add_action('woocommerce_after_shop_loop_item_title', 'theme_wrapper_rating', 3);
function theme_wrapper_rating() { ?>
<div class="productShopcart__wraper-rating">
<?php }
add_action('woocommerce_after_shop_loop_item_title', 'theme_wrapper_rating_end', 6);
function theme_wrapper_rating_end() { ?>
</div>
<?php }

remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50);

remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 15);

//images single product //
remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

add_action('woocommerce_before_single_product_summary', 'theme_show_product_images', 20);

function theme_show_product_images() { ?>
	  <div class="shop__miniature">
        <div class="shop__miniature-big">
            <div id="big" class="shop__miniature-big-wrapper">
                <?php
                global $product;
                $attachment_ids = $product->get_gallery_image_ids();
                $main=$product->get_image_id();
                $thumbs=wp_get_attachment_image_src($main, 'product-single'); ?>
                <div class="shop__miniature-big-item" >
                    <img src="<?php echo $thumbs['0']; ?>"  alt="<?php the_title(''); ?>">
                </div>
            </div>
        </div>
        <?php  if($attachment_ids) { ?>
        <div class="shop__miniature-small ">
            <div id="small" class="shop__miniature-small-wrapper owl-carousel">
    <?php
        $item=0;
        foreach ( $attachment_ids as $post)  {
            $item++;
            $image = wp_get_attachment_image_src($post, 'product-min');  ?>
                <div class="shop__miniature-small-item ">
                    <a class="horizontal-thumb"  href="<?php echo $image['0']; ?>">
                        <img src="<?php echo $image['0']; ?>" alt="<?php the_title(''); ?>">
                    </a>
                </div>
        <?php } ?>
            </div>
        </div>
        <?php } ?>
    </div>
<?php }

remove_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display');
add_action('woocommerce_cart_collaterals', 'woocommerce_cross_sell_display', 15);

// paginations //
remove_action('woocommerce_after_shop_loop', 'woocommerce_pagination', 10);
add_action('woocommerce_after_shop_loop', 'theme_pagination', 2);

function theme_pagination() { ?>
<div class="shop__pagination-wrapper">
    <?php wp_main_pagination(); ?>
    </div>
<?php }

// end paginations //


// popup quick wievs //

add_action('wp_footer', 'pop_quick');
function pop_quick() {
    global $themesetting;
    if($themesetting['quick-on']) {
    ?>
    <div id="quick-modal" class="themeModal">
        <div class="themeModal__body">
        <div class="themeModal__header">
            <button class="modal-close"><i class="icon-plus"></i></button>
                </div>
                    <div class="shop">
                        <div class="shop__pop-content single-product">
                        </div>
                    </div>
        </div>
    </div>
    <?php }
 }

 add_action('wp_footer', 'pmqv_wc_atc_ajax');
function pmqv_wc_atc_ajax()
{
    if(!is_singular('product')) {
        wp_enqueue_script('wc-add-to-cart-variation', '/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js');
    }
}

add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
 function jk_related_products_args( $args ) {
 
$args['posts_per_page'] = 6; // количество "Похожих товаров"
 return $args;
}
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

add_action('woocommerce_archive_description', 'theme_category_carousel', 12);

function theme_category_carousel() { 
    global $themesetting;
    if($themesetting['carusel-cat-on']) {
    ?>
    <div class="shop__category-carusel">
            <ul class="shop__carusel-list owl-carousel">
                <?php 
                   $terms = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'pad_counts'=> true,
                    'orderby' => 'name',
                    'parent' => 0
                ) );
                if($terms) {
                    foreach($terms as $term) {
                ?>
                <li class="shop__cat-item">
                    <div class="shop__carusel-img">
                        <?php 
                        $thumbnail_id =get_term_meta($term->term_id, 'thumbnail_id', true );
                        $image = wp_get_attachment_url( $thumbnail_id);
                        ?>
                        <img src="<?php echo $image; ?>" alt="<?php echo $term->name;?>">
                    </div>
                    <div class="shop__carusel-cat-name">
                        <a href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name;?></a>
                    </div>
                </li>
                <?php } } ?>
            </ul>
    </div>
<?php } }
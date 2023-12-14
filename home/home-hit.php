<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
if($themesetting['home-hitslider-on']) {
?>
<section class="FeuterdProduct section carusel"> 
    <div class="container">
    <h3 class="sitetitle"><span><?php echo $themesetting['home-hitslider-title']; ?></span></h3>
    <?php 
     $query_args = array(
        'posts_per_page' => 10,
        'no_found_rows'  => 1,
        'post_status'    => 'publish',
        'post_type'      => 'product',
        'orderby'  => 'meta_value_num',
        );

        if ( 'yes' === get_option( 'woocommerce_hide_out_of_stock_items' ) ) {
        $query_args['tax_query'] = array(
        array(
        'taxonomy' => 'product_visibility',
        'field'    => 'name',
        'terms'    => 'outofstock',
        'operator' => 'NOT IN',
        ),
        ); // WPCS: slow query ok.
        }
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
    ?>
       <ul class="products home-carusel grid-carusel products owl-carousel owl-theme">
  <?php  while ( $r->have_posts() ) {
                       global $product;
                       $r->the_post();
                       if($themesetting['badgik-hit']) {
                       wc_get_template_part( 'content', 'product' );
                       }
                       } ?>
         </ul>
         <?php } ?>
</div>
</section>
<?php } ?>
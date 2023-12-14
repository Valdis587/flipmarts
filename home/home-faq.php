<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
if($themesetting['home-faq-on']) {
?>
<section class="homeFAQ section "> 
    <div class="container">
    <h3 class="sitetitle"><span><?php echo $themesetting['home-faq-title']; ?></span></h3>
    <div class="homeFAQ__content">
        <ul class="homeFAQ__list">
        <?php 
     $query_args = array(
        'posts_per_page' => 10,
            'post_status'    => 'publish',
            'post_type'      => 'faq',
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
            while ( $r->have_posts() ) {
            $r->the_post();
        ?>
            <li class="homeFAQ__group">
                <h3 class="homeFAQ__heading"><i class="icon-angle-down"></i><span><?php the_title(''); ?></span></h3>
                <div class="homeFAQ__inner">
                    <?php the_content(); ?>
                </div>
            </li>
            <?php } }  ?>
        </ul>
    </div>
</div>
</section>
<?php } ?>
<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
if($themesetting['home-blog-on']) {
?>
<section class="homeNews section">
    <div class="container">
        <h3 class="sitetitle"><span><?php echo $themesetting['home-blog-title']; ?></span></h3> 
    <div class="homeNews__slider owl-carousel owl-theme">
        <?php 
    $query_args = array(
        'posts_per_page' => 10,
            'post_status'    => 'publish',
            'post_type'      => 'post',
        );
        $r = new WP_Query( $query_args  );
        if ( $r->have_posts() ) {
            while ( $r->have_posts() ) {
            $r->the_post();
        ?>
        <div class="homeNews__slider-item">
            <div class="homeNews__slider-left">
                <div class="homeNews__slider-img">
                <?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </div>
            </div>
            <div class="homeNews__slider-right">
                <a href="<?php the_permalink(); ?>"><h4 class="homeNews__slider-title"><?php the_title(''); ?></h4></a>
                <p class="homeNews__slider-date"><?php the_date(); ?></p>
                <p class="homeNews__slider-desc"><?php do_excerpt(get_the_excerpt(), 10); ?></p>
                <div class="homeNews__slider-comment-admin">
                    <span class="homeNews__slider-comment"><?php echo comments_number(); ?></span>
                    <span class="homeNews__slider-admin"><?php the_author(); ?></span>
                </div>
                <a class="button" href="<?php the_permalink(); ?>">Читать далее...</a>
            </div>
        </div>
     <?php } } ?>
    </div>
</div>
</section>

<?php } ?>
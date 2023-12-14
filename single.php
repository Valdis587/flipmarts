<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Flipmarts
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>
   <div class="blog container">
    <div class="blog__content">
        <div class="blog__news">
                <h3 class="blog__post-title"><?php the_title(''); ?></h3>
                <div class="blog__post-comment-admin">
                    <span class="blog__comment"><?php echo comments_number(); ?></span>
                    <span class="blog__date">Дата: <?php the_date(); ?></span>
                    <span class="blog__admin">Автор: <?php the_author(); ?></span>
                </div>
            <div class="blog__post-img">
			<?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
            </div>
            <div class="blog__post-content">
              <?php the_content(); ?>
            </div>
			<?php 
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			?>
        </div>
<?php get_sidebar(); ?>
		</div>
<?php
get_footer();

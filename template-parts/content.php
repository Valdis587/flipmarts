<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */

?>
<div id="post-<?php the_ID(); ?>" class="blog__item">
                <div class="blog__img">
                    <a href="<?php the_permalink(); ?>">
					<?php
                $id = get_post_thumbnail_id();
                $main=wp_get_attachment_image_src( $id, 'blog' );
                ?>
                    <img src="<?php echo $main[0]; ?>" alt="<?php the_title(''); ?>">
                </a>
                </div>
                <div class="blog__text">
                    <a href="<?php the_permalink(); ?>"><h3 class="blog__title"><?php the_title(''); ?></h3></a>
                    <div class="blog__date">
                        <span><?php the_date(); ?></span>
                    </div>
                    <div class="blog__expert">
                        <p><?php do_excerpt(get_the_excerpt(), 25); ?></p>
                    </div>
                    <div class="blog__comment-admin">
                        <span class="blog__comment"><?php echo comments_number(); ?></span>
                        <span class="blog__admin"><?php the_author(); ?></span>
                    </div>
                </div>
            </div><!-- #post-<?php the_ID(); ?> -->


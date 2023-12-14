<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Flipmarts
 */

get_header();
get_template_part( 'template-parts/content', 'head' );
?>

<div class="page404 container">
    <div class="page404__content">
        <h3 class="page404__title">404</h3>
        <h5 class="page404__desc">Страница не найдена!</h5>
        <a class="button page404__button" href="<?php echo home_url(); ?>">На главную</a>
    </div>
</div>

<?php
get_footer();

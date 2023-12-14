<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flipmarts
 */
global $themesetting;
get_template_part( 'home/home', 'logo' );
?>
</div>
   <footer class="footer">
    <div class="footer__content container">
        <div class="footer__content-item">
        <?php if($themesetting['footer-title1']) { ?>
            <h6 class="footer__title"><?php echo $themesetting['footer-title1'] ?></h6>
            <?php } ?>
            <ul class="footer__contanct-list">
            <?php get_template_part( 'template-parts/content', 'contact' ); ?>
            </ul>
        </div>
        <div class="footer__content-item">
        <?php 
        if( has_nav_menu('footer-menu1') ) { 
        if($themesetting['footer-title2']) { ?>
            <h6 class="footer__title"><?php echo $themesetting['footer-title2'] ?></h6>
            <?php } 
              flipmarts_footer_menu1();
                 } ?>
        </div>
        <div class="footer__content-item">
        <?php 
         if( has_nav_menu('footer-menu2') ) { 
        if($themesetting['footer-title3']) { ?>
            <h6 class="footer__title"><?php echo $themesetting['footer-title3'] ?></h6>
            <?php }
              flipmarts_footer_menu2();
                 } ?>
        </div>
        <div class="footer__content-item">
        <?php 
        if( has_nav_menu('footer-menu3') ) { 
        if($themesetting['footer-title4']) { ?>
            <h6 class="footer__title"><?php echo $themesetting['footer-title4'] ?></h6>
            <?php }
              flipmarts_footer_menu3();
                 } ?>
        </div>
    </div>
    <div class="footer__buttom container">
        <div class="footer__buttom-item social">
           <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
        <div class="footer__buttom-item">
        <?php get_template_part( 'template-parts/content', 'paypal' ); ?>
        </div>
    </div>
    <div class="footer__copy">
        <p><?php echo $themesetting['copy']; ?></p>
    </div>
    <div class="footer__back"><i class="icon-angle-down"></i></div>
</footer>
<?php 
if($themesetting['yandex']) {
    echo $themesetting['yandex'];
 }
 if($themesetting['google']) {
    echo $themesetting['google'];
 }
?>
<?php wp_footer(); ?>

</body>
</html>

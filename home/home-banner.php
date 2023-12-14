<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
if($themesetting['home-banner-on']) {
?>
<section class="homeBanner section">
    <div class="container">
        <div class="homeBanner__content">
            <div class="homeBanner__item">
                <div class="homeBanner__img">
                    <?php if($themesetting['banner-left']) { ?> 
                    <img src="<?php echo $themesetting['banner-left']['url']; ?>" alt="<?php bloginfo('name'); ?>">
                    <?php } ?>
                </div>
            </div>
            <div class="homeBanner__item">
                <div class="homeBanner__img">
                <?php if($themesetting['banner-right']) { ?> 
                    <img src="<?php echo $themesetting['banner-right']['url']; ?>" alt="<?php bloginfo('name'); ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php } ?>
<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
$items = $themesetting['home-sl'];
if($themesetting['home-slider-on']) {
?>
<section class="homeSlider container">
    <div class="homeSlider__wrapper owl-carousel owl-theme">
    <?php foreach ($items as $slide) { ?>
        <div class="homeSlider__item ">
            <div class="homeSlider__img">
            <img src="<?php echo $slide['image']; ?>" alt="<?php bloginfo('name'); ?>">
            </div>
            <div class="homeSlider__text">
                <h2 class="homeSlider__title"><?php echo $slide['title']; ?></h2>
                <p class="homeSlider__desc"><?php echo $slide['description']; ?></p>
            </div>
        </div>
       <?php } ?>    
    </div>
<?php   if($themesetting['home-preim-on']) { ?>
    <div class="homeSlider__slog">
        <div class="homeSlider__slog-item">
            <span class="homeSlider__slog-title"><?php echo $themesetting['preim1-title']; ?></span>
            <span class="homeSlider__slog-desc"><?php echo $themesetting['preim1-desc']; ?></span>
        </div>
        <div class="homeSlider__slog-item">
        <span class="homeSlider__slog-title"><?php echo $themesetting['preim2-title']; ?></span>
            <span class="homeSlider__slog-desc"><?php echo $themesetting['preim2-desc']; ?></span>
        </div>
        <div class="homeSlider__slog-item">
        <span class="homeSlider__slog-title"><?php echo $themesetting['preim3-title']; ?></span>
            <span class="homeSlider__slog-desc"><?php echo $themesetting['preim3-desc']; ?></span>
        </div>
    </div>
<?php } ?>
</section>
<?php } ?>
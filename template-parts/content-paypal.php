<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Flipmarts
 */
global $themesetting;
?>

<div class="footer__paypal">
                <?php if($themesetting['pay1']) { ?>
                <li><img src="<?php echo $themesetting['pay1']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($themesetting['pay2']) { ?>
                <li><img src="<?php echo $themesetting['pay2']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($themesetting['pay3']) { ?>
                <li><img src="<?php echo $themesetting['pay3']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($themesetting['pay4']) { ?>
                <li><img src="<?php echo $themesetting['pay4']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
                <?php if($themesetting['pay5']) { ?>
                <li><img src="<?php echo $themesetting['pay5']['url']; ?>" alt="<?php  bloginfo('name'); ?>"></li>
                <?php } ?>
</div>
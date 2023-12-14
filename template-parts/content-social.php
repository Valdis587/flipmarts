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

<ul class="social-list">
    <?php if($themesetting['tg']) { ?>
                <li><a href="<?php echo $themesetting['tg'] ?>"><i class="icon-telegram-plane"></i></a></li>
                <?php } ?>
                <?php if($themesetting['sk']) { ?>
                <li><a href="<?php echo $themesetting['sk'] ?>"><i class="icon-skype"></i></a></li>
                <?php } ?>
                <?php if($themesetting['ok']) { ?>
                <li><a href="<?php echo $themesetting['ok'] ?>"><i class="icon-odnoklassniki"></i></a></li>
                <?php } ?>
                <?php if($themesetting['vb']) { ?>
                <li><a href="<?php echo $themesetting['vb'] ?>"><i class="icon-viber"></i></a></li>
                <?php } ?>
                <?php if($themesetting['vk']) { ?>
                <li><a href="<?php echo $themesetting['vk'] ?>"><i class="icon-vk"></i></a></li>
                <?php } ?>
                <?php if($themesetting['wh']) { ?>
                <li><a href="<?php echo $themesetting['wh'] ?>"><i class="icon-whatsapp"></i></a></li>
                <?php } ?>
</ul>
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

<?php if($themesetting['addres']) { ?>
                <li><i class="icon-map-marker-alt"></i><?php echo $themesetting['addres'] ?></li>
                <?php } ?>
                <?php if($themesetting['phones']) { ?>
                <li><i class="icon-phone-alt"></i><a href="tel:<?php echo str_replace(array("(", ")", "-", " "), "", $themesetting['phones']) ?>"><?php echo $themesetting['phones'] ?></a></li>
                <?php } ?>
                <?php if($themesetting['mail']) { ?>
                <li><i class="icon-envelope"></i><a href="mailto:<?php echo $themesetting['mail'] ?>"><?php echo $themesetting['mail'] ?></a></li>
                <?php } ?>
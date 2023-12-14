<?php
/*
Template Name: Главная
*/
get_header();
global $themesetting;
$layout = $themesetting['sections-home']['enabled'];
if ($layout): foreach ($layout as $key=>$value) {
    switch($key) {
case 'slider': get_template_part( 'home/home', 'slider' );
break;

case 'last': get_template_part( 'home/home', 'last' );
break;

case 'sale': get_template_part( 'home/home', 'sale' );
break;

case 'new': get_template_part( 'home/home', 'new' );
break;

case 'hit': get_template_part( 'home/home', 'hit' );
break;

case 'actions': get_template_part( 'home/home', 'action' );
break;

case 'category': get_template_part( 'home/home', 'category' );
break;

case 'ban1': get_template_part( 'home/home', 'banner' );
break;

case 'faq': get_template_part( 'home/home', 'faq' );
break;

case 'featured': get_template_part( 'home/home', 'featured' );
break;

case 'bantwo': get_template_part( 'home/home', 'bannertwo' );
break;

case 'blog': get_template_part( 'home/home', 'blog' );
break;

    }
}
endif;
get_footer();
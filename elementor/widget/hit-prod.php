<?php

namespace WPC\Widgets;


use Elementor\Widget_Base;
use Elementor\Controls_Manager;


if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}


class HitProd extends \Elementor\Widget_Base
{
    public function get_name()
    {
        return 'hit-prod';
    }

    public function get_title()
    {
        return esc_html__('Хиты продаж', 'smarkets');
    }


    public function get_categories()
    {
        return ['flipmarts'];
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        get_template_part( 'home/home', 'hit' );
    
    }
}
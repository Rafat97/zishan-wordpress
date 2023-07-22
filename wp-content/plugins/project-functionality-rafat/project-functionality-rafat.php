<?php
/*
Plugin Name: Project Functionality By Rafat
Plugin Name: Porto Theme - Functionality
Plugin URI: https://rafat97.medium.com/
Description: Adds functionality such as Shortcodes, Post Types and Widgets to Porto Theme
Version: 2.0.0
Author: rafat
Author URI: https://rafat97.medium.com/
License: GNU General Public License version 3.0
Text Domain: project-functionality-rafat
*/

// don't load directly
if (!defined('ABSPATH')) {
    die('-1');
}

function add_elementor_widget_categories($elements_manager)
{
    if (is_admin()) {
        $elements_manager->add_category(
            'rafat-cat',
            [
                'title' => __('Rafat\'s Category', 'rafat-cat'),
                'active' => true,
                'icon' => 'fa fa-plug',
            ]
        );
    }
}
add_action('elementor/elements/categories_registered', 'add_elementor_widget_categories');


function register_list_widget($widgets_manager)
{

    require_once(__DIR__ . '/widgets/list-widget.php');
    require_once(__DIR__ . '/widgets/oembed-widget.php');

    $widgets_manager->register(new \Elementor_oEmbed_Widget());
    $widgets_manager->register(new \Elementor_List_Widget());
}

add_action('elementor/widgets/register', 'register_list_widget');

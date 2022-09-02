<?php
/**
 * @package Yasso_Custom_Post_Type
 * @version 1.0.0
 */
/*
Plugin Name: Yasso Custom Post Type
Plugin URI: https://yassinee.promo-105.codeur.online/PortfolioEF
Description: This plugin may permet you to create custom post type.
Author: Yassine El Fallouhi
Version: 1.0.0
Author URI: https://yassinee.promo-105.codeur.online/PortfolioEF
*/



function custom_post_type(){

    register_post_type('hardware', [
        'label' => 'Hardware',
        'public' => true,
        'menu_position' => 4,
        'menu_icon' => 'dashicons-welcome-view-site',
        // 'supports' => ['title', 'custom-fields','editor', 'thumbnail'],
        'show_in_rest' => true,
        'has_archive' => true

    ]);
}


function montheme_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', ['popper'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function montheme_supports(){
    add_image_size('card-header', 350, 215, true);
}
function mon_plugin(){
    echo 'Içi on trouve mon plugin';
}
add_action('init', 'custom_post_type');
add_action('after_setup_theme', 'montheme_supports');
add_action('wp_enqueue_scripts', 'montheme_register_assets');

add_shortcode('yassocpfShortcode', 'mon_plugin');

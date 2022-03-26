<?php

function buymarket_add_woocommerce_support() {
    add_theme_support('woocomerce');
}

add_action('after_setup_theme', 'buymarket_add_woocommerce_support');

function buymarkey_css() {
    wp_register_style('style.css', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
}

add_action('wp_enqueue_scripts', 'buymarket_css');

?>
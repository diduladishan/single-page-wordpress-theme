<?php

// Enqueue theme styles and scripts
function custom_theme_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Enable support for dynamic title tags
add_theme_support('title-tag');

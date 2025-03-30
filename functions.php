<?php

// Enqueue theme styles and scripts
function custom_theme_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style('custom-style', get_stylesheet_uri());

    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Jost:ital,wght@0,100..900;1,100..900&display=swap', false);
}

add_action('wp_enqueue_scripts', 'custom_theme_enqueue_assets');

// Enable support for dynamic title tags
add_theme_support('title-tag');

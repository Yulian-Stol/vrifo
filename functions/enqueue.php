<?php

// JavaScript
function vrifo_include_custom_js() {
  wp_enqueue_script( 'vrifo-custom-js', get_template_directory_uri() . '/frontend/js/app.min.js');
}

// CSS
function vrifo_include_custom_css() {
  wp_enqueue_style('vrifo-theme-css', get_stylesheet_uri(), [], null);
  wp_enqueue_style('vrifo-custom-css', get_template_directory_uri() . '/frontend/css/style.min.css', [], null);
}

add_action('wp_enqueue_scripts', 'vrifo_include_custom_css');
add_action('wp_enqueue_scripts', 'vrifo_include_custom_js');

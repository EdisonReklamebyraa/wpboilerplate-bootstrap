<?php
/* CSS og JS */
function add_my_scripts() {
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', null, '1.0.0', false);
  wp_enqueue_script('mobile-script', get_template_directory_uri() . '/assets/js/scripts-bundled.js', array(), '1.0.0', true);
} add_action('wp_enqueue_scripts', 'add_my_scripts');

/* Hovedmeny */
function create_main_menu() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
} add_action('init', 'create_main_menu');

/* Custom Gutenberg blocks */
require_once trailingslashit(get_stylesheet_directory()) . 'inc/acf-blocks.php';

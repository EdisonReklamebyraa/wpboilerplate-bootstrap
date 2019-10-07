<?php
/* CSS og JS */
function add_my_scripts() {
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', null, '1.0.0', false);
  wp_enqueue_script('main-scripts', get_template_directory_uri() . '/assets/js/scripts-bundled.js', array(), '1.0.0', true);
} add_action('wp_enqueue_scripts', 'add_my_scripts');

 /* Remove all actions related to Emojis */
 function disable_wp_emojicons() {
  remove_action('admin_print_styles', 'print_emoji_styles');
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  remove_action('admin_print_scripts', 'print_emoji_detection_script');
  remove_action('wp_print_styles', 'print_emoji_styles');
  remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
  remove_filter('the_content_feed', 'wp_staticize_emoji');
  remove_filter('comment_text_rss', 'wp_staticize_emoji');
  }
  add_action('init', 'disable_wp_emojicons');

/* Hovedmeny */
function create_main_menu() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
} add_action('init', 'create_main_menu');

/* Custom Gutenberg blocks */
require_once trailingslashit(get_stylesheet_directory()) . 'inc/acf-blocks.php';

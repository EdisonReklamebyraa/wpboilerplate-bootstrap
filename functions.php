<?php
/* CSS og JS */
function enqueue_files($path) {
  return new DirectoryIterator(get_stylesheet_directory() . $path);
}

function add_my_scripts() {
  $cssDir = enqueue_files('/dist/css');
  foreach ($cssDir as $cssfile) {
    if (pathinfo($cssfile, PATHINFO_EXTENSION) === 'css') {
      $fullName = basename($cssfile);    // main.3hZ9.js
      $name = substr(basename($fullName), 0, strpos(basename($fullName), '.')); //
      // echo $name;
      wp_enqueue_style(
        $fullName,
        get_template_directory_uri() . '/dist/css/' . $fullName,
        null,
        null,
        false
      );
      // wp_enqueue_style('main-styles', $name , null,  false, false);
    }

  }

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

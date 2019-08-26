<?php
/* CSS og JS */
function add_trb_scripts() {
  wp_enqueue_style('bootstrap4', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('typekit-fonts', 'https://use.typekit.net/yxj0rst.css');
  wp_enqueue_style('main-styles', get_template_directory_uri() . '/style.css', null, '1.0.0', false);
  wp_enqueue_script('mobile-script', get_template_directory_uri() . '/assets/js/scripts-bundled.js', array(), '1.0.0', true);
} add_action('wp_enqueue_scripts', 'add_trb_scripts');

/* Hovedmeny */
function create_main_menu() {
  register_nav_menu('headerMenuLocation', 'Header Menu Location');
} add_action('init', 'create_main_menu');

/* custom post type: tjenester */
function add_tjenester_post_type() {
  register_post_type('tjenester', array(
    'has_archive' => true,
    'rewrite' => array('slug' => 'tjenester'), // Hvis du vil endre slug’en til arkivsiden
    'public' => true, // alt du trenger for å få den til å dukke opp i wp-admin
    'show_in_nav_menus' => true,
    'labels' => array( // det finnes mange flere labels parametre
      'name' => 'Tjenester',
      'add_new_item' => 'Add New tjenester',
      'all_items' => 'All tjenester',
      'singular_name' => 'tjeneste'
    ),
    'menu_icon' => 'dashicons-hammer', // Google: wordpress dashicons
  ));
} add_action('init', 'add_tjenester_post_type');

/* Custom Gutenberg blocks */
require_once trailingslashit(get_stylesheet_directory()) . 'inc/acf-blocks.php';
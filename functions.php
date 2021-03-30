<?php

$base_dir = get_stylesheet_directory();
// Enqueue dist/css and dist/js
require_once($base_dir . '/inc/enqueue_scripts.php');
// Remove emojis
require_once($base_dir . '/inc/disable_emojis.php');
// Remove jquery by default
require_once($base_dir . '/inc/deregister_jquery.php');
// Add markup to allow for responsive oembeds
require_once($base_dir . '/inc/add_responsive_embed.php');
// Extend Twig-functionality
require_once($base_dir . '/inc/extend_twig.php');
// Add theme assets
require_once($base_dir . '/inc/add_theme_assets.php');
// Add Twig-navigation
require_once($base_dir . '/inc/add_twig_nav.php');
// Add breadcrumb
require_once($base_dir . '/inc/add_breadcrumb.php');
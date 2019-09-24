<?php
$context = array();
$context['nav'] = wp_nav_menu(array(
  'menu' => 'headerMenuLocation',
  'echo' => false,
  'container' => '',
  'menu_class' => 'c-main-header__nav-list'
  )
);

Timber::render('header.twig', $context);

<?php
$context = array();
$context['head'] = wp_head();
$context['nav'] = wp_nav_menu(array(
  'menu' => 'headerMenuLocation',
  'echo' => false,
  'container' => '',
  'menu_class' => 'pl-0'
  )
);

Timber::render('header.twig', $context);
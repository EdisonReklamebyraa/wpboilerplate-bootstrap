<?php
/* Only used by WooCommerce, the rest of the site uses base.twig */
$context = Timber::context();
$context['post'] = new Timber\Post();

Timber::render('partials/header.twig', $context);
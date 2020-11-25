<?php
$context = Timber::context();
$helper = new Timber\URLHelper();
$context['slug'] = $helper->get_rel_url($helper->get_current_url());
Timber::render('pages/404.twig', $context);

<?php
if (have_rows('main')) { // Flexible Content field
  while (have_rows('main')) { the_row();
    $context = Timber::context();
    $context['fields'] = get_fields(); // Store field values.
    $context['post'] = new Timber\Post();

    Timber::render('views/acf/acf-main.twig', $context); // Render the block
	}
}
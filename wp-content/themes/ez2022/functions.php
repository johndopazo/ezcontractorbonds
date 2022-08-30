<?php

// Enqueue theme styles and scripts.
add_action( 'wp_enqueue_scripts', 'enqueue_stuff' );
function enqueue_stuff() {
  wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'ez', get_template_directory_uri() . '/js/ez.js' );
}

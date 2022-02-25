<?php

function child_stylesheet() {
    wp_enqueue_style( 'twentytwentytwo-child', get_stylesheet_directory_URI() . '/style.css', array(), '1.0.0' );
}
add_action('wp_enqueue_scripts', 'child_stylesheet', 100);
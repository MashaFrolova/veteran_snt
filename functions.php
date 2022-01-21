<?php
add_action('wp_enqueue_scripts', 'veteran_scripts');

function veteran_scripts() {
    wp_enqueue_style( 'veteran-style', get_stylesheet_uri() );

    wp_enqueue_script( 'veteran-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
};





?>
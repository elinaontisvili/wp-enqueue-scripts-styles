<?php

function custom_enqueue_scripts() {
    // enqueue a custom stylesheet
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom-style.css');

    // enqueue a custom JavaScript file
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), null, true);
}

// hook the 'wp_enqueue_scripts' action to custom function
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

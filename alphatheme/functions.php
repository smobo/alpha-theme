<?php

function alpha_register_styles()
{
    wp_enqueue_style('alphatheme-fontawesome', get_template_directory_uri() . '/assets/css/fontawesome-all.min.css', array(), '1.0', 'all');
    wp_enqueue_style('alphatheme-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0', 'all');
}
add_action('wp_enqueue_scripts', 'alpha_register_styles');

function alpha_register_scripts()
{
    $js_path = get_template_directory_uri() . "/assets/js/";
    wp_enqueue_script('alphatheme-jquerymin', $js_path . 'jquery.min.js', array(), '3.6.0', 'all');
    wp_enqueue_script('alphatheme-jquerydropotronmin', $js_path . 'jquery.dropotron.min.js', array(), '1.4.3', 'all');
    wp_enqueue_script('alphatheme-jqueryscrollexmin', $js_path . 'jquery.scrollex.min.js', array(), '0.2.1', 'all');
    wp_enqueue_script('alphatheme-browserjs', $js_path . 'browser.min.js', array(), '1.0.1', 'all');
    wp_enqueue_script('alphatheme-breakpoints', $js_path . 'breakpoints.min.js', array(), '1.0', 'all');
    wp_enqueue_script('alphatheme-utiljs', $js_path . 'util.js', array(), '1.0', 'all');
    wp_enqueue_script('alphatheme-mainjs', $js_path . 'main.js', array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'alpha_register_scripts');

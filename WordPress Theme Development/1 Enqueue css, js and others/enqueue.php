<!-- Use it enqueue.php -->
<?php
// Enqueue css and js
function lazy_css_js_enqueue(){
     // Theme default css
     wp_enqueue_style( 'lazy-style', get_stylesheet_uri());
     
     // Bootstrap css
     wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.0.2', 'all');
     wp_enqueue_style('bootstrap');
     // Google fonts
     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Font1|Font2', array(), null);
     // Custom css
     wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.1.1', 'all');
     wp_enqueue_style('custom');


     // Theme default js
     wp_enqueue_script('jquery');
     // Bootstrap js
     wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'), '5.0.2', true);
     // Custom JS
     wp_register_script('custom-script', get_template_directory_uri() . '/js/custom-script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lazy_css_js_enqueue');
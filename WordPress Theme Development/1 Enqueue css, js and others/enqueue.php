<!-- Use it enqueue.php -->
<?php
// Enqueue css and js
function lazy_css_js_enqueue(){
     // Theme default css
     wp_enqueue_style( 'lazy-style', get_stylesheet_uri());
     // Bootstrap css
     wp_register_style('bootstrap-css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '5.0.2', 'all');
     wp_enqueue_style('bootstrap-css');
     // Google fonts
     wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap', array(), null);
     // Fontawsome CDN
     wp_enqueue_style('fontawsome-cdn', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css', array(), null);
     // Custom css
     wp_register_style('custom-css', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');
     wp_enqueue_style('custom-css');

     // Theme default js
     wp_enqueue_script('jquery');
     // Bootstrap js
     wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/assets/js/bootstrap.bundle.min.js', array('jquery'), '5.0.2', true);
     // Custom JS
     wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/custom.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'lazy_css_js_enqueue');

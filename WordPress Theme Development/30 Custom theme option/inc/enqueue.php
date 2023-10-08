<?php

function lazy_css_js_file_calling(){
  wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
  wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'lazy_css_js_file_calling');


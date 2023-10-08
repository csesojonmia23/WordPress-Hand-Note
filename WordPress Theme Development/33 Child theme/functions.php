<?php

function lazy_child_theme(){
  wp_enqueue_style('ali-child-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'lazy_child_theme', PHP_INT_MAX);
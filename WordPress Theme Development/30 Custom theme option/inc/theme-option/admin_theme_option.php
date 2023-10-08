<?php

/*
* Enqueue CSS for theme option styling
*/
function theme_option_custom_css(){
    wp_enqueue_style('theme_option_custom_css', get_template_directory_uri().'/css/theme_option_custom.css', array(), '1.0.0', 'all');
}
add_action( 'admin_enqueue_scripts', 'theme_option_custom_css' );


function lazy_add_theme_page(){
  // add_menu_page( 
  //   'Theme Option for Admin', // $page_title:string, 
  //   'Theme Option', // $menu_title:string, 
  //   'manage_options', // $capability:string, 
  //   'lazy_theme_option', // $menu_slug:string, 
  //   'lazy_theme_create_page', // $callback:callable, 
  //   get_template_directory_uri(). '/img/mini-logo.png', // image or $icon_url:string, 
  //   101,// $position:integer|float|null 
  // );
  add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'lazy_theme_option', 'lazy_theme_create_page', 'dashicons-visibility', 101);

// add_submenu_page( $parent_slug:string, $page_title:string, $menu_title:string, $capability:string, $menu_slug:string, $callback:callable, $position:integer|float|null )

  add_submenu_page( 'lazy_theme_option', 'Theme Option', 'General', 'manage_options', 'lazy_theme_option', 'lazy_theme_create_page', );

  add_submenu_page( 'lazy_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'lazy_custom_css', 'lazy_theme_custom_css_page', );

  add_submenu_page( 'lazy_theme_option', 'Theme Custom JavaScript', 'Custom JS', 'manage_options', 'lazy_custom_js', 'lazy_theme_custom_js_page', );
}
add_action( 'admin_menu', 'lazy_add_theme_page');

function lazy_theme_create_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/general.php');
}

function lazy_theme_custom_css_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/custom_css.php');
}

function lazy_theme_custom_js_page(){
  // Generating Theme option
  require_once(get_template_directory() . '/inc/theme-option/custom_js.php');
}
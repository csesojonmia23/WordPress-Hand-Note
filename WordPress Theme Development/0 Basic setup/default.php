<?php

function custom_theme_setup() {
    //  Title Tag
    add_theme_support('title-tag');

    // Menu register
    add_theme_support('menus');

    // Widgets register
    add_theme_support('widgets');

    // Post Thumbnails (Featured Images):
    add_theme_support( 'post-thumbnails', array('page', 'post') );
    
    // Custom Background:
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
        'default-image' => '',
    ));

    // Custom Header:
    add_theme_support('custom-header', array(
        'width'         => 1920,
        'height'        => 1080,
        'flex-width'    => true,
        'flex-height'   => true,
        'uploads'       => true,
    ));

    // Custom Logo:
    add_theme_support('custom-logo', array(
        'height'      => 100, // Set the height of the logo.
        'width'       => 300, // Set the width of the logo.
        'flex-height' => true, // Allow flexible height.
        'flex-width'  => true, // Allow flexible width.
        'header-text' => array('site-title', 'site-description'), // Display site title and description.
    ));

    // Custom Color
    add_theme_support('custom-colors', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // HTML5 Markup:
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    //  Post Formats:
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
    ));

// Custom Editor Style (Gutenberg):
add_theme_support('editor-styles');
add_editor_style('editor-style.css');

// Responsive Embeds:
add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'custom_theme_setup');



// Post Thumbnails (Featured Images):
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true); // if need



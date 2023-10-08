<?php
// ============================================================
// Follow kirki documentation
//=============================================================

// Include the Kirki framework
require_once dirname(__FILE__) . '/kirki/kirki.php';

function custom_customize_register($wp_customize) {
    // Create a custom panel named "Kirki Theme Options"
    Kirki::add_panel('kirki_theme_options', array(
        'priority' => 10,
        'title' => esc_html__('Kirki Theme Options', 'textdomain'),
    ));

    // Create a custom section named "About Section" within the "Kirki Theme Options" panel
    Kirki::add_section('about_section', array(
        'title' => esc_html__('About Section', 'textdomain'),
        'panel' => 'kirki_theme_options',
        'priority' => 10,
    ));

    // Create a custom control named "text" within the "About Section" section
    Kirki::add_field('text', array(
        'type' => 'text',
        'settings' => 'about_text_setting',
        'label' => esc_html__('Text', 'textdomain'),
        'section' => 'about_section',
        'default' => 'Default Text',
        'priority' => 10,
    ));
}

add_action('customize_register', 'custom_customize_register');
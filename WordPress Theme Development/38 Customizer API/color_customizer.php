<?php
function customize_register_colors($wp_customize) {
     // Add a section
     $wp_customize->add_section('custom_colors', array(
         'title' => __('Custom Colors', 'your-theme'),
         'priority' => 30,
     ));
 
     // Add a setting
     $wp_customize->add_setting('site_title_color', array(
         'default' => '#000000',
         'sanitize_callback' => 'sanitize_hex_color',
     ));
 
     // Add a control
     $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'site_title_color', array(
         'label' => __('Site Title Color', 'your-theme'),
         'section' => 'custom_colors',
         'setting' => 'site_title_color',
     )));
 }
 
 add_action('customize_register', 'customize_register_colors');
 
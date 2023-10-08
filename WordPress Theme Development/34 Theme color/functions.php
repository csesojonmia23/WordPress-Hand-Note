<?php
function theme_customize_register($wp_customize) {
     // Add a new section for colors
     $wp_customize->add_section('theme_colors', array(
         'title' => __('Theme Colors', 'lazycoder'),
         'priority' => 30,
     ));
 
     // Add a setting for background color
     $wp_customize->add_setting('background_color', array(
         'default' => '#ffffff',
         'sanitize_callback' => 'sanitize_hex_color',
     ));
 
     // Add a control for background color
     $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'background_color', array(
         'label' => __('Background Color', 'lazycoder'),
         'section' => 'theme_colors',
         'settings' => 'background_color',
     )));
 }
 add_action('customize_register', 'theme_customize_register');

 

// USE for Styling
function theme_customizer_styles() {
     $background_color = get_theme_mod('background_color', '#ffffff');
     ?>
     <style type="text/css">
         body {
             background-color: <?php echo esc_attr($background_color); ?>;
         }
     </style>
     <?php
 }
 add_action('wp_head', 'theme_customizer_styles');
 
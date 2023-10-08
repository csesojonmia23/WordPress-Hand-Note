<?php
function lazy_customize_register(){
// Menu Position Option
     $wp_customize->add_section('lazy_menu_option', array(
          'title' => __('Menu Position Option', 'lazycoder'),
          'description' => 'If you interested to change your menu position you can do it.'
     ));
     
     $wp_customize->add_setting('lazy_menu_position', array(
          'default' => 'right_menu',
     ));
     
     $wp_customize-> add_control('lazy_menu_position', array(
          'label' => 'Menu Position',
          'description' => 'Select your menu position',
          'setting' => 'lazy_menu_position',
          'section' => 'lazy_menu_option',
          'type' => 'radio',
          'choices' => array(
          'left_menu' => 'Left Menu',
          'right_menu' => 'Right Menu',
          'center_menu' => 'Center Menu',
          ),
     ));
 
}
add_action('customize_register', 'lazy_customize_register');

// header.php
<header id="header_area" class="<?php echo get_theme_mod('lazy_menu_position'); ?>">

// Styling
// custom.css
#header_area.left_menu .col-md-3 {
     order: 2;
   }
#header_area.left_menu .col-md-9 {
     order: 1;
   }
#header_area.left_menu .col-md-9 ul {
     text-align: left;
   } 
#header_area.center_menu .col-md-3 {
     width: 100%;
     text-align: center;
     margin-bottom: 10px;
   }
#header_area.center_menu .col-md-9 {
     width: 100%;
   }
#header_area.center_menu .col-md-9 ul {
     text-align: center;
   }

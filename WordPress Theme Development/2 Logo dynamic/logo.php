<!-- Use it theme_function.php -->
<?php
function lazy_customize_register($wp_customize){
     $wp_customize->add_section('lazy_header_area', array(
          'title' =>__('Header Area', 'lazycoder'),
          'description' => 'If you interested to update your header area, you can do it here.',
     ));


     $wp_customize->add_setting('lazy_logo', array(
          'default' => get_bloginfo('template_directory').'/img/logo.png',
     ));


     $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lazy_logo', array(
          'label' => 'Logo Upload',
          'description' => 'If you interested to change or update your logo you can do it.',
          'setting' => 'lazy_logo',
          'section' => 'lazy_header_area',
     ) ));
}
add_action('customize_register', 'lazy_customize_register');


// Use it where logo postition
// header.php
<a href="<?php echo home_url(); ?>"><img src="<?php echo get_theme_mod('lazy_logo'); ?>" alt=""></a>


// ===========================================
// Theme Default logo function
// ===========================================
// Write it functions.php
// Custom Logo:
add_theme_support('custom-logo', array(
     'height'      => 100, // Set the height of the logo.
     'width'       => 300, // Set the width of the logo.
     'flex-height' => true, // Allow flexible height.
     'flex-width'  => true, // Allow flexible width.
     'header-text' => array('site-title', 'site-description'), // Display site title and description.
 ));


// header.php
<div id="site-logo">
    <?php
    if (has_custom_logo()) {
        the_custom_logo();
    } else {
        // Fallback if no custom logo is set.
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    }
    ?>
</div>


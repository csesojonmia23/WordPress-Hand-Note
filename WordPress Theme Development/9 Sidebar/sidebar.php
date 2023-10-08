<?php

// Use this code widget_register.php file
function custom_register_sidebar() {
     register_sidebar(array(
         'name' => 'Main Sidebar', // Name your sidebar.
         'id' => 'main-sidebar',  // Unique ID for your sidebar.
         'description' => 'Widgets for the main sidebar area.',
         'before_widget' => '<div class="widget">',
         'after_widget' => '</div>',
         'before_title' => '<h3 class="widget-title">',
         'after_title' => '</h3>',
     ));
 }
 add_action('widgets_init', 'custom_register_sidebar');


//  Use this code sidebar.php file
<aside id="sidebar" class="widget-area">
    <?php dynamic_sidebar('main-sidebar'); ?>
</aside>

// ==================================
// OR
//===================================
<aside id="sidebar" class="widget-area">
    <?php
    // Check if the sidebar has widgets
    if (is_active_sidebar('main-sidebar')) {
        dynamic_sidebar('main-sidebar');
    }
    ?>
</aside>


 

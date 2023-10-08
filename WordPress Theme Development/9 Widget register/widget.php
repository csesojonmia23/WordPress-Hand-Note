<?php
// Use this code where show widgets
// index.php
<div class="col-md-3">
     <?php get_sidebar(); ?>
</div>


// Use this widget_register.php
// Sidebar Register Functions
function lazy_widgets_register(){
     register_sidebar(array(
       'name' => __('Main Widget Area', 'lazycoder'),
       'id'   => 'sideber-1',
       'description' => __('Apperas in the sidebar in blog page and also other page', 'lazycoder'),
       'before_widget' => '<div class="child_sidebar">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="title">',
       'after_title' => '</h2>',
       ));


     register_sidebar(array(
       'name' => __('Footer 1', 'lazycoder'),
       'id'   => 'footer-1',
       'description' => __('Apperas in the sidebar in blog page and also other page', 'lazycoder'),
       'before_widget' => '<div class="child_sidebar">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="title">',
       'after_title' => '</h2>',
       ));


     register_sidebar(array(
       'name' => __('Footer 2', 'lazycoder'),
       'id'   => 'footer-2',
       'description' => __('Apperas in the sidebar in blog page and also other page', 'lazycoder'),
       'before_widget' => '<div class="child_sidebar">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="title">',
       'after_title' => '</h2>',
       ));


     register_sidebar(array(
       'name' => __('Footer 3', 'lazycoder'),
       'id'   => 'footer-3',
       'description' => __('Apperas in the sidebar in blog page and also other page', 'lazycoder'),
       'before_widget' => '<div class="child_sidebar">',
       'after_widget' => '</div>',
       'before_title' => '<h2 class="title">',
       'after_title' => '</h2>',
       ));
   }
   add_action('widgets_init', 'lazy_widgets_register');


// Use this code where show the sidebar
<?php dynamic_sidebar('sidebar-1'); ?>
<?php dynamic_sidebar('footer-1'); ?>
<?php dynamic_sidebar('footer-2'); ?>
<?php dynamic_sidebar('footer-3'); ?>


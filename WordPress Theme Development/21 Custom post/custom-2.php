<?php
if ( ! function_exists('slider_custom_post') ) {
     // Register Custom Post Type
     function slider_custom_post() {
          $labels = array(
               'name'                  => _x( 'Sliders', 'Post Type General Name', 'sojonone' ),
               'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'sojonone' ),
               'menu_name'             => __( 'Slider', 'sojonone' ),
               'name_admin_bar'        => __( 'Slider', 'sojonone' ),
               'archives'              => __( 'Item Archives', 'sojonone' ),
               'attributes'            => __( 'Item Attributes', 'sojonone' ),
               'parent_item_colon'     => __( 'Parent Item:', 'sojonone' ),
               'all_items'             => __( 'All Items', 'sojonone' ),
               'add_new_item'          => __( 'Add New Item', 'sojonone' ),
               'add_new'               => __( 'Add New', 'sojonone' ),
               'new_item'              => __( 'New Item', 'sojonone' ),
               'edit_item'             => __( 'Edit Item', 'sojonone' ),
               'update_item'           => __( 'Update Item', 'sojonone' ),
               'view_item'             => __( 'View Item', 'sojonone' ),
               'view_items'            => __( 'View Items', 'sojonone' ),
               'search_items'          => __( 'Search Item', 'sojonone' ),
               'not_found'             => __( 'Not found', 'sojonone' ),
               'not_found_in_trash'    => __( 'Not found in Trash', 'sojonone' ),
               'featured_image'        => __( 'Featured Image', 'sojonone' ),
               'set_featured_image'    => __( 'Set featured image', 'sojonone' ),
               'remove_featured_image' => __( 'Remove featured image', 'sojonone' ),
               'use_featured_image'    => __( 'Use as featured image', 'sojonone' ),
               'insert_into_item'      => __( 'Insert into item', 'sojonone' ),
               'uploaded_to_this_item' => __( 'Uploaded to this item', 'sojonone' ),
               'items_list'            => __( 'Items list', 'sojonone' ),
               'items_list_navigation' => __( 'Items list navigation', 'sojonone' ),
               'filter_items_list'     => __( 'Filter items list', 'sojonone' ),
          );
          $args = array(
               'menu_icon'             => 'dashicons-slides',
               'label'                 => __( 'Slider', 'sojonone' ),
               'description'           => __( 'This is slider post. You can create slider from here.', 'sojonone' ),
               'labels'                => $labels,
               'supports'              => array( 'title', 'editor', 'thumbnail' ),
               'hierarchical'          => false,
               'public'                => true,
               'show_ui'               => true,
               'show_in_menu'          => true,
               'menu_position'         => 5,
               'show_in_admin_bar'     => true,
               'show_in_nav_menus'     => true,
               'can_export'            => true,
               'has_archive'           => true,
               'exclude_from_search'   => false,
               'publicly_queryable'    => true,
               'capability_type'       => 'page',
          );
          register_post_type( 'slider', $args );
     }
     add_action( 'init', 'slider_custom_post', 0 );
     
     }

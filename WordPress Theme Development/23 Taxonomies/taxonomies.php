<?php

// Register a custom taxonomy for the 'slider' custom post type
function create_slider_taxonomies() {
    // Custom Taxonomy: Slider Categories
    $labels = array(
        'name'                       => 'Slider Categories',
        'singular_name'              => 'Slider Category',
        'search_items'               => 'Search Slider Categories',
        'popular_items'              => 'Popular Slider Categories',
        'all_items'                  => 'All Slider Categories',
        'edit_item'                  => 'Edit Slider Category',
        'update_item'                => 'Update Slider Category',
        'add_new_item'               => 'Add New Slider Category',
        'new_item_name'              => 'New Slider Category Name',
        'separate_items_with_commas' => 'Separate categories with commas',
        'add_or_remove_items'        => 'Add or remove categories',
        'choose_from_most_used'      => 'Choose from the most used categories',
        'not_found'                  => 'No categories found',
        'menu_name'                  => 'Slider Categories',
    );

    $args = array(
        'labels'            => $labels,
        'public'            => true,
        'show_in_nav_menus' => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'hierarchical'      => true,
        'rewrite'           => array('slug' => 'slider-category'), // Customize the URL slug
    );

    register_taxonomy('slider_category', 'slider', $args);
}

add_action('init', 'create_slider_taxonomies');

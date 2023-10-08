<?php

// Add custom meta boxes to the 'slider' custom post type
function add_slider_meta_boxes() {
    add_meta_box(
        'slider_button_text', // Unique ID for the first meta box
        'Slider Button Text', // Box title for the first meta box
        'display_slider_button_text_meta_box', // Callback function for the first meta box
        'slider', // Custom post type where the first meta box should appear
        'normal', // Position: 'normal', 'advanced', or 'side'
        'default' // Priority: 'high' or 'low'
    );

    add_meta_box(
        'slider_button_url', // Unique ID for the second meta box
        'Slider Button URL', // Box title for the second meta box
        'display_slider_button_url_meta_box', // Callback function for the second meta box
        'slider', // Custom post type where the second meta box should appear
        'normal', // Position: 'normal', 'advanced', or 'side'
        'default' // Priority: 'high' or 'low'
    );
}

add_action('add_meta_boxes', 'add_slider_meta_boxes');

// Callback function to display the first custom meta box contents
function display_slider_button_text_meta_box($post) {
    // Retrieve the current value of the 'slider_button_text' meta field, if it exists
    $slider_button_text = get_post_meta($post->ID, 'slider_button_text', true);

    // Output the HTML for the first custom field
    ?>
    <p>
        <label for="slider_button_text">Slider Button Text:</label>
        <input type="text" id="slider_button_text" name="slider_button_text" value="<?php echo esc_attr($slider_button_text); ?>" />
    </p>
    <?php
}

// Callback function to display the second custom meta box contents
function display_slider_button_url_meta_box($post) {
    // Retrieve the current value of the 'slider_button_url' meta field, if it exists
    $slider_button_url = get_post_meta($post->ID, 'slider_button_url', true);

    // Output the HTML for the second custom field
    ?>
    <p>
        <label for="slider_button_url">Slider Button URL:</label>
        <input type="text" id="slider_button_url" name="slider_button_url" value="<?php echo esc_url($slider_button_url); ?>" />
    </p>
    <?php
}

// Save the custom meta box data when the 'slider' post is saved
function save_slider_custom_meta_boxes($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check if the 'slider_button_text' field was filled in and update the post's meta data
    if (isset($_POST['slider_button_text'])) {
        update_post_meta($post_id, 'slider_button_text', sanitize_text_field($_POST['slider_button_text']));
    }

    // Check if the 'slider_button_url' field was filled in and update the post's meta data
    if (isset($_POST['slider_button_url'])) {
        update_post_meta($post_id, 'slider_button_url', esc_url($_POST['slider_button_url']));
    }
}

add_action('save_post_slider', 'save_slider_custom_meta_boxes');

<?php

// Add custom meta box to the 'slider' custom post type
function add_slider_meta_box() {
    add_meta_box(
        'slider_facebook_url', // Unique ID
        'Facebook URL', // Box title
        'display_slider_meta_box', // Callback function to display the box contents
        'slider', // Custom post type where the meta box should appear
        'normal', // Position: 'normal', 'advanced', or 'side'
        'default' // Priority: 'high' or 'low'
    );
}

add_action('add_meta_boxes', 'add_slider_meta_box');

// Callback function to display the custom meta box contents
function display_slider_meta_box($post) {
    // Retrieve the current value of the 'facebook_url' custom field, if it exists
    $facebook_url = get_post_meta($post->ID, 'facebook_url', true);

    // Output the HTML for the custom field
    ?>
    <p>
        <label for="facebook_url">Facebook URL:</label>
        <input type="text" id="facebook_url" name="facebook_url" value="<?php echo esc_attr($facebook_url); ?>" />
    </p>
    <?php
}

// Save the custom meta box data when the 'slider' post is saved
function save_slider_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check if the 'facebook_url' field was filled in and update the post's meta data
    if (isset($_POST['facebook_url'])) {
        update_post_meta($post_id, 'facebook_url', esc_url($_POST['facebook_url']));
    }
}

add_action('save_post_slider', 'save_slider_meta_box');

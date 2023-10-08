<?php

// Add custom meta box to the 'slider' custom post type
function add_slider_button_text_meta_box() {
    add_meta_box(
        'slider_button_text', // Unique ID
        'Button Text', // Box title
        'display_slider_button_text_meta_box', // Callback function to display the box contents
        'slider', // Custom post type where the meta box should appear
        'normal', // Position: 'normal', 'advanced', or 'side'
        'default' // Priority: 'high' or 'low'
    );
}

add_action('add_meta_boxes', 'add_slider_button_text_meta_box');

// Callback function to display the custom meta box contents
function display_slider_button_text_meta_box($post) {
    // Retrieve the current value of the 'button_text' meta field, if it exists
    $button_text = get_post_meta($post->ID, 'button_text', true);

    // Output the HTML for the custom field
    ?>
    <p>
        <label for="button_text">Button Text:</label>
        <input type="text" id="button_text" name="button_text" value="<?php echo esc_attr($button_text); ?>" />
    </p>
    <?php
}

// Save the custom meta box data when the 'slider' post is saved
function save_slider_button_text_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check if the 'button_text' field was filled in and update the post's meta data
    if (isset($_POST['button_text'])) {
        update_post_meta($post_id, 'button_text', sanitize_text_field($_POST['button_text']));
    }
}

add_action('save_post_slider', 'save_slider_button_text_meta_box');

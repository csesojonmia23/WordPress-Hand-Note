<?php

// Add custom meta box to the 'slider' custom post type
function add_slider_image_meta_box() {
    add_meta_box(
        'slider_image',           // Unique ID
        'Slider Image',           // Box title
        'display_slider_image_meta_box', // Callback function to display the box contents
        'slider',                 // Custom post type where the meta box should appear
        'normal',                 // Position: 'normal', 'advanced', or 'side'
        'default'                 // Priority: 'high' or 'low'
    );
}

add_action('add_meta_boxes', 'add_slider_image_meta_box');

// Callback function to display the custom meta box contents
function display_slider_image_meta_box($post) {
    // Retrieve the current value of the 'slider_image' meta field, if it exists
    $slider_image = get_post_meta($post->ID, 'slider_image', true);

    // Output the HTML for the custom field
    ?>
    <p>
        <label for="slider_image">Slider Image:</label>
        <input type="text" id="slider_image" name="slider_image" value="<?php echo esc_attr($slider_image); ?>" />
        <input type="button" id="upload_slider_image" class="button" value="Upload Image" />
    </p>
    <script>
        jQuery(document).ready(function($){
            $('#upload_slider_image').click(function() {
                wp.media.editor.send.attachment = function(props, attachment) {
                    $('#slider_image').val(attachment.url);
                };
                wp.media.editor.open(this);
                return false;
            });
        });
    </script>
    <?php
}

// Save the custom meta box data when the 'slider' post is saved
function save_slider_image_meta_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    // Check if the 'slider_image' field was filled in and update the post's meta data
    if (isset($_POST['slider_image'])) {
        update_post_meta($post_id, 'slider_image', esc_url($_POST['slider_image']));
    }
}

add_action('save_post_slider', 'save_slider_image_meta_box');

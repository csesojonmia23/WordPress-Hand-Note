<?php

// Get the post ID of the specific post you want to retrieve the metabox value for
$post_id = 123; // Replace with the actual post ID

// Retrieve the value of the 'facebook_url' metabox field
$facebook_url = get_post_meta($post_id, 'facebook_url', true);

// Check if a value was found
if ($facebook_url) {
    echo 'Facebook URL: ' . esc_url($facebook_url);
} else {
    echo 'No Facebook URL found.';
}

// ============================================
// You have use only this values
// ============================================
<?php echo get_post_meta(get_the_ID(), 'facebook_url', true); ?>
<?php
// Get the attachment ID from the URL
$attachment_id = get_query_var('attachment_id');

// Get the image metadata
$image_metadata = wp_get_attachment_metadata($attachment_id);

// Display the image
if (wp_attachment_is_image($attachment_id)) {
    echo '<img src="' . wp_get_attachment_url($attachment_id) . '" alt="Image" />';
} else {
    echo 'This is not a valid image.';
}
?>

<!-- Add any additional HTML or PHP code here -->

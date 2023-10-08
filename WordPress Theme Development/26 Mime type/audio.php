<?php
// Get the post content
$post_content = get_the_content();

// Search for audio shortcodes or HTML5 audio tags in the post content
preg_match_all('/(\[audio[^\]]*\].*?\[\/audio\]|<audio[^\>]*>.*?<\/audio>)/s', $post_content, $matches);

if (!empty($matches[0])) {
    // Display each audio shortcode or HTML5 audio tag found
    foreach ($matches[0] as $audio_tag) {
        echo $audio_tag;
    }
} else {
    echo 'No audio found in this post.';
}
?>

<!-- Add any additional HTML or PHP code here -->

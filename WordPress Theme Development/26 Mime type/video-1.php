<?php
/*
 * Template Name: Video Template
 * Description: A custom template for displaying video content.
 */

get_header();
?>

<main id="main" class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    // Check if there's a video URL attached to this post
                    $video_url = get_field('video_url'); // Assuming you're using ACF

                    if ($video_url) {
                        // Display video embed code
                        echo '<div class="video-container">' . wp_oembed_get($video_url) . '</div>';
                    } else {
                        // Display a message if no video URL is attached
                        echo '<p>No video available.</p>';
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

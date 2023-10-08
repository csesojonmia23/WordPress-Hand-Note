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
                    // Check if there's a video file attached to this post
                    $video_file = get_field('video_file'); // Assuming you're using ACF

                    if ($video_file) {
                        // Display video player
                        echo '<video controls>';
                        echo '<source src="' . $video_file['url'] . '" type="' . $video_file['mime_type'] . '">';
                        echo 'Your browser does not support the video tag.';
                        echo '</video>';
                    } else {
                        // Display a message if no video file is attached
                        echo '<p>No video file available.</p>';
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

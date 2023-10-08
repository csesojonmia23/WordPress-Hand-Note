<?php
/*
 * Template Name: Audio Template
 * Description: A custom template for displaying audio content.
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
                    // Check if there's an audio file attached to this post
                    $audio_file = get_field('audio_file'); // Assuming you're using ACF

                    if ($audio_file) {
                        // Display audio player
                        echo do_shortcode('[audio src="' . $audio_file['url'] . '"]');
                    } else {
                        // Display a message if no audio file is attached
                        echo '<p>No audio file available.</p>';
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

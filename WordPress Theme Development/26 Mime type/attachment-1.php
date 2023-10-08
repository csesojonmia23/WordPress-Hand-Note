<?php
/**
 * The template for displaying attachment
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>

<main id="primary" class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    // Check if it's an image attachment
                    if (wp_attachment_is_image()) {
                        echo wp_get_attachment_image(get_the_ID(), 'large'); // Display large size image
                    } else {
                        // For other types of attachments (videos, audio, etc.)
                        echo wp_get_attachment_link(get_the_ID(), 'full'); // Display link to the attachment
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div><!-- .container -->
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
?>

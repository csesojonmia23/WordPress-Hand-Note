<?php
/**
 * Template Name: Image Template
 *
 * This is a custom template for displaying individual images.
 *
 * @package YourTheme
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
                    // Display the image attachment.
                    if (has_post_thumbnail()) {
                        the_post_thumbnail('full');
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

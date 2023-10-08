<?php
/**
 * The template for the blog index (home) page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 * @package YourThemeName
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php if (have_posts()) : ?>

            <?php
            // Start the loop.
            while (have_posts()) :
                the_post();

                // Include the template part for displaying the post content.
                get_template_part('template-parts/content', get_post_format());

            // End the loop.
            endwhile;

            // Previous/next page navigation.
            the_posts_pagination(array(
                'prev_text' => __('Previous', 'your-theme-textdomain'),
                'next_text' => __('Next', 'your-theme-textdomain'),
            ));

        else :
            // If no content, include the "No posts found" template.
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

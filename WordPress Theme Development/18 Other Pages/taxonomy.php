<?php
/**
 * The template for displaying taxonomy archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package YourThemeName
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="page-header">
            <?php
            the_archive_title('<h1 class="page-title">', '</h1>');
            the_archive_description('<div class="archive-description">', '</div>');
            ?>
        </header>

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();

                // Include content template for each post
                get_template_part('template-parts/content', get_post_format());

            endwhile;

            the_posts_navigation();

        else :
            get_template_part('template-parts/content', 'none');

        endif;
        ?>

    </main><!-- #main -->
</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

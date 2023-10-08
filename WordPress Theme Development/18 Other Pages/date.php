<?php
/**
 * The template for displaying date-based archive pages.
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
            if (is_day()) :
                printf('<h1 class="page-title">%s</h1>', get_the_date('F j, Y'));
            elseif (is_month()) :
                printf('<h1 class="page-title">%s</h1>', get_the_date('F Y'));
            elseif (is_year()) :
                printf('<h1 class="page-title">%s</h1>', get_the_date('Y'));
            else :
                _e('Archives', 'yourthemename');
            endif;
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



<!-- =============================================================== -->
<!-- =============================================================== -->
<!-- OR -->
<!-- =============================================================== -->



<?php
/**
 * The template for displaying date-based archives.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package YourThemeName
 */

get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <header class="page-header">
            <h1 class="page-title"><?php
                if (is_day()) :
                    printf(__('Daily Archives: %s', 'textdomain'), get_the_date());
                elseif (is_month()) :
                    printf(__('Monthly Archives: %s', 'textdomain'), get_the_date('F Y'));
                elseif (is_year()) :
                    printf(__('Yearly Archives: %s', 'textdomain'), get_the_date('Y'));
                else :
                    _e('Archives', 'textdomain');
                endif;
                ?></h1>
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


<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <span class="posted-on">
                            Posted on <?php echo get_the_date(); ?>
                        </span>
                        <span class="byline">
                            by <?php the_author_posts_link(); ?>
                        </span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_content(); ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    if (has_category()) {
                        echo '<div class="cat-links">';
                        the_category(', ');
                        echo '</div>';
                    }
                    if (has_tag()) {
                        echo '<div class="tags-links">';
                        the_tags('', ', ', '');
                        echo '</div>';
                    }
                    ?>
                </footer>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

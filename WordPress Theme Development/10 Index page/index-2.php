<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>

                <article <?php post_class(); ?>>
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    </header>

                    <div class="entry-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>

            <?php endwhile; ?>
               <!-- Pagination -->
            <div class="pagination">
                <?php
                the_posts_pagination(array(
                    'prev_text' => __('Previous', 'your-theme-textdomain'),
                    'next_text' => __('Next', 'your-theme-textdomain'),
                ));
                ?>
            </div>

        <?php else : ?>

            <p><?php _e('Sorry, no posts were found.', 'your-theme-textdomain'); ?></p>

        <?php endif; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

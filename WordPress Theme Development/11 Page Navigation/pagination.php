<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <!-- Your post content here -->
            <?php endwhile; ?>

            <!-- Add pagination links -->
            <div class="pagination">
                <?php the_posts_pagination(array(
                    'prev_text' => __('Previous', 'your-theme-textdomain'),
                    'next_text' => __('Next', 'your-theme-textdomain'),
                )); ?>
            </div>

        <?php else : ?>
            <p><?php _e('Sorry, no posts were found.', 'your-theme-textdomain'); ?></p>
        <?php endif; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

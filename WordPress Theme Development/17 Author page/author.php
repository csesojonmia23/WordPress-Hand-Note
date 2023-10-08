<?php get_header(); ?>

<section id="author-archive">
    <?php
    // Get the author's display name
    $author_display_name = get_the_author();
    ?>
    <h1><?php echo esc_html($author_display_name); ?></h1>

    <?php
    // Start the loop
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-meta">
                    <span class="date"><?php the_time('F j, Y'); ?></span>
                    <span class="author"><?php echo esc_html($author_display_name); ?></span>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
            </article>
        <?php endwhile; ?>

        <!-- Pagination links -->
        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

    <?php else : ?>
        <p><?php esc_html_e('No posts by this author.', 'your-theme-textdomain'); ?></p>
    <?php endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

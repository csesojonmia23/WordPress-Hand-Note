<?php get_header(); ?>

<section id="attachment">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1 class="entry-title"><?php the_title(); ?></h1>

            <div class="entry-content">
                <?php
                // Check if the attachment is an image
                if (wp_attachment_is_image()) {
                    echo wp_get_attachment_image(get_the_ID(), 'large'); // 'large' is the image size
                }
                ?>

                <?php the_content(); ?>

                <p>File size: <?php echo size_format(filesize(get_attached_file())); ?></p>
            </div>

            <div class="entry-meta">
                <span class="date"><?php the_date(); ?></span>
                <span class="author"><?php the_author(); ?></span>
            </div>
        </article>

    <?php endwhile; endif; ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

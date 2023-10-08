<?php get_header(); ?>

<main id="main" class="site-main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </header>

                <div class="entry-content">
                    <?php
                    $image = get_field('custom_image_field'); // Assuming you're using Advanced Custom Fields or similar
                    if ($image) {
                        echo '<img src="' . $image['url'] . '" alt="' . $image['alt'] . '" />';
                    }
                    ?>
                </div>
            </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

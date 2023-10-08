<?php 
/*
Template Name: Custom Page with Sidebar
Template Post Type: page
*/
get_header(); ?>

<div id="content" class="container">
    <div class="row">
        <div class="col-md-8">
            <!-- Main content area -->
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php the_content(); ?>
                </article>
            <?php endwhile; ?>
        </div>
        <div class="col-md-4">
            <!-- Sidebar -->
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>

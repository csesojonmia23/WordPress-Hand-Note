<?php 
/*
Template Name: Full Width Page
Template Post Type: page
*/
get_header(); ?>

<div id="full-width-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Your custom content goes here -->
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <?php the_content(); ?>
                    </article>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
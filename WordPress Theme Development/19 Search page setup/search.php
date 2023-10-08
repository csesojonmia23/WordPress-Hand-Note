<?php
// ==========================================
// The template for displaying Search Resealt
<?php get_header(); ?>

// Body Area Section
     <section id="body_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-9">
                         <div class="search_title">
                              <h1 class="title">
                                   <?php printf(__('Search Result For : %s', 'lazycoder'), get_search_query()); ?>
                              </h1>
                         </div>

                         // Search result show here
                         <?php get_template_part('template_part/post_setup') ?>
                    </div>

                    // Sidebar
                    <div class="col-md-3">
                         <?php get_sidebar(); ?>
                    </div>
               </div>
          </div>
     </section>

<?php get_footer(); ?>


// =====================================
// Use this code template_part/post_setup.php file
// =====================================
<?php
          if(have_posts()) :
          while(have_posts()): the_post();
      ?>
     
     <div class="blog_area">
          <div class="post_thumb">
               // Post thumbnail
               <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
          </div>

          <div class="post_details">
               // Post title
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               // Post content
               <?php the_content(); ?>
          </div>
     </div>
     
     <?php
          endwhile;
                else:
                     _e('No Post Found.');
          endif;
     ?>


     
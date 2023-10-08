// =======================================
// Use this code post_setup.php
// =======================================
<?php
          if(have_posts()) :
          while(have_posts()): the_post();
      ?>
     
     <div class="blog_area">
          // Post thumbnail
          <div class="post_thumb">
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
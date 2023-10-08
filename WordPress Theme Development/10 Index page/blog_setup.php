<?php

// ==========================================
// Use this code template_part/blog_setup.php
// ==========================================
     <?php
          if(have_posts()) :
          while(have_posts()): the_post();
      ?>
     
     <div class="blog_area">
          <div class="post_thumb">
               <a href="<?php the_permalink(); ?>"><?php echo the_post_thumbnail('post-thumbnails'); ?></a>
          </div>


          <div class="post_details">
               <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
               <?php the_excerpt(); ?>
          </div>
     </div>
     
     <?php
          endwhile;
               else:
               _e('No Post Found.');
          endif;
     ?>

     // Post page Navigation
     <div id="page_nav">
          <?php if ('mia_pagenav') {mia_pagenav(); } else{ ?>
          <?php next_posts_link(); ?>
          <?php previous_posts_link(); ?>
          <?php } ?>
     </div>
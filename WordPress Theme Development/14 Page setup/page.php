<?php
// The template for displaying pages

// Use this code page.php
<?php get_header(); ?>
<!-- =====================
Body Area Section
====================== -->
     <section id="body_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-9">
                         <?php get_template_part('template_part/post_setup') ?>
                    </div>
                    <div class="col-md-3">
                         <?php get_sidebar(); ?>
                    </div>
               </div>
          </div>
     </section>
     
<!-- =====================
Footer Template File Calling
====================== -->
<?php
     get_footer();
?>

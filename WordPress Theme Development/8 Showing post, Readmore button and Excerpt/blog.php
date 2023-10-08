<?php
// =================================================
// Use this code blog page
// index.php
// =================================================
<div class="col-md-9">
<?php
// query_posts('post_type=post&post_status=publish&posts_per_page=-1&order=ASC&paged='. get_query_var('post')); 
if(have_posts()) :
while(have_posts()): the_post();
?>
  <div class="blog_area">
        <div class="post_thumb">
          <a href="<?php the_permalink(); ?>"><?php echo  the_post_thumbnail('post-thumbnails'); ?></a>
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
   Endif;
?>
</div>


<!-- Use it default.php -->
<?php
// =================================================
// Thumbnail image support function
// =================================================
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size('post-thumbnails', 970, 350, true);


// Post Read More Button Function and Excerpt Word Function
function lazy_excerpt_more($more){
     return '<br> <br> <a class="redmore" href="'.get_permalink().'">'.'Read More'. '</a>';
}
add_filter('excerpt_more', 'lazy_excerpt_more');

// Excerpt length
function mia_excerpt_length($length){
     return 40;
}
add_filter('excerpt_length', 'mia_excerpt_length', 999);


// Read more button css style
// custom.css
#body_area {
     padding: 45px 0;
}
#body_area .blog_area {
  width: 100%;
  margin-bottom: 30px;
  box-shadow: 0 0 3px black;
  padding: 10px 15px;
}
#body_area .post_thumb {
  overflow: hidden;
  width: 100%;
  margin-bottom: 15px;
}
#body_area .post_thumb img {
  transition: 0.5s;
  width: 100%;
  display: block;
}
#body_area .post_thumb:hover img {
  transform: scale(1.1);
}
#body_area .post_details {
  width: 100%;
}
#body_area .post_details h2 {
  font-family: "Roboto", sans-serif;
  font-weight: 700;
  font-size: 30px;
}
#body_area .post_details h2 a {
  color: #262626;
  text-decoration: none;
  transition: 0.5s;
}
#body_area .post_details h2 a:hover {
  color: #ea1a70;
}

//Read More Button CSS
a.redmore {
  background: #ea1a70;
  text-decoration: none;
  color: #fff;
  display: inline-block;
  padding: 10px 25px;
  border-radius: 5px;
  transition: 0.5s;
}
a.redmore:hover {
  background:#222;
}


// =================================================
// Page Navigation
// =================================================
// default.php
function mia_pagenav(){
     global $wp_query, $wp_rewrite;
     $pages ='';
     $max = $wp_query->max_num_pages;
     if(!$current = get_query_var('paged')) $current = 1;
     $args['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
     $args['total'] = $max;
     $args['current'] = $current;
     $total = 1;
     $args['prev_text'] = 'Prev';
     $args['next_text'] = 'Next';
     if ($max > 1) echo '</pre>
       <div class="wp_pagenav">';
         if ($total == 1 && $max > 1) $pages = '<p class="pages"> Page ' .$current . '<span>of</span>' . $max . '</p>';
         echo $pages . paginate_links($args);
         if ($max > 1 ) echo '</div><pre>';
   }


// index.php
<div id="page_nav">
<?php if ('mia_pagenav') {mia_pagenav(); } else{ ?>
       <?php next_posts_link(); ?>
       <?php previous_posts_link(); ?>
<?php } ?>
</div>

// Page navigation styling
// custom.css
#page_nav p.pages {
     background: #ea1a70;
     color: #fff;
     padding: 5px 10px;
   }
   #page_nav p.pages span {
     display: inline-block;
     padding: 0 5px;
   }
   #page_nav .page-numbers {
     background: #ea1a70;
     color: #fff;
     display: inline-block;
     text-decoration: none;
     padding: 5px 10px;
     margin-right: 5px;
     transition: 0.5s;
   }
   #page_nav .page-numbers.current,
   #page_nav .page-numbers:hover {
     background: #262626;
   }
   
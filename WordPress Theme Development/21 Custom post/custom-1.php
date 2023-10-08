<?php
// ================================
// Use this code custom_post.php
function custom_service(){
     register_post_type ('service',
     array(
          'labels' => array(
          'name' => ('Services'),
          'singular_name' => ('Service'),
          'add_new' => ('Add New Service'),
          'add_new_item' => ('Add New Service'),
          'edit_item' => ('Edit Service'),
          'new_item' => ('New Service'),
          'view_item' => ('View Service'),
          'not_found' => ('Sorry, we cound\'n find the service you are looking for.'),
          ),
          'menu_icon' => 'dashicons-networking',
          'public' => true,
          'publicly_queryable' => true,
          'exclude_from_search' => true,
          'menu_position' => 5,
          'has_archive' => true,
          'hierarchial' => true,
          'show_ui' => true,
          'capability_type' => 'post',
          'taxonomies' => array ('category'),
          'rewrite' => array('slag' => 'service'),
          'supports' => array('title', 'thumbnail', 'editor', 'excerpt'),
          )
     );
     add_theme_support('post-thumbnails');
}
add_action('init', 'custom_service');


// =================================
// Custom Post Category Customization
function query_post_type($query){
  if(is_category() ){
    $post_type = get_query_var('post_type');
    if($post_type){
      $post_type = $post_type;
    } else {
      $post_type = array ('post', 'service');
      $query -> set('post_type', $post_type);
      return $query;
    }
  }
}
add_filter('pre_get_posts', 'query_post_type');


// ============================================
// Use this code where show custom post
<?php
          // Custom query
        <?php
        query_posts('post_type=service&post_status=publish&posts_per_page=3&order=ASC&paged='. get_query_var('post'));

        if(have_posts()) :
          while(have_posts()) : the_post();
        ?>

        <div class="col-md-4">
               <div class="child_service">
                    // Post title
                    <h2><?php the_title(); ?></h2>
                    // Post thumbnail
                    <?php echo the_post_thumbnail('service') ?>
                    // Post excerpt
                    <?php the_excerpt(  ); ?>

               </div>
        </div>

        <?php
          endwhile;
          endif;
        ?>



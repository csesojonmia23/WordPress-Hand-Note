<?php

function custom_settings_init(){
     add_settings_field(
          'top_header_field',
          'Top Header',
          'top_header_field_callback',
          'general' // writing, reading, discussion, Media etc.
      );

     register_setting('general', 'top_header_field');
}
add_action('admin_init', 'custom_settings_init');

// Callback Funciton
function top_header_field_callback(){
     ?>
          <input type="text" class="regular-text" name="top_header_field" id="top_header_field" value="<?php echo get_option('top_header_field'); ?>">
     <?php
}


// Showing value
<h3><?php echo get_option('top_header_field'); ?></h3>



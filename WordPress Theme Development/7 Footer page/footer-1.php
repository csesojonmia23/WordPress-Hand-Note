<!-- Use it theme_function.php -->

<!-- Copyright Text -->
<?php
function lazy_customize_register(){
  $wp_customize->add_section('lazy_footer_option', array(
     'title' => __('Footer Option', 'csesojonmia'),
     'description' => 'If you are interested in changing or updating your footer settings you can do it.'
   ));
 
   $wp_customize->add_setting('lazy_copyright_section', array(
     'default' => '&copy; Copyright 2023 | Lazy Coder BD',
   ));
 
   $wp_customize-> add_control('lazy_copyright_section', array(
     'label' => 'Copyright Text',
     'description' => 'If need you can update your copyright text from here',
     'setting' => 'lazy_copyright_section',
     'section' => 'lazy_footer_option',
   ));
    }
    add_action('customize_register', 'lazy_customize_register');

//footer.php
<footer id="footer_area">
     <section id="copyright_area">
          <div class="container">
               <div class="row">
                    <div class="col-md-12">
                         <p><?php echo get_theme_mod('lazy_copyright_section'); ?></p>
                    </div>
               </div>
          </div>
     </section>
</footer>

// Styling
// custom.css
#copyright_area {
     background: #292929;
     padding: 20px 0;
     color: #fff;
     text-align: center;
   }
   #copyright_area p {
     margin: 0;
     color: #fff;
     font-size: 15px;
   }
   #copyright_area p a {
     color: #ea1a70;
   }
   #copyright_area p a:hover {
     text-decoration: underline;
   }
   
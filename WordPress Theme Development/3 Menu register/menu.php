<?php
// menu_register.php
register_nav_menu('main_menu', __('Main Menu', 'lazycoder'));
// header.php
<?php wp_nav_menu(array('theme_location' =>'main_menu', 'menu_id' =>'nav_manu')); ?>


// Multi menu
function register_custom_menus() {
  register_nav_menus(array(
      'primary-menu' => __('Primary Menu', 'your-theme-textdomain'),
      'secondary-menu' => __('Secondary Menu', 'your-theme-textdomain'),
      // Add more menu locations as needed
  ));
}
add_action('after_setup_theme', 'register_custom_menus');


// Header.php
<nav id="primary-menu">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary-menu',
        'menu_class' => 'menu',
    ));
    ?>
</nav>


// =============================================
// Menu Styling
// custom.css
#main_menu{
  background-color: #1B1464;
}
#main_menu ul{
     margin: 0;
     padding: 0;
     list-style: none;
     text-align: right;
}
#main_menu ul li{
     display: inline-block;
     position: relative;
}
#main_menu ul li a{
     display: block;
     padding: 15px 20px;
     text-decoration: none;
     color: #fff;
     font-size: 15px;
     text-transform: uppercase;
}
#main_menu ul li a:hover{
     background-color: #009432;
}
/* Dropdown Menu */
#main_menu ul ul{
     position: absolute;
     left: 0;
     top: 47px;
     background-color: #1B1464;
     width: 250px;
     text-align: center;
     display: none;
     z-index: 999;
}
#main_menu ul ul li{
     display: block;
}
#main_menu ul ul li a{
     border-bottom: 1px solid #ddd;
}
#main_menu ul ul li:last-child a{
     border-bottom: 0px solid;
}
#main_menu ul li:hover ul{
     display: block;
}
#main_menu ul ul li a:hover{
     background-color: #009432;
}

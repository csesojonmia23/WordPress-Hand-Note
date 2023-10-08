<?php
// Language dynamic
<html <?php language_attributes(); ?> class="no-js">

// Meta charset dynamic
<meta charset="<?php bloginfo('charset') ?>">

// Default wordpress css load
<body <?php body_class(); ?>>

// Use this Header and Footer
<?php wp_head(); ?>
<?php wp_footer(); ?>
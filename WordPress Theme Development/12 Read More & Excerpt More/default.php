<?php

// Use this code default.php file
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
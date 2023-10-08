<?php
// =======================================================
//Built-in Shortcodes
//By default, WordPress includes the following shortcodes:

// [audio]
[audio src=""][/audio]
// [video]
[video src=""][/video]
// [caption]
[caption width=“450“]< img src=”#”/> Image [/caption]
// [gallery]
[gallery id=”32″]
// [playlist]
[playlist type =”video”]
// [embed]
[embed width=”450″ height=”320″]

// ==================================================
// Create WordPress Shordcode
// This shortcode for text
function basic_shortcoder(){
  return "Sojon is a web developer";
}
add_shortcode( 'sojon', 'basic_shortcoder');
// Use sortcode
// Syntax and example
[sojon] //shortcode name is 'sojon'

// This shortcode for button
function button_shortcode( $atts, $content = null ){
  $values = shortcode_atts( array (
    'url' => '#',
  ), $atts );
  return '<a class="button" href="'.esc_attr($values['url']) .'">' . $content . '</a>';
}
add_shortcode( 'button', 'button_shortcode');
// Use shortcode
// Syntax
[button url=""]button_text[/buttton]
// Example
[button url="https://www.sojonmiawebdeveloper.com"]Contact me[/button] //shortcode name is 'button'




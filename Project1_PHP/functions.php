<?php
function add_css()
{
   wp_register_style('styles', get_template_directory_uri() . '/styles.css', false,'1.1','all');
   wp_enqueue_style( 'styles');
   wp_register_style('navigationbar', get_template_directory_uri() . '/nav.css', false,'1.1','all');
   wp_enqueue_style( 'navigationbar');
   wp_register_style('slideshow', get_template_directory_uri() . '/slideshow.css', false,'1.1','all');
   wp_enqueue_style( 'slideshow');
}
add_action('wp_enqueue_scripts', 'add_css');

function add_script()
{
   wp_register_script('js-script', get_template_directory_uri() . '/script.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
}
add_action('wp_enqueue_scripts', 'add_script');


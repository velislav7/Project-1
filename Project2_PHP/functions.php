<?php

function anaction_theme_support(){
   //adds dynamic title tag support
   add_theme_support('title-tag');
   add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'anaction_theme_support');



function anaction_register_styles()
{
   $version = wp_get_theme()->get( 'Version' );
   wp_enqueue_style('anaction-styles', get_template_directory_uri() . "/assets/css/styles.css", array(), $version, 'all');
    wp_enqueue_style('anaction-navigation', get_template_directory_uri() . "/assets/css/nav.css", array(), $version, 'all');
    wp_enqueue_style('anaction-images-grid', get_template_directory_uri() . "/assets/css/images-grid.css", array(), $version, 'all');
    wp_enqueue_style('anaction-styles2', get_template_directory_uri() . "/assets/css/styles2.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'anaction_register_styles');



?>